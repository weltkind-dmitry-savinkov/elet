<?php

return [
    'image' => [
        'path'      => '/uploads/credits/',
        'validator' => 'mimes:jpeg,jpg,png,gif|max:10000',
        'field'     => 'image',
        'thumbs'    => [
            [
                'path'   => 'thumb/',
                'width'  => 250,
                'height' => false
            ],
            [
                'path'   => 'mini/',
                'width'  => 100,
                'height' => false
            ],
        ]
    ],

    'icon' => [
        'path'      => '/uploads/credits/',
        'validator' => 'mimes:jpeg,jpg,png,gif|max:10000',
        'field'     => 'icon',
        'thumbs'    => [
            [
                'path'   => 'thumb/',
                'width'  => 250,
                'height' => false
            ],
            [
                'path'   => 'mini/',
                'width'  => 100,
                'height' => false
            ],
        ]
    ],
];