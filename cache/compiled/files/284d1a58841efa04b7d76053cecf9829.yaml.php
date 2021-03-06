<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tinyacor/domains/blog_ddeemer/user/plugins/git-sync/blueprints.yaml',
    'modified' => 1512793717,
    'data' => [
        'name' => 'Git Sync',
        'version' => '1.0.4',
        'description' => 'Allows to synchronize portions of Grav with Git Repositories (GitHub, BitBucket, GitLab)',
        'icon' => 'git',
        'author' => [
            'name' => 'Trilby Media, LLC',
            'email' => 'hello@trilby.media',
            'url' => 'http://trilby.media'
        ],
        'homepage' => 'http://trilby.media',
        'keywords' => 'grav, plugin, git, sync, github, bitbucket, gitlab',
        'issues' => 'https://github.com/trilbymedia/grav-plugin-git-sync/issues',
        'docs' => 'https://github.com/trilbymedia/grav-plugin-git-sync',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'Settings' => [
                    'type' => 'section',
                    'title' => 'Settings',
                    'underline' => true
                ],
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'folders' => [
                    'type' => 'hidden',
                    'multiple' => true,
                    'size' => 'medium',
                    'label' => 'Sync Folders',
                    'classes' => 'fancy',
                    'default' => [
                        0 => 'pages'
                    ],
                    'options' => [
                        'pages' => 'Pages',
                        'themes' => 'Themes'
                    ],
                    'validate' => [
                        'type' => 'commalist'
                    ]
                ],
                'repository' => [
                    'type' => 'text',
                    'label' => 'Git Repository',
                    'placeholder' => 'https://github.com/user/repository.git'
                ],
                'user' => [
                    'type' => 'text',
                    'label' => 'Git User',
                    'placeholder' => 'Username, not email'
                ],
                'password' => [
                    'type' => 'enc-password',
                    'label' => 'Git Password or Token',
                    'placeholder' => 'Your Git Password or Token',
                    'description' => 'Enter your password or token to encrypt and securely store it, then save the settings. It will not show up here for security reasons.'
                ],
                'webhook' => [
                    'type' => 'text',
                    'label' => 'Repository Web Hook',
                    'placeholder' => '/_git-sync',
                    'default' => '/_git-sync'
                ],
                'Advanced' => [
                    'type' => 'section',
                    'title' => 'Advanced',
                    'underline' => true
                ],
                'branch' => [
                    'type' => 'text',
                    'default' => 'master',
                    'label' => 'Local Branch',
                    'placeholder' => 'master'
                ],
                'remote.name' => [
                    'type' => 'text',
                    'default' => 'origin',
                    'label' => 'Remote Name',
                    'placeholder' => 'origin'
                ],
                'remote.branch' => [
                    'type' => 'text',
                    'default' => 'master',
                    'label' => 'Remote Branch',
                    'placeholder' => 'master'
                ],
                'git.author' => [
                    'type' => 'select',
                    'default' => 'gituser',
                    'label' => 'Commits Author',
                    'options' => [
                        'gituser' => 'Use Git User Name',
                        'gitsync' => 'Use GitSync Committer Name',
                        'gravuser' => 'Use Grav User Name',
                        'gravfull' => 'Use Grav User Full Name'
                    ]
                ],
                'git.name' => [
                    'type' => 'text',
                    'default' => 'GitSync',
                    'label' => 'Committer Name',
                    'placeholder' => 'GitSync'
                ],
                'git.email' => [
                    'type' => 'text',
                    'default' => 'git-sync@trilby.media',
                    'label' => 'Committer Email',
                    'placeholder' => 'git-sync@trilby.media'
                ],
                'git.bin' => [
                    'type' => 'text',
                    'default' => 'git',
                    'label' => 'Git Binary Path',
                    'help' => 'If the default `git` command doesn\'t work on your machine or if you want to specify a custom path, do it in here',
                    'placeholder' => '/usr/bin/git'
                ],
                'logging' => [
                    'type' => 'toggle',
                    'default' => 0,
                    'label' => 'Log Git Commands',
                    'help' => 'Logs git commands. Useful to debug and troubleshoot git execution',
                    'highlight' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.YES',
                        0 => 'PLUGIN_ADMIN.NO'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'Actions' => [
                    'type' => 'section',
                    'title' => 'Actions',
                    'underline' => true
                ],
                '_wizard' => [
                    'type' => 'git-wizard',
                    'label' => 'Text Variable',
                    'help' => 'Text to add to the top of a page'
                ]
            ]
        ]
    ]
];
