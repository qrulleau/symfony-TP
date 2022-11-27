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
        '/customers' => [[['_route' => 'customers', '_controller' => 'App\\Controller\\CustomerController::customers'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::hosts'], null, null, null, false, false, null]],
        '/hosts' => [[['_route' => 'hosts', '_controller' => 'App\\Controller\\HostController::hosts'], null, null, null, false, false, null]],
        '/projects' => [[['_route' => 'projects', '_controller' => 'App\\Controller\\ProjectController::projects'], null, null, null, false, false, null]],
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
                .'|/customer/([^/]++)(*:187)'
                .'|/delete(?'
                    .'|customer/([^/]++)(*:222)'
                    .'|host/([^/]++)(*:243)'
                    .'|project/([^/]++)(*:267)'
                .')'
                .'|/update(?'
                    .'|customer/([^/]++)(*:303)'
                    .'|host/([^/]++)(*:324)'
                    .'|project/([^/]++)(*:348)'
                .')'
                .'|/insert(?'
                    .'|customer/([^/]++)(*:384)'
                    .'|host/([^/]++)(*:405)'
                    .'|project/([^/]++)(*:429)'
                .')'
                .'|/host/([^/]++)(*:452)'
                .'|/project/([^/]++)(*:477)'
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
        187 => [[['_route' => 'customer', '_controller' => 'App\\Controller\\CustomerController::customer'], ['slug'], ['GET' => 0], null, false, true, null]],
        222 => [[['_route' => 'deletecustomer', '_controller' => 'App\\Controller\\CustomerController::deleteCustomer'], ['slug'], ['GET' => 0], null, false, true, null]],
        243 => [[['_route' => 'deletehost', '_controller' => 'App\\Controller\\HostController::deleteHost'], ['slug'], ['GET' => 0], null, false, true, null]],
        267 => [[['_route' => 'deleteproject', '_controller' => 'App\\Controller\\ProjectController::deleteProject'], ['slug'], ['GET' => 0], null, false, true, null]],
        303 => [[['_route' => 'updatecustomer', '_controller' => 'App\\Controller\\CustomerController::updateCustomer'], ['slug'], ['GET' => 0], null, false, true, null]],
        324 => [[['_route' => 'updatehost', '_controller' => 'App\\Controller\\HostController::updateHost'], ['slug'], ['GET' => 0], null, false, true, null]],
        348 => [[['_route' => 'updateproject', '_controller' => 'App\\Controller\\ProjectController::updateProject'], ['slug'], ['GET' => 0], null, false, true, null]],
        384 => [[['_route' => 'insertcustomer', '_controller' => 'App\\Controller\\CustomerController::insertCustomer'], ['slug'], ['GET' => 0], null, false, true, null]],
        405 => [[['_route' => 'inserthost', '_controller' => 'App\\Controller\\HostController::insertHost'], ['slug'], ['GET' => 0], null, false, true, null]],
        429 => [[['_route' => 'insertproject', '_controller' => 'App\\Controller\\ProjectController::insertProject'], ['slug'], ['GET' => 0], null, false, true, null]],
        452 => [[['_route' => 'host', '_controller' => 'App\\Controller\\HostController::host'], ['slug'], ['GET' => 0], null, false, true, null]],
        477 => [
            [['_route' => 'project', '_controller' => 'App\\Controller\\ProjectController::project'], ['slug'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
