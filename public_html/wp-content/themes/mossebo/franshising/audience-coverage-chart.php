<?php
$labels = [
    ['2013'],
    ['2014'],
    ['2015'],
    ['2016'],
    ['2017'],
    ['2018'],
    ['2019'],
];

$labels  = toEscapedJson($labels);

$options = toEscapedJson([
    'scales' => [
        'yAxes' => [
            [
                'ticks' => [
                    'min' => 0,
                    'max' => 140000,
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
        'backgroundColor' => "#FF8F52",
        'borderColor' => "#FF8F52",
        'pointBorderColor' => "#FF8F52",
        'pointBackgroundColor' => "#fff",
        'pointHoverBackgroundColor' => "#fff",
        'pointHoverBorderColor' => "#FF8F52",
        'data' => [5000, 29000, 53000, 62000, 87000, 120000, 140000],
    ],
    [
        'backgroundColor' => "#FDD43E",
        'borderColor' => "#FDD43E",
        'pointBorderColor' => "#FDD43E",
        'pointBackgroundColor' => "#fff",
        'pointHoverBackgroundColor' => "#fff",
        'pointHoverBorderColor' => "#FDD43E",
        'data' => [5000, 18000, 32000, 59000, 88000, 93000, 110000],
    ],
    [
        'backgroundColor' => "#65D6FF",
        'borderColor' => "#65D6FF",
        'pointBorderColor' => "#65D6FF",
        'pointBackgroundColor' => "#fff",
        'pointHoverBackgroundColor' => "#fff",
        'pointHoverBorderColor' => "#65D6FF",
        'data' => [5000, 17000, 56000, 40000, 59000, 81000, 109000],
    ],
    [
        'backgroundColor' => "#9DAAC8",
        'borderColor' => "#9DAAC8",
        'pointBorderColor' => "#9DAAC8",
        'pointBackgroundColor' => "#fff",
        'pointHoverBackgroundColor' => "#fff",
        'pointHoverBorderColor' => "#9DAAC8",
        'data' => [5000, 16000, 26000, 33000, 46000, 69000, 79000],
    ],
    [
        'backgroundColor' => "#FF001F",
        'borderColor' => "#FF001F",
        'pointBorderColor' => "#FF001F",
        'pointBackgroundColor' => "#fff",
        'pointHoverBackgroundColor' => "#fff",
        'pointHoverBorderColor' => "#FF001F",
        'data' => [5000, 9000, 21000, 23000, 38000, 49000, 62000],
    ],
];

foreach ($data as $key => $line) {
    $data[$key] = array_merge($lineConfig, $line);
}

$data = toEscapedJson($data);
?>

<div class="container">
    <div class="studio-audience">
        <h2 class="studio-audience__title title-h2">
            <?php _e('Заявки на дизайн с источников Mossebo растут в', 'mossebo') ?> <span class="accent">2,5 - 3</span> <?php _e('раза в год', 'mossebo') ?>
        </h2>

        <div class="row">
            <div class="col-lg-4">
                <ul class="studio-audience__list chart-list">
                    <li>
                        <span class="chart-list__arrow chart-list__arrow--instagram"></span>
                        <?php _e('Инстаграм', 'mossebo') ?>
                    </li>

                    <li>
                        <span class="chart-list__arrow chart-list__arrow--yandex"></span>
                        <?php _e('Яндекс', 'mossebo') ?>
                    </li>

                    <li>
                        <span class="chart-list__arrow chart-list__arrow--google"></span>
                        <?php _e('Google', 'mossebo') ?>
                    </li>

                    <li>
                        <span class="chart-list__arrow chart-list__arrow--my-target"></span>
                        <?php _e('MyTarget', 'mossebo') ?>
                    </li>

                    <li>
                        <span class="chart-list__arrow chart-list__arrow--youtube"></span>
                        <?php _e('Youtube', 'mossebo') ?>
                    </li>
                </ul>
            </div>

            <div class="col-lg-8">
                <div class="studio-audience__chart">
                    <chartjs-line
                        :labels="<?= $labels ?>"
                        :datasets="<?= $data ?>"
                        :option="<?= $options ?>"
                    ></chartjs-line>
                </div>
            </div>
        </div>
    </div>
</div>
