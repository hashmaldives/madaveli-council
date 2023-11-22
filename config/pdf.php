<?php

return [
    'mode'                     => '',
    'format'                   => 'A4',
    'default_font_size'        => '11',
    'default_font'             => 'sans-serif',
    'margin_left'              => 10,
    'margin_right'             => 10,
    'margin_top'               => 10,
    'margin_bottom'            => 10,
    'margin_header'            => 5,
    'margin_footer'            => 5,
    'orientation'              => 'P',
    'title'                    => 'PDF Generator',
    'subject'                  => '',
    'author'                   => '',
    'watermark'                => '',
    'show_watermark'           => false,
    'show_watermark_image'     => false,
    'watermark_font'           => 'sans-serif',
    'display_mode'             => 'fullpage',
    'watermark_text_alpha'     => 0.1,
    'watermark_image_path'     => '',
    'watermark_image_alpha'    => 0.2,
    'watermark_image_size'     => 'D',
    'watermark_image_position' => 'P',
    'custom_font_dir'          => base_path('resources/fonts/'),
    'custom_font_data'         => [
        'reethi' => [ // must be lowercase and snake_case
            'R'  => 'reethi.ttf',    // regular font
        ],
        'faruma' => [ // must be lowercase and snake_case
            'R'  => 'faruma.ttf',    // regular font
        ],
        'arab' => [ // must be lowercase and snake_case
            'R'  => 'arab.ttf',    // regular font
        ],
        'waheed' => [ // must be lowercase and snake_case
            'R'  => 'waheed.ttf',    // regular font
        ],
        'poppins' => [ // must be lowercase and snake_case
            'R'  => 'Poppins-Regular.ttf',    // regular font
        ],
        'poppins-500' => [ // must be lowercase and snake_case
            'R'  => 'Poppins-SemiBold.ttf',    // regular font
        ],
        'poppins-700' => [ // must be lowercase and snake_case
            'R'  => 'Poppins-Bold.ttf',    // regular font
        ]
    ],
    'auto_language_detection'  => false,
    'temp_dir'                 => storage_path('app'),
    'pdfa'                     => false,
    'pdfaauto'                 => false,
    'use_active_forms'         => false,
];
