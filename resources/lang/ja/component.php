<?php

return [
    'resource_label' => 'コンポーネント|コンポーネント',
    'list' => [
        'headers' => [
            'name' => '名前',
            'status' => 'ステータス',
            'order' => '順序',
            'group' => 'グループ',
            'enabled' => '有効',
            'created_at' => '作成日時',
            'updated_at' => '更新日時',
            'deleted_at' => '削除日時',
        ],
        'empty_state' => [
            'heading' => 'コンポーネント',
            'description' => 'コンポーネントは、ステータスページに影響するシステムの各部分を表します。',
        ],
    ],
    'last_updated' => '最終更新 :timestamp',
    'view_details' => '詳細を表示',
    'form' => [
        'name_label' => '名前',
        'status_label' => 'ステータス',
        'description_label' => '説明',
        'component_group_label' => 'コンポーネントグループ',
        'link_label' => 'リンク',
        'link_helper' => 'コンポーネントに関連する任意のリンクです。',
    ],
    'status' => [
        'operational' => '稼働中',
        'performance_issues' => 'パフォーマンスの問題',
        'partial_outage' => '一部障害',
        'major_outage' => '重大な障害',
        'under_maintenance' => 'メンテナンス中',
        'unknown' => '不明',
    ],

];

