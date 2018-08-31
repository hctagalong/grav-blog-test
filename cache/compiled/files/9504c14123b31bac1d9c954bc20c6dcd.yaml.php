<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tinyacor/domains/blog_ddeemer/user/config/plugins/git-sync.yaml',
    'modified' => 1512794189,
    'data' => [
        'enabled' => true,
        'text_var' => 'Custom Text added by the **Git Sync** plugin (disable plugin to remove)',
        'folders' => [
            0 => 'pages'
        ],
        'repository' => 'https://gitlab.com/hctagalong/blog_daviddeemer.git',
        'user' => 'hctagalong',
        'webhook' => '/_git-sync',
        'branch' => 'master',
        'remote' => [
            'name' => 'origin',
            'branch' => 'master'
        ],
        'git' => [
            'author' => 'gravuser',
            'name' => 'GitSync',
            'email' => 'deemerdj@gmail.com',
            'bin' => '/usr/local/cpanel/3rdparty/bin/git'
        ],
        'logging' => false,
        'password' => 'gitsync-def50200c4aaa894de3962a9fb0ce1e538e085edd2d05136bf36345744f163a4512fdd6aa629cf8f271dc6fada14b4d7e61fa7cb249c86c8b5a63cc2c7cd6081dc5bb8acf3aedd3ac8413baf99a6fa37a37c29ac9768e99d4e33e4f43e8e90dcfe'
    ]
];
