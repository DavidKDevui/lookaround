<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/dashBoardAdminForDavid' => [[['_route' => 'app_dashBoard', '_controller' => 'App\\Controller\\AdminController::dashBoard'], null, ['GET' => 0], null, false, false, null]],
        '/adminChoixCreneau' => [[['_route' => 'app_adminChoixCreneau', '_controller' => 'App\\Controller\\AdminController::adminChoixCreneau'], null, ['POST' => 0], null, false, false, null]],
        '/adminModifierCommande' => [[['_route' => 'app_adminModifierCommande', '_controller' => 'App\\Controller\\AdminController::adminModifierCommande'], null, ['POST' => 0], null, false, false, null]],
        '/adminRembourserCommande' => [[['_route' => 'app_adminSupprimerCommande', '_controller' => 'App\\Controller\\AdminController::adminSupprimerCommande'], null, ['POST' => 0], null, false, false, null]],
        '/adminPrestationRealise' => [[['_route' => 'app_adminPrestationRealise', '_controller' => 'App\\Controller\\AdminController::adminPrestationRealise'], null, ['POST' => 0], null, false, false, null]],
        '/adminProduitLivre' => [[['_route' => 'app_adminProduitLivre', '_controller' => 'App\\Controller\\AdminController::adminProduitLivre'], null, ['POST' => 0], null, false, false, null]],
        '/paymentSuccess' => [[['_route' => 'app_paymentSuccess', '_controller' => 'App\\Controller\\ClientController::paymentSuccess'], null, null, null, false, false, null]],
        '/paymentFailed' => [[['_route' => 'app_paymentFailed', '_controller' => 'App\\Controller\\ClientController::paymentFailed'], null, null, null, false, false, null]],
        '/getMailList' => [[['_route' => 'app_getMailList', '_controller' => 'App\\Controller\\ClientController::getMailList'], null, ['GET' => 0], null, false, false, null]],
        '/isVisiteExiste' => [[['_route' => 'app_isVisiteExiste', '_controller' => 'App\\Controller\\ClientController::isVisiteExiste'], null, ['POST' => 0], null, false, false, null]],
        '/envoyer-email' => [[['_route' => 'envoyer_email', '_controller' => 'App\\Controller\\ClientController::envoyerEmail'], null, ['POST' => 0], null, false, false, null]],
        '/mot-de-passe-reinitialise' => [[['_route' => 'mot_de_passe_reinitialise', '_controller' => 'App\\Controller\\ClientController::motDePasseReinitialise'], null, null, null, false, false, null]],
        '/lien-reinitialisation-envoye' => [[['_route' => 'lien_reinitialisation_envoye', '_controller' => 'App\\Controller\\ClientController::confirmationMotDePasse'], null, null, null, false, false, null]],
        '/api/cleanDatabases' => [[['_route' => 'cleanDatabases', '_controller' => 'App\\Controller\\ClientController::cleanDatabases'], null, null, null, false, false, null]],
        '/rdvPrisEnCompteMail' => [[['_route' => 'app_rdvPrisEnCompteMail', '_controller' => 'App\\Controller\\EmailController::rdvPrisEnCompteMail'], null, ['POST' => 0], null, false, false, null]],
        '/demandeDeNoteeMail' => [[['_route' => 'app_demandeDeNoteeMail', '_controller' => 'App\\Controller\\EmailController::demandeDeNoteeMail'], null, ['POST' => 0], null, false, false, null]],
        '/app_index_scroll' => [[['_route' => 'app_index_scroll', '_controller' => 'App\\Controller\\IndexController::app_index_scroll'], null, null, null, false, false, null]],
        '/app_index_scroll_aide' => [[['_route' => 'app_index_scroll_aide', '_controller' => 'App\\Controller\\IndexController::app_index_scroll_aide'], null, null, null, false, false, null]],
        '/nos-réalisations' => [[['_route' => 'app_realisations', '_controller' => 'App\\Controller\\IndexController::realisations'], null, null, null, false, false, null]],
        '/nos-tarifs' => [[['_route' => 'app_tarifs', '_controller' => 'App\\Controller\\IndexController::tarifs'], null, null, null, false, false, null]],
        '/qui-sommes-nous' => [[['_route' => 'app_quisommesnous', '_controller' => 'App\\Controller\\IndexController::quisommesnous'], null, null, null, false, false, null]],
        '/politique-confidentialité' => [[['_route' => 'app_politiqueconfidentialite', '_controller' => 'App\\Controller\\IndexController::app_politiqueconfidentialite'], null, null, null, false, false, null]],
        '/conditions-generales' => [[['_route' => 'app_conditionsgenerales', '_controller' => 'App\\Controller\\IndexController::app_conditionsgenerales'], null, null, null, false, false, null]],
        '/politique-cookies' => [[['_route' => 'app_politiquecookies', '_controller' => 'App\\Controller\\IndexController::app_politiquecookies'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'test', '_controller' => 'App\\Controller\\IndexController::test'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'reset_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\IndexController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/creerClient' => [[['_route' => 'creerClient', '_controller' => 'App\\Controller\\ClientController::creerClient'], null, ['POST' => 0], null, false, false, null]],
        '/getPhotos' => [[['_route' => 'getPhotos', '_controller' => 'App\\Controller\\DropboxController::getPhotos'], null, ['POST' => 0], null, false, false, null]],
        '/isFolderExists' => [[['_route' => 'testDrobpox', '_controller' => 'App\\Controller\\DropboxController::isFolderExists'], null, ['POST' => 0], null, false, false, null]],
        '/trouver-une-visite' => [[['_route' => 'pageVues', '_controller' => 'App\\Controller\\DropboxController::showPageVues'], null, null, null, false, false, null]],
        '/getPhotoForm' => [
            [['_route' => 'getPhotoForm', '_controller' => 'App\\Controller\\ClientController::getPhotoForm'], null, null, null, false, false, null],
            [['_route' => 'connexionClient', '_controller' => 'App\\Controller\\ClientController::connexionClient'], null, null, null, false, false, null],
        ],
        '/dropbox-auth-start' => [[['_route' => 'dropbox_auth_start'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:35)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:73)'
                    .'|wdt/([^/]++)(*:92)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:137)'
                            .'|router(*:151)'
                            .'|exception(?'
                                .'|(*:171)'
                                .'|\\.css(*:184)'
                            .')'
                        .')'
                        .'|(*:194)'
                    .')'
                .')'
                .'|/reinitialiser\\-mot\\-de\\-passe/([^/]++)(*:243)'
                .'|/vues/(\\d{8})(*:264)'
                .'|/(.*)(*:277)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        73 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        92 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        137 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        151 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        171 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        184 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        194 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        243 => [[['_route' => 'reinitialiser_mot_de_passe', '_controller' => 'App\\Controller\\ClientController::reinitialiserMotDePasse'], ['token'], null, null, false, true, null]],
        264 => [[['_route' => 'linkAccess', '_controller' => 'App\\Controller\\DropboxController::showPageVuesId'], ['id'], null, null, false, true, null]],
        277 => [
            [['_route' => 'error_404', '_controller' => 'App\\Controller\\ErrorPageController::error404'], ['wildcard'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
