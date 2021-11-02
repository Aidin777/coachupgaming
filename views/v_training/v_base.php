<h1>Базовая программа тренировок! Курс 13 дней из 30!</h1>

<?php
//var_dump($training);
$walk5min = '<li class="list-group-item list-group-item-secondary">
                    5 минут ходить по беговой дорожке, не бегать! Если к спортзалу вы добирались пешком, то можно приступать к разминке суставов!</li>';
$razminka = '<li class="list-group-item list-group-item-secondary">
            5 минут ходить по беговой дорожке, не бегать! Если к спортзалу вы добирались пешком, то можно приступать к разминке суставов!<br>
            Разминка суставов 1-2 минуты (шея, руки, корпус, ноги)!</li>
            <li class="list-group-item list-group-item-danger">
            Лучше нормально разомнитесь, на моей практике был случай, когда человек вышел из раздевалки и без разминки поднял вес, итог - повредил позвонки!<br>
            Никогда не выпендривайтесь в спортзале, если не уверены что осилите вес, то попросите подстраховать вас!
            </li>';
$break5min = '<li class="list-group-item list-group-item-secondary">3-4 минуты отдых, для восстановления!</li>';
$break = ', 4-5 минуты отдых, для восстановления между подходами!';
$before_training_simple_eat = '<li class="list-group-item list-group-item-secondary">
                    До тренировки за 2 часа поесть белковую еду (гречка, рис, мясо). <br>
                    До тренировки за 30 минут выпить сладкой воды или съесть энергетический батончик!</li>';
$after_training = '<li class="list-group-item list-group-item-info">После тренировки необходимо сразу восстановить силы:
    съесть 1-2 банана, что-нибудь сладкое, выпить протеиновый коктейль, гейнер или ВСАА!<hr>
    Когда вы закончили тренировку, то повреждённые мышцы запасают белка в 2 раза больше!
     Если во время тренировки вы пили воду с ВСАА, то в дополнительном питании нету смысла!</li>';
$weight50 ='( вес отягощения 50% от разового максимума )';
$weight80 ='( вес отягощения 80% от разового максимума )';
$time_pump = 'Перерыв между  подходами 15-20 секунд!';
$time_power = 'Перерыв между  подходами 1-2 минуты!';
$time_base = 'Перерыв между  подходами 1 минута!';

$break_days = '<li class="list-group-item list-group-item-secondary">
Утром - 2 варённых яица (максимум 2 желтка, белок ешьте вдоволь)!<br>
Сразу переходить на полностью белковую еду не рекомендуется, сделайте это поэтапно,
 так как в современном мире мы потребляем много углеводов и они составляют большую часть нашего рациона!<br>
Поскольку вы начали заниматься, то ваш организм нуждается в суточном потреблении белков, жиров и углеводов!<br>
Постарайтесь сделать так, чтобы 1 приём пищи в день был гарнир и мясо с овощами (гречка, рис, курица, говядина + можно салаты делать)! 
</li>';

$eggs = '<li class="list-group-item list-group-item-secondary">
Утром - 2 варённых яица + гарнир(гречка, рис), свежие овощи(огурцы, помидоры, морковь) - самые доступные продукты питания!<br>
 В день не более 2 яиц они богаты питательными веществами( желтков максимум 2 в день, а вот белка сколько влезет)!<br>
 Витамины - при суточном потреблении 2 желтков и активных тренировках, витамины принимать 1 раз в 2 дня! <hr>
                    До тренировки за 2 часа поесть белковую еду с овощами (гарнир и мясо - гречка, рис, курица, говядина)!<br>
                    До тренировки за 30 минут выпить сладкой воды или съесть энергетический батончик 
                    (Делается это для того чтобы вначале тренировки вы расходовали полученную энергию,
                     первый месяц тренировок протеин и гейнер лучше не пить, дайте организму понять, что ему нужны каллории) !<hr>
                    На тренировку берите с собой воду, если есть возможность принимать ВСАА (аминокислоты), то перед тренировкой добавьте в питьевую воду!
                     Делается это для того, чтобы прямо во время тренировки к вашим мышцам в организм поступали аминокислоты (данную воду пейте сами!)</li>
                    ';


// Ноги
$eating = 'Питание'; $razminka_name = 'Разминка'; $priced ='Присед';
$kvadriceps_leg = 'Квадрицепс'; $biceps_leg= 'Бицепс';
$privod_leg = 'Приводящие мышцы'; $vnesh_leg = 'Внешняя сторона бедра';
$golen = 'Голень';
$plechi_shim = 'Плечи, жим';
$plechi_ganteli = 'Плечи, гантели';
$press_skr = 'Пресс скручивание';  $press_kos = 'Пресс, косые мышцы'; $final = 'Завершение';

// Спина и трицепс
$back_up_block = 'Спина, верхний блок'; $goriz_block = 'Спина, гориз. блок';
$back_tiaga_naklon = 'Спина, тяга в наклоне'; $triceps_arm_otshim = 'Трицепс, отжимания';
$triceps_arm_verh_block = 'Трицепс, верхний блок'; $triceps_arm_razgib = 'Трицепс, разгибание';
$trapecii = 'Трапеции'; $giperekstenzia = 'Гиперэкстензия';

// Грудь и бицепс
$grud_noklon = 'Грудь, наклонная'; $grud_shim = 'Грудь, жим'; $grud_razvod = 'Грудь, разводка';
$pulover = 'Пуловер';
$biceps_arm_molotki = 'Бицепс, молотки'; $biceps_niz_block = 'Бицепс, нижний блок';
$biceps_arm_scott = 'Бицепс, скотт';

?>




<div class="accordion" id="accordionExample">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Подготовительная неделя!
                </button>
            </h5>
        </div>

        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
        <?php
            if($_SESSION['user']['group'] == 1){ ?>




                        <div class="accordion" id="accordionExample1">
                            <div class="card">
                                <div class="card-header" id="headingBeforeTraining">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseBeforeTraining" aria-expanded="true" aria-controls="collapseBeforeTraining">
                                            День 1, Ноги!
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseBeforeTraining" class="collapse" aria-labelledby="headingBeforeTraining" data-parent="#accordionExample1">
                                    <div class="card-body">

                                        <!--                                 Описание 1 дня домашней тренировки!-->
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="list-group" id="list-tab" role="tablist">
                                                    <a class="list-group-item list-group-item-action" id="list-btNutrition-list" data-toggle="list" href="#list-btNutrition" role="tab" aria-controls="btNutrition">Питание</a>
                                                    <a class="list-group-item list-group-item-action" id="list-btRazminka-list" data-toggle="list" href="#list-btRazminka" role="tab" aria-controls="btRazminka">Разминка</a>
                                                    <a class="list-group-item list-group-item-action" id="list-btPrised-list" data-toggle="list" href="#list-btPrised" role="tab" aria-controls="btPrised">Присед!</a>
                                                    <a class="list-group-item list-group-item-action" id="list-btVipadi-list" data-toggle="list" href="#list-btVipadi" role="tab" aria-controls="btVipadi">Выпады в стороны!</a>
                                                    <a class="list-group-item list-group-item-action" id="list-btGolen-list" data-toggle="list" href="#list-btGolen" role="tab" aria-controls="btGolen">Голень</a>
                                                    <a class="list-group-item list-group-item-action" id="list-btPress-list" data-toggle="list" href="#list-btPress" role="tab" aria-controls="btPress">Пресс</a>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="tab-content" id="nav-tabContent">
                                                    <div class="tab-pane fade show active" id="list-btNutrition" role="tabpanel" aria-labelledby="list-btNutrition-list">
                                                        <?=$eggs?>
                                                    </div>
                                                    <div class="tab-pane fade" id="list-btRazminka" role="tabpanel" aria-labelledby="list-btRazminka-list">
                                                        <?=$razminka?>
                                                    </div>
                                                    <div class="tab-pane fade" id="list-btPrised" role="tabpanel" aria-labelledby="list-btPrised-list">
                                                        <li class="list-group-item list-group-item-primary">Присед<?=$break?></li>
                                                        <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений, без отягощения!</li>
                                                    </div>
                                                    <div class="tab-pane fade" id="list-btVipadi" role="tabpanel" aria-labelledby="list-btVipadi-list">
                                                        <li class="list-group-item list-group-item-primary">Выпады влево и вправо с одной ноги на другую, в положении сидя<?=$break?></li>
                                                        <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений, без отягощения!</li>
                                                    </div>
                                                    <div class="tab-pane fade" id="list-btGolen" role="tabpanel" aria-labelledby="list-btGolen-list">
                                                        <li class="list-group-item list-group-item-primary">Подъёмы на носки, стоя на возвышенности<?=$break?></li>
                                                        <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений, без отягощения!</li>
                                                    </div>
                                                    <div class="tab-pane fade" id="list-btPress" role="tabpanel" aria-labelledby="list-btPress-list">
                                                        <li class="list-group-item list-group-item-primary">Пресс, скручивание<?=$break?></li>
                                                        <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений, без веса отягощения!</li>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingBreak1">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBreak1" aria-expanded="false" aria-controls="collapseBreak1">
                                            День 2, Отдых!
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseBreak1" class="collapse" aria-labelledby="headingBreak1" data-parent="#accordionExample1">
                                    <div class="card-body">
                                        <?=$break_days?>

                                    </div>
                                </div>
                            </div>

                            <!--                                 Описание 3 дня домашней тренировки!-->
                            <div class="card">
                                <div class="card-header" id="headingDayTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseDayTwo" aria-expanded="false" aria-controls="collapseDayTwo">
                                            День 3, Спина и Трицепс!
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseDayTwo" class="collapse" aria-labelledby="headingDayTwo" data-parent="#accordionExample1">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="list-group" id="list-tab" role="tablist">
                                                    <a class="list-group-item list-group-item-action" id="list-btNutrition3-list" data-toggle="list" href="#list-btNutrition3" role="tab" aria-controls="btNutrition3">Питание</a>
                                                    <a class="list-group-item list-group-item-action" id="list-btRazminka3-list" data-toggle="list" href="#list-btRazminka3" role="tab" aria-controls="btRazminka3">Разминка</a>
                                                    <a class="list-group-item list-group-item-action" id="list-btBack3-list" data-toggle="list" href="#list-btBack3" role="tab" aria-controls="btBack3">Спина!</a>
                                                    <a class="list-group-item list-group-item-action" id="list-btTriceps3-list" data-toggle="list" href="#list-btTriceps3" role="tab" aria-controls="btTriceps3">Трицепс!</a>
                                                    <a class="list-group-item list-group-item-action" id="list-btPress3-list" data-toggle="list" href="#list-btPress3" role="tab" aria-controls="btPress3">Пресс</a>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="tab-content" id="nav-tabContent">
                                                    <div class="tab-pane fade show active" id="list-btNutrition3" role="tabpanel" aria-labelledby="list-btNutrition3-list">
                                                        <?=$eggs?>
                                                    </div>
                                                    <div class="tab-pane fade" id="list-btRazminka3" role="tabpanel" aria-labelledby="list-btRazminka3-list">
                                                        <?=$razminka?>
                                                    </div>
                                                    <div class="tab-pane fade" id="list-btTriceps3" role="tabpanel" aria-labelledby="list-btTriceps3-list">
                                                        <li class="list-group-item list-group-item-primary">Отжимания от пола, руки прижаты к телу <?=$break?></li>
                                                        <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений, без отягощения!</li>
                                                    </div>
                                                    <div class="tab-pane fade" id="list-btBack3" role="tabpanel" aria-labelledby="list-btBack3-list">
                                                        <li class="list-group-item list-group-item-primary">Отжимания от скамьи<?=$break?></li>
                                                        <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений, без отягощения!</li>
                                                    </div>
                                                    <div class="tab-pane fade" id="list-btPress3" role="tabpanel" aria-labelledby="list-btPress3-list">
                                                        <li class="list-group-item list-group-item-primary">Пресс, скручивание<?=$break?></li>
                                                        <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений, без веса отягощения!</li>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <!--                                 Описание 4 дня домашней тренировки!-->
                            <div class="card">
                                <div class="card-header" id="headingDayThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseDayThree" aria-expanded="false" aria-controls="collapseDayThree">
                                            День 4, Отдых!
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseDayThree" class="collapse" aria-labelledby="headingDayThree" data-parent="#accordionExample1">
                                    <div class="card-body">
                                        <?=$break_days?>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingDayFour">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseDayFour" aria-expanded="false" aria-controls="collapseDayFour">
                                            День 5, Грудь и Бицепс!
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseDayFour" class="collapse" aria-labelledby="headingDayFour" data-parent="#accordionExample1">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-3">
                                                <div class="list-group" id="list-btDay5" role="tablist">
                                                    <a class="list-group-item list-group-item-action" id="list-btNutrition5-list" data-toggle="list" href="#list-btNutrition5" role="tab" aria-controls="btNutrition5">Питание</a>
                                                    <a class="list-group-item list-group-item-action" id="list-btRazminka5-list" data-toggle="list" href="#list-btRazminka5" role="tab" aria-controls="btRazminka5">Разминка</a>
                                                    <a class="list-group-item list-group-item-action" id="list-btChest5-list" data-toggle="list" href="#list-btChest5" role="tab" aria-controls="btChest5">Грудь!</a>
                                                    <a class="list-group-item list-group-item-action" id="list-btBiceps5-list" data-toggle="list" href="#list-btBiceps5" role="tab" aria-controls="btBiceps5">Бицепс!</a>
                                                    <a class="list-group-item list-group-item-action" id="list-btPress5-list" data-toggle="list" href="#list-btPress5" role="tab" aria-controls="btPress5">Пресс</a>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="tab-content" id="nav-tabContent">
                                                    <div class="tab-pane fade show active" id="list-btNutrition5" role="tabpanel" aria-labelledby="list-btNutrition5-list">
                                                        <?=$eggs?>
                                                    </div>
                                                    <div class="tab-pane fade" id="list-btRazminka5" role="tabpanel" aria-labelledby="list-btRazminka5-list">
                                                        <?=$razminka?>
                                                    </div>
                                                    <div class="tab-pane fade" id="list-btChest5" role="tabpanel" aria-labelledby="list-btChest5-list">
                                                        <li class="list-group-item list-group-item-primary">Отжимания от скамьи(кровати, пола)<?=$break?></li>
                                                        <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений, без отягощения!</li>
                                                    </div>
                                                    <div class="tab-pane fade" id="list-btBiceps5" role="tabpanel" aria-labelledby="list-btBiceps5-list">
                                                        <li class="list-group-item list-group-item-primary">Попеременные сгибания рук с весом<?=$break?></li>
                                                        <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений, 5-10кг вес отягощения!</li>
                                                    </div>
                                                    <div class="tab-pane fade" id="list-btPress5" role="tabpanel" aria-labelledby="list-btPress5-list">
                                                        <li class="list-group-item list-group-item-primary">Пресс, скручивание<?=$break?></li>
                                                        <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений, без веса отягощения!</li>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingDayFive">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseDayFive" aria-expanded="false" aria-controls="collapseDayFive">
                                            День 6-7, Отдых!
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseDayFive" class="collapse" aria-labelledby="headingDayFive" data-parent="#accordionExample1">
                                    <div class="card-body">
                                        <?=$break_days?>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingNightEating">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNightEating" aria-expanded="false" aria-controls="collapseNightEating">
                                            Питание перед сном.
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseNightEating" class="collapse" aria-labelledby="headingNightEating" data-parent="#accordionExample1">
                                    <div class="card-body">
                                        Начнём с того, что во время сна или бодрствования организму необходимы белки и углеводы.<br>
                                        В первой половине дня у вас минимум 3 приёма пищи, в ночное ни одного за 8 часов сна, хотя организм требует питания.<br>
                                        При активных тренировках в спортзале рекомендуется на ночь съедать 50-100 грамм творога на ночь, поскольку он медленно переваривается,
                                        таким образом вы будете снабжены необходимыми белками большую часть ночи!
                                        Если вы только начали занятия, подобное питание можно убрать из рациона!
                                    </div>
                                </div>
                            </div>
                        </div>

        <?php } else { ?>
            Для просмотра подготовительной недели необходимо подписаться на группу <a target="_blank" href="https://vk.com/couchupgaming">CouchUpGaming</a>!
        <?php } ?>

            </div>
        </div>

    </div>
