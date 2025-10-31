<?php

return [
    'resource_label' => 'スケジュール|スケジュール',
    'list' => [
        'headers' => [
            'name' => '名前',
            'status' => 'ステータス',
            'scheduled_at' => '予定日時',
            'completed_at' => '完了日時',
            'created_at' => '作成日時',
            'updated_at' => '更新日時',
            'deleted_at' => '削除日時',
        ],
        'empty_state' => [
            'heading' => 'スケジュール',
            'description' => 'メンテナンスを計画・スケジュールします。',
        ],
        'actions' => [
            'record_update' => '更新を記録',
            'complete' => 'メンテナンスを完了',
        ],
    ],
    'form' => [
        'name_label' => '名前',
        'message_label' => 'メッセージ',
        'scheduled_at_label' => '予定日時',
        'completed_at_label' => '完了日時',
    ],
    'add_update' => [
        'success_title' => 'スケジュール :name を更新しました',
        'success_body' => '新しいスケジュール更新を記録しました。',
        'form' => [
            'message_label' => 'メッセージ',
            'completed_at_label' => '完了日時',
        ],
    ],
    'status' => [
        'upcoming' => '予定',
        'in_progress' => '進行中',
        'complete' => '完了',
    ],
    'planned_maintenance_header' => '計画メンテナンス',
];

