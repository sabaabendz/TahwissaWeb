import json
import subprocess
import sys
from functools import wraps
from pathlib import Path

from django.conf import settings
from django.http import JsonResponse
from django.shortcuts import redirect, render
from django.urls import reverse
from django.views.decorators.http import require_GET, require_POST


def require_human_verification(view_func):
    @wraps(view_func)
    def _wrapped(request, *args, **kwargs):
        if request.session.get("human_verified") is True:
            return view_func(request, *args, **kwargs)

        verify_url = reverse("verify_human")
        target = request.get_full_path()
        return redirect(f"{verify_url}?next={target}")

    return _wrapped


@require_GET
def verify_human(request):
    if request.session.get("human_verified") is True:
        next_url = request.GET.get("next") or reverse("register")
        return redirect(next_url)

    next_url = request.GET.get("next") or reverse("register")
    return render(request, "verify_human.html", {"next_url": next_url})


@require_POST
def verify_human_api(request):
    script_path = Path(settings.BASE_DIR) / "biometric" / "human_verification.py"

    if not script_path.exists():
        return JsonResponse(
            {
                "success": False,
                "message": f"Verification script not found: {script_path}",
            },
            status=500,
        )

    cmd = [sys.executable, str(script_path), "webcam"]

    try:
        proc = subprocess.run(
            cmd,
            capture_output=True,
            text=True,
            timeout=45,
            check=False,
            shell=False,
            cwd=str(Path(settings.BASE_DIR)),
        )
    except subprocess.TimeoutExpired:
        return JsonResponse(
            {
                "success": False,
                "message": "Verification timed out. Please retry.",
            },
            status=408,
        )
    except Exception:
        return JsonResponse(
            {
                "success": False,
                "message": "Unexpected error while starting verification.",
            },
            status=500,
        )

    raw_output = (proc.stdout or "").strip()
    if not raw_output:
        return JsonResponse(
            {
                "success": False,
                "message": "Verification script returned no output.",
                "stderr": (proc.stderr or "").strip(),
            },
            status=500,
        )

    try:
        result = json.loads(raw_output)
    except json.JSONDecodeError:
        return JsonResponse(
            {
                "success": False,
                "message": "Invalid JSON returned by verification script.",
                "stdout": raw_output,
                "stderr": (proc.stderr or "").strip(),
            },
            status=500,
        )

    success = bool(result.get("success", False))
    message = str(result.get("message", "Verification failed."))

    if success:
        request.session["human_verified"] = True
        request.session.modified = True

    return JsonResponse({"success": success, "message": message, "raw": result})
