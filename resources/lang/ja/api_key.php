<?php

return [
    'resource_label' => 'APIキー|APIキー',
    'show_token' => [
        'heading' => 'APIトークンが生成されました',
        'description' => '新しいAPIトークンをコピーしてください。セキュリティ保護のため、再表示はされません。',
        'copy_tooltip' => 'トークンをコピーしました！',
    ],
    'abilities_label' => ':resource の :ability',
    'form' => [
        'name_label' => 'トークン名',
        'expires_at_label' => '有効期限',
        'expires_at_helper' => '有効期限は午前0時になります。空欄にすると期限なし。',
        'expires_at_validation' => '有効期限は未来の日付を指定してください',
        'abilities_label' => '権限',
        'abilities_hint' => '空欄の場合、このトークンには全ての権限が付与されます。',
    ],
    'list' => [
        'actions' => [
            'revoke' => '取り消し',
        ],
        'headers' => [
            'name' => 'トークン名',
            'abilities' => '権限',
            'created_at' => '作成日時',
            'expires_at' => '有効期限',
            'updated_at' => '更新日時',
        ],
    ],
];