<!--Конец подготовительной недели-->
    <div class="card">
        <div class="card-header" id="headingTraining1Week">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTraining1Week" aria-expanded="false" aria-controls="collapseTraining1Week">
                    Неделя тренировок #1
                </button>
            </h5>
        </div>
        <div id="collapseTraining1Week" class="collapse" aria-labelledby="headingTraining1Week" data-parent="#accordionExample">
            <div class="card-body">
                Скажу честно, если вы не занимались до этого времени вообще или забрасывали тренировку, то после каждой тренировки будет болеть та группа мышц,
                которую тренировали!<br>
                Боль будет приходить из-за воспаления от молочной кислоты!<br>
                Чтобы хоть как то смягчить боль, нужно пить лимонный чай с сахаром и массировать больную группу мышц!<br>
                Чтобы понизить уровень боли так же можно ограничиться количеством подходов и повторений в подходе!<br>
                Первая неделя базовая, задача - определить ваши силовые показатели и дать вашему организму осознать нагрузки!<br>
                Первый день тренировки лучше сделать ПЯТНИЦЕЙ, этот день мы начнем с НОГ, чтобы следующие 2 дня были выходные для восстановления.<br>
                Программа тренировок - ПРЯМАЯ ПИРАМИДА, постепенное увеличение веса снаряда,
                с уменьшением количества повторений в подходе, для определения разового максимума!

                <div class="accordion" id="accordionExample2">

                    <?php if($training >= 1) { ?>

                    <div class="card">
                        <div class="card-header" id="headingBase1Day">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseBase1Day" aria-expanded="true" aria-controls="collapseBase1Day">
                                    День 1, Ноги!
                                </button>
                            </h5>
                        </div>

                        <div id="collapseBase1Day" class="collapse" aria-labelledby="headingBase1Day" data-parent="#accordionExample2">
                            <div class="card-body">
                                <!--                                 Описание 1 дня тренировки!-->
                                <div class="row">
                                    <div class="col-3">
                                        <div class="list-group" id="list-tab" role="tablist">
                                            <a class="list-group-item list-group-item-action" id="list-baseNutrition1day-list" data-toggle="list" href="#list-baseNutrition1day" role="tab" aria-controls="baseNutrition1day"><?=$eating ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseRazminka1day-list" data-toggle="list" href="#list-baseRazminka1day" role="tab" aria-controls="baseRazminka1day"><?=$razminka_name?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePrised1day-list" data-toggle="list" href="#list-basePrised1day" role="tab" aria-controls="basePrised1day"><?=$priced?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseKvadro1daylist" data-toggle="list" href="#list-baseKvadro1day" role="tab" aria-controls="basebaseKvadro1day"><?=$kvadriceps_leg ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseBiceps1daylist" data-toggle="list" href="#list-baseBiceps1day" role="tab" aria-controls="baseBiceps1day"><?=$biceps_leg?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseGolen1day-list" data-toggle="list" href="#list-baseGolen1day" role="tab" aria-controls="baseGolen1day"><?=$golen?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePress1day-list" data-toggle="list" href="#list-basePress1day" role="tab" aria-controls="basePress1day"><?=$press_skr?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePressKosie1day-list" data-toggle="list" href="#list-basePressKosie1day" role="tab" aria-controls="basePressKosie1day"><?=$press_kos?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseAfter1day-list" data-toggle="list" href="#list-baseAfter1day" role="tab" aria-controls="baseAfter1day"><?=$final?></a>

                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade" id="list-baseNutrition1day" role="tabpanel" aria-labelledby="list-baseNutrition1day-list">
                                                <?=$eggs?>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseRazminka1day" role="tabpanel" aria-labelledby="list-baseRazminka1day-list">
                                                <?=$razminka?>
                                            </div>
                                            <div class="tab-pane fade" id="list-basePrised1day" role="tabpanel" aria-labelledby="list-basePrised1day-list">
                                                <li class="list-group-item list-group-item-primary">Присед! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, без отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2 подход - 10 повторений со штангой( вес штанги 20кг )</li>
                                                <li class="list-group-item list-group-item-success">3 подход - 10 повторений, со штангой и отягощением 10кг( всего 30кг )</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseKvadro1day" role="tabpanel" aria-labelledby="list-baseKvadro1day-list">
                                                <li class="list-group-item list-group-item-primary">Разгибание ног в тренажере сидя, Квадрицепс бедра! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, без отягощения</li>
                                                <li class="list-group-item list-group-item-success">2 подход - 10 повторений, с весом отягощением 5-10кг!</li>
                                                <li class="list-group-item list-group-item-success">3 подход - 10 повторений, с весом отягощением 10-15кг!</li>
                                                <li class="list-group-item list-group-item-success">4 подход - 10 повторений, с весом отягощением 15-20кг!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseBiceps1day" role="tabpanel" aria-labelledby="list-baseBiceps1day-list">
                                                <li class="list-group-item list-group-item-primary">Сгибание ног в тренажере лёжа, Бицепс бедра! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - Сгибание ног в тренажере лежа, без отягощения! 10 повторений!</li>
                                                <li class="list-group-item list-group-item-success">2 подход - Сгибание ног в тренажере лёжа с отягощением 5-10кг! 10 повторений!</li>
                                                <li class="list-group-item list-group-item-success">3 подход - Сгибание ног в тренажере лёжа с отягощением 10-15кг! 10 повторений!</li>
                                                <li class="list-group-item list-group-item-success">4 подход - Сгибание ног в тренажере лёжа с отягощением 15-20кг! 10 повторений!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseGolen1day" role="tabpanel" aria-labelledby="list-baseGolen1day-list">
                                                <li class="list-group-item list-group-item-primary">Голень, подъем на носки в тренажере стоя! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - Подъём на носки в тренажере стоя, без отягощения! 10 повторений!</li>
                                                <li class="list-group-item list-group-item-success">2 подход - Подъём на носки в тренажере стоя, с отягощением 5-10кг! 10 повторений!</li>
                                                <li class="list-group-item list-group-item-success">3 подход - Подъём на носки в тренажере стоя, с отягощением 10-15кг! 10 повторений!</li>
                                                <li class="list-group-item list-group-item-success">4 подход - Подъём на носки в тренажере стоя, с отягощением 15-20кг! 10 повторений!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-basePress1day" role="tabpanel" aria-labelledby="list-basePress1day-list">
                                                <li class="list-group-item list-group-item-primary">Пресс, скручивание<?=$break?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений, без веса отягощения!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-basePressKosie1day" role="tabpanel" aria-labelledby="list-basePressKosie1day-list">
                                                <li class="list-group-item list-group-item-primary">Пресс, косые мышцы живота! Наклоны в стороны с гантелей в руке,
                                                    после завершения упражнения взять гантелю в другую руку и повторить(вес гантели на выбор)! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений, без веса отягощения!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseAfter1day" role="tabpanel" aria-labelledby="list-baseAfter1day-list">
                                                <?=$after_training ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingBase2Day">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase2Day" aria-expanded="false" aria-controls="collapseBase2Day">
                                    День 2, Отдых!
                                </button>
                            </h5>
                        </div>
                        <div id="collapseBase2Day" class="collapse" aria-labelledby="headingBase2Day" data-parent="#accordionExample2">
                            <div class="card-body">
                                <?=$break_days?>
                            </div>
                        </div>
                    </div>

                    <?php } ?>
                    <!--                                 Описание 3 тренировки!-->
                    <?php if($training >= 2) { ?>
                    <div class="card">
                        <div class="card-header" id="headingBase3Day">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase3Day" aria-expanded="false" aria-controls="collapseBase3Day">
                                    День 3, Спина и Трицепс!
                                </button>
                            </h5>
                        </div>
                        <div id="collapseBase3Day" class="collapse" aria-labelledby="headingBase3Day" data-parent="#accordionExample2">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="list-group" id="list-tab" role="tablist">
                                            <a class="list-group-item list-group-item-action" id="list-baseNutrition3day-list" data-toggle="list" href="#list-baseNutrition3day" role="tab" aria-controls="baseNutrition3day"><?=$eating ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseRazminka3day-list" data-toggle="list" href="#list-baseRazminka3day" role="tab" aria-controls="baseRazminka3day"><?=$razminka_name?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseBackGrud3day-list" data-toggle="list" href="#list-baseBackGrud3day" role="tab" aria-controls="baseBackGrud3day"><?=$back_up_block ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseBackZaSpiny3day-list" data-toggle="list" href="#list-baseBackZaSpiny3day" role="tab" aria-controls="baseBackZaSpiny3day"><?=$back_up_block ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseBackGorizTyaga3day-list" data-toggle="list" href="#list-baseBackGorizTyaga3day" role="tab" aria-controls="baseBackGorizTyaga3day"><?=$goriz_block ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseBackGorizTyagaNaklon3day-list" data-toggle="list" href="#list-baseBackGorizTyagaNaklon3day" role="tab" aria-controls="baseBackGorizTyagaNaklon3day"><?=$back_tiaga_naklon ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseTricepsSidia3day-list" data-toggle="list" href="#list-baseTricepsSidia3day" role="tab" aria-controls="baseTricepsSidia3day"><?=$triceps_arm_otshim ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseTricepsVerh3day-list" data-toggle="list" href="#list-baseTricepsVerh3day" role="tab" aria-controls="baseTricepsVerh3day"><?=$triceps_arm_verh_block ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseTricepsRazgib3day-list" data-toggle="list" href="#list-baseTricepsRazgib3day" role="tab" aria-controls="baseTricepsRazgib3day"><?=$triceps_arm_razgib ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseTrap3day-list" data-toggle="list" href="#list-baseTrap3day" role="tab" aria-controls="baseTrap3day"><?=$trapecii ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseGiper3day-list" data-toggle="list" href="#list-baseGiper3day" role="tab" aria-controls="baseGiper3day"><?=$giperekstenzia ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePress3day-list" data-toggle="list" href="#list-basePress3day" role="tab" aria-controls="basePress3day"><?=$press_skr?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePressKosie3day-list" data-toggle="list" href="#list-basePressKosie3day" role="tab" aria-controls="basePressKosie3day"><?=$press_kos?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseAfter3day-list" data-toggle="list" href="#list-baseAfter3day" role="tab" aria-controls="baseAfter3day"><?=$final?></a>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="list-baseNutrition3day" role="tabpanel" aria-labelledby="list-baseNutrition3day-list">
                                                <?=$eggs?>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseRazminka3day" role="tabpanel" aria-labelledby="list-baseRazminka3day-list">
                                                <?=$razminka?>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseBackGrud3day" role="tabpanel" aria-labelledby="list-baseBackGrud3day-list">
                                                <li class="list-group-item list-group-item-primary">Тяга верхнего блока к груди! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 20-25кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 25-30кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">3 подход - 10 повторений, 30-35кг вес отягощения!</li>
                                            </div>

                                            <div class="tab-pane fade" id="list-baseBackZaSpiny3day" role="tabpanel" aria-labelledby="list-baseBackZaSpiny3day-list">
                                                <li class="list-group-item list-group-item-primary">Тяга верхнего блока за спину! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 20-25кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 25-30кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">3 подход - 10 повторений, 30-35кг вес отягощения!</li>
                                            </div>

                                            <div class="tab-pane fade" id="list-baseBackGorizTyaga3day" role="tabpanel" aria-labelledby="list-baseBackGorizTyaga3day-list">
                                                <li class="list-group-item list-group-item-primary">Тяга горизонтального блока сидя! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 20-25кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 25-30кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">3 подход - 10 повторений, 30-35кг вес отягощения!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseBackGorizTyagaNaklon3day" role="tabpanel" aria-labelledby="list-baseBackGorizTyagaNaklon3day-list">
                                                <li class="list-group-item list-group-item-primary">Тяга гантели в наклоне(на каждую руку)! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений, 10-20кг вес отягощения!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseTricepsSidia3day" role="tabpanel" aria-labelledby="list-baseTricepsSidia3day-list">
                                                <li class="list-group-item list-group-item-primary">Отжимания от скамьи! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений, без веса отягощения!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseTricepsVerh3day" role="tabpanel" aria-labelledby="list-baseTricepsVerh3day-list">
                                                <li class="list-group-item list-group-item-primary">Разгибание рук на верхнем блоке! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений, 10-20кг вес отягощения!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseTricepsRazgib3day" role="tabpanel" aria-labelledby="list-baseTricepsRazgib3day-list">
                                                <li class="list-group-item list-group-item-primary">Разгибание руки в наклоне(на каждую руку)! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений, 7-10кг вес отягощения!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseTrap3day" role="tabpanel" aria-labelledby="list-baseTrap3day-list">

                                                <li class="list-group-item list-group-item-primary">Трапеции, шраги со штангой или гантелями! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений, 10-20кг вес отягощения!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseGiper3day" role="tabpanel" aria-labelledby="list-baseGiper3day-list">
                                                <li class="list-group-item list-group-item-primary">Гиперэкстензия! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений, без веса отягощения!</li>
                                            </div>

                                            <div class="tab-pane fade" id="list-basePress3day" role="tabpanel" aria-labelledby="list-basePress3day-list">
                                                <li class="list-group-item list-group-item-primary">Пресс, скручивание! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений, без веса отягощения!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-basePressKosie3day" role="tabpanel" aria-labelledby="list-basePressKosie3day-list">
                                                <li class="list-group-item list-group-item-primary">Пресс, косые мышцы живота! Наклоны в стороны с гантелей в руке,
                                                    после завершения упражнения взять гантелю в другую руку и повторить(вес гантели на выбор)! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений, без веса отягощения!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseAfter3day" role="tabpanel" aria-labelledby="list-baseAfter3day-list">
                                                <?=$after_training ?>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                    <!--                                 Описание 4 дня тренировки!-->
                    <div class="card">
                        <div class="card-header" id="headingBase4Day">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase4Day" aria-expanded="false" aria-controls="collapseBase4Day">
                                    День 4, Отдых!
                                </button>
                            </h5>
                        </div>
                        <div id="collapseBase4Day" class="collapse" aria-labelledby="headingBase4Day" data-parent="#accordionExample2">
                            <div class="card-body">
                                <?=$break_days?>
                            </div>
                        </div>
                    </div>

                    <?php } ?>

                    <!--                                 Описание 5 дня тренировки!-->
                    <?php if($training >= 3) { ?>

                    <div class="card">
                        <div class="card-header" id="headingBase5Day">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase5Day" aria-expanded="false" aria-controls="collapseBase5Day">
                                    День 5, Грудь и  Бицепс!
                                </button>
                            </h5>
                        </div>
                        <div id="collapseBase5Day" class="collapse" aria-labelledby="headingBase5Day" data-parent="#accordionExample2">
                            <div class="card-body">


                                <div class="row">
                                    <div class="col-3">
                                        <div class="list-group" id="list-tab" role="tablist">
                                            <a class="list-group-item list-group-item-action" id="list-baseNutrition5day-list" data-toggle="list" href="#list-baseNutrition5day" role="tab" aria-controls="baseNutrition5day"><?=$eating ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseRazminka5day-list" data-toggle="list" href="#list-baseRazminka5day" role="tab" aria-controls="baseRazminka5day"><?=$razminka_name?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseChestNaklon5day-list" data-toggle="list" href="#list-baseChestNaklon5day" role="tab" aria-controls="baseChestNaklon5day"><?=$grud_noklon ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseChestShim5day-list" data-toggle="list" href="#list-baseChestShim5day" role="tab" aria-controls="baseChestShim5day"><?=$grud_shim ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseChestRazvod5day-list" data-toggle="list" href="#list-baseChestRazvod5day" role="tab" aria-controls="baseChestRazvod5day"><?=$grud_razvod ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseBicepsBlock5day-list" data-toggle="list" href="#list-baseBicepsBlock5day" role="tab" aria-controls="baseBicepsBlock5day"><?=$biceps_niz_block?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseBicepsMolotki5day-list" data-toggle="list" href="#list-baseBicepsMolotki5day" role="tab" aria-controls="baseBack5day"><?=$biceps_arm_molotki ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePress5day-list" data-toggle="list" href="#list-basePress5day" role="tab" aria-controls="basePress5day"><?=$press_skr?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePressKosie5day-list" data-toggle="list" href="#list-basePressKosie5day" role="tab" aria-controls="basePressKosie5day"><?=$press_kos?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseAfter5day-list" data-toggle="list" href="#list-baseAfter5day" role="tab" aria-controls="baseAfter5day"><?=$final?></a>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="list-baseNutrition5day" role="tabpanel" aria-labelledby="list-baseNutrition5day-list">
                                                <?=$eggs?>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseRazminka5day" role="tabpanel" aria-labelledby="list-baseRazminka5day-list">
                                                <?=$razminka?>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseChestNaklon5day" role="tabpanel" aria-labelledby="list-baseChestNaklon5day-list">
                                                <li class="list-group-item list-group-item-primary">Жим на наклонной! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 20-25кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 25-30кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">3 подход - 10 повторений, 30-35кг вес отягощения!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseChestShim5day" role="tabpanel" aria-labelledby="list-baseChestShim5day-list">
                                                <li class="list-group-item list-group-item-primary">Жим лёжа! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 20-25кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 25-30кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">3 подход - 10 повторений, 30-35кг вес отягощения!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseChestRazvod5day" role="tabpanel" aria-labelledby="list-baseChestRazvod5day-list">

                                                <li class="list-group-item list-group-item-primary">Разводка рук в стороны на наклонной! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений, гантели по 5-10кг! !</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseBicepsBlock5day" role="tabpanel" aria-labelledby="list-baseBicepsBlock5day-list">

                                                <li class="list-group-item list-group-item-primary">Бицепс, Тяга нижнего блока внутренним хватом! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 20-25кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 25-30кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">3 подход - 10 повторений, 30-35кг вес отягощения!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseBicepsMolotki5day" role="tabpanel" aria-labelledby="list-baseBicepsMolotki5day-list">

                                                <li class="list-group-item list-group-item-primary">Бицепс, Молотки! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений, гантели по 5-10кг!</li>
                                            </div>


                                            <div class="tab-pane fade" id="list-basePress5day" role="tabpanel" aria-labelledby="list-basePress5day-list">
                                                <li class="list-group-item list-group-item-primary">Пресс, скручивание! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений, без веса отягощения!</li>
                                            </div>

                                            <div class="tab-pane fade" id="list-basePressKosie5day" role="tabpanel" aria-labelledby="list-basePressKosie5day-list">
                                                <li class="list-group-item list-group-item-primary">Пресс, косые мышцы живота! Наклоны в стороны с гантелей в руке,
                                                    после завершения упражнения взять гантелю в другую руку и повторить(вес гантели на выбор)! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений, без веса отягощения!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseAfter5day" role="tabpanel" aria-labelledby="list-baseAfter5day-list">
                                                <?=$after_training ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>







                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingBase6Day">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase6Day" aria-expanded="false" aria-controls="collapseBase6Day">
                                    День 6, Отдых!
                                </button>
                            </h5>
                        </div>
                        <div id="collapseBase6Day" class="collapse" aria-labelledby="headingBase6Day" data-parent="#accordionExample2">
                            <div class="card-body">
                                <?=$break_days?>
                            </div>
                        </div>
                    </div>

                    <?php } ?>

