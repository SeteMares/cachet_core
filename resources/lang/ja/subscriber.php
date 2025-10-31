<?php

return [
    'resource_label' => '購読者|購読者',
    'list' => [
        'headers' => [
            'email' => 'メールアドレス',
            'verify_code' => '確認コード',
            'global' => '全体',
            'phone_number' => '電話番号',
            'slack_webhook_url' => 'Slack Webhook URL',
            'verified_at' => '確認日時',
            'created_at' => '作成日時',
            'updated_at' => '更新日時',
        ],
        'empty_state' => [
            'heading' => '購読者',
            'description' => '購読者は、通知を受け取るためにステータスページを購読したユーザーです。',
        ],
        'actions' => [
            'verify_label' => '確認',
        ],
    ],
    'form' => [
        'email_label' => 'メールアドレス',
        'verify_code_label' => '確認コード',
        'verified_at_label' => '確認日時',
        'global_label' => '全体',
    ],
    'overview' => [
        'total_subscribers_label' => '購読者総数',
        'total_subscribers_description' => '購読者の総数。',
    ],
];

