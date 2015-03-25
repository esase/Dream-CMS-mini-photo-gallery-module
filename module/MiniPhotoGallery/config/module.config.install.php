<?php

return [
    'compatable' => '2.2.1',
    'version' => '1.0.0',
    'vendor' => 'eSASe',
    'vendor_email' => 'alexermashev@gmail.com',
    'description' => 'Module allows to publish a mini photo gallery on the site',
    'system_requirements' => [
        'php_extensions' => [
        ],
        'php_settings' => [
        ],
        'php_enabled_functions' => [
        ],
        'php_version' => null
    ],
    'module_depends' => [
    ],
    'clear_caches' => [
        'setting'       => true,
        'time_zone'     => false,
        'admin_menu'    => true,
        'js_cache'      => true,
        'css_cache'     => true,
        'layout'        => false,
        'localization'  => false,
        'page'          => true,
        'user'          => false,
        'xmlrpc'        => false
    ],
    'resources' => [
        [
            'dir_name' => 'miniphotogallery',
            'is_public' => true
        ],
        [
            'dir_name' => 'miniphotogallery/thumbnail',
            'is_public' => true
        ]
    ],
    'install_sql' => __DIR__ . '/../install/install.sql',
    'install_intro' => null,
    'uninstall_sql' => __DIR__ . '/../install/uninstall.sql',
    'uninstall_intro' => null,
    'layout_path' => 'miniphotogallery'
];