<h1>Базовая - 2 недели с протеином</h1>

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

$price = 2000;

$programm = [
        [
        id => '4stweek',
        name => '1 неделя тренировок на протеине',

        days => [
            [
                id_day => 'DAY16POD',
                name => 'Базовые показатели перед использованием протеина',
                access => 'vk',
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => 'J-sBsyNG9mk',
                            'video_id' => '253-st',
                            'name' => 'Протеин + БЦА'
                        ],
                        [
                            'html' => 'sbp12ei_C1I',
                            'video_id' => '254-st',
                            'name' => 'Питание на неделю'
                        ],
                        [
                            'html' => 'YC_p9Cc9zDE',
                            'video_id' => '255-st',
                            'name' => 'Вес исходный'
                        ],
                        [
                            'html' => 'fjIH-wfs4Fg',
                            'video_id' => '256-st',
                            'name' => 'Телосложение'
                        ],
                    ]
                ],
            ],

            [
                id_day => 'DAY17POD',
                name => '1-ый день. Ноги, грудь + бицепс',
                access => $price,
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => 'vcy15KdEqrY',
                            'video_id' => '257-st',
                            'name' => 'Утро протеин'
                        ],
                        [
                            'html' => 'Gkdo-bI4B28',
                            'video_id' => '258-st',
                            'name' => 'Разминка'
                        ],
                        [
                            'html' => 'GhaOSuqGNe0',
                            'video_id' => '259-st',
                            'name' => 'Присед 1 подход'
                        ],
                        [
                            'html' => 'M8kAjNfYw44',
                            'video_id' => '260-st',
                            'name' => 'Присед 2 подход'
                        ],
                        [
                            'html' => 'Zn6ps6UIpyw',
                            'video_id' => '261-st',
                            'name' => 'Присед 3 подход'
                        ],
                        [
                            'html' => 'jP44tJe9ivY',
                            'video_id' => '262-st',
                            'name' => 'Присед 4 подход'
                        ],
                        [
                            'html' => 'xM_7di6Qgw0',
                            'video_id' => '263-st',
                            'name' => 'Присед 5 подход'
                        ],
                        [
                            'html' => '7U5OEmKTvc4',
                            'video_id' => '264-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => '1QQHRA6FlYo',
                            'video_id' => '265-st',
                            'name' => 'Икры 1 подход'
                        ],
                        [
                            'html' => 'Xpw3Pq3Td48',
                            'video_id' => '266-st',
                            'name' => 'Икры 2 подход'
                        ],
                        [
                            'html' => 'SiEwzZTVs2M',
                            'video_id' => '267-st',
                            'name' => 'Икры 3 подход'
                        ],
                        [
                            'html' => 'RtFRSxOnjnk',
                            'video_id' => '268-st',
                            'name' => 'Наклонная 1 подход'
                        ],
                        [
                            'html' => 'M7rYhzMQt_s',
                            'video_id' => '269-st',
                            'name' => 'Наклонная 2 подход'
                        ],
                        [
                            'html' => '9GLk0Pvw0Lw',
                            'video_id' => '270-st',
                            'name' => 'Наклонная 3 подход'
                        ],
                        [
                            'html' => '9cvICtP9u18',
                            'video_id' => '271-st',
                            'name' => 'Наклонная 4 подход'
                        ],
                        [
                            'html' => 'vAVSY8FKmzk',
                            'video_id' => '272-st',
                            'name' => 'Наклонная 5 подход'
                        ],
                        [
                            'html' => 'lceSytdVq7A',
                            'video_id' => '273-st',
                            'name' => 'Наклонная 6 подход'
                        ],
                        [
                            'html' => 'DMSbnQhX6Vk',
                            'video_id' => '274-st',
                            'name' => 'Наклонная 7 подход'
                        ],
                        [
                            'html' => 'cQD8SYs2OAM',
                            'video_id' => '275-st',
                            'name' => 'Наклонная 8 подход'
                        ],
                        [
                            'html' => 'a8cmYZlH8D8',
                            'video_id' => '276-st',
                            'name' => 'Жим 1 подход'
                        ],
                        [
                            'html' => 'BMUWFR5Zwaw',
                            'video_id' => '277-st',
                            'name' => 'Жим 2 подход'
                        ],
                        [
                            'html' => '0glE8c9nUuM',
                            'video_id' => '278-st',
                            'name' => 'Жим 3 подход'
                        ],
                        [
                            'html' => 'LLTPrZmt9AU',
                            'video_id' => '279-st',
                            'name' => 'Разводка 1 подход'
                        ],
                        [
                            'html' => 'n_A9i2J9TMY',
                            'video_id' => '280-st',
                            'name' => 'Разводка 2 подход'
                        ],
                        [
                            'html' => 'AAZenJQAhck',
                            'video_id' => '281-st',
                            'name' => 'Разводка 3 подход'
                        ],
                        [
                            'html' => 'hUi82W0kJ_I',
                            'video_id' => '282-st',
                            'name' => 'Разводка 4 подход'
                        ],
                        [
                            'html' => '8SMxU1s_cgA',
                            'video_id' => '283-st',
                            'name' => 'Разводка 5 подход'
                        ],
                        [
                            'html' => '9QHAnD6mBVY',
                            'video_id' => '284-st',
                            'name' => 'Плечи 2 подход'
                        ],
                        [
                            'html' => '_30WWfD66Lw',
                            'video_id' => '285-st',
                            'name' => 'Плечи 3 подход'
                        ],
                        [
                            'html' => 'UnLXkds2yGA',
                            'video_id' => '286-st',
                            'name' => 'Плечи 4 подход'
                        ],
                        [
                            'html' => 'Rx033M_nA2o',
                            'video_id' => '287-st',
                            'name' => 'Махи 1 подход'
                        ],
//                        [
//                            'html' => 'jysg9qmD0GA',
//                            'video_id' => '288-st',
//                            'name' => 'Махи 2 подход'
//                        ],
                        [
                            'html' => 'erWYJb2bQ9A',
                            'video_id' => '289-st',
                            'name' => 'Махи 3 подход'
                        ],
                        [
                            'html' => 'MRHyAAxW9DE',
                            'video_id' => '290-st',
                            'name' => 'Махи 4 подход'
                        ],
                        [
                            'html' => '4bI5BCSKxAg',
                            'video_id' => '291-st',
                            'name' => 'Дельта 1 подход'
                        ],
                        [
                            'html' => 'en_IB2_ouXs',
                            'video_id' => '292-st',
                            'name' => 'Дельта 2 подход'
                        ],
                        [
                            'html' => 'V_ZBO64BYyo',
                            'video_id' => '293-st',
                            'name' => 'Дельта 3 подход'
                        ],
                        [
                            'html' => 'SmGLR9iYLrg',
                            'video_id' => '294-st',
                            'name' => 'Пуловер 1 подход'
                        ],
                        [
                            'html' => '2ZbsiWgL6gI',
                            'video_id' => '295-st',
                            'name' => 'Пуловер 2 подход'
                        ],
                        [
                            'html' => 'nwMKa9cMQC8',
                            'video_id' => '296-st',
                            'name' => 'Пуловер 3 подход'
                        ],
                        [
                            'html' => 'V4-GBjDAmxo',
                            'video_id' => '297-st',
                            'name' => 'Бицепс 1 подход'
                        ],
                        [
                            'html' => 'X-eLImZZDgg',
                            'video_id' => '298-st',
                            'name' => 'Бицепс 2 подход'
                        ],
                        [
                            'html' => 'oZcJ4LNazdY',
                            'video_id' => '299-st',
                            'name' => 'Бицепс 3 подход'
                        ],
                        [
                            'html' => 'a2s_-yEUVAw',
                            'video_id' => '300-st',
                            'name' => 'Бицепс 4 подход'
                        ],
                        [
                            'html' => 'Bh9_nMBBls0',
                            'video_id' => '301-st',
                            'name' => 'Бицепс 5 подход'
                        ],
