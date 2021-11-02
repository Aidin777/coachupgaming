<h1>Обменник!</h1>

<!--<form  class="spec_form" id="pripiat_test">-->
<!--    <select name="server">-->
<!--        <option value="" placeholder="Выбери"></option>-->
<!--        <option value="alfa">АЛЬФА</option>-->
<!--        <option value="bravo">БРАВО</option>-->
<!--        <option value="charlee">ЧАРЛИ</option>-->
<!--    </select>-->
<!--    <input type="submit" id="order_pripiat_set">-->
<!--    <input type="submit" id="case_pripiat_set">-->
<!--</form>-->
<!--<form class="spec_form">-->
<!--    <select name="server" id="">-->
<!--        <option value="" placeholder="Выбери"></option>-->
<!--        <option value="alfa">АЛЬФА</option>-->
<!--        <option value="bravo">БРАВО</option>-->
<!--        <option value="charlee">ЧАРЛИ</option>-->
<!--    </select>-->
<!--    <input type="submit" id="order_pripiat_profi">-->
<!--    <input type="submit" id="case_pripiat_profi">-->
<!--</form>-->

<?php
$servers = array(
    array('name' => '', 'value' => ''),
    array('name' => 'alfa', 'value' => 'АЛЬФА'),
    array('name' => 'bravo', 'value' => 'БРАВО'),
    array('name' => 'charlee', 'value' => 'ЧАРЛИ'),
);
//var_dump($spec_data);

$balls = 'balls';
$points = 'points';

$value = 'pripiat_profi';
if($_POST['balls_pripiat_profi']){
    if(M_Users::check_authorize()){

        M_Users::change_currency_on_specoperation($balls, $_POST['server_pripiat_profi'], $value);
    }
}
if($_POST['points_pripiat_profi']){
    if(M_Users::check_authorize()){

        M_Users::change_currency_on_specoperation($points, $_POST['server_pripiat_profi'], $value);
    }
}


$value = 'pp_without_death';
$post_balls = $balls.'_'.$value;
$post_points = $points.'_'.$value;
$post_server = 'server_'.$value;
if($_POST["$post_balls"]){
    if(M_Users::check_authorize()){
        M_Users::change_currency_on_specoperation($balls, $_POST["$post_server"], $value);
    }
}
if($_POST["$post_points"]){
    if(M_Users::check_authorize()){
        M_Users::change_currency_on_specoperation($points, $_POST["$post_server"], $value);
    }
}

$value = 'seds20';
$post_balls = $balls.'_'.$value;
$post_points = $points.'_'.$value;
$post_server = 'server_'.$value;
if($_POST["$post_balls"]){
    if(M_Users::check_authorize()){
        M_Users::change_currency_on_specoperation($balls, $_POST["$post_server"], $value);
    }
}
if($_POST["$post_points"]){
    if(M_Users::check_authorize()){
        M_Users::change_currency_on_specoperation($points, $_POST["$post_server"], $value);
    }
}

$value = 'set_pripiat';

$post_balls = $balls.'_'.$value;
$post_points = $points.'_'.$value;
$post_server = 'server_'.$value;
if($_POST["$post_balls"]){
    if(M_Users::check_authorize()){
        M_Users::change_currency_on_specoperation($balls, $_POST["$post_server"], $value);
    }
}
if($_POST["$post_points"]){
    if(M_Users::check_authorize()){
        M_Users::change_currency_on_specoperation($points, $_POST["$post_server"], $value);
    }
}

$value = 'pripiat_sred';

$post_balls = $balls.'_'.$value;
$post_points = $points.'_'.$value;
$post_server = 'server_'.$value;
if($_POST["$post_balls"]){
    if(M_Users::check_authorize()){
        M_Users::change_currency_on_specoperation($balls, $_POST["$post_server"], $value);
    }
}
if($_POST["$post_points"]){
    if(M_Users::check_authorize()){
        M_Users::change_currency_on_specoperation($points, $_POST["$post_server"], $value);
    }
}

$value = 'led_profi';

$post_balls = $balls.'_'.$value;
$post_points = $points.'_'.$value;
$post_server = 'server_'.$value;
if($_POST["$post_balls"]){
    if(M_Users::check_authorize()){
        M_Users::change_currency_on_specoperation($balls, $_POST["$post_server"], $value);
    }
}
if($_POST["$post_points"]){
    if(M_Users::check_authorize()){
        M_Users::change_currency_on_specoperation($points, $_POST["$post_server"], $value);
    }
}

