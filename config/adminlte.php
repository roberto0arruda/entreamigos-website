<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The default title of your admin panel, this goes into the title tag
    | of your page. You can override it per page with the title section.
    | You can optionally also specify a title prefix and/or postfix.
    |
    */

    'title' => 'Entre Amigos',

    'title_prefix' => 'EA - ',

    'title_postfix' => ' - Manaus',

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | This logo is displayed at the upper left corner of your admin panel.
    | You can use basic HTML here if you want. The logo has also a mini
    | variant, used for the mini side bar. Make it 3 letters or so
    |
    */

    'logo' => '<b>Entre Amigos</b>',

    'logo_mini' => '<b>EA</b>',

    /*
    |--------------------------------------------------------------------------
    | Skin Color
    |--------------------------------------------------------------------------
    |
    | Choose a skin color for your admin panel. The available skin colors:
    | blue, black, purple, yellow, red, and green. Each skin also has a
    | ligth variant: blue-light, purple-light, purple-light, etc.
    |
    */

    'skin' => 'yellow',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Choose a layout for your admin panel. The available layout options:
    | null, 'boxed', 'fixed', 'top-nav'. null is the default, top-nav
    | removes the sidebar and places your menu in the top navbar
    |
    */

    'layout' => 'fixed',

    /*
    |--------------------------------------------------------------------------
    | Collapse Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we choose and option to be able to start with a collapsed side
    | bar. To adjust your sidebar layout simply set this  either true
    | this is compatible with layouts except top-nav layout option
    |
    */

    'collapse_sidebar' => false,

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Register here your dashboard, logout, login and register URLs. The
    | logout URL automatically sends a POST request in Laravel 5.3 or higher.
    | You can set the request to a GET or POST with logout_method.
    | Set register_url to null if you don't want a register link.
    |
    */

    'dashboard_url' => 'admin',

    'logout_url' => 'logout',

    'logout_method' => null,

    'login_url' => 'login',

    'register_url' => 'register',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Specify your menu items to display in the left sidebar. Each menu item
    | should have a text and and a URL. You can also specify an icon from
    | Font Awesome. A string instead of an array represents a header in sidebar
    | layout. The 'can' is a filter on Laravel's built in Gate functionality.
    |
    */

    'menu' => [
        ['header' => 'main_navigation'],
        [
            'text'        => 'Dashboard',
            'url'         => 'admin',
            'icon'        => 'dashboard',
            'label'       => 4,
            'label_color' => 'success',
        ],
        [
            'text' => 'Site',
            'url'  => 'site',
            'icon' => 'sitemap'
        ],
        ['header' => 'projects', 'can' => 'develop',],
        [
            'text'  => 'projects',
            'can'   => 'develop',
            'icon'  => 'paperclip'
        ],
        ['header' => 'SETTINGS', 'can'   => 'develop',
        ],
        [
            'can' => 'develop',
            'text' => 'ACL',
            'icon' => 'gear',
            'submenu' => [
                [
                    'text' => 'Permissions',
                    'url'  => 'admin/settings',
                    'icon' => 'lock',
                ],
                [
                    'text' => 'Roles',
                    'url'  => 'admin/settings/roles',
                    'icon' => 'building',
                ],
            ],
        ],
        [
            'text'    => 'submenus',
            'icon'    => 'users',
            'can'   => 'develop',
            'submenu' => [
                [
                    'text' => 'Level One',
                    'url'  => '#',
                ],
                [
                    'text'    => 'Level One',
                    'url'     => '#',
                    'submenu' => [
                        [
                            'text' => 'Level Two',
                            'url'  => '#',
                        ],
                        [
                            'text'    => 'Level Two',
                            'url'     => '#',
                            'submenu' => [
                                [
                                    'text' => 'Level Three',
                                    'url'  => '#',
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'text' => 'Level One',
                    'url'  => '#',
                ],
            ],
        ],
        ['header' => 'COMPANY', 'can' => 'develop',],
        [
            'text'  => 'Business',
            'can'   => 'develop',
            'icon'  => 'building',
            'url'   => 'admin/companies'
        ],
        [
            'text'  => 'Products',
            'can'   => 'develop',
            'icon'  => 'shopping-basket',
            'url'   => 'admin/products'
        ],
        [
            'text'  => 'Voluntaries',
            'can'   => 'develop',
            'icon'  => 'users',
            'submenu' => [
                [
                    'text' => 'Ativos',
                    'url'  => 'admin/profiles',
                    'icon' => 'check',
                ],
                [
                    'text' => 'Reservas',
                    'url'  => 'admin/subscribes',
                    'icon' => 'list',
                ],

            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Choose what filters you want to include for rendering the menu.
    | You can add your own filters to this array after you've created them.
    | You can comment out the GateFilter if you don't want to use Laravel's
    | built in Gate functionality
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Choose which JavaScript plugins should be included. At this moment,
    | only DataTables is supported as a plugin. Set the value to true
    | to include the JavaScript file from a CDN via a script tag.
    |
    */

    'plugins' => [
        'datatables' => true,
        'select2'    => true,
        'chartjs'    => true,
    ],
];
