<h1>Базовая - 3 недели на обычном питании</h1>
<?php
function show_group_list($datas){
    $i = 1;
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
                        <div class="tab-pane" id="list-<?=$data['video_id']?>" role="tabpanel" aria-labelledby="list-<?=$data['video_id']?>-list">
                            <?=$data['html']?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

    <?php } } ?>
<?php
$price = 5000;

$programm = [
    [
        id => '0stweek',
        name => 'Подготовительная неделя тренировок (10 дней, прохождение боли + небольшая база)',

//        video_before => [
//            [
//                'html' => '',
//                'name' => 'Базовые данные (Вес, телосложение + питание)',
//                'video_id' => 'base',
//
//                'data' => [
//                    [   'html' => 'jFDVBaFSOAY',
//                        'video_id' => '1-st',
//                        'name' => 'Вес базовый'
//                    ],
//                    [   'html' => 'Gk-zjz5bv9M',
//                        'video_id' => '2-st',
//                        'name' => 'Исходное телосложение'
//                    ],
//                    [   'html' => 'LcH4HelNT4E',
//                        'video_id' => '3-st',
//                        'name' => 'Примерное питание'
//                    ],
//                ]
//            ],
//        ],

        days => [
            [
                id_day => 'Day01Pod',
                name => 'Базовые данные (Вес, телосложение + питание)',
                access => $price,
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [   'html' => 'jFDVBaFSOAY',
                            'video_id' => '1-st',
                            'name' => 'Вес базовый'
                        ],
                        [   'html' => 'Gk-zjz5bv9M',
                            'video_id' => '2-st',
                            'name' => 'Исходное телосложение'
                        ],
                        [   'html' => 'LcH4HelNT4E',
                            'video_id' => '3-st',
                            'name' => 'Примерное питание'
                        ],
                    ]
                ],
            ],
            [
                id_day => 'Day1Pod',
                name => 'День 1 - Ноги, грудь + бицепс',
                access => $price,
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
//                    name_training => 'Разминка',
                    training_data => [
                        [
                            'html' => 'haIV3lLlqXQ',
                            'video_id' => '4-st',
                            'name' => 'Разминка + подход'
                        ],
                        [
                            'html' => 'zuyqD3QaBAk',
                            'video_id' => '5-st',
                            'name' => 'Присед 2 подход'
                        ],
                        [
                            'html' => 'BpQSf3bNMbM',
                            'video_id' => '6-st',
                            'name' => 'Присед 3 подход'
                        ],
                        [
                            'html' => 'WkCettir6OY',
                            'video_id' => '7-st',
                            'name' => 'Присед 4 подход'
                        ],
                        [
                            'html' => '9ydRmz5GTY8',
                            'video_id' => '8-st',
                            'name' => 'Отжимания '
                        ],
                        [
                            'html' => 'pp9rMAbvBr0',
                            'video_id' => '9-st',
                            'name' => 'Наклонная жим 1 подход'
                        ],
                        [
                            'html' => 'j5UWH7GJy-s',
                            'video_id' => '10-st',
                            'name' => 'Наклонная жим 2 подход'
                        ],
                        [
                            'html' => 'QXh_XHd43gQ',
                            'video_id' => '11-st',
                            'name' => 'Наклонная жим 3 подход '
                        ],
                        [
                            'html' => 'n9zc3Qfydhs',
                            'video_id' => '12-st',
                            'name' => 'Наклонная жим 4 подход'
                        ],
                        [
                            'html' => 'qp0cvTeSDxQ',
                            'video_id' => '13-st',
                            'name' => 'Разводка 1 подход'
                        ],
                        [
                            'html' => 'RcuYcavyLKs',
                            'video_id' => '14-st',
                            'name' => 'Разводка 2 подход'
                        ],
                        [
                            'html' => 'ynbF5uVdtuA',
                            'video_id' => '15-st',
                            'name' => 'Разводка 3 подход'
                        ],
                        [
                            'html' => 'gazbWyVUn5M',
                            'video_id' => '16-st',
                            'name' => 'Жим лёжа'
                        ],
                        [
                            'html' => 'XsPYXIEPhR4',
                            'video_id' => '17-st',
                            'name' => 'Плечи 1 подход'
                        ],
                        [
                            'html' => 'rV96Ug5jBis',
                            'video_id' => '18-st',
                            'name' => 'Плечи 2 подход'
                        ],
                        [
                            'html' => 'lq23dVFDg44',
                            'video_id' => '19-st',
                            'name' => 'Плечи 3 подход'
                        ],
                        [
                            'html' => '-ycgW3uDYt8',
                            'video_id' => '20-st',
                            'name' => 'Махи 1 подход'
                        ],
                        [
                            'html' => 'dVpXy4pOPkE',
                            'video_id' => '21-st',
                            'name' => 'Махи 2 подход'
                        ],
                        [
                            'html' => 'ZehSqIuXeBM',
                            'video_id' => '22-st',
                            'name' => 'Задняя дельта 1 подход'
                        ],
                        [
                            'html' => '3YAJ8Z6lMbE',
                            'video_id' => '23-st',
                            'name' => 'Задняя дельта 2 подход'
                        ],
                        [
                            'html' => 'z_f2AmFMELk',
                            'video_id' => '24-st',
                            'name' => 'Бицепс 1 подход'
                        ],
                        [
                            'html' => 'Jq17Yw3erRA',
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
                access => $price,
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => 'tBiIoHx1iM4',
                            'video_id' => '26-st',
                            'name' => 'Ощущения'
                        ],
                    ]
                ],
            ],
            [
                id_day => 'Day3Pod',
                name => 'Спина, трицепс',
                access => $price,
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку',
                data => [
                    training_data => [

                        [
                            'html' => '6gNsYagK3Tk',
                            'video_id' => '27-st',
                            'name' => 'Разминка'
                        ],
                        [
                            'html' => 'dIO4e6Dhs3Q',
                            'video_id' => '28-st',
                            'name' => 'Отжимания сидя 1 подход'
                        ],
                        [
                            'html' => 'uUW5zWEJzBA',
                            'video_id' => '29-st',
                            'name' => 'Отжимания сидя 2 подход'
                        ],
                        [
                            'html' => '8-3VF_vck_w',
                            'video_id' => '30-st',
                            'name' => 'Отжимания сидя 3 подход'
                        ],
                        [
                            'html' => '_5Mqdzo1EiU',
                            'video_id' => '31-st',
                            'name' => 'Трицепс 1 подход'
                        ],
                        [
                            'html' => 'qzdIzRi71sU',
                            'video_id' => '32-st',
                            'name' => 'Трицепс 2 подход'
                        ],
                        [
                            'html' => 'RbvCW_ro-PQ',
                            'video_id' => '33-st',
                            'name' => 'Трицепс 3 подход'
                        ],
                        [
                            'html' => 'AG6HRFIBeZw',
                            'video_id' => '34-st',
                            'name' => 'Тяга 1 подход'
                        ],
                        [
                            'html' => 'LrqTZRT2lQI',
                            'video_id' => '35-st',
                            'name' => 'Тяга 2 подход'
                        ],
                        [
                            'html' => 'KQwaV4a1HUA',
                            'video_id' => '36-st',
                            'name' => 'Тяга 3 подход'
                        ],
                        [
                            'html' => '6UcTSBuQZPQ',
                            'video_id' => '37-st',
                            'name' => 'Пуловер 1 подход'
                        ],
                        [
                            'html' => '7-BYMHcfVlI',
                            'video_id' => '38-st',
                            'name' => 'Пуловер 2 подход'
                        ],
                        [
                            'html' => 'HpL4PRJ4d8c',
                            'video_id' => '39-st',
                            'name' => 'Бицепс 1 подход'
                        ],
                        [
                            'html' => 'a18OHiAbzmc',
                            'video_id' => '40-st',
                            'name' => 'Бицепс 2 подход'
                        ],
                        [
                            'html' => 'kUybwjq-W3o',
                            'video_id' => '41-st',
                            'name' => 'Бицепс + трапеции'
                        ],
                        [
                            'html' => '1IQoM9NsiIs',
                            'video_id' => '42-st',
                            'name' => 'Трапеции 2 подход'
                        ],
                        [
                            'html' => 'SNS8uQJ4mbo',
                            'video_id' => '43-st',
                            'name' => 'Становая 2 подход'
                        ],
                        [
                            'html' => 's_PGq8RJOJ8',
                            'video_id' => '43-st',
                            'name' => 'Становая 3 подход'
                        ],
                        [
                            'html' => 'ePXhr0Zk9lc',
                            'video_id' => '44-st',
                            'name' => 'Становая 4 подход'
                        ],
                        [
                            'html' => 'cOuRaPVzfXkЫ',
                            'video_id' => '45-st',
                            'name' => 'Пресс 1 подход'
                        ],
                        [
                            'html' => 'ivYXu428-A4',
                            'video_id' => '46-st',
                            'name' => 'Пресс 2 подход'
                        ],
                        [
                            'html' => 'pAIrhhPMl4c',
                            'video_id' => '47-st',
                            'name' => 'Пресс 3 подход'
                        ],
                    ]
                ],
            ],
            [
                id_day => 'Day4Pod',
                name => 'День 6,7,8,9 - отдых',
                access => $price,
                info_before => 'Боль довольно сильная, терпите.',
                data => [
                    training_data => [

                    ]
                ],

            ],
            [
                id_day => 'Day5Pod',
                name => 'День 10 - результаты',
                access => 'vk',
                info_before => 'Частично боль прошла',
                data => [
                    training_data => [

                        [
                            'html' => 'X4r5Xm9sq50',
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
//                [   'html' => 'cuew9JHuLsg',
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
                access => $price,
                data => [
                    training_data => [
                        [
                            'html' => '7Dbn0BgWS6A',
                            'video_id' => '51-st',
                            'name' => 'Суточное питание'
                        ],
                        [
                            'html' => 'kW9M3NrEprI',
                            'video_id' => '52-st',
                            'name' => 'Разминка + БЦА'
                        ],
                        [
                            'html' => 'IjYL60v7Q1w',
                            'video_id' => '53-st',
                            'name' => 'Присед 1 подход'
                        ],
                        [
                            'html' => 'SyXUDIbx0XI',
                            'video_id' => '54-st',
                            'name' => 'Присед 2 подход'
                        ],
                        [
                            'html' => 'pWCvkP3Kd14',
                            'video_id' => '55-st',
                            'name' => 'Присед 3 подход'
                        ],
                        [
                            'html' => 'GxAz6ydJVP4',
                            'video_id' => '56-st',
                            'name' => 'Присед 4 подход'
                        ],
                        [
                            'html' => 'x0q2xLIrE-g',
                            'video_id' => '57-st',
                            'name' => 'Присед 5 подход'
                        ],
                        [
                            'html' => 'lU7MoBSKkLA',
                            'video_id' => '58-st',
                            'name' => 'Присед плие 1 подход'
                        ],
                        [
                            'html' => 'yV2p0XYuFtM',
                            'video_id' => '59-st',
                            'name' => 'Присед плие 2 подход'
                        ],
                        [
                            'html' => '-p0t8Ub5pbQ',
                            'video_id' => '60-st',
                            'name' => 'Икры 1 подход'
                        ],
                        [
                            'html' => 'Ry4AWcHicqQ',
                            'video_id' => '61-st',
                            'name' => 'Икры 2 подход'
                        ],
                        [
                            'html' => 'tdn_LIHYjJY',
                            'video_id' => '62-st',
                            'name' => 'Отжимания'
                        ],
                        [
                            'html' => 'zStoxAUuvJg',
                            'video_id' => '63-st',
                            'name' => 'Наклонная 1 подход'
                        ],
                        [
                            'html' => 'FM7slVW-pac',
                            'video_id' => '64-st',
                            'name' => 'Наклонная 2 подход'
                        ],
                        [
                            'html' => 'zT2P4DIL47c',
                            'video_id' => '65-st',
                            'name' => 'Наклонная 3 подход'
                        ],
                        [
                            'html' => 'bw8Uy1mXIA0',
                            'video_id' => '66-st',
                            'name' => 'Наклонная 4 подход'
                        ],
                        [
                            'html' => 'HOSx7bIH6So',
                            'video_id' => '67-st',
                            'name' => 'Наклонная 5 подход'
                        ],
                        [
                            'html' => '71U9LxM3K1s',
                            'video_id' => '68-st',
                            'name' => 'Разводка 1 подход'
                        ],
                        [
                            'html' => 'fk8gdw7DZeo',
                            'video_id' => '69-st',
                            'name' => 'Разводка 2 подход'
                        ],
                        [
                            'html' => 'reUs3pAqWD4',
                            'video_id' => '70+-st',
                            'name' => 'Разводка 3 подход'
                        ],
                        [
                            'html' => 'hi_8jbYvCfg',
                            'video_id' => '71-st',
                            'name' => 'Плечи 1 подход'
                        ],
                        [
                            'html' => 'oy-uCUZCA9k',
                            'video_id' => '72-st',
                            'name' => 'Плечи 2 подход'
                        ],
                        [
                            'html' => '2yxWnTsw2Gk',
                            'video_id' => '73-st',
                            'name' => 'Дельта задняя 1 подход'
                        ],
                        [
                            'html' => 'muep4J1CO54',
                            'video_id' => '74-st',
                            'name' => 'Дельта задняя 2 подход'
                        ],
                        [
                            'html' => 'bkgWLhdKRwk',
                            'video_id' => '75-st',
                            'name' => 'Ммахи 1 подход'
                        ],
                        [
                            'html' => '8rDnABKe650',
                            'video_id' => '76-st',
                            'name' => 'Махи подход'
                        ],
                        [
                            'html' => '8rDnABKe650',
                            'video_id' => '77-st',
                            'name' => 'Махи 2 подход'

                        ],
                        [
                            'html' => 'Or3eA3KfbOk',
                            'video_id' => '78-st',
                            'name' => 'Махи 3 подход'
                        ],
                        [
                            'html' => '9ISLlx2KgEk',
                            'video_id' => '79-st',
                            'name' => 'Трапеции подход'
                        ],
                        [
                            'html' => 'QsDj584lEwQ',
                            'video_id' => '80-st',
                            'name' => 'Бицепс 1 подход'
                        ],
                        [
                            'html' => 'vhEasFtf7jY',
                            'video_id' => '81-st',
                            'name' => 'Бицепс 2 подход'
                        ],
                        [
                            'html' => 'T2HV7ekPMe0',
                            'video_id' => '82-st',
                            'name' => 'Бицепс 3 подход'
                        ],
                        [
                            'html' => 'FXFtTOT3YsQ',
                            'video_id' => '83-st',
                            'name' => 'Бицепс 4 подход'
                        ],
                        [
                            'html' => '8i_jcpPW9sA',
                            'video_id' => '84-st',
                            'name' => 'Бицепс внешний хват 1 подход'
                        ],
                        [
                            'html' => 'D8n0JxVzVho',
                            'video_id' => '85-st',
                            'name' => 'Бицепс внешни хват 2 подход'
                        ],
                        [
                            'html' => 'y1bhg-3CAXs',
                            'video_id' => '86-st',
                            'name' => 'Бицепс внутренний хват'
                        ],
                    ]
                ],

            ],
            [
                id_day => 'Day7Pod',
                name => '2 День - Пресс',
                access => $price,
                data => [
                    training_data => [
                        [
                            'html' => 'VChPWurHo6E',
                            'video_id' => '87-st',
                            'name' => 'Пресс 1 подход'
                        ],
                        [
                            'html' => 'SUh8q5NvJtk',
                            'video_id' => '88-st',
                            'name' => 'Пресс 2 подход'
                        ],
                        [
                            'html' => 'MbM4dQYtFkw',
                            'video_id' => '89-st',
                            'name' => 'Пресс 3 подход'
                        ],
                        [
                            'html' => 'NH-RhHGoKpA',
                            'video_id' => '90-st',
                            'name' => 'Пресс 4 подход'
                        ],
                        [
                            'html' => 'Pahy3-t5Xg8',
                            'video_id' => '91-st',
                            'name' => 'Пресс 5 подход'
                        ],
                        [
                            'html' => 'BkhnfTd6eJM',
                            'video_id' => '92-st',
                            'name' => 'Косые 1 подход'
                        ],
                        [
                            'html' => 'NVLbvdinGQk',
                            'video_id' => '93-st',
                            'name' => 'Косые 2 подход'
                        ],
                        [
                            'html' => 'wjbuhF91Ek4',
                            'video_id' => '94-st',
                            'name' => 'Косые 3 подход'
                        ],
                    ]
                ],


            ],
            [
                id_day => 'Day8Pod',
                name => '3-ий день. Спина, трицепс',
                access => $price,
                data => [
                    training_data => [
                        [
                            'html' => 'vVmZmS8uwoQ',
                            'video_id' => '95-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => '3rFhkRF1uuI',
                            'video_id' => '96-st',
                            'name' => 'Разминка'
                        ],
                        [
                            'html' => 'EqD6UWGFcWw',
                            'video_id' => '97-st',
                            'name' => 'Становая 1 подход'
                        ],
                        [
                            'html' => 'CZIIjrssnKM',
                            'video_id' => '98-st',
                            'name' => 'Становая 2 подход'
                        ],
                        [
                            'html' => 'V_w4wZeiT8A',
                            'video_id' => '99-st',
                            'name' => 'Становая 3 подход'
                        ],
                        [
                            'html' => 'HqoPLNpEYyM',
                            'video_id' => '100-st',
                            'name' => 'Становая 4 подход'
                        ],
                        [
                            'html' => 'fVdJ9BTljT4',
                            'video_id' => '101-st',
                            'name' => 'Жим сидя 1 подход'
                        ],
                        [
                            'html' => 'Fv3_UZpgou8',
                            'video_id' => '102-st',
                            'name' => 'Жим сидя 2 подход'
                        ],
                        [
                            'html' => 'SjPCeplFhkI',
                            'video_id' => '103-st',
                            'name' => 'Жим сидя 3 подход'
                        ],
                        [
                            'html' => 'k42b9TggVCQ',
                            'video_id' => '104-st',
                            'name' => 'Трицепс 1 подход'
                        ],
                        [
                            'html' => 'tImdwp-1hEY',
                            'video_id' => '105-st',
                            'name' => 'Трицепс 2 подход'
                        ],
                        [
                            'html' => 'pDSwcxjmdNE',
                            'video_id' => '106-st',
                            'name' => 'Трицепс 3 подход'
                        ],
                        [
                            'html' => 'ZhVuk9K6FYo',
                            'video_id' => '107-st',
                            'name' => 'Трицепс 4 подход'
                        ],
                        [
                            'html' => 'YcQdzpq7z3w',
                            'video_id' => '108-st',
                            'name' => 'Пуловер 1 подход'
                        ],
                        [
                            'html' => 'IAaHud9B0e8',
                            'video_id' => '109-st',
                            'name' => 'Пуловер 2 подход'
                        ],
                        [
                            'html' => 'va01s3Yv7WU',
                            'video_id' => '110-st',
                            'name' => 'Пуловер 3 подход'
                        ],
                        [
                            'html' => 'ZnbVijmATu4',
                            'video_id' => '111-st',
                            'name' => 'Жим узким хватом'
                        ],
                        [
                            'html' => 'gl9GCCoWD68',
                            'video_id' => '112-st',
                            'name' => 'Тяга 1 подход'
                        ],
                        [
                            'html' => 'WPf0RQocf-s',
                            'video_id' => '113-st',
                            'name' => 'Тяга 2 подход'
                        ],
                        [
                            'html' => 'cVhRRL6Jw9A',
                            'video_id' => '114-st',
                            'name' => 'Тяга 3 подход'
                        ],
                        [
                            'html' => '4HJFzEMY6Gg',
                            'video_id' => '115-st',
                            'name' => 'Трапеции 1 подход'
                        ],
                        [
                            'html' => 'aQ2o59zssf4',
                            'video_id' => '116-st',
                            'name' => 'Трапеции 2 подход'
                        ],
                    ]
                ],
            ],

            [
                id_day => 'Day9Pod',
                name => '4-ый день. Ноги, грудь + бицепс',
                access => $price,
                data => [
                    training_data => [
                        [
                            'html' => 'SYsUOKT0lcw',
                            'video_id' => '117-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => 'TRlan8Oc4CM',
                            'video_id' => '118-st',
                            'name' => 'Разминка'
                        ],
                        [
                            'html' => 'CdywglSyxXY',
                            'video_id' => '119-st',
                            'name' => 'Присед 1 подход'
                        ],
                        [
                            'html' => '1ZwtvTaMm94',
                            'video_id' => '120-st',
                            'name' => 'Присед 2 подход'
                        ],
                        [
                            'html' => 'zoS1Snu6zcM',
                            'video_id' => '121-st',
                            'name' => 'Присед 3 подход'
                        ],
                        [
                            'html' => '2i3O4DZcQBY',
                            'video_id' => '122-st',
                            'name' => 'Присед 4 подход'
                        ],
                        [
                            'html' => '1pUB9Xp_l2k',
                            'video_id' => '123-st',
                            'name' => 'Присед 5 подход'
                        ],
                        [
                            'html' => 'nfMfnlwUZ-8',
                            'video_id' => '124-st',
                            'name' => 'Присед плие 1 подход'
                        ],
                        [
                            'html' => 'eyaEnSs_2Sg',
                            'video_id' => '125-st',
                            'name' => 'Присед плие 2 подход'
                        ],
                        [
                            'html' => 'PXhL3v5SqQ4',
                            'video_id' => '126-st',
                            'name' => 'Присед плие 3 подход'
                        ],
                        [
                            'html' => 'T49-7DYZ2nE',
                            'video_id' => '127-st',
                            'name' => 'Присед плие 4 подход'
                        ],
                        [
                            'html' => 'w_a_4IzJug8',
                            'video_id' => '128-st',
                            'name' => 'Икры'
                        ],
                        [
                            'html' => 'B3NqNrTxzLw',
                            'video_id' => '129-st',
                            'name' => 'Отжимания'
                        ],
                        [
                            'html' => 'Zwv7HcZYvyY',
                            'video_id' => '130-st',
                            'name' => 'Наклонная 1 подход'
                        ],
                        [
                            'html' => '8EJqXNwbNTA',
                            'video_id' => '131-st',
                            'name' => 'Наклонная 2 подход'
                        ],
                        [
                            'html' => 'NmrCxftNc4Q',
                            'video_id' => '132-st',
                            'name' => 'Наклонная 3 подход'
                        ],
                        [
                            'html' => 'TBlfe4WLQRU',
                            'video_id' => '133-st',
                            'name' => 'Наклонная 4 подход'
                        ],
                        [
                            'html' => 'lC3VyEGdDgU',
                            'video_id' => '134-st',
                            'name' => 'Наклонная 5 подход'
                        ],
                        [
                            'html' => 'mxWOMHZ808I',
                            'video_id' => '135-st',
                            'name' => 'Наклонная 6 подход'
                        ],
                        [
                            'html' => 'Sjp8Gd0k-Vc',
                            'video_id' => '136-st',
                            'name' => 'Плечи 1 подход'
                        ],
                        [
                            'html' => 'r0XuoBIYK5M',
                            'video_id' => '137-st',
                            'name' => 'Плечи 2 подход'
                        ],
                        [
                            'html' => 't24jZm3IT_c',
                            'video_id' => '138-st',
                            'name' => 'Плечи 3 подход'
                        ],
                    ]
                ],
            ],


            [
                id_day => 'DAy10Pod',
                name => '5-ый день. Спина + трицепс',
                access => $price,
                data => [
                    training_data => [
                        [
                            'html' => 'Yu3hDln7S88',
                            'video_id' => '139-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => 'BuFK4klFzbk',
                            'video_id' => '140-st',
                            'name' => 'Разминка'
                        ],
                        [
                            'html' => 'FvYbbeBvHC4',
                            'video_id' => '141-st',
                            'name' => 'Жим сидя 1 подход'
                        ],
                        [
                            'html' => '1cPf_OeePRg',
                            'video_id' => '142-st',
                            'name' => 'Жим сидя 2 подход'
                        ],
                        [
                            'html' => 'u4XQS9aVYro',
                            'video_id' => '143-st',
                            'name' => 'Жим сидя 3 подход'
                        ],
                        [
                            'html' => 'VcYiwU-Rfcc',
                            'video_id' => '144-st',
                            'name' => 'Жим сидя 4 подход'
                        ],
                        [
                            'html' => '8sNDaoMUy10',
                            'video_id' => '145-st',
                            'name' => 'Становая 1 подход'
                        ],
                        [
                            'html' => 'SBHQlvaM5nM',
                            'video_id' => '146-st',
                            'name' => 'Становая 2 подход'
                        ],
                        [
                            'html' => '5fV5EYAKDbs',
                            'video_id' => '147-st',
                            'name' => 'Становая 3 подход'
                        ],
                        [
                            'html' => 'xeQDa-CdMWs',
                            'video_id' => '148-st',
                            'name' => 'Трицепс 1 подход'
                        ],
                        [
                            'html' => 'zNpsyRFl47U',
                            'video_id' => '149-st',
                            'name' => 'Трицепс 2 подход'
                        ],
                        [
                            'html' => '9tXKXqJHcys',
                            'video_id' => '150-st',
                            'name' => 'Трицепс 3 подход'
                        ],
                        [
                            'html' => 'TigZjr1xNoQ',
                            'video_id' => '151-st',
                            'name' => 'Трицепс 4 подход'
                        ],
                        [
                            'html' => '7v_1rRCdqaI',
                            'video_id' => '152-st',
                            'name' => 'Трицепс 5 подход'
                        ],
                        [
                            'html' => 'VyGofETznW4',
                            'video_id' => '153-st',
                            'name' => 'Трицепс 6 подход'
                        ],
                        [
                            'html' => 'lcFgQal3hGU',
                            'video_id' => '154-st',
                            'name' => 'Пуловер 1 подход'
                        ],
                        [
                            'html' => 'PuJ2U7gbXDU',
                            'video_id' => '155-st',
                            'name' => 'Пуловер 2 подход'
                        ],
                        [
                            'html' => 'zLHlGns6RqI',
                            'video_id' => '156-st',
                            'name' => 'Пуловер 3 подход'
                        ],
                        [
                            'html' => 'JCVZjelk5Fg',
                            'video_id' => '157-st',
                            'name' => 'Тяга 1 подход'
                        ],
                        [
                            'html' => 'IvC_KQlWPoY',
                            'video_id' => '158-st',
                            'name' => 'Тяга 2 подход'
                        ],
                        [
                            'html' => 'CIba9bBLT5E',
                            'video_id' => '159-st',
                            'name' => 'Тяга 3 подход'
                        ],
                        [
                            'html' => '06_bRQkAr5Q',
                            'video_id' => '160-st',
                            'name' => 'Тяга 4 подход'
                        ],
                        [
                            'html' => '287pqBu9Fdc',
                            'video_id' => '161-st',
                            'name' => 'Бицепс 1 подход'
                        ],
                        [
                            'html' => '_yp74H2DkRU',
                            'video_id' => '162-st',
                            'name' => 'Бицепс 2 подход'
                        ],
                        [
                            'html' => 'Dl6ABrrdB_w',
                            'video_id' => '163-st',
                            'name' => 'Бицепс 3 подход'
                        ],
                        [
                            'html' => 'ta1U6AQ9m3w',
                            'video_id' => '164-st',
                            'name' => 'Бицепс 4 подход'
                        ],
                        [
                            'html' => 'Cbkm8XjzCZ0',
                            'video_id' => '165-st',
                            'name' => 'Бицепс 5 подход'
                        ],
                        [
                            'html' => 'S4nAwtciJkI',
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
                    [   'html' => '3TCBLIgvOnM',
                        'video_id' => '167-st',
                        'name' => 'Вес'
                    ],
                    [   'html' => 'mXkOcfpKYF0',
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
                name => '1-ый день. Ноги, грудь + бицепс',
                access => $price,
                data => [
                    training_data => [
                        [
                            'html' => '95_-c4pepYk',
                            'video_id' => '169-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => 'stxcDuwqhJQ',
                            'video_id' => '170-st',
                            'name' => 'Разминка'
                        ],
                        [
                            'html' => 'TlaqDB82hmI',
                            'video_id' => '171-st',
                            'name' => 'Присед 1 подход'
                        ],
                        [
                            'html' => 'km4E-AdqT7s',
                            'video_id' => '172-st',
                            'name' => 'Присед 2 подход'
                        ],
                        [
                            'html' => 'fis05b0v7z8',
                            'video_id' => '173-st',
                            'name' => 'Присед 3 подход'
                        ],
                        [
                            'html' => 'u0frYwfXHXE',
                            'video_id' => '174-st',
                            'name' => 'Присед 4 подход'
                        ],
                        [
                            'html' => 'tJD2xNfkOew',
                            'video_id' => '175-st',
                            'name' => 'Присед плие 1 подход'
                        ],
                        [
                            'html' => 'Tx8BGbX_cg8',
                            'video_id' => '176-st',
                            'name' => 'Присед плие 2 подход'
                        ],
                        [
                            'html' => 'U73sTiAq42k',
                            'video_id' => '177-st',
                            'name' => 'Присед плие 3 подход'
                        ],
                        [
                            'html' => 'ZtP11qMMWJs',
                            'video_id' => '178-st',
                            'name' => 'Отжимания'
                        ],
                        [
                            'html' => 'Rjj0zpBESdw',
                            'video_id' => '179-st',
                            'name' => 'Наклонная 1 подход'
                        ],
                        [
                            'html' => 'fQB4rWwLSVo',
                            'video_id' => '180-st',
                            'name' => 'Наклонная 2 подход'
                        ],
                        [
                            'html' => 'I8feUl5JFYc',
                            'video_id' => '181-st',
                            'name' => 'Наклонная 3 подход'
                        ],
                        [
                            'html' => 'g96fMHGabXk',
                            'video_id' => '182-st',
                            'name' => 'Наклонная 4 подход'
                        ],
                        [
                            'html' => 'KXmn47NdusQ',
                            'video_id' => '183-st',
                            'name' => 'Наклонная 5 подход'
                        ],
                        [
                            'html' => 'a0NIqJt5cSo',
                            'video_id' => '184-st',
                            'name' => 'Бицепс 1 подход'
                        ],
                        [
                            'html' => '6r_CUHw9cU4',
                            'video_id' => '185-st',
                            'name' => 'Бицепс 2 подход'
                        ],
                        [
                            'html' => '5C9KjFDV7Kg',
                            'video_id' => '186-st',
                            'name' => 'Бицепс 3 подход'
                        ],
                        [
                            'html' => 'C2rvs3EKu-c',
                            'video_id' => '187-st',
                            'name' => 'Бицепс 4 подход'
                        ],
                        [
                            'html' => 'H8NPj0R0OpA',
                            'video_id' => '188-st',
                            'name' => 'Бицепс 5 подход'
                        ],
                        [
                            'html' => '_M6DXH3az1k',
                            'video_id' => '189-st',
                            'name' => 'Бицепс 6 подход'
                        ],
                        [
                            'html' => 'uPjPUWnwDXc',
                            'video_id' => '190-st',
                            'name' => 'Бицепс 7 подход'
                        ],
                        [
                            'html' => 'YTr5sdtlaas',
                            'video_id' => '191-st',
                            'name' => 'Бицепс 8 подход'
                        ],
                        [
                            'html' => 'iCKYzrEvu9E',
                            'video_id' => '192-st',
                            'name' => 'Трапеции'
                        ],
                    ]
                ],
            ],
            [
                id_day => 'DAY12POD',
                name => '3-ий день. Ноги + Спина + трицепс',
                access => $price,
                data => [
                    training_data => [

                        [
                            'html' => 'nTLFs99koME',
                            'video_id' => '193-st',
                            'name' => 'Разминка + БЦА'
                        ],
                        [
                            'html' => 'UpucP_25E0E',
                            'video_id' => '194-st',
                            'name' => 'Присед 1 подход'
                        ],
                        [
                            'html' => 'JeKEcN1xuu0',
                            'video_id' => '195-st',
                            'name' => 'Присед 2 подход'
                        ],
                        [
                            'html' => 'XNaNZh9xfQY',
                            'video_id' => '196-st',
                            'name' => 'Присед 3 подход'
                        ],
                        [
                            'html' => '11ThovwFUFI',
                            'video_id' => '197-st',
                            'name' => 'Присед 4 подход'
                        ],
                        [
                            'html' => 'yMhn70hmeVo',
                            'video_id' => '198-st',
                            'name' => 'Жим сидя 1 подход'
                        ],
                        [
                            'html' => 'yQ3HtGY8wFM',
                            'video_id' => '199-st',
                            'name' => 'Жим сидя 2 подход'
                        ],
                        [
                            'html' => 'ch_PGA6QHkA',
                            'video_id' => '200-st',
                            'name' => 'Жим сидя 3 подход'
                        ],
                        [
                            'html' => 'BcIEfCAlLug',
                            'video_id' => '201-st',
                            'name' => 'Жим сидя 4 подход'
                        ],
                        [
                            'html' => 'QmG3BbTYyuI',
                            'video_id' => '202-st',
                            'name' => 'Жим сидя 5 подход'
                        ],
                        [
                            'html' => 'UlIT7STQrIU',
                            'video_id' => '203-st',
                            'name' => 'Трицепс 1 подход'
                        ],
                        [
                            'html' => '_pZyNSxFRwQ',
                            'video_id' => '204-st',
                            'name' => 'Трицепс 2 подход'
                        ],
                        [
                            'html' => '2qaQslH6EkQ',
                            'video_id' => '205-st',
                            'name' => 'Трицепс 3 подход'
                        ],
                        [
                            'html' => 'xkYpLCiVph8',
                            'video_id' => '206-st',
                            'name' => 'Трицепс 4 подход'
                        ],
                        [
                            'html' => 'ILEUKTX9jRI',
                            'video_id' => '207-st',
                            'name' => 'Пуловер 1 подход'
                        ],
                        [
                            'html' => 'yglSJQyByg0',
                            'video_id' => '208-st',
                            'name' => 'Пуловер 2 подход'
                        ],
                        [
                            'html' => 'szJZQOxj77w',
                            'video_id' => '209-st',
                            'name' => 'Тяга 1 подход'
                        ],
                        [
                            'html' => '-9uKvwmElSk',
                            'video_id' => '210-st',
                            'name' => 'Тяга 2 подход'
                        ],
                        [
                            'html' => 'hidUpCnu44s',
                            'video_id' => '211-st',
                            'name' => 'Тяга 3 подход'
                        ],
                        [
                            'html' => 'Sp3JpZg-nX0',
                            'video_id' => '212-st',
                            'name' => 'Становая 1 подход'
                        ],
                        [
                            'html' => 'tI1sTDBUoN0',
                            'video_id' => '213-st',
                            'name' => 'Становая 2 подход'
                        ],
                        [
                            'html' => '7tfQq39OQss',
                            'video_id' => '214-st',
                            'name' => 'Становая 3 подход'
                        ],
                        [
                            'html' => 'VbA1asbIB1c',
                            'video_id' => '215-st',
                            'name' => 'Трапеции'
                        ],
                    ]
                ],
            ],

            [
                id_day => 'DAY13POD',
                name => '4-ый день. Пресс',
                access => $price,
                data => [
                    training_data => [

                        [
                            'html' => 'wTV_U4r8U_E',
                            'video_id' => '216-st',
                            'name' => 'Пресс 1 подход'
                        ],
                        [
                            'html' => 'c9x8q4eNpQ8',
                            'video_id' => '217-st',
                            'name' => 'Пресс 2 подход'
                        ],
                        [
                            'html' => 'wpNwi8RD0gE',
                            'video_id' => '218-st',
                            'name' => 'Пресс 3 подход'
                        ],
                        [
                            'html' => '9maiT_TQaeA',
                            'video_id' => '219-st',
                            'name' => 'Пресс 4 подход'
                        ],
                        [
                            'html' => 'xU0SIY_NsWo',
                            'video_id' => '220-st',
                            'name' => 'Косые 1 подход'
                        ],
                        [
                            'html' => '53GHw4VOpXE',
                            'video_id' => '221-st',
                            'name' => 'Косые 2 подход'
                        ],
                    ]
                ],
            ],

            [
                id_day => 'DAY14POD',
                name => '6-ой день. Ноги + Грудь + бицепс',
                access => $price,
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [


                        [
                            'html' => 'pzDOz_wCRQQ',
                            'video_id' => '222-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => '_jnYDqyuP3s',
                            'video_id' => '223-st',
                            'name' => 'Разминка'
                        ],

                        [
                            'html' => 'KmSIkMz5L_s',
                            'video_id' => '223a-st',
                            'name' => 'Присед 1 подход'
                        ],
                        [
                            'html' => 'HDIkxWSz6P0',
                            'video_id' => '223b-st',
                            'name' => 'Присед 2 подход'
                        ],
                        [
                            'html' => 'olOxq2JrB4Q',
                            'video_id' => '223c-st',
                            'name' => 'Присед 3 подход'
                        ],
                        [
                            'html' => 'lWepHr4XIU8',
                            'video_id' => '223d-st',
                            'name' => 'Присед 4 подход'
                        ],
                        [
                            'html' => 'APgMm-REwc8',
                            'video_id' => '224-st',
                            'name' => 'Наклонная 1 подход'
                        ],
                        [
                            'html' => '1mTVq_q7ZiM',
                            'video_id' => '225-st',
                            'name' => 'Наклонная 2 подход'
                        ],
                        [
                            'html' => 'iaSdZlGb3QI',
                            'video_id' => '226-st',
                            'name' => 'Наклонная 3 подход'
                        ],
                        [
                            'html' => 'QI2NtSmpQEU',
                            'video_id' => '227-st',
                            'name' => 'Наклонная 4 подход'
                        ],
                        [
                            'html' => 'poUYvwUVKTw',
                            'video_id' => '228-st',
                            'name' => 'Жим 1 подход'
                        ],
                        [
                            'html' => 'wFjX-dgGGNk',
                            'video_id' => '229-st',
                            'name' => 'Жим 2 подход'
                        ],
                        [
                            'html' => 'msilbM8O-XY',
                            'video_id' => '230-st',
                            'name' => 'Жим 3 подход'
                        ],
                        [
                            'html' => 'Yv9U1nMFlOw',
                            'video_id' => '231-st',
                            'name' => 'Жим 4 подход'
                        ],
                        [
                            'html' => 'jyB-apgQNcA',
                            'video_id' => '232-st',
                            'name' => 'Разводка 1 подход'
                        ],
                        [
                            'html' => 'aZL1w3w8MmwaZL1w3w8Mmw',
                            'video_id' => '233-st',
                            'name' => 'Разводка 2 подход'
                        ],
                        [
                            'html' => 'mt5ra2mDpuk',
                            'video_id' => '234-st',
                            'name' => 'Плечи 1 подход'
                        ],
                        [
                            'html' => 'DHZOaH_0uoc',
                            'video_id' => '235-st',
                            'name' => 'Плечи 2 подход'
                        ],
                        [
                            'html' => '5-nU_foe1Rc',
                            'video_id' => '236-st',
                            'name' => 'Плечи 3 подход'
                        ],
                        [
                            'html' => '6DGjh2peqOk',
                            'video_id' => '237-st',
                            'name' => 'Махи 1 подход'
                        ],
                        [
                            'html' => '_wjKCSTAXI4',
                            'video_id' => '238-st',
                            'name' => 'Махи 2 подход'
                        ],
                        [
                            'html' => 'LUYK-C7YBS8',
                            'video_id' => '239-st',
                            'name' => 'Махи 3 подход'
                        ],
                        [
                            'html' => 'nSmVR-zYtOY',
                            'video_id' => '240-st',
                            'name' => 'Махи 4 подход'
                        ],
                        [
                            'html' => 'dP0bKSHVG_Y',
                            'video_id' => '241-st',
                            'name' => 'Бицепс 1 подход'
                        ],
                        [
                            'html' => '21YVYWUDIGM',
                            'video_id' => '242-st',
                            'name' => 'Бицепс 2 подход'
                        ],
                        [
                            'html' => '1wAPsKH9Qgc',
                            'video_id' => '243-st',
                            'name' => 'Бицепс 3 подход'
                        ],
                        [
                            'html' => 'oJ5fTJxDDag',
                            'video_id' => '244-st',
                            'name' => 'Бицепс 4 подход'
                        ],
                        [
                            'html' => 'rgUjU1YNh5E',
                            'video_id' => '245-st',
                            'name' => 'Бицепс 5 подход'
                        ],
                        [
                            'html' => 'Igrlyin9uCQ',
                            'video_id' => '246-st',
                            'name' => 'Бицепс 6 подход'
                        ],
                        [
                            'html' => 'c5UdBxWmVrU',
                            'video_id' => '247-st',
                            'name' => 'Бицепс 7 подход'
                        ],
                        [
                            'html' => '3YENgOXfdzI',
                            'video_id' => '248-st',
                            'name' => 'Бицепс 8 подход'
                        ],
                        [
                            'html' => 'yE6N-4r52mE',
                            'video_id' => '249-st',
                            'name' => 'Трапеции 1 подход'
                        ],
                        [
                            'html' => 'dw3zQJICFcE',
                            'video_id' => '250-st',
                            'name' => 'Трапеции 2 подход'
                        ],
                    ]
                ],
            ],

            [
                id_day => 'DAY15POD',
                name => 'Результаты (вес + телосложение)',
                access => 'vk',
                data => [
                    training_data => [

                        [
                            'html' => 'glJ-wD0Oh7w',
                            'video_id' => '251-st',
                            'name' => 'Вес'
                        ],
                        [
                            'html' => 'vxy_mMdLYS8',
                            'video_id' => '252-st',
                            'name' => 'Телосложение'
                        ],
                    ]
                ],
            ],

        ],

    ],
//        [
//        id => '3stweek',
//        name => '3 неделя тренировок - болванка',
//
//        days => [
//            [
//                id_day => 'DAY13POD',
//                name => '1-ый день. Ноги, грудь + бицепс',
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
//                id_day => 'DAY13POD',
//                name => '1-ый день. Ноги, грудь + бицепс',
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
                                                                    <iframe width="100%" height="541" src="https://www.youtube.com/embed/<?= $data['html'] ?>"
                                                                            asd frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>

                                                                    </iframe>
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
                            // Проверка на подпискку группы и баланс
                            if($_SESSION['user']['group'] == 1 or $price <= $_SESSION['user']['id_all_payments']) {
                                //Проверка на достп по груупп вк или баланс
                                if ( $_SESSION['user']['id_all_payments'] >= $price  or $day['access'] == 'vk' ) {

                                    $day_id = $day['id_day'];
                                    ?>
                                    <!--                        Название  дня тренировки или отдыха-->
                                    <div class="card">

                                        <div class="card-header" id="heading<?= $day_id ?>">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse<?= $day_id ?>" aria-expanded="true"
                                                        aria-controls="collapse<?= $day_id ?>">
                                                    <?= $day['name'] ?>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapse<?= $day['id_day'] ?>" class="collapse"
                                             aria-labelledby="heading<?= $day_id ?>"
                                             data-parent="#accordionExample<?= $id ?>" style>
                                            <!--                                Вставка группы кнопок и всего  контента-->
                                            <div class="card-body">
                                                <!--                                    Обновление данных до тренировки-->
                                                <!--                                    Втавка строки и группы списков-->
                                                <?php
                                                $name_training = $day['name'];
                                                $id_day = $day['id_day'];
                                                //Вывод группы списков
                                                $day = $day['data'];
                                                foreach ($day as $training) {
                                                    show_group_list($training); ?>
                                                <?php } ?>
                                            </div>
                                            <!--                        card-body - закрываем-->
                                        </div>
                                        <!--                            Закрытие Дня Трени-->


                                    </div>
                                    <?
                                }
                            }
                        } ?>
                    </div>
                    <!--                    Закрываем внутренний аккордеон-->
                </div>
            </div>

        <? } } ?>

    <!--     Закрываем аккордеон главный-->
</div>
<?php
//    var_dump($scripts);

if($scripts != ''){
    foreach ($scripts as $script){
        echo '<script src="'.$script.'"></script>';
    }
}
?>