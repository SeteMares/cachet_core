<?php

return [
    'resource_label' => 'メトリック|メトリック',
    'list' => [
        'headers' => [
            'name' => '名前',
            'suffix' => '接尾辞',
            'default_value' => '既定値',
            'calc_type' => 'メトリック種別',
            'display_chart' => 'グラフを表示',
            'places' => '小数桁',
            'default_view' => 'デフォルトビュー',
            'threshold' => 'しきい値',
            'order' => '順序',
            'visible' => '表示',
            'points_count' => 'データポイント数',
            'created_at' => '作成日時',
            'updated_at' => '更新日時',
        ],
        'empty_state' => [
            'heading' => 'メトリック',
            'description' => 'メトリックはデータを追跡・表示するために使用します。',
        ],
    ],
    'form' => [
        'name_label' => '名前',
        'suffix_label' => '接尾辞',
        'description_label' => '説明',
        'default_view_label' => 'デフォルトビュー',
        'default_value_label' => '既定値',
        'calc_type_label' => 'メトリック種別',
        'places_label' => '小数桁',
        'threshold_label' => 'しきい値',

        'visible_label' => '表示',
        'display_chart_label' => 'グラフを表示',
        'show_when_empty_label' => '空のときも表示',
    ],
    'overview' => [
        'metric_points_label' => 'メトリックポイント',
        'metric_points_description' => '最近のメトリックポイント。',
    ],
    'sum_label' => '合計',
    'average_label' => '平均',
    'view_labels' => [
        'last_hour' => '直近1時間',
        'today' => '本日',
        'week' => '今週',
        'month' => '今月',
    ],
];

