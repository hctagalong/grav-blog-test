<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'themes://bootstrap-blog/bootstrap-blog.yaml',
    'modified' => 1533262661,
    'data' => [
        'enabled' => true,
        'cdn_enabled' => false,
        'back_to_top_button' => true,
        'favicon' => NULL,
        'navbar' => [
            'image' => NULL,
            'icon' => NULL,
            'style' => 'light',
            'dropdown' => true,
            'sticky' => false
        ],
        'sidebar' => [
            'enabled' => true,
            'align' => 'left',
            'twitter' => [
                'enabled' => true,
                'user' => 'twitter',
                'height' => 600,
                'theme' => 'light'
            ],
            'about' => [
                'enabled' => true,
                'title' => 'About me',
                'content' => 'Some text about you...',
                'page' => NULL
            ]
        ],
        'item' => [
            'show_prev_next' => true
        ],
        'comments' => [
            'enabled' => false,
            'disqus_shortname' => NULL
        ],
        'footer' => [
            'style' => 'light',
            'text' => 'Bootstrap Blog is <i class="fas fa-code"></i> with <i class="fas fa-heart"></i> by <a href="http://ayozehd.com">Ayoze Hernández Díaz</a>',
            'legal' => NULL
        ]
    ]
];
