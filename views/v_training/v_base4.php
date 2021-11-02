<h1>Базовая 2.0 копия резервная всех тренировок</h1>

<?php

function show_group_list($datas){
    if($datas != ''){?>
        <div class="row">
            <div class="col-3">
                <div class="list-group" id="list-tab" role="tablist">
                    <?php
                    foreach ($datas as $data){ ?>
                        <a class="list-group-item list-group-item-action " id="list-<?=$data['video_id']?>-list" data-toggle="list" href="#list-<?=$data['video_id']?>" role="tab" aria-controls="home">
                            <?=$data['name']?>
                        </a>
                    <?php } ?>
                </div>
            </div>

            <div class="col-9">
                <div class="tab-content" id="nav-tabContent">
                    <?php
                    foreach ($datas as $data){ ?>
                        <div class="tab-pane fade show " id="list-<?=$data['video_id']?>" role="tabpanel" aria-labelledby="list-<?=$data['video_id']?>-list">
                            <?=$data['html']?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

    <?php } } ?>

<?php


$programm = [
    [
        id => '0stweek',
        name => 'Подготовительная неделя тренировок (10 дней, прохождение боли + небольшая база)',

        video_before => [
            [
                'html' => '',
                'name' => 'Базовые данные (Вес, телосложение + питание)',
                'video_id' => 'base',

                'data' => [
                    [   'html' => '<iframe width="100%" height="430" src="https://www.youtube.com/embed/jFDVBaFSOAY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                        'video_id' => '1-st',
                        'name' => 'Вес базовый'
                    ],
                    [   'html' => '<iframe width="100%" height="430" src="https://www.youtube.com/embed/Gk-zjz5bv9M" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                        'video_id' => '2-st',
                        'name' => 'Исходное телосложение'
                    ],
                    [   'html' => '<iframe width="100%" height="430" src="https://www.youtube.com/embed/LcH4HelNT4E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                        'video_id' => '3-st',
                        'name' => 'Примерное питание'
                    ],
                ]
            ],
        ],

        days => [
            [
                id_day => 'Day1Pod',
                name => 'День 1 - Ноги, грудь + бицепс',
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
//                    name_training => 'Разминка',
                    training_data => [
                        [
                            'html' => '<iframe width="100%" height="492" src="https://www.youtube.com/embed/haIV3lLlqXQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '4-st',
                            'name' => 'Разминка + подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="492" src="https://www.youtube.com/embed/zuyqD3QaBAk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '5-st',
                            'name' => 'Присед 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="492" src="https://www.youtube.com/embed/BpQSf3bNMbM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '6-st',
                            'name' => 'Присед 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/WkCettir6OY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '7-st',
                            'name' => 'Присед 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/9ydRmz5GTY8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '8-st',
                            'name' => 'Отжимания '
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/pp9rMAbvBr0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '9-st',
                            'name' => 'Наклонная жим 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/j5UWH7GJy-s" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '10-st',
                            'name' => 'Наклонная жим 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/QXh_XHd43gQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '11-st',
                            'name' => 'Наклонная жим 3 подход '
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/n9zc3Qfydhs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '12-st',
                            'name' => 'Наклонная жим 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/qp0cvTeSDxQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '13-st',
                            'name' => 'Разводка 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/RcuYcavyLKs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '14-st',
                            'name' => 'Разводка 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/ynbF5uVdtuA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '15-st',
                            'name' => 'Разводка 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/gazbWyVUn5M" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '16-st',
                            'name' => 'Жим лёжа'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/XsPYXIEPhR4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '17-st',
                            'name' => 'Плечи 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/rV96Ug5jBis" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '18-st',
                            'name' => 'Плечи 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/lq23dVFDg44" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '19-st',
                            'name' => 'Плечи 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/-ycgW3uDYt8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '20-st',
                            'name' => 'Махи 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/dVpXy4pOPkE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '21-st',
                            'name' => 'Махи 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/ZehSqIuXeBM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '22-st',
                            'name' => 'Задняя дельта 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/3YAJ8Z6lMbE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '23-st',
                            'name' => 'Задняя дельта 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/z_f2AmFMELk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '24-st',
                            'name' => 'Бицепс 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/Jq17Yw3erRA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '25-st',
                            'name' => 'Бицепс 2 подход'
                        ],
                    ]
                ],

                info_after => 'Подготовьтесь к боли на следующий день'
            ],
            [
                id_day => 'Day2Pod',
                name => 'День 2,3,4 отдых + ощущения после тренировки',
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/tBiIoHx1iM4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '26-st',
                            'name' => 'Ощущения'
                        ],
                    ]
                ],
            ],
            [
                id_day => 'Day3Pod',
                name => 'Спина, трицепс',
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку',
                data => [
                    training_data => [

                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/6gNsYagK3Tk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '27-st',
                            'name' => 'Разминка'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/dIO4e6Dhs3Q" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '28-st',
                            'name' => 'Отжимания сидя 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/uUW5zWEJzBA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '29-st',
                            'name' => 'Отжимания сидя 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/8-3VF_vck_w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '30-st',
                            'name' => 'Отжимания сидя 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/_5Mqdzo1EiU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '31-st',
                            'name' => 'Трицепс 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/qzdIzRi71sU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '32-st',
                            'name' => 'Трицепс 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/RbvCW_ro-PQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '33-st',
                            'name' => 'Трицепс 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/AG6HRFIBeZw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '34-st',
                            'name' => 'Тяга 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/LrqTZRT2lQI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '35-st',
                            'name' => 'Тяга 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/KQwaV4a1HUA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '36-st',
                            'name' => 'Тяга 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/6UcTSBuQZPQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '37-st',
                            'name' => 'Пуловер 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/7-BYMHcfVlI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '38-st',
                            'name' => 'Пуловер 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/HpL4PRJ4d8c" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '39-st',
                            'name' => 'Бицепс 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/a18OHiAbzmc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '40-st',
                            'name' => 'Бицепс 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/kUybwjq-W3o" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '41-st',
                            'name' => 'Бицепс + трапеции'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/1IQoM9NsiIs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '42-st',
                            'name' => 'Трапеции 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/SNS8uQJ4mbo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '43-st',
                            'name' => 'Становая 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/s_PGq8RJOJ8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '43-st',
                            'name' => 'Становая 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/ePXhr0Zk9lc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '44-st',
                            'name' => 'Становая 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/cOuRaPVzfXk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>Ы',
                            'video_id' => '45-st',
                            'name' => 'Пресс 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/ivYXu428-A4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '46-st',
                            'name' => 'Пресс 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/pAIrhhPMl4c" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '47-st',
                            'name' => 'Пресс 3 подход'
                        ],
                    ]
                ],
            ],
            [
                id_day => 'Day4Pod',
                name => 'День 6,7,8,9 - отдых',
                info_before => 'Боль довольно сильная, терпите.',
                data => [
                    training_data => [

                    ]
                ],

            ],
            [
                id_day => 'Day5Pod',
                name => 'День 10 - результаты',
                info_before => 'Частично боль прошла',
                data => [
                    training_data => [

                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/X4r5Xm9sq50" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '48-st',
                            'name' => 'Вес'
                        ],
                        [
                            'html' => '',
                            'video_id' => '49-st',
                            'name' => ' подход'
                        ],
                    ]
                ],

            ],
        ],
    ],
    [
        id => '1stweek',
        name => '1 неделя тренировок (7 дней , для определения базовых показателей)',
//        video_before => [
//            'html' => '',
//            'name' => 'Базовый данные (Вес, телосложение + питание)',
//            'video_id' => 'bases',
//
//            'data' => [
//                [   'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/cuew9JHuLsg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
//                    'video_id' => '50-st',
//                    'name' => 'Питание на 1 неделе'
//                ],
////                [   'html' => '',
////                    'video_id' => '52-st',
////                    'name' => ''
////                ],
//            ]
//        ],
        days => [
            [
                id_day => 'Day6Pod',
                name => '1-ы день. Ноги, грудь + бицепс',
                data => [
                    training_data => [
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/7Dbn0BgWS6A" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '51-st',
                            'name' => 'Суточное питание'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/kW9M3NrEprI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '52-st',
                            'name' => 'Разминка + БЦА'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/IjYL60v7Q1w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '53-st',
                            'name' => 'Присед 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/SyXUDIbx0XI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '54-st',
                            'name' => 'Присед 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/pWCvkP3Kd14" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '55-st',
                            'name' => 'Присед 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/GxAz6ydJVP4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '56-st',
                            'name' => 'Присед 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/x0q2xLIrE-g" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '57-st',
                            'name' => 'Присед 5 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/lU7MoBSKkLA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '58-st',
                            'name' => 'Присед плие 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/yV2p0XYuFtM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '59-st',
                            'name' => 'Присед плие 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/-p0t8Ub5pbQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '60-st',
                            'name' => 'Икры 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/Ry4AWcHicqQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '61-st',
                            'name' => 'Икры 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/tdn_LIHYjJY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '62-st',
                            'name' => 'Отжимания'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/zStoxAUuvJg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '63-st',
                            'name' => 'Наклонная 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/FM7slVW-pac" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '64-st',
                            'name' => 'Наклонная 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/zT2P4DIL47c" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '65-st',
                            'name' => 'Наклонная 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/bw8Uy1mXIA0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '66-st',
                            'name' => 'Наклонная 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/HOSx7bIH6So" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '67-st',
                            'name' => 'Наклонная 5 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/71U9LxM3K1s" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '68-st',
                            'name' => 'Разводка 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/fk8gdw7DZeo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '69-st',
                            'name' => 'Разводка 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/reUs3pAqWD4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '70+-st',
                            'name' => 'Разводка 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/hi_8jbYvCfg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '71-st',
                            'name' => 'Плечи 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/oy-uCUZCA9k" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '72-st',
                            'name' => 'Плечи 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/2yxWnTsw2Gk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '73-st',
                            'name' => 'Дельта задняя 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/muep4J1CO54" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '74-st',
                            'name' => 'Дельта задняя 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/bkgWLhdKRwk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '75-st',
                            'name' => 'Ммахи 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/8rDnABKe650" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '76-st',
                            'name' => 'Махи подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/8rDnABKe650" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '77-st',
                            'name' => 'Махи 2 подход'

                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/Or3eA3KfbOk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '78-st',
                            'name' => 'Махи 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/9ISLlx2KgEk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '79-st',
                            'name' => 'Трапеции подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/QsDj584lEwQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '80-st',
                            'name' => 'Бицепс 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/vhEasFtf7jY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '81-st',
                            'name' => 'Бицепс 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/T2HV7ekPMe0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '82-st',
                            'name' => 'Бицепс 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/FXFtTOT3YsQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '83-st',
                            'name' => 'Бицепс 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/8i_jcpPW9sA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '84-st',
                            'name' => 'Бицепс внешний хват 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/D8n0JxVzVho" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '85-st',
                            'name' => 'Бицепс внешни хват 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/y1bhg-3CAXs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '86-st',
                            'name' => 'Бицепс внутренний хват'
                        ],
                    ]
                ],

            ],
            [
                id_day => 'Day7Pod',
                name => '2 День - Пресс',
                data => [
                    training_data => [
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/VChPWurHo6E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '87-st',
                            'name' => 'Пресс 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/SUh8q5NvJtk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '88-st',
                            'name' => 'Пресс 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/MbM4dQYtFkw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '89-st',
                            'name' => 'Пресс 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/NH-RhHGoKpA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '90-st',
                            'name' => 'Пресс 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/Pahy3-t5Xg8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '91-st',
                            'name' => 'Пресс 5 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/BkhnfTd6eJM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '92-st',
                            'name' => 'Косые 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/NVLbvdinGQk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '93-st',
                            'name' => 'Косые 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/wjbuhF91Ek4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '94-st',
                            'name' => 'Косые 3 подход'
                        ],
                    ]
                ],


            ],
            [
                id_day => 'Day8Pod',
                name => '3-ий день. Спина, трицепс',
                data => [
                    training_data => [
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/vVmZmS8uwoQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '95-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/3rFhkRF1uuI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '96-st',
                            'name' => 'Разминка'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/EqD6UWGFcWw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '97-st',
                            'name' => 'Становая 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/CZIIjrssnKM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '98-st',
                            'name' => 'Становая 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/V_w4wZeiT8A" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '99-st',
                            'name' => 'Становая 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/HqoPLNpEYyM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '100-st',
                            'name' => 'Становая 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/fVdJ9BTljT4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '101-st',
                            'name' => 'Жим сидя 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/Fv3_UZpgou8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '102-st',
                            'name' => 'Жим сидя 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/SjPCeplFhkI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '103-st',
                            'name' => 'Жим сидя 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/k42b9TggVCQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '104-st',
                            'name' => 'Трицепс 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/tImdwp-1hEY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '105-st',
                            'name' => 'Трицепс 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/pDSwcxjmdNE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '106-st',
                            'name' => 'Трицепс 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/ZhVuk9K6FYo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '107-st',
                            'name' => 'Трицепс 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/YcQdzpq7z3w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '108-st',
                            'name' => 'Пуловер 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/IAaHud9B0e8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '109-st',
                            'name' => 'Пуловер 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/va01s3Yv7WU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '110-st',
                            'name' => 'Пуловер 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/ZnbVijmATu4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '111-st',
                            'name' => 'Жим узким хватом'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/gl9GCCoWD68" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '112-st',
                            'name' => 'Тяга 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/WPf0RQocf-s" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '113-st',
                            'name' => 'Тяга 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/cVhRRL6Jw9A" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '114-st',
                            'name' => 'Тяга 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/4HJFzEMY6Gg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '115-st',
                            'name' => 'Трапеции 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/aQ2o59zssf4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '116-st',
                            'name' => 'Трапеции 2 подход'
                        ],
                    ]
                ],
            ],

            [
                id_day => 'Day9Pod',
                name => '4-ый день. Ноги, грудь + бицепс',
                data => [
                    training_data => [
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/SYsUOKT0lcw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '117-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/TRlan8Oc4CM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '118-st',
                            'name' => 'Разминка'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/CdywglSyxXY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '119-st',
                            'name' => 'Присед 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/1ZwtvTaMm94" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '120-st',
                            'name' => 'Присед 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/zoS1Snu6zcM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '121-st',
                            'name' => 'Присед 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/2i3O4DZcQBY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '122-st',
                            'name' => 'Присед 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/1pUB9Xp_l2k" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '123-st',
                            'name' => 'Присед 5 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/nfMfnlwUZ-8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '124-st',
                            'name' => 'Присед плие 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/eyaEnSs_2Sg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '125-st',
                            'name' => 'Присед плие 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/PXhL3v5SqQ4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '126-st',
                            'name' => 'Присед плие 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/T49-7DYZ2nE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '127-st',
                            'name' => 'Присед плие 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/w_a_4IzJug8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '128-st',
                            'name' => 'Икры'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/B3NqNrTxzLw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '129-st',
                            'name' => 'Отжимания'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/Zwv7HcZYvyY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '130-st',
                            'name' => 'Наклонная 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/8EJqXNwbNTA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '131-st',
                            'name' => 'Наклонная 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/NmrCxftNc4Q" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '132-st',
                            'name' => 'Наклонная 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/TBlfe4WLQRU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '133-st',
                            'name' => 'Наклонная 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/lC3VyEGdDgU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '134-st',
                            'name' => 'Наклонная 5 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/mxWOMHZ808I" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '135-st',
                            'name' => 'Наклонная 6 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/Sjp8Gd0k-Vc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '136-st',
                            'name' => 'Плечи 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/r0XuoBIYK5M" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '137-st',
                            'name' => 'Плечи 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/t24jZm3IT_c" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '138-st',
                            'name' => 'Плечи 3 подход'
                        ],
                    ]
                ],
            ],


            [
                id_day => 'DAy10Pod',
                name => '5-ый день. Спина + трицепс',
                data => [
                    training_data => [
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/Yu3hDln7S88" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '139-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/BuFK4klFzbk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '140-st',
                            'name' => 'Разминка'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/FvYbbeBvHC4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '141-st',
                            'name' => 'Жим сидя 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/1cPf_OeePRg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '142-st',
                            'name' => 'Жим сидя 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/u4XQS9aVYro" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '143-st',
                            'name' => 'Жим сидя 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/VcYiwU-Rfcc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '144-st',
                            'name' => 'Жим сидя 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/8sNDaoMUy10" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '145-st',
                            'name' => 'Становая 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/SBHQlvaM5nM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '146-st',
                            'name' => 'Становая 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/5fV5EYAKDbs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '147-st',
                            'name' => 'Становая 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/xeQDa-CdMWs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '148-st',
                            'name' => 'Трицепс 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/zNpsyRFl47U" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '149-st',
                            'name' => 'Трицепс 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/9tXKXqJHcys" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '150-st',
                            'name' => 'Трицепс 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/TigZjr1xNoQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '151-st',
                            'name' => 'Трицепс 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/7v_1rRCdqaI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '152-st',
                            'name' => 'Трицепс 5 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/VyGofETznW4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '153-st',
                            'name' => 'Трицепс 6 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/lcFgQal3hGU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '154-st',
                            'name' => 'Пуловер 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/PuJ2U7gbXDU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '155-st',
                            'name' => 'Пуловер 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/zLHlGns6RqI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '156-st',
                            'name' => 'Пуловер 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/JCVZjelk5Fg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '157-st',
                            'name' => 'Тяга 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/IvC_KQlWPoY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '158-st',
                            'name' => 'Тяга 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/CIba9bBLT5E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '159-st',
                            'name' => 'Тяга 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/06_bRQkAr5Q" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '160-st',
                            'name' => 'Тяга 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/287pqBu9Fdc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '161-st',
                            'name' => 'Бицепс 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/_yp74H2DkRU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '162-st',
                            'name' => 'Бицепс 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/Dl6ABrrdB_w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '163-st',
                            'name' => 'Бицепс 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/ta1U6AQ9m3w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '164-st',
                            'name' => 'Бицепс 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/Cbkm8XjzCZ0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '165-st',
                            'name' => 'Бицепс 5 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/S4nAwtciJkI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '166-st',
                            'name' => 'Бицепс 6 подход'
                        ],
                    ]
                ],
            ],



        ],
        video_after => [
            [
                'html' => '',
                'name' => 'Итоги недели (Вес, телосложение)',
                'video_id' => 'base2weeek',

                'data' => [
                    [   'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/3TCBLIgvOnM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                        'video_id' => '167-st',
                        'name' => 'Вес'
                    ],
                    [   'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/mXkOcfpKYF0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                        'video_id' => '168-st',
                        'name' => 'Телосложение'
                    ],
                ]
            ],
        ],
    ],
    [
        id => '2stweek',
        name => '2 неделя тренировок (больше упор на пампинг, не на силовые показатели)',

        days => [
            [
                id_day => 'Day11Pod',
                name => '1-ы день. Ноги, грудь + бицепс',
                data => [
                    training_data => [
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/95_-c4pepYk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '169-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/stxcDuwqhJQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '170-st',
                            'name' => 'Разминка'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/TlaqDB82hmI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '171-st',
                            'name' => 'Присед 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/km4E-AdqT7s" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '172-st',
                            'name' => 'Присед 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/fis05b0v7z8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '173-st',
                            'name' => 'Присед 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/u0frYwfXHXE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '174-st',
                            'name' => 'Присед 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/tJD2xNfkOew" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '175-st',
                            'name' => 'Присед плие 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/Tx8BGbX_cg8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '176-st',
                            'name' => 'Присед плие 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/U73sTiAq42k" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '177-st',
                            'name' => 'Присед плие 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/ZtP11qMMWJs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '178-st',
                            'name' => 'Отжимания'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/Rjj0zpBESdw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '179-st',
                            'name' => 'Наклонная 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/fQB4rWwLSVo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '180-st',
                            'name' => 'Наклонная 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/I8feUl5JFYc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '181-st',
                            'name' => 'Наклонная 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/g96fMHGabXk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '182-st',
                            'name' => 'Наклонная 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/KXmn47NdusQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '183-st',
                            'name' => 'Наклонная 5 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/a0NIqJt5cSo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '184-st',
                            'name' => 'Бицепс 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/6r_CUHw9cU4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '185-st',
                            'name' => 'Бицепс 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/5C9KjFDV7Kg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '186-st',
                            'name' => 'Бицепс 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/C2rvs3EKu-c" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '187-st',
                            'name' => 'Бицепс 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/H8NPj0R0OpA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '188-st',
                            'name' => 'Бицепс 5 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/_M6DXH3az1k" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '189-st',
                            'name' => 'Бицепс 6 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/uPjPUWnwDXc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '190-st',
                            'name' => 'Бицепс 7 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/YTr5sdtlaas" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '191-st',
                            'name' => 'Бицепс 8 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/iCKYzrEvu9E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '192-st',
                            'name' => 'Трапеции'
                        ],
                    ]
                ],
            ],
            [
                id_day => 'DAY12POD',
                name => '2-ой день. Ноги + Спина + трицепс',
                data => [
                    training_data => [

                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/nTLFs99koME" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '193-st',
                            'name' => 'Разминка + БЦА'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/UpucP_25E0E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '194-st',
                            'name' => 'Присед 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/JeKEcN1xuu0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '195-st',
                            'name' => 'Присед 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/XNaNZh9xfQY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '196-st',
                            'name' => 'Присед 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/11ThovwFUFI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '197-st',
                            'name' => 'Присед 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/yMhn70hmeVo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '198-st',
                            'name' => 'Жим сидя 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/yQ3HtGY8wFM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '199-st',
                            'name' => 'Жим сидя 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/ch_PGA6QHkA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '200-st',
                            'name' => 'Жим сидя 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/BcIEfCAlLug" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '201-st',
                            'name' => 'Жим сидя 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/QmG3BbTYyuI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '202-st',
                            'name' => 'Жим сидя 5 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/UlIT7STQrIU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '203-st',
                            'name' => 'Трицепс 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/_pZyNSxFRwQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '204-st',
                            'name' => 'Трицепс 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/2qaQslH6EkQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '205-st',
                            'name' => 'Трицепс 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/xkYpLCiVph8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '206-st',
                            'name' => 'Трицепс 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/ILEUKTX9jRI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '207-st',
                            'name' => 'Пуловер 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/yglSJQyByg0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '208-st',
                            'name' => 'Пуловер 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/szJZQOxj77w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '209-st',
                            'name' => 'Тяга 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/-9uKvwmElSk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '210-st',
                            'name' => 'Тяга 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/hidUpCnu44s" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '211-st',
                            'name' => 'Тяга 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/Sp3JpZg-nX0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '212-st',
                            'name' => 'Становая 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/tI1sTDBUoN0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '213-st',
                            'name' => 'Становая 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/7tfQq39OQss" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '214-st',
                            'name' => 'Становая 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/VbA1asbIB1c" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '215-st',
                            'name' => 'Трапеции'
                        ],
                    ]
                ],
            ],

            [
                id_day => 'DAY13POD',
                name => '3-ий день. Пресс',
                data => [
                    training_data => [

                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/wTV_U4r8U_E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '216-st',
                            'name' => 'Пресс 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/c9x8q4eNpQ8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '217-st',
                            'name' => 'Пресс 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/wpNwi8RD0gE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '218-st',
                            'name' => 'Пресс 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/9maiT_TQaeA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '219-st',
                            'name' => 'Пресс 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/xU0SIY_NsWo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '220-st',
                            'name' => 'Косые 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/53GHw4VOpXE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '221-st',
                            'name' => 'Косые 2 подход'
                        ],
                    ]
                ],
            ],

            [
                id_day => 'DAY14POD',
                name => '1-ый день. Грудь + бицепс',
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/pzDOz_wCRQQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '222-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/_jnYDqyuP3s" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '223-st',
                            'name' => 'Разминка'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/APgMm-REwc8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '224-st',
                            'name' => 'Наклонная 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/1mTVq_q7ZiM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '225-st',
                            'name' => 'Наклонная 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/iaSdZlGb3QI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '226-st',
                            'name' => 'Наклонная 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/QI2NtSmpQEU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '227-st',
                            'name' => 'Наклонная 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/poUYvwUVKTw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '228-st',
                            'name' => 'Жим 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/wFjX-dgGGNk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '229-st',
                            'name' => 'Жим 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/msilbM8O-XY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '230-st',
                            'name' => 'Жим 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/Yv9U1nMFlOw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '231-st',
                            'name' => 'Жим 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/jyB-apgQNcA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '232-st',
                            'name' => 'Разводка 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/aZL1w3w8Mmw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><iframe width="100%" height="541" src="https://www.youtube.com/embed/aZL1w3w8Mmw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '233-st',
                            'name' => 'Разводка 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/mt5ra2mDpuk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '234-st',
                            'name' => 'Плечи 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/DHZOaH_0uoc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '235-st',
                            'name' => 'Плечи 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/5-nU_foe1Rc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '236-st',
                            'name' => 'Плечи 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/6DGjh2peqOk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '237-st',
                            'name' => 'Махи 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/_wjKCSTAXI4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '238-st',
                            'name' => 'Махи 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/LUYK-C7YBS8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '239-st',
                            'name' => 'Махи 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/nSmVR-zYtOY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '240-st',
                            'name' => 'Махи 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/dP0bKSHVG_Y" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '241-st',
                            'name' => 'Бицепс 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/21YVYWUDIGM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '242-st',
                            'name' => 'Бицепс 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/1wAPsKH9Qgc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '243-st',
                            'name' => 'Бицепс 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/oJ5fTJxDDag" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '244-st',
                            'name' => 'Бицепс 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/rgUjU1YNh5E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '245-st',
                            'name' => 'Бицепс 5 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/Igrlyin9uCQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '246-st',
                            'name' => 'Бицепс 6 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/c5UdBxWmVrU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '247-st',
                            'name' => 'Бицепс 7 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/3YENgOXfdzI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '248-st',
                            'name' => 'Бицепс 8 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/yE6N-4r52mE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '249-st',
                            'name' => 'Трапеции 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/dw3zQJICFcE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '250-st',
                            'name' => 'Трапеции 2 подход'
                        ],
                    ]
                ],
            ],

            [
                id_day => 'DAY15POD',
                name => 'Результаты (вес + теломложение)',
                data => [
                    training_data => [

                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/glJ-wD0Oh7w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '251-st',
                            'name' => 'Вес'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/vxy_mMdLYS8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '252-st',
                            'name' => 'Телосложение'
                        ],
                    ]
                ],
            ],

        ],

    ],

    [
        id => '4stweek',
        name => '1 неделя тренировок на протеине',

        days => [
            [
                id_day => 'DAY16POD',
                name => 'Базовые показатели перед использованием протеина',
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/J-sBsyNG9mk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '253-st',
                            'name' => 'Протеин + БЦА'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/sbp12ei_C1I" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '254-st',
                            'name' => 'Питание на неделю'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/YC_p9Cc9zDE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '255-st',
                            'name' => 'Вес исходный'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/fjIH-wfs4Fg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '256-st',
                            'name' => 'Телосложение'
                        ],
                    ]
                ],
            ],

            [
                id_day => 'DAY17POD',
                name => '1-ый день. Ноги, грудь + бицепс',
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/vcy15KdEqrY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '257-st',
                            'name' => 'Утро протеин'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/Gkdo-bI4B28" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '258-st',
                            'name' => 'Разминка'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/GhaOSuqGNe0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '259-st',
                            'name' => 'Присед 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/M8kAjNfYw44" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '260-st',
                            'name' => 'Присед 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/Zn6ps6UIpyw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '261-st',
                            'name' => 'Присед 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/jP44tJe9ivY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '262-st',
                            'name' => 'Присед 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/xM_7di6Qgw0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '263-st',
                            'name' => 'Присед 5 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/7U5OEmKTvc4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '264-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/1QQHRA6FlYo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '265-st',
                            'name' => 'Икры 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/Xpw3Pq3Td48" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '266-st',
                            'name' => 'Икры 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/SiEwzZTVs2M" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '267-st',
                            'name' => 'Икры 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/RtFRSxOnjnk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '268-st',
                            'name' => 'Наклонная 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/M7rYhzMQt_s" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '269-st',
                            'name' => 'Наклонная 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/9GLk0Pvw0Lw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '270-st',
                            'name' => 'Наклонная 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/9cvICtP9u18" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '271-st',
                            'name' => 'Наклонная 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/vAVSY8FKmzk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '272-st',
                            'name' => 'Наклонная 5 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/lceSytdVq7A" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '273-st',
                            'name' => 'Наклонная 6 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/DMSbnQhX6Vk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '274-st',
                            'name' => 'Наклонная 7 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/cQD8SYs2OAM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '275-st',
                            'name' => 'Наклонная 8 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/a8cmYZlH8D8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '276-st',
                            'name' => 'Жим 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/BMUWFR5Zwaw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '277-st',
                            'name' => 'Жим 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/0glE8c9nUuM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '278-st',
                            'name' => 'Жим 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/LLTPrZmt9AU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '279-st',
                            'name' => 'Разводка 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/n_A9i2J9TMY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '280-st',
                            'name' => 'Разводка 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/AAZenJQAhck" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '281-st',
                            'name' => 'Разводка 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/hUi82W0kJ_I" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '282-st',
                            'name' => 'Разводка 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/8SMxU1s_cgA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '283-st',
                            'name' => 'Разводка 5 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/9QHAnD6mBVY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '284-st',
                            'name' => 'Плечи 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/_30WWfD66Lw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '285-st',
                            'name' => 'Плечи 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/UnLXkds2yGA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '286-st',
                            'name' => 'Плечи 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/Rx033M_nA2o" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '287-st',
                            'name' => 'Махи 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/jysg9qmD0GA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '288-st',
                            'name' => 'Махи 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/erWYJb2bQ9A" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '289-st',
                            'name' => 'Махи 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/MRHyAAxW9DE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '290-st',
                            'name' => 'Махи 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/4bI5BCSKxAg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '291-st',
                            'name' => 'Дельта 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/en_IB2_ouXs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '292-st',
                            'name' => 'Дельта 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/V_ZBO64BYyo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '293-st',
                            'name' => 'Дельта 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/SmGLR9iYLrg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '294-st',
                            'name' => 'Пуловер 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/2ZbsiWgL6gI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '295-st',
                            'name' => 'Пуловер 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/nwMKa9cMQC8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '296-st',
                            'name' => 'Пуловер 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/V4-GBjDAmxo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '297-st',
                            'name' => 'Бицепс 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/X-eLImZZDgg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '298-st',
                            'name' => 'Бицепс 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/oZcJ4LNazdY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '299-st',
                            'name' => 'Бицепс 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/a2s_-yEUVAw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '300-st',
                            'name' => 'Бицепс 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/Bh9_nMBBls0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '301-st',
                            'name' => 'Бицепс 5 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/hmD2iJSh0DM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '302-st',
                            'name' => 'Бицепс 6 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/NvKhMLFv7CE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '303-st',
                            'name' => 'Бицепс 7 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/htMTRBzuLUw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '304-st',
                            'name' => 'Бицепс 8 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/KsfQXHoyT-c" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '305-st',
                            'name' => 'Бицепс 9 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/Inxiqr4ITgM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '306-st',
                            'name' => 'Трапеции 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/VN6FEKXW1zA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '307-st',
                            'name' => 'Трапеции 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/7Zry740Y2sw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '308-st',
                            'name' => 'Ощущения после трени'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/S2hxg6jLze0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '309-st',
                            'name' => 'Протеин после трени'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/9xRFY8u6WJ8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '310-st',
                            'name' => 'Еда после трени'
                        ],
                    ]
                ],
            ],
            [
                id_day => 'DAY18POD',
                name => '2-ой день.Пресс',
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/Wb8Bpa7Zzoc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '311-st',
                            'name' => 'Протеин + завтрак'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/J3IvLbRfXB8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '312-st',
                            'name' => 'Ощущения'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/bc3sTUiXgU8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '313-st',
                            'name' => 'Пресс 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/pnwhO0iZQ9Q" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '314-st',
                            'name' => 'Пресс 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/JjoJqMML_is" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '315-st',
                            'name' => 'Пресс 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/WuCjlhGmVoc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '316-st',
                            'name' => 'Пресс 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/MeQbJPAjBMo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '317-st',
                            'name' => 'Косые 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/aIBmv2G0-xE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '318-st',
                            'name' => 'Косые 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/G70r6LHaK7I" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '319-st',
                            'name' => 'Косые 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/wpK1GI_apX0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '320-st',
                            'name' => 'Пресс низ 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/g8tfHVewUCU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '321-st',
                            'name' => 'Пресс низ 2 подход'
                        ],
                    ]
                ],
            ],
            [
                id_day => 'DAY19POD',
                name => '3-ий день. Ноги, спина + трицепс',
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/NvSonXjDZvM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '322-st',
                            'name' => 'Утро протеин'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/nNAF39TzbGQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '323-st',
                            'name' => 'Ощущения'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/KCW9kTc_RjM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '323-st',
                            'name' => 'Протеин до трени'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/1pe1FmPWCV8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '324-st',
                            'name' => 'Присед 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/UxhcgkwtDwo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '325-st',
                            'name' => 'Присед 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/1v8Mw9zixqs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '326-st',
                            'name' => 'Присед 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/wl42wJ8cmOg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '327-st',
                            'name' => 'Присед 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/2H-EnUAJJz0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '328-st',
                            'name' => 'Присед сумо 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/D_J2RihbRtM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '329-st',
                            'name' => 'Присед сумо 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/0DYl5C-_lJQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '330-st',
                            'name' => 'Жим сидя 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/-_bRyKpL3D0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '331-st',
                            'name' => 'Жим сидя 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/8MCUoZfjijk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '332-st',
                            'name' => 'Жим сидя 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/LQhilGD-ghg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '333-st',
                            'name' => 'Жим сидя 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/OtydclqpPRM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '334-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/HamyuRkpqJ4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '335-st',
                            'name' => 'Трицепс 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/DN5K2lT-8JY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '336-st',
                            'name' => 'Трицепс 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/JjshpVOAnh0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '337-st',
                            'name' => 'Трицепс 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/OHhC62sX7gI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '338-st',
                            'name' => 'Трицепс 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/DGsrWwIpnb4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '339-st',
                            'name' => 'Трицепс 5 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/E6DNlvunTf0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '340-st',
                            'name' => 'Тяга 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/lEquxpB5vyI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '341-st',
                            'name' => 'Тяга 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/IFdAubbSTWU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '342-st',
                            'name' => 'Тяга 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/CL3ORHNN3Tk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '343-st',
                            'name' => 'Тяга 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/4KvWgvlJSCI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '344-st',
                            'name' => 'Становая 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/zyQxVxQM7g8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '345-st',
                            'name' => 'Становая 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/kqtGAl0JKt8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '346-st',
                            'name' => 'Становая 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/-B7BwM2_hLk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '346a-st',
                            'name' => 'Протеин после трени'
                        ],

                    ]
                ],
            ],
            [
                id_day => 'DAY20POD',
                name => '4-ый день. Пресс',
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/9oPKuVFCt6c" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '347-st',
                            'name' => 'Утро протеин'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/zxlxML5B7fM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '348-st',
                            'name' => 'Ощущения'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/HQkusqXGJS0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '349-st',
                            'name' => 'Пресс'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/Kqm90E6lVu4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '351-st',
                            'name' => 'Косые 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/QHICgyZQeyc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '352-st',
                            'name' => 'Косые 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/yEcFpqCzEa4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '353-st',
                            'name' => 'Косые 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/E9_epjKMK4c" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '354-st',
                            'name' => 'Ощущения после'
                        ],

                    ]
                ],
            ],
            [
                id_day => 'DAY21POD',
                name => '5-ый день. Грудь + бицепс',
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/ni_yKmhP6W0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '355-st',
                            'name' => 'Утро протеин'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/npUNq8Y6d5I" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '356-st',
                            'name' => 'Питание'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/g1LhaYEyHdo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '357-st',
                            'name' => 'Протеин + бца'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/cUpZ0ACHpj8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '358-st',
                            'name' => 'Разминка'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/fjS1U-EAtSI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '359-st',
                            'name' => 'Наклонная 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/hwno4X3S08w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '360-st',
                            'name' => 'Наклонная 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/po201JCgay0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '361-st',
                            'name' => 'Наклонная 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/um4zqHHTAx0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '362-st',
                            'name' => 'Наклонная 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/C0Hc5i6BG7I" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '363-st',
                            'name' => 'Наклонная 5 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/hUfUMd1kWj8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '364-st',
                            'name' => 'Жим 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/UagGnqHGns0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '365-st',
                            'name' => 'Жим 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/QJpP2t9KNYQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '366-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/JKdbHKgiBjg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '367-st',
                            'name' => 'Жим 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/qDbFei5usN4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '368-st',
                            'name' => 'Разводка 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/nuy9mRbp4AA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '369-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/1T7aT1qHrvU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '370-st',
                            'name' => 'Разводка 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/gZBCm_PqH40" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '371-st',
                            'name' => 'Плечи 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/kRw_xKLVH5k" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '372-st',
                            'name' => 'Плечи 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/jeS7hNw1uGQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '373-st',
                            'name' => 'Плечи 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/zvEL2DCw7HM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '374-st',
                            'name' => 'Дельта 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/ugOzn-s4Qz0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '375-st',
                            'name' => 'Дельта 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/m_6sYRuGPmY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '376-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/45s8GIDb5Dc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '377-st',
                            'name' => 'Пуловер'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/p5tJSNQMRso" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '378-st',
                            'name' => 'Махи 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/wky109ufnvo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '379-st',
                            'name' => 'Махи 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/v9S-Krlqk7Y" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '380-st',
                            'name' => 'Махи 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/HlrokgRIaDg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '381-st',
                            'name' => 'Бицепс 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/hZAJpz4qZ1I" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '382-st',
                            'name' => 'Бицепс 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/rTlgEW766tE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '383-st',
                            'name' => 'Бицепс 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/sKe-TQVP1AI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '384-st',
                            'name' => 'Бицепс 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/Ax9nr5TcbPY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '385-st',
                            'name' => 'Бицепс 5 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/zVrlZjqyokQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '386-st',
                            'name' => 'Бицепс 6 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/AVTqKAxl5rQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '387-st',
                            'name' => 'Бицепс 7 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/EJJ61m_dQwU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '388-st',
                            'name' => 'Трапеции'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/aRM5_DTyGP0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '389-st',
                            'name' => 'Протеин после трени'
                        ],
                    ]
                ],
            ],
            [
                id_day => 'DAY22POD',
                name => '6-ой день. Спина + трицепс',
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/KuABXqgBh88" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '390-st',
                            'name' => 'Утро протеин'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/Prq1SWhnUMg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '391-st',
                            'name' => 'Протеин до трени'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/NSGUavMsWQ4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '392-st',
                            'name' => 'Разминка'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/Z1_5x5M59Sg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '393-st',
                            'name' => 'Жим сидя 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/Z-qt3qNRHWE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '394-st',
                            'name' => 'Жим сидя 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/bvdLRKLimRc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '395-st',
                            'name' => 'Жим сидя 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/l-MERhyp4aU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '396-st',
                            'name' => 'Жим сидя 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/mKH1K4ZbcNc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '397-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/AlytJeFyap8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '398-st',
                            'name' => 'Трицепс 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/VhKHtRFlyZ0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '399-st',
                            'name' => 'Трицепс 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/jzmEl94PKM4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '401-st',
                            'name' => 'Трицепс 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/yxFtK8OHFng" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '402-st',
                            'name' => 'Трицепс 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/8i_RpflbDu8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '403-st',
                            'name' => 'Трицепс 5 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/cLAl6QPU1c4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '404-st',
                            'name' => 'Трицепс 6 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/_cx-n1VuMYY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '405-st',
                            'name' => 'Трицепс 7 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/vzK4Een4agA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '406-st',
                            'name' => 'Трицепс 8 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/2vf9vkortgM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '407-st',
                            'name' => 'Трицепс 9 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/x014MhCVvpY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '408-st',
                            'name' => 'Трицепс 10 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/rd2LdYZiie4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '409-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/Z0Y_Uu8Sf3g" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '410-st',
                            'name' => 'пуловер'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/GDFftVXDc4I" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '411-st',
                            'name' => 'Тяга 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/bdbLuDPOID8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '412-st',
                            'name' => 'Тяга 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/2fH5S78ZrmM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '413-st',
                            'name' => 'Тяга 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/D6YTRYimFOY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '414-st',
                            'name' => 'Тяга 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/nZRAVmwzSK8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '415-st',
                            'name' => 'Тяга 5 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/HZxbHeBGboI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '416-st',
                            'name' => 'Трапеции 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/SDzOXKONyY8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '417-st',
                            'name' => 'Трапеции 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/WBtCs0wUbvI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '418-st',
                            'name' => 'Становая 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/FMal8lskYTQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '419-st',
                            'name' => 'Становая 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/4B_7RJSyuBE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '420-st',
                            'name' => 'Становая 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/RNQcc7MwJ14" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '421-st',
                            'name' => 'Гиперэкстензия 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/zXOm_DXQKDY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '422-st',
                            'name' => 'Гиперэкстензия 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/2KwuzTXaKbs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '423-st',
                            'name' => 'Протеин после трени'
                        ],
                    ]
                ],
            ],
            [
                id_day => 'DAY23POD',
                name => '7-ой день. Грудь + бицепс',
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/zSNp5AfKv6k" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '424-st',
                            'name' => 'Утро протеин'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/pQBi1XRxziM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '425-st',
                            'name' => 'Протеин до трени'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/CGpwiOx3WIA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '426-st',
                            'name' => 'Разминка'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/jTaSTGPyt6g" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '427-st',
                            'name' => 'Ощущения'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/A2oMoDbn4jM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '428-st',
                            'name' => 'Отжимания'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/zzs8CiNxxt4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '429-st',
                            'name' => 'Наклонная 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/wI6eQQiEdlY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '430-st',
                            'name' => 'Наклонная 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/UKsPFP1AurY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '431-st',
                            'name' => 'Наклонная 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/FzaCLg7kTxo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '432-st',
                            'name' => 'Наклонная 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/xb2gyEXPjJI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '433-st',
                            'name' => 'Наклонная 5 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/ubEmhFBZR38" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '434-st',
                            'name' => 'Наклонная 6 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/HHRtIe11VRw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '435-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/SUje6hbGsLY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '436-st',
                            'name' => 'Жим 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/cmsMCDTX7Hc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '437-st',
                            'name' => 'Жим 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/SPjrphbhfkQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '438-st',
                            'name' => 'Жим 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/nWkOeXzYrBo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '439-st',
                            'name' => 'Разводка 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/1cCoWHuN_XI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '440-st',
                            'name' => 'Разводка 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/CQW0h92zw7U" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '441-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/mRq506_j-us" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '442-st',
                            'name' => 'Разводка 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/sbqr8BW6-AI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '443-st',
                            'name' => 'Разводка 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/VT0DOozFdL0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '444-st',
                            'name' => 'Плечи 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/TINxiQFp4XU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '445-st',
                            'name' => 'Плечи 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/8Saa18lRa24" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '446-st',
                            'name' => 'Плечи 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/n4QxcDWz710" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '447-st',
                            'name' => 'Плечи 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/cI8TaI32KXU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '448-st',
                            'name' => 'Плечи 5 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/8J5r2X5ExJA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '449-st',
                            'name' => 'Плечи 6 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/dTte5mzzwFY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '450-st',
                            'name' => 'Махи 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/FboQiRORGhE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '451-st',
                            'name' => 'Махи 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/8s06H22-9MY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '452-st',
                            'name' => 'Махи 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/e38cHHUimCM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '453-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/FZw2KYqH3iM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '454-st',
                            'name' => 'Махи 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/VhcBpL-s9TM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '455-st',
                            'name' => 'Бицепс 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/iJbo1u2J4rc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '456-st',
                            'name' => 'Бицепс 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/LL4qskx_meA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '457-st',
                            'name' => 'Бицепс 3 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/obBiTP6GpTA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '458-st',
                            'name' => 'Бицепс 4 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/S7NdT_KC8Ho" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '459-st',
                            'name' => 'Бицепс 5 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/dXGn7ZYiRfA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '460-st',
                            'name' => 'Бицепс 6 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/8fNFUNZsuSA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '461-st',
                            'name' => 'Трапеции 1 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/ctu5p-cs2GI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '462-st',
                            'name' => 'Трапеции 2 подход'
                        ],
                        [
                            'html' => '<iframe width="100%" height="541" src="https://www.youtube.com/embed/DaOgESAYaPc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '463-st',
                            'name' => 'Протеин после трени'
                        ],
                    ]
                ],
            ],
            [
                id_day => 'DAY24POD',
                name => 'Результаты недели',
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/_KjNpOZt8pw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '464-st',
                            'name' => 'Вес'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/S5GCoQHkgZw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '465-st',
                            'name' => 'Ощущения'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/qB_ejTTh-EQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '466-st',
                            'name' => 'Обзор вдали'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/hoZYGcdv2OY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '467-st',
                            'name' => 'Обзор вблизи'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/IA8d6iQy-qQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '468-st',
                            'name' => 'Модификация'
                        ],
                    ]
                ],
            ],


        ],
    ],
    [
        id => '5stweek',
        name => '2 неделя тренировок на протеине',

        days => [
            [
                id_day => 'DAY26POD',
                name => 'Продукты питания на 2 неделе с протеином',
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/smYuPpBLdWo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '469-st',
                            'name' => 'Продукты'
                        ],
                    ]
                ],
            ],
            [
                id_day => 'DAY27POD',
                name => '1-ый день, середина дня. Пресс',
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/aGKjADeYXlE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '470-st',
                            'name' => 'Утро протеин'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/Q9_3oHHrbw8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '471-st',
                            'name' => 'Модификация'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/lR5XfQFCH20" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '472-st',
                            'name' => 'Пресс 1 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/z-UZaKJaPAw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '473-st',
                            'name' => 'Пресс 2 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/ZlMIglbuJVo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '474-st',
                            'name' => 'Пресс 3 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/T3O0uChrYLw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '475-st',
                            'name' => 'Пресс 4 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/UJXxhKzgpjI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '476-st',
                            'name' => 'Гиперэкстензия 1 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/Snyl_VhWtAM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '477-st',
                            'name' => 'Гиперэкстензия 2 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/1JTQPoEabYg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '478-st',
                            'name' => 'Гиперэкстензия 3 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/6Co0zjSHqxU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '479-st',
                            'name' => 'Гиперэкстензия 4 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/ezsebTMJEzY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '480-st',
                            'name' => 'Косые 1 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/FYyZnhQX4W8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '481-st',
                            'name' => 'Косые 2 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/wagmwFWlrgo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '482-st',
                            'name' => 'Косые 3 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/j8kn2ZKntMk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '483-st',
                            'name' => 'Пресс низ 1 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/bRWc_xCEUVI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '484-st',
                            'name' => 'Пресс низ 2 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/e7WmK0w_4GI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '485-st',
                            'name' => 'Пресс низ 3 подход'
                        ],
                    ]
                ],
            ],
            [
                id_day => 'DAY28POD',
                name => '1-ый день, вечер. Грудь + бицепс',
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/ULxMMTQIplc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '486-st',
                            'name' => 'Питание перед треней'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/rW8yrxOdyng" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '487-st',
                            'name' => 'Бритьё'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/Bih_nQLWTvg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '488-st',
                            'name' => 'Протеин до трени'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/jaBroszPaSw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '489-st',
                            'name' => 'Разминка'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/GfZlJ0N6CBQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '490-st',
                            'name' => 'Отжимания'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/j7rz0i6jnJc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '491-st',
                            'name' => 'Наклонная 1 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/s99JyGUolaE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '492-st',
                            'name' => 'Наклонная 2 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/d9xjo80FpoA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '493-st',
                            'name' => 'Наклонная 3 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/W8IG5F4iypw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '494-st',
                            'name' => 'Наклонная 4 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/xLKzevgBJbo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '495-st',
                            'name' => 'Наклонная 5 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/b8EPLmoJGhU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '496-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/lTRYf32ZC0o" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '497-st',
                            'name' => 'Жим 1 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/me6LsCCdKmc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '498-st',
                            'name' => 'Жим 2 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/Xvu-4RuKCsk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '499-st',
                            'name' => 'Жим 3 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/REE5vksVkJE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '501-st',
                            'name' => 'Жим 4 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/KMcrM5yr5Rs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '502-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/4N47zd27kgw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '503-st',
                            'name' => 'Разводка 1 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/_gIxeMJjGMs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '504-st',
                            'name' => 'Разводка 2 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/hKNd6rUd1iU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '505-st',
                            'name' => 'Разводка 3 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/L1qlICLPQcc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '506-st',
                            'name' => 'Разводка 4 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/WjheW2nMkhs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '507-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/zrXk8SIlFR4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '508-st',
                            'name' => 'Плечи 1 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/sFGQY7yhfc4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '509-st',
                            'name' => 'Плечи 2 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/ufllmorLcKI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '510-st',
                            'name' => 'Плечи 3 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/KHLkrdHgjS4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '511-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/zAYM9BfWwX8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '512-st',
                            'name' => 'Дельта 1 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/7aXh5dhCdag" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '513-st',
                            'name' => 'Дельта 2 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/NG7wG32xyt8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '514-st',
                            'name' => 'Дельта 3 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/yW9P1eXDNDQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '515-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/GoHS_dx85f8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '516-st',
                            'name' => 'Махи 1 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/5LntWtjQeDM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '517-st',
                            'name' => 'Махи 2 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/FNRVObOp-Jg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '518-st',
                            'name' => 'Махи 3 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/KFSrD76pkzU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '519-st',
                            'name' => 'Махи 4 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/ZdmajryoNX0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '520-st',
                            'name' => 'Бицепс 1 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/6bKX3LWZSTc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '521-st',
                            'name' => 'Бицепс 2 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/5WJZh1EnN-I" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '522-st',
                            'name' => 'Бицепс 3 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/ciuB4lS4cx8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '523-st',
                            'name' => 'Бицепс 4 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/tGXB7CEF8BE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '524-st',
                            'name' => 'Вода'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/vFQk3Xa4yCc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '525-st',
                            'name' => 'Бицепс 5 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/rrQIQjgrD3w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '526-st',
                            'name' => 'Бицепс 6 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/slgbmRXSvaA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '527-st',
                            'name' => 'Бицепс 7 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/49l_UqhNJrk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '528-st',
                            'name' => 'Трапеции 1 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/gN-BhnoNBs0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '529-st',
                            'name' => 'Трапеции 2 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/w2ECpnXwQGM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '530-st',
                            'name' => 'Вид на забивке'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/XqxuYWhn4H8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '531-st',
                            'name' => 'Протеин после трени'
                        ],
                    ]
                ],
            ],
            [
                id_day => 'DAY29POD',
                name => '2-ой день. Спина + Трицепс',
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/l5NjIL6mkoI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '532-st',
                            'name' => 'Утро протеин'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/_9-SCRyfXgE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '533-st',
                            'name' => 'Завтрак'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/0BSGwS2YKLI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '534-st',
                            'name' => 'Обед 1'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/AjL65lIuBHc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '535-st',
                            'name' => 'Обед 2'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/lSW_9AXdEng" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '536-st',
                            'name' => 'Протеин до трени'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/d4_P1ZAxuQk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '537-st',
                            'name' => 'Ощущения'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/VJHUnrsVSjA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '538-st',
                            'name' => 'Разминка'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/55wEtIddglU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '539-st',
                            'name' => 'Жим сидя 1 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/YYj5GMmC6Jc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '540-st',
                            'name' => 'Жим сидя 2 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/d7NhMZT56Lk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '541-st',
                            'name' => 'Жим сидя 3 подход'
                        ],
                        [
                            'html' => '<iframe width="962" height="541" src="https://www.youtube.com/embed/WzVZ4lcDsos" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                            'video_id' => '542-st',
                            'name' => 'Жим сидя 4 подход'
                        ],
                        [
                            'html' => '',
                            'video_id' => '543-st',
                            'name' => ' подход'
                        ],
                        [
                            'html' => '',
                            'video_id' => '54-st',
                            'name' => ' подход'
                        ],
                        [
                            'html' => '',
                            'video_id' => '54-st',
                            'name' => ' подход'
                        ],
                        [
                            'html' => '',
                            'video_id' => '54-st',
                            'name' => ' подход'
                        ],
                        [
                            'html' => '',
                            'video_id' => '54-st',
                            'name' => ' подход'
                        ],
                        [
                            'html' => '',
                            'video_id' => '54-st',
                            'name' => ' подход'
                        ],
                        [
                            'html' => '',
                            'video_id' => '54-st',
                            'name' => ' подход'
                        ],
                    ]
                ],
            ],
            [
                id_day => 'DAY30POD',
                name => '3-ий день. Пресс',
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => '',
                            'video_id' => '-st',
                            'name' => ' подход'
                        ],
                    ]
                ],
            ],


        ],
    ],
