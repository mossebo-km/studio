<?php
$labels  = toEscapedJson(['2013', '2014', '2015', '2016', '2017', '2018']);

$options = toEscapedJson([
    'scales' => [
        'yAxes' => [
            [
                'ticks' => [
                    'fontSize' => 14,
                ],

                'gridLines' => [
                    'display' => false,
                    'offsetGridLines' => true
                ]
            ]
        ],

        'xAxes' => [
            [
                'ticks' => [
                    'fontSize' => 14,
                ],
            ]
        ]
    ],

    'layout' => [
        'padding' => [
            'top' => 0,
            'right' => 0,
            'bottom' => 0,
            'left' => 0,
        ]
    ],

    'legend' => [
        'display' => false,
    ],

    'tooltips' => [
        'enabled' => false
    ],
]);

$lineConfig = [
    'fill' => false,
    'lineTension' => 0.1,
    'borderCapStyle' => 'butt',
    'borderDash' => [],
    'borderDashOffset' => 0.0,
    'borderJoinStyle' => 'miter',
    'borderWidth' => 4,
    'pointBorderWidth' => 2,
    'pointHoverRadius' => 3,
    'pointHoverBorderWidth' => 2,
    'pointRadius' => 3,
    'pointHitRadius' => 10,
    'spanGaps' => false,
];

$data = [
    [
        'backgroundColor' => "#FDD43E",
        'borderColor' => "#FDD43E",
        'pointBorderColor' => "#FDD43E",
        'pointBackgroundColor' => "#fff",
        'pointHoverBackgroundColor' => "#fff",
        'pointHoverBorderColor' => "#FDD43E",
        'data' => [52000, 74000, 93000, 121000, 215000, 450000],
    ],
];

foreach ($data as $key => $line) {
    $data[$key] = array_merge($lineConfig, $line);
}

$data = toEscapedJson($data);
?>

<div class="seasonality-chart">
    <div class="container">

        <div class="row">
            <div class="col-lg-5">
                <h2 class="title-h2">
                    <?php _e('Mossebo не зависит от кризиса и сезонности', 'mossebo') ?>
                </h2>

                <div class="article">
                    <p>
                        <?php _e('Mossebo – бренд, не зависящий от сезонности.', 'mossebo') ?>
                        <br>
                        <?php _e('Кризисы не влияют, т.к. нет эконом-аудитории, чувствительной к кризисам.', 'mossebo') ?>
                    </p>
                </div>

                <div class="seasonality-chart__list">
                    <li><span></span> <?php _e('Mossebo', 'mossebo') ?></li>
                    <li><span></span> <?php _e('Другие студии', 'mossebo') ?></li>
                </div>
            </div>

            <div class="col-lg-7">
                <chartjs-line
                    :labels="<?= $labels ?>"
                    :datasets="<?= $data ?>"
                    :option="<?= $options ?>"
                ></chartjs-line>
            </div>
        </div>

    </div>
</div>
