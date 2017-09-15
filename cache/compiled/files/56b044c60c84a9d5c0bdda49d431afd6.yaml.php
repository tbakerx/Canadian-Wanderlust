<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/timbaker/Documents/dev/CanadianWanderlust/user/themes/deliver/blueprints.yaml',
    'modified' => 1505055395,
    'data' => [
        'name' => 'Deliver',
        'version' => '1.6.2',
        'description' => 'Deliver theme is a port of the Michael Reimer\'s Deliver Free PSD theme.',
        'icon' => 'newspaper-o',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-theme-deliver',
        'demo' => 'http://demo.getgrav.org/deliver-skeleton/',
        'keywords' => 'deliver, theme, modern, fast, responsive, html5, css3',
        'bugs' => 'https://github.com/getgrav/grav-theme-deliver/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'sticky_menu.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Sticky menu',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
