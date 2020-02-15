<?php

return [
    '__name' => 'post-gallery',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/post-gallery.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/post-gallery' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'post' => NULL
            ],
            [
                'lib-formatter' => NULL
            ],
            [
                'gallery' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [],
        'files' => []
    ],
    'libFormatter' => [
        'formats' => [
            'post' => [
                'gallery' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'Gallery\\Model\\Gallery',
                        'field' => 'id',
                        'type' => 'number'
                    ],
                    'format' => 'gallery'
                ]
            ]
        ]
    ]
];