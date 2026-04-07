<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/voyage' => [[['_route' => 'admin_voyage_index', '_controller' => 'App\\Controller\\AdminController::voyageIndex'], null, null, null, false, false, null]],
        '/admin/voyage/new' => [[['_route' => 'admin_voyage_new', '_controller' => 'App\\Controller\\AdminController::voyageNew'], null, null, null, false, false, null]],
        '/admin/reservation' => [[['_route' => 'admin_reservation_index', '_controller' => 'App\\Controller\\AdminController::reservationIndex'], null, null, null, false, false, null]],
        '/admin/reservation/new' => [[['_route' => 'admin_reservation_new', '_controller' => 'App\\Controller\\AdminController::reservationNew'], null, null, null, false, false, null]],
        '/admin/evenement' => [[['_route' => 'admin_evenement_index', '_controller' => 'App\\Controller\\AdminController::evenementIndex'], null, null, null, false, false, null]],
        '/admin/evenement/new' => [[['_route' => 'admin_evenement_new', '_controller' => 'App\\Controller\\AdminController::evenementNew'], null, null, null, false, false, null]],
        '/admin/reclamation' => [[['_route' => 'admin_reclamation_index', '_controller' => 'App\\Controller\\AdminController::reclamationIndex'], null, null, null, false, false, null]],
        '/admin/reservation-evenement' => [[['_route' => 'admin_reservation_evenement_index', '_controller' => 'App\\Controller\\AdminController::reservationEvenementIndex'], null, null, null, false, false, null]],
        '/admin/reservation-evenement/new' => [[['_route' => 'admin_reservation_evenement_new', '_controller' => 'App\\Controller\\AdminController::reservationEvenementNew'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'admin_user_index', '_controller' => 'App\\Controller\\AdminController::userIndex'], null, null, null, false, false, null]],
        '/admin/user/new' => [[['_route' => 'admin_user_new', '_controller' => 'App\\Controller\\AdminController::userNew'], null, null, null, false, false, null]],
        '/admin/statistiques' => [[['_route' => 'admin_statistiques', '_controller' => 'App\\Controller\\AdminController::statistiques'], null, null, null, false, false, null]],
        '/agent/voyage' => [[['_route' => 'agent_voyage_index', '_controller' => 'App\\Controller\\AgentController::voyageIndex'], null, null, null, false, false, null]],
        '/agent/voyage/new' => [[['_route' => 'agent_voyage_new', '_controller' => 'App\\Controller\\AgentController::voyageNew'], null, null, null, false, false, null]],
        '/agent/reservation' => [[['_route' => 'agent_reservation_index', '_controller' => 'App\\Controller\\AgentController::reservationIndex'], null, null, null, false, false, null]],
        '/agent/reservation/new' => [[['_route' => 'agent_reservation_new', '_controller' => 'App\\Controller\\AgentController::reservationNew'], null, null, null, false, false, null]],
        '/agent/evenement' => [[['_route' => 'agent_evenement_index', '_controller' => 'App\\Controller\\AgentController::evenementIndex'], null, null, null, false, false, null]],
        '/agent/evenement/new' => [[['_route' => 'agent_evenement_new', '_controller' => 'App\\Controller\\AgentController::evenementNew'], null, null, null, false, false, null]],
        '/agent/reservation-evenement' => [[['_route' => 'agent_reservation_evenement_index', '_controller' => 'App\\Controller\\AgentController::reservationEvenementIndex'], null, null, null, false, false, null]],
        '/agent/reservation-evenement/new' => [[['_route' => 'agent_reservation_evenement_new', '_controller' => 'App\\Controller\\AgentController::reservationEvenementNew'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\AuthController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\AuthController::logout'], null, null, null, false, false, null]],
        '/forgot-password' => [[['_route' => 'app_forgot_password', '_controller' => 'App\\Controller\\AuthController::forgotPassword'], null, null, null, false, false, null]],
        '/client/voyage' => [[['_route' => 'client_voyage_index', '_controller' => 'App\\Controller\\ClientController::voyageIndex'], null, null, null, false, false, null]],
        '/client/reservation' => [[['_route' => 'client_reservation_index', '_controller' => 'App\\Controller\\ClientController::reservationIndex'], null, null, null, false, false, null]],
        '/client/evenement' => [[['_route' => 'client_evenement_index', '_controller' => 'App\\Controller\\ClientController::evenementIndex'], null, null, null, false, false, null]],
        '/client/reservation-evenement' => [[['_route' => 'client_reservation_evenement_index', '_controller' => 'App\\Controller\\ClientController::reservationEvenementIndex'], null, null, null, false, false, null]],
        '/client/reclamation' => [[['_route' => 'client_reclamation_index', '_controller' => 'App\\Controller\\ClientController::reclamationIndex'], null, null, null, false, false, null]],
        '/client/reclamation/new' => [[['_route' => 'client_reclamation_new', '_controller' => 'App\\Controller\\ClientController::reclamationNew'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\HomeController::dashboard'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|voyage/(?'
                            .'|(\\d+)(*:70)'
                            .'|(\\d+)/edit(*:87)'
                            .'|(\\d+)/delete(*:106)'
                        .')'
                        .'|re(?'
                            .'|servation(?'
                                .'|/(?'
                                    .'|(\\d+)(*:141)'
                                    .'|(\\d+)/edit(*:159)'
                                    .'|(\\d+)/delete(*:179)'
                                    .'|(\\d+)/status/([^/]++)(*:208)'
                                    .'|(\\d+)/pdf(*:225)'
                                .')'
                                .'|\\-evenement/(?'
                                    .'|(\\d+)(*:254)'
                                    .'|(\\d+)/edit(*:272)'
                                    .'|(\\d+)/delete(*:292)'
                                    .'|(\\d+)/status/([^/]++)(*:321)'
                                .')'
                            .')'
                            .'|clamation/(?'
                                .'|(\\d+)(*:349)'
                                .'|(\\d+)/edit(*:367)'
                                .'|(\\d+)/delete(*:387)'
                                .'|(\\d+)/status/([^/]++)(*:416)'
                            .')'
                        .')'
                        .'|evenement/(?'
                            .'|(\\d+)(*:444)'
                            .'|(\\d+)/edit(*:462)'
                            .'|(\\d+)/delete(*:482)'
                        .')'
                        .'|user/(?'
                            .'|(\\d+)(*:504)'
                            .'|(\\d+)/edit(*:522)'
                            .'|(\\d+)/toggle\\-active(*:550)'
                            .'|(\\d+)/delete(*:570)'
                        .')'
                    .')'
                    .'|gent/(?'
                        .'|voyage/(?'
                            .'|(\\d+)(*:603)'
                            .'|(\\d+)/edit(*:621)'
                        .')'
                        .'|reservation(?'
                            .'|/(?'
                                .'|(\\d+)(*:653)'
                                .'|(\\d+)/edit(*:671)'
                                .'|(\\d+)/status/([^/]++)(*:700)'
                            .')'
                            .'|\\-evenement/(?'
                                .'|(\\d+)(*:729)'
                                .'|(\\d+)/edit(*:747)'
                                .'|(\\d+)/status/([^/]++)(*:776)'
                            .')'
                        .')'
                        .'|evenement/(?'
                            .'|(\\d+)(*:804)'
                            .'|(\\d+)/edit(*:822)'
                        .')'
                    .')'
                .')'
                .'|/client/(?'
                    .'|voyage/(\\d+)(*:856)'
                    .'|re(?'
                        .'|servation(?'
                            .'|/(?'
                                .'|new(?:/(\\d+))?(*:899)'
                                .'|(\\d+)(*:912)'
                                .'|(\\d+)/cancel(*:932)'
                            .')'
                            .'|\\-evenement/(?'
                                .'|new(?:/(\\d+))?(*:970)'
                                .'|(\\d+)(*:983)'
                                .'|(\\d+)/cancel(*:1003)'
                            .')'
                        .')'
                        .'|clamation/(?'
                            .'|(\\d+)(*:1032)'
                            .'|(\\d+)/delete(*:1053)'
                        .')'
                    .')'
                    .'|evenement/(\\d+)(*:1079)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        70 => [[['_route' => 'admin_voyage_show', '_controller' => 'App\\Controller\\AdminController::voyageShow'], ['id'], null, null, false, true, null]],
        87 => [[['_route' => 'admin_voyage_edit', '_controller' => 'App\\Controller\\AdminController::voyageEdit'], ['id'], null, null, false, false, null]],
        106 => [[['_route' => 'admin_voyage_delete', '_controller' => 'App\\Controller\\AdminController::voyageDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        141 => [[['_route' => 'admin_reservation_show', '_controller' => 'App\\Controller\\AdminController::reservationShow'], ['id'], null, null, false, true, null]],
        159 => [[['_route' => 'admin_reservation_edit', '_controller' => 'App\\Controller\\AdminController::reservationEdit'], ['id'], null, null, false, false, null]],
        179 => [[['_route' => 'admin_reservation_delete', '_controller' => 'App\\Controller\\AdminController::reservationDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        208 => [[['_route' => 'admin_reservation_status', '_controller' => 'App\\Controller\\AdminController::reservationStatus'], ['id', 'statut'], null, null, false, true, null]],
        225 => [[['_route' => 'admin_reservation_pdf', '_controller' => 'App\\Controller\\AdminController::reservationPdf'], ['id'], null, null, false, false, null]],
        254 => [[['_route' => 'admin_reservation_evenement_show', '_controller' => 'App\\Controller\\AdminController::reservationEvenementShow'], ['id'], null, null, false, true, null]],
        272 => [[['_route' => 'admin_reservation_evenement_edit', '_controller' => 'App\\Controller\\AdminController::reservationEvenementEdit'], ['id'], null, null, false, false, null]],
        292 => [[['_route' => 'admin_reservation_evenement_delete', '_controller' => 'App\\Controller\\AdminController::reservationEvenementDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        321 => [[['_route' => 'admin_reservation_evenement_status', '_controller' => 'App\\Controller\\AdminController::reservationEvenementStatus'], ['id', 'statut'], null, null, false, true, null]],
        349 => [[['_route' => 'admin_reclamation_show', '_controller' => 'App\\Controller\\AdminController::reclamationShow'], ['id'], null, null, false, true, null]],
        367 => [[['_route' => 'admin_reclamation_edit', '_controller' => 'App\\Controller\\AdminController::reclamationEdit'], ['id'], null, null, false, false, null]],
        387 => [[['_route' => 'admin_reclamation_delete', '_controller' => 'App\\Controller\\AdminController::reclamationDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        416 => [[['_route' => 'admin_reclamation_status', '_controller' => 'App\\Controller\\AdminController::reclamationStatus'], ['id', 'statut'], null, null, false, true, null]],
        444 => [[['_route' => 'admin_evenement_show', '_controller' => 'App\\Controller\\AdminController::evenementShow'], ['id'], null, null, false, true, null]],
        462 => [[['_route' => 'admin_evenement_edit', '_controller' => 'App\\Controller\\AdminController::evenementEdit'], ['id'], null, null, false, false, null]],
        482 => [[['_route' => 'admin_evenement_delete', '_controller' => 'App\\Controller\\AdminController::evenementDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        504 => [[['_route' => 'admin_user_show', '_controller' => 'App\\Controller\\AdminController::userShow'], ['id'], null, null, false, true, null]],
        522 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\AdminController::userEdit'], ['id'], null, null, false, false, null]],
        550 => [[['_route' => 'admin_user_toggle_active', '_controller' => 'App\\Controller\\AdminController::userToggleActive'], ['id'], null, null, false, false, null]],
        570 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\AdminController::userDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        603 => [[['_route' => 'agent_voyage_show', '_controller' => 'App\\Controller\\AgentController::voyageShow'], ['id'], null, null, false, true, null]],
        621 => [[['_route' => 'agent_voyage_edit', '_controller' => 'App\\Controller\\AgentController::voyageEdit'], ['id'], null, null, false, false, null]],
        653 => [[['_route' => 'agent_reservation_show', '_controller' => 'App\\Controller\\AgentController::reservationShow'], ['id'], null, null, false, true, null]],
        671 => [[['_route' => 'agent_reservation_edit', '_controller' => 'App\\Controller\\AgentController::reservationEdit'], ['id'], null, null, false, false, null]],
        700 => [[['_route' => 'agent_reservation_status', '_controller' => 'App\\Controller\\AgentController::reservationStatus'], ['id', 'statut'], null, null, false, true, null]],
        729 => [[['_route' => 'agent_reservation_evenement_show', '_controller' => 'App\\Controller\\AgentController::reservationEvenementShow'], ['id'], null, null, false, true, null]],
        747 => [[['_route' => 'agent_reservation_evenement_edit', '_controller' => 'App\\Controller\\AgentController::reservationEvenementEdit'], ['id'], null, null, false, false, null]],
        776 => [[['_route' => 'agent_reservation_evenement_status', '_controller' => 'App\\Controller\\AgentController::reservationEvenementStatus'], ['id', 'statut'], null, null, false, true, null]],
        804 => [[['_route' => 'agent_evenement_show', '_controller' => 'App\\Controller\\AgentController::evenementShow'], ['id'], null, null, false, true, null]],
        822 => [[['_route' => 'agent_evenement_edit', '_controller' => 'App\\Controller\\AgentController::evenementEdit'], ['id'], null, null, false, false, null]],
        856 => [[['_route' => 'client_voyage_show', '_controller' => 'App\\Controller\\ClientController::voyageShow'], ['id'], null, null, false, true, null]],
        899 => [[['_route' => 'client_reservation_new', 'voyageId' => null, '_controller' => 'App\\Controller\\ClientController::reservationNew'], ['voyageId'], null, null, false, true, null]],
        912 => [[['_route' => 'client_reservation_show', '_controller' => 'App\\Controller\\ClientController::reservationShow'], ['id'], null, null, false, true, null]],
        932 => [[['_route' => 'client_reservation_cancel', '_controller' => 'App\\Controller\\ClientController::reservationCancel'], ['id'], ['POST' => 0], null, false, false, null]],
        970 => [[['_route' => 'client_reservation_evenement_new', 'evenementId' => null, '_controller' => 'App\\Controller\\ClientController::reservationEvenementNew'], ['evenementId'], null, null, false, true, null]],
        983 => [[['_route' => 'client_reservation_evenement_show', '_controller' => 'App\\Controller\\ClientController::reservationEvenementShow'], ['id'], null, null, false, true, null]],
        1003 => [[['_route' => 'client_reservation_evenement_cancel', '_controller' => 'App\\Controller\\ClientController::reservationEvenementCancel'], ['id'], ['POST' => 0], null, false, false, null]],
        1032 => [[['_route' => 'client_reclamation_show', '_controller' => 'App\\Controller\\ClientController::reclamationShow'], ['id'], null, null, false, true, null]],
        1053 => [[['_route' => 'client_reclamation_delete', '_controller' => 'App\\Controller\\ClientController::reclamationDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        1079 => [
            [['_route' => 'client_evenement_show', '_controller' => 'App\\Controller\\ClientController::evenementShow'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
