<?php

return [
    'title' => 'インシデント',
    'resource_label' => 'インシデント|インシデント',
    'status' => [
        'investigating' => '調査中',
        'identified' => '原因特定',
        'watching' => '監視中',
        'fixed' => '復旧済み',
        'reported' => '報告済み',
    ],
    'edit_button' => 'インシデントを編集',
    'new_button' => '新しいインシデント',
    'no_incidents_reported' => 'インシデントの報告はありません。',
    'timeline' => [
        'past_incidents_header' => '過去のインシデント',
        'recent_incidents_header' => '最近のインシデント',
        'no_incidents_reported_between' => ':from から :to の間に報告されたインシデントはありません',
        'navigate' => [
            'previous' => '前へ',
            'today' => '今日',
            'next' => '次へ',
        ],
    ],
    'list' => [
        'headers' => [
            'name' => '名前',
            'status' => 'ステータス',
            'visible' => '表示',
            'stickied' => '固定',
            'occurred_at' => '発生日時',
            'notified_subscribers' => '購読者に通知',
            'created_at' => '作成日時',
            'updated_at' => '更新日時',
            'deleted_at' => '削除日時',
        ],
        'actions' => [
            'record_update' => '更新を記録',
            'view_incident' => 'インシデントを表示',
        ],
        'empty_state' => [
            'heading' => 'インシデント',
            'description' => 'インシデントはサービスの状態を通知し追跡するためのものです。',
        ],
    ],
    'form' => [
        'name_label' => '名前',
        'status_label' => 'ステータス',
        'message_label' => 'メッセージ',
        'occurred_at_label' => '発生日時',
        'occurred_at_helper' => '空欄の場合はインシデントの作成日時が使用されます。',
        'visible_label' => '表示',
        'user_label' => 'ユーザー',
        'user_helper' => 'インシデントを報告したユーザー。',
        'notifications_label' => '購読者に通知しますか？',
        'stickied_label' => '固定インシデントにしますか？',
        'guid_label' => 'インシデント UUID',
        'add_component' => [
            'action_label' => 'コンポーネントを追加',
            'header' => 'コンポーネント',
            'component_label' => 'コンポーネント',
            'status_label' => 'ステータス',
        ],
    ],
    'record_update' => [
        'success_title' => 'インシデント :name を更新しました',
        'success_body' => '新しいインシデント更新を記録しました。',
        'form' => [
            'message_label' => 'メッセージ',
            'status_label' => 'ステータス',
            'user_label' => 'ユーザー',
            'user_helper' => 'このインシデントを報告したユーザー。',
        ],
    ],
    'overview' => [
        'total_incidents_label' => 'インシデント総数',
        'total_incidents_description' => 'インシデントの総数。',
    ],
];