//    [
//        id => '3stweek',
//        name => '3 неделя тренировок - болванка',
//
//        video_before => [
//            '',
//            ''
//        ],
//        days => [
//            [
//                id_day => 'DAY29POD',
//                name => '7-ой день. Ноги, грудь + бицепс',
//                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
//                data => [
//                    training_data => [
//
//                        [
//                            'html' => '',
//                            'video_id' => '-st',
//                            'name' => ' подход'
//                        ],
//                    ]
//                ],
//            ],
//
//
//        ],
//    ],
];
?>



<div class="accordion" id="accordionExample">
    <?php
    if($programm != '') {
        // Название недель аккардеона
        foreach ($programm as $week) {

            $info_before = $week['info_before'];
            $info_after = $week['info_after'];
            $id = $week['id'];
            $category_name = $week['name'];
            $video_before = $week['video_before'];
            // Вывод первой строки
            ?>

            <div class="card">
                <div class="card-header" id="headingTraining<?= $id ?>">
                    <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse"
                                data-target="#collapseTraining<?= $id ?>"
                                aria-expanded="true" aria-controls="collapseTraining<?= $id ?>">
                            <?= $category_name ?>
                        </button>
                    </h5>
                </div>
            </div>


            <div id="collapseTraining<?= $id ?>" class="collapse" aria-labelledby="headingTraining<?= $id ?>" data-parent="#accordionExample" style>
                <div class="card-body">
                    <!--                    .вставка ещё одного аккордеона, недельного (внутри которого дни с тренировкой)-->

                    <div class="accordion" id="accordionExample<?= $id ?>">
                        <?php
                        // ПРоверкка на подписку в группу

                        if ($video_before != '') {

                            foreach ($video_before as $before) {
                                // Выводить группу + контент на кажды момент
//                            var_dump($before);
                                if ($before != '') {
                                    $video_id = $before['video_id'];
                                    $video_name = $before['name'];
                                }
//                            $video_html = $before['html'];

                                ?>
                                <div class="card">
                                    <div class="card-header" id="heading<?= $video_id ?>">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse<?= $video_id ?>" aria-expanded="true"
                                                    aria-controls="collapse<?= $video_id ?>">
                                                <?= $video_name ?>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse<?= $video_id ?>" class="collapse" aria-labelledby="heading<?= $video_id ?>"
                                         data-parent="#accordionExample<?= $id ?>" style>
                                        <!--                                Вставка группы кнопок и всего  контента-->
                                        <div class="card-body">

                                            <?php
                                            if ($before['data'] !== NULL) { ?>


                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="list-group" id="list-tab" role="tablist">
                                                            <?php
                                                            $datas = $before['data'];
                                                            foreach ($datas as $data) { ?>
                                                                <a class="list-group-item list-group-item-action "
                                                                   id="list-<?= $data['video_id'] ?>-list" data-toggle="list"
                                                                   href="#list-<?= $data['video_id'] ?>" role="tab"
                                                                   aria-controls="home">
                                                                    <?= $data['name'] ?>
                                                                </a>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-9">
                                                        <div class="tab-content" id="nav-tabContent">
                                                            <?php
                                                            foreach ($datas as $data) { ?>
                                                                <div class="tab-pane fade show " id="list-<?= $data['video_id'] ?>"
                                                                     role="tabpanel"
                                                                     aria-labelledby="list-<?= $data['video_id'] ?>-list">
                                                                    <?= $data['html'] ?>
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>

                                                </div>

                                            <?php } ?>

                                        </div>
                                    </div>
                                </div>
                            <?php }
                        }


                        $days = $week['days'];
                        foreach ($days as $day){
                            // цикл названи дней
//                        echo  '<pre>';
//                            var_dump($day['data']);
//                        echo  '</pre>';
                            $day_id = $day['id_day'];

                            ?>

                            <!--                        Название  дня тренировки или отдыха-->
                            <div class="card">

                                <div class="card-header" id="heading<?=$day_id?>">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#collapse<?=$day_id?>" aria-expanded="true" aria-controls="collapse<?=$day_id?>">
                                            <?=$day['name']?>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse<?=$day['id_day']?>" class="collapse" aria-labelledby="heading<?=$day_id?>"
                                     data-parent="#accordionExample<?=$id?>" style>
                                    <!--                                Вставка группы кнопок и всего  контента-->
                                    <div class="card-body">

                                        <!--                                    Обновление данных до тренировки-->
                                        <!--                                    Втавка строки и группы списков-->
                                        <?php

                                        $name_training = $day['name'];
                                        $id_day = $day['id_day'];
                                        //Вывод группы списков
                                        $day = $day['data'];
                                        foreach ($day as $training){

//                                        $training_data = [];
//                                        echo 'Дамп данных';
//                                        echo  '<pre>';
//                                        var_dump($training);
//                                        echo  '</pre>';
//                                        echo 'Конец Дамп данных';
                                            show_group_list($training);  ?>




                                        <?php } ?>
                                    </div>
                                    <!--                        card-body - закрываем-->
                                </div>
                                <!--                            Закрытие Дня Трени-->



                            </div> <? } ?>
                    </div>
                    <!--                    Закрываем внутренний аккордеон-->
                </div>
            </div>

        <? } } ?>

    <!--     Закрываем аккордеон главный-->
</div>