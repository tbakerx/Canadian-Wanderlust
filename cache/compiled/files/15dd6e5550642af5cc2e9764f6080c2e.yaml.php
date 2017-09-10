<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/timbaker/Documents/dev/CanadianWanderlust/user/config/site.yaml',
    'modified' => 1505056948,
    'data' => [
        'title' => 'Canadian Wanderlust',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Tim Baker',
            'email' => 'timbaker@canadianwanderlust.com',
            'copyright' => 'Copyright 2017 Canadian Wanderlust. All Rights Reserved.'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Canadian Wanderlust is our travel blog site for our travels through southeast asia'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'routes' => [
            '/something/else' => '/blog/sample-3',
            '/another/one/here' => '/blog/sample-3',
            '/new/*' => '/blog/*'
        ],
        'blog' => [
            'route' => '/blog'
        ],
        'social' => [
            0 => [
                'url' => 'https://twitter.com/getgrav',
                'icon' => 'twitter'
            ],
            1 => [
                'url' => '#',
                'icon' => 'facebook'
            ],
            2 => [
                'url' => 'blog.rss',
                'icon' => 'rss'
            ]
        ],
        'contact' => [
            'address' => [
                0 => [
                    'line' => 'Address:     This changes almost daily ;)'
                ]
            ]
        ],
        'quicklinks' => [
            0 => [
                'text' => 'Home',
                'url' => 'base_url:home'
            ],
            1 => [
                'text' => 'Blog',
                'url' => 'base_url:blog'
            ],
            2 => [
                'text' => 'Articles',
                'url' => 'base_url:articles'
            ],
            3 => [
                'text' => 'Reviews',
                'url' => 'base_url:reviews'
            ],
            4 => [
                'text' => 'Contact Us',
                'url' => 'base_url:contact'
            ]
        ],
        'header_options' => [
            'arrows' => 'false',
            'autoslide' => 'false',
            'autoslideHoverStop' => 'false',
            'interval' => '2000',
            'loop' => 'false',
            'transition' => 'zoom',
            'itemsForSlide' => '0',
            'touch' => 'true',
            'swipe' => 'true'
        ],
        'footer' => [
            'description' => 'This is our blog site where we hope to share our experience with our friends and family back home in Canada and anyone who is willing to give it a read! If you dont know us already, feel free to send us an email and say hello!',
            'contact_title' => 'Contact Info',
            'links_title' => 'Quick Links',
            'newsletter_title' => 'Newsletter',
            'newsletter_description' => 'Coming Soon!',
            'copyright_text' => 'Copyright 2017 Canadian Wanderlust. All Rights Reserved.',
            'feedburner' => ''
        ]
    ]
];
