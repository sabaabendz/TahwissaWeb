import { createBrowserRouter } from "react-router";
import { Layout } from "./components/Layout";
import { Home } from "./pages/Home";
import { Reservations } from "./pages/Reservations";
import { Transport } from "./pages/Transport";
import { Events } from "./pages/Events";
import { PointsOfInterest } from "./pages/PointsOfInterest";

export const router = createBrowserRouter([
  {
    path: "/",
    Component: Layout,
    children: [
      { index: true, Component: Home },
      { path: "reservations", Component: Reservations },
      { path: "transport", Component: Transport },
      { path: "evenements", Component: Events },
      { path: "points-interet", Component: PointsOfInterest },
    ],
  },
]);
