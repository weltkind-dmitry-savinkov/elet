<?php
return [

    //file field
    'image' => [

        'path' => '/uploads/slider/',

        'validator' => 'mimes:jpeg,jpg,png|max:10000',

        //Model field
        'field' => 'image',

        'thumbs' => [
            [
                'path' => 'full/',
                'width' => 596,
                'height' => 380,
                'full' => true
            ],

            [
                'path' => 'thumb/',
                'width' => 600,
                'height' => false,
            ],
            [
                'path' => 'mini/',
                'width' => 250,
                'height' => false,
            ],
        ]

    ],
];