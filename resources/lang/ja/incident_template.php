<?php

return [
    'resource_label' => 'インシデントテンプレート|インシデントテンプレート',
    'list' => [
        'headers' => [
            'name' => '名前',
            'slug' => 'スラッグ',
            'engine' => 'エンジン',
            'created_at' => '作成日時',
            'updated_at' => '更新日時',
            'deleted_at' => '削除日時',
        ],
        'empty_state' => [
            'heading' => 'インシデントテンプレート',
            'description' => 'インシデントテンプレートは、再利用可能なインシデントメッセージを作成するために使います。',
        ],
    ],
    'form' => [
        'name_label' => '名前',
        'slug_label' => 'スラッグ',
        'template_label' => 'テンプレート',
        'engine_label' => 'エンジン',
    ],
    'engine' => [
        'laravel_blade' => 'Laravel Blade',
        'laravel_blade_docs' => 'Laravel Blade ドキュメント',
        'twig' => 'Twig',
        'twig_docs' => 'Twig ドキュメント',
    ],
];

