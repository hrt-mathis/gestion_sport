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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/pilot' => [[['_route' => 'pilot_index', '_controller' => 'App\\Controller\\Admin\\PilotController::index'], null, ['GET' => 0], null, true, false, null]],
        '/pilot/new' => [[['_route' => 'pilot_new', '_controller' => 'App\\Controller\\Admin\\PilotController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/stable' => [[['_route' => 'stable_index', '_controller' => 'App\\Controller\\Admin\\StableController::index'], null, ['GET' => 0], null, true, false, null]],
        '/stable/new' => [[['_route' => 'stable_new', '_controller' => 'App\\Controller\\Admin\\StableController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/championship' => [[['_route' => 'championship_index', '_controller' => 'App\\Controller\\ChampionshipController::index'], null, ['GET' => 0], null, true, false, null]],
        '/championship/new' => [[['_route' => 'championship_new', '_controller' => 'App\\Controller\\ChampionshipController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/pilot/([^/]++)(?'
                    .'|(*:187)'
                    .'|/edit(*:200)'
                    .'|(*:208)'
                .')'
                .'|/stable/([^/]++)(?'
                    .'|(*:236)'
                    .'|/edit(*:249)'
                    .'|(*:257)'
                .')'
                .'|/championship/([^/]++)(?'
                    .'|(*:291)'
                    .'|/edit(*:304)'
                    .'|(*:312)'
                .')'
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
        187 => [[['_route' => 'pilot_show', '_controller' => 'App\\Controller\\Admin\\PilotController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        200 => [[['_route' => 'pilot_edit', '_controller' => 'App\\Controller\\Admin\\PilotController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        208 => [[['_route' => 'pilot_delete', '_controller' => 'App\\Controller\\Admin\\PilotController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        236 => [[['_route' => 'stable_show', '_controller' => 'App\\Controller\\Admin\\StableController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        249 => [[['_route' => 'stable_edit', '_controller' => 'App\\Controller\\Admin\\StableController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        257 => [[['_route' => 'stable_delete', '_controller' => 'App\\Controller\\Admin\\StableController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        291 => [[['_route' => 'championship_show', '_controller' => 'App\\Controller\\ChampionshipController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        304 => [[['_route' => 'championship_edit', '_controller' => 'App\\Controller\\ChampionshipController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        312 => [
            [['_route' => 'championship_delete', '_controller' => 'App\\Controller\\ChampionshipController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