<!--                    7 day of training-->

                    <?php if($training >= 1) { ?>

                    <div class="card">
                        <div class="card-header" id="headingBase7Day">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase7Day" aria-expanded="false" aria-controls="collapseBase7Day">
                                    День 7, Плечи!
                                </button>
                            </h5>
                        </div>
                        <div id="collapseBase7Day" class="collapse" aria-labelledby="headingBase7Day" data-parent="#accordionExample2">
                            <div class="card-body">


                                <div class="row">
                                    <div class="col-3">
                                        <div class="list-group" id="list-tab" role="tablist">
                                            <a class="list-group-item list-group-item-action" id="list-baseNutrition7day-list" data-toggle="list" href="#list-baseNutrition7day" role="tab" aria-controls="baseNutrition7day"><?=$eating ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseRazminka7day-list" data-toggle="list" href="#list-baseRazminka7day" role="tab" aria-controls="baseRazminka7day"><?=$razminka_name?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePlechiShim7day-list" data-toggle="list" href="#list-basePlechiShim7day" role="tab" aria-controls="basePlechiShim7day"><?=$plechi_shim ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePlechiShimGanteli7day-list" data-toggle="list" href="#list-basePlechiShimGanteli7day" role="tab" aria-controls="basePlechiShimGanteli7day"><?=$plechi_ganteli ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePlechiVStoroniGanteli7day-list" data-toggle="list" href="#list-basePlechiVStoroniGanteli7day" role="tab" aria-controls="basePlechiVStoroniGanteli7day"><?=$plechi_ganteli ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePlechiPeredGanteli7day-list" data-toggle="list" href="#list-basePlechiPeredGanteli7day" role="tab" aria-controls="basePlechiPeredGanteli7day"><?=$plechi_ganteli ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePlechiVStoroniVNokloneGanteli7day-list" data-toggle="list" href="#list-basePlechiVStoroniVNokloneGanteli7day" role="tab" aria-controls="basePlechiVStoroniVNokloneGanteli7day"><?=$plechi_ganteli ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePress7day-list" data-toggle="list" href="#list-basePress7day" role="tab" aria-controls="basePress7day"><?=$press_skr?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePressKosie7day-list" data-toggle="list" href="#list-basePressKosie7day" role="tab" aria-controls="basePressKosie7day"><?=$press_kos?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseAfter7day-list" data-toggle="list" href="#list-baseAfter7day" role="tab" aria-controls="baseAfter7day"><?=$final?></a>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="list-baseNutrition7day" role="tabpanel" aria-labelledby="list-baseNutrition7day-list">
                                                <?=$eggs?>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseRazminka7day" role="tabpanel" aria-labelledby="list-baseRazminka7day-list">
                                                <?=$razminka?>
                                            </div>
                                            <div class="tab-pane fade" id="list-basePlechiShim7day" role="tabpanel" aria-labelledby="list-basePlechiShim7day-list">
                                                <li class="list-group-item list-group-item-primary">Жим штанги от груди сидя <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, со штангой (20кг - вес штагни)!</li>
                                                <li class="list-group-item list-group-item-success">2,3,4 подход - 10 повторений, 20-30кг вес отягощения!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-basePlechiShimGanteli7day" role="tabpanel" aria-labelledby="list-basePlechiShimGanteli7day-list">
                                                <li class="list-group-item list-group-item-primary">Жим гантелями сидя! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений, 5-10кг вес отягощения!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-basePlechiVStoroniGanteli7day" role="tabpanel" aria-labelledby="list-basePlechiVStoroniGanteli7day-list">

                                                <li class="list-group-item list-group-item-primary">Подъём гантелей в стороны стоя! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений, гантели по 5-10кг!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-basePlechiPeredGanteli7day" role="tabpanel" aria-labelledby="list-basePlechiPeredGanteli7day-list">

                                                <li class="list-group-item list-group-item-primary">Подъём гантелей перед собой стоя! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений, гантели по 5-10кг!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-basePlechiVStoroniVNokloneGanteli7day" role="tabpanel" aria-labelledby="list-basePlechiVStoroniVNokloneGanteli7day-list">


                                                <li class="list-group-item list-group-item-primary">Подъём гантелей в стороны в наклоне сидя! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений, гантели по 5-10кг!</li>
                                            </div>


                                            <div class="tab-pane fade" id="list-basePress7day" role="tabpanel" aria-labelledby="list-basePress7day-list">
                                                <li class="list-group-item list-group-item-primary">Пресс, скручивание! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений, без веса отягощения!</li>
                                            </div>

                                            <div class="tab-pane fade" id="list-basePressKosie7day" role="tabpanel" aria-labelledby="list-basePressKosie7day-list">
                                                <li class="list-group-item list-group-item-primary">Пресс, косые мышцы живота! Наклоны в стороны с гантелей в руке,
                                                    после завершения упражнения взять гантелю в другую руку и повторить(вес гантели на выбор)! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseAfter7day" role="tabpanel" aria-labelledby="list-baseAfter7day-list">
                                                <?=$after_training ?>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            <?php } ?>
<!--                    END OF DAY 7-->
                </div>
            </div>
        </div>
    </div>

