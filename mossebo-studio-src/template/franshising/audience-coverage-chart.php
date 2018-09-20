<?php
$labels  = toEscapedJson([
    ['2013', '52 000'],
    ['2014', '74 000'],
    ['2015', '93 000'],
    ['2016', '121 000'],
    ['2017', '215 000'],
    ['2018', '450 000'],
]);

$options = toEscapedJson([
    'scales' => [
        'yAxes' => [
            [
                'ticks' => [
                    'min' => 0,
                    'max' => 500000,
                    'padding' => 12,
                    'formatNumber' => true,
                    'hideZero' => true
                ],

                'gridLines' => [
                    'offsetGridLines' => true,
                    'tickMarkLength' => 0,
                    'drawOnChartArea' => false,
                    'drawBorder' => true
                ],
            ],
        ],

        'xAxes' => [
            [
                'ticks' => [
                    'padding' => 12
                ],

                'gridLines' => [
                    'tickMarkLength' => 0
                ],
            ]
        ],
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

<div class="container">
    <h2 class="title-h2">
        <?php _e('Охват Mossebo с каждым годом повышается в', 'mossebo') ?> <span class="accent">2,5 - 3</span> <?php _e('раза', 'mossebo') ?>
    </h2>

    <div class="row">
        <div class="col-lg-4">
            <ul class="chart-list">
                <li>
                    <span class="chart-list__arrow chart-list__arrow--primary"></span>
                    <?php _e('Поток аудиториии из новых каналов: видеоплатформы и мессенджеры', 'mossebo') ?>
                </li>
            </ul>
        </div>

        <div class="col-lg-8">
            <chartjs-line
                :labels="<?= $labels ?>"
                :datasets="<?= $data ?>"
                :option="<?= $options ?>"
            ></chartjs-line>
        </div>
    </div>
</div>