$value = 'zatmenie_profi';

$post_balls = $balls.'_'.$value;
$post_points = $points.'_'.$value;
$post_server = 'server_'.$value;
if($_POST["$post_balls"]){
    if(M_Users::check_authorize()){
        M_Users::change_currency_on_specoperation($balls, $_POST["$post_server"], $value);
    }
}
if($_POST["$post_points"]){
    if(M_Users::check_authorize()){
        M_Users::change_currency_on_specoperation($points, $_POST["$post_server"], $value);
    }
}

$value = 'marafon';

$post_balls = $balls.'_'.$value;
$post_points = $points.'_'.$value;
$post_server = 'server_'.$value;
if($_POST["$post_balls"]){
    if(M_Users::check_authorize()){
        M_Users::change_currency_on_specoperation($balls, $_POST["$post_server"], $value);
    }
}
if($_POST["$post_points"]){
    if(M_Users::check_authorize()){
        M_Users::change_currency_on_specoperation($points, $_POST["$post_server"], $value);
    }
}

$value = 'zenit';

$post_balls = $balls.'_'.$value;
$post_points = $points.'_'.$value;
$post_server = 'server_'.$value;
if($_POST["$post_balls"]){
    if(M_Users::check_authorize()){
        M_Users::change_currency_on_specoperation($balls, $_POST["$post_server"], $value);
    }
}
if($_POST["$post_points"]){
    if(M_Users::check_authorize()){
        M_Users::change_currency_on_specoperation($points, $_POST["$post_server"], $value);
    }
}

$value = 'anubis_profi';

$post_balls = $balls.'_'.$value;
$post_points = $points.'_'.$value;
$post_server = 'server_'.$value;
if($_POST["$post_balls"]){
    if(M_Users::check_authorize()){
        M_Users::change_currency_on_specoperation($balls, $_POST["$post_server"], $value);
    }
}
if($_POST["$post_points"]){
    if(M_Users::check_authorize()){
        M_Users::change_currency_on_specoperation($points, $_POST["$post_server"], $value);
    }
}

$value = 'black_shark';

$post_balls = $balls.'_'.$value;
$post_points = $points.'_'.$value;
$post_server = 'server_'.$value;
if($_POST["$post_balls"]){
    if(M_Users::check_authorize()){
        M_Users::change_currency_on_specoperation($balls, $_POST["$post_server"], $value);
    }
}
if($_POST["$post_points"]){
    if(M_Users::check_authorize()){
        M_Users::change_currency_on_specoperation($points, $_POST["$post_server"], $value);
    }
}

$value = 'hard';

$post_balls = $balls.'_'.$value;
$post_points = $points.'_'.$value;
$post_server = 'server_'.$value;
if($_POST["$post_balls"]){
    if(M_Users::check_authorize()){
        M_Users::change_currency_on_specoperation($balls, $_POST["$post_server"], $value);
    }
}
if($_POST["$post_points"]){
    if(M_Users::check_authorize()){
        M_Users::change_currency_on_specoperation($points, $_POST["$post_server"], $value);
    }
}

$value = 'likva';

$post_balls = $balls.'_'.$value;
$post_points = $points.'_'.$value;
$post_server = 'server_'.$value;
if($_POST["$post_balls"]){
    if(M_Users::check_authorize()){
        M_Users::change_currency_on_specoperation($balls, $_POST["$post_server"], $value);
    }
}
if($_POST["$post_points"]){
    if(M_Users::check_authorize()){
        M_Users::change_currency_on_specoperation($points, $_POST["$post_server"], $value);
    }
}

//
$value = 'voshod_sred';

$post_balls = $balls.'_'.$value;
$post_points = $points.'_'.$value;
$post_server = 'server_'.$value;
if($_POST["$post_balls"]){
    if(M_Users::check_authorize()){
        M_Users::change_currency_on_specoperation($balls, $_POST["$post_server"], $value);
    }
}
if($_POST["$post_points"]){
    if(M_Users::check_authorize()){
        M_Users::change_currency_on_specoperation($points, $_POST["$post_server"], $value);
    }
}

$value = 'voshod_profi';

$post_balls = $balls.'_'.$value;
$post_points = $points.'_'.$value;
$post_server = 'server_'.$value;
if($_POST["$post_balls"]){
    if(M_Users::check_authorize()){
        M_Users::change_currency_on_specoperation($balls, $_POST["$post_server"], $value);
    }
}
if($_POST["$post_points"]){
    if(M_Users::check_authorize()){
        M_Users::change_currency_on_specoperation($points, $_POST["$post_server"], $value);
    }
}

