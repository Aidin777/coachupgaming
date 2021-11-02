
<h1>Набор массы с 87кг до 95кг</h1>



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

$price = 10000;
$programm = [

    [
        id => '0stweek',
        name => 'Подготовительный период, Цикл 1 - 4 дня',

        days => [
            [
                id_day => 'DAY0POD',
                name => 'Питание и исходные данные',
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => '1-XvqfzvKOU',
                            'video_id' => '1-st',
                            'name' => 'Исходный вес'
                        ],
                        [
                            'html' => 'WRF65X4KQlc',
                            'video_id' => '2-st',
                            'name' => 'Продукты'
                        ],
                        [
                            'html' => 'typ01ChqxQg',
                            'video_id' => '3-st',
                            'name' => 'Питание'
                        ],
                        [
                            'html' => 'Wz_zeDWG4Bw',
                            'video_id' => '4-st',
                            'name' => 'Телосложение верх'
                        ],
                        [
                            'html' => '1BRqSENhOgo',
                            'video_id' => '5-st',
                            'name' => 'Телосложение'
                        ],
                    ]
                ],
            ],

            [
                id_day => 'DAY1POD',
                name => 'Первый цикл, 1 день',
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => 'fp5EcgYdrtg',
                            'video_id' => '6-st',
                            'name' => 'Протеин'
                        ],
                        [
                            'html' => 'CKVWjEp9rPM',
                            'video_id' => '7-st',
                            'name' => 'Завтрак'
                        ],
                        [
                            'html' => 'kecAZujHfPI',
                            'video_id' => '8-st',
                            'name' => ' План занятий'
                        ],
                        [
                            'html' => '8cU-8SFMQ9Y',
                            'video_id' => '9-st',
                            'name' => 'Разминка'
                        ],
                        [
                            'html' => 'OUvI7EZsvHo',
                            'video_id' => '10-st',
                            'name' => 'Присед 1 подход'
                        ],
                        [
                            'html' => 'EKzL7b_FBzk',
                            'video_id' => '11-st',
                            'name' => 'Присед 2 подход'
                        ],
                        [
                            'html' => 'Oi4FTJLTz04',
                            'video_id' => '12-st',
                            'name' => 'Присед 3 подход'
                        ],
                        [
                            'html' => 'hxt7XCIQyMg',
                            'video_id' => '13-st',
                            'name' => 'Присед 4 подход'
                        ],
                        [
                            'html' => 'VY2oOOU-ocw',
                            'video_id' => '14-st',
                            'name' => 'Отжимания 1 подход'
                        ],
                        [
                            'html' => 'DOKS7BS-9A0',
                            'video_id' => '15-st',
                            'name' => 'Отжимания 2 подход'
                        ],
                        [
                            'html' => 'GjZIgWb9Ges',
                            'video_id' => '16-st',
                            'name' => 'Отжимания 3 подход'
                        ],
                        [
                            'html' => 'o40BJM80KXs',
                            'video_id' => '17-st',
                            'name' => 'Отжимания 4 подход'
                        ],
                        [
                            'html' => 'TkJDaGbu4ss',
                            'video_id' => '18-st',
                            'name' => 'Наклонная 1 подход'
                        ],
                        [
                            'html' => 'nwGHwjFLYNg',
                            'video_id' => '19-st',
                            'name' => 'Наклонная 2 подход'
                        ],
                        [
                            'html' => 'Sm8gPiUlO4M',
                            'video_id' => '20-st',
                            'name' => 'Наклонная 3 подход'
                        ],
                        [
                            'html' => 'QOrWqK5SpS4',
                            'video_id' => '21-st',
                            'name' => 'Усталость'
                        ],
                        [
                            'html' => '-WO-EL2aLTY',
                            'video_id' => '22-st',
                            'name' => 'Бицепс 1 подход'
                        ],
                        [
                            'html' => 'zzoCdQEx-5I',
                            'video_id' => '23-st',
                            'name' => 'Бицепс 2 подход'
                        ],
                        [
                            'html' => 'kt7Aqvv460E',
                            'video_id' => '24-st',
                            'name' => 'Бицепс 3 подход'
                        ],
                        [
                            'html' => 'h5E_zJ7tIk4',
                            'video_id' => '25-st',
                            'name' => 'Трапеции 1 подход'
                        ],
                        [
                            'html' => '37YouVq9Q9o',
                            'video_id' => '26-st',
                            'name' => 'Трапеции 2 подход'
                        ],
                        [
                            'html' => 'JBNfNRnwBJA',
                            'video_id' => '27-st',
                            'name' => 'Ощущения'
                        ],
                        [
                            'html' => 'TrptDOtfkbk',
                            'video_id' => '28-st',
                            'name' => 'Еда'
                        ],


                    ]
                ],
            ],


            [
                id_day => 'DAY2POD',
                name => '2-ой день. Отдых',
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => 'E6ZjJvvJkXo',
                            'video_id' => '29-st',
                            'name' => 'Протеин'
                        ],
                        [
                            'html' => '4dgK5Ex6xgI',
                            'video_id' => '30-st',
                            'name' => 'Завтрак'
                        ],
                        [
                            'html' => 'I7tjTi0gbWg',
                            'video_id' => '31-st',
                            'name' => 'Обед'
                        ],
                    ]
                ],
            ],


            [
                id_day => 'DAY3POD',
                name => '3-ий день. Спина и трицепс',
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => 'l4RNO94CLdc',
                            'video_id' => '32-st',
                            'name' => 'Ощущения'
                        ],
                        [
                            'html' => 'M5tmeLreaPs',
                            'video_id' => '33-st',
                            'name' => 'Протеин до трени'
                        ],
                        [
                            'html' => '5LMNAHptoQc',
                            'video_id' => '34-st',
                            'name' => 'Разминка'
                        ],
                        [
                            'html' => '8825sJ3x_MQ',
                            'video_id' => '35-st',
                            'name' => 'Жим сидя 1 подход'
                        ],
                        [
                            'html' => 'Ce2KXw3AWEg',
                            'video_id' => '36-st',
                            'name' => 'Жим сидя 2 подход'
                        ],
                        [
                            'html' => 'GIxxOZB68BI',
                            'video_id' => '37-st',
                            'name' => 'Жим сидя 3 подход'
                        ],
                        [
                            'html' => 'cblMR7j3hto',
                            'video_id' => '38-st',
                            'name' => 'Трицепс 1 подход'
                        ],
                        [
                            'html' => 'ZpCZNtwnbXc',
                            'video_id' => '39-st',
                            'name' => 'Трицепс 2 подход'
                        ],
                        [
                            'html' => 'rcI5cecUl48',
                            'video_id' => '40-st',
                            'name' => 'Трицепс 3 подход'
                        ],
                        [
                            'html' => 'VPgm0oxyy_w',
                            'video_id' => '41-st',
                            'name' => 'Трицепс 4 подход'
                        ],
                        [
                            'html' => 'ogQ5kaSR2o0',
                            'video_id' => '42-st',
                            'name' => 'Трицепс 5 подход'
                        ],
                        [
                            'html' => 'h6DZ1GDuCto',
                            'video_id' => '43-st',
                            'name' => 'Пуловер 1 подход'
                        ],
                        [
                            'html' => 'UH7oSOdy_uk',
                            'video_id' => '44-st',
                            'name' => 'Пуловер 2 подход'
                        ],
                        [
                            'html' => 'xeHzASFMtIg',
                            'video_id' => '45-st',
                            'name' => 'Тяга 1 подход'
                        ],
                        [
                            'html' => 'uBGog0ViAlk',
                            'video_id' => '46-st',
                            'name' => 'Тяга 2 подход'
                        ],
                        [
                            'html' => 'aZ7aVQwH7DY',
                            'video_id' => '47-st',
                            'name' => 'Тяга 3 подход'
                        ],
                        [
                            'html' => 'TeO0XtLKtjQ',
                            'video_id' => '48-st',
                            'name' => 'Тяга 4 подход'
                        ],
                        [
                            'html' => 'Ol1iO72BNgQ',
                            'video_id' => '49-st',
                            'name' => 'Трапеции 1 подход'
                        ],
                        [
                            'html' => 'V_hPFLQUd4s',
                            'video_id' => '50-st',
                            'name' => 'Трапеции 2 подход'
                        ],
                        [
                            'html' => '4pvtd-VlGYs',
                            'video_id' => '51-st',
                            'name' => 'Пресс'
                        ],
                        [
                            'html' => 'O_-WBHqviQk',
                            'video_id' => '52-st',
                            'name' => 'Ощущения'
                        ],
                        [
                            'html' => 'pge8nz_y9ww',
                            'video_id' => '53-st',
                            'name' => 'Перекус'
                        ],
                    ]
                ],
            ],

            [
                id_day => 'DAY4POD',
                name => '4-ый день. Отдых',
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => 'FNAfYUFjgT4',
                            'video_id' => '54-st',
                            'name' => 'Ощущения'
                        ],
                    ]
                ],
            ],

            [
                id_day => 'DAY5POD',
                name => '5-ый день. Результаты',
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => 'AJoODcLT3a4',
                            'video_id' => '55-st',
                            'name' => 'Вес'
                        ],
                        [
                            'html' => 'y762DETLIcA',
                            'video_id' => '56-st',
                            'name' => 'Утро'
                        ],
                        [
                            'html' => 'ybu6NydcPhQ',
                            'video_id' => '57-st',
                            'name' => 'Завтрак'
                        ],
                        [
                            'html' => 'Id0Z7_7oiX0',
                            'video_id' => '58-st',
                            'name' => 'Перекус'
                        ],
                        [
                            'html' => 'CfqTaIePNSo',
                            'video_id' => '59-st',
                            'name' => 'Обед'
                        ],
                        [
                            'html' => 'd35ivzlK3xI',
                            'video_id' => '60-st',
                            'name' => 'Продукты'
                        ],
                    ]
                ],
            ],



        ],
    ],

    [
        id => '1stweek',
        name => 'Подготовительный период, Цикл 2 - 8 дней ',

        days => [

            [
                id_day => 'DAY1aPOD',
                name => '1-ый день. Ноги',
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                access => $price,
                data => [
                    training_data => [


                        [
                            'html' => 'LNVZpbsezQk',
                            'video_id' => '1a',
                            'name' => 'Завтрак'
                        ],
                        [
                            'html' => 'tEEtqsq4ebA',
                            'video_id' => '2a',
                            'name' => 'Утро протеин'
                        ],
                        [
                            'html' => 'EbOmrs4n6B8',
                            'video_id' => '3a',
                            'name' => 'Разминка'
                        ],
                        [
                            'html' => 'YaGwJy8Yucc',
                            'video_id' => '4a',
                            'name' => 'Присед 1 подход'
                        ],
                        [
                            'html' => '358r-Uq0Z50',
                            'video_id' => '5a',
                            'name' => 'Присед 2 подход'
                        ],
                        [
                            'html' => 'lecIx32xC_4',
                            'video_id' => '6a',
                            'name' => 'Присед 3 подход'
                        ],
                        [
                            'html' => 'vhZ-0pM5hK0',
                            'video_id' => '7a',
                            'name' => 'Присед 4 подход'
                        ],
                        [
                            'html' => 'IUR8dJ2FVt8',
                            'video_id' => '8a',
                            'name' => 'Сумо 1 подход'
                        ],
                        [
                            'html' => 'qy3OUnnh65M',
                            'video_id' => '9a',
                            'name' => 'Сумо 2 подход'
                        ],
                        [
                            'html' => 'U72tAgRvGAc',
                            'video_id' => '10a',
                            'name' => 'Сумо 3 подход'
                        ],
                        [
                            'html' => 'HQXU_NOpPzs',
                            'video_id' => '11a',
                            'name' => 'Сумо 4 подход'
                        ],
                        [
                            'html' => 'luAzTQZH3CE',
                            'video_id' => '12a',
                            'name' => 'Икры 1 подход'
                        ],
                        [
                            'html' => 'T-JWBHeD5Ac',
                            'video_id' => '13a',
                            'name' => 'Икры 2 подход'
                        ],
                        [
                            'html' => '_p_J4U7dqPk',
                            'video_id' => '14a',
                            'name' => 'Икры 3 подход'
                        ],
                        [
                            'html' => 'x8FneHlovRE',
                            'video_id' => '15a',
                            'name' => 'Усталость'
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
                id_day => 'DAY19aPOD',
                name => '3-ий день. Отдых',
                access => $price,
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => 'KNgyeHZgc-M',
                            'video_id' => '55',
                            'name' => 'Утро'
                        ],
                        [
                            'html' => 'njpwqED5Ovs',
                            'video_id' => '56',
                            'name' => 'Ощущения'
                        ],
                        [
                            'html' => '421ombg_8zY',
                            'video_id' => '57',
                            'name' => 'Обед'
                        ],


                    ]
                ],
            ],
            [
                id_day => 'DAY20aPOD',
                name => '4-ый день. Отдых',
                access => $price,
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => 'YyUatxel4P4',
                            'video_id' => '58',
                            'name' => 'Утро'
                        ],
                        [
                            'html' => 'SqpQLGL9eg8',
                            'video_id' => '59',
                            'name' => 'Ощущения'
                        ],

                    ]
                ],
            ],[
                id_day => 'DAY21aPOD',
                name => '5-ый день, середина дня. Спина + трицепс',
                access => $price,
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [
                        [
                            'html' => 'GnmGeUABR4Q',
                            'video_id' => '60',
                            'name' => 'Утро'
                        ],
                        [
                            'html' => 'iPxhooCxCgw',
                            'video_id' => '61',
                            'name' => 'Завтрак'
                        ],
                        [
                            'html' => 'bxkBbqAVkBE',
                            'video_id' => '62',
                            'name' => 'обед'
                        ],
                        [
                            'html' => '9yERgeSs2qI',
                            'video_id' => '63',
                            'name' => 'Протеин'
                        ],
                        [
                            'html' => 'Pe5MMmu-LGk',
                            'video_id' => '64',
                            'name' => 'Разминка'
                        ],
                        [
                            'html' => '29NaPw8rJvg',
                            'video_id' => '65',
                            'name' => 'Жим сидя 1 подход'
                        ],
                        [
                            'html' => 'NVeYrMoimV4',
                            'video_id' => '66',
                            'name' => 'Жим сидя 2 подход'
                        ],
                        [
                            'html' => 'sy7hVNEqdzo',
                            'video_id' => '67',
                            'name' => 'Жим сидя 3 подход'
                        ],
                        [
                            'html' => 'F34sPGl3PMQ',
                            'video_id' => '68',
                            'name' => 'Жим сидя 4 подход'
                        ],
                        [
                            'html' => 'EmhnZsFUm_4',
                            'video_id' => '69',
                            'name' => 'Жим сидя 5 подход'
                        ],
                        [
                            'html' => 'FdBclXorT4g',
                            'video_id' => '70',
                            'name' => 'Пуловер 1 подход'
                        ],
                        [
                            'html' => 'ykrwkPUuC4Q',
                            'video_id' => '71',
                            'name' => 'Пуловер 2 подход'
                        ],
                        [
                            'html' => 'sXIGwsnjc1M',
                            'video_id' => '72',
                            'name' => 'Пуловер 3 подход'
                        ],
                        [
                            'html' => '1ac0cP3_pc4',
                            'video_id' => '73',
                            'name' => 'Трицепс 1 подход'
                        ],
                        [
                            'html' => 'A0-B3R_heMA',
                            'video_id' => '74',
                            'name' => 'Трицепс 2 подход'
                        ],
                        [
                            'html' => 'pPL4b059KdE',
                            'video_id' => '75',
                            'name' => 'Трицепс 3 подход'
                        ],
                        [
                            'html' => '9lcntKcQEzo',
                            'video_id' => '76',
                            'name' => 'Трицепс 4 подход'
                        ],
                        [
                            'html' => 'JxS7FYQmG_w',
                            'video_id' => '77',
                            'name' => 'Трицепс 5 подход'
                        ],
                        [
                            'html' => '24BIt-kdfBY',
                            'video_id' => '78',
                            'name' => 'Спина 1 подход'
                        ],
                        [
                            'html' => 'lBwDKh50vIY',
                            'video_id' => '79',
                            'name' => 'Спина 2 подход'
                        ],
                        [
                            'html' => 'D27vVayd72M',
                            'video_id' => '80',
                            'name' => 'Спина 3 подход'
                        ],



                    ]
                ],
            ],
            [
                id_day => 'DAY22aPOD',
                name => '6-ой день. Отдых и закупка',
                access => $price,
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [
                        [
                            'html' => 'P87zn-RkZl8',
                            'video_id' => '81',
                            'name' => 'Завтрак'
                        ],
                        [
                            'html' => 'wm7jiedJpqg',
                            'video_id' => '82',
                            'name' => 'Ощущения'
                        ],
                        [
                            'html' => 'Cte1oll156c',
                            'video_id' => '83',
                            'name' => 'Закупка'
                        ],
                        [
                            'html' => 'IOyAbw8kmjw',
                            'video_id' => '84',
                            'name' => 'Обед'
                        ],

                    ]
                ],
            ],
            [
                id_day => 'DAY23aPOD',
                name => '7-ой день. Отдых ',
                access => $price,
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => '6vKQ9IlYNX0',
                            'video_id' => '85',
                            'name' => 'Утро'
                        ],
                        [
                            'html' => '8l-8O-lMoi4',
                            'video_id' => '86',
                            'name' => 'Вес'
                        ],
                        [
                            'html' => '0BNUdsiDXQU',
                            'video_id' => '87',
                            'name' => 'Завтрак'
                        ],
                        [
                            'html' => 'mdDJkLjomLE',
                            'video_id' => '88',
                            'name' => 'Ощущения'
                        ],

                    ]
                ],
            ],
            [
                id_day => 'DAY23POD',
                name => '8-ой день. Пресс + Грудь + Спина',
                access => $price,
                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
                data => [
                    training_data => [

                        [
                            'html' => 'OOexnJaFUGQ',
                            'video_id' => '89',
                            'name' => 'Ощущения'
                        ],
                        [
                            'html' => 'aqMB7WbCjZo',
                            'video_id' => '90',
                            'name' => 'Тяга 1 подход'
                        ],
                        [
                            'html' => '_x4R3s01NcE',
                            'video_id' => '91',
                            'name' => 'Тяга 2 подход'
                        ],
                        [
                            'html' => 'cU4VguJGV_o',
                            'video_id' => '92',
                            'name' => 'Тяга 3 подход'
                        ],
                        [
                            'html' => 'IRNWS3aRvsE',
                            'video_id' => '93',
                            'name' => 'Тяга 4 подход'
                        ],
                        [
                            'html' => 'EPiptGUnVZ4',
                            'video_id' => '94',
                            'name' => 'Отжимания 1 подход'
                        ],
                        [
                            'html' => 'GJRLNUcuTAk',
                            'video_id' => '95',
                            'name' => 'Отжимания 2 подход'
                        ],
                        [
                            'html' => 'kHpCTwpKZG4',
                            'video_id' => '96',
                            'name' => 'Отжимания 3 подход'
                        ],
                        [
                            'html' => 'xzGSVWKkjIg',
                            'video_id' => '97',
                            'name' => 'Бицепс 1 подход'
                        ],
                        [
                            'html' => 'TTfV8PKgBHA',
                            'video_id' => '98',
                            'name' => 'Бицепс 2 подход'
                        ],
                        [
                            'html' => 'Q40LkqeX9xQ',
                            'video_id' => '99',
                            'name' => 'Пресс 1 подход'
                        ],
                        [
                            'html' => 'oxXLMMmDwNU',
                            'video_id' => '100',
                            'name' => 'Пресс 2 подход'
                        ],
                        [
                            'html' => 'wPI9UIJgBwI',
                            'video_id' => '101',
                            'name' => 'Пресс 3 подход'
                        ],
                        [
                            'html' => 'ZHjTRHFeV1c',
                            'video_id' => '102',
                            'name' => 'Косые 1 подход'
                        ],
                        [
                            'html' => '3773AdXVZvc',
                            'video_id' => '103',
                            'name' => 'Косые 2 подход'
                        ],
                        [
                            'html' => 'oAtAroBVd0I',
                            'video_id' => '104',
                            'name' => 'Косые 3 подход'
                        ],

                    ]
                ],
            ],
