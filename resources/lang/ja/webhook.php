<?php

return [
    'resource_label' => 'Webhook|Webhook',
    'event_selection' => [
        'all' => 'すべてのイベントを送信',
        'selected' => '選択したイベントのみ送信',
    ],
    'form' => [
        'url_label' => 'ペイロード URL',
        'url_helper' => 'イベントはこの URL に POST されます。',
        'secret_label' => 'シークレット',
        'secret_helper' => 'ペイロードはこのシークレットで署名されます。詳細は *Webhook ドキュメント* を参照してください。',
        'description_label' => '説明',
        'event_selection_label' => 'すべてのイベントを送信しますか？',
        'events_label' => 'イベント',
        'edit_secret_label' => 'シークレットを編集',
        'update_secret_label' => 'シークレットを更新',
    ],
    'attempts' => [
        'heading' => '試行',
        'empty_state' => 'この Webhook への試行はまだありません',
    ],
    'list' => [
        'headers' => [
            'url' => 'ペイロード URL',
            'success_rate_24h' => '成功率（24時間）',
        ],
    ],
];

