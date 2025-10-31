<?php

return [
    'level' => [
        'admin' => '管理者',
        'user' => 'ユーザー',
    ],
    'resource_label' => 'ユーザー|ユーザー',
    'list' => [
        'headers' => [
            'name' => '名前',
            'email' => 'メールアドレス',
            'email_verified_at' => 'メール確認日時',
            'is_admin' => '管理者？',
        ],
        'actions' => [
            'verify_email' => 'メールを確認',
        ],
    ],
    'form' => [
        'name_label' => '名前',
        'email_label' => 'メールアドレス',
        'password_label' => 'パスワード',
        'password_confirmation_label' => 'パスワード（確認）',
        'preferred_locale' => '優先ロケール',
        'preferred_locale_system_default' => 'システム既定',
        'is_admin_label' => '管理者',
    ],
];

