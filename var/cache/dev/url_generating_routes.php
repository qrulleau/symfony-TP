<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'customers' => [[], ['_controller' => 'App\\Controller\\CustomerController::customers'], [], [['text', '/customers']], [], [], []],
    'customer' => [['slug'], ['_controller' => 'App\\Controller\\CustomerController::customer'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/customer']], [], [], []],
    'deletecustomer' => [['slug'], ['_controller' => 'App\\Controller\\CustomerController::deleteCustomer'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/deletecustomer']], [], [], []],
    'updatecustomer' => [['slug'], ['_controller' => 'App\\Controller\\CustomerController::updateCustomer'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/updatecustomer']], [], [], []],
    'insertcustomer' => [['slug'], ['_controller' => 'App\\Controller\\CustomerController::insertCustomer'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/insertcustomer']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::hosts'], [], [['text', '/']], [], [], []],
    'hosts' => [[], ['_controller' => 'App\\Controller\\HostController::hosts'], [], [['text', '/hosts']], [], [], []],
    'host' => [['slug'], ['_controller' => 'App\\Controller\\HostController::host'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/host']], [], [], []],
    'deletehost' => [['slug'], ['_controller' => 'App\\Controller\\HostController::deleteHost'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/deletehost']], [], [], []],
    'updatehost' => [['slug'], ['_controller' => 'App\\Controller\\HostController::updateHost'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/updatehost']], [], [], []],
    'inserthost' => [['slug'], ['_controller' => 'App\\Controller\\HostController::insertHost'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/inserthost']], [], [], []],
    'projects' => [[], ['_controller' => 'App\\Controller\\ProjectController::projects'], [], [['text', '/projects']], [], [], []],
    'project' => [['slug'], ['_controller' => 'App\\Controller\\ProjectController::project'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/project']], [], [], []],
    'deleteproject' => [['slug'], ['_controller' => 'App\\Controller\\ProjectController::deleteProject'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/deleteproject']], [], [], []],
    'updateproject' => [['slug'], ['_controller' => 'App\\Controller\\ProjectController::updateProject'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/updateproject']], [], [], []],
    'insertproject' => [['slug'], ['_controller' => 'App\\Controller\\ProjectController::insertProject'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/insertproject']], [], [], []],
];
