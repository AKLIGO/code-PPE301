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
        '/admin/utilisateurs' => [[['_route' => 'Admin_Usersindex', '_controller' => 'App\\Controller\\Admin\\AdminController::index'], null, null, null, true, false, null]],
        '/Article' => [[['_route' => 'app_Articleindex', '_controller' => 'App\\Controller\\ArticleController::index'], null, null, null, true, false, null]],
        '/Articlecreate' => [[['_route' => 'app_Articleapp_creat', '_controller' => 'App\\Controller\\ArticleController::create'], null, null, null, false, false, null]],
        '/Articlelire' => [[['_route' => 'app_Articleapp_read', '_controller' => 'App\\Controller\\ArticleController::lire'], null, null, null, false, false, null]],
        '/' => [
            [['_route' => 'app_main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null],
            [['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null],
        ],
        '/profile' => [[['_route' => 'app_profileindex', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, true, false, null]],
        '/profile/commandes' => [[['_route' => 'app_profilecommandes', '_controller' => 'App\\Controller\\ProfileController::commandes'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/Article/create' => [[['_route' => 'app_article_create', '_controller' => 'App\\Controller\\ArticleController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/([^/]++)(*:178)'
                .'|/type/([^/]++)(*:200)'
                .'|/connexion(*:218)'
                .'|/logout(*:233)'
                .'|/([^/]++)(*:250)'
                .'|/type(*:263)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        178 => [[['_route' => 'app_typ_', '_controller' => 'App\\Controller\\TypCategoController::index'], ['slugg'], null, null, false, true, null]],
        200 => [[['_route' => 'app_type_list', '_controller' => 'App\\Controller\\TypeController::list'], ['slug'], null, null, false, true, null]],
        218 => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\UsersAuthenticatorController::login'], [], null, null, false, false, null]],
        233 => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\UsersAuthenticatorController::logout'], [], null, null, false, false, null]],
        250 => [[['_route' => 'list', '_controller' => 'App\\Controller\\essypeController::list'], ['slug'], null, null, false, true, null]],
        263 => [
            [['_route' => 'app_type_', '_controller' => 'App\\Controller\\TypeController::list'], [], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