$value = 'voshod_sred';

$post_balls = $balls.'_'.$value;
$post_points = $points.'_'.$value;
$post_server = 'server_'.$value;
if($_POST["$post_balls"]){
    if(M_Users::check_authorize()){
        M_Users::change_currency_on_specoperation($balls, $_POST["$post_server"], $value);
    }
}
if($_POST["$post_points"]){
    if(M_Users::check_authorize()){
        M_Users::change_currency_on_specoperation($points, $_POST["$post_server"], $value);
    }
}

?>

<div class="row">
            <?php
            foreach ($spec_data as $specoperation) :?>
                <div class="col-3">

                    <div class="card text-center">

                        <h3><?=$specoperation['name']?></h3>

                        <div class="card-body">
                            <a href="#<?=$specoperation['value']?>" data-toggle="modal">
                                <img class="specoperation-img rounded" src="../<?=$specoperation['path']?>.png" alt="Прочая шляпа">
                            </a>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?=$specoperation['value']?>">Подробно</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
</div>

<?php
$i = 0;
foreach ($spec_data as $specoperation) :?>
   
    <?$i++?>
    <div class="modal fade" id="<?=$specoperation['value']?>"  tabindex="-1" role="dialog" aria-labelledby="<?=$specoperation['value']?>Label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="<?=$specoperation['value']?>">Название лота - <?=$specoperation['name']?></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-7">
                            <img class="card-image-top img-thumbnail <? if($i % 2 == 0) :?>pull-right<? else: ?>pull-left<? endif ?>" src="../<?=$specoperation['path']?>.png" alt="">
                        </div>
                        <div class="img-thumbnail col-5">
                            Количество игроков в составе, помогающих пройти - <?=$specoperation['gamers']?>.
                            <br>
                            <br>
                            Класс которым пойдёте вы - МЕДИК, при желании идти другим классом нужно обговорить с составом.
                            <br>
                            Перед прохождением спецопераций Восход или Припять - учите тактику!
                            <a target="_blank" href="/info/fines">Штрафы</a> для вас никто не отменял!
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                    <form  action="#" method="post" id="<?=$specoperation['name']?>">
                        Выбор сервера -
                        <select class="btn btn-outline-secondary" name="server_<?=$specoperation['value']?>">
                            <?php
                            foreach ($servers as $server){ ?>
                                <option value="<?=$server['name']?>"><?=$server['value']?></option>
                            <?php } ?>

                        </select>

                    <input type="submit" class="btn btn-success" id ='id_order_<?=$specoperation['id']?>'  name="balls_<?=$specoperation['value']?>" value="Обменять за <?=$specoperation['balls']?> баллов">
                    <input type="submit" class="btn btn-primary" id ='id_case_<?=$specoperation['id']?>'name="points_<?=$specoperation['value']?>" value="Обменять за <?=$specoperation['points']?> очков">
<!--                    <button type="submit" class="btn btn-success" data-dismiss="modal" name="balls_--><?//=$specoperation['value']?><!--">Обменять за --><?//=$specoperation['balls']?><!-- баллов</button>-->
<!--                    <button type="submit" class="btn btn-primary" data-dismiss="modal" name="points_--><?//=$specoperation['value']?><!--">Обменять за --><?//=$specoperation['points']?><!-- очков</button>-->
                    </form>
                </div>
            </div>
        </div>
    </div>
<? endforeach?>



