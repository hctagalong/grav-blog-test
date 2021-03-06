<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tinyacor/domains/blog_ddeemer/user/themes/bootstrap-blog/blueprints.yaml',
    'modified' => 1533262661,
    'data' => [
        'name' => 'Bootstrap Blog',
        'version' => '1.1.0',
        'description' => 'Multipurpose template built in default Bootstrap 4 framework',
        'icon' => 'bold',
        'author' => [
            'name' => 'Ayoze Hernandez Diaz',
            'email' => 'ayoze.dev@gmail.com',
            'url' => 'https://ayozehd.com'
        ],
        'homepage' => 'https://github.com/ayozehd/grav-theme-bootstrap-blog',
        'demo' => 'https://bootstrap-blog.ayozehd.com',
        'keywords' => 'theme, bootstrap, blog, simple, flat, modern, modular, multilanguage',
        'bugs' => 'https://github.com/ayozehd/grav-theme-bootstrap-blog/issues',
        'readme' => 'https://github.com/ayozehd/grav-theme-bootstrap-blog/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'fields' => [
                'cdn_enabled' => [
                    'type' => 'toggle',
                    'label' => 'ADMIN.THEME.CDN',
                    'help' => 'ADMIN.THEME.CDN_HELP',
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
                'back_to_top_button' => [
                    'type' => 'toggle',
                    'label' => 'ADMIN.THEME.BACK_TO_TOP_BUTTON',
                    'help' => 'ADMIN.THEME.BACK_TO_TOP_BUTTON_HELP',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'favicon' => [
                    'type' => 'file',
                    'label' => 'ADMIN.THEME.FAVICON',
                    'help' => 'ADMIN.THEME.FAVICON_HELP',
                    'destination' => 'theme@:/images',
                    'multiple' => false,
                    'avoid_overwriting' => false,
                    'random_name' => false,
                    'toggleable' => true,
                    'filesize' => 3,
                    'accept' => [
                        0 => 'image/png',
                        1 => '.ico'
                    ]
                ],
                'navbar' => [
                    'type' => 'section',
                    'title' => 'ADMIN.THEME.NAVBAR',
                    'underline' => true,
                    'fields' => [
                        'navbar.dropdown' => [
                            'type' => 'toggle',
                            'label' => 'ADMIN.THEME.DROPDOWN',
                            'help' => 'ADMIN.THEME.DROPDOWN_HELP',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'navbar.sticky' => [
                            'type' => 'toggle',
                            'label' => 'ADMIN.THEME.NAVBAR_STICKY',
                            'help' => 'ADMIN.THEME.NAVBAR_STICKY_HELP',
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
                        'navbar.display_site_name' => [
                            'type' => 'toggle',
                            'label' => 'ADMIN.THEME.DISPLAY_SITE_NAME',
                            'help' => 'ADMIN.THEME.DISPLAY_SITE_NAME_HELP',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'navbar.image' => [
                            'type' => 'file',
                            'label' => 'ADMIN.THEME.BRAND_LOGO_IMAGE',
                            'help' => 'ADMIN.THEME.BRAND_LOGO_IMAGE_HELP',
                            'destination' => 'theme@:/images',
                            'multiple' => false,
                            'avoid_overwriting' => false,
                            'random_name' => false,
                            'toggleable' => true,
                            'filesize' => 3,
                            'accept' => [
                                0 => 'image/*'
                            ]
                        ],
                        'navbar.icon' => [
                            'type' => 'text',
                            'label' => 'ADMIN.THEME.BRAND_ICON',
                            'help' => 'ADMIN.ICON_HELP',
                            'description' => 'ADMIN.FONTAWESOME_5_ICONS',
                            'toggleable' => true,
                            'validate' => [
                                'type' => 'text'
                            ]
                        ],
                        'navbar.style' => [
                            'type' => 'select',
                            'size' => 'medium',
                            'label' => 'ADMIN.THEME.NAVBAR_STYLE',
                            'help' => 'ADMIN.STYLE_HELP',
                            'description' => 'ADMIN.STYLE_DESCRIPTION',
                            'default' => 'light',
                            'options' => [
                                'dark' => 'Dark',
                                'light' => 'Light',
                                'primary' => 'Primary',
                                'secondary' => 'Secondary',
                                'success' => 'Success',
                                'warning' => 'Warning',
                                'info' => 'Info',
                                'danger' => 'Danger'
                            ],
                            'validate' => [
                                'pattern' => '(dark|light|primary|secondary|success|warning|info|danger)'
                            ]
                        ]
                    ]
                ],
                'item' => [
                    'type' => 'section',
                    'title' => 'ADMIN.THEME.ITEMS',
                    'underline' => true,
                    'fields' => [
                        'item.show_prev_next' => [
                            'type' => 'toggle',
                            'label' => 'ADMIN.THEME.SHOW_PREV_NEXT_BUTTONS',
                            'help' => 'ADMIN.THEME.SHOW_PREV_NEXT_BUTTONS_HELP',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'comments.enabled' => [
                            'type' => 'toggle',
                            'label' => 'ADMIN.THEME.ENABLE_COMMENTS',
                            'help' => 'ADMIN.THEME.ENABLE_COMMENTS_HELP',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'comments.disqus_shortname' => [
                            'type' => 'text',
                            'size' => 'medium',
                            'label' => 'ADMIN.THEME.DISQUS_SHORTNAME',
                            'help' => 'ADMIN.THEME.DISQUS_SHORTNAME_HELP',
                            'description' => 'ADMIN.THEME.DISQUS_SHORTNAME_DESCRIPTION'
                        ]
                    ]
                ],
                'simplesearch' => [
                    'type' => 'conditional',
                    'condition' => 'config.plugins.simplesearch.enabled',
                    'fields' => [
                        'simplesearch.section' => [
                            'type' => 'section',
                            'title' => 'Search',
                            'underline' => true,
                            'fields' => [
                                'simplesearch.layout' => [
                                    'type' => 'select',
                                    'label' => 'ADMIN.MODULAR.ITEMS_LAYOUT',
                                    'help' => 'ADMIN.MODULAR.ITEMS_LAYOUT_HELP',
                                    'size' => 'medium',
                                    'default' => 'boxed',
                                    'options' => [
                                        'boxed' => 'Boxed',
                                        'masonry' => 'Masonry',
                                        'cards' => 'Cards'
                                    ],
                                    'validate' => [
                                        'pattern' => '(boxed|masonry|cards)'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                'sidebar' => [
                    'type' => 'section',
                    'title' => 'ADMIN.THEME.SIDEBAR',
                    'underline' => true,
                    'fields' => [
                        'sidebar.enabled' => [
                            'type' => 'toggle',
                            'label' => 'ADMIN.THEME.ENABLE_SIDEBAR',
                            'help' => 'ADMIN.THEME.ENABLE_SIDEBAR_HELP',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'sidebar.align' => [
                            'type' => 'select',
                            'label' => 'ADMIN.THEME.SIDEBAR_ALIGN',
                            'size' => 'medium',
                            'options' => [
                                'left' => 'ADMIN.LEFT',
                                'right' => 'ADMIN.RIGHT'
                            ],
                            'validate' => [
                                'pattern' => '(left|right)'
                            ]
                        ],
                        'sidebar_widgets' => [
                            'type' => 'columns',
                            'fields' => [
                                'sidebar_column1' => [
                                    'type' => 'column',
                                    'fields' => [
                                        'twitter' => [
                                            'type' => 'fieldset',
                                            'title' => 'ADMIN.THEME.TWITTER_TIMELINE',
                                            'icon' => 'twitter',
                                            'collapsible' => true,
                                            'collapsed' => false,
                                            'fields' => [
                                                'sidebar.twitter.enabled' => [
                                                    'type' => 'toggle',
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
                                                'sidebar.twitter.user' => [
                                                    'type' => 'text',
                                                    'label' => 'ADMIN.THEME.TWITTER_USERNAME',
                                                    'help' => 'ADMIN.THEME.TWITTER_USERNAME_HELP'
                                                ],
                                                'sidebar.twitter.theme' => [
                                                    'type' => 'select',
                                                    'label' => 'ADMIN.THEME.TWITTER_THEME',
                                                    'size' => 'medium',
                                                    'default' => 'light',
                                                    'options' => [
                                                        'light' => 'ADMIN.BOOTSTRAP_STYLES.LIGHT',
                                                        'dark' => 'ADMIN.BOOTSTRAP_STYLES.DARK'
                                                    ],
                                                    'validate' => [
                                                        'pattern' => '(light|dark)'
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'sidebar_column2' => [
                                    'type' => 'column',
                                    'fields' => [
                                        'about' => [
                                            'type' => 'fieldset',
                                            'title' => 'ADMIN.THEME.ABOUT_ME',
                                            'icon' => 'user-circle',
                                            'collapsible' => true,
                                            'collapsed' => false,
                                            'fields' => [
                                                'sidebar.about.enabled' => [
                                                    'type' => 'toggle',
                                                    'highlight' => 1,
                                                    'default' => 1,
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ],
                                                    'validate' => [
                                                        'type' => 'bool'
                                                    ]
                                                ],
                                                'sidebar.about.title' => [
                                                    'type' => 'text',
                                                    'label' => 'ADMIN.TITLE'
                                                ],
                                                'sidebar.about.content' => [
                                                    'type' => 'textarea',
                                                    'label' => 'ADMIN.TEXT',
                                                    'help' => 'ADMIN.ADMIT_HTML_CONTENT',
                                                    'validate' => [
                                                        'type' => 'text'
                                                    ]
                                                ],
                                                'sidebar.about.page' => [
                                                    'type' => 'pages',
                                                    'label' => 'ADMIN.THEME.ABOUT_PAGE_CONTENT',
                                                    'help' => 'ADMIN.THEME.ABOUT_PAGE_CONTENT_HELP',
                                                    'description' => 'ADMIN.THEME.ABOUT_PAGE_CONTENT_DESCRIPTION',
                                                    'toggleable' => true,
                                                    'show_modular' => false
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                'footer' => [
                    'type' => 'section',
                    'title' => 'ADMIN.THEME.FOOTER',
                    'underline' => true,
                    'fields' => [
                        'footer.style' => [
                            'type' => 'select',
                            'label' => 'ADMIN.THEME.FOOTER_STYLE',
                            'help' => 'ADMIN.STYLE_HELP',
                            'size' => 'medium',
                            'default' => 'dark',
                            'options' => [
                                'dark' => 'Dark',
                                'light' => 'Light',
                                'primary' => 'Primary',
                                'secondary' => 'Secondary',
                                'success' => 'Success',
                                'warning' => 'Warning',
                                'info' => 'Info',
                                'danger' => 'Danger'
                            ],
                            'validate' => [
                                'pattern' => '(dark|light|primary|info|secondary|success|warning|danger)'
                            ]
                        ],
                        'footer.text' => [
                            'type' => 'textarea',
                            'label' => 'ADMIN.THEME.FOOTER_TEXT',
                            'help' => 'ADMIN.THEME.FOOTER_TEXT_HELP',
                            'description' => 'ADMIN.ADMIT_HTML_CONTENT'
                        ],
                        'footer.legal' => [
                            'type' => 'text',
                            'label' => 'ADMIN.THEME.FOOTER_LEGAL_TEXT',
                            'help' => 'ADMIN.THEME.FOOTER_LEGAL_TEXT_HELP',
                            'placeholder' => 'ADMIN.THEME.FOOTER_LEGAL_TEXT_PLACEHOLDER'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
