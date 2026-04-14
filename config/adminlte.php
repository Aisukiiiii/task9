<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    */

    'title'        => 'Task 9',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    */

    'use_ico_only'   => false,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Google Fonts
    |--------------------------------------------------------------------------
    */

    'google_fonts' => [
        'allowed' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Logo
    |--------------------------------------------------------------------------
    */

    'logo'           => '<b>Task</b>9',
    'logo_img'       => false,
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl'    => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt'   => 'Task9',

    /*
    |--------------------------------------------------------------------------
    | Authentication Logo
    |--------------------------------------------------------------------------
    */

    'auth_logo' => [
        'enabled' => false,
        'img' => [
            'path'   => 'vendor/adminlte/dist/img/AdminLTELogo.png',
            'alt'    => 'Auth Logo',
            'class'  => '',
            'width'  => 50,
            'height' => 50,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Preloader Animation
    |--------------------------------------------------------------------------
    */

    'preloader' => [
        'enabled' => false,
        'mode'    => 'fullscreen',
        'img' => [
            'path'   => 'vendor/adminlte/dist/img/AdminLTELogo.png',
            'alt'    => 'AdminLTE Preloader Image',
            'effect' => 'animation__shake',
            'width'  => 60,
            'height' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    */

    'usermenu_enabled'        => false,
    'usermenu_header'         => false,
    'usermenu_header_class'   => 'bg-primary',
    'usermenu_image'          => false,
    'usermenu_desc'           => false,
    'usermenu_profile_url'    => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    */

    'layout_topnav'    => null,
    'layout_boxed'     => null,
    'layout_fixed_sidebar' => null,
    'layout_fixed_navbar'  => null,
    'layout_fixed_footer'  => null,
    'layout_dark_mode'     => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views URLs
    |--------------------------------------------------------------------------
    */

    'use_route_url' => false,
    'dashboard_url' => '/',
    'logout_url'    => 'logout',
    'login_url'     => 'login',
    'register_url'  => 'register',
    'password_reset_url'   => 'password/reset',
    'password_email_url'   => 'password/email',
    'profile_url'          => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    */

    'enabled_laravel_mix'        => false,
    'laravel_mix_css_path'       => 'css/app.css',
    'laravel_mix_js_path'        => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins
    |--------------------------------------------------------------------------
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type'     => 'js',
                    'asset'    => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type'     => 'js',
                    'asset'    => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type'     => 'css',
                    'asset'    => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type'     => 'js',
                    'asset'    => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type'     => 'css',
                    'asset'    => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type'     => 'js',
                    'asset'    => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type'     => 'js',
                    'asset'    => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type'     => 'css',
                    'asset'    => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type'     => 'js',
                    'asset'    => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | IFrame Mode
    |--------------------------------------------------------------------------
    */

    'iframe' => [
        'default_tab' => [
            'url'   => null,
            'title' => null,
        ],
        'buttons' => [
            'close'        => true,
            'close_all'    => true,
            'close_all_other' => true,
            'scroll_left'  => true,
            'scroll_right' => true,
            'fullscreen'   => true,
        ],
        'options' => [
            'loading_screen' => 1000,
            'auto_show_new_tab' => true,
            'use_navbar_items' => true,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    */

    'livewire' => false,

    /*
    |--------------------------------------------------------------------------
    | Menu
    |--------------------------------------------------------------------------
    |
    | Las opciones del menú lateral corresponden a las secciones del proyecto.
    |
    */

    'menu' => [

        // ── Sección principal ──────────────────────────────────
        [
            'text' => 'NAVEGACIÓN',
            'type' => 'sidebar-header',
        ],

        [
            'text'   => 'Home',
            'url'    => '/',
            'icon'   => 'fas fa-fw fa-home',
            'active' => ['/', 'regex:@^/$@'],
        ],
        [
            'text'   => 'Photos',
            'url'    => '/photos',
            'icon'   => 'fas fa-fw fa-camera',
            'active' => ['/photos'],
        ],
        [
            'text'   => 'Contact',
            'url'    => '/contact',
            'icon'   => 'fas fa-fw fa-envelope',
            'active' => ['/contact'],
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Footer
    |--------------------------------------------------------------------------
    */

    'footer' => [
        'left_text'  => '<strong>Desarrollado por:</strong> Tu Nombre &nbsp;|&nbsp; Materia: Desarrollo Web',
        'right_text' => date('Y'),
    ],

];
