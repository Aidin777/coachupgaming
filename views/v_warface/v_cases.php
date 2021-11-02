<h1>Кейсы!</h1>

<?php


$specoperations = array(
    "1" => array("path" => 'euro',"price" => 100, 'id'=>'euro',  "name" => "БЛАТНОЙ","description" => "Вероятность получить 1000 очков и другие призы!",
        "prizes"=> array(1000, 250, 100, 50, 25)),
    "2" => array("path" => 'dollar',"price" => 60, 'id'=>'dollar', "name" => "МАЖОРНЫЙ","description" => "Вероятность получить 500 очков и другие призы!",
        "prizes"=> array(500, 100, 50, 25, 15)),
    "3" => array("path" => 'rub',"price" => 30, 'id'=> 'rub', "name" => "ДЕРЕВЯННЫЙ","description" => "Вероятность получить 300 очков и другие призы!",
        "prizes"=> array(300, 55, 30, 15, 10)),
    "4" => array("path" => 'rat',"price" => 25, 'id'=>'rat', "name" => "КЕЙС КРЫСЫ","description" => "Малый шанс получения рандомных призов!",
        "prizes"=> array(300, 55, 30, 15, 10))
);
?>
<div class="row">
    <?php
    foreach ($specoperations as $specoperation) :?>
        <div class="col-3">

            <div class="card text-center">
                <div class="card-header">
                    <h3><?=$specoperation['name']?></h3>
                </div>
                <div class="card-body">
                    <a href="#<?=$specoperation['id']?>" data-toggle="modal">
                        <img class="cases-img rounded" src="../<?=$specoperation['path']?>.png" alt="Прочая шляпа">
                    </a>
                </div>
                <p class="card-text"><?=$specoperation['description']?></p>
                <div class="card-footer">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?=$specoperation['id']?>">Описание</button>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php
$i = 0;
foreach ($specoperations as $specoperation) :?>
    <?php

//        echo'<pre>';
//        var_dump($specoperation);
//        echo'</pre>';
    ?>
    <?$i++?>
    <div class="modal fade" id="<?=$specoperation['id']?>"  tabindex="-1" role="dialog" aria-labelledby="<?=$specoperation['id']?>Label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="<?=$specoperation['id']?>">Название лота - <?=$specoperation['name']?></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <img class="cases-big-img card-image-top img-thumbnail <? if($i % 2 == 0) :?>pull-right<? else: ?>pull-left<? endif ?>" src="../<?=$specoperation['path']?>.png" alt="">
                        </div>
                        <div class="img-thumbnail col-6">
                            <p><?=$specoperation['description']?></p>
                            <button type="button" class="btn btn-success fixed-width" ><?=$specoperation['prizes'][0]?></button>
                            <button type="button" class="btn btn-outline-success fixed-width"> очков</button>
                            <br>
                            <button type="button" class="btn btn-primary fixed-width" ><?=$specoperation['prizes'][1]?></button>
                            <button type="button" class="btn btn-outline-primary fixed-width"> очков</button>
                            <br>
                            <button type="button" class="btn btn-secondary fixed-width" ><?=$specoperation['prizes'][2]?></button>
                            <button type="button" class="btn btn-outline-secondary fixed-width"> очков</button>
                            <br>
                            <button type="button" class="btn btn-dark fixed-width" ><?=$specoperation['prizes'][3]?></button>
                            <button type="button" class="btn btn-outline-dark fixed-width"> очков</button>
                            <br>
                            <button type="button" class="btn btn-danger fixed-width" ><?=$specoperation['prizes'][4]?></button>
                            <button type="button" class="btn btn-outline-danger fixed-width"> очков</button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <!--                    <h3 class="modal-title">Выбор:</h3>-->
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                    <button type="button" class="btn btn-primary">Открыть за <?=$specoperation['price']?> баллов</button>
                    <!--                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Обменять за е-баллы</button>-->
                </div>
            </div>
        </div>
    </div>
<? endforeach?>
