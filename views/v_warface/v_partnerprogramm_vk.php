
<h1>Партнёрская программа  WarFace (ВКОНТАКТЕ) от Дружище_Арни! </h1>
<h2>Хочешь начать играть  или качнуть твинка? Тогда лови стартовые бонусы!</h2>

<?php

    $links = [
        [
            'name' => 'Гидра - випка, оружие серии каратель и боевое снаряжение НА 7 ДНЕЙ',
            'url' => 'https://r.advg.agency/t/yutbm/?pid=1630'
        ],
        [
            'name' => 'Лендинг 5 класс - при регистрации на седа дают второе оружие',
            'url' => 'https://r.advg.agency/t/yutbm/?pid=1406'
        ],
        [
            'name' => 'Royal - плюшки королевская битва (честно не понял какие)',
            'url' => 'https://r.advg.agency/t/yutbm/?pid=1104'
        ],
        [
            'name' => 'Roulette 2 - рулетка серии магма АЦР, МОЗБЕРГ, СКАР ПДВ, АХ-308, шлема магма',
            'url' => 'https://r.advg.agency/t/yutbm/?pid=1454'
        ],
        [
            'name' => 'Roulette 1 - рулетка серии магма ТАЙП, СИКС-12, АЦР, МАКМИЛАН, ГЛОК, КУКРИ, шлема магма',
            'url' => 'https://r.advg.agency/t/yutbm/?pid=1322'
        ],
        [
            'name' => 'Guns tutorial - собери оружие на старте АКА-103, MSBS RADON, IMBEL IA2, M16A3 CUSTOM',
            'url' => 'https://r.advg.agency/t/yutbm/?pid=1180'
        ],
        [
            'name' => 'Guns no tutorial - собери оружие на старте АКА-103, MSBS RADON, IMBEL IA2, M16A3 CUSTOM',
            'url' => 'https://r.advg.agency/t/yutbm/?pid=1181'
        ],
        [
            'name' => 'Yakudza - випка на 7 дней и пушки "НЕОН"',
            'url' => 'https://r.advg.agency/t/yutbm/?pid=921'
        ],
        [
            'name' => 'Reel - рулетка с небольшими бонусами',
            'url' => 'https://r.advg.agency/t/yutbm/?pid=1007'
        ],
        [
            'name' => 'Mars new - оружие галактика',
            'url' => 'https://r.advg.agency/t/yutbm/?pid=1236'
        ],
        [
            'name' => 'Чернобыль - боевое снаряжение',
            'url' => 'https://r.advg.agency/t/yutbm/?pid=925'
        ],
        [
            'name' => '11 lvl - оружие джунгли',
            'url' => 'https://r.advg.agency/t/yutbm/?pid=924'
        ],

    ];

?>

<ul>
    <h3>Плюшки для начинающих и краткое пояснение:</h3>

    <?php

    foreach ($links as $link){
        echo '<li><a target="_blank"  href="'.$link['url'].'">'.$link['name'].'</a></li>';
    }
    ?>
    
</ul>