//            [',
////
//                id_day => 'DAY24POD    name => 'Результаты недели',
//                info_before => 'Основная задача проработать  мышцы, чтобы на следующей неделе дать им полноценную нагрузку.',
//                access => 'vk',
//                data => [
//                    training_data => [
//                        [
//                            'html' => 'Z_jag43qROM',
//                            'video_id' => '180',
//                            'name' => 'вес 1 неделя'
//                        ],
//
//
//                    ]
//                ],
//            ],


        ],
    ],

    [
        id => '1Astweek',
        name => '1 неделя активных тренировок ',

        video_before => [
            '',
            ''
        ],
        days => [
            [
                id_day => 'DAY34POD',
                name => '7-ой день. Ноги, грудь + бицепс',
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


    [
        id => '2Astweek',
        name => '2 неделя активных тренировок',

        video_before => [
            '',
            ''
        ],
        days => [
            [
                id_day => 'DAY34POD',
                name => '7-ой день. Ноги, грудь + бицепс',
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

<br><br><br>
<!---->
<!--Грузоподъемность пассажирского самолета составляет 30 т. Составить программу для определения веса почтового груза, <br>-->
<!--который можно поместить в самолет после посадки пассажиров и загрузки их багажа. Во время регистрации пассажиров ЭВМ должна подсчитывать количество пассажиров<br>-->
<!--(условный вес одного человека=100кг) и суммировать вес багажа.<br>-->
<!--В списке должна содер-жаться следующая информация: номер рейса, направление, Ф.И.О. пассажира, вес его багажа, дата отправления.<br>-->
<!--В результате работы программы сформиро-вать список рейсов, вылетевших в определенный день, вычисляя вес почтового груза перевезенного на этом рейсе.<br>-->
<!--Вычислить суммарный объем перевезенного каждым рейсом груза в течение указанного месяца.<br>-->
<!---->
<!--<h2>Решение</h2>-->
<!--Грузоподдъёмность - 30.000кг<br>-->
<!--Условный вес пассажира - 100кг<br>-->
<!---->
<!--30.000 - (количество людей * 100 ) - вес всего багажа = почтовый груз<br><br><br><br><br>-->
<!---->
<!---->
<!--<form action="">-->
<!--    <div class="form-row">-->
<!--        <div class="form-group col-md-6">-->
<!--            <select id="inputState" class="form-control">-->
<!--                <option selected>День 1</option>-->
<!--                <option>День 2</option>-->
<!--                <option>Список Брать из БД</option>-->
<!--            </select>-->
<!--        </div>-->
<!--        <div class="form-group col-md-6">-->
<!--                <button type="submit" class="btn btn-primary mb-2">Показать список рейсов</button>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="form-row">-->
<!--        <div class="form-row col-md-2">-->
<!--            <label class="sr-only" for="inlineFormInputName">Name</label>-->
<!--            <input type="text" class="form-control" id="inlineFormInputName" placeholder="№ рейса 23">-->
<!--        </div>-->
<!--        <div class="form-row col-md-4">-->
<!--            <label class="sr-only" for="inlineFormInputName">Name</label>-->
<!--            <input type="text" class="form-control" id="inlineFormInputName" placeholder="Направление рейса ЖОПА-МАРС">-->
<!--        </div>-->
<!--        <div class="form-row col-md-4">-->
<!--            <label class="sr-only" for="inlineFormInputName">Name</label>-->
<!--            <input type="text" class="form-control" id="inlineFormInputName" placeholder="Время вылета - когда хочешь">-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="form-row">-->
<!--        <div class="form-row col-md-2">-->
<!--            <label class="sr-only" for="inlineFormInputName">Name</label>-->
<!--            <input type="text" class="form-control" id="inlineFormInputName" placeholder="Кирилл">-->
<!--        </div>-->
<!--        <div class="form-row col-md-2">-->
<!--            <label class="sr-only" for="inlineFormInputName">Name</label>-->
<!--            <input type="text" class="form-control" id="inlineFormInputName" placeholder="Иванов">-->
<!--        </div>-->
<!--        <div class="form-row col-md-2">-->
<!--            <label class="sr-only" for="inlineFormInputName">Name</label>-->
<!--            <input type="text" class="form-control" id="inlineFormInputName" placeholder="Олегович">-->
<!--        </div>-->
<!--        <div class="form-row col-md-2">-->
<!--            <label class="sr-only" for="inlineFormInputName">Name</label>-->
<!--            <input type="text" class="form-control" id="inlineFormInputName" placeholder="Вес багажа 32кг">-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="form-row">-->
<!--        <div class="form-row col-md-2">-->
<!--            <label class="sr-only" for="inlineFormInputName">Name</label>-->
<!--            <input type="text" class="form-control" id="inlineFormInputName" placeholder="Петя">-->
<!--        </div>-->
<!--        <div class="form-row col-md-2">-->
<!--            <label class="sr-only" for="inlineFormInputName">Name</label>-->
<!--            <input type="text" class="form-control" id="inlineFormInputName" placeholder="Петров">-->
<!--        </div>-->
<!--        <div class="form-row col-md-2">-->
<!--            <label class="sr-only" for="inlineFormInputName">Name</label>-->
<!--            <input type="text" class="form-control" id="inlineFormInputName" placeholder="Пяточкин">-->
<!--        </div>-->
<!--        <div class="form-row col-md-2">-->
<!--            <label class="sr-only" for="inlineFormInputName">Name</label>-->
<!--            <input type="text" class="form-control" id="inlineFormInputName" placeholder="Вес багажа 22кг">-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="form-row">-->
<!--        <div class="form-row col-md-2">-->
<!--            <label class="sr-only" for="inlineFormInputName">Name</label>-->
<!--            <input type="text" class="form-control" id="inlineFormInputName" placeholder="Дно">-->
<!--        </div>-->
<!--        <div class="form-row col-md-2">-->
<!--            <label class="sr-only" for="inlineFormInputName">Name</label>-->
<!--            <input type="text" class="form-control" id="inlineFormInputName" placeholder="Днище">-->
<!--        </div>-->
<!--        <div class="form-row col-md-2">-->
<!--            <label class="sr-only" for="inlineFormInputName">Name</label>-->
<!--            <input type="text" class="form-control" id="inlineFormInputName" placeholder="Донное">-->
<!--        </div>-->
<!--        <div class="form-row col-md-2">-->
<!--            <label class="sr-only" for="inlineFormInputName">Name</label>-->
<!--            <input type="text" class="form-control" id="inlineFormInputName" placeholder="Вес багажа 11кг">-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    30.000 - (вес багажа + масса всех пассажиров) = Почтовый вес-->
<!---->
<!--</form>-->
<!---->
<!--<table>-->
<!---->
<!---->
<!---->
<!--</table>-->
