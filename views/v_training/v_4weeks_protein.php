<h1>Базовая - 3,4 недели с протеином</h1>



<?php
function show_group_list($datas){
    $i = 1;
    if($datas != ''){

        ?>
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
        id => '4stweek',
        name => '3 неделя тренировок на протеине',

        days => [

            [
                id_day => 'DAY17POD',
                name => '1-ый день. Ноги, грудь + бицепс',
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                access => $price,
                data => [
                    training_data => [


                        [
                            'html' => '57OKAZu0Ah0',
                            'video_id' => '1',
                            'name' => 'утро протеин'
                        ],
                        [
                            'html' => '1_cYTS4lrZs',
                            'video_id' => '2',
                            'name' => 'ощущения'
                        ],
                        [
                            'html' => 'BkrJRxPgG-I',
                            'video_id' => '3',
                            'name' => 'протеин до трени'
                        ],
                        [
                            'html' => 'iHbg8KwcYp4',
                            'video_id' => '4',
                            'name' => 'телосложение 1'
                        ],
                        [
                            'html' => 'tB856wWXVZA',
                            'video_id' => '5',
                            'name' => 'телосложение 2'
                        ],
                        [
                            'html' => 'Sn9EmRxLJkE',
                            'video_id' => '6',
                            'name' => 'разминка'
                        ],
                        [
                            'html' => 'nQH18mZTLMI',
                            'video_id' => '7',
                            'name' => 'отжимания'
                        ],
                        [
                            'html' => 'lRFrxQ5tJHc',
                            'video_id' => '8',
                            'name' => 'наклонная 1 подход'
                        ],[
                            'html' => 'qcGrf_TZ9nk',
                            'video_id' => '9',
                            'name' => 'наклонная 2 подход'
                        ],
                        [
                            'html' => 'EzwErj35d0E',
                            'video_id' => '10',
                            'name' => 'наклонная 3 подход'
                        ],
                        [
                            'html' => 'AUI0OrGJ9OE',
                            'video_id' => '11',
                            'name' => 'наклонная 4 подход'
                        ],
                        [
                            'html' => 'crmSl2lB2EE',
                            'video_id' => '12',
                            'name' => 'наклонная 5 подход'
                        ],
                        [
                            'html' => 'zFr8JQ4u1qY',
                            'video_id' => '13',
                            'name' => 'наклонная 6 подход'
                        ],
                        [
                            'html' => 'EEBo20RlaaY',
                            'video_id' => '14',
                            'name' => 'жим 1 подход'
                        ],
                        [
                            'html' => 'Uw-JwjNz7Hg',
                            'video_id' => '15',
                            'name' => 'жим 2 подход'
                        ],
                        [
                            'html' => 'wwEKlnV_M44',
                            'video_id' => '16',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => 'wn8u9oZHf3E',
                            'video_id' => '17',
                            'name' => 'жим 3 подход'
                        ],
                        [
                            'html' => 'nokRw8h9RGk',
                            'video_id' => '18',
                            'name' => 'жим 4 подход'
                        ],
                        [
                            'html' => '-30WjTnc-aU',
                            'video_id' => '19',
                            'name' => 'разводка 1 подход'
                        ],
                        [
                            'html' => '1DH5rjY0TBI',
                            'video_id' => '20',
                            'name' => 'разводка 2 подход'
                        ],
                        [
                            'html' => '2J6wScrTYL0',
                            'video_id' => '21',
                            'name' => 'разводка 3 подход'
                        ],
                        [
                            'html' => 'wdjeBYQukn0',
                            'video_id' => '22',
                            'name' => 'разводка 4 подход'
                        ],
                        [
                            'html' => 'flKkYR1gTOc',
                            'video_id' => '23',
                            'name' => 'разводка 5 подход'
                        ],
                        [
                            'html' => 'l8-_jy0W83A',
                            'video_id' => '24',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => 'xe5OHGTLPx4',
                            'video_id' => '25',
                            'name' => 'разводка 6 подход'
                        ],
                        [
                            'html' => '9flvkGRD9N4',
                            'video_id' => '27',
                            'name' => 'разводка 7 подход'
                        ],
                        [
                            'html' => 'B-COYYgRdHc',
                            'video_id' => '28',
                            'name' => 'пуловер 1 подход'
                        ],
                        [
                            'html' => 'gP4X12f4fUg',
                            'video_id' => '29',
                            'name' => 'пуловер 2 подход'
                        ],
                        [
                            'html' => 'y2OQPFgCT_I',
                            'video_id' => '30',
                            'name' => 'пуловер 3 подход'
                        ],
                        [
                            'html' => 'bCSJJAoE1VA',
                            'video_id' => '31',
                            'name' => 'плечи 1 подход'
                        ],
                        [
                            'html' => 'j9rEcG4X7Jw',
                            'video_id' => '32',
                            'name' => 'плечи 2 подход'
                        ],
                        [
                            'html' => 'NwaCKsCyHHU',
                            'video_id' => '33',
                            'name' => 'плечи 3 подход'
                        ],
                        [
                            'html' => 'I66HZb3Y3JE',
                            'video_id' => '34',
                            'name' => 'плечи 4 подход'
                        ],
                        [
                            'html' => 'L1mDOyysYrM',
                            'video_id' => '35',
                            'name' => 'плечи 5 подход'
                        ],
                        [
                            'html' => 'OHXSgRCwI8c',
                            'video_id' => '36',
                            'name' => 'дельта 1 подход'
                        ],
                        [
                            'html' => '2d9qCDQURQk',
                            'video_id' => '37',
                            'name' => 'дельта 2 подход'
                        ],
                        [
                            'html' => 'klrnfraXuEQ',
                            'video_id' => '38',
                            'name' => 'дельта 3 подход'
                        ],
                        [
                            'html' => 'fVrwsyvgErc',
                            'video_id' => '39',
                            'name' => 'махи'
                        ],

                    ]
                ],
            ],
            [
                id_day => 'DAY18aPOD',
                name => '2-ой день, середина дня. Плечи + бицепс',
                access => $price,
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => 'MYkV9gJrPsw',
                            'video_id' => '40',
                            'name' => 'утро протеин'
                        ],
                        [
                            'html' => 'B590v21J0yw',
                            'video_id' => '41',
                            'name' => 'питание'
                        ],
                        [
                            'html' => 'pfzGJagF2mg',
                            'video_id' => '42',
                            'name' => 'питание на неделю'
                        ],
                        [
                            'html' => 'fKUnOUVjmc4',
                            'video_id' => '43',
                            'name' => 'махи 1 подход'
                        ],
                        [
                            'html' => 'B9RD-AwFMBA',
                            'video_id' => '44',
                            'name' => 'махи 2 подход'
                        ],
                        [
                            'html' => 'szTXqCyBNbs',
                            'video_id' => '45',
                            'name' => 'махи 3 подход'
                        ],
                        [
                            'html' => 'cUcrLG6-eg0',
                            'video_id' => '46',
                            'name' => 'махи 4 подход'
                        ],
                        [
                            'html' => 'ae3jkad86VM',
                            'video_id' => '47',
                            'name' => 'махи 5 подход'
                        ],
                        [
                            'html' => '_EnoQNqo2Pk',
                            'video_id' => '48',
                            'name' => 'бицепс 1 подход'
                        ],
                        [
                            'html' => 'me2kV1anOBc',
                            'video_id' => '49',
                            'name' => 'бицепс 2 подход'
                        ],
                        [
                            'html' => 'lgOKi-GKW0s',
                            'video_id' => '50',
                            'name' => 'бицепс 3 подход'
                        ],
                        [
                            'html' => 'j0h2Qtuzm3Q',
                            'video_id' => '51',
                            'name' => 'бицепс 4 подход'
                        ],
                        [
                            'html' => 'NeZcmRnkRmo',
                            'video_id' => '52',
                            'name' => 'бицепс 5 подход'
                        ],
                        [
                            'html' => '2R4J6IKbrAM',
                            'video_id' => '53',
                            'name' => 'трапеции 1 подход'
                        ],
                        [
                            'html' => 'h0qQc_NXkWE',
                            'video_id' => '54',
                            'name' => 'трапеции 2 подход'
                        ],

                    ]
                ],
            ],
            [
                id_day => 'DAY18POD',
                name => '2-ой день.Пресс',
                access => $price,
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => 'lbw6CRRAeTY',
                            'video_id' => '55',
                            'name' => 'утро протеин'
                        ],
                        [
                            'html' => '___LxTa-gdM',
                            'video_id' => '56',
                            'name' => 'завтрак'
                        ],
                        [
                            'html' => 'aHvio3GCw60',
                            'video_id' => '57',
                            'name' => 'ощущения'
                        ],
                        [
                            'html' => 'UNwzbbzuDpQ',
                            'video_id' => '58',
                            'name' => 'пресс 1 подход'
                        ],
                        [
                            'html' => 'XJg8QgEw400',
                            'video_id' => '59',
                            'name' => 'пресс 2 подход'
                        ],
                        [
                            'html' => 'KchIIbEqJzU',
                            'video_id' => '60',
                            'name' => 'пресс 3 подход'
                        ],
                        [
                            'html' => 'e0uXZh8HSQ4',
                            'video_id' => '61',
                            'name' => 'пресс 4 подход'
                        ],
                        [
                            'html' => 'BgTJQQ7QYpE',
                            'video_id' => '62',
                            'name' => 'пресс 5 подход'
                        ],
                        [
                            'html' => 'vbcvEo_iRiM',
                            'video_id' => '63',
                            'name' => 'пресс 6 подход'
                        ],
                        [
                            'html' => 'GZlOmL7Qzw0',
                            'video_id' => '64',
                            'name' => 'пресс 7 подход'
                        ],
                        [
                            'html' => 't1HI3DOPO6I',
                            'video_id' => '65',
                            'name' => 'подготовка тренажера к гиперэстензии'
                        ],
                        [
                            'html' => '4PpkH6PA-i0',
                            'video_id' => '66',
                            'name' => 'гиперэкстензия 1 подход'
                        ],
                        [
                            'html' => '7bhvFUro3v4',
                            'video_id' => '67',
                            'name' => 'гиперэкстензия 2 подход'
                        ],
                        [
                            'html' => 'qEI9LbYoB18',
                            'video_id' => '68',
                            'name' => 'гиперэкстензия 3 подход'
                        ],
                        [
                            'html' => 'x4aToRO18Wc',
                            'video_id' => '69',
                            'name' => 'гиперэкстензия 4 подход'
                        ],
                        [
                            'html' => 'YZiRAzYZxWQ',
                            'video_id' => '70',
                            'name' => 'Косые 1 подход'
                        ],
                        [
                            'html' => 'b90ZAYq2FlU',
                            'video_id' => '70',
                            'name' => 'Косые 2 подход'
                        ],
                        [
                            'html' => 'qvdr4eRkRSo',
                            'video_id' => '71',
                            'name' => 'Косые 3 подход'
                        ],
                        [
                            'html' => 'NhRkAJ9mwcc',
                            'video_id' => '72',
                            'name' => 'Пресс низ 1 подход'
                        ],
                        [
                            'html' => 'TfxybjDiEQs',
                            'video_id' => '73',
                            'name' => 'Пресс низ 2 подход'
                        ],
                        [
                            'html' => '_bZAV_3DmrI',
                            'video_id' => '74',
                            'name' => 'Пресс низ 3 подход'
                        ],
                        [
                            'html' => 'bDeBjVDo0Us',
                            'video_id' => '75',
                            'name' => 'Пресс низ 4 подход'
                        ],
                        [
                            'html' => 'qCfHt-p3r7o',
                            'video_id' => '76',
                            'name' => 'питание'
                        ],

                    ]
                ],
            ],
            [
                id_day => 'DAY19POD',
                name => '3-ий день. Ноги, спина + трицепс',
                access => $price,
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => 'LMMh3kxFItc',
                            'video_id' => '77',
                            'name' => 'утро протеин'
                        ],
                        [
                            'html' => '15oOIjsvdgU',
                            'video_id' => '78',
                            'name' => 'питание'
                        ],
                        [
                            'html' => 'k8BAQGhwPPQ',
                            'video_id' => '79',
                            'name' => 'ощущения'
                        ],
                        [
                            'html' => 'LEmsokAPeGY',
                            'video_id' => '80',
                            'name' => 'разминка'
                        ],
                        [
                            'html' => 'ugxStKORaBg',
                            'video_id' => '81',
                            'name' => 'протеин до трени'
                        ],
                        [
                            'html' => 'KPn0ZQPfxW0',
                            'video_id' => '82',
                            'name' => 'присед 1 подход'
                        ],
                        [
                            'html' => 'HQuO2UtkMZ8',
                            'video_id' => '83',
                            'name' => 'присед 2 подход'
                        ],
                        [
                            'html' => 'c21EgIhc9JU',
                            'video_id' => '84',
                            'name' => 'присед 3 подход'
                        ],
                        [
                            'html' => 'prigFjBuy1A',
                            'video_id' => '85',
                            'name' => 'присед 4 подход'
                        ],
                        [
                            'html' => 'Yx_OmuQBFrc',
                            'video_id' => '86',
                            'name' => 'сумо 1 подход'
                        ],
                        [
                            'html' => 'qH2jAaUXoX0',
                            'video_id' => '87',
                            'name' => 'сумо 2 подход'
                        ],
                        [
                            'html' => '9-U4R6ugTAM',
                            'video_id' => '88',
                            'name' => 'сумо 3 подход'
                        ],
                        [
                            'html' => 'KWPQPGQJrHo',
                            'video_id' => '89',
                            'name' => 'икры 1 подход'
                        ],
                        [
                            'html' => 'sJeS9FZnY4A',
                            'video_id' => '90',
                            'name' => 'икры 2 подход'
                        ],
                        [
                            'html' => 'Ibl3dz3FUQk',
                            'video_id' => '91',
                            'name' => 'икры 3 подход'
                        ],
                        [
                            'html' => 'ZSpe8s4df0Q',
                            'video_id' => '92',
                            'name' => 'жим сидя 1 подход'
                        ],
                        [
                            'html' => '5dVOvX9fKhk',
                            'video_id' => '93',
                            'name' => 'жим сидя 2 подход'
                        ],
                        [
                            'html' => 'Dt43O9HvCt8',
                            'video_id' => '94',
                            'name' => 'жим сидя 3 подход'
                        ],
                        [
                            'html' => '4rC6UdSL0Yk',
                            'video_id' => '95',
                            'name' => 'жим сидя 4 подход'
                        ],
                        [
                            'html' => 'bDbbCyQUTkM',
                            'video_id' => '96',
                            'name' => 'жим сидя 5 подход'
                        ],
                        [
                            'html' => 'lmDshIuW1ag',
                            'video_id' => '97',
                            'name' => 'ощущения'
                        ],
                        [
                            'html' => 'r3LppAHGob4',
                            'video_id' => '98',
                            'name' => 'трицепс 1 подход'
                        ],
                        [
                            'html' => 'TnWCgj_HS0U',
                            'video_id' => '99',
                            'name' => 'трицепс 2 подход'
                        ],
                        [
                            'html' => '0OzpSdjEbZ4',
                            'video_id' => '100',
                            'name' => 'трицепс 3 подход'
                        ],
                        [
                            'html' => '2LskZ5zQURA',
                            'video_id' => '101',
                            'name' => 'трицепс 4 подход'
                        ],
                        [
                            'html' => 'oh847sayZP4',
                            'video_id' => '102',
                            'name' => 'трицепс 5 подход'
                        ],
                    ]
                ],
            ],[
                id_day => 'DAY20aPOD',
                name => '4-ый день, середина дня. Спина + трапеции',
                access => $price,
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [
                        [
                            'html' => 'g25f7BvBBcM',
                            'video_id' => '103',
                            'name' => 'завтрак'
                        ],
                        [
                            'html' => 'ZgWMK4jCE7E',
                            'video_id' => '104',
                            'name' => 'ощущения'
                        ],
                        [
                            'html' => 'vSqJXKE7tRU',
                            'video_id' => '105',
                            'name' => 'протеин'
                        ],
                        [
                            'html' => 'cqT4u2tfytc',
                            'video_id' => '106',
                            'name' => 'разминка'
                        ],
                        [
                            'html' => 'mwAZ2ksFOkE',
                            'video_id' => '107',
                            'name' => 'тяга 1 подход'
                        ],
                        [
                            'html' => 'nfwEvAiFsc0',
                            'video_id' => '108',
                            'name' => 'тяга 2 подход'
                        ],
                        [
                            'html' => 'l-JBWZfeg-Y',
                            'video_id' => '109',
                            'name' => 'тяга 3 подход'
                        ],
                        [
                            'html' => 'Iqi_bYAo7e4',
                            'video_id' => '110',
                            'name' => 'тяга 4 подход'
                        ],
                        [
                            'html' => 'BQEbktF89mU',
                            'video_id' => '111',
                            'name' => 'тяга 5 подход'
                        ],
                        [
                            'html' => 'wj6tmOYHW-E',
                            'video_id' => '112',
                            'name' => 'трапеции 1 подход'
                        ],
                        [
                            'html' => '-rNmPvi_0AU',
                            'video_id' => '113',
                            'name' => 'трапеции 2 подход'
                        ],


                    ]
                ],
            ],
            [
                id_day => 'DAY20POD',
                name => '4-ый день, вторая половина дня. Пресс',
                access => $price,
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [
                        [
                            'html' => 'GWw-kmIDp0Q',
                            'video_id' => '114',
                            'name' => 'пресс 1 подход'
                        ],
                        [
                            'html' => 'wYYmPHcJ9-E',
                            'video_id' => '115',
                            'name' => 'пресс 2 подход'
                        ],
                        [
                            'html' => '9yh_vVOmAIs',
                            'video_id' => '116',
                            'name' => 'пресс 3 подход'
                        ],
                        [
                            'html' => '2ZL6x1Hm1Vc',
                            'video_id' => '117',
                            'name' => 'пресс 4 подход'
                        ],
                        [
                            'html' => '7Pug5PkRc6g',
                            'video_id' => '118',
                            'name' => 'пресс 5 подход'
                        ],
                        [
                            'html' => 'N1gPsq_CUE4',
                            'video_id' => '119',
                            'name' => 'пресс 6 подход'
                        ],
                        [
                            'html' => 'DBBKUAxLnAA',
                            'video_id' => '120',
                            'name' => 'пресс 7 подход'
                        ],
                        [
                            'html' => 'pMUsY2FDsbk',
                            'video_id' => '121',
                            'name' => 'ощущения'
                        ],
                        [
                            'html' => 'Z6BRqKQ5vVg',
                            'video_id' => '122',
                            'name' => 'гиперэкстензия 1 подход'
                        ],
                        [
                            'html' => 'ZDqtbGf_lJk',
                            'video_id' => '123',
                            'name' => 'гиперэкстензия 2 подход'
                        ],
                        [
                            'html' => 'pYQczrxwOnQ',
                            'video_id' => '124',
                            'name' => 'гиперэкстензия 3 подход'
                        ],
                        [
                            'html' => '0utboDmdC1g',
                            'video_id' => '125',
                            'name' => 'гиперэкстензия 4 подход'
                        ],
                        [
                            'html' => 'SPPPjMpHZdw',
                            'video_id' => '126',
                            'name' => 'Косые 1 подход'
                        ],
                        [
                            'html' => '1e8S1mO7KHQ',
                            'video_id' => '127',
                            'name' => 'Косые 2 подход'
                        ],
                        [
                            'html' => 'VAkJ2hinHCo',
                            'video_id' => '128',
                            'name' => 'питание'
                        ],

                    ]
                ],
            ],
            [
                id_day => 'DAY21POD',
                name => '5-ый день. Грудь ',
                access => $price,
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => 'ftuZ9r6moVg',
                            'video_id' => '129',
                            'name' => 'утро протеин'
                        ],
                        [
                            'html' => 'LeW5J3IPnBg',
                            'video_id' => '130',
                            'name' => 'разминка'
                        ],
                        [
                            'html' => 'mmOvmvQL0nU',
                            'video_id' => '131',
                            'name' => 'отжимания'
                        ],
                        [
                            'html' => 'SlXXTVxsCU8',
                            'video_id' => '132',
                            'name' => 'наклонная 1 подход'
                        ],
                        [
                            'html' => 'epAzeiDYl2k',
                            'video_id' => '133',
                            'name' => 'наклонная 2 подход'
                        ],
                        [
                            'html' => '2iWQocwv560',
                            'video_id' => '134',
                            'name' => 'наклонная 3 подход'
                        ],
                        [
                            'html' => 'E0XMbmf6mY0',
                            'video_id' => '135',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => 'OjrfoYTf4CI',
                            'video_id' => '136',
                            'name' => 'наклонная 4 подход'
                        ],
                        [
                            'html' => 'jOnThG_2B8M',
                            'video_id' => '137',
                            'name' => 'жим 1 подход'
                        ],
                        [
                            'html' => 'h77qx4mSdmQ',
                            'video_id' => '138',
                            'name' => 'жим 2 подход'
                        ],
                        [
                            'html' => 'W3KFscfBcUg',
                            'video_id' => '139',
                            'name' => 'жим 3 подход'
                        ],
                        [
                            'html' => 'Z6hlBq6bBCQ',
                            'video_id' => '140',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => 'hwd8ZJKkY0Y',
                            'video_id' => '141',
                            'name' => 'жим 4 подход'
                        ],
                        [
                            'html' => 'f1mkt7SKuYk',
                            'video_id' => '142',
                            'name' => 'разводка 1 подход'
                        ],
                        [
                            'html' => '6D00wt2n8l8',
                            'video_id' => '143',
                            'name' => 'разводка 2 подход'
                        ],
                        [
                            'html' => 'rT8C8InH4Lc',
                            'video_id' => '144',
                            'name' => 'разводка 3 подход'
                        ],
                        [
                            'html' => 'hjbM7Xc2EBQ',
                            'video_id' => '145',
                            'name' => 'разводка 4 подход'
                        ],
                        [
                            'html' => 'VHRH_N8b__M',
                            'video_id' => '146',
                            'name' => 'разводка 5 подход'
                        ],
                        [
                            'html' => 'mjgUQNdWd2s',
                            'video_id' => '147',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => '5SDsBMv9guc',
                            'video_id' => '148',
                            'name' => 'разводка 6 подход'
                        ],
                        [
                            'html' => 'epseK2Lb048',
                            'video_id' => '149',
                            'name' => 'пуловер 1 подход'
                        ],
                        [
                            'html' => 'yQTglCRlWR8',
                            'video_id' => '150',
                            'name' => 'пуловер 2 подход'
                        ],
                        [
                            'html' => 'PiTwBhwXknQ
',
                            'video_id' => '151',
                            'name' => 'пуловер 3 подход'
                        ],
                        [
                            'html' => 'Pd0OVicie60',
                            'video_id' => '152',
                            'name' => 'ощущения'
                        ],
                    ]
                ],
            ],
            [
                id_day => 'DAY23POD',
                name => '6-ой день. Грудь + бицепс',
                access => $price,
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => 'nnMYLe87X-0',
                            'video_id' => '153',
                            'name' => 'утро протеин'
                        ],
                        [
                            'html' => 'eEGTPxubVms',
                            'video_id' => '154',
                            'name' => 'ощущения'
                        ],
                        [
                            'html' => 'x396QicIeFw',
                            'video_id' => '155',
                            'name' => 'протеин до'
                        ],
                        [
                            'html' => 'xAW3PBZDLe8',
                            'video_id' => '156',
                            'name' => 'разминка'
                        ],
                        [
                            'html' => 'QmRkT7OVzdU',
                            'video_id' => '157',
                            'name' => 'плечи 1 подход'
                        ],
                        [
                            'html' => 'M1APJtGSF3k',
                            'video_id' => '158',
                            'name' => 'плечи 2 подход'
                        ],
                        [
                            'html' => 'Vw21EmnXFbI',
                            'video_id' => '159',
                            'name' => 'плечи 3 подход'
                        ],
                        [
                            'html' => 'xvvx_MCNM7A',
                            'video_id' => '160',
                            'name' => 'плечи 4 подход'
                        ],
                        [
                            'html' => 'nxAfUwQNVTM',
                            'video_id' => '161',
                            'name' => 'дельты 1 подход'
                        ],
                        [
                            'html' => '1RLMrUWjdPk',
                            'video_id' => '162',
                            'name' => 'дельты 2 подход'
                        ],
                        [
                            'html' => 'hUW9XRiUL2M',
                            'video_id' => '163',
                            'name' => 'дельты 3 подход'
                        ],
                        [
                            'html' => 'xEaGTdwgw18',
                            'video_id' => '164',
                            'name' => 'дельты 4 подход'
                        ],
                        [
                            'html' => 'iOPOonOjT0w',
                            'video_id' => '165',
                            'name' => 'махи 1 подход'
                        ],
                        [
                            'html' => 'LwcG9lpUoak',
                            'video_id' => '166',
                            'name' => 'махи 2 подход'
                        ],
                        [
                            'html' => 'yvILpXrph-c',
                            'video_id' => '167',
                            'name' => 'махи 3 подход'
                        ],
                        [
                            'html' => 'imKNLYc2SQk',
                            'video_id' => '168',
                            'name' => 'бицепс 1 подход'
                        ],
                        [
                            'html' => '4bwQPA6kyKk',
                            'video_id' => '169',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => 'Itg1SuKUTBU',
                            'video_id' => '170',
                            'name' => 'бицепс 2 подход'
                        ],
                        [
                            'html' => '5xXHULiJNlo',
                            'video_id' => '171',
                            'name' => 'бицепс 3 подход'
                        ],
                        [
                            'html' => 'YTAhE5dudJY',
                            'video_id' => '172',
                            'name' => 'бицепс 4 подход'
                        ],
                        [
                            'html' => '9edNhYV13t4',
                            'video_id' => '173',
                            'name' => 'бицепс 5 подход'
                        ],
                        [
                            'html' => 'D01S-79N42w',
                            'video_id' => '174',
                            'name' => 'бицепс 6 подход'
                        ],
                        [
                            'html' => 'waV41yC0wPM',
                            'video_id' => '175',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => 'Wv3KomtotkY',
                            'video_id' => '176',
                            'name' => 'трапеции 1 подход'
                        ],
                        [
                            'html' => 'RZLFAnjCg-k',
                            'video_id' => '177',
                            'name' => 'трапеции 2 подход'
                        ],
                        [
                            'html' => 'gdS_H4PjLKc',
                            'video_id' => '178',
                            'name' => 'ощущения'
                        ],
                        [
                            'html' => '3W99OMXRD1w',
                            'video_id' => '179',
                            'name' => 'питание'
                        ],
                    ]
                ],
            ],
            [
                id_day => 'DAY24POD',
                name => 'Результаты недели',
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                access => 'vk',
                data => [
                    training_data => [
                        [
                            'html' => 'Z_jag43qROM',
                            'video_id' => '180',
                            'name' => 'вес 1 неделя'
                        ],
                        [
                            'html' => 'jEGniVgZhZs',
                            'video_id' => '181',
                            'name' => 'телосложение'
                        ],

                    ]
                ],
            ],


        ],
    ],
    [
        id => '5stweek',
        name => '4 неделя тренировок на протеине',

        days => [
            [
                id_day => 'DAY27POD',
                name => '1-ый день, середина дня. Пресс',
                access => $price,
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => '01Eof0HXbTw',
                            'video_id' => '182',
                            'name' => 'питание'
                        ],
                        [
                            'html' => '22apNtIbCe0',
                            'video_id' => '183',
                            'name' => 'пресс 1 подход'
                        ],
                        [
                            'html' => 'mDCK2RYc7vQ',
                            'video_id' => '184',
                            'name' => 'пресс 2 подход'
                        ],
                        [
                            'html' => 'w0U1iMKk42s',
                            'video_id' => '185',
                            'name' => 'пресс 3 подход'
                        ],
                        [
                            'html' => '-DwiCkBnHRw',
                            'video_id' => '186',
                            'name' => 'пресс 4 подход'
                        ],
                        [
                            'html' => 'CIX1prxDCvI',
                            'video_id' => '187',
                            'name' => 'пресс 5 подход'
                        ],
                        [
                            'html' => 'NcRe1o_GGLM',
                            'video_id' => '188',
                            'name' => 'пресс 6 подход'
                        ],
                        [
                            'html' => 'FrGx1mw5B_g',
                            'video_id' => '189',
                            'name' => 'пресс 7 подход'
                        ],
                        [
                            'html' => 'xLw8Rmda8YQ',
                            'video_id' => '190',
                            'name' => 'гиперэкстензия 1 подход'
                        ],
                        [
                            'html' => 'BX3Y6I1qUcg',
                            'video_id' => '191',
                            'name' => 'гиперэкстензия 2 подход'
                        ],
                        [
                            'html' => '4QMOPT-4moU',
                            'video_id' => '192',
                            'name' => 'гиперэкстензия 3 подход'
                        ],
                        [
                            'html' => 'TTKFxDqeCfc',
                            'video_id' => '193',
                            'name' => 'гиперэкстензия 4 подход'
                        ],
                        [
                            'html' => '4lMFgwAUQkE',
                            'video_id' => '194',
                            'name' => 'косые 1 подход'
                        ],
                        [
                            'html' => 'HJqMDdVVOzc',
                            'video_id' => '195',
                            'name' => 'косые 2 подход'
                        ],
                        [
                            'html' => 'jip2Nkxs1gg',
                            'video_id' => '196',
                            'name' => 'косые 3 подход'
                        ],
                        [
                            'html' => '4Bxbm2lPDW4',
                            'video_id' => '197',
                            'name' => 'питание'
                        ],
                    ]
                ],
            ],
            [
                id_day => 'DAY28POD',
                name => '1-ый день, вечер. Грудь + бицепс',
                access => $price,
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => 'mCA4fOTN0vU',
                            'video_id' => '198',
                            'name' => 'утро протеин'
                        ],
                        [
                            'html' => '2G9AyGE8Zio',
                            'video_id' => '199',
                            'name' => 'питание'
                        ],
                        [
                            'html' => 'ynCSRwonnqg',
                            'video_id' => '200',
                            'name' => 'протеин до'
                        ],
                        [
                            'html' => 'Kz5YVzg4PTU',
                            'video_id' => '201',
                            'name' => 'разминка'
                        ],
                        [
                            'html' => 'J6jWNhtcamQ',
                            'video_id' => '202',
                            'name' => 'жим сидя 1 подход'
                        ],
                        [
                            'html' => 'bS9KLdQEG2s',
                            'video_id' => '203',
                            'name' => 'жим сидя 2 подход'
                        ],
                        [
                            'html' => 'FmVX_AVTTI8',
                            'video_id' => '204',
                            'name' => 'жим сидя 3 подход'
                        ],
                        [
                            'html' => 'uXi3sfZ214A',
                            'video_id' => '205',
                            'name' => 'жим сидя 4 подход'
                        ],
                        [
                            'html' => 'Wvk73N_qY_4',
                            'video_id' => '206',
                            'name' => 'трицепс 1 подход'
                        ],
                        [
                            'html' => '5VUCuB1yO2E',
                            'video_id' => '207',
                            'name' => 'трицепс 2 подход'
                        ],
                        [
                            'html' => 'zjQgn7_fhqo',
                            'video_id' => '208',
                            'name' => 'трицепс 3 подход'
                        ],
                        [
                            'html' => 'iTjxMZ6BXFQ',
                            'video_id' => '209',
                            'name' => 'трицепс 4 подход'
                        ],
                        [
                            'html' => 'RQJoAA1LF_Y',
                            'video_id' => '210',
                            'name' => 'трицепс 5 подход'
                        ],
                        [
                            'html' => 'UcqmKB4iXrI',
                            'video_id' => '211',
                            'name' => 'трицепс 6 подход'
                        ],
                        [
                            'html' => 'C2UPbYQdzNU',
                            'video_id' => '212',
                            'name' => 'трицепс 7 подход'
                        ],
                        [
                            'html' => 'vPVM09bpeTc',
                            'video_id' => '213',
                            'name' => 'трицепс 8 подход'
                        ],
                        [
                            'html' => 'a7FfQT5g7Fc',
                            'video_id' => '214',
                            'name' => 'трицепс 9 подход'
                        ],
                        [
                            'html' => 'fz9mGPoDukQ',
                            'video_id' => '215',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => 'pI9_YTdx2qg',
                            'video_id' => '216',
                            'name' => 'тяга 1 подход'
                        ],
                        [
                            'html' => 'Cl3cEcB4Xr4',
                            'video_id' => '217',
                            'name' => 'тяга 2 подход'
                        ],
                        [
                            'html' => 'pPvjfcBeFsw',
                            'video_id' => '218',
                            'name' => 'тяга 3 подход'
                        ],
                        [
                            'html' => 'lRSJewzesDs',
                            'video_id' => '219',
                            'name' => 'тяга 4 подход'
                        ],
                        [
                            'html' => 'wReU0bgLSd4',
                            'video_id' => '220',
                            'name' => 'трапеции 1 подход'
                        ],
                        [
                            'html' => 'PeDHIQENkBA',
                            'video_id' => '221',
                            'name' => 'трапеции 2 подход'
                        ],
                        [
                            'html' => 'nvWu53tapNs',
                            'video_id' => '222',
                            'name' => 'трапеции 3 подход'
                        ],

                    ]
                ],
            ],
            [
                id_day => 'DAY31POD',
                name => '3-ий день, вечер. Ноги, грудь',
                access => $price,
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [
                        [
                            'html' => 'bbvf6NS1J6E',
                            'video_id' => '223',
                            'name' => 'утро протеин 4 день'
                        ],
                        [
                            'html' => '87InJzLEP-I',
                            'video_id' => '224',
                            'name' => 'ощущения'
                        ],
                        [
                            'html' => 'uP7XXtxK9AY',
                            'video_id' => '225',
                            'name' => 'протеин до'
                        ],
                        [
                            'html' => 'WcpO5WXztlw',
                            'video_id' => '226',
                            'name' => 'разминка'
                        ],
                        [
                            'html' => 'xeMo9QqjdrQ',
                            'video_id' => '227',
                            'name' => 'присед 1 подход'
                        ],
                        [
                            'html' => 'r5T-7teXThs',
                            'video_id' => '228',
                            'name' => 'присед 2 подход'
                        ],
                        [
                            'html' => 'fZLoU4erFU8',
                            'video_id' => '229',
                            'name' => 'присед 3 подход'
                        ],
                        [
                            'html' => '4DaGKBYqwQI',
                            'video_id' => '230',
                            'name' => 'присед 4 подход'
                        ],
                        [
                            'html' => '9Or-bVP6MK4',
                            'video_id' => '231',
                            'name' => 'присед 5 подход'
                        ],
                        [
                            'html' => 'jtOZMdaLCaI',
                            'video_id' => '232',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => 'XleStA5Rg3c',
                            'video_id' => '233',
                            'name' => 'икры 1 подход'
                        ],
                        [
                            'html' => 'xbFgX3aHQZA',
                            'video_id' => '234',
                            'name' => 'икры 2 подход'
                        ],
                        [
                            'html' => 'Rbu2JAZMaME',
                            'video_id' => '235',
                            'name' => 'икры 3 подход'
                        ],
                        [
                            'html' => 'It2lJimP2L4',
                            'video_id' => '236',
                            'name' => 'наклонная 1 подход'
                        ],
                        [
                            'html' => 'DQbkraddaQ8',
                            'video_id' => '237',
                            'name' => 'наклонная 2 подход'
                        ],
                        [
                            'html' => 'vbCDkzuUEO4',
                            'video_id' => '238',
                            'name' => 'наклонная 3 подход'
                        ],
                        [
                            'html' => 'm5DFMahq8Ik',
                            'video_id' => '239',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => 'YrqRX7Aq5L8',
                            'video_id' => '240',
                            'name' => 'наклонная 4 подход'
                        ],
                        [
                            'html' => 'BTAqX0ryPdY',
                            'video_id' => '241',
                            'name' => 'наклонная 5 подход'
                        ],
                        [
                            'html' => 'xU_pS95UW40',
                            'video_id' => '242',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => 'vaxWAAcMUrs',
                            'video_id' => '243',
                            'name' => 'жим 1 подход'
                        ],
                        [
                            'html' => 'f0faQOG4OEs',
                            'video_id' => '244',
                            'name' => 'жим 2 подход'
                        ],
                        [
                            'html' => 'OBnqqkN_AX0',
                            'video_id' => '244',
                            'name' => 'жим 3 подход'
                        ],
                        [
                            'html' => 'Vm8HRt8k5NU',
                            'video_id' => '245',
                            'name' => 'жим 4 подход'
                        ],


                    ]
                ],
            ],
            [
                id_day => 'DAY32POD',
                name => '4-ый день. Плечи + бицепс',
                access => $price,
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => '46nA5f9QHzw',
                            'video_id' => '246',
                            'name' => 'протеин утро 5 день'
                        ],
                        [
                            'html' => 'LNuD4ugC8u4',
                            'video_id' => '247',
                            'name' => 'ощущения'
                        ],
                        [
                            'html' => '5TD7KoON8t4',
                            'video_id' => '248',
                            'name' => 'ощущения 2'
                        ],
                        [
                            'html' => 'Tq7OwOD_rWI',
                            'video_id' => '249',
                            'name' => 'продукты'
                        ],
                        [
                            'html' => 'Kqz6vzHWjuw',
                            'video_id' => '250',
                            'name' => 'протеин до трени'
                        ],
                        [
                            'html' => 'CKP0jWIDRRI',
                            'video_id' => '251',
                            'name' => 'плечи 1 подход'
                        ],
                        [
                            'html' => '8M5kO4-balk',
                            'video_id' => '252',
                            'name' => 'плечи 2 подход'
                        ],
                        [
                            'html' => 'tc3p7dJ3oTE',
                            'video_id' => '253',
                            'name' => 'плечи 3 подход'
                        ],
                        [
                            'html' => '1Q2PzAp56dE',
                            'video_id' => '254',
                            'name' => 'плечи 4 подход'
                        ],
                        [
                            'html' => 'qtP-GDUKWBo',
                            'video_id' => '255',
                            'name' => 'дельта 1 подход'
                        ],
                        [
                            'html' => 'bTof1zIXU-A',
                            'video_id' => '256',
                            'name' => 'дельта 2 подход'
                        ],
                        [
                            'html' => '7ug56wSnMfE',
                            'video_id' => '257',
                            'name' => 'дельта 3 подход'
                        ],
                        [
                            'html' => 'psGz6SsJP1E',
                            'video_id' => '258',
                            'name' => 'дельта 4 подход'
                        ],
                        [
                            'html' => 'tXZTy4i_iIk',
                            'video_id' => '259',
                            'name' => 'махи 1 подход'
                        ],
                        [
                            'html' => '-OlnVKpFn6c',
                            'video_id' => '260',
                            'name' => 'махи 2 подход'
                        ],
                        [
                            'html' => 'DTF3O8xdN2c',
                            'video_id' => '261',
                            'name' => 'махи 3 подход'
                        ],
                        [
                            'html' => 'fAB2vjSr-4A',
                            'video_id' => '262',
                            'name' => 'махи 4 подход'
                        ],
                        [
                            'html' => 'UHCK8IPcuE0',
                            'video_id' => '263',
                            'name' => 'тяга 1 подход'
                        ],
                        [
                            'html' => 'amALL1PWV4g',
                            'video_id' => '264',
                            'name' => 'тяга 2 подход'
                        ],
                        [
                            'html' => '90KGvmbi6hg',
                            'video_id' => '265',
                            'name' => 'тяга 3 подход'
                        ],
                        [
                            'html' => 'zNuVVMPdZDw',
                            'video_id' => '266',
                            'name' => 'бицепс 1 подход'
                        ],
                        [
                            'html' => 'D2Hg2UTlt58',
                            'video_id' => '267',
                            'name' => 'бицепс 2 подход'
                        ],
                        [
                            'html' => 'ezrjHdFgcmo',
                            'video_id' => '268',
                            'name' => 'бицепс 3 подход'
                        ],
                        [
                            'html' => 'g0ZXO33vltU',
                            'video_id' => '269',
                            'name' => 'бицепс 4 подход'
                        ],
                        [
                            'html' => '8sNkLv2q_4c',
                            'video_id' => '270',
                            'name' => 'бицепс 5 подход'
                        ],
                        [
                            'html' => '3ewtfhFpOK4',
                            'video_id' => '271',
                            'name' => 'трапеции 1 подход'
                        ],
                        [
                            'html' => 'aD1jX6_Rz6Q',
                            'video_id' => '272',
                            'name' => 'трапеции 2 подход'
                        ],
                    ]
                ],
            ],
            [
                id_day => 'DAY33POD',
                name => '5-ый день, середина дня. Пресс',
                access => $price,
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => 'HV0Ng7Hsk8Q',
                            'video_id' => '273',
                            'name' => 'утро протеин 6 день'
                        ],
                        [
                            'html' => 'VeZfqhFKTUQ',
                            'video_id' => '274',
                            'name' => 'завтрак'
                        ],
                        [
                            'html' => 'KGhpRlur-eg',
                            'video_id' => '275',
                            'name' => 'пресс 1 подход'
                        ],
                        [
                            'html' => '0-uIyzULODQ',
                            'video_id' => '276',
                            'name' => 'пресс 2 подход'
                        ],
                        [
                            'html' => '0WGj17Ss1-w',
                            'video_id' => '277',
                            'name' => 'пресс 3 подход'
                        ],
                        [
                            'html' => '_m6Dvkaa8WA',
                            'video_id' => '278',
                            'name' => 'пресс 4 подход'
                        ],
                        [
                            'html' => 'yanYl-yR2ws',
                            'video_id' => '279',
                            'name' => 'пресс 5 подход'
                        ],
                        [
                            'html' => 'ZljSrcnE8aw',
                            'video_id' => '280',
                            'name' => 'пресс 6 подход'
                        ],
                        [
                            'html' => 'A3yhPrra_2s',
                            'video_id' => '281',
                            'name' => 'пресс 7 подход'
                        ],
                        [
                            'html' => 'I72xiwKs_Ec',
                            'video_id' => '282',
                            'name' => 'пресс 8 подход'
                        ],
                    ]
                ],
            ],
            [
                id_day => 'DAY35POD',
                name => '7-ой день, середина дня. Пресс',
                access => $price,
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [
                        [
                            'html' => 'KFzbeg-7EmY',
                            'video_id' => '283',
                            'name' => 'утро протеин 7 день'
                        ],
                        [
                            'html' => 'ndESogcraEU',
                            'video_id' => '284',
                            'name' => 'питание'
                        ],
                        [
                            'html' => 'IcPkIn-DmoQ',
                            'video_id' => '285',
                            'name' => 'питание 2'
                        ],
                        [
                            'html' => 'BwynmxO7cv8',
                            'video_id' => '286',
                            'name' => 'гиперэкстензия 1 подход'
                        ],
                        [
                            'html' => 'dVRnC2hddFI',
                            'video_id' => '287',
                            'name' => 'гиперэкстензия 2 подход'
                        ],
                        [
                            'html' => '_4Mt4UdlU24',
                            'video_id' => '288',
                            'name' => 'гиперэкстензия 3 подход'
                        ],
                        [
                            'html' => 'CtlXs4J8Dqg',
                            'video_id' => '289',
                            'name' => 'гиперэкстензия 4 подход'
                        ],
                        [
                            'html' => 'enys7CyFYYE',
                            'video_id' => '290',
                            'name' => 'косые 1 подход'
                        ],
                        [
                            'html' => 'I3yGBy1auiw',
                            'video_id' => '291',
                            'name' => 'косые 2 подход'
                        ],
                        [
                            'html' => 'WXMVuAzizv4',
                            'video_id' => '292',
                            'name' => 'косые 3 подход'
                        ],
                        [
                            'html' => 'r9leXkEk-60',
                            'video_id' => '293',
                            'name' => 'пресс низ 1 подход'
                        ],
                        [
                            'html' => 'm6PMhdlttlw',
                            'video_id' => '294',
                            'name' => 'пресс низ 2 подход'
                        ],
                        [
                            'html' => 'Gzlo4Zj9QTk',
                            'video_id' => '295',
                            'name' => 'пресс низ 3 подход'
                        ],
                        [
                            'html' => 'BCiBpaF3xAc',
                            'video_id' => '296',
                            'name' => 'ощущения'
                        ],
                        [
                            'html' => '4T5i8S_QM58',
                            'video_id' => '299',
                            'name' => 'питание'
                        ],


                    ]
                ],
            ],
            [
                id_day => 'DAY37POD',
                name => 'Результаты',
                access => 'vk',
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => 'tSIzhZdYP9k',
                            'video_id' => '300',
                            'name' => 'вес'
                        ],
                        [
                            'html' => 'E8ML0-SE_Is',
                            'video_id' => '301',
                            'name' => 'обзор вблизи'
                        ],
                        [
                            'html' => 'mWJFZJEz_hw',
                            'video_id' => '302',
                            'name' => 'обзор вдали'
                        ],
                        [
                            'html' => 'QFLf0m2MmAQ',
                            'video_id' => '303',
                            'name' => 'ощущения 1'
                        ],
                        [
                            'html' => '33tAMk5zOt0',
                            'video_id' => '304',
                            'name' => 'питание 1'
                        ],
                        [
                            'html' => 'ppZdHODIa7U',
                            'video_id' => '305',
                            'name' => 'питание 2'
                        ],
                        [
                            'html' => 'CcO5Lm-ahiE',
                            'video_id' => '306',
                            'name' => 'протеин утро'
                        ],
                        [
                            'html' => 'C3XcjO2l6nQ',
                            'video_id' => '307',
                            'name' => 'советы'
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
//                id_day => 'DAY34POD',
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