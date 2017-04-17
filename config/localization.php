<?php

return [
    /* ------------------------------------------------------------------------------------------------
     |  Settings
     | ------------------------------------------------------------------------------------------------
     */
    'supported-locales'      => ['en', 'ru', 'ky'],

    'accept-language-header' => true,

    'hide-default-in-url'    => true,

    'facade'                 => 'Localization',

    /* ------------------------------------------------------------------------------------------------
     |  Route
     | ------------------------------------------------------------------------------------------------
     */
    'route'                  => [
        'middleware' => [
            'localization-session-redirect' => true,
            'localization-cookie-redirect'  => false,
            'localization-redirect'         => true,
            'localized-routes'              => false,
            'translation-redirect'          => true,
        ],
    ],

    /* ------------------------------------------------------------------------------------------------
     |  Locales
     | ------------------------------------------------------------------------------------------------
     */
    'locales'   => [

        'en'          => [
            'name'     => 'English',
            'script'   => 'Latn',
            'dir'      => 'ltr',
            'native'   => 'English',
            'regional' => 'en_GB',
            'label'    => 'EN'
        ],

        'ru'          => [
            'name'     => 'Russian',
            'script'   => 'Cyrl',
            'dir'      => 'ltr',
            'native'   => 'Русский',
            'regional' => 'ru_RU',
            'label'    => 'РУ'
        ],

        'ky'          => [
            'name'     => 'Kyrgyz',
            'script'   => 'Cyrl',
            'dir'      => 'ltr',
            'native'   => 'Кыргызча',
            'regional' => 'ky_KY',
            'label'    => 'КР'
        ],

    ],
];
