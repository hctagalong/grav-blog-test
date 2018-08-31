<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tinyacor/domains/blog_ddeemer/user/config/site.yaml',
    'modified' => 1512876690,
    'data' => [
        'title' => 'Collective Thoughts',
        'default_lang' => 'en',
        'author' => [
            'name' => 'David Deemer',
            'email' => 'deemerdj@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag',
            2 => 'month'
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS',
            'devops' => 'A blog including thoughts, ideas and conversation about DevOps practice'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'redirects' => [
            '/firstpost' => '/blog/a-beginning'
        ],
        'routes' => [
            '/another/one/(.*)' => '/blog/$1'
        ],
        'blog' => [
            'route' => ''
        ]
    ]
];
