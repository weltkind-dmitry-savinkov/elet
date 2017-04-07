<?php

return [
    'image' => [
        'path'      => '/uploads/leadership/',
        'validator' => 'mimes:jpeg,jpg,png|max:10000',
        'field'     => 'image',

        'thumbs'    => [
            [
                'path'   => 'full/',
                'width'  => 800,
                'height' => false
            ],
            [
                'path'   => 'thumb/',
                'width'  => 450,
                'height' => false
            ],
            [
                'path'   => 'mini/',
                'width'  => 250,
                'height' => false
            ]
        ]
    ]
];