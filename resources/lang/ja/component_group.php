<?php

return [
    'resource_label' => 'コンポーネントグループ|コンポーネントグループ',
    'incident_count' => 'インシデント :count 件|インシデント :count 件',
    'visibility' => [
        'expanded' => '常に展開',
        'collapsed' => '常に折りたたみ',
        'collapsed_unless_incident' => '進行中のインシデントがない限り折りたたみ',
    ],
    'list' => [
        'headers' => [
            'name' => '名前',
            'visible' => '表示',
            'collapsed' => '折りたたみ',
            'created_at' => '作成日時',
            'updated_at' => '更新日時',
        ],
        'empty_state' => [
            'heading' => 'コンポーネントグループ',
            'description' => '関連するコンポーネントをまとめます。',
        ],
    ],
    'form' => [
        'name_label' => '名前',
        'visible_label' => '表示',
        'collapsed_label' => '折りたたみ',
    ],
];