//                        [
//                            'html' => 'hmD2iJSh0DM',
//                            'video_id' => '302-st',
//                            'name' => 'Бицепс 6 подход'
//                        ],
                        [
                            'html' => 'NvKhMLFv7CE',
                            'video_id' => '303-st',
                            'name' => 'Бицепс 7 подход'
                        ],
                        [
                            'html' => 'htMTRBzuLUw',
                            'video_id' => '304-st',
                            'name' => 'Бицепс 8 подход'
                        ],
                        [
                            'html' => 'KsfQXHoyT-c',
                            'video_id' => '305-st',
                            'name' => 'Бицепс 9 подход'
                        ],
                        [
                            'html' => 'Inxiqr4ITgM',
                            'video_id' => '306-st',
                            'name' => 'Трапеции 1 подход'
                        ],
                        [
                            'html' => 'VN6FEKXW1zA',
                            'video_id' => '307-st',
                            'name' => 'Трапеции 2 подход'
                        ],
                        [
                            'html' => '7Zry740Y2sw',
                            'video_id' => '308-st',
                            'name' => 'Ощущения после трени'
                        ],
                        [
                            'html' => 'S2hxg6jLze0',
                            'video_id' => '309-st',
                            'name' => 'Протеин после трени'
                        ],
                        [
                            'html' => '9xRFY8u6WJ8',
                            'video_id' => '310-st',
                            'name' => 'Еда после трени'
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
                            'html' => 'Wb8Bpa7Zzoc',
                            'video_id' => '311-st',
                            'name' => 'Протеин + завтрак'
                        ],
                        [
                            'html' => 'J3IvLbRfXB8',
                            'video_id' => '312-st',
                            'name' => 'Ощущения'
                        ],
                        [
                            'html' => 'bc3sTUiXgU8',
                            'video_id' => '313-st',
                            'name' => 'Пресс 1 подход'
                        ],
                        [
                            'html' => 'pnwhO0iZQ9Q',
                            'video_id' => '314-st',
                            'name' => 'Пресс 2 подход'
                        ],
                        [
                            'html' => 'JjoJqMML_is',
                            'video_id' => '315-st',
                            'name' => 'Пресс 3 подход'
                        ],
                        [
                            'html' => 'WuCjlhGmVoc',
                            'video_id' => '316-st',
                            'name' => 'Пресс 4 подход'
                        ],
                        [
                            'html' => 'MeQbJPAjBMo',
                            'video_id' => '317-st',
                            'name' => 'Косые 1 подход'
                        ],
                        [
                            'html' => 'aIBmv2G0-xE',
                            'video_id' => '318-st',
                            'name' => 'Косые 2 подход'
                        ],
                        [
                            'html' => 'G70r6LHaK7I',
                            'video_id' => '319-st',
                            'name' => 'Косые 3 подход'
                        ],
                        [
                            'html' => 'wpK1GI_apX0',
                            'video_id' => '320-st',
                            'name' => 'Пресс низ 1 подход'
                        ],
                        [
                            'html' => 'g8tfHVewUCU',
                            'video_id' => '321-st',
                            'name' => 'Пресс низ 2 подход'
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
                            'html' => 'NvSonXjDZvM',
                            'video_id' => '322-st',
                            'name' => 'Утро протеин'
                        ],
                        [
                            'html' => 'nNAF39TzbGQ',
                            'video_id' => '323-st',
                            'name' => 'Ощущения'
                        ],
                        [
                            'html' => 'KCW9kTc_RjM',
                            'video_id' => '323-1st',
                            'name' => 'Протеин до трени'
                        ],
                        [
                            'html' => '1pe1FmPWCV8',
                            'video_id' => '324-st',
                            'name' => 'Присед 1 подход'
                        ],
                        [
                            'html' => 'UxhcgkwtDwo',
                            'video_id' => '325-st',
                            'name' => 'Присед 2 подход'
                        ],
                        [
                            'html' => '1v8Mw9zixqs',
                            'video_id' => '326-st',
                            'name' => 'Присед 3 подход'
                        ],
                        [
                            'html' => 'wl42wJ8cmOg',
                            'video_id' => '327-st',
                            'name' => 'Присед 4 подход'
                        ],
                        [
                            'html' => '2H-EnUAJJz0',
                            'video_id' => '328-st',
                            'name' => 'Присед сумо 1 подход'
                        ],
                        [
                            'html' => 'D_J2RihbRtM',
                            'video_id' => '329-st',
                            'name' => 'Присед сумо 2 подход'
                        ],
                        [
                            'html' => '0DYl5C-_lJQ',
                            'video_id' => '330-st',
                            'name' => 'Жим сидя 1 подход'
                        ],
                        [
                            'html' => '-_bRyKpL3D0',
                            'video_id' => '331-st',
                            'name' => 'Жим сидя 2 подход'
                        ],
                        [
                            'html' => '8MCUoZfjijk',
                            'video_id' => '332-st',
                            'name' => 'Жим сидя 3 подход'
                        ],
                        [
                            'html' => 'LQhilGD-ghg',
                            'video_id' => '333-st',
                            'name' => 'Жим сидя 4 подход'
                        ],
                        [
                            'html' => 'OtydclqpPRM',
                            'video_id' => '334-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => 'HamyuRkpqJ4',
                            'video_id' => '335-st',
                            'name' => 'Трицепс 1 подход'
                        ],
                        [
                            'html' => 'DN5K2lT-8JY',
                            'video_id' => '336-st',
                            'name' => 'Трицепс 2 подход'
                        ],
                        [
                            'html' => 'JjshpVOAnh0',
                            'video_id' => '337-st',
                            'name' => 'Трицепс 3 подход'
                        ],
                        [
                            'html' => 'OHhC62sX7gI',
                            'video_id' => '338-st',
                            'name' => 'Трицепс 4 подход'
                        ],
                        [
                            'html' => 'DGsrWwIpnb4',
                            'video_id' => '339-st',
                            'name' => 'Трицепс 5 подход'
                        ],
                        [
                            'html' => 'E6DNlvunTf0',
                            'video_id' => '340-st',
                            'name' => 'Тяга 1 подход'
                        ],
                        [
                            'html' => 'lEquxpB5vyI',
                            'video_id' => '341-st',
                            'name' => 'Тяга 2 подход'
                        ],
                        [
                            'html' => 'IFdAubbSTWU',
                            'video_id' => '342-st',
                            'name' => 'Тяга 3 подход'
                        ],
                        [
                            'html' => 'CL3ORHNN3Tk',
                            'video_id' => '343-st',
                            'name' => 'Тяга 4 подход'
                        ],
                        [
                            'html' => '4KvWgvlJSCI',
                            'video_id' => '344-st',
                            'name' => 'Становая 1 подход'
                        ],
                        [
                            'html' => 'zyQxVxQM7g8',
                            'video_id' => '345-st',
                            'name' => 'Становая 2 подход'
                        ],
                        [
                            'html' => 'kqtGAl0JKt8',
                            'video_id' => '346-st',
                            'name' => 'Становая 3 подход'
                        ],
                        [
                            'html' => '-B7BwM2_hLk',
                            'video_id' => '346a-st',
                            'name' => 'Протеин после трени'
                        ],

                    ]
                ],
            ],
            [
                id_day => 'DAY20POD',
                name => '4-ый день. Пресс',
                access => $price,
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [
                        [
                            'html' => '9oPKuVFCt6c',
                            'video_id' => '347-st',
                            'name' => 'Утро протеин'
                        ],
                        [
                            'html' => 'zxlxML5B7fM',
                            'video_id' => '348-st',
                            'name' => 'Ощущения'
                        ],
                        [
                            'html' => 'HQkusqXGJS0',
                            'video_id' => '349-st',
                            'name' => 'Пресс'
                        ],
                        [
                            'html' => 'Kqm90E6lVu4',
                            'video_id' => '351-st',
                            'name' => 'Косые 1 подход'
                        ],
                        [
                            'html' => 'QHICgyZQeyc',
                            'video_id' => '352-st',
                            'name' => 'Косые 2 подход'
                        ],
                        [
                            'html' => 'yEcFpqCzEa4',
                            'video_id' => '353-st',
                            'name' => 'Косые 3 подход'
                        ],
                        [
                            'html' => 'E9_epjKMK4c',
                            'video_id' => '354-st',
                            'name' => 'Ощущения после'
                        ],

                    ]
                ],
            ],
            [
                id_day => 'DAY21POD',
                name => '5-ый день. Грудь + бицепс',
                access => $price,
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => 'ni_yKmhP6W0',
                            'video_id' => '355-st',
                            'name' => 'Утро протеин'
                        ],
                        [
                            'html' => 'npUNq8Y6d5I',
                            'video_id' => '356-st',
                            'name' => 'Питание'
                        ],
                        [
                            'html' => 'g1LhaYEyHdo',
                            'video_id' => '357-st',
                            'name' => 'Протеин + бца'
                        ],
                        [
                            'html' => 'cUpZ0ACHpj8',
                            'video_id' => '358-st',
                            'name' => 'Разминка'
                        ],
                        [
                            'html' => 'fjS1U-EAtSI',
                            'video_id' => '359-st',
                            'name' => 'Наклонная 1 подход'
                        ],
                        [
                            'html' => 'hwno4X3S08w',
                            'video_id' => '360-st',
                            'name' => 'Наклонная 2 подход'
                        ],
                        [
                            'html' => 'po201JCgay0',
                            'video_id' => '361-st',
                            'name' => 'Наклонная 3 подход'
                        ],
                        [
                            'html' => 'um4zqHHTAx0',
                            'video_id' => '362-st',
                            'name' => 'Наклонная 4 подход'
                        ],
                        [
                            'html' => 'C0Hc5i6BG7I',
                            'video_id' => '363-st',
                            'name' => 'Наклонная 5 подход'
                        ],
                        [
                            'html' => 'hUfUMd1kWj8',
                            'video_id' => '364-st',
                            'name' => 'Жим 1 подход'
                        ],
                        [
                            'html' => 'UagGnqHGns0',
                            'video_id' => '365-st',
                            'name' => 'Жим 2 подход'
                        ],
                        [
                            'html' => 'QJpP2t9KNYQ',
                            'video_id' => '366-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => 'JKdbHKgiBjg',
                            'video_id' => '367-st',
                            'name' => 'Жим 3 подход'
                        ],
                        [
                            'html' => 'qDbFei5usN4',
                            'video_id' => '368-st',
                            'name' => 'Разводка 1 подход'
                        ],
                        [
                            'html' => 'nuy9mRbp4AA',
                            'video_id' => '369-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => '1T7aT1qHrvU',
                            'video_id' => '370-st',
                            'name' => 'Разводка 2 подход'
                        ],
                        [
                            'html' => 'gZBCm_PqH40',
                            'video_id' => '371-st',
                            'name' => 'Плечи 1 подход'
                        ],
                        [
                            'html' => 'kRw_xKLVH5k',
                            'video_id' => '372-st',
                            'name' => 'Плечи 2 подход'
                        ],
                        [
                            'html' => 'jeS7hNw1uGQ',
                            'video_id' => '373-st',
                            'name' => 'Плечи 3 подход'
                        ],
                        [
                            'html' => 'zvEL2DCw7HM',
                            'video_id' => '374-st',
                            'name' => 'Дельта 1 подход'
                        ],
                        [
                            'html' => 'ugOzn-s4Qz0',
                            'video_id' => '375-st',
                            'name' => 'Дельта 2 подход'
                        ],
                        [
                            'html' => 'm_6sYRuGPmY',
                            'video_id' => '376-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => '45s8GIDb5Dc',
                            'video_id' => '377-st',
                            'name' => 'Пуловер'
                        ],
                        [
                            'html' => 'p5tJSNQMRso',
                            'video_id' => '378-st',
                            'name' => 'Махи 1 подход'
                        ],
                        [
                            'html' => 'wky109ufnvo',
                            'video_id' => '379-st',
                            'name' => 'Махи 2 подход'
                        ],
                        [
                            'html' => 'v9S-Krlqk7Y',
                            'video_id' => '380-st',
                            'name' => 'Махи 3 подход'
                        ],
                        [
                            'html' => 'HlrokgRIaDg',
                            'video_id' => '381-st',
                            'name' => 'Бицепс 1 подход'
                        ],
                        [
                            'html' => 'hZAJpz4qZ1I',
                            'video_id' => '382-st',
                            'name' => 'Бицепс 2 подход'
                        ],
                        [
                            'html' => 'rTlgEW766tE',
                            'video_id' => '383-st',
                            'name' => 'Бицепс 3 подход'
                        ],
                        [
                            'html' => 'sKe-TQVP1AI',
                            'video_id' => '384-st',
                            'name' => 'Бицепс 4 подход'
                        ],
                        [
                            'html' => 'Ax9nr5TcbPY',
                            'video_id' => '385-st',
                            'name' => 'Бицепс 5 подход'
                        ],
                        [
                            'html' => 'zVrlZjqyokQ',
                            'video_id' => '386-st',
                            'name' => 'Бицепс 6 подход'
                        ],
                        [
                            'html' => 'AVTqKAxl5rQ',
                            'video_id' => '387-st',
                            'name' => 'Бицепс 7 подход'
                        ],
                        [
                            'html' => 'EJJ61m_dQwU',
                            'video_id' => '388-st',
                            'name' => 'Трапеции'
                        ],
                        [
                            'html' => 'aRM5_DTyGP0',
                            'video_id' => '389-st',
                            'name' => 'Протеин после трени'
                        ],
                    ]
                ],
            ],
            [
                id_day => 'DAY22POD',
                name => '6-ой день. Спина + трицепс',
                access => $price,
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => 'KuABXqgBh88',
                            'video_id' => '390-st',
                            'name' => 'Утро протеин'
                        ],
                        [
                            'html' => 'Prq1SWhnUMg',
                            'video_id' => '391-st',
                            'name' => 'Протеин до трени'
                        ],
                        [
                            'html' => 'NSGUavMsWQ4',
                            'video_id' => '392-st',
                            'name' => 'Разминка'
                        ],
                        [
                            'html' => 'Z1_5x5M59Sg',
                            'video_id' => '393-st',
                            'name' => 'Жим сидя 1 подход'
                        ],
                        [
                            'html' => 'Z-qt3qNRHWE',
                            'video_id' => '394-st',
                            'name' => 'Жим сидя 2 подход'
                        ],
                        [
                            'html' => 'bvdLRKLimRc',
                            'video_id' => '395-st',
                            'name' => 'Жим сидя 3 подход'
                        ],
                        [
                            'html' => 'l-MERhyp4aU',
                            'video_id' => '396-st',
                            'name' => 'Жим сидя 4 подход'
                        ],
                        [
                            'html' => 'mKH1K4ZbcNc',
                            'video_id' => '397-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => 'AlytJeFyap8',
                            'video_id' => '398-st',
                            'name' => 'Трицепс 1 подход'
                        ],
                        [
                            'html' => 'VhKHtRFlyZ0',
                            'video_id' => '399-st',
                            'name' => 'Трицепс 2 подход'
                        ],
                        [
                            'html' => 'jzmEl94PKM4',
                            'video_id' => '401-st',
                            'name' => 'Трицепс 3 подход'
                        ],
                        [
                            'html' => 'yxFtK8OHFng',
                            'video_id' => '402-st',
                            'name' => 'Трицепс 4 подход'
                        ],
                        [
                            'html' => '8i_RpflbDu8',
                            'video_id' => '403-st',
                            'name' => 'Трицепс 5 подход'
                        ],
                        [
                            'html' => 'cLAl6QPU1c4',
                            'video_id' => '404-st',
                            'name' => 'Трицепс 6 подход'
                        ],
                        [
                            'html' => '_cx-n1VuMYY',
                            'video_id' => '405-st',
                            'name' => 'Трицепс 7 подход'
                        ],
                        [
                            'html' => 'vzK4Een4agA',
                            'video_id' => '406-st',
                            'name' => 'Трицепс 8 подход'
                        ],
                        [
                            'html' => '2vf9vkortgM',
                            'video_id' => '407-st',
                            'name' => 'Трицепс 9 подход'
                        ],
                        [
                            'html' => 'x014MhCVvpY',
                            'video_id' => '408-st',
                            'name' => 'Трицепс 10 подход'
                        ],
                        [
                            'html' => 'rd2LdYZiie4',
                            'video_id' => '409-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => 'Z0Y_Uu8Sf3g',
                            'video_id' => '410-st',
                            'name' => 'пуловер'
                        ],
                        [
                            'html' => 'GDFftVXDc4I',
                            'video_id' => '411-st',
                            'name' => 'Тяга 1 подход'
                        ],
                        [
                            'html' => 'bdbLuDPOID8',
                            'video_id' => '412-st',
                            'name' => 'Тяга 2 подход'
                        ],
                        [
                            'html' => '2fH5S78ZrmM',
                            'video_id' => '413-st',
                            'name' => 'Тяга 3 подход'
                        ],
                        [
                            'html' => 'D6YTRYimFOY',
                            'video_id' => '414-st',
                            'name' => 'Тяга 4 подход'
                        ],
                        [
                            'html' => 'nZRAVmwzSK8',
                            'video_id' => '415-st',
                            'name' => 'Тяга 5 подход'
                        ],
                        [
                            'html' => 'HZxbHeBGboI',
                            'video_id' => '416-st',
                            'name' => 'Трапеции 1 подход'
                        ],
                        [
                            'html' => 'SDzOXKONyY8',
                            'video_id' => '417-st',
                            'name' => 'Трапеции 2 подход'
                        ],
                        [
                            'html' => 'WBtCs0wUbvI',
                            'video_id' => '418-st',
                            'name' => 'Становая 1 подход'
                        ],
                        [
                            'html' => 'FMal8lskYTQ',
                            'video_id' => '419-st',
                            'name' => 'Становая 2 подход'
                        ],
                        [
                            'html' => '4B_7RJSyuBE',
                            'video_id' => '420-st',
                            'name' => 'Становая 3 подход'
                        ],
                        [
                            'html' => 'RNQcc7MwJ14',
                            'video_id' => '421-st',
                            'name' => 'Гиперэкстензия 1 подход'
                        ],
                        [
                            'html' => 'zXOm_DXQKDY',
                            'video_id' => '422-st',
                            'name' => 'Гиперэкстензия 2 подход'
                        ],
                        [
                            'html' => '2KwuzTXaKbs',
                            'video_id' => '423-st',
                            'name' => 'Протеин после трени'
                        ],
                    ]
                ],
            ],
            [
                id_day => 'DAY23POD',
                name => '7-ой день. Грудь + бицепс',
                access => $price,
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => 'zSNp5AfKv6k',
                            'video_id' => '424-st',
                            'name' => 'Утро протеин'
                        ],
                        [
                            'html' => 'pQBi1XRxziM',
                            'video_id' => '425-st',
                            'name' => 'Протеин до трени'
                        ],
                        [
                            'html' => 'CGpwiOx3WIA',
                            'video_id' => '426-st',
                            'name' => 'Разминка'
                        ],
                        [
                            'html' => 'jTaSTGPyt6g',
                            'video_id' => '427-st',
                            'name' => 'Ощущения'
                        ],
                        [
                            'html' => 'A2oMoDbn4jM',
                            'video_id' => '428-st',
                            'name' => 'Отжимания'
                        ],
                        [
                            'html' => 'zzs8CiNxxt4',
                            'video_id' => '429-st',
                            'name' => 'Наклонная 1 подход'
                        ],
                        [
                            'html' => 'wI6eQQiEdlY',
                            'video_id' => '430-st',
                            'name' => 'Наклонная 2 подход'
                        ],
                        [
                            'html' => 'UKsPFP1AurY',
                            'video_id' => '431-st',
                            'name' => 'Наклонная 3 подход'
                        ],
                        [
                            'html' => 'FzaCLg7kTxo',
                            'video_id' => '432-st',
                            'name' => 'Наклонная 4 подход'
                        ],
                        [
                            'html' => 'xb2gyEXPjJI',
                            'video_id' => '433-st',
                            'name' => 'Наклонная 5 подход'
                        ],
                        [
                            'html' => 'ubEmhFBZR38',
                            'video_id' => '434-st',
                            'name' => 'Наклонная 6 подход'
                        ],
                        [
                            'html' => 'HHRtIe11VRw',
                            'video_id' => '435-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => 'SUje6hbGsLY',
                            'video_id' => '436-st',
                            'name' => 'Жим 1 подход'
                        ],
                        [
                            'html' => 'cmsMCDTX7Hc',
                            'video_id' => '437-st',
                            'name' => 'Жим 2 подход'
                        ],
                        [
                            'html' => 'SPjrphbhfkQ',
                            'video_id' => '438-st',
                            'name' => 'Жим 3 подход'
                        ],
                        [
                            'html' => 'nWkOeXzYrBo',
                            'video_id' => '439-st',
                            'name' => 'Разводка 1 подход'
                        ],
                        [
                            'html' => '1cCoWHuN_XI',
                            'video_id' => '440-st',
                            'name' => 'Разводка 2 подход'
                        ],
                        [
                            'html' => 'CQW0h92zw7U',
                            'video_id' => '441-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => 'mRq506_j-us',
                            'video_id' => '442-st',
                            'name' => 'Разводка 3 подход'
                        ],
                        [
                            'html' => 'sbqr8BW6-AI',
                            'video_id' => '443-st',
                            'name' => 'Разводка 4 подход'
                        ],
                        [
                            'html' => 'VT0DOozFdL0',
                            'video_id' => '444-st',
                            'name' => 'Плечи 1 подход'
                        ],
                        [
                            'html' => 'TINxiQFp4XU',
                            'video_id' => '445-st',
                            'name' => 'Плечи 2 подход'
                        ],
                        [
                            'html' => '8Saa18lRa24',
                            'video_id' => '446-st',
                            'name' => 'Плечи 3 подход'
                        ],
                        [
                            'html' => 'n4QxcDWz710',
                            'video_id' => '447-st',
                            'name' => 'Плечи 4 подход'
                        ],
                        [
                            'html' => 'cI8TaI32KXU',
                            'video_id' => '448-st',
                            'name' => 'Плечи 5 подход'
                        ],
                        [
                            'html' => '8J5r2X5ExJA',
                            'video_id' => '449-st',
                            'name' => 'Плечи 6 подход'
                        ],
                        [
                            'html' => 'dTte5mzzwFY',
                            'video_id' => '450-st',
                            'name' => 'Махи 1 подход'
                        ],
                        [
                            'html' => 'FboQiRORGhE',
                            'video_id' => '451-st',
                            'name' => 'Махи 2 подход'
                        ],
                        [
                            'html' => '8s06H22-9MY',
                            'video_id' => '452-st',
                            'name' => 'Махи 3 подход'
                        ],
                        [
                            'html' => 'e38cHHUimCM',
                            'video_id' => '453-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => 'FZw2KYqH3iM',
                            'video_id' => '454-st',
                            'name' => 'Махи 4 подход'
                        ],
                        [
                            'html' => 'VhcBpL-s9TM',
                            'video_id' => '455-st',
                            'name' => 'Бицепс 1 подход'
                        ],
                        [
                            'html' => 'iJbo1u2J4rc',
                            'video_id' => '456-st',
                            'name' => 'Бицепс 2 подход'
                        ],
                        [
                            'html' => 'LL4qskx_meA',
                            'video_id' => '457-st',
                            'name' => 'Бицепс 3 подход'
                        ],
                        [
                            'html' => 'obBiTP6GpTA',
                            'video_id' => '458-st',
                            'name' => 'Бицепс 4 подход'
                        ],
                        [
                            'html' => 'S7NdT_KC8Ho',
                            'video_id' => '459-st',
                            'name' => 'Бицепс 5 подход'
                        ],
                        [
                            'html' => 'dXGn7ZYiRfA',
                            'video_id' => '460-st',
                            'name' => 'Бицепс 6 подход'
                        ],
                        [
                            'html' => '8fNFUNZsuSA',
                            'video_id' => '461-st',
                            'name' => 'Трапеции 1 подход'
                        ],
                        [
                            'html' => 'ctu5p-cs2GI',
                            'video_id' => '462-st',
                            'name' => 'Трапеции 2 подход'
                        ],
                        [
                            'html' => 'DaOgESAYaPc',
                            'video_id' => '463-st',
                            'name' => 'Протеин после трени'
                        ],
                    ]
                ],
            ],
            [
                id_day => 'DAY24POD',
                name => 'Результаты недели',
                access => 'vk',
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => '_KjNpOZt8pw',
                            'video_id' => '464-st',
                            'name' => 'Вес'
                        ],
                        [
                            'html' => 'S5GCoQHkgZw',
                            'video_id' => '465-st',
                            'name' => 'Ощущения'
                        ],
                        [
                            'html' => 'qB_ejTTh-EQ',
                            'video_id' => '466-st',
                            'name' => 'Обзор вдали'
                        ],
                        [
                            'html' => 'hoZYGcdv2OY',
                            'video_id' => '467-st',
                            'name' => 'Обзор вблизи'
                        ],
                        [
                            'html' => 'IA8d6iQy-qQ',
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
                access => 'vk',
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => 'smYuPpBLdWo',
                            'video_id' => '469-st',
                            'name' => 'Продукты'
                        ],
                    ]
                ],
            ],
            [
                id_day => 'DAY27POD',
                name => '1-ый день, середина дня. Пресс',
                access => $price,
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => 'aGKjADeYXlE',
                            'video_id' => '470-st',
                            'name' => 'Утро протеин'
                        ],
                        [
                            'html' => 'Q9_3oHHrbw8',
                            'video_id' => '471-st',
                            'name' => 'Модификация'
                        ],
                        [
                            'html' => 'lR5XfQFCH20',
                            'video_id' => '472-st',
                            'name' => 'Пресс 1 подход'
                        ],
                        [
                            'html' => 'z-UZaKJaPAw',
                            'video_id' => '473-st',
                            'name' => 'Пресс 2 подход'
                        ],
                        [
                            'html' => 'ZlMIglbuJVo',
                            'video_id' => '474-st',
                            'name' => 'Пресс 3 подход'
                        ],
                        [
                            'html' => 'T3O0uChrYLw',
                            'video_id' => '475-st',
                            'name' => 'Пресс 4 подход'
                        ],
                        [
                            'html' => 'UJXxhKzgpjI',
                            'video_id' => '476-st',
                            'name' => 'Гиперэкстензия 1 подход'
                        ],
                        [
                            'html' => 'Snyl_VhWtAM',
                            'video_id' => '477-st',
                            'name' => 'Гиперэкстензия 2 подход'
                        ],
                        [
                            'html' => '1JTQPoEabYg',
                            'video_id' => '478-st',
                            'name' => 'Гиперэкстензия 3 подход'
                        ],
                        [
                            'html' => '6Co0zjSHqxU',
                            'video_id' => '479-st',
                            'name' => 'Гиперэкстензия 4 подход'
                        ],
                        [
                            'html' => 'ezsebTMJEzY',
                            'video_id' => '480-st',
                            'name' => 'Косые 1 подход'
                        ],
                        [
                            'html' => 'FYyZnhQX4W8',
                            'video_id' => '481-st',
                            'name' => 'Косые 2 подход'
                        ],
                        [
                            'html' => 'wagmwFWlrgo',
                            'video_id' => '482-st',
                            'name' => 'Косые 3 подход'
                        ],
                        [
                            'html' => 'j8kn2ZKntMk',
                            'video_id' => '483-st',
                            'name' => 'Пресс низ 1 подход'
                        ],
                        [
                            'html' => 'bRWc_xCEUVI',
                            'video_id' => '484-st',
                            'name' => 'Пресс низ 2 подход'
                        ],
                        [
                            'html' => 'e7WmK0w_4GI',
                            'video_id' => '485-st',
                            'name' => 'Пресс низ 3 подход'
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
                            'html' => 'ULxMMTQIplc',
                            'video_id' => '486-st',
                            'name' => 'Питание перед треней'
                        ],
                        [
                            'html' => 'rW8yrxOdyng',
                            'video_id' => '487-st',
                            'name' => 'Бритьё'
                        ],
                        [
                            'html' => 'Bih_nQLWTvg',
                            'video_id' => '488-st',
                            'name' => 'Протеин до трени'
                        ],
                        [
                            'html' => 'jaBroszPaSw',
                            'video_id' => '489-st',
                            'name' => 'Разминка'
                        ],
                        [
                            'html' => 'GfZlJ0N6CBQ',
                            'video_id' => '490-st',
                            'name' => 'Отжимания'
                        ],
                        [
                            'html' => 'j7rz0i6jnJc',
                            'video_id' => '491-st',
                            'name' => 'Наклонная 1 подход'
                        ],
                        [
                            'html' => 's99JyGUolaE',
                            'video_id' => '492-st',
                            'name' => 'Наклонная 2 подход'
                        ],
                        [
                            'html' => 'd9xjo80FpoA',
                            'video_id' => '493-st',
                            'name' => 'Наклонная 3 подход'
                        ],
                        [
                            'html' => 'W8IG5F4iypw',
                            'video_id' => '494-st',
                            'name' => 'Наклонная 4 подход'
                        ],
                        [
                            'html' => 'xLKzevgBJbo',
                            'video_id' => '495-st',
                            'name' => 'Наклонная 5 подход'
                        ],
                        [
                            'html' => 'b8EPLmoJGhU',
                            'video_id' => '496-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => 'lTRYf32ZC0o',
                            'video_id' => '497-st',
                            'name' => 'Жим 1 подход'
                        ],
                        [
                            'html' => 'me6LsCCdKmc',
                            'video_id' => '498-st',
                            'name' => 'Жим 2 подход'
                        ],
                        [
                            'html' => 'Xvu-4RuKCsk',
                            'video_id' => '499-st',
                            'name' => 'Жим 3 подход'
                        ],
                        [
                            'html' => 'REE5vksVkJE',
                            'video_id' => '501-st',
                            'name' => 'Жим 4 подход'
                        ],
                        [
                            'html' => 'KMcrM5yr5Rs',
                            'video_id' => '502-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => '4N47zd27kgw',
                            'video_id' => '503-st',
                            'name' => 'Разводка 1 подход'
                        ],
                        [
                            'html' => '_gIxeMJjGMs',
                            'video_id' => '504-st',
                            'name' => 'Разводка 2 подход'
                        ],
                        [
                            'html' => 'hKNd6rUd1iU',
                            'video_id' => '505-st',
                            'name' => 'Разводка 3 подход'
                        ],
                        [
                            'html' => 'L1qlICLPQcc',
                            'video_id' => '506-st',
                            'name' => 'Разводка 4 подход'
                        ],
                        [
                            'html' => 'WjheW2nMkhs',
                            'video_id' => '507-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => 'zrXk8SIlFR4',
                            'video_id' => '508-st',
                            'name' => 'Плечи 1 подход'
                        ],
                        [
                            'html' => 'sFGQY7yhfc4',
                            'video_id' => '509-st',
                            'name' => 'Плечи 2 подход'
                        ],
                        [
                            'html' => 'ufllmorLcKI',
                            'video_id' => '510-st',
                            'name' => 'Плечи 3 подход'
                        ],
                        [
                            'html' => 'KHLkrdHgjS4',
                            'video_id' => '511-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => 'zAYM9BfWwX8',
                            'video_id' => '512-st',
                            'name' => 'Дельта 1 подход'
                        ],
                        [
                            'html' => '7aXh5dhCdag',
                            'video_id' => '513-st',
                            'name' => 'Дельта 2 подход'
                        ],
                        [
                            'html' => 'NG7wG32xyt8',
                            'video_id' => '514-st',
                            'name' => 'Дельта 3 подход'
                        ],
                        [
                            'html' => 'yW9P1eXDNDQ',
                            'video_id' => '515-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => 'GoHS_dx85f8',
                            'video_id' => '516-st',
                            'name' => 'Махи 1 подход'
                        ],
                        [
                            'html' => '5LntWtjQeDM',
                            'video_id' => '517-st',
                            'name' => 'Махи 2 подход'
                        ],
                        [
                            'html' => 'FNRVObOp-Jg',
                            'video_id' => '518-st',
                            'name' => 'Махи 3 подход'
                        ],
                        [
                            'html' => 'KFSrD76pkzU',
                            'video_id' => '519-st',
                            'name' => 'Махи 4 подход'
                        ],
                        [
                            'html' => 'ZdmajryoNX0',
                            'video_id' => '520-st',
                            'name' => 'Бицепс 1 подход'
                        ],
                        [
                            'html' => '6bKX3LWZSTc',
                            'video_id' => '521-st',
                            'name' => 'Бицепс 2 подход'
                        ],
                        [
                            'html' => '5WJZh1EnN-I',
                            'video_id' => '522-st',
                            'name' => 'Бицепс 3 подход'
                        ],
                        [
                            'html' => 'ciuB4lS4cx8',
                            'video_id' => '523-st',
                            'name' => 'Бицепс 4 подход'
                        ],
                        [
                            'html' => 'tGXB7CEF8BE',
                            'video_id' => '524-st',
                            'name' => 'Вода'
                        ],
                        [
                            'html' => 'vFQk3Xa4yCc',
                            'video_id' => '525-st',
                            'name' => 'Бицепс 5 подход'
                        ],
                        [
                            'html' => 'rrQIQjgrD3w',
                            'video_id' => '526-st',
                            'name' => 'Бицепс 6 подход'
                        ],
                        [
                            'html' => 'slgbmRXSvaA',
                            'video_id' => '527-st',
                            'name' => 'Бицепс 7 подход'
                        ],
                        [
                            'html' => '49l_UqhNJrk',
                            'video_id' => '528-st',
                            'name' => 'Трапеции 1 подход'
                        ],
                        [
                            'html' => 'gN-BhnoNBs0',
                            'video_id' => '529-st',
                            'name' => 'Трапеции 2 подход'
                        ],
                        [
                            'html' => 'w2ECpnXwQGM',
                            'video_id' => '530-st',
                            'name' => 'Вид на забивке'
                        ],
                        [
                            'html' => 'XqxuYWhn4H8',
                            'video_id' => '531-st',
                            'name' => 'Протеин после трени'
                        ],
                    ]
                ],
            ],
            [
                id_day => 'DAY29POD',
                name => '2-ой день. Спина + Трицепс',
                access => $price,
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => 'l5NjIL6mkoI',
                            'video_id' => '532-st',
                            'name' => 'Утро протеин'
                        ],
                        [
                            'html' => '_9-SCRyfXgE',
                            'video_id' => '533-st',
                            'name' => 'Завтрак'
                        ],
                        [
                            'html' => '0BSGwS2YKLI',
                            'video_id' => '534-st',
                            'name' => 'Обед 1'
                        ],
                        [
                            'html' => 'AjL65lIuBHc',
                            'video_id' => '535-st',
                            'name' => 'Обед 2'
                        ],
                        [
                            'html' => 'lSW_9AXdEng',
                            'video_id' => '536-st',
                            'name' => 'Протеин до трени'
                        ],
                        [
                            'html' => 'd4_P1ZAxuQk',
                            'video_id' => '537-st',
                            'name' => 'Ощущения'
                        ],
                        [
                            'html' => 'VJHUnrsVSjA',
                            'video_id' => '538-st',
                            'name' => 'Разминка'
                        ],
                        [
                            'html' => '55wEtIddglU',
                            'video_id' => '539-st',
                            'name' => 'Жим сидя 1 подход'
                        ],
                        [
                            'html' => 'YYj5GMmC6Jc',
                            'video_id' => '540-st',
                            'name' => 'Жим сидя 2 подход'
                        ],
                        [
                            'html' => 'd7NhMZT56Lk',
                            'video_id' => '541-st',
                            'name' => 'Жим сидя 3 подход'
                        ],
                        [
                            'html' => 'WzVZ4lcDsos',
                            'video_id' => '542-st',
                            'name' => 'Жим сидя 4 подход'
                        ],
                        [
                            'html' => '9wD0rdoTktU',
                            'video_id' => '537-st',
                            'name' => 'Жим узкий 1 подход'
                        ],
                        [
                            'html' => 'DlmRIY-66jU',
                            'video_id' => '538-st',
                            'name' => 'Жим узкий 2 подход'
                        ],
                        [
                            'html' => 'M1pQwjUDotI',
                            'video_id' => '539-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => 'i2iLGy22uu8',
                            'video_id' => '540-st',
                            'name' => 'Трицепс 1 подход'
                        ],
                        [
                            'html' => 'Pz1EmHhKmbo',
                            'video_id' => '1-st',
                            'name' => 'Трицепс 2 подход'
                        ],
                        [
                            'html' => '1e5x7-yf358',
                            'video_id' => '2-st',
                            'name' => 'Трицепс 3 подход'
                        ],
                        [
                            'html' => '9Jh5wWE59bs',
                            'video_id' => '3-st',
                            'name' => 'Трицепс 4 подход'
                        ],
                        [
                            'html' => 'A4eRnPQC71s',
                            'video_id' => '4-st',
                            'name' => 'Трицепс 5 подход'
                        ],
                        [
                            'html' => 'OLM96a1_O50',
                            'video_id' => '5-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => 'V6QQOvEgiGk',
                            'video_id' => '6-st',
                            'name' => 'Трицепс 6 подход'
                        ],
                        [
                            'html' => '6w8UPPnIZV0',
                            'video_id' => '7-st',
                            'name' => 'Трицепс 7 подход'
                        ],
                        [
                            'html' => 'aCYG6lejgWU',
                            'video_id' => '8-st',
                            'name' => 'Пуловер'
                        ],
                        [
                            'html' => 'Ki5EmhplS94',
                            'video_id' => '9-st',
                            'name' => 'Корректировка'
                        ],
                        [
                            'html' => 'UVaFSxjvH6w',
                            'video_id' => '10-st',
                            'name' => 'Тяга 1 подход'
                        ],
                        [
                            'html' => '5aodVKcU7AE',
                            'video_id' => '11-st',
                            'name' => 'Тяга 2 подход'
                        ],
                        [
                            'html' => '3IKsUUt8ei4',
                            'video_id' => '12-st',
                            'name' => 'Тяга 3 подход'
                        ],
                        [
                            'html' => 'VO_qWsRDMbg',
                            'video_id' => '13-st',
                            'name' => 'Тяга 4 подход'
                        ],
                        [
                            'html' => '736lJmvuzWw',
                            'video_id' => '14-st',
                            'name' => 'Предплечья 1 подход'
                        ],
                        [
                            'html' => '9eoy1zjO2OI',
                            'video_id' => '15-st',
                            'name' => 'Предплечья 2 подход'
                        ],
                        [
                            'html' => 'sKzRqloKMAA',
                            'video_id' => '16-st',
                            'name' => 'Предплечья 3 подход'
                        ],
                        [
                            'html' => 'CXDADkWFNok',
                            'video_id' => '17-st',
                            'name' => 'Предплечья 4 подход'
                        ],
                        [
                            'html' => 'L6FXxs-CNlY',
                            'video_id' => '18-st',
                            'name' => 'Предплечья 5 подход'
                        ],
                        [
                            'html' => 'KTASP7sXLL4',
                            'video_id' => '19-st',
                            'name' => 'Предплечья 6 подход'
                        ],
                        [
                            'html' => 'Rf1oODtmGpw',
                            'video_id' => '20-st',
                            'name' => 'Предплечья 7 подход'
                        ],
                        [
                            'html' => 'Ju8yx94eYLc',
                            'video_id' => '21-st',
                            'name' => 'Предплечья 8 подход'
                        ],
                        [
                            'html' => '7_dW9Gth2KQ',
                            'video_id' => '22-st',
                            'name' => 'Трапеции 1 подход'
                        ],
                        [
                            'html' => 'h8SbBYmGo8g',
                            'video_id' => '23-st',
                            'name' => 'Трапеции 2 подход'
                        ],
                        [
                            'html' => '8irL22Dyhu4',
                            'video_id' => '24-st',
                            'name' => 'Протеин после трени'
                        ],
                    ]
                ],
            ],
            [
                id_day => 'DAY30POD',
                name => '3-ий день, середина дня. Пресс',
                access => $price,
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => '4ohnafJS13g',
                            'video_id' => '25-st',
                            'name' => 'Утро протеин'
                        ],
                        [
                            'html' => 'kcZjFE-_iGs',
                            'video_id' => '26-st',
                            'name' => 'Обед'
                        ],
                        [
                            'html' => 'famfHGD_VhQ',
                            'video_id' => '27-st',
                            'name' => 'Пресс 1 подход'
                        ],
                        [
                            'html' => 'xV5k5sIbkLg',
                            'video_id' => '28-st',
                            'name' => 'Пресс 2 подход'
                        ],
                        [
                            'html' => '-RBkoiiwZdw',
                            'video_id' => '29-st',
                            'name' => 'Пресс 3 подход'
                        ],
                        [
                            'html' => 'reTMi_TtneM',
                            'video_id' => '30-st',
                            'name' => 'Пресс 4 подход'
                        ],
                        [
                            'html' => 'MWLi-brgptw',
                            'video_id' => '31-st',
                            'name' => 'Пресс 5 подход'
                        ],
                        [
                            'html' => 'NxURwtxcd8M',
                            'video_id' => '30-st',
                            'name' => 'Пресс 6 подход'
                        ],
                        [
                            'html' => '4lZF_NR9XTE',
                            'video_id' => '31-st',
                            'name' => 'Боль'
                        ],
                        [
                            'html' => '5_aNtJtRm6s',
                            'video_id' => '32-st',
                            'name' => 'Гиперэкстензия 1 подход'
                        ],
                        [
                            'html' => 'tFbtZw5_kR8',
                            'video_id' => '33-st',
                            'name' => 'Гиперэкстензия 2 подход'
                        ],
                        [
                            'html' => 'Y6pr3ZGIdDE',
                            'video_id' => '34-st',
                            'name' => 'Гиперэкстензия 3 подход'
                        ],
                        [
                            'html' => 'T84ntOD8UPI',
                            'video_id' => '35-st',
                            'name' => 'Гиперэкстензия 4 подход'
                        ],
                        [
                            'html' => '5SXOK1b1lQQ',
                            'video_id' => '36-st',
                            'name' => 'Шея 1 подход'
                        ],
                        [
                            'html' => 'wpPtSFdjUrM',
                            'video_id' => '37-st',
                            'name' => 'Шея 2 подход'
                        ],
                        [
                            'html' => '4cchsLhM8G8',
                            'video_id' => '38-st',
                            'name' => 'Шея 3 подход'
                        ],
                        [
                            'html' => 'vlO21qBwrQA',
                            'video_id' => '39-st',
                            'name' => 'Пресс низ'
                        ],
                        [
                            'html' => 'v8LqymEpsx8',
                            'video_id' => '40-st',
                            'name' => 'Обед 1'
                        ],
                        [
                            'html' => 'sv61NtJF7RQ',
                            'video_id' => '41-st',
                            'name' => 'Обед 2'
                        ],
                    ]
                ],
            ],
            [
                id_day => 'DAY31POD',
                name => '3-ий день, вечер. Ноги, грудь + бицепс',
                access => $price,
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => 'RPrQlyMP1PE',
                            'video_id' => '48-st',
                            'name' => 'Протеин'
                        ],
                        [
                            'html' => '3JkzojMXfxo',
                            'video_id' => '49-st',
                            'name' => 'Разминка'
                        ],
                        [
                            'html' => 'UTTOA-wQwZI',
                            'video_id' => '50-st',
                            'name' => 'Присед 1 подход'
                        ],
                        [
                            'html' => 'WwpG23rqn9A',
                            'video_id' => '51-st',
                            'name' => 'Присед 2 подход'
                        ],
                        [
                            'html' => 'Vg3Huu3xPZE',
                            'video_id' => '52-st',
                            'name' => 'Присед 3 подход'
                        ],
                        [
                            'html' => '1vMCmlQSxxw',
                            'video_id' => '53-st',
                            'name' => 'Присед 4 подход'
                        ],
                        [
                            'html' => 'SV9ttKsgLaA',
                            'video_id' => '54-st',
                            'name' => 'Сумо 1 подход'
                        ],
                        [
                            'html' => 'ss-Dd_cgYec',
                            'video_id' => '55-st',
                            'name' => 'Сумо 2 подход'
                        ],
                        [
                            'html' => 'c2m1mxAI2B4',
                            'video_id' => '56-st',
                            'name' => 'Сумо 3 подход'
                        ],
                        [
                            'html' => 'qsm4Vxv36LY',
                            'video_id' => '57-st',
                            'name' => 'Сумо 4 подход'
                        ],
                        [
                            'html' => 'IJvq2wAk7Uk',
                            'video_id' => '58-st',
                            'name' => 'Икры 1 подход'
                        ],
                        [
                            'html' => 'Ujlfvm23Q8Q',
                            'video_id' => '59-st',
                            'name' => 'Икры 2 подход'
                        ],
                        [
                            'html' => '4LbAbIEfNN8',
                            'video_id' => '60-st',
                            'name' => 'Икры 3 подход'
                        ],
                        [
                            'html' => 'jgO40hzGTaU',
                            'video_id' => '61-st',
                            'name' => 'Икры 4 подход'
                        ],
                        [
                            'html' => 'CGdeIw9HPvg',
                            'video_id' => '62-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => 'wfeBFW52XaA',
                            'video_id' => '63-st',
                            'name' => 'Отжимания'
                        ],
                        [
                            'html' => 'btKs13CL8uM',
                            'video_id' => '64-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => 'iLKubNOOXQg',
                            'video_id' => '65-st',
                            'name' => 'Наклонная 1 подход'
                        ],
                        [
                            'html' => '58MPmJpjgJE',
                            'video_id' => '66-st',
                            'name' => 'Наклонная 2 подход'
                        ],
                        [
                            'html' => 'btXCAV-2isU',
                            'video_id' => '67-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => '5HAgKlt5FME',
                            'video_id' => '68-st',
                            'name' => 'Наклонная 3 подход'
                        ],
                        [
                            'html' => 'W0IZcRkv3Ew',
                            'video_id' => '69-st',
                            'name' => 'Наклонная 4 подход'
                        ],
                        [
                            'html' => 'cu8uBpUJwSM',
                            'video_id' => '70-st',
                            'name' => 'Наклонная 5 подход'
                        ],
                        [
                            'html' => 'N55otcHOdzk',
                            'video_id' => '71-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => 'M139wuYSOQo',
                            'video_id' => '72-st',
                            'name' => 'Наклонная 6 подход'
                        ],
                        [
                            'html' => 'Qbuah7DCsSg',
                            'video_id' => '73-st',
                            'name' => 'Жим 1 подход'
                        ],
                        [
                            'html' => 'bDHVIdvcsMQ',
                            'video_id' => '74-st',
                            'name' => 'Жим 2 подход'
                        ],
                        [
                            'html' => '8EIQa3ItTxk',
                            'video_id' => '75-st',
                            'name' => 'Жим 3 подход'
                        ],
                        [
                            'html' => 'IgsxAo-I4Yw',
                            'video_id' => '76-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => 'mictf1VXBe8',
                            'video_id' => '77-st',
                            'name' => 'Голод'
                        ],
                        [
                            'html' => 'oE4If2FiH_g',
                            'video_id' => '78-st',
                            'name' => 'Разводка 1 подход'
                        ],
                        [
                            'html' => 'utCRg33jONM',
                            'video_id' => '79-st',
                            'name' => 'Разводка 2 подход'
                        ],
                        [
                            'html' => '9925udTr7NI',
                            'video_id' => '80-st',
                            'name' => 'Разводка 3 подход'
                        ],
                        [
                            'html' => '2D_5ETaVmxc',
                            'video_id' => '81-st',
                            'name' => 'Разводка 4 подход'
                        ],
                        [
                            'html' => 'ievgGEFsM8o',
                            'video_id' => '82-st',
                            'name' => 'Разводка 5 подход'
                        ],
                        [
                            'html' => 'GPCjNA35Jb0',
                            'video_id' => '83-st',
                            'name' => 'Разводка 6 подход'
                        ],
                        [
                            'html' => '6FFLmJiHAio',
                            'video_id' => '84-st',
                            'name' => 'Разводка 7 подход'
                        ],
                        [
                            'html' => 'AYq0X2XEYoY',
                            'video_id' => '85-st',
                            'name' => 'Разводка 8 подход'
                        ],
                        [
                            'html' => '7HUy6YfxsCo',
                            'video_id' => '86-st',
                            'name' => 'Плечи 1 подход'
                        ],
                        [
                            'html' => '7GQmM7U5WuE',
                            'video_id' => '87-st',
                            'name' => 'Плечи 2 подход'
                        ],
                        [
                            'html' => 'HglfoT0NXT4',
                            'video_id' => '88-st',
                            'name' => 'Плечи 3 подход'
                        ],
                        [
                            'html' => 'Nr5CneXapMs',
                            'video_id' => '89-st',
                            'name' => 'Плечи 4 подход'
                        ],
                        [
                            'html' => 'dtoCnIXaivw',
                            'video_id' => '90-st',
                            'name' => 'Дельта 1 подход'
                        ],
                        [
                            'html' => 'hkM9_KzYsRE',
                            'video_id' => '91-st',
                            'name' => 'Дельта 2 подход'
                        ],
                        [
                            'html' => 'hB5idql6s9E',
                            'video_id' => '92-st',
                            'name' => 'Дельта 3 подход'
                        ],
                        [
                            'html' => 'MENqcZk-Qtw',
                            'video_id' => '93-st',
                            'name' => 'Махи 1 подход'
                        ],
                        [
                            'html' => 'Zdm7M428ias',
                            'video_id' => '94-st',
                            'name' => 'Махи 2 подход'
                        ],
                        [
                            'html' => 'alOG_RCBbW4',
                            'video_id' => '95-st',
                            'name' => 'Махи 3 подход'
                        ],
                        [
                            'html' => 'tfrytY9Sx4w',
                            'video_id' => '96-st',
                            'name' => 'Махи 4 подход'
                        ],
                        [
                            'html' => 'nKkpODqAWZE',
                            'video_id' => '97-st',
                            'name' => 'Пуловер 1 подход'
                        ],
                        [
                            'html' => 'l-7ZH4QtGtU',
                            'video_id' => '98-st',
                            'name' => 'Пуловер 2 подход'
                        ],
                        [
                            'html' => '74DVBDm-dZI',
                            'video_id' => '99-st',
                            'name' => 'Протеин'
                        ],
                        [
                            'html' => 'x37VFvXgJyE',
                            'video_id' => '100-st',
                            'name' => 'Бицепс 1 подход'
                        ],
                        [
                            'html' => 'QbTiacXtrSI',
                            'video_id' => '101-st',
                            'name' => 'Бицепс 2 подход'
                        ],
                        [
                            'html' => 'ZYPMpMukqSE',
                            'video_id' => '102-st',
                            'name' => 'Бицепс 3 подход'
                        ],
                        [
                            'html' => 'BYF-rvL_hbE',
                            'video_id' => '103-st',
                            'name' => 'Бицепс 4 подход'
                        ],
                        [
                            'html' => 'NVETcSlzy_U',
                            'video_id' => '104-st',
                            'name' => 'Бицепс 5 подход'
                        ],
                        [
                            'html' => 'yZEpiBkbDXY',
                            'video_id' => '105-st',
                            'name' => 'Бицепс 6 подход'
                        ],
                        [
                            'html' => 'imNWRR2-sRU',
                            'video_id' => '106-st',
                            'name' => 'Бицепс 7 подход'
                        ],
                        [
                            'html' => 'C49UE2m0jPg',
                            'video_id' => '107-st',
                            'name' => 'Протеин'
                        ],
                        [
                            'html' => 'UGQttKGX_5Q',
                            'video_id' => '108-st',
                            'name' => 'Бицепс 8 подход'
                        ],
                        [
                            'html' => '1EoBI-a27VA',
                            'video_id' => '109-st',
                            'name' => 'Трапеции 1 подход'
                        ],
                        [
                            'html' => 'RVgYIHiBI-M',
                            'video_id' => '110-st',
                            'name' => 'Трапеции 2 подход'
                        ],
                    ]
                ],
            ],
            [
                id_day => 'DAY32POD',
                name => '4-ый день. Отдых',
                access => $price,
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => 'nU9-c-B3gow',
                            'video_id' => '111-st',
                            'name' => 'Утро протеин'
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
                            'html' => 'nKdQTEA-2ws',
                            'video_id' => '112-st',
                            'name' => 'Утро протеин'
                        ],
                        [
                            'html' => '3ovf7ExR1rs',
                            'video_id' => '113-st',
                            'name' => 'Обед'
                        ],
                        [
                            'html' => 'si86EDTbNHs',
                            'video_id' => '114-st',
                            'name' => 'Пресс 1 подход'
                        ],
                        [
                            'html' => 'h7vYaWOPGbM',
                            'video_id' => '115-st',
                            'name' => 'Пресс 2 подход'
                        ],
                        [
                            'html' => 'DM9Hpz7gAqU',
                            'video_id' => '116-st',
                            'name' => 'Пресс 3 подход'
                        ],
                        [
                            'html' => '5ZmkIraDEWI',
                            'video_id' => '117-st',
                            'name' => 'Пресс 4 подход'
                        ],
                        [
                            'html' => 'Aavjyoi1rbQ',
                            'video_id' => '118-st',
                            'name' => 'Пресс 5 подход'
                        ],
                        [
                            'html' => 'AqvnT7m7FY8AqvnT7m7FY8',
                            'video_id' => '119-st',
                            'name' => 'Пресс 6 подход'
                        ],
                        [
                            'html' => 'sx4vf7ww9wQ',
                            'video_id' => '120-st',
                            'name' => 'Пресс 7 подход'
                        ],
                        [
                            'html' => '39l6cfXq6mc',
                            'video_id' => '121-st',
                            'name' => 'Гиперэстензия 1 подход'
                        ],
                        [
                            'html' => '919VACeJvis',
                            'video_id' => '122-st',
                            'name' => 'Гиперэстензия 2 подход'
                        ],
                        [
                            'html' => 'wd8oWj9-0vU',
                            'video_id' => '123-st',
                            'name' => 'Гиперэстензия 3 подход'
                        ],
                        [
                            'html' => 'hp-KuYst8N0',
                            'video_id' => '124-st',
                            'name' => 'Гиперэстензия 4 подход'
                        ],
                        [
                            'html' => 'Ftw63VJy3OE',
                            'video_id' => '125-st',
                            'name' => 'Косые 1 подход'
                        ],
                        [
                            'html' => 'q1GpqKAH_v4',
                            'video_id' => '126-st',
                            'name' => 'Косые 2 подход'
                        ],
                        [
                            'html' => 'FY1T1sHgBeE',
                            'video_id' => '127-st',
                            'name' => 'Косые 3 подход'
                        ],
                        [
                            'html' => '6AM7CcnPbeo',
                            'video_id' => '128-st',
                            'name' => 'Пресс низ 1 подход'
                        ],
                        [
                            'html' => 'vV68bElWyjc',
                            'video_id' => '129-st',
                            'name' => 'Пресс низ 2 подход'
                        ],
                        [
                            'html' => 'PXP7klm26pc',
                            'video_id' => '130-st',
                            'name' => 'Пресс низ 3 подход'
                        ],
                        [
                            'html' => 'Hsm6j1_1AuA',
                            'video_id' => '131-st',
                            'name' => 'Питание ночью'
                        ],
                        [
                            'html' => 'OMguKVLzKVc',
                            'video_id' => '132-st',
                            'name' => 'Ощущения'
                        ],
                    ]
                ],
            ],
            [
                id_day => 'DAY34POD',
                name => '6-ой день, вечер. Спина + трицепс',
                access => $price,
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => 'r2he5FOB_Hk',
                            'video_id' => '133-st',
                            'name' => 'Обед'
                        ],
                        [
                            'html' => 'w7Iscx-eHrA',
                            'video_id' => '134-st',
                            'name' => 'Разминка'
                        ],
                        [
                            'html' => 'C_aGDaS4VRM',
                            'video_id' => '135-st',
                            'name' => 'Недостатки тренировки'
                        ],
                        [
                            'html' => '9CTEpcX8G60',
                            'video_id' => '136-st',
                            'name' => 'Протеин перед треней'
                        ],
                        [
                            'html' => '9CTEpcX8G60',
                            'video_id' => '137-st',
                            'name' => 'Протеин перед треней'
                        ],
                        [
                            'html' => 'x3SY4wnQkw4',
                            'video_id' => '138-st',
                            'name' => 'Жим сидя 1 подход'
                        ],
                        [
                            'html' => '1jmQ3PWCPeY',
                            'video_id' => '139-st',
                            'name' => 'Жим сидя 2 подход'
                        ],
                        [
                            'html' => 'KpKUuQ5VeDo',
                            'video_id' => '140-st',
                            'name' => 'Жим сидя 3 подход'
                        ],
                        [
                            'html' => 'neKAo0_9o0Y',
                            'video_id' => '141-st',
                            'name' => 'Жим сидя 4 подход'
                        ],
                        [
                            'html' => 'm2meqMM8dzE',
                            'video_id' => '142-st',
                            'name' => 'Жим сидя 5 подход'
                        ],
                        [
                            'html' => '7jzNiMANQX8',
                            'video_id' => '143-st',
                            'name' => 'Трицепс 1 подход'
                        ],
                        [
                            'html' => 'kq3i-LOaqJ4',
                            'video_id' => '144-st',
                            'name' => 'Трицепс 2 подход'
                        ],
                        [
                            'html' => 'bGykU3SLKVA',
                            'video_id' => '145-st',
                            'name' => 'Трицепс 3 подход'
                        ],
                        [
                            'html' => 'OZUpIMrVJS8',
                            'video_id' => '146-st',
                            'name' => 'Трицепс 4 подход'
                        ],
                        [
                            'html' => 'OOWBfVO_G6o',
                            'video_id' => '147-st',
                            'name' => 'Трицепс 5 подход'
                        ],
                        [
                            'html' => 'v9s3EjJIp2E',
                            'video_id' => '148-st',
                            'name' => 'Трицепс 6 подход'
                        ],
                        [
                            'html' => 'MkqtM--fIYs',
                            'video_id' => '149-st',
                            'name' => 'Трицепс 7 подход'
                        ],
                        [
                            'html' => 'ug9yPEd-LDE',
                            'video_id' => '150-st',
                            'name' => 'Трицепс 8 подход'
                        ],
                        [
                            'html' => 'haRyMqOrkXY',
                            'video_id' => '151-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => 'vUdT363EAso',
                            'video_id' => '152-st',
                            'name' => 'Трицепс 9 подход'
                        ],
                        [
                            'html' => 'YdPNqAg4YMg',
                            'video_id' => '153-st',
                            'name' => 'Трицепс 10 подход'
                        ],
                        [
                            'html' => '70LW-EXFZPA',
                            'video_id' => '154-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => 'Wi6slH9Mayg',
                            'video_id' => '155-st',
                            'name' => 'Пуловер 1 подход'
                        ],
                        [
                            'html' => 'EjvuLDh53IE',
                            'video_id' => '156-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => '4ws8rzEEWu0',
                            'video_id' => '157-st',
                            'name' => 'Пуловер 2 подход'
                        ],
                        [
                            'html' => 'qKQPDFuapbQ',
                            'video_id' => '158-st',
                            'name' => 'Пуловер 3 подход'
                        ],
                        [
                            'html' => 'Q8zFSuaU5NU',
                            'video_id' => '159-st',
                            'name' => 'Тяга 1 подход'
                        ],
                        [
                            'html' => 'GJgfk-vAHFE',
                            'video_id' => '160-st',
                            'name' => 'Тяга 2 подход'
                        ],
                        [
                            'html' => 'WSc7_H5UcNk',
                            'video_id' => '161-st',
                            'name' => 'Тяга 3 подход'
                        ],
                        [
                            'html' => '6tNcFb-Yfdg',
                            'video_id' => '162-st',
                            'name' => 'Тяга 4 подход'
                        ],
                        [
                            'html' => 'BIUSoGdWGN8',
                            'video_id' => '163-st',
                            'name' => 'Тяга 5 подход'
                        ],
                        [
                            'html' => 'jLbcZhJJheM',
                            'video_id' => '164-st',
                            'name' => 'Трапеции 1 подход'
                        ],
                        [
                            'html' => 'vb-nU10tB0o',
                            'video_id' => '165-st',
                            'name' => 'Трапеции 2 подход'
                        ],
                        [
                            'html' => '-p1Vc8NmMKA',
                            'video_id' => '166-st',
                            'name' => 'Предплечья 1 подход'
                        ],
                        [
                            'html' => 'QZdIdjTFBgk',
                            'video_id' => '167-st',
                            'name' => 'Предплечья 2 подход'
                        ],
                        [
                            'html' => 'zyg4h0ZhEaU',
                            'video_id' => '168-st',
                            'name' => 'Предплечья 3 подход'
                        ],
                        [
                            'html' => 'hPyBltPXNI0',
                            'video_id' => '169-st',
                            'name' => 'Предплечья 4 подход'
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
                            'html' => 'c7DbtsMhJnw',
                            'video_id' => '170-st',
                            'name' => 'Утро протеин'
                        ],
                        [
                            'html' => 'bQoXTVH6uyQ',
                            'video_id' => '171-st',
                            'name' => 'Пресс 1 подход'
                        ],
                        [
                            'html' => 'oa79oJ55r7g',
                            'video_id' => '172-st',
                            'name' => 'Пресс 2 подход'
                        ],
                        [
                            'html' => 'VZL_s0TeUkU',
                            'video_id' => '173-st',
                            'name' => 'Пресс 3 подход'
                        ],
                        [
                            'html' => '5CyKUw7U5k0',
                            'video_id' => '174-st',
                            'name' => 'Пресс 4 подход'
                        ],
                        [
                            'html' => 'GX8ojepdmZM',
                            'video_id' => '175-st',
                            'name' => 'Пресс 5 подход'
                        ],
                        [
                            'html' => 'CLCItgmFN5c',
                            'video_id' => '176-st',
                            'name' => 'Пресс 6 подход'
                        ],
                        [
                            'html' => 'QOYfDuevxSc',
                            'video_id' => '177-st',
                            'name' => 'Пресс 7 подход'
                        ],
                        [
                            'html' => 'YobZcn7xJaQ',
                            'video_id' => '178-st',
                            'name' => 'Пресс 8 подход'
                        ],
                        [
                            'html' => 'rxUfMWZG5m0',
                            'video_id' => '179-st',
                            'name' => 'Гиперэкстензия 1 подход'
                        ],
                        [
                            'html' => 'Z1oj4wTYFbQ',
                            'video_id' => '180-st',
                            'name' => 'Гиперэкстензия 2 подход'
                        ],
                        [
                            'html' => 'ioe9_jp-bXw',
                            'video_id' => '181-st',
                            'name' => 'Гиперэкстензия 3 подход'
                        ],
                        [
                            'html' => '25G5Vt1EQak',
                            'video_id' => '182-st',
                            'name' => 'Гиперэкстензия 4 подход'
                        ],
                        [
                            'html' => 'NHB2O8kn4-8',
                            'video_id' => '183-st',
                            'name' => 'Косые 1 подход'
                        ],
                        [
                            'html' => 'RP-uyqobHpo',
                            'video_id' => '184-st',
                            'name' => 'Косые 2 подход'
                        ],
                        [
                            'html' => 'VdrylZXxOJY',
                            'video_id' => '185-st',
                            'name' => 'Косые 3 подход'
                        ],
                        [
                            'html' => '6kBdp8zMfB0',
                            'video_id' => '186-st',
                            'name' => 'Косые 4 подход'
                        ],
                        [
                            'html' => 'EIc2g2N-hKo',
                            'video_id' => '187-st',
                            'name' => 'Пресс низ 1 подход'
                        ],
                        [
                            'html' => 'g9J6dFMBt5U',
                            'video_id' => '188-st',
                            'name' => 'Пресс низ 2 подход'
                        ],
                        [
                            'html' => '1nxP9RcIbU8',
                            'video_id' => '189-st',
                            'name' => 'Пресс низ 3 подход'
                        ],
                    ]
                ],
            ],
            [
                id_day => 'DAY36POD',
                name => '7-ой день. Грудь + бицепс',
                access => $price,
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => '0ZdbcRj0aLo',
                            'video_id' => '190-st',
                            'name' => 'Обед'
                        ],
                        [
                            'html' => 'CUl5VfBzMAY',
                            'video_id' => '191-st',
                            'name' => 'Протеин'
                        ],
                        [
                            'html' => '-doEza-3ZRw',
                            'video_id' => '192-st',
                            'name' => 'Разминка'
                        ],
                        [
                            'html' => 'MH2W2LBKMeE',
                            'video_id' => '193-st',
                            'name' => 'Отжимания'
                        ],
                        [
                            'html' => 'zBiPuOqdl7U',
                            'video_id' => '194-st',
                            'name' => 'Наклонная 1 подход'
                        ],
                        [
                            'html' => 'NmK8B90XLrY',
                            'video_id' => '195-st',
                            'name' => 'Наклонная 2 подход'
                        ],
                        [
                            'html' => 'Vaoix47eVI8',
                            'video_id' => '196-st',
                            'name' => 'Наклонная 3 подход'
                        ],
                        [
                            'html' => '6ZhyiwlVO6Y',
                            'video_id' => '197-st',
                            'name' => 'Наклонная 4 подход'
                        ],
                        [
                            'html' => '7Os92fw3hvg',
                            'video_id' => '198-st',
                            'name' => 'Наклонная 5 подход'
                        ],
                        [
                            'html' => 'P2CNb9Bd7rw',
                            'video_id' => '199-st',
                            'name' => 'Жим 1 подход'
                        ],
                        [
                            'html' => '6KU-fMkCl4I',
                            'video_id' => '201-st',
                            'name' => 'Жим 2 подход'
                        ],
                        [
                            'html' => 'uBO79BLDUCQ',
                            'video_id' => '202-st',
                            'name' => 'Жим 3 подход'
                        ],
                        [
                            'html' => 'WuP3ivuQpRU',
                            'video_id' => '203-st',
                            'name' => 'Жим 4 подход'
                        ],
                        [
                            'html' => 'vuDpLkzyj_M',
                            'video_id' => '204-st',
                            'name' => 'Разводка 1 подход'
                        ],
                        [
                            'html' => 'sDJOh5I2xeg',
                            'video_id' => '205-st',
                            'name' => 'Разводка 2 подход'
                        ],
                        [
                            'html' => 'VmI6GRPXBkA',
                            'video_id' => '206-st',
                            'name' => 'Разводка 3 подход'
                        ],
                        [
                            'html' => 'vL3y7E28MgY',
                            'video_id' => '207-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => 'Bo-vJRtX1Bk',
                            'video_id' => '208-st',
                            'name' => 'Плечи 1 подход'
                        ],
                        [
                            'html' => 'JX8keLtOeZw',
                            'video_id' => '209-st',
                            'name' => 'Плечи 2 подход'
                        ],
                        [
                            'html' => 'El0GzYEV7Kc',
                            'video_id' => '210-st',
                            'name' => 'Плечи 3 подход'
                        ],
                        [
                            'html' => '3Pcq9Tr3_b8',
                            'video_id' => '211-st',
                            'name' => 'Плечи 4 подход'
                        ],
                        [
                            'html' => 'VNNsQ06Qhvc',
                            'video_id' => '212-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => 'gOW3ORhZM7k',
                            'video_id' => '213-st',
                            'name' => 'Махи 1 подход'
                        ],
                        [
                            'html' => 'AMu7IFDliR8',
                            'video_id' => '214-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => '5_f682d4ZTQ',
                            'video_id' => '215-st',
                            'name' => 'Махи 2 подход'
                        ],
                        [
                            'html' => 'Rqb9R3TifNw',
                            'video_id' => '216-st',
                            'name' => 'Махи 3 подход'
                        ],
                        [
                            'html' => '5FUSwX72xzI',
                            'video_id' => '217-st',
                            'name' => 'Махи 4 подход'
                        ],
                        [
                            'html' => '1l9SGiRGbi0',
                            'video_id' => '218-st',
                            'name' => 'Бицепс 1 подход'
                        ],
                        [
                            'html' => 'UhMmt1xIzkQ',
                            'video_id' => '219-st',
                            'name' => 'БЦА'
                        ],
                        [
                            'html' => 'vkDZaFlC0l8',
                            'video_id' => '220-st',
                            'name' => 'Бицепс 2 подход'
                        ],
                        [
                            'html' => 'esZ6R1FRroY',
                            'video_id' => '221-st',
                            'name' => 'Бицепс 3 подход'
                        ],
                        [
                            'html' => 'Wf9gUsrDp5Y',
                            'video_id' => '222-st',
                            'name' => 'Бицепс 4 подход'
                        ],
                        [
                            'html' => 'aa1hrDEU-S0',
                            'video_id' => '223-st',
                            'name' => 'Бицепс 5 подход'
                        ],
                        [
                            'html' => 'kTVfLDw6KPA',
                            'video_id' => '224-st',
                            'name' => 'Бицепс 6 подход'
                        ],
                        [
                            'html' => 'LJVJCMGqALA',
                            'video_id' => '225-st',
                            'name' => 'Бицепс 7 подход'
                        ],
                        [
                            'html' => 'stFIiETXdOI',
                            'video_id' => '226-st',
                            'name' => 'Трапеции'
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
                            'html' => 'c5b7IzcooIo',
                            'video_id' => '227-st',
                            'name' => 'Вес итоговый'
                        ],
                        [
                            'html' => 'gWxuBD7dhEI',
                            'video_id' => '228-st',
                            'name' => 'Ощущения'
                        ],
                        [
                            'html' => 'eUjjmGD0fus',
                            'video_id' => '229-st',
                            'name' => 'Утро протеин'
                        ],
                        [
                            'html' => 'Lxx8ofe-khs',
                            'video_id' => '230-st',
                            'name' => 'Вид вдали'
                        ],
                        [
                            'html' => 'pGcbHVY_fII',
                            'video_id' => '231-st',
                            'name' => 'Вид вблизи'
                        ],
                        [
                            'html' => 'sJc0P8f9dX8',
                            'video_id' => '232-st',
                            'name' => 'Препараты'
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