<!--Конец 1 недели-->

    <div class="card">
        <div class="card-header" id="headingTraining2Week">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTraining2Week" aria-expanded="false" aria-controls="collapseTraining2Week">
                    Неделя тренировок #2
                </button>
            </h5>
        </div>
        <div id="collapseTraining2Week" class="collapse" aria-labelledby="headingTraining2Week" data-parent="#accordionExample">
            <div class="card-body">
                Начинается неделя, для определения ваших силовых показателей и показателей выносливости!
                <div class="accordion" id="accordionExample3">

                    <?php if($training >= 5) { ?>
                    <div class="card">
                        <div class="card-header" id="headingBase8Day">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase8Day" aria-expanded="false" aria-controls="collapseBase8Day">
                                    День 8, Отдых!
                                </button>
                            </h5>
                        </div>
                        <div id="collapseBase8Day" class="collapse" aria-labelledby="headingBase8Day" data-parent="#accordionExample3">
                            <div class="card-body">
                                <?=$break_days?>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingBase9Day">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseBase9Day" aria-expanded="true" aria-controls="collapseBase9Day">
                                    День 9, Ноги и Плечи! Базовая тренировка!
                                </button>
                            </h5>
                        </div>

                        <div id="collapseBase9Day" class="collapse" aria-labelledby="headingBase9Day" data-parent="#accordionExample3">
                            <div class="card-body">
                                <!--                                 Описание 9 дня тренировки!-->
                                <div class="row">
                                    <div class="col-3">
                                        <div class="list-group" id="list-tab" role="tablist">
                                            <a class="list-group-item list-group-item-action" id="list-baseNutrition9day-list" data-toggle="list" href="#list-baseNutrition9day" role="tab" aria-controls="baseNutrition9day"><?=$eating ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseRazminka9day-list" data-toggle="list" href="#list-baseRazminka9day" role="tab" aria-controls="baseRazminka9day"><?=$razminka_name?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePrised9day-list" data-toggle="list" href="#list-basePrised9day" role="tab" aria-controls="basePrised9day"><?=$priced?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseKvadro9day-list" data-toggle="list" href="#list-baseKvadro9day" role="tab" aria-controls="baseKvadro9day"><?=$kvadriceps_leg ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseBiceps9day-list" data-toggle="list" href="#list-baseBiceps9day" role="tab" aria-controls="baseBiceps9day"><?=$biceps_leg?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePrivod9day-list" data-toggle="list" href="#list-basePrivod9day" role="tab" aria-controls="basePrivod9day"><?=$privod_leg?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseVneshStorBedra9day-list" data-toggle="list" href="#list-baseVneshStorBedra9day" role="tab" aria-controls="baseVneshStorBedra9day"><?=$vnesh_leg?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseGolen9day-list" data-toggle="list" href="#list-baseGolen9day" role="tab" aria-controls="baseGolen9day"><?=$golen?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePlechiShimChest9day-list" data-toggle="list" href="#list-basePlechiShimChest9day" role="tab" aria-controls="basePlechiShimChest9day"><?=$plechi_shim ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePlechiShimBack9day-list" data-toggle="list" href="#list-basePlechiShimBack9day" role="tab" aria-controls="basePlechiShimBack9day"><?=$plechi_shim ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePlechiShimGanteli9day-list" data-toggle="list" href="#list-basePlechiShimGanteli9day" role="tab" aria-controls="basePlechiShimGanteli9day"><?=$plechi_ganteli ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePlechiVStoroni9day-list" data-toggle="list" href="#list-basePlechiVStoroni9day" role="tab" aria-controls="basePlechiVStoroni9day"><?=$plechi_ganteli ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePlechiPered9day-list" data-toggle="list" href="#list-basePlechiPered9day" role="tab" aria-controls="basePlechiPered9day"><?=$plechi_ganteli ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePlechiVNaklone9day-list" data-toggle="list" href="#list-basePlechiVNaklone9day" role="tab" aria-controls="basePlechiVNaklone9day"><?=$plechi_ganteli ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePress9day-list" data-toggle="list" href="#list-basePress9day" role="tab" aria-controls="basePress9day"><?=$press_skr?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePressKosie9day-list" data-toggle="list" href="#list-basePressKosie9day" role="tab" aria-controls="basePressKosie9day"><?=$press_kos?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseAfter9day-list" data-toggle="list" href="#list-baseAfter9day" role="tab" aria-controls="baseAfter9day"><?=$final?></a>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade" id="list-baseNutrition9day" role="tabpanel" aria-labelledby="list-baseNutrition9day-list">
                                                <?=$eggs?>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseRazminka9day" role="tabpanel" aria-labelledby="list-baseRazminka9day-list">
                                                <?=$razminka?>
                                            </div>
                                            <div class="tab-pane fade" id="list-basePrised9day" role="tabpanel" aria-labelledby="list-basePrised9day-list">
                                                <li class="list-group-item list-group-item-primary">Присед! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, без отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2 подход - 10 повторений со штангой( вес штанги 20кг )</li>
                                                <li class="list-group-item list-group-item-success">3 подход - 10 повторений, со штангой и отягощением 10кг( всего 30кг )</li>
                                                <li class="list-group-item list-group-item-success">4 подход - 8 повторений, со штангой и отягощением 20кг( всего 40кг )</li>
                                                <li class="list-group-item list-group-item-success">5 подход - 4-5 повторений, со штангой и отягощением 20кг( всего 45кг )</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseKvadro9day" role="tabpanel" aria-labelledby="list-baseKvadro9day-list">
                                                <li class="list-group-item list-group-item-primary">Разгибание ног в тренажере сидя, Квадрицепс бедра! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 15кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 20кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">3 подход - 8 повторений, 25кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">4 подход - 4-5 повторений, 30кг вес отягощения!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseBiceps9day" role="tabpanel" aria-labelledby="list-baseBiceps9day-list">
                                                <li class="list-group-item list-group-item-primary">Сгибание ног в тренажере лёжа, Бицепс бедра! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 15кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 20кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">3 подход - 10 повторений, 30кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">4 подход - 5-8 повторений, 35кг вес отягощения!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-basePrivod9day" role="tabpanel" aria-labelledby="list-basePrivod9day-list">
                                                <li class="list-group-item list-group-item-primary">Сведение ног сидя, приводящие мышцы бедра! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 10кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 15кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">3 подход - 10 повторений, 20кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">4 подход - 5-8 повторений, 25кг вес отягощения!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseVneshStorBedra9day" role="tabpanel" aria-labelledby="list-baseVneshStorBedra9day-list">
                                                <li class="list-group-item list-group-item-primary">Разведение ног сидя, внешняя сторона бедра! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 10кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 15кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">3 подход - 10 повторений, 20кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">4 подход - 5-8 повторений, 25кг вес отягощения!</li>
                                            </div>

                                            <div class="tab-pane fade" id="list-baseGolen9day" role="tabpanel" aria-labelledby="list-baseGolen9day-list">
                                                <li class="list-group-item list-group-item-primary">Голень, подъем на носки в тренажере стоя! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 10-15кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 15-20кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">3 подход - 10 повторений, 25-30кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">4 подход - 10 повторений, 30-35кг вес отягощения!</li>
                                            </div>

                                            <div class="tab-pane fade" id="list-basePlechiShimChest9day" role="tabpanel" aria-labelledby="list-basebasePlechiShimChest9day-list">
                                                <li class="list-group-item list-group-item-primary">Жим штанги от груди сидя! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, со штангой (20кг - вес штагни)!</li>
                                                <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 20-30кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">3 подход - 10 повторений, 30-35кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">4 подход - 5-8 повторений, 35-40кг вес отягощения!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-basePlechiShimBack9day" role="tabpanel" aria-labelledby="list-basePlechiShimBack9day-list">
                                                <li class="list-group-item list-group-item-primary">Жим штанги за спину сидя! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 20-30кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 30-35кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">3 подход - 5-8 повторений, 35-40кг вес отягощения!</li>

                                            </div>
                                            <div class="tab-pane fade" id="list-basePlechiShimGanteli9day" role="tabpanel" aria-labelledby="list-basePlechiShimGanteli9day-list">
                                                <li class="list-group-item list-group-item-primary">Жим гантелями сидя! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 5-10кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 10-12кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">3 подход - 5-8 повторений, 13-15кг вес отягощения!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-basePlechiVStoroni9day" role="tabpanel" aria-labelledby="list-basePlechiVStoroni9day-list">
                                                <li class="list-group-item list-group-item-primary">Подъём гантелей в стороны стоя! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 5-7кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 8-10кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">3 подход - 5-8 повторений, 10-12кг вес отягощения!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-basePlechiPered9day" role="tabpanel" aria-labelledby="list-basePlechiPered9day-list">
                                                <li class="list-group-item list-group-item-primary">Подъём гантелей перед собой стоя!!!! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 5-7кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 8-10кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">3 подход - 5-8 повторений, 10-12кг вес отягощения!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-basePlechiVNaklone9day" role="tabpanel" aria-labelledby="list-basePlechiVNaklone9day-list">
                                                <li class="list-group-item list-group-item-primary">Подъём гантелей в стороны в наклоне сидя! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 5-7кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 8-10кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">3 подход - 5-8 повторений, 10-12кг вес отягощения!</li>
                                            </div>

                                            <div class="tab-pane fade" id="list-basePress9day" role="tabpanel" aria-labelledby="list-basePress9day-list">
                                                <li class="list-group-item list-group-item-primary">Пресс, скручивание! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений, без веса отягощения!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-basePressKosie9day" role="tabpanel" aria-labelledby="list-basePressKosie9day-list">
                                                <li class="list-group-item list-group-item-primary">Пресс, косые мышцы живота! Наклоны в стороны с гантелей в руке,
                                                    после завершения упражнения взять гантелю в другую руку и повторить(вес гантели на выбор)! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseAfter9day" role="tabpanel" aria-labelledby="list-baseAfter9day-list">
                                                <?=$after_training ?>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header" id="headingBase10Day">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase10Day" aria-expanded="false" aria-controls="collapseBase10Day">
                                    День 10, Отдых!
                                </button>
                            </h5>
                        </div>
                        <div id="collapseBase10Day" class="collapse" aria-labelledby="headingBase10Day" data-parent="#accordionExample3">
                            <div class="card-body">
                                <?=$break_days?>
                            </div>
                        </div>
                    </div>


                    <?php } ?>

                    <?php if($training >= 6) { ?>

                    <div class="card">
                        <div class="card-header" id="headingBase11Day">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase11Day" aria-expanded="false" aria-controls="collapseBase11Day">
                                    День 11, Спина и Трицепс!
                                </button>
                            </h5>
                        </div>
                        <div id="collapseBase11Day" class="collapse" aria-labelledby="headingBase11Day" data-parent="#accordionExample3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="list-group" id="list-tab" role="tablist">
                                            <a class="list-group-item list-group-item-action" id="list-baseNutrition11day-list" data-toggle="list" href="#list-baseNutrition11day" role="tab" aria-controls="baseNutrition11day"><?=$eating ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseRazminka11day-list" data-toggle="list" href="#list-baseRazminka11day" role="tab" aria-controls="baseRazminka11day"><?=$razminka_name?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseBackGrud11day-list" data-toggle="list" href="#list-baseBackGrud11day" role="tab" aria-controls="baseBackGrud11day"><?=$back_up_block ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseBackZaSpiny11day-list" data-toggle="list" href="#list-baseBackZaSpiny11day" role="tab" aria-controls="baseBackZaSpiny11day"><?=$back_up_block ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseBackGorizTyaga11day-list" data-toggle="list" href="#list-baseBackGorizTyaga11day" role="tab" aria-controls="baseBackGorizTyaga11day"><?=$goriz_block ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseBackGorizTyagaNaklon11day-list" data-toggle="list" href="#list-baseBackGorizTyagaNaklon11day" role="tab" aria-controls="baseBackGorizTyagaNaklon11day"><?=$back_tiaga_naklon ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseTricepsSidia11day-list" data-toggle="list" href="#list-baseTricepsSidia11day" role="tab" aria-controls="baseTricepsSidia11day"><?=$triceps_arm_otshim ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseTricepsVerh11day-list" data-toggle="list" href="#list-baseTricepsVerh11day" role="tab" aria-controls="baseTricepsVerh11day"><?=$triceps_arm_verh_block ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseTricepsRazgib11day-list" data-toggle="list" href="#list-baseTricepsRazgib11day" role="tab" aria-controls="baseTricepsRazgib11day"><?=$triceps_arm_razgib ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseTrap11day-list" data-toggle="list" href="#list-baseTrap11day" role="tab" aria-controls="baseTrap11day"><?=$trapecii ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseGiper11day-list" data-toggle="list" href="#list-baseGiper11day" role="tab" aria-controls="baseGiper11day"><?=$giperekstenzia ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePress11day-list" data-toggle="list" href="#list-basePress11day" role="tab" aria-controls="basePress11day"><?=$press_skr?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePressKosie11day-list" data-toggle="list" href="#list-basePressKosie11day" role="tab" aria-controls="basePressKosie11day"><?=$press_kos?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseAfter11day-list" data-toggle="list" href="#list-baseAfter11day" role="tab" aria-controls="baseAfter11day"><?=$final?></a>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="list-baseNutrition11day" role="tabpanel" aria-labelledby="list-baseNutrition11day-list">
                                                <?=$eggs?>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseRazminka11day" role="tabpanel" aria-labelledby="list-baseRazminka11day-list">
                                                <?=$razminka?>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseBackGrud11day" role="tabpanel" aria-labelledby="list-baseBackGrud11day-list">
                                                <li class="list-group-item list-group-item-primary">Тяга верхнего блока к груди! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 20-25кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 25-30кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">3 подход - 10 повторений, 30-35кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">4 подход - 5-8 повторений, 35-40кг вес отягощения!</li>
                                            </div>

                                            <div class="tab-pane fade" id="list-baseBackZaSpiny11day" role="tabpanel" aria-labelledby="list-baseBackZaSpiny11day-list">
                                                <li class="list-group-item list-group-item-primary">Тяга верхнего блока за спину! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 20-25кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 25-30кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">3 подход - 10 повторений, 30-35кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">4 подход - 5-8 повторений, 35-40кг вес отягощения!</li>
                                            </div>

                                            <div class="tab-pane fade" id="list-baseBackGorizTyaga11day" role="tabpanel" aria-labelledby="list-baseBackGorizTyaga11day-list">
                                                <li class="list-group-item list-group-item-primary">Тяга горизонтального блока сидя! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 20-25кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 25-30кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">3 подход - 10 повторений, 30-35кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">3 подход - 5-8 повторений, 35-40кг вес отягощения!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseBackGorizTyagaNaklon11day" role="tabpanel" aria-labelledby="list-baseBackGorizTyagaNaklon11day-list">
                                                <li class="list-group-item list-group-item-primary">Тяга гантели в наклоне(на каждую руку)! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 10-15кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 15-20кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">3 подход - 5-8 повторений, 20-22кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">4 подход - 1-2 повторений, 22-25кг вес отягощения!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseTricepsSidia11day" role="tabpanel" aria-labelledby="list-baseTricepsSidia11day-list">
                                                <li class="list-group-item list-group-item-primary">Отжимания от скамьи! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, без веса отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 5-10кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">3 подход - 10 повторений, 10-12кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">4 подход - 5-8 повторений, 12-15кг вес отягощения!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseTricepsVerh11day" role="tabpanel" aria-labelledby="list-baseTricepsVerh11day-list">
                                                <li class="list-group-item list-group-item-primary">Разгибание рук на верхнем блоке! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 10-15кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 15-20кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">3 подход - 10 повторений, 20-25кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">4 подход - 5-8 повторений, 30-35кг вес отягощения!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseTricepsRazgib11day" role="tabpanel" aria-labelledby="list-baseTricepsRazgib11day-list">
                                                <li class="list-group-item list-group-item-primary">Разгибание руки в наклоне(на каждую руку)! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 7-10кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 10-12кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">3 подход - 5-8 повторений, 12-15кг вес отягощения!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseTrap11day" role="tabpanel" aria-labelledby="list-baseTrap11day-list">
                                                <li class="list-group-item list-group-item-primary">Трапеции, шраги со штангой или гантелями! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 10-15кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 15-20кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">3 подход - 5-8 повторений, 20-25кг вес отягощения!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseGiper11day" role="tabpanel" aria-labelledby="list-baseGiper11day-list">
                                                <li class="list-group-item list-group-item-primary">Гиперэкстензия! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений, без веса отягощения!</li>
                                            </div>

                                            <div class="tab-pane fade" id="list-basePress11day" role="tabpanel" aria-labelledby="list-basePress11day-list">
                                                <li class="list-group-item list-group-item-primary">Пресс, скручивание! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений, без веса отягощения!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-basePressKosie11day" role="tabpanel" aria-labelledby="list-basePressKosie11day-list">
                                                <li class="list-group-item list-group-item-primary">Пресс, косые мышцы живота! Наклоны в стороны с гантелей в руке,
                                                    после завершения упражнения взять гантелю в другую руку и повторить(вес гантели на выбор)! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseAfter11day" role="tabpanel" aria-labelledby="list-baseAfter11day-list">
                                                <?=$after_training ?>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--                                 Описание 12 дня тренировки!-->
                    <div class="card">
                        <div class="card-header" id="headingBase12Day">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase12Day" aria-expanded="false" aria-controls="collapseBase12Day">
                                    День 12, Отдых!
                                </button>
                            </h5>
                        </div>
                        <div id="collapseBase12Day" class="collapse" aria-labelledby="headingBase12Day" data-parent="#accordionExample3">
                            <div class="card-body">
                                <?=$break_days?>
                            </div>
                        </div>
                    </div>

                    <?php } ?>
                    <!--                                 Описание 13 дня тренировки!-->
                    <?php if($training >= 7) { ?>

                    <div class="card">
                        <div class="card-header" id="headingBase13Day">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase13Day" aria-expanded="false" aria-controls="collapseBase13Day">
                                    День 13, Грудь и Бицепс!
                                </button>
                            </h5>
                        </div>
                        <div id="collapseBase13Day" class="collapse" aria-labelledby="headingBase13Day" data-parent="#accordionExample3">
                            <div class="card-body">


                                <div class="row">
                                    <div class="col-3">
                                        <div class="list-group" id="list-tab" role="tablist">
                                            <a class="list-group-item list-group-item-action" id="list-baseNutrition13day-list" data-toggle="list" href="#list-baseNutrition13day" role="tab" aria-controls="baseNutrition13day"><?=$eating ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseRazminka13day-list" data-toggle="list" href="#list-baseRazminka13day" role="tab" aria-controls="baseRazminka13day"><?=$razminka_name?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseChestNaklon13day-list" data-toggle="list" href="#list-baseChestNaklon13day" role="tab" aria-controls="baseChestNaklon13day"><?=$grud_noklon ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseChestShim13day-list" data-toggle="list" href="#list-baseChestShim13day" role="tab" aria-controls="baseChestShim13day"><?=$grud_shim ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseChestRazvod13day-list" data-toggle="list" href="#list-baseChestRazvod13day" role="tab" aria-controls="baseChestRazvod13day"><?=$grud_razvod ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePullOver13day-list" data-toggle="list" href="#list-basePullOver13day" role="tab" aria-controls="basePullOver13day"><?=$pulover ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseBicepsBlock13day-list" data-toggle="list" href="#list-baseBicepsBlock13day" role="tab" aria-controls="baseBicepsBlock13day"><?=$biceps_niz_block ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseBicepsMolotki13day-list" data-toggle="list" href="#list-baseBicepsMolotki13day" role="tab" aria-controls="baseBack13day"><?=$biceps_arm_molotki ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePress13day-list" data-toggle="list" href="#list-basePress13day" role="tab" aria-controls="basePress13day"><?=$press_skr?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePressKosie13day-list" data-toggle="list" href="#list-basePressKosie13day" role="tab" aria-controls="basePressKosie13day"><?=$press_kos?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseAfter13day-list" data-toggle="list" href="#list-baseAfter13day" role="tab" aria-controls="baseAfter13day"><?=$final?></a>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="list-baseNutrition13day" role="tabpanel" aria-labelledby="list-baseNutrition13day-list">
                                                <?=$eggs?>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseRazminka13day" role="tabpanel" aria-labelledby="list-baseRazminka13day-list">
                                                <?=$razminka?>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseChestNaklon13day" role="tabpanel" aria-labelledby="list-baseChestNaklon13day-list">
                                                <li class="list-group-item list-group-item-primary">Жим на наклонной! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 20-25кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 25-30кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">3 подход - 10 повторений, 30-35кг вес отягощения!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseChestShim13day" role="tabpanel" aria-labelledby="list-baseChestShim13day-list">
                                                <li class="list-group-item list-group-item-primary">Жим лёжа! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 20-25кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 25-30кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">3 подход - 10 повторений, 30-35кг вес отягощения!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseChestRazvod13day" role="tabpanel" aria-labelledby="list-baseChestRazvod13day-list">
                                                <li class="list-group-item list-group-item-primary">Разводка рук в стороны на наклонной! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений, гантели по 5-10кг!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-basePullOver13day" role="tabpanel" aria-labelledby="list-basePullOver13day-list">
                                                <li class="list-group-item list-group-item-primary">Пуловер! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, гантели по 5-10кг!</li>
                                                <li class="list-group-item list-group-item-success">2 подход - 10 повторений, гантели по 10-15кг!</li>
                                                <li class="list-group-item list-group-item-success">3 подход - 10 повторений, гантели по 15-20кг!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseBicepsBlock13day" role="tabpanel" aria-labelledby="list-baseBicepsBlock13day-list">
                                                <li class="list-group-item list-group-item-primary">Бицепс, Тяга нижнего блока внутренним хватом! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 20-25кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 25-30кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">3 подход - 10 повторений, 30-35кг вес отягощения!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseBicepsMolotki13day" role="tabpanel" aria-labelledby="list-baseBicepsMolotki13day-list">

                                                <li class="list-group-item list-group-item-primary">Бицепс, Молотки! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений, гантели по 5-10кг!</li>
                                            </div>
                                            
                                            <div class="tab-pane fade" id="list-basePress13day" role="tabpanel" aria-labelledby="list-basePress13day-list">
                                                <li class="list-group-item list-group-item-primary">Пресс, скручивание! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений, без веса отягощения!</li>
                                            </div>

                                            <div class="tab-pane fade" id="list-basePressKosie13day" role="tabpanel" aria-labelledby="list-basePressKosie13day-list">
                                                <li class="list-group-item list-group-item-primary">Пресс, косые мышцы живота! Наклоны в стороны с гантелей в руке,
                                                    после завершения упражнения взять гантелю в другую руку и повторить(вес гантели на выбор)! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseAfter13day" role="tabpanel" aria-labelledby="list-baseAfter13day-list">
                                                <?=$after_training ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>





                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingBase14Day">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase14Day" aria-expanded="false" aria-controls="collapseBase14Day">
                                    День 14-15, Отдых!
                                </button>
                            </h5>
                        </div>
                        <div id="collapseBase14Day" class="collapse" aria-labelledby="headingBase14Day" data-parent="#accordionExample3">
                            <div class="card-body">
                                <?=$break_days?>
                            </div>
                        </div>
                    </div>
                    Вы определили ваши показатели, после базовой недели тренировок! Теперь дальнейшие программы будут рассчитываться исходя из данной недели!
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
<!--Конец 2 недели-->

    <div class="card">
        <div class="card-header" id="headingTraining3Week">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTraining3Week" aria-expanded="false" aria-controls="collapseTraining3Week">
                    Неделя тренировок #3
                </button>
            </h5>
        </div>
        <div id="collapseTraining3Week" class="collapse" aria-labelledby="headingTraining3Week" data-parent="#accordionExample">
            <div class="card-body">

                Начинается неделя, для укрепления показателей выносливости!
                <div class="accordion" id="accordionExample4">

                    <?php if($training >= 8) { ?>

                    <div class="card">
                        <div class="card-header" id="headingBase16Day">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase16Day" aria-expanded="false" aria-controls="collapseBase16Day">
                                    День 16, Отдых!
                                </button>
                            </h5>
                        </div>
                        <div id="collapseBase16Day" class="collapse" aria-labelledby="headingBase16Day" data-parent="#accordionExample4">
                            <div class="card-body">
                                <?=$break_days?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header" id="headingBase17Day">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseBase17Day" aria-expanded="true" aria-controls="collapseBase17Day">
                                    День 17, Ноги и Плечи! Папинговая тренировка!
                                </button>
                            </h5>
                        </div>

                        <div id="collapseBase17Day" class="collapse" aria-labelledby="headingBase17Day" data-parent="#accordionExample4">
                            <div class="card-body">
                                <!--                                 Описание 17 дня тренировки!-->
                                <div class="row">
                                    <div class="col-3">
                                        <div class="list-group" id="list-tab" role="tablist">
                                            <a class="list-group-item list-group-item-action" id="list-baseNutrition17day-list" data-toggle="list" href="#list-baseNutrition17day" role="tab" aria-controls="baseNutrition17day"><?=$eating ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseRazminka17day-list" data-toggle="list" href="#list-baseRazminka17day" role="tab" aria-controls="baseRazminka17day"><?=$razminka_name?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePrised17day-list" data-toggle="list" href="#list-basePrised17day" role="tab" aria-controls="basePrised17day"><?=$priced?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseKvadro17day-list" data-toggle="list" href="#list-baseKvadro17day" role="tab" aria-controls="baseKvadro17day"><?=$kvadriceps_leg ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseBiceps17day-list" data-toggle="list" href="#list-baseBiceps17day" role="tab" aria-controls="baseVipadi17day"><?=$biceps_leg?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePrivod17day-list" data-toggle="list" href="#list-basePrivod17day" role="tab" aria-controls="basePrivod17day"><?=$privod_leg?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseVneshStorBedra17day-list" data-toggle="list" href="#list-baseVneshStorBedra17day" role="tab" aria-controls="baseVneshStorBedra17day"><?=$vnesh_leg?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseGolen17day-list" data-toggle="list" href="#list-baseGolen17day" role="tab" aria-controls="baseGolen17day"><?=$golen?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePlechiShimChest17day-list" data-toggle="list" href="#list-basePlechiShimChest17day" role="tab" aria-controls="basePlechiShimChest17day"><?=$plechi_shim ?>/a>
                                            <a class="list-group-item list-group-item-action" id="list-basePlechiShimBack17day-list" data-toggle="list" href="#list-basePlechiShimBack17day" role="tab" aria-controls="basePlechiShimBack17day"><?=$plechi_shim ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePlechiShimGanteli17day-list" data-toggle="list" href="#list-basePlechiShimGanteli17day" role="tab" aria-controls="basePlechiShimGanteli17day"><?=$plechi_ganteli ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePlechiVStoroni17day-list" data-toggle="list" href="#list-basePlechiVStoroni17day" role="tab" aria-controls="basePlechiVStoroni17day"><?=$plechi_ganteli ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePlechiPered17day-list" data-toggle="list" href="#list-basePlechiPered17day" role="tab" aria-controls="basePlechiPered17day">П<?=$plechi_ganteli ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePlechiVNaklone17day-list" data-toggle="list" href="#list-basePlechiVNaklone17day" role="tab" aria-controls="basePlechiVNaklone17day"><?=$plechi_ganteli ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePress17day-list" data-toggle="list" href="#list-basePress17day" role="tab" aria-controls="basePress17day"><?=$press_skr?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePressKosie17day-list" data-toggle="list" href="#list-basePressKosie17day" role="tab" aria-controls="basePressKosie17day"><?=$press_kos?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseAfter17day-list" data-toggle="list" href="#list-baseAfter17day" role="tab" aria-controls="baseAfter17day"><?=$final?></a>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade" id="list-baseNutrition17day" role="tabpanel" aria-labelledby="list-baseNutrition17day-list">
                                                <?=$eggs?>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseRazminka17day" role="tabpanel" aria-labelledby="list-baseRazminka17day-list">
                                                <?=$razminka?>
                                            </div>
                                            <div class="tab-pane fade" id="list-basePrised17day" role="tabpanel" aria-labelledby="list-basePrised17day-list">
                                                <li class="list-group-item list-group-item-primary">Присед! <?=$time_pump?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, без отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2,3,4,5 подход - 15 повторений, <?=$weight50?></li>
                                                <?=$break5min?>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseKvadro17day" role="tabpanel" aria-labelledby="list-baseKvadro17day-list">
                                                <li class="list-group-item list-group-item-primary">Разгибание ног в тренажере сидя, Квадрицепс бедра! <?=$time_pump?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 15 повторений, <?=$weight50?></li>
                                                <?=$break5min?>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseBiceps17day" role="tabpanel" aria-labelledby="list-baseBiceps17day-list">
                                                <li class="list-group-item list-group-item-primary">Сгибание ног в тренажере лёжа, Бицепс бедра! <?=$time_pump?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 15 повторений, <?=$weight50?></li>
                                            </div>
                                            <div class="tab-pane fade" id="list-basePrivod17day" role="tabpanel" aria-labelledby="list-basePrivod17day-list">
                                                <li class="list-group-item list-group-item-primary">Сведение ног сидя, приводящие мышцы бедра! <?=$time_pump?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 15 повторений, <?=$weight50?></li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseVneshStorBedra17day" role="tabpanel" aria-labelledby="list-baseVneshStorBedra17day-list">
                                                <li class="list-group-item list-group-item-primary">Разведение ног сидя, внешняя сторона бедра! <?=$time_pump?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 15 повторений, <?=$weight50?></li>
                                            </div>

                                            <div class="tab-pane fade" id="list-baseGolen17day" role="tabpanel" aria-labelledby="list-baseGolen17day-list">
                                                <li class="list-group-item list-group-item-primary">Голень, подъем на носки в тренажере стоя! <?=$time_pump?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 15 повторений, <?=$weight50?></li>
                                            </div>

                                            <div class="tab-pane fade" id="list-basePlechiShimChest17day" role="tabpanel" aria-labelledby="list-basebasePlechiShimChest17day-list">
                                                <li class="list-group-item list-group-item-primary">Жим штанги от груди сидя! <?=$time_pump?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 15 повторений, со штангой (20кг - вес штагни)!</li>
                                                <li class="list-group-item list-group-item-success">2,3,4,5 подход - 15 повторений, <?=$weight50?></li>
                                            </div>
                                            <div class="tab-pane fade" id="list-basePlechiShimBack17day" role="tabpanel" aria-labelledby="list-basePlechiShimBack17day-list">
                                                <li class="list-group-item list-group-item-primary">Жим штанги за спину сидя! <?=$time_pump?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3 подход - 15 повторений, <?=$weight50?></li>

                                            </div>
                                            <div class="tab-pane fade" id="list-basePlechiShimGanteli17day" role="tabpanel" aria-labelledby="list-basePlechiShimGanteli17day-list">
                                                <li class="list-group-item list-group-item-primary">Жим гантелями сидя! <?=$time_pump?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений, <?=$weight50?></li>
                                            </div>
                                            <div class="tab-pane fade" id="list-basePlechiVStoroni17day" role="tabpanel" aria-labelledby="list-basePlechiVStoroni17day-list">
                                                <li class="list-group-item list-group-item-primary">Подъём гантелей в стороны стоя! <?=$time_pump?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений, <?=$weight50?></li>
                                            </div>
                                            <div class="tab-pane fade" id="list-basePlechiPered17day" role="tabpanel" aria-labelledby="list-basePlechiPered17day-list">
                                                <li class="list-group-item list-group-item-primary">Подъём гантелей перед собой стоя! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений, <?=$weight50?></li>
                                            </div>
                                            <div class="tab-pane fade" id="list-basePlechiVNaklone17day" role="tabpanel" aria-labelledby="list-basePlechiVNaklone17day-list">
                                                <li class="list-group-item list-group-item-primary">Подъём гантелей в стороны в наклоне сидя! <?=$time_pump?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений, <?=$weight50?></li>
                                            </div>

                                            <div class="tab-pane fade" id="list-basePress17day" role="tabpanel" aria-labelledby="list-basePress17day-list">
                                                <li class="list-group-item list-group-item-primary">Пресс, скручивание! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений, без веса отягощения!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-basePressKosie17day" role="tabpanel" aria-labelledby="list-basePressKosie17day-list">
                                                <li class="list-group-item list-group-item-primary">Пресс, косые мышцы живота! Наклоны в стороны с гантелей в руке,
                                                    после завершения упражнения взять гантелю в другую руку и повторить(вес гантели на выбор)! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseAfter17day" role="tabpanel" aria-labelledby="list-baseAfter17day-list">
                                                <?=$after_training ?>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingBase18Day">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase18Day" aria-expanded="false" aria-controls="collapseBase18Day">
                                    День 18, Отдых!
                                </button>
                            </h5>
                        </div>
                        <div id="collapseBase18Day" class="collapse" aria-labelledby="headingBase18Day" data-parent="#accordionExample4">
                            <div class="card-body">
                                <?=$break_days?>
                            </div>
                        </div>
                    </div>

                    <?php } ?>

                    <?php if($training >= 9) { ?>

                    <!--                                 Описание 19 тренировки!-->
                    <div class="card">
                        <div class="card-header" id="headingBase19Day">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase19Day" aria-expanded="false" aria-controls="collapseBase19Day">
                                    День 19, Спина и Трицепс!
                                </button>
                            </h5>
                        </div>
                        <div id="collapseBase19Day" class="collapse" aria-labelledby="headingBase19Day" data-parent="#accordionExample4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="list-group" id="list-tab" role="tablist">
                                            <a class="list-group-item list-group-item-action" id="list-baseNutrition19day-list" data-toggle="list" href="#list-baseNutrition19day" role="tab" aria-controls="baseNutrition19day"><?=$eating ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseRazminka19day-list" data-toggle="list" href="#list-baseRazminka19day" role="tab" aria-controls="baseRazminka19day"><?=$razminka_name?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseBackGrud19day-list" data-toggle="list" href="#list-baseBackGrud19day" role="tab" aria-controls="baseBackGrud19day"><?=$back_up_block ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseBackZaSpiny19day-list" data-toggle="list" href="#list-baseBackZaSpiny19day" role="tab" aria-controls="baseBackZaSpiny19day"><?=$back_up_block ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseBackGorizTyaga19day-list" data-toggle="list" href="#list-baseBackGorizTyaga19day" role="tab" aria-controls="baseBackGorizTyaga19day"><?=$goriz_block ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseBackGorizTyagaNaklon19day-list" data-toggle="list" href="#list-baseBackGorizTyagaNaklon19day" role="tab" aria-controls="baseBackGorizTyagaNaklon19day"><?=$back_tiaga_naklon ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseTricepsSidia19day-list" data-toggle="list" href="#list-baseTricepsSidia19day" role="tab" aria-controls="baseTricepsSidia19day"><?=$triceps_arm_otshim ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseTricepsVerh19day-list" data-toggle="list" href="#list-baseTricepsVerh19day" role="tab" aria-controls="baseTricepsVerh19day"><?=$triceps_arm_verh_block ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseTricepsRazgib19day-list" data-toggle="list" href="#list-baseTricepsRazgib19day" role="tab" aria-controls="baseTricepsRazgib19day"><?=$triceps_arm_razgib ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseTrap19day-list" data-toggle="list" href="#list-baseTrap19day" role="tab" aria-controls="baseTrap19day"><?=$trapecii ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseGiper19day-list" data-toggle="list" href="#list-baseGiper19day" role="tab" aria-controls="baseGiper19day"><?=$giperekstenzia ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePress19day-list" data-toggle="list" href="#list-basePress19day" role="tab" aria-controls="basePress19day"><?=$press_skr?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePressKosie19day-list" data-toggle="list" href="#list-basePressKosie19day" role="tab" aria-controls="basePressKosie19day"><?=$press_kos?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseAfter19day-list" data-toggle="list" href="#list-baseAfter19day" role="tab" aria-controls="baseAfter19day"><?=$final?></a>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="list-baseNutrition19day" role="tabpanel" aria-labelledby="list-baseNutrition19day-list">
                                                <?=$eggs?>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseRazminka19day" role="tabpanel" aria-labelledby="list-baseRazminka19day-list">
                                                <?=$razminka?>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseBackGrud19day" role="tabpanel" aria-labelledby="list-baseBackGrud19day-list">
                                                <li class="list-group-item list-group-item-primary">Тяга верхнего блока к груди! <?=$time_pump?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 15 повторений, 15-20кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2,3,4,5 подход - 15 повторений, <?=$weight50?></li>
                                            </div>

                                            <div class="tab-pane fade" id="list-baseBackZaSpiny19day" role="tabpanel" aria-labelledby="list-baseBackZaSpiny19day-list">
                                                <li class="list-group-item list-group-item-primary">Тяга верхнего блока за спину! <?=$time_pump?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 15 повторений, <?=$weight50?></li>
                                            </div>

                                            <div class="tab-pane fade" id="list-baseBackGorizTyaga19day" role="tabpanel" aria-labelledby="list-baseBackGorizTyaga11day-list">
                                                <li class="list-group-item list-group-item-primary">Тяга горизонтального блока сидя! <?=$time_pump?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 15 повторений, 20-25кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2,3,4,5 подход - 15 повторений, <?=$weight50?></li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseBackGorizTyagaNaklon19day" role="tabpanel" aria-labelledby="list-baseBackGorizTyagaNaklon19day-list">
                                                <li class="list-group-item list-group-item-primary">Тяга гантели в наклоне(на каждую руку)! <?=$time_pump?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 15 повторений, <?=$weight50?></li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseTricepsSidia19day" role="tabpanel" aria-labelledby="list-baseTricepsSidia19day-list">
                                                <li class="list-group-item list-group-item-primary">Отжимания от скамьи! <?=$time_pump?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, без веса отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2,3,4,5 подход - 15 повторений, <?=$weight50?></li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseTricepsVerh19day" role="tabpanel" aria-labelledby="list-baseTricepsVerh19day-list">
                                                <li class="list-group-item list-group-item-primary">Разгибание рук на верхнем блоке! <?=$time_pump?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 15 повторений, <?=$weight50?></li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseTricepsRazgib19day" role="tabpanel" aria-labelledby="list-baseTricepsRazgib19day-list">
                                                <li class="list-group-item list-group-item-primary">Разгибание руки в наклоне(на каждую руку)! <?=$time_pump?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 15 повторений, <?=$weight50?></li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseTrap19day" role="tabpanel" aria-labelledby="list-baseTrap19day-list">
                                                <li class="list-group-item list-group-item-primary">Трапеции, шраги со штангой или гантелями! <?=$time_pump?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 10-15кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2,3,4,5 подход - 15 повторений, <?=$weight50?></li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseGiper19day" role="tabpanel" aria-labelledby="list-baseGiper19day-list">
                                                <li class="list-group-item list-group-item-primary">Гиперэкстензия! <?=$time_pump?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений, без веса отягощения!!</li>
                                            </div>

                                            <div class="tab-pane fade" id="list-basePress19day" role="tabpanel" aria-labelledby="list-basePress19day-list">
                                                <li class="list-group-item list-group-item-primary">Пресс, скручивание! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений, без веса отягощения!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-basePressKosie19day" role="tabpanel" aria-labelledby="list-basePressKosie19day-list">
                                                <li class="list-group-item list-group-item-primary">Пресс, косые мышцы живота! Наклоны в стороны с гантелей в руке,
                                                    после завершения упражнения взять гантелю в другую руку и повторить(вес гантели на выбор)! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseAfter19day" role="tabpanel" aria-labelledby="list-baseAfter19day-list">
                                                <?=$after_training ?>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                    <!--                                 Описание 20 дня тренировки!-->
                    <div class="card">
                        <div class="card-header" id="headingBase20Day">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase20Day" aria-expanded="false" aria-controls="collapseBase20Day">
                                    День 20, Отдых!
                                </button>
                            </h5>
                        </div>
                        <div id="collapseBase20Day" class="collapse" aria-labelledby="headingBase20Day" data-parent="#accordionExample4">
                            <div class="card-body">
                                <?=$break_days?>
                            </div>
                        </div>
                    </div>

                    <?php } ?>

                    <?php if($training >= 10) { ?>

                    <!--                                 Описание 21 дня тренировки!-->
                    <div class="card">
                        <div class="card-header" id="headingBase21Day">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase21Day" aria-expanded="false" aria-controls="collapseBase21Day">
                                    День 21, Грудь и бицепс!
                                </button>
                            </h5>
                        </div>
                        <div id="collapseBase21Day" class="collapse" aria-labelledby="headingBase21Day" data-parent="#accordionExample4">
                            <div class="card-body">


                                <div class="row">
                                    <div class="col-3">
                                        <div class="list-group" id="list-tab" role="tablist">
                                            <a class="list-group-item list-group-item-action" id="list-baseNutrition21day-list" data-toggle="list" href="#list-baseNutrition21day" role="tab" aria-controls="baseNutrition21day"><?=$eating ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseRazminka21day-list" data-toggle="list" href="#list-baseRazminka21day" role="tab" aria-controls="baseRazminka21day"><?=$razminka_name?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseChestNaklon21day-list" data-toggle="list" href="#list-baseChestNaklon21day" role="tab" aria-controls="baseChestNaklon21day"><?=$grud_noklon ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseChestShim21day-list" data-toggle="list" href="#list-baseChestShim21day" role="tab" aria-controls="baseChestShim21day"><?=$grud_shim ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseChestRazvod21day-list" data-toggle="list" href="#list-baseChestRazvod21day" role="tab" aria-controls="baseChestRazvod21day"><?=$grud_razvod ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePullOver21day-list" data-toggle="list" href="#list-basePullOver21day" role="tab" aria-controls="basePullOver21day"><?=$pulover ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseBicepsBlock21day-list" data-toggle="list" href="#list-baseBicepsBlock21day" role="tab" aria-controls="baseBicepsBlock21day"><?=$biceps_niz_block ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseBicepsMolotki21day-list" data-toggle="list" href="#list-baseBicepsMolotki21day" role="tab" aria-controls="baseBicepsMolotki21day"><?=$biceps_arm_molotki ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseBicepsScott21day-list" data-toggle="list" href="#list-baseBicepsScott21day" role="tab" aria-controls="baseBicepsScott21day"><?=$biceps_arm_scott ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePress21day-list" data-toggle="list" href="#list-basePress21day" role="tab" aria-controls="basePress21day"><?=$press_skr?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePressKosie21day-list" data-toggle="list" href="#list-basePressKosie21day" role="tab" aria-controls="basePressKosie21day"><?=$press_kos?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseAfter21day-list" data-toggle="list" href="#list-baseAfter21day" role="tab" aria-controls="baseAfter21day"><?=$final?></a>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="list-baseNutrition21day" role="tabpanel" aria-labelledby="list-baseNutrition21day-list">
                                                <?=$eggs?>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseRazminka21day" role="tabpanel" aria-labelledby="list-baseRazminka21day-list">
                                                <?=$razminka?>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseChestNaklon21day" role="tabpanel" aria-labelledby="list-baseChestNaklon21day-list">
                                                <li class="list-group-item list-group-item-primary">Жим на наклонной! <?=$time_pump?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 20-25кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2,3,4,5 подход - 15 повторений, <?=$weight50?>!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseChestShim21day" role="tabpanel" aria-labelledby="list-baseChestShim21day-list">
                                                <li class="list-group-item list-group-item-primary">Жим лёжа! <?=$time_pump?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 15 повторений, <?=$weight50?></li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseChestRazvod21day" role="tabpanel" aria-labelledby="list-baseChestRazvod21day-list">
                                                <li class="list-group-item list-group-item-primary">Разводка рук в стороны на наклонной!  <?=$time_pump?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 15 повторений, <?=$weight50?></li>
                                            </div>
                                            <div class="tab-pane fade" id="list-basePullOver21day" role="tabpanel" aria-labelledby="list-basePullOver21day-list">
                                                <li class="list-group-item list-group-item-primary">Пуловер! <?=$time_pump?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, гантели по 5-10кг! !</li>
                                                <li class="list-group-item list-group-item-success">2,3,4,5 подход - 15 повторений, <?=$weight50?></li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseBicepsBlock21day" role="tabpanel" aria-labelledby="list-baseBicepsBlock21day-list">
                                                <li class="list-group-item list-group-item-primary">Бицепс, Тяга нижнего блока внутренним хватом! <?=$time_pump?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 15 повторений, <?=$weight50?></li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseBicepsMolotki21day" role="tabpanel" aria-labelledby="list-baseBicepsMolotki21day-list">
                                                <li class="list-group-item list-group-item-primary">Бицепс, Молотки! <?=$time_pump?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 15 повторений, <?=$weight50?></li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseBicepsScott21day" role="tabpanel" aria-labelledby="list-baseBicepsScott21day-list">
                                                <li class="list-group-item list-group-item-primary">Бицепс, Изолированное сгибание рук со штангой! <?=$time_pump?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 15 повторений, <?=$weight50?></li>
                                            </div>

                                            <div class="tab-pane fade" id="list-basePress21day" role="tabpanel" aria-labelledby="list-basePress21day-list">
                                                <li class="list-group-item list-group-item-primary">Пресс, скручивание! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений, без веса отягощения!</li>
                                            </div>

                                            <div class="tab-pane fade" id="list-basePressKosie21day" role="tabpanel" aria-labelledby="list-basePressKosie21day-list">
                                                <li class="list-group-item list-group-item-primary">Пресс, косые мышцы живота! Наклоны в стороны с гантелей в руке,
                                                    после завершения упражнения взять гантелю в другую руку и повторить(вес гантели на выбор)! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseAfter21day" role="tabpanel" aria-labelledby="list-baseAfter21day-list">
                                                <?=$after_training ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>





                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingBase22Day">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase22Day" aria-expanded="false" aria-controls="collapseBase22Day">
                                    День 22-23, Отдых!
                                </button>
                            </h5>
                        </div>
                        <div id="collapseBase22Day" class="collapse" aria-labelledby="headingBase22Day" data-parent="#accordionExample4">
                            <div class="card-body">
                                <?=$break_days?>
                            </div>
                        </div>
                    </div>

                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
<!--END 3 week training-->
    <div class="card">
        <div class="card-header" id="headingTraining4Week">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTraining4Week" aria-expanded="false" aria-controls="collapseTraining4Week">
                    Неделя тренировок #4
                </button>
            </h5>
        </div>
        <div id="collapseTraining4Week" class="collapse" aria-labelledby="headingTraining4Week" data-parent="#accordionExample">
            <div class="card-body">

                Начинается неделя, для укрепления ваших силовых показателей!
                <div class="accordion" id="accordionExample5">

                    <?php if($training >= 11) { ?>

                    <div class="card">
                        <div class="card-header" id="headingBase23Day">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase23Day" aria-expanded="false" aria-controls="collapseBase23Day">
                                    День 23, Отдых!
                                </button>
                            </h5>
                        </div>
                        <div id="collapseBase23Day" class="collapse" aria-labelledby="headingBase23Day" data-parent="#accordionExample5">
                            <div class="card-body">
                                <?=$break_days?>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingBase24Day">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseBase24Day" aria-expanded="true" aria-controls="collapseBase24Day">
                                    День 24, Ноги и Плечи! Базовая тренировка!
                                </button>
                            </h5>
                        </div>

                        <div id="collapseBase24Day" class="collapse" aria-labelledby="headingBase24Day" data-parent="#accordionExample5">
                            <div class="card-body">
                                <!--                                 Описание 9 дня тренировки!-->
                                <div class="row">
                                    <div class="col-3">
                                        <div class="list-group" id="list-tab" role="tablist">
                                            <a class="list-group-item list-group-item-action" id="list-baseNutrition24day-list" data-toggle="list" href="#list-baseNutrition24day" role="tab" aria-controls="baseNutrition24day"><?=$eating ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseRazminka24day-list" data-toggle="list" href="#list-baseRazminka24day" role="tab" aria-controls="baseRazminka24day"><?=$razminka_name?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePrised24day-list" data-toggle="list" href="#list-basePrised24day" role="tab" aria-controls="basePrised24day"><?=$priced?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseKvadro24day-list" data-toggle="list" href="#list-baseKvadro24day" role="tab" aria-controls="baseKvadro24day"><?=$kvadriceps_leg ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseBiceps24day-list" data-toggle="list" href="#list-baseBiceps24day" role="tab" aria-controls="baseVipadi24day"><?=$biceps_leg?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePrivod24day-list" data-toggle="list" href="#list-basePrivod24day" role="tab" aria-controls="basePrivod24day"><?=$privod_leg?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseVneshStorBedra24day-list" data-toggle="list" href="#list-baseVneshStorBedra24day" role="tab" aria-controls="baseVneshStorBedra24day"><?=$vnesh_leg?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseGolen24day-list" data-toggle="list" href="#list-baseGolen24day" role="tab" aria-controls="baseGolen24day"><?=$golen?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePlechiShimChest24day-list" data-toggle="list" href="#list-basePlechiShimChest24day" role="tab" aria-controls="basePlechiShimChest24day"><?=$plechi_shim ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePlechiShimBack24day-list" data-toggle="list" href="#list-basePlechiShimBack24day" role="tab" aria-controls="basePlechiShimBack24day"><?=$plechi_shim ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePlechiShimGanteli24day-list" data-toggle="list" href="#list-basePlechiShimGanteli24day" role="tab" aria-controls="basePlechiShimGanteli24day"><?=$plechi_ganteli ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePlechiVStoroni24day-list" data-toggle="list" href="#list-basePlechiVStoroni24day" role="tab" aria-controls="basePlechiVStoroni24day"><?=$plechi_ganteli ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePlechiPered24day-list" data-toggle="list" href="#list-basePlechiPered24day" role="tab" aria-controls="basePlechiPered24day"><?=$plechi_ganteli ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePlechiVNaklone24day-list" data-toggle="list" href="#list-basePlechiVNaklone24day" role="tab" aria-controls="basePlechiVNaklone24day"><?=$plechi_ganteli ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePress24day-list" data-toggle="list" href="#list-basePress24day" role="tab" aria-controls="basePress24day"><?=$press_skr?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePressKosie24day-list" data-toggle="list" href="#list-basePressKosie24day" role="tab" aria-controls="basePressKosie24day"><?=$press_kos?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseAfter24day-list" data-toggle="list" href="#list-baseAfter24day" role="tab" aria-controls="baseAfter24day"><?=$final?></a>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade" id="list-baseNutrition24day" role="tabpanel" aria-labelledby="list-baseNutrition24day-list">
                                                <?=$eggs?>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseRazminka24day" role="tabpanel" aria-labelledby="list-baseRazminka24day-list">
                                                <?=$razminka?>
                                            </div>
                                            <div class="tab-pane fade" id="list-basePrised24day" role="tabpanel" aria-labelledby="list-basePrised24day-list">
                                                <li class="list-group-item list-group-item-primary">Присед! <?=$time_power?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, без отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2,3,4,5 подход - 5 повторений, <?=$weight80?></li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseKvadro24day" role="tabpanel" aria-labelledby="list-baseKvadro24day-list">
                                                <li class="list-group-item list-group-item-primary">Разгибание ног в тренажере сидя, Квадрицепс бедра! <?=$time_power?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений, <?=$weight80?></li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseBiceps24day" role="tabpanel" aria-labelledby="list-baseBiceps24day-list">
                                                <li class="list-group-item list-group-item-primary">Сгибание ног в тренажере лёжа, Бицепс бедра! <?=$time_power?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений, <?=$weight80?></li>
                                            </div>
                                            <div class="tab-pane fade" id="list-basePrivod24day" role="tabpanel" aria-labelledby="list-basePrivod24day-list">
                                                <li class="list-group-item list-group-item-primary">Сведение ног сидя, приводящие мышцы бедра! <?=$time_power?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений, <?=$weight80?></li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseVneshStorBedra24day" role="tabpanel" aria-labelledby="list-baseVneshStorBedra24day-list">
                                                <li class="list-group-item list-group-item-primary">Разведение ног сидя, внешняя сторона бедра! <?=$time_power?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений, <?=$weight80?></li>
                                            </div>

                                            <div class="tab-pane fade" id="list-baseGolen24day" role="tabpanel" aria-labelledby="list-baseGolen24day-list">
                                                <li class="list-group-item list-group-item-primary">Голень, подъем на носки в тренажере стоя! <?=$time_power?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений, <?=$weight80?></li>
                                            </div>

                                            <div class="tab-pane fade" id="list-basePlechiShimChest24day" role="tabpanel" aria-labelledby="list-basebasePlechiShimChest24day-list">
                                                <li class="list-group-item list-group-item-primary">Жим штанги от груди сидя! <?=$time_power?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, со штангой (20кг - вес штагни)!</li>
                                                <li class="list-group-item list-group-item-success">2,3,4,5 подход - 5 повторений, <?=$weight80?></li>
                                            </div>
                                            <div class="tab-pane fade" id="list-basePlechiShimBack24day" role="tabpanel" aria-labelledby="list-basePlechiShimBack24day-list">
                                                <li class="list-group-item list-group-item-primary">Жим штанги от спины сидя! <?=$time_power?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений, <?=$weight80?></li>

                                            </div>
                                            <div class="tab-pane fade" id="list-basePlechiShimGanteli24day" role="tabpanel" aria-labelledby="list-basePlechiShimGanteli24day-list">
                                                <li class="list-group-item list-group-item-primary">Жим гантелями сидя! <?=$time_power?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений, <?=$weight80?></li>
                                            </div>
                                            <div class="tab-pane fade" id="list-basePlechiVStoroni24day" role="tabpanel" aria-labelledby="list-basePlechiVStoroni24day-list">
                                                <li class="list-group-item list-group-item-primary">Подъём гантелей в стороны стоя! <?=$time_power?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений, <?=$weight80?></li>
                                            </div>
                                            <div class="tab-pane fade" id="list-basePlechiPered24day" role="tabpanel" aria-labelledby="list-basePlechiPered24day-list">
                                                <li class="list-group-item list-group-item-primary">Подъём гантелей перед собой стоя! <?=$time_power?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений, <?=$weight80?></li>
                                            </div>
                                            <div class="tab-pane fade" id="list-basePlechiVNaklone24day" role="tabpanel" aria-labelledby="list-basePlechiVNaklone24day-list">
                                                <li class="list-group-item list-group-item-primary">Подъём гантелей в стороны в наклоне сидя! <?=$time_power?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений, <?=$weight80?></li>
                                            </div>
            
                                            <div class="tab-pane fade" id="list-basePress24day" role="tabpanel" aria-labelledby="list-basePress24day-list">
                                                <li class="list-group-item list-group-item-primary">Пресс, скручивание! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений, без веса отягощения!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-basePressKosie24day" role="tabpanel" aria-labelledby="list-basePressKosie24day-list">
                                                <li class="list-group-item list-group-item-primary">Пресс, косые мышцы живота! Наклоны в стороны с гантелей в руке,
                                                    после завершения упражнения взять гантелю в другую руку и повторить(вес гантели на выбор)! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseAfter24day" role="tabpanel" aria-labelledby="list-baseAfter24day-list">
                                                <?=$after_training ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header" id="headingBase25Day">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase25Day" aria-expanded="false" aria-controls="collapseBase25Day">
                                    День 25, Отдых!
                                </button>
                            </h5>
                        </div>
                        <div id="collapseBase25Day" class="collapse" aria-labelledby="headingBase25Day" data-parent="#accordionExample5">
                            <div class="card-body">
                                <?=$break_days?>
                            </div>
                        </div>
                    </div>


                    <?php } ?>

                    <?php if($training >= 12) { ?>

                    <!--                                 Описание 26 тренировки!-->
                    <div class="card">
                        <div class="card-header" id="headingBase26Day">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase26Day" aria-expanded="false" aria-controls="collapseBase26Day">
                                    День 26, Спина и Трицепс!
                                </button>
                            </h5>
                        </div>
                        <div id="collapseBase26Day" class="collapse" aria-labelledby="headingBase26Day" data-parent="#accordionExample5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="list-group" id="list-tab" role="tablist">
                                            <a class="list-group-item list-group-item-action" id="list-baseNutrition26day-list" data-toggle="list" href="#list-baseNutrition26day" role="tab" aria-controls="baseNutrition26day"><?=$eating ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseRazminka26day-list" data-toggle="list" href="#list-baseRazminka26day" role="tab" aria-controls="baseRazminka26day"><?=$razminka_name?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseBackGrud26day-list" data-toggle="list" href="#list-baseBackGrud26day" role="tab" aria-controls="baseBackGrud26day"><?=$back_up_block ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseBackZaSpiny26day-list" data-toggle="list" href="#list-baseBackZaSpiny26day" role="tab" aria-controls="baseBackZaSpiny26day"><?=$back_up_block ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseBackGorizTyaga26day-list" data-toggle="list" href="#list-baseBackGorizTyaga26day" role="tab" aria-controls="baseBackGorizTyaga26day"><?=$goriz_block ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseBackGorizTyagaNaklon26day-list" data-toggle="list" href="#list-baseBackGorizTyagaNaklon26day" role="tab" aria-controls="baseBackGorizTyagaNaklon26day"><?=$back_tiaga_naklon ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseTricepsSidia26day-list" data-toggle="list" href="#list-baseTricepsSidia26day" role="tab" aria-controls="baseTricepsSidia26day"><?=$triceps_arm_otshim ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseTricepsVerh26day-list" data-toggle="list" href="#list-baseTricepsVerh26day" role="tab" aria-controls="baseTricepsVerh26day"><?=$triceps_arm_verh_block ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseTricepsRazgib26day-list" data-toggle="list" href="#list-baseTricepsRazgib26day" role="tab" aria-controls="baseTricepsRazgib26day"><?=$triceps_arm_razgib ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseTrap26day-list" data-toggle="list" href="#list-baseTrap26day" role="tab" aria-controls="baseTrap26day"><?=$trapecii ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseGiper26day-list" data-toggle="list" href="#list-baseGiper26day" role="tab" aria-controls="baseGiper26day"><?=$giperekstenzia ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePress26day-list" data-toggle="list" href="#list-basePress26day" role="tab" aria-controls="basePress26day"><?=$press_skr?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePressKosie26day-list" data-toggle="list" href="#list-basePressKosie26day" role="tab" aria-controls="basePressKosie26day"><?=$press_kos?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseAfter26day-list" data-toggle="list" href="#list-baseAfter26day" role="tab" aria-controls="baseAfter26day"><?=$final?></a>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="list-baseNutrition26day" role="tabpanel" aria-labelledby="list-baseNutrition26day-list">
                                                <?=$eggs?>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseRazminka26day" role="tabpanel" aria-labelledby="list-baseRazminka26day-list">
                                                <?=$razminka?>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseBackGrud26day" role="tabpanel" aria-labelledby="list-baseBackGrud26day-list">
                                                <li class="list-group-item list-group-item-primary">Тяга верхнего блока к груди! <?=$time_power?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 15-20кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2,3,4,5 подход - 5 повторений, <?=$weight80?></li>
                                            </div>

                                            <div class="tab-pane fade" id="list-baseBackZaSpiny26day" role="tabpanel" aria-labelledby="list-baseBackZaSpiny26day-list">
                                                <li class="list-group-item list-group-item-primary">Тяга верхнего блока за спину! <?=$time_power?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений, <?=$weight80?></li>
                                            </div>

                                            <div class="tab-pane fade" id="list-baseBackGorizTyaga26day" role="tabpanel" aria-labelledby="list-baseBackGorizTyaga26day-list">
                                                <li class="list-group-item list-group-item-primary">Тяга горизонтального блока сидя! <?=$time_power?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 20-25кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2,3,4,5 подход - 5 повторений, <?=$weight80?></li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseBackGorizTyagaNaklon26day" role="tabpanel" aria-labelledby="list-baseBackGorizTyagaNaklon26day-list">
                                                <li class="list-group-item list-group-item-primary">Тяга гантели в наклоне(на каждую руку)! <?=$time_power?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений,  <?=$weight80?></li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseTricepsSidia26day" role="tabpanel" aria-labelledby="list-baseTricepsSidia26day-list">
                                                <li class="list-group-item list-group-item-primary">Отжимания от скамьи! <?=$time_power?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, без веса отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2,3,4,5 подход - 5 повторений, <?=$weight80?></li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseTricepsVerh26day" role="tabpanel" aria-labelledby="list-baseTricepsVerh26day-list">
                                                <li class="list-group-item list-group-item-primary">Разгибание рук на верхнем блоке! <?=$time_power?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений, <?=$weight80?></li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseTricepsRazgib26day" role="tabpanel" aria-labelledby="list-baseTricepsRazgib26day-list">
                                                <li class="list-group-item list-group-item-primary">Разгибание руки в наклоне(на каждую руку)! <?=$time_power?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений, <?=$weight80?></li>
                                                <?=$break5min?>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseTrap26day" role="tabpanel" aria-labelledby="list-baseTrap26day-list">
                                                <li class="list-group-item list-group-item-primary">Трапеции, шраги со штангой или гантелями! <?=$time_power?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 10-15кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2,3,4,5 подход - 5 повторений, <?=$weight80?></li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseGiper26day" role="tabpanel" aria-labelledby="list-baseGiper26day-list">
                                                <li class="list-group-item list-group-item-primary">Гиперэкстензия! <?=$time_power?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений, без веса отягощения!!</li>
                                            </div>

                                            <div class="tab-pane fade" id="list-basePress26day" role="tabpanel" aria-labelledby="list-basePress26day-list">
                                                <li class="list-group-item list-group-item-primary">Пресс, скручивание! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений, без веса отягощения!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-basePressKosie26day" role="tabpanel" aria-labelledby="list-basePressKosie26day-list">
                                                <li class="list-group-item list-group-item-primary">Пресс, косые мышцы живота! Наклоны в стороны с гантелей в руке,
                                                    после завершения упражнения взять гантелю в другую руку и повторить(вес гантели на выбор)! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseAfter26day" role="tabpanel" aria-labelledby="list-baseAfter26day-list">
                                                <?=$after_training ?>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                    <!--                                 Описание 27 дня тренировки!-->
                    <div class="card">
                        <div class="card-header" id="headingBase27Day">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase27Day" aria-expanded="false" aria-controls="collapseBase27Day">
                                    День 27, Отдых!
                                </button>
                            </h5>
                        </div>
                        <div id="collapseBase27Day" class="collapse" aria-labelledby="headingBase27Day" data-parent="#accordionExample5">
                            <div class="card-body">
                                <?=$break_days?>
                            </div>
                        </div>
                    </div>

                    <?php } ?>

                    <?php if($training >= 13) { ?>

                    <!--                                 Описание 28 дня тренировки!-->
                    <div class="card">
                        <div class="card-header" id="headingBase28Day">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase28Day" aria-expanded="false" aria-controls="collapseBase28Day">
                                    День 28, Грудь и бицепс!
                                </button>
                            </h5>
                        </div>
                        <div id="collapseBase28Day" class="collapse" aria-labelledby="headingBase28Day" data-parent="#accordionExample5">
                            <div class="card-body">


                                <div class="row">
                                    <div class="col-3">
                                        <div class="list-group" id="list-tab" role="tablist">
                                            <a class="list-group-item list-group-item-action" id="list-baseNutrition28day-list" data-toggle="list" href="#list-baseNutrition28day" role="tab" aria-controls="baseNutrition28day"><?=$eating ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseRazminka28day-list" data-toggle="list" href="#list-baseRazminka28day" role="tab" aria-controls="baseRazminka28day"><?=$razminka_name?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseChestNaklon28day-list" data-toggle="list" href="#list-baseChestNaklon28day" role="tab" aria-controls="baseChestNaklon28day"><?=$grud_noklon ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseChestShim28day-list" data-toggle="list" href="#list-baseChestShim28day" role="tab" aria-controls="baseChestShim28day"><?=$grud_shim ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseChestRazvod28day-list" data-toggle="list" href="#list-baseChestRazvod28day" role="tab" aria-controls="baseChestRazvod28day"><?=$grud_razvod ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePullOver28day-list" data-toggle="list" href="#list-basePullOver28day" role="tab" aria-controls="basePullOver28day"><?=$pulover ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseBicepsBlock28day-list" data-toggle="list" href="#list-baseBicepsBlock28day" role="tab" aria-controls="baseBicepsBlock28day"><?=$biceps_niz_block ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseBicepsMolotki28day-list" data-toggle="list" href="#list-baseBicepsMolotki28day" role="tab" aria-controls="baseBicepsMolotki28day"><?=$biceps_arm_molotki ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseBicepsSkott28day-list" data-toggle="list" href="#list-baseBicepsSkott28day" role="tab" aria-controls="baseSkott28day"><?=$biceps_arm_scott ?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePress28day-list" data-toggle="list" href="#list-basePress28day" role="tab" aria-controls="basePress28day"><?=$press_skr?></a>
                                            <a class="list-group-item list-group-item-action" id="list-basePressKosie28day-list" data-toggle="list" href="#list-basePressKosie28day" role="tab" aria-controls="basePressKosie28day"><?=$press_kos?></a>
                                            <a class="list-group-item list-group-item-action" id="list-baseAfter28day-list" data-toggle="list" href="#list-baseAfter28day" role="tab" aria-controls="baseAfter28day"><?=$final?></a>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="list-baseNutrition28day" role="tabpanel" aria-labelledby="list-baseNutrition28day-list">
                                                <?=$eggs?>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseRazminka28day" role="tabpanel" aria-labelledby="list-baseRazminka28day-list">
                                                <?=$razminka?>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseChestNaklon28day" role="tabpanel" aria-labelledby="list-baseChestNaklon28day-list">
                                                <li class="list-group-item list-group-item-primary">Жим на наклонной! <?=$time_power?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 20-25кг вес отягощения!</li>
                                                <li class="list-group-item list-group-item-success">2,3,4,5 подход - 5 повторений, <?=$weight80?></li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseChestShim28day" role="tabpanel" aria-labelledby="list-baseChestShim28day-list">
                                                <li class="list-group-item list-group-item-primary">Жим лёжа! <?=$time_power?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений, <?=$weight80?></li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseChestRazvod28day" role="tabpanel" aria-labelledby="list-baseChestRazvod28day-list">
                                                <li class="list-group-item list-group-item-primary">Разводка рук в стороны на наклонной! <?=$time_power?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений, <?=$weight80?></li>
                                            </div>
                                            <div class="tab-pane fade" id="list-basePullOver28day" role="tabpanel" aria-labelledby="list-basePullOver28day-list">
                                                <li class="list-group-item list-group-item-primary">Пуловер! <?=$time_power?></li>
                                                <li class="list-group-item list-group-item-success">1 подход - 10 повторений, гантели по 5-10кг! !</li>
                                                <li class="list-group-item list-group-item-success">2,3,4,5 подход - 5 повторений, <?=$weight80?></li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseBicepsBlock28day" role="tabpanel" aria-labelledby="list-baseBicepsBlock28day-list">
                                                <li class="list-group-item list-group-item-primary">Бицепс, Тяга нижнего блока внутренним хватом! <?=$time_power?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений, <?=$weight80?></li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseBicepsMolotki28day" role="tabpanel" aria-labelledby="list-baseBicepsMolotki28day-list">
                                                <li class="list-group-item list-group-item-primary">Бицепс, Молотки! <?=$time_power?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений, <?=$weight80?></li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseBicepsSkott28day" role="tabpanel" aria-labelledby="list-baseBicepsSkott28day-list">
                                                <li class="list-group-item list-group-item-primary">Бицепс, Изолированное сгибание рук со штангой! <?=$time_power?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений, <?=$weight80?></li>

                                            </div>

                                            <div class="tab-pane fade" id="list-basePress28day" role="tabpanel" aria-labelledby="list-basePress28day-list">
                                                <li class="list-group-item list-group-item-primary">Пресс, скручивание! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений, без веса отягощения!</li>
                                            </div>

                                            <div class="tab-pane fade" id="list-basePressKosie28day" role="tabpanel" aria-labelledby="list-basePressKosie28day-list">
                                                <li class="list-group-item list-group-item-primary">Пресс, косые мышцы живота! Наклоны в стороны с гантелей в руке,
                                                    после завершения упражнения взять гантелю в другую руку и повторить(вес гантели на выбор)! <?=$time_base?></li>
                                                <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений!</li>
                                            </div>
                                            <div class="tab-pane fade" id="list-baseAfter28day" role="tabpanel" aria-labelledby="list-baseAfter28day-list">
                                                <?=$after_training ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingBase29Day">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase29Day" aria-expanded="false" aria-controls="collapseBase29Day">
                                    День 29-30, Отдых!
                                </button>
                            </h5>
                        </div>
                        <div id="collapseBase29Day" class="collapse" aria-labelledby="headingBase29Day" data-parent="#accordionExample5">
                            <div class="card-body">
                                <?=$break_days?>
                            </div>
                        </div>
                    </div>

                        Обычно после завершения 1 месяца тренировок телу дают отдых до 7 дней, для полного восстановления!
                        Но у каждого человека свой организм, поэтому многие продолжают тренировки!
                        Если последние 2 недели тренировок были для вас тяжёлыми, то рекомендуется повторить после отдыха последние 3 недели тренировок!
                <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>
