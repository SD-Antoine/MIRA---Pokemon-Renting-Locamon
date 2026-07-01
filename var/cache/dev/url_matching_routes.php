<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/locamon' => [[['_route' => 'locamon.index', '_controller' => 'App\\Controller\\LocamonController::index'], null, null, null, false, false, null]],
        '/locamon/new' => [[['_route' => 'locamon.create', '_controller' => 'App\\Controller\\LocamonController::new'], null, null, null, false, false, null]],
        '/pokemons' => [[['_route' => 'pokemon.index', '_controller' => 'App\\Controller\\PokemonsController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\ShopController::index'], null, null, null, false, false, null]],
        '/shop' => [[['_route' => 'shop.index', '_controller' => 'App\\Controller\\ShopController::index'], null, null, null, false, false, null]],
        '/shop/webhook/stripe' => [[['_route' => 'shop.webhook_stripe', '_controller' => 'App\\Controller\\ShopController::webhookStripe'], null, ['POST' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'user.login', '_controller' => 'App\\Controller\\UserController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'user.logout', '_controller' => 'App\\Controller\\UserController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'user.register', '_controller' => 'App\\Controller\\UserController::register'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:37)'
                        .'|\\.well\\-known/genid/([^/]++)(*:72)'
                        .'|validation_errors/([^/]++)(*:105)'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:142)'
                    .'|/(?'
                        .'|contexts/([^.]+)(?:\\.(jsonld))?(*:185)'
                        .'|errors/(\\d+)(?:\\.([^/]++))?(*:220)'
                        .'|validation_errors/([^/]++)(?'
                            .'|(*:257)'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:299)'
                    .'|wdt/([^/]++)(*:319)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:361)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:398)'
                                .'|router(*:412)'
                                .'|exception(?'
                                    .'|(*:432)'
                                    .'|\\.css(*:445)'
                                .')'
                            .')'
                            .'|(*:455)'
                        .')'
                    .')'
                .')'
                .'|/locamon/(?'
                    .'|([^/]++)/(?'
                        .'|show(*:494)'
                        .'|edit(*:506)'
                    .')'
                    .'|manage/([^/]++)/delete(*:537)'
                .')'
                .'|/pokemon/([^/]++)(*:563)'
                .'|/shop/(?'
                    .'|(\\d+)(*:585)'
                    .'|(\\d+)/checkout(*:607)'
                    .'|(\\d+)/success(*:628)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        37 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => null, '_api_respond' => true], ['_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        72 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => true], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        105 => [[['_route' => 'api_validation_errors', '_controller' => 'api_platform.action.not_exposed'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        142 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => null, '_api_respond' => true, 'index' => 'index'], ['index', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        185 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => true], ['shortName', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        220 => [[['_route' => '_api_errors', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors', '_format' => null], ['status', '_format'], ['GET' => 0], null, false, true, null]],
        257 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem', '_format' => null], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra', '_format' => null], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi', '_format' => null], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_xml', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_xml', '_format' => null], ['id'], ['GET' => 0], null, false, true, null],
        ],
        299 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        319 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        361 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        398 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        412 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        432 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        445 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        455 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        494 => [[['_route' => 'locamon.show', '_controller' => 'App\\Controller\\LocamonController::show'], ['id'], null, null, false, false, null]],
        506 => [[['_route' => 'locamon.edit', '_controller' => 'App\\Controller\\LocamonController::edit'], ['id'], null, null, false, false, null]],
        537 => [[['_route' => 'locamon.delete', '_controller' => 'App\\Controller\\LocamonController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        563 => [[['_route' => 'pokemon.show', '_controller' => 'App\\Controller\\PokemonsController::show'], ['id'], null, null, false, true, null]],
        585 => [[['_route' => 'shop.show', '_controller' => 'App\\Controller\\ShopController::show'], ['id'], null, null, false, true, null]],
        607 => [[['_route' => 'shop.checkout', '_controller' => 'App\\Controller\\ShopController::checkout'], ['id'], ['POST' => 0], null, false, false, null]],
        628 => [
            [['_route' => 'shop.success', '_controller' => 'App\\Controller\\ShopController::success'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
