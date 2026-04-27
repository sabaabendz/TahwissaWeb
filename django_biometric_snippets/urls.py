from django.urls import path

from . import views

urlpatterns = [
    path("verify-human/", views.verify_human, name="verify_human"),
    path("verify-human/api/", views.verify_human_api, name="verify_human_api"),
]
