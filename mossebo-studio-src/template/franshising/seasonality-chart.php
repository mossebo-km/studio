<?php
    $labels  = toEscapedJson(['Янв.', 'Фев.', 'Мар.', 'Апр.', 'Май', 'Июн.', 'Июл.', 'Авг.', 'Сен.', 'Окт.', 'Ноя.', 'Дек.']);

    $options = toEscapedJson([
        'scales' => [
            'yAxes' => [
                [
                    'scaleShowLabels' => false,

                    'ticks' => [
                        'display' => false,
                    ],

                    'scaleLabel' => [
                        'display' => true,
                        'labelString' => __('Прибыль от проектов', 'mossebo'),
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
                        'padding' => 12
                    ],

                    'gridLines' => [
                        'tickMarkLength' => 0
                    ]
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
            'data' => [208, 216, 233, 238, 242, 259, 263, 267, 270, 287, 302, 304, 311],
        ],
        [
            'backgroundColor' => "#979797",
            'borderColor' => "#979797",
            'pointBorderColor' => "#979797",
            'pointBackgroundColor' => "#fff",
            'pointHoverBackgroundColor' => "#fff",
            'pointHoverBorderColor' => "#979797",
            'data' => [46, 55, 82, 79, 62, 90, 80, 50, 59, 128, 122, 80, 70],
        ]
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

                <ul class="chart-list mt-32">
                    <li>
                        <span class="chart-list__arrow chart-list__arrow--primary"></span> <?php _e('Mossebo', 'mossebo') ?>
                    </li>

                    <li>
                        <span class="chart-list__arrow chart-list__arrow--gray"></span> <?php _e('Другие студии', 'mossebo') ?>
                    </li>
                </ul>
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