<?php
//
//$specoperations = array(
//    'zenit' => array('name' => 'Зенит', 'id'=> 'zenit',  'path'=> 'zenit', 'price'=>'600', 'gamers' => 4),
//    'seds' => array('name' => '20 СЭДОВ', 'id'=>'seds', 'path'=> 'seds', 'price'=>'1200', 'gamers' => 4),
//    'med' => array('name' => 'Припять', 'id'=>'med', 'path'=> 'med', 'price'=>'1600', 'gamers' => 4),
//    'led' => array('name' => 'Ледокол', 'id'=>'led', 'path'=> 'led', 'price'=>'2600', 'gamers' => 4),
//    'black' => array('name' => 'Чёрная акула', 'id'=>'black', 'path'=> 'black', 'price'=>'3600', 'gamers' => 4),
//    'hard' => array('name' => 'Хардкор', 'id'=>'hard', 'path'=> 'hard', 'price'=>'4600', 'gamers' => '3-4'),
//    'marafon' => array('name' => 'MARIK', 'id'=>'marafon', 'path'=> 'marafon', 'price'=>'4444', 'gamers' => 4),
//    'likva' => array('name' => 'likva', 'id'=>'likva', 'path'=> 'likva', 'price'=>'4333', 'gamers' => 4),
//    'pripiat_profi' => array('name' => 'ПРИПЯТЬ ПРОФИ', 'id'=>'pripiat_profi', 'path'=> 'pripiat_profi', 'price'=>'5654', 'gamers' => 4),
//    'pripiat_sred' => array('name' => 'ПРИПЯТЬ сложка', 'id'=>'pripiat_sred', 'path'=> 'pripiat_sred', 'price'=>'5111', 'gamers' => '2-4'),
//    'set' => array('name' => 'СЕТ', 'id'=>'set', 'path'=> 'set', 'price'=>'51110', 'gamers' => 4),
//    'zatmenie' => array('name' => 'Затмение', 'id'=>'zatmenie', 'path'=> 'zatmenie', 'price'=>'51010', 'gamers' => 4),
//    'anubis' => array('name' => 'Анубис', 'id'=>'anubis', 'path'=> 'anubis', 'price'=>'5600', 'gamers' => 4)
//);
//
//
//?>
<!---->
<!--<div class="row">-->
<!--    --><?php
//    foreach ($specoperations as $specoperation) :?>
<!--        <div class="col-3">-->
<!---->
<!--            <div class="card text-center">-->
<!---->
<!--                <h3>--><?//=$specoperation['name']?><!--</h3>-->
<!---->
<!--                <div class="card-body">-->
<!--                    <a href="#--><?//=$specoperation['id']?><!--" data-toggle="modal">-->
<!--                        <img class="specoperation-img rounded" src="../--><?//=$specoperation['path']?><!--.png" alt="Прочая шляпа">-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="card-footer">-->
<!--                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#--><?//=$specoperation['id']?><!--">Подробно</button>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    --><?php //endforeach; ?>
<!--</div>-->
<!---->
<?php
//$i = 0;
//foreach ($specoperations as $specoperation) :?>
<!---->
<!--    --><?//$i++?>
<!--    <div class="modal fade" id="--><?//=$specoperation['id']?><!--"  tabindex="-1" role="dialog" aria-labelledby="--><?//=$specoperation['id']?><!--Label" aria-hidden="true">-->
<!--        <div class="modal-dialog modal-lg" role="document">-->
<!--            <div class="modal-content">-->
<!--                <div class="modal-header">-->
<!--                    <h3 class="modal-title" id="--><?//=$specoperation['id']?><!--">Название лота - --><?//=$specoperation['name']?><!--</h3>-->
<!--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--                        <span aria-hidden="true">&times;</span>-->
<!--                    </button>-->
<!--                </div>-->
<!--                <div class="modal-body">-->
<!--                    <div class="row">-->
<!--                        <div class="col-7">-->
<!--                            <img class="card-image-top img-thumbnail --><?// if($i % 2 == 0) :?><!--pull-right--><?// else: ?><!--pull-left--><?// endif ?><!--" src="../--><?//=$specoperation['path']?><!--.png" alt="">-->
<!--                        </div>-->
<!--                        <div class="img-thumbnail col-5">-->
<!--                            Количество игроков в составе, помогающих пройти - --><?//=$specoperation['gamers']?><!--.-->
<!--                            <br>-->
<!--                            <br>-->
<!--                            Класс которым пойдёте вы - МЕДИК, при желании идти другим классом нужно обговорить с составом.-->
<!---->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="modal-footer">-->
<!--                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>-->
<!--                    <form  action="" method="post">-->
<!--                        Выбор сервера --->
<!--                        <select class="btn btn-outline-secondary" name="">-->
<!--                            --><?php
//                            foreach ($servers as $server){ ?>
<!--                                <option value="--><?//=$server['name']?><!--">--><?//=$server['value']?><!--</option>-->
<!--                            --><?php //} ?>
<!---->
<!--                        </select>-->
<!---->
<!--                        <button type="button" class="btn btn-success" data-dismiss="modal">Обменять за --><?//=$specoperation['price']?><!-- баллов</button>-->
<!--                        <button type="button" class="btn btn-primary" data-dismiss="modal">Обменять за --><?//=$specoperation['price']?><!-- очков</button>-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<?// endforeach?>
