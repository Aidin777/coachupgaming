<h1>Силовая Тренировка!</h1>
Количество каллорий потребляемых при тренировке меньше чем в пампинге. <br>
Суть заключается в том, чтобы сделать подход и дать рукам восстановиться, а в следующем подходе  <br>
сделать тоже количество повторений как и в предыдущем. <br>
Чувство жжения в мышцах допускать нельзя, необходимо полное восстановление!

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
     Если во время тренировки вы пили воду с ВСАА, то в дополнительном питании нету смысла!<br>
 Питание на ночь вы изучили в подготовительной неделе!</li>';
$weight50 ='( вес отягощения 50% от разового максимума )';
$weight80 ='( вес отягощения 80% от разового максимума )';
$time_pump = 'Перерыв между  подходами 15-20 секунд!';
$time_power = 'Перерыв между  подходами 1-2 минуты!';
$time_base = 'Перерыв между  подходами 1 минута!';


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


$break_days = '<li class="list-group-item list-group-item-secondary">
Утром - 2 варённых яица (максимум 2 желтка, белок ешьте вдоволь)!<br>
В дни отдыха желательно переходить на полностью белковую еду,
 так как первый месяц тренировок вы частично переходили, теперь организму необходима суточная порция белков!<br>
Постарайтесь сделать так, чтобы каждый приём пищи был гарнир и мясо с овощами (гречка, рис, курица, говядина + можно салаты делать)!<br>
 Питание на ночь вы изучили в подготовительной неделе!
</li>';

// Ноги
$eating = 'Питание'; $razminka_name = 'Разминка'; $priced ='Присед';
$kvadriceps_leg = 'Квадрицепс'; $biceps_leg= 'Бицепс'; $golen = 'Голень';
$press_skr = 'Пресс скручивание';  $press_kos = 'Пресс, косые мышцы'; $final = 'Завершение';

// Спина и трицепс
$back_up_block = 'Спина, верхний блок'; $goriz_block = 'Спина, гориз. блок';
$back_tiaga_naklon = 'Спина, тяга в наклоне'; $triceps_arm_otshim = 'Трицепс, отжимания';
$triceps_arm_verh_block = 'Трицепс, верхний блок'; $triceps_arm_razgib = 'Трицепс, разгибание';
$trapecii = 'Трапеции'; $giperekstenzia = 'Гиперэкстензия';

// Грудь и бицепс
$grud_noklon = 'Груд, наклонная'; $grud_shim = 'Грудь, жим'; $grud_razvod = 'Грудь, разводка';
$pulover = 'Пуловер';
$biceps_arm_molotki = 'Бицепс, молотки'; $biceps_niz_block = 'Бицепс, нижний блок';
$biceps_arm_scott = 'Бицепс, скотт';
$privod_leg = 'Приводящие мышцы';
$vnesh_leg = 'Внешняя сторона бедра';
//Плечи
$plechi_shim = 'Плечи, жим'; $plechi_ganteli = 'Плечи, гантели';


?>

<div class="accordion" id="accordionExample">

    <!--Конец 1 недели-->

    <div class="card">
        <div class="card-header" id="headingTraining2Week">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTraining2Week" aria-expanded="false" aria-controls="collapseTraining2Week">
                    Неделя тренировок #1
                </button>
            </h5>
        </div>
        <div id="collapseTraining2Week" class="collapse" aria-labelledby="headingTraining2Week" data-parent="#accordionExample">
            <div class="card-body">
                Начинается неделя, для определения ваших силовых показателей и показателей выносливости!
                <div class="accordion" id="accordionExample3">

                    <?php if($training >= 1) { ?>
                        <div class="card">
                            <div class="card-header" id="headingBase1Day">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase1Day" aria-expanded="false" aria-controls="collapseBase1Day">
                                        День 1, Отдых!
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseBase1Day" class="collapse" aria-labelledby="headingBase1Day" data-parent="#accordionExample3">
                                <div class="card-body">
                                    <?=$break_days?>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingBase2Day">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseBase2Day" aria-expanded="true" aria-controls="collapseBase2Day">
                                        День 2, Ноги и Плечи! Базовая тренировка!
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseBase2Day" class="collapse" aria-labelledby="headingBase2Day" data-parent="#accordionExample3">
                                <div class="card-body">
                                    <!--                                 Описание 9 дня тренировки!-->
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="list-group" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action" id="list-baseNutrition2day-list" data-toggle="list" href="#list-baseNutrition2day" role="tab" aria-controls="baseNutrition2day">Питание</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseRazminka2day-list" data-toggle="list" href="#list-baseRazminka2day" role="tab" aria-controls="baseRazminka2day">Разминка</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePrised2day-list" data-toggle="list" href="#list-basePrised2day" role="tab" aria-controls="basePrised2day">Присед!</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseShim2day-list" data-toggle="list" href="#list-baseShim2day" role="tab" aria-controls="baseShim2day">Жим ногами!</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseKvadro2day-list" data-toggle="list" href="#list-baseKvadro2day" role="tab" aria-controls="baseKvadro2day">Квадрицепс</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseBiceps2day-list" data-toggle="list" href="#list-baseBiceps2day" role="tab" aria-controls="baseBiceps2day">Бицепс</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePrivod2day-list" data-toggle="list" href="#list-basePrivod2day" role="tab" aria-controls="basePrivod2day">Приводящие мышцы</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseVneshStorBedra2day-list" data-toggle="list" href="#list-baseVneshStorBedra2day" role="tab" aria-controls="baseVneshStorBedra2day">Внешняя сторона бедра</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseGolen2day-list" data-toggle="list" href="#list-baseGolen2day" role="tab" aria-controls="baseGolen2day">Голень</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePlechiShimChest2day-list" data-toggle="list" href="#list-basePlechiShimChest2day" role="tab" aria-controls="basePlechiShimChest2day">Плечи, жим</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePlechiShimBack2day-list" data-toggle="list" href="#list-basePlechiShimBack2day" role="tab" aria-controls="basePlechiShimBack2day">Плечи, жим</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePlechiShimGanteli2day-list" data-toggle="list" href="#list-basePlechiShimGanteli2day" role="tab" aria-controls="basePlechiShimGanteli2day">Плечи, жим</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePlechiVStoroni2day-list" data-toggle="list" href="#list-basePlechiVStoroni2day" role="tab" aria-controls="basePlechiVStoroni2day">Плечи, в стороны</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePlechiPered2day-list" data-toggle="list" href="#list-basePlechiPered2day" role="tab" aria-controls="basePlechiPered2day">Плечи, перед собой</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePlechiVNaklone2day-list" data-toggle="list" href="#list-basePlechiVNaklone2day" role="tab" aria-controls="basePlechiVNaklone2day">Плечи, в наклоне</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePressMahi2day-list" data-toggle="list" href="#list-basePressMahi2day" role="tab" aria-controls="basePressMahi2day">Пресс, махи ногами</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePress2day-list" data-toggle="list" href="#list-basePress2day" role="tab" aria-controls="basePress2day">Пресс, скручивание</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePressKosie2day-list" data-toggle="list" href="#list-basePressKosie2day" role="tab" aria-controls="basePressKosie2day">Пресс, косые мышцы</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseAfter2day-list" data-toggle="list" href="#list-baseAfter2day" role="tab" aria-controls="baseAfter2day">Завершение</a>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade" id="list-baseNutrition2day" role="tabpanel" aria-labelledby="list-baseNutrition2day-list">
                                                    <?=$eggs?>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseRazminka2day" role="tabpanel" aria-labelledby="list-baseRazminka2day-list">
                                                    <?=$razminka?>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePrised2day" role="tabpanel" aria-labelledby="list-basePrised2day-list">
                                                    <li class="list-group-item list-group-item-primary">Присед! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, без отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2 подход - 10 повторений со штангой( вес штанги 20кг )</li>
                                                    <li class="list-group-item list-group-item-success">3 подход - 10 повторений, со штангой и отягощением 10кг( всего 30кг )</li>
                                                    <li class="list-group-item list-group-item-success">4 подход - 8 повторений, со штангой и отягощением 20кг( всего 40кг )</li>
                                                    <li class="list-group-item list-group-item-success">5 подход - 4-5 повторений, со штангой и отягощением 25кг( всего 45кг )</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseShim2day" role="tabpanel" aria-labelledby="list-baseShim2day-list">
                                                    <li class="list-group-item list-group-item-primary">Жим ногами! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 30кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 35кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">3 подход - 8 повторений, 40кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">4 подход - 4-5 повторений, 45кг вес отягощения!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseKvadro2day" role="tabpanel" aria-labelledby="list-baseKvadro2day-list">
                                                    <li class="list-group-item list-group-item-primary">Разгибание ног в тренажере сидя, Квадрицепс бедра! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 15кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 20кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">3 подход - 8 повторений, 25кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">4 подход - 4-5 повторений, 30кг вес отягощения!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseBiceps2day" role="tabpanel" aria-labelledby="list-baseBiceps2day-list">
                                                    <li class="list-group-item list-group-item-primary">Сгибание ног в тренажере лёжа, Бицепс бедра! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 15кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 20кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">3 подход - 10 повторений, 30кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">4 подход - 5-8 повторений, 35кг вес отягощения!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePrivod2day" role="tabpanel" aria-labelledby="list-basePrivod2day-list">
                                                    <li class="list-group-item list-group-item-primary">Сведение ног сидя, приводящие мышцы бедра! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 10кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 15кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">3 подход - 10 повторений, 20кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">4 подход - 5-8 повторений, 25кг вес отягощения!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseVneshStorBedra2day" role="tabpanel" aria-labelledby="list-baseVneshStorBedra2day-list">
                                                    <li class="list-group-item list-group-item-primary">Разведение ног сидя, внешняя сторона бедра! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 10кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 15кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">3 подход - 10 повторений, 20кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">4 подход - 5-8 повторений, 25кг вес отягощения!</li>
                                                </div>

                                                <div class="tab-pane fade" id="list-baseGolen2day" role="tabpanel" aria-labelledby="list-baseGolen2day-list">
                                                    <li class="list-group-item list-group-item-primary">Голень, подъем на носки в тренажере стоя! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 10-15кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 15-20кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">3 подход - 10 повторений, 25-30кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">4 подход - 10 повторений, 30-35кг вес отягощения!</li>
                                                </div>

                                                <div class="tab-pane fade" id="list-basePlechiShimChest2day" role="tabpanel" aria-labelledby="list-basebasePlechiShimChest2day-list">
                                                    <li class="list-group-item list-group-item-primary">Жим штанги от груди сидя! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, со штангой (20кг - вес штагни)!</li>
                                                    <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 20-30кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">3 подход - 10 повторений, 30-35кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">4 подход - 5-8 повторений, 35-40кг вес отягощения!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePlechiShimBack2day" role="tabpanel" aria-labelledby="list-basePlechiShimBack2day-list">
                                                    <li class="list-group-item list-group-item-primary">Жим штанги за голову сидя! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 20-30кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 30-35кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">3 подход - 5-8 повторений, 35-40кг вес отягощения!</li>

                                                </div>
                                                <div class="tab-pane fade" id="list-basePlechiShimGanteli2day" role="tabpanel" aria-labelledby="list-basePlechiShimGanteli2day-list">
                                                    <li class="list-group-item list-group-item-primary">Жим гантелями сидя! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 5-10кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 10-12кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">3 подход - 5-8 повторений, 13-15кг вес отягощения!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePlechiVStoroni2day" role="tabpanel" aria-labelledby="list-basePlechiVStoroni2day-list">
                                                    <li class="list-group-item list-group-item-primary">Подъём гантелей в стороны стоя! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 5-7кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 8-10кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">3 подход - 5-8 повторений, 10-12кг вес отягощения!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePlechiPered2day" role="tabpanel" aria-labelledby="list-basePlechiPered2day-list">
                                                    <li class="list-group-item list-group-item-primary">Подъём гантелей перед собой стоя!!!! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 5-7кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 8-10кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">3 подход - 5-8 повторений, 10-12кг вес отягощения!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePlechiVNaklone2day" role="tabpanel" aria-labelledby="list-basePlechiVNaklone2day-list">
                                                    <li class="list-group-item list-group-item-primary">Подъём гантелей в стороны в наклоне сидя! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 5-7кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 8-10кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">3 подход - 5-8 повторений, 10-12кг вес отягощения!</li>
                                                </div>

                                                <div class="tab-pane fade" id="list-basePressMahi2day" role="tabpanel" aria-labelledby="list-basePressMahi2day-list">
                                                    <li class="list-group-item list-group-item-primary">Пресс, Махи ногами вверх! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений, без веса отягощения!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePress2day" role="tabpanel" aria-labelledby="list-basePress2day-list">
                                                    <li class="list-group-item list-group-item-primary">Пресс, скручивание! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений, без веса отягощения!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePressKosie2day" role="tabpanel" aria-labelledby="list-basePressKosie2day-list">
                                                    <li class="list-group-item list-group-item-primary">Пресс, косые мышцы живота! Наклоны в стороны с гантелей в руке,
                                                        после завершения упражнения взять гантелю в другую руку и повторить(вес гантели на выбор)! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseAfter2day" role="tabpanel" aria-labelledby="list-baseAfter2day-list">
                                                    <?=$after_training ?>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header" id="headingBase3Day">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase3Day" aria-expanded="false" aria-controls="collapseBase3Day">
                                        День 3, Отдых!
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseBase3Day" class="collapse" aria-labelledby="headingBase3Day" data-parent="#accordionExample3">
                                <div class="card-body">
                                    <?=$break_days?>
                                </div>
                            </div>
                        </div>


                    <?php } ?>

                    <?php if($training >= 2) { ?>

                        <div class="card">
                            <div class="card-header" id="headingBase4Day">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase4Day" aria-expanded="false" aria-controls="collapseBase4Day">
                                        День 4, Спина и Трицепс!
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseBase4Day" class="collapse" aria-labelledby="headingBase4Day" data-parent="#accordionExample3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="list-group" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action" id="list-baseNutrition4day-list" data-toggle="list" href="#list-baseNutrition4day" role="tab" aria-controls="baseNutrition4day">Питание</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseRazminka4day-list" data-toggle="list" href="#list-baseRazminka4day" role="tab" aria-controls="baseRazminka4day">Разминка</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseBackGrud4day-list" data-toggle="list" href="#list-baseBackGrud4day" role="tab" aria-controls="baseBackGrud4day">Спина, верхний блок!</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseBackZaSpiny4day-list" data-toggle="list" href="#list-baseBackZaSpiny4day" role="tab" aria-controls="baseBackZaSpiny4day">Спина, верхний блок!</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseBackGorizTyaga4day-list" data-toggle="list" href="#list-baseBackGorizTyaga4day" role="tab" aria-controls="baseBackGorizTyaga4day">Спина, нижний блок!</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseBackGorizTyagaNaklon4day-list" data-toggle="list" href="#list-baseBackGorizTyagaNaklon4day" role="tab" aria-controls="baseBackGorizTyagaNaklon4day">Спина, тяга в наклоне!</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseTricepsSidia4day-list" data-toggle="list" href="#list-baseTricepsSidia4day" role="tab" aria-controls="baseTricepsSidia4day">Трицепс, отжимания!</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseTricepsVerh4day-list" data-toggle="list" href="#list-baseTricepsVerh4day" role="tab" aria-controls="baseTricepsVerh4day">Трицепс, верх. блок!</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseTricepsRazgib4day-list" data-toggle="list" href="#list-baseTricepsRazgib4day" role="tab" aria-controls="baseTricepsRazgib4day">Трицепс, разгибание!</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseTrap4day-list" data-toggle="list" href="#list-baseTrap4day" role="tab" aria-controls="baseTrap4day">Трапеции!</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseGiper4day-list" data-toggle="list" href="#list-baseGiper4day" role="tab" aria-controls="baseGiper4day">Гиперэкстензия!</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePressMahi4day-list" data-toggle="list" href="#list-basePressMahi4day" role="tab" aria-controls="basePressMahi4day">Пресс, махи ногами</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePress4day-list" data-toggle="list" href="#list-basePress4day" role="tab" aria-controls="basePress4day">Пресс</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePressKosie4day-list" data-toggle="list" href="#list-basePressKosie4day" role="tab" aria-controls="basePressKosie4day">Пресс, косые мышцы</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseAfter4day-list" data-toggle="list" href="#list-baseAfter4day" role="tab" aria-controls="baseAfter4day">Завершение</a>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="list-baseNutrition4day" role="tabpanel" aria-labelledby="list-baseNutrition4day-list">
                                                    <?=$eggs?>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseRazminka4day" role="tabpanel" aria-labelledby="list-baseRazminka4day-list">
                                                    <?=$razminka?>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseBackGrud4day" role="tabpanel" aria-labelledby="list-baseBackGrud4day-list">
                                                    <li class="list-group-item list-group-item-primary">Тяга верхнего блока к груди! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 20-25кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 25-30кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">3 подход - 10 повторений, 30-35кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">4 подход - 5-8 повторений, 35-40кг вес отягощения!</li>
                                                </div>

                                                <div class="tab-pane fade" id="list-baseBackZaSpiny4day" role="tabpanel" aria-labelledby="list-baseBackZaSpiny4day-list">
                                                    <li class="list-group-item list-group-item-primary">Тяга верхнего блока за голову! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 20-25кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 25-30кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">3 подход - 10 повторений, 30-35кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">4 подход - 5-8 повторений, 35-40кг вес отягощения!</li>
                                                </div>

                                                <div class="tab-pane fade" id="list-baseBackGorizTyaga4day" role="tabpanel" aria-labelledby="list-baseBackGorizTyaga4day-list">
                                                    <li class="list-group-item list-group-item-primary">Тяга нижнего блока сидя! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 20-25кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 25-30кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">3 подход - 10 повторений, 30-35кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">4 подход - 5-8 повторений, 35-40кг вес отягощения!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseBackGorizTyagaNaklon4day" role="tabpanel" aria-labelledby="list-baseBackGorizTyagaNaklon4day-list">
                                                    <li class="list-group-item list-group-item-primary">Тяга гантели в наклоне(на каждую руку)! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 10-15кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 15-20кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">3 подход - 5-8 повторений, 20-22кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">4 подход - 1-2 повторений, 22-25кг вес отягощения!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseTricepsSidia4day" role="tabpanel" aria-labelledby="list-baseTricepsSidia4day-list">
                                                    <li class="list-group-item list-group-item-primary">Отжимания от скамьи! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, без веса отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 5-10кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">3 подход - 10 повторений, 10-12кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">4 подход - 5-8 повторений, 12-15кг вес отягощения!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseTricepsVerh4day" role="tabpanel" aria-labelledby="list-baseTricepsVerh4day-list">
                                                    <li class="list-group-item list-group-item-primary">Разгибание рук на верхнем блоке! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 10-15кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 15-20кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">3 подход - 10 повторений, 20-25кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">4 подход - 5-8 повторений, 30-35кг вес отягощения!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseTricepsRazgib4day" role="tabpanel" aria-labelledby="list-baseTricepsRazgib4day-list">
                                                    <li class="list-group-item list-group-item-primary">Разгибание руки в наклоне(на каждую руку)! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 7-10кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 10-12кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">3 подход - 5-8 повторений, 12-15кг вес отягощения!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseTrap4day" role="tabpanel" aria-labelledby="list-baseTrap4day-list">
                                                    <li class="list-group-item list-group-item-primary">Трапеции, шраги со штангой или гантелями! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 10-15кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 15-20кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">3 подход - 5-8 повторений, 20-25кг вес отягощения!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseGiper4day" role="tabpanel" aria-labelledby="list-baseGiper4day-list">
                                                    <li class="list-group-item list-group-item-primary">Гиперэкстензия! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3 подход - 10 повторений, без веса отягощения!</li>
                                                </div>

                                                <div class="tab-pane fade" id="list-basePressMahi4day" role="tabpanel" aria-labelledby="list-basePressMahi4day-list">
                                                    <li class="list-group-item list-group-item-primary">Пресс, махи ногами вверх <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений, без веса отягощения!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePress4day" role="tabpanel" aria-labelledby="list-basePress4day-list">
                                                    <li class="list-group-item list-group-item-primary">Пресс, скручивание <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений, без веса отягощения!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePressKosie4day" role="tabpanel" aria-labelledby="list-basePressKosie4day-list">
                                                    <li class="list-group-item list-group-item-primary">Пресс, косые мышцы живота! Наклоны в стороны с гантелей в руке,
                                                        после завершения упражнения взять гантелю в другую руку и повторить(вес гантели на выбор)! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseAfter4day" role="tabpanel" aria-labelledby="list-baseAfter4day-list">
                                                    <?=$after_training ?>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--                                 Описание 5 дня тренировки!-->
                        <div class="card">
                            <div class="card-header" id="headingBase5Day">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase5Day" aria-expanded="false" aria-controls="collapseBase5Day">
                                        День 5, Отдых!
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseBase5Day" class="collapse" aria-labelledby="headingBase5Day" data-parent="#accordionExample3">
                                <div class="card-body">
                                    <?=$break_days?>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                    <!--                                 Описание 6 дня тренировки!-->
                    <?php if($training >= 3) { ?>

                        <div class="card">
                            <div class="card-header" id="headingBase6Day">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase6Day" aria-expanded="false" aria-controls="collapseBase6Day">
                                        День 6, Грудь и Бицепс!
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseBase6Day" class="collapse" aria-labelledby="headingBase6Day" data-parent="#accordionExample3">
                                <div class="card-body">


                                    <div class="row">
                                        <div class="col-3">
                                            <div class="list-group" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action" id="list-baseNutrition6day-list" data-toggle="list" href="#list-baseNutrition6day" role="tab" aria-controls="baseNutrition6day">Питание</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseRazminka6day-list" data-toggle="list" href="#list-baseRazminka6day" role="tab" aria-controls="baseRazminka6day">Разминка</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseChestNaklon6day-list" data-toggle="list" href="#list-baseChestNaklon6day" role="tab" aria-controls="baseChestNaklon6day">Грудь, наклонная</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseChestShim6day-list" data-toggle="list" href="#list-baseChestShim6day" role="tab" aria-controls="baseChestShim6day">Грудь, жим</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseChestRazvod6day-list" data-toggle="list" href="#list-baseChestRazvod6day" role="tab" aria-controls="baseChestRazvod6day">Грудь, разводка</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePullOver6day-list" data-toggle="list" href="#list-basePullOver6day" role="tab" aria-controls="basePullOver6day">Пуловер</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseBicepsBlock6day-list" data-toggle="list" href="#list-baseBicepsBlock6day" role="tab" aria-controls="baseBicepsBlock6day">Бицепс, нижний блок</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseBicepsBlockVnesh6day-list" data-toggle="list" href="#list-baseBicepsBlockVnesh6day" role="tab" aria-controls="baseBicepsBlockVnesh6day">Бицепс, нижний блок</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseBicepsScott6day-list" data-toggle="list" href="#list-baseBicepsScott6day" role="tab" aria-controls="baseBicepsScott6day">Бицепс, скамья</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseBicepsMolotki6day-list" data-toggle="list" href="#list-baseBicepsMolotki6day" role="tab" aria-controls="baseBicepsMolotki6day">Бицепс, молотки</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePressMahi6day-list" data-toggle="list" href="#list-basePressMahi6day" role="tab" aria-controls="basePressMahi6day">Пресс, махи нагами</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePress6day-list" data-toggle="list" href="#list-basePress6day" role="tab" aria-controls="basePress6day">Пресс</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePressKosie6day-list" data-toggle="list" href="#list-basePressKosie6day" role="tab" aria-controls="basePressKosie6day">Пресс, косые мышцы</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseAfter6day-list" data-toggle="list" href="#list-baseAfter6day" role="tab" aria-controls="baseAfter6day">Завершение</a>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="list-baseNutrition6day" role="tabpanel" aria-labelledby="list-baseNutrition6day-list">
                                                    <?=$eggs?>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseRazminka6day" role="tabpanel" aria-labelledby="list-baseRazminka6day-list">
                                                    <?=$razminka?>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseChestNaklon6day" role="tabpanel" aria-labelledby="list-baseChestNaklon6day-list">
                                                    <li class="list-group-item list-group-item-primary">Жим на наклонной! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 20-25кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 25-30кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">3 подход - 10 повторений, 30-35кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">4 подход - 10 повторений, 35-40кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">5 подход - 4-5 повторений, 40-45кг вес отягощения!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseChestShim6day" role="tabpanel" aria-labelledby="list-baseChestShim6day-list">
                                                    <li class="list-group-item list-group-item-primary">Жим лёжа! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 20-25кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 25-30кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">3 подход - 10 повторений, 30-35кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">4 подход - 10 повторений, 35-40кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">5 подход - 4-5 повторений, 40-45кг вес отягощения!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseChestRazvod6day" role="tabpanel" aria-labelledby="list-baseChestRazvod6day-list">
                                                    <li class="list-group-item list-group-item-primary">Разводка рук в стороны на наклонной! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений, гантели по 5-10кг!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePullOver6day" role="tabpanel" aria-labelledby="list-basePullOver6day-list">
                                                    <li class="list-group-item list-group-item-primary">Пуловер! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, гантели по 5-10кг!</li>
                                                    <li class="list-group-item list-group-item-success">2 подход - 10 повторений, гантели по 10-15кг!</li>
                                                    <li class="list-group-item list-group-item-success">3 подход - 10 повторений, гантели по 15-20кг!</li>
                                                    <li class="list-group-item list-group-item-success">4 подход - 4-5 повторений, гантели по 20-25кг!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseBicepsBlock6day" role="tabpanel" aria-labelledby="list-baseBicepsBlock6day-list">
                                                    <li class="list-group-item list-group-item-primary">Бицепс, Тяга нижнего блока внутренним хватом! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 20-25кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 25-30кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">3 подход - 10 повторений, 30-35кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">4 подход - 10 повторений, 40-45кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">5 подход - 4-5 повторений, 45-50кг вес отягощения!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseBicepsBlockVnesh6day" role="tabpanel" aria-labelledby="list-baseBicepsBlockVnesh6day-list">
                                                    <li class="list-group-item list-group-item-primary">Бицепс, Тяга нижнего блока внешним хватом! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 20-25кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2 подход - 10 повторений, 25-30кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">3 подход - 10 повторений, 30-35кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">4 подход - 10 повторений, 40-45кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">5 подход - 4-5 повторений, 45-50кг вес отягощения!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseBicepsMolotki6day" role="tabpanel" aria-labelledby="list-baseBicepsMolotki6day-list">

                                                    <li class="list-group-item list-group-item-primary">Бицепс, Скамья скотта! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений, 20-25кг вес отягощения!</li>
                                                </div>

                                                <div class="tab-pane fade" id="list-baseBicepsMolotki6day" role="tabpanel" aria-labelledby="list-baseBicepsMolotki6day-list">
                                                    <li class="list-group-item list-group-item-primary">Бицепс, Молотки! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений, гантели по 5-10кг!</li>
                                                </div>

                                                <div class="tab-pane fade" id="list-basePressMahi6day" role="tabpanel" aria-labelledby="list-basePressMahi6day-list">
                                                    <li class="list-group-item list-group-item-primary">Пресс, махи ногами<?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений, без веса отягощения!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePress6day" role="tabpanel" aria-labelledby="list-basePress6day-list">
                                                    <li class="list-group-item list-group-item-primary">Пресс, скручивание<?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений, без веса отягощения!</li>
                                                </div>

                                                <div class="tab-pane fade" id="list-basePressKosie6day" role="tabpanel" aria-labelledby="list-basePressKosie6day-list">
                                                    <li class="list-group-item list-group-item-primary">Пресс, косые мышцы живота! Наклоны в стороны с гантелей в руке,
                                                        после завершения упражнения взять гантелю в другую руку и повторить(вес гантели на выбор)! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseAfter6day" role="tabpanel" aria-labelledby="list-baseAfter6day-list">
                                                    <?=$after_training ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>





                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingBase7Day">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase7Day" aria-expanded="false" aria-controls="collapseBase7Day">
                                        День 7, Отдых!
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseBase7Day" class="collapse" aria-labelledby="headingBase7Day" data-parent="#accordionExample3">
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
                    Неделя тренировок #2
                </button>
            </h5>
        </div>
        <div id="collapseTraining3Week" class="collapse" aria-labelledby="headingTraining3Week" data-parent="#accordionExample">
            <div class="card-body">

                Начинается неделя, для укрепления показателей выносливости!
                <div class="accordion" id="accordionExample4">

                    <?php if($training >= 4) { ?>

                        <div class="card">
                            <div class="card-header" id="headingBase8Day">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase8Day" aria-expanded="false" aria-controls="collapseBase8Day">
                                        День 8, Отдых!
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseBase8Day" class="collapse" aria-labelledby="headingBase8Day" data-parent="#accordionExample4">
                                <div class="card-body">
                                    <?=$break_days?>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingBase9Day">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseBase9Day" aria-expanded="true" aria-controls="collapseBase9Day">
                                        День 9, Ноги и Плечи! Пампинговая тренировка!
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseBase9Day" class="collapse" aria-labelledby="headingBase9Day" data-parent="#accordionExample4">
                                <div class="card-body">
                                    <!--                                 Описание 9 дня тренировки!-->
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="list-group" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action" id="list-baseNutrition9day-list" data-toggle="list" href="#list-baseNutrition9day" role="tab" aria-controls="baseNutrition9day">Питание</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseRazminka9day-list" data-toggle="list" href="#list-baseRazminka9day" role="tab" aria-controls="baseRazminka9day">Разминка</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePrised9day-list" data-toggle="list" href="#list-basePrised9day" role="tab" aria-controls="basePrised9day">Присед!</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseKvadro9day-list" data-toggle="list" href="#list-baseKvadro9day" role="tab" aria-controls="baseKvadro9day">Квадрицепс</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseBiceps9day-list" data-toggle="list" href="#list-baseBiceps9day" role="tab" aria-controls="baseBiceps9day">Бицепс</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePrivod9day-list" data-toggle="list" href="#list-basePrivod9day" role="tab" aria-controls="basePrivod9day">Приводящие мышцы</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseVneshStorBedra9day-list" data-toggle="list" href="#list-baseVneshStorBedra9day" role="tab" aria-controls="baseVneshStorBedra9day">Внешняя сторона бедра</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseGolen9day-list" data-toggle="list" href="#list-baseGolen9day" role="tab" aria-controls="baseGolen9day">Голень</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePlechiShimChest9day-list" data-toggle="list" href="#list-basePlechiShimChest9day" role="tab" aria-controls="basePlechiShimChest9day">Плечи, жим</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePlechiShimBack9day-list" data-toggle="list" href="#list-basePlechiShimBack9day" role="tab" aria-controls="basePlechiShimBack9day">Плечи, жим</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePlechiShimGanteli9day-list" data-toggle="list" href="#list-basePlechiShimGanteli9day" role="tab" aria-controls="basePlechiShimGanteli9day">Плечи, жим</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePlechiVStoroni9day-list" data-toggle="list" href="#list-basePlechiVStoroni9day" role="tab" aria-controls="basePlechiVStoroni9day">Плечи, в стороны</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePlechiPered9day-list" data-toggle="list" href="#list-basePlechiPered9day" role="tab" aria-controls="basePlechiPered9day">Плечи, перед собой</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePlechiVNaklone9day-list" data-toggle="list" href="#list-basePlechiVNaklone9day" role="tab" aria-controls="basePlechiVNaklone9day">Плечи, в наклоне</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePressMahi9day-list" data-toggle="list" href="#list-basePressMahi9day" role="tab" aria-controls="basePressMahi9day">Пресс, махи ногами</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePress9day-list" data-toggle="list" href="#list-basePress9day" role="tab" aria-controls="basePress9day">Пресс, скручивание</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePressKosie9day-list" data-toggle="list" href="#list-basePressKosie9day" role="tab" aria-controls="basePressKosie9day">Пресс, косые мышцы</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseAfter9day-list" data-toggle="list" href="#list-baseAfter9day" role="tab" aria-controls="baseAfter9day">Завершение</a>
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
                                                    <li class="list-group-item list-group-item-primary">Присед! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, без отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2,3,4,5,6 подход - 15 повторений, <?=$weight50?></li>
                                                    <?=$break5min?>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseKvadro9day" role="tabpanel" aria-labelledby="list-baseKvadro9day-list">
                                                    <li class="list-group-item list-group-item-primary">Разгибание ног в тренажере сидя, Квадрицепс бедра! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 15 повторений, <?=$weight50?></li>
                                                    <?=$break5min?>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseBiceps9day" role="tabpanel" aria-labelledby="list-baseBiceps9day-list">
                                                    <li class="list-group-item list-group-item-primary">Сгибание ног в тренажере лёжа, Бицепс бедра! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 15 повторений, <?=$weight50?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePrivod9day" role="tabpanel" aria-labelledby="list-basePrivod9day-list">
                                                    <li class="list-group-item list-group-item-primary">Сведение ног сидя, приводящие мышцы бедра! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 15 повторений, <?=$weight50?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseVneshStorBedra9day" role="tabpanel" aria-labelledby="list-baseVneshStorBedra9day-list">
                                                    <li class="list-group-item list-group-item-primary">Разведение ног сидя, внешняя сторона бедра! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 15 повторений, <?=$weight50?></li>
                                                </div>

                                                <div class="tab-pane fade" id="list-baseGolen9day" role="tabpanel" aria-labelledby="list-baseGolen9day-list">
                                                    <li class="list-group-item list-group-item-primary">Голень, подъем на носки в тренажере стоя! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 15 повторений, <?=$weight50?></li>
                                                </div>

                                                <div class="tab-pane fade" id="list-basePlechiShimChest9day" role="tabpanel" aria-labelledby="list-basebasePlechiShimChest9day-list">
                                                    <li class="list-group-item list-group-item-primary">Жим штанги от груди сидя! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 15 повторений, со штангой (20кг - вес штагни)!</li>
                                                    <li class="list-group-item list-group-item-success">2,3,4,5,6 подход - 15 повторений, <?=$weight50?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePlechiShimBack9day" role="tabpanel" aria-labelledby="list-basePlechiShimBack9day-list">
                                                    <li class="list-group-item list-group-item-primary">Жим штанги за голову сидя! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 15 повторений, <?=$weight50?></li>

                                                </div>
                                                <div class="tab-pane fade" id="list-basePlechiShimGanteli9day" role="tabpanel" aria-labelledby="list-basePlechiShimGanteli9day-list">
                                                    <li class="list-group-item list-group-item-primary">Жим гантелями сидя! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 10 повторений, <?=$weight50?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePlechiVStoroni9day" role="tabpanel" aria-labelledby="list-basePlechiVStoroni9day-list">
                                                    <li class="list-group-item list-group-item-primary">Подъём гантелей в стороны стоя! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 10 повторений, <?=$weight50?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePlechiPered9day" role="tabpanel" aria-labelledby="list-basePlechiPered9day-list">
                                                    <li class="list-group-item list-group-item-primary">Подъём гантелей перед собой стоя! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 10 повторений, <?=$weight50?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePlechiVNaklone9day" role="tabpanel" aria-labelledby="list-basePlechiVNaklone9day-list">
                                                    <li class="list-group-item list-group-item-primary">Подъём гантелей в стороны в наклоне сидя! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 10 повторений, <?=$weight50?></li>
                                                </div>

                                                <div class="tab-pane fade" id="list-basePressMahi9day" role="tabpanel" aria-labelledby="list-basePressMahi9day-list">
                                                    <li class="list-group-item list-group-item-primary">Пресс, махи ногами<?=$break?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений, без веса отягощения!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePress9day" role="tabpanel" aria-labelledby="list-basePress9day-list">
                                                    <li class="list-group-item list-group-item-primary">Пресс, скручивание<?=$break?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений, без веса отягощения!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePressKosie9day" role="tabpanel" aria-labelledby="list-basePressKosie9day-list">
                                                    <li class="list-group-item list-group-item-primary">Пресс, косые мышцы живота! Наклоны в стороны с гантелей в руке,
                                                        после завершения упражнения взять гантелю в другую руку и повторить(вес гантели на выбор)! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений!</li>
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
                            <div id="collapseBase10Day" class="collapse" aria-labelledby="headingBase10Day" data-parent="#accordionExample4">
                                <div class="card-body">
                                    <?=$break_days?>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

                    <?php if($training >= 5) { ?>

                        <!--                                 Описание 11 тренировки!-->
                        <div class="card">
                            <div class="card-header" id="headingBase11Day">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase11Day" aria-expanded="false" aria-controls="collapseBase11Day">
                                        День 11, Спина и Трицепс!
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseBase11Day" class="collapse" aria-labelledby="headingBase11Day" data-parent="#accordionExample4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="list-group" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action" id="list-baseNutrition11day-list" data-toggle="list" href="#list-baseNutrition11day" role="tab" aria-controls="baseNutrition11day">Питание</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseRazminka11day-list" data-toggle="list" href="#list-baseRazminka11day" role="tab" aria-controls="baseRazminka11day">Разминка</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseBackGrud11day-list" data-toggle="list" href="#list-baseBackGrud11day" role="tab" aria-controls="baseBackGrud11day">Спина, верхний блок!</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseBackZaSpiny11day-list" data-toggle="list" href="#list-baseBackZaSpiny11day" role="tab" aria-controls="baseBackZaSpiny11day">Спина, верхний блок!</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseBackGorizTyaga11day-list" data-toggle="list" href="#list-baseBackGorizTyaga11day" role="tab" aria-controls="baseBackGorizTyaga11day">Спина, нижний блок!</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseBackGorizTyagaNaklon11day-list" data-toggle="list" href="#list-baseBackGorizTyagaNaklon11day" role="tab" aria-controls="baseBackGorizTyagaNaklon11day">Спина, тяга в наклоне!</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseTricepsSidia11day-list" data-toggle="list" href="#list-baseTricepsSidia11day" role="tab" aria-controls="baseTricepsSidia11day">Трицепс, отжимания!</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseTricepsVerh11day-list" data-toggle="list" href="#list-baseTricepsVerh11day" role="tab" aria-controls="baseTricepsVerh11day">Трицепс, верх. блок!</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseTricepsRazgib11day-list" data-toggle="list" href="#list-baseTricepsRazgib11day" role="tab" aria-controls="baseTricepsRazgib11day">Трицепс, разгибание!</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseTrap11day-list" data-toggle="list" href="#list-baseTrap11day" role="tab" aria-controls="baseTrap11day">Трапеции!</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseGiper11day-list" data-toggle="list" href="#list-baseGiper11day" role="tab" aria-controls="baseGiper11day">Гиперэкстензия!</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePressMahi11day-list" data-toggle="list" href="#list-basePressMahi11day" role="tab" aria-controls="basePressMahi11day">Пресс, махи ногами</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePress11day-list" data-toggle="list" href="#list-basePress11day" role="tab" aria-controls="basePress11day">Пресс</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePressKosie11day-list" data-toggle="list" href="#list-basePressKosie11day" role="tab" aria-controls="basePressKosie11day">Пресс, косые мышцы</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseAfter11day-list" data-toggle="list" href="#list-baseAfter11day" role="tab" aria-controls="baseAfter11day">Завершение</a>
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
                                                    <li class="list-group-item list-group-item-primary">Тяга верхнего блока к груди! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 15 повторений, 15-20кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2,3,4,5,6 подход - 15 повторений, <?=$weight50?></li>
                                                </div>

                                                <div class="tab-pane fade" id="list-baseBackZaSpiny11day" role="tabpanel" aria-labelledby="list-baseBackZaSpiny11day-list">
                                                    <li class="list-group-item list-group-item-primary">Тяга верхнего блока за голову! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 15 повторений, <?=$weight50?></li>
                                                </div>

                                                <div class="tab-pane fade" id="list-baseBackGorizTyaga11day" role="tabpanel" aria-labelledby="list-baseBackGorizTyaga11day-list">
                                                    <li class="list-group-item list-group-item-primary">Тяга нижнего блока сидя! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 15 повторений, 20-25кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2,3,4,5,6 подход - 15 повторений, <?=$weight50?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseBackGorizTyagaNaklon11day" role="tabpanel" aria-labelledby="list-baseBackGorizTyagaNaklon11day-list">
                                                    <li class="list-group-item list-group-item-primary">Тяга гантели в наклоне(на каждую руку)! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 15 повторений, <?=$weight50?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseTricepsSidia11day" role="tabpanel" aria-labelledby="list-baseTricepsSidia11day-list">
                                                    <li class="list-group-item list-group-item-primary">Отжимания от скамьи! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, без веса отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2,3,4,5,6 подход - 15 повторений, <?=$weight50?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseTricepsVerh11day" role="tabpanel" aria-labelledby="list-baseTricepsVerh11day-list">
                                                    <li class="list-group-item list-group-item-primary">Разгибание рук на верхнем блоке! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 15 повторений, <?=$weight50?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseTricepsRazgib11day" role="tabpanel" aria-labelledby="list-baseTricepsRazgib11day-list">
                                                    <li class="list-group-item list-group-item-primary">Разгибание руки в наклоне(на каждую руку)! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 15 повторений, <?=$weight50?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseTrap11day" role="tabpanel" aria-labelledby="list-baseTrap11day-list">
                                                    <li class="list-group-item list-group-item-primary">Трапеции, шраги со штангой или гантелями! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 10-15кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2,3,4,5,6 подход - 15 повторений, <?=$weight50?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseGiper11day" role="tabpanel" aria-labelledby="list-baseGiper11day-list">
                                                    <li class="list-group-item list-group-item-primary">Гиперэкстензия! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 10 повторений, без веса отягощения!!</li>
                                                </div>

                                                <div class="tab-pane fade" id="list-basePressMahi11day" role="tabpanel" aria-labelledby="list-basePressMahi11day-list">
                                                    <li class="list-group-item list-group-item-primary">Пресс, махи ногами <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений, без веса отягощения!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePress11day" role="tabpanel" aria-labelledby="list-basePress11day-list">
                                                    <li class="list-group-item list-group-item-primary">Пресс, скручивание <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений, без веса отягощения!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePressKosie11day" role="tabpanel" aria-labelledby="list-basePressKosie11day-list">
                                                    <li class="list-group-item list-group-item-primary">Пресс, косые мышцы живота! Наклоны в стороны с гантелей в руке,
                                                        после завершения упражнения взять гантелю в другую руку и повторить(вес гантели на выбор)! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений!</li>
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
                            <div id="collapseBase12Day" class="collapse" aria-labelledby="headingBase12Day" data-parent="#accordionExample4">
                                <div class="card-body">
                                    <?=$break_days?>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

                    <?php if($training >= 6) { ?>

                        <!--                                 Описание 13 дня тренировки!-->
                        <div class="card">
                            <div class="card-header" id="headingBase13Day">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase13Day" aria-expanded="false" aria-controls="collapseBase13Day">
                                        День 13, Грудь и Бицепс!
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseBase13Day" class="collapse" aria-labelledby="headingBase13Day" data-parent="#accordionExample4">
                                <div class="card-body">


                                    <div class="row">
                                        <div class="col-3">
                                            <div class="list-group" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action" id="list-baseNutrition13day-list" data-toggle="list" href="#list-baseNutrition13day" role="tab" aria-controls="baseNutrition13day">Питание</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseRazminka13day-list" data-toggle="list" href="#list-baseRazminka13day" role="tab" aria-controls="baseRazminka13day">Разминка</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseChestNaklon13day-list" data-toggle="list" href="#list-baseChestNaklon13day" role="tab" aria-controls="baseChestNaklon13day">Грудь, наклонная</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseChestShim13day-list" data-toggle="list" href="#list-baseChestShim13day" role="tab" aria-controls="baseChestShim13day">Грудь, жим</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseChestRazvod13day-list" data-toggle="list" href="#list-baseChestRazvod13day" role="tab" aria-controls="baseChestRazvod13day">Грудь, разводка</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePullOver13day-list" data-toggle="list" href="#list-basePullOver13day" role="tab" aria-controls="basePullOver13day">Пуловер</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseBicepsBlock13day-list" data-toggle="list" href="#list-baseBicepsBlock13day" role="tab" aria-controls="baseBicepsBlock13day">Бицепс, нижний блок</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseBicepsBlockVnesh13day-list" data-toggle="list" href="#list-baseBicepsBlockVnesh13day" role="tab" aria-controls="baseBicepsBlockVnesh13day">Бицепс, нижний блок</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseBicepsScott13day-list" data-toggle="list" href="#list-baseBicepsScott13day" role="tab" aria-controls="baseBicepsScott13day">Бицепс, скотт</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseBicepsMolotki13day-list" data-toggle="list" href="#list-baseBicepsMolotki13day" role="tab" aria-controls="baseBicepsMolotki13day">Бицепс, молотки</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePressMahi13day-list" data-toggle="list" href="#list-basePressMahi13day" role="tab" aria-controls="basePressMahi13day">Пресс, махи ногами</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePress13day-list" data-toggle="list" href="#list-basePress13day" role="tab" aria-controls="basePress13day">Пресс</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePressKosie13day-list" data-toggle="list" href="#list-basePressKosie13day" role="tab" aria-controls="basePressKosie13day">Пресс, косые мышцы</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseAfter13day-list" data-toggle="list" href="#list-baseAfter13day" role="tab" aria-controls="baseAfter13day">Завершение</a>
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
                                                    <li class="list-group-item list-group-item-primary">Жим на наклонной! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 20-25кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2,3,4,5,6 подход - 15 повторений, <?=$weight50?>!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseChestShim13day" role="tabpanel" aria-labelledby="list-baseChestShim13day-list">
                                                    <li class="list-group-item list-group-item-primary">Жим лёжа! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 15 повторений, <?=$weight50?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseChestRazvod13day" role="tabpanel" aria-labelledby="list-baseChestRazvod13day-list">
                                                    <li class="list-group-item list-group-item-primary">Разводка рук в стороны на наклонной!  <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 15 повторений, <?=$weight50?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePullOver13day" role="tabpanel" aria-labelledby="list-basePullOver13day-list">
                                                    <li class="list-group-item list-group-item-primary">Пуловер! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, гантели по 5-10кг! !</li>
                                                    <li class="list-group-item list-group-item-success">2,3,4,5,6 подход - 15 повторений, <?=$weight50?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseBicepsBlock13day" role="tabpanel" aria-labelledby="list-baseBicepsBlock13day-list">
                                                    <li class="list-group-item list-group-item-primary">Бицепс, Тяга нижнего блока внутренним хватом! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 15 повторений, <?=$weight50?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseBicepsBlockVnesh13day" role="tabpanel" aria-labelledby="list-baseBicepsBlockVnesh13day-list">
                                                    <li class="list-group-item list-group-item-primary">Бицепс, Тяга нижнего блока внешним хватом! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 15 повторений, <?=$weight50?></li>
                                                </div>

                                                <div class="tab-pane fade" id="list-baseBicepsScott13day" role="tabpanel" aria-labelledby="list-baseBicepsScott13day-list">
                                                    <li class="list-group-item list-group-item-primary">Бицепс, Изолированное сгибание рук со штангой! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 15 повторений, <?=$weight50?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseBicepsMolotki13day" role="tabpanel" aria-labelledby="list-baseBicepsMolotki13day-list">
                                                    <li class="list-group-item list-group-item-primary">Бицепс, Молотки! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 15 повторений, <?=$weight50?></li>
                                                </div>

                                                <div class="tab-pane fade" id="list-basePressMahi13day" role="tabpanel" aria-labelledby="list-basePressMahi13day-list">
                                                    <li class="list-group-item list-group-item-primary">Пресс, махи ногами вверх<?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 10 повторений, без веса отягощения!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePress13day" role="tabpanel" aria-labelledby="list-basePress13day-list">
                                                    <li class="list-group-item list-group-item-primary">Пресс, скручивание<?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 10 повторений, без веса отягощения!</li>
                                                </div>

                                                <div class="tab-pane fade" id="list-basePressKosie13day" role="tabpanel" aria-labelledby="list-basePressKosie13day-list">
                                                    <li class="list-group-item list-group-item-primary">Пресс, косые мышцы живота! Наклоны в стороны с гантелей в руке,
                                                        после завершения упражнения взять гантелю в другую руку и повторить(вес гантели на выбор)! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 10 повторений!</li>
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
                                        День 14, Отдых!
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseBase14Day" class="collapse" aria-labelledby="headingBase14Day" data-parent="#accordionExample4">
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
    <!--Неделя тренирвок 3-->
    <div class="card">
        <div class="card-header" id="headingTraining4Week">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTraining4Week" aria-expanded="false" aria-controls="collapseTraining4Week">
                    Неделя тренировок #3
                </button>
            </h5>
        </div>
        <div id="collapseTraining4Week" class="collapse" aria-labelledby="headingTraining4Week" data-parent="#accordionExample">
            <div class="card-body">

                Начинается неделя, для укрепления ваших силовых показателей!
                <div class="accordion" id="accordionExample5">

                    <?php if($training >= 7) { ?>

                        <div class="card">
                            <div class="card-header" id="headingBase15Day">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase15Day" aria-expanded="false" aria-controls="collapseBase15Day">
                                        День 15, Отдых!
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseBase15Day" class="collapse" aria-labelledby="headingBase15Day" data-parent="#accordionExample5">
                                <div class="card-body">
                                    <?=$break_days?>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingBase16Day">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseBase16Day" aria-expanded="true" aria-controls="collapseBase16Day">
                                        День 16, Ноги и Плечи!
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseBase16Day" class="collapse" aria-labelledby="headingBase16Day" data-parent="#accordionExample5">
                                <div class="card-body">
                                    <!--                                 Описание 9 дня тренировки!-->
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="list-group" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action" id="list-baseNutrition16day-list" data-toggle="list" href="#list-baseNutrition16day" role="tab" aria-controls="baseNutrition16day">Питание</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseRazminka16day-list" data-toggle="list" href="#list-baseRazminka16day" role="tab" aria-controls="baseRazminka16day">Разминка</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePrised16day-list" data-toggle="list" href="#list-basePrised16day" role="tab" aria-controls="basePrised16day">Присед!</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePrisedShim16day-list" data-toggle="list" href="#list-basePrisedShim16day" role="tab" aria-controls="basePrisedShim16day">Жим ногами!</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseKvadro16day-list" data-toggle="list" href="#list-baseKvadro16day" role="tab" aria-controls="baseKvadro16day">Квадрицепс</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseBiceps16day-list" data-toggle="list" href="#list-baseBiceps16day" role="tab" aria-controls="baseVipadi16day">Бицепс</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePrivod16day-list" data-toggle="list" href="#list-basePrivod16day" role="tab" aria-controls="basePrivod16day">Приводящие мышцы</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseVneshStorBedra16day-list" data-toggle="list" href="#list-baseVneshStorBedra16day" role="tab" aria-controls="baseVneshStorBedra16day">Внешняя сторона бедра</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseGolen16day-list" data-toggle="list" href="#list-baseGolen16day" role="tab" aria-controls="baseGolen16day">Голень</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePlechiShimChest16day-list" data-toggle="list" href="#list-basePlechiShimChest16day" role="tab" aria-controls="basePlechiShimChest16day">Плечи, жим</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePlechiShimBack16day-list" data-toggle="list" href="#list-basePlechiShimBack16day" role="tab" aria-controls="basePlechiShimBack16day">Плечи, жим</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePlechiShimGanteli16day-list" data-toggle="list" href="#list-basePlechiShimGanteli16day" role="tab" aria-controls="basePlechiShimGanteli16day">Плечи, жим</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePlechiVStoroni16day-list" data-toggle="list" href="#list-basePlechiVStoroni16day" role="tab" aria-controls="basePlechiVStoroni16day">Плечи, в стороны</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePlechiPered16day-list" data-toggle="list" href="#list-basePlechiPered16day" role="tab" aria-controls="basePlechiPered16day">Плечи, перед собой</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePlechiVNaklone16day-list" data-toggle="list" href="#list-basePlechiVNaklone16day" role="tab" aria-controls="basePlechiVNaklone16day">Плечи, в наклоне</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePressMahi16day-list" data-toggle="list" href="#list-basePressMahi16day" role="tab" aria-controls="basePressMahi16day">Пресс, махи ногами</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePress16day-list" data-toggle="list" href="#list-basePress16day" role="tab" aria-controls="basePress16day">Пресс, скручивание</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePressKosie16day-list" data-toggle="list" href="#list-basePressKosie16day" role="tab" aria-controls="basePressKosie16day">Пресс, косые мышцы</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseAfter16day-list" data-toggle="list" href="#list-baseAfter16day" role="tab" aria-controls="baseAfter16day">Завершение</a>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade  show active" id="list-baseNutrition16day" role="tabpanel" aria-labelledby="list-baseNutrition16day-list">
                                                    <?=$eggs?>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseRazminka16day" role="tabpanel" aria-labelledby="list-baseRazminka16day-list">
                                                    <?=$razminka?>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePrised16day" role="tabpanel" aria-labelledby="list-basePrised16day-list">
                                                    <li class="list-group-item list-group-item-primary">Присед! <?=$time_power?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, без отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2,3,4,5 подход - 5 повторений, <?=$weight80?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePrisedShim16day" role="tabpanel" aria-labelledby="list-basePrisedShim16day-list">
                                                    <li class="list-group-item list-group-item-primary">Жим ногами! <?=$time_power?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений, <?=$weight80?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseKvadro16day" role="tabpanel" aria-labelledby="list-baseKvadro16day-list">
                                                    <li class="list-group-item list-group-item-primary">Разгибание ног в тренажере сидя, Квадрицепс бедра! <?=$time_power?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений, <?=$weight80?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseBiceps16day" role="tabpanel" aria-labelledby="list-baseBiceps16day-list">
                                                    <li class="list-group-item list-group-item-primary">Сгибание ног в тренажере лёжа, Бицепс бедра! <?=$time_power?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений, <?=$weight80?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePrivod16day" role="tabpanel" aria-labelledby="list-basePrivod16day-list">
                                                    <li class="list-group-item list-group-item-primary">Сведение ног сидя, приводящие мышцы бедра! <?=$time_power?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений, <?=$weight80?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseVneshStorBedra16day" role="tabpanel" aria-labelledby="list-baseVneshStorBedra16day-list">
                                                    <li class="list-group-item list-group-item-primary">Разведение ног сидя, внешняя сторона бедра! <?=$time_power?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений, <?=$weight80?></li>
                                                </div>

                                                <div class="tab-pane fade" id="list-baseGolen16day" role="tabpanel" aria-labelledby="list-baseGolen16day-list">
                                                    <li class="list-group-item list-group-item-primary">Голень, подъем на носки в тренажере стоя! <?=$time_power?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений, <?=$weight80?></li>
                                                </div>

                                                <div class="tab-pane fade" id="list-basePlechiShimChest16day" role="tabpanel" aria-labelledby="list-basebasePlechiShimChest16day-list">
                                                    <li class="list-group-item list-group-item-primary">Жим штанги от груди сидя! <?=$time_power?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, со штангой (20кг - вес штагни)!</li>
                                                    <li class="list-group-item list-group-item-success">2,3,4,5 подход - 5 повторений, <?=$weight80?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePlechiShimBack16day" role="tabpanel" aria-labelledby="list-basePlechiShimBack16day-list">
                                                    <li class="list-group-item list-group-item-primary">Жим штанги за голову сидя! <?=$time_power?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений, <?=$weight80?></li>

                                                </div>
                                                <div class="tab-pane fade" id="list-basePlechiShimGanteli16day" role="tabpanel" aria-labelledby="list-basePlechiShimGanteli16day-list">
                                                    <li class="list-group-item list-group-item-primary">Жим гантелями сидя! <?=$time_power?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений, <?=$weight80?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePlechiVStoroni16day" role="tabpanel" aria-labelledby="list-basePlechiVStoroni16day-list">
                                                    <li class="list-group-item list-group-item-primary">Подъём гантелей в стороны стоя! <?=$time_power?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений, <?=$weight80?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePlechiPered16day" role="tabpanel" aria-labelledby="list-basePlechiPered16day-list">
                                                    <li class="list-group-item list-group-item-primary">Подъём гантелей перед собой стоя! <?=$time_power?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений, <?=$weight80?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePlechiVNaklone16day" role="tabpanel" aria-labelledby="list-basePlechiVNaklone16day-list">
                                                    <li class="list-group-item list-group-item-primary">Подъём гантелей в стороны в наклоне сидя! <?=$time_power?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений, <?=$weight80?></li>
                                                </div>

                                                <div class="tab-pane fade" id="list-basePressMahi16day" role="tabpanel" aria-labelledby="list-basePressMahi16day-list">
                                                    <li class="list-group-item list-group-item-primary">Пресс, махи ногами вверх<?=$break?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений, без веса отягощения!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePress16day" role="tabpanel" aria-labelledby="list-basePress16day-list">
                                                    <li class="list-group-item list-group-item-primary">Пресс, скручивание<?=$break?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений, без веса отягощения!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePressKosie16day" role="tabpanel" aria-labelledby="list-basePressKosie16day-list">
                                                    <li class="list-group-item list-group-item-primary">Пресс, косые мышцы живота! Наклоны в стороны с гантелей в руке,
                                                        после завершения упражнения взять гантелю в другую руку и повторить(вес гантели на выбор)! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseAfter16day" role="tabpanel" aria-labelledby="list-baseAfter16day-list">
                                                    <?=$after_training ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header" id="headingBase17Day">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase17Day" aria-expanded="false" aria-controls="collapseBase17Day">
                                        День 17, Отдых!
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseBase17Day" class="collapse" aria-labelledby="headingBase17Day" data-parent="#accordionExample5">
                                <div class="card-body">
                                    <?=$break_days?>
                                </div>
                            </div>
                        </div>


                    <?php } ?>

                    <?php if($training >= 8) { ?>

                        <!--                                 Описание 18 тренировки!-->
                        <div class="card">
                            <div class="card-header" id="headingBase18Day">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase18Day" aria-expanded="false" aria-controls="collapseBase18Day">
                                        День 18, Спина и Трицепс!
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseBase18Day" class="collapse" aria-labelledby="headingBase18Day" data-parent="#accordionExample5">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="list-group" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action" id="list-baseNutrition18day-list" data-toggle="list" href="#list-baseNutrition18day" role="tab" aria-controls="baseNutrition18day">Питание</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseRazminka18day-list" data-toggle="list" href="#list-baseRazminka18day" role="tab" aria-controls="baseRazminka18day">Разминка</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseBackGrud18day-list" data-toggle="list" href="#list-baseBackGrud18day" role="tab" aria-controls="baseBackGrud18day">Спина, верхний блок!</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseBackZaSpiny18day-list" data-toggle="list" href="#list-baseBackZaSpiny18day" role="tab" aria-controls="baseBackZaSpiny18day">Спина, верхний блок!</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseBackGorizTyaga18day-list" data-toggle="list" href="#list-baseBackGorizTyaga18day" role="tab" aria-controls="baseBackGorizTyaga18day">Спина, гориз. блок!</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseBackGorizTyagaNaklon18day-list" data-toggle="list" href="#list-baseBackGorizTyagaNaklon18day" role="tab" aria-controls="baseBackGorizTyagaNaklon18day">Спина, тяга в наклоне!</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseTricepsSidia18day-list" data-toggle="list" href="#list-baseTricepsSidia18day" role="tab" aria-controls="baseTricepsSidia18day">Трицепс, отжимания!</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseTricepsVerh18day-list" data-toggle="list" href="#list-baseTricepsVerh18day" role="tab" aria-controls="baseTricepsVerh18day">Трицепс, верх. блок!</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseTricepsRazgib18day-list" data-toggle="list" href="#list-baseTricepsRazgib18day" role="tab" aria-controls="baseTricepsRazgib18day">Трицепс, разгибание!</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseTrap18day-list" data-toggle="list" href="#list-baseTrap18day" role="tab" aria-controls="baseTrap18day">Трапеции!</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseGiper18day-list" data-toggle="list" href="#list-baseGiper18day" role="tab" aria-controls="baseGiper18day">Гиперэкстензия!</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePressMahi18day-list" data-toggle="list" href="#list-basePressMahi18day" role="tab" aria-controls="basePressMahi18day">Пресс, махи ногами</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePress18day-list" data-toggle="list" href="#list-basePress18day" role="tab" aria-controls="basePress18day">Пресс</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePressKosie18day-list" data-toggle="list" href="#list-basePressKosie18day" role="tab" aria-controls="basePressKosie18day">Пресс, косые мышцы</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseAfter18day-list" data-toggle="list" href="#list-baseAfter18day" role="tab" aria-controls="baseAfter18day">Завершение</a>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="list-baseNutrition18day" role="tabpanel" aria-labelledby="list-baseNutrition18day-list">
                                                    <?=$eggs?>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseRazminka18day" role="tabpanel" aria-labelledby="list-baseRazminka18day-list">
                                                    <?=$razminka?>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseBackGrud18day" role="tabpanel" aria-labelledby="list-baseBackGrud18day-list">
                                                    <li class="list-group-item list-group-item-primary">Тяга верхнего блока к груди! <?=$time_power?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 15-20кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2,3,4,5 подход - 5 повторений, <?=$weight80?></li>
                                                </div>

                                                <div class="tab-pane fade" id="list-baseBackZaSpiny18day" role="tabpanel" aria-labelledby="list-baseBackZaSpiny18day-list">
                                                    <li class="list-group-item list-group-item-primary">Тяга верхнего блока за спину! <?=$time_power?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений, <?=$weight80?></li>
                                                </div>

                                                <div class="tab-pane fade" id="list-baseBackGorizTyaga18day" role="tabpanel" aria-labelledby="list-baseBackGorizTyaga18day-list">
                                                    <li class="list-group-item list-group-item-primary">Тяга горизонтального блока сидя! <?=$time_power?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 20-25кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2,3,4,5 подход - 5 повторений, <?=$weight80?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseBackGorizTyagaNaklon18day" role="tabpanel" aria-labelledby="list-baseBackGorizTyagaNaklon18day-list">
                                                    <li class="list-group-item list-group-item-primary">Тяга гантели в наклоне(на каждую руку)! <?=$time_power?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений,  <?=$weight80?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseTricepsSidia18day" role="tabpanel" aria-labelledby="list-baseTricepsSidia18day-list">
                                                    <li class="list-group-item list-group-item-primary">Отжимания от скамьи! <?=$time_power?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, без веса отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2,3,4,5 подход - 5 повторений, <?=$weight80?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseTricepsVerh18day" role="tabpanel" aria-labelledby="list-baseTricepsVerh18day-list">
                                                    <li class="list-group-item list-group-item-primary">Разгибание рук на верхнем блоке! <?=$time_power?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений, <?=$weight80?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseTricepsRazgib18day" role="tabpanel" aria-labelledby="list-baseTricepsRazgib18day-list">
                                                    <li class="list-group-item list-group-item-primary">Разгибание руки в наклоне(на каждую руку)! <?=$time_power?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений, <?=$weight80?></li>
                                                    <?=$break5min?>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseTrap18day" role="tabpanel" aria-labelledby="list-baseTrap18day-list">
                                                    <li class="list-group-item list-group-item-primary">Трапеции, шраги со штангой или гантелями! <?=$time_power?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 10-15кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2,3,4,5 подход - 5 повторений, <?=$weight80?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseGiper18day" role="tabpanel" aria-labelledby="list-baseGiper18day-list">
                                                    <li class="list-group-item list-group-item-primary">Гиперэкстензия! <?=$time_power?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений, без веса отягощения!!</li>
                                                </div>

                                                <div class="tab-pane fade" id="list-basePressMahi18day" role="tabpanel" aria-labelledby="list-basePressMahi18day-list">
                                                    <li class="list-group-item list-group-item-primary">Пресс, махи ногами вверх <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений, без веса отягощения!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePress18day" role="tabpanel" aria-labelledby="list-basePress18day-list">
                                                    <li class="list-group-item list-group-item-primary">Пресс, скручивание <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений, без веса отягощения!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePressKosie18day" role="tabpanel" aria-labelledby="list-basePressKosie18day-list">
                                                    <li class="list-group-item list-group-item-primary">Пресс, косые мышцы живота! Наклоны в стороны с гантелей в руке,
                                                        после завершения упражнения взять гантелю в другую руку и повторить(вес гантели на выбор)! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseAfter18day" role="tabpanel" aria-labelledby="list-baseAfter18day-list">
                                                    <?=$after_training ?>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <!--                                 Описание 19 дня тренировки!-->
                        <div class="card">
                            <div class="card-header" id="headingBase19Day">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase19Day" aria-expanded="false" aria-controls="collapseBase19Day">
                                        День 19, Отдых!
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseBase19Day" class="collapse" aria-labelledby="headingBase19Day" data-parent="#accordionExample5">
                                <div class="card-body">
                                    <?=$break_days?>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

                    <?php if($training >= 9) { ?>

                        <!--                                 Описание 20 дня тренировки!-->
                        <div class="card">
                            <div class="card-header" id="headingBase20Day">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase20Day" aria-expanded="false" aria-controls="collapseBase20Day">
                                        День 20, Грудь и Бицепс!
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseBase20Day" class="collapse" aria-labelledby="headingBase20Day" data-parent="#accordionExample5">
                                <div class="card-body">


                                    <div class="row">
                                        <div class="col-3">
                                            <div class="list-group" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action" id="list-baseNutrition20day-list" data-toggle="list" href="#list-baseNutrition20day" role="tab" aria-controls="baseNutrition20day">Питание</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseRazminka20day-list" data-toggle="list" href="#list-baseRazminka20day" role="tab" aria-controls="baseRazminka20day">Разминка</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseChestNaklon20day-list" data-toggle="list" href="#list-baseChestNaklon20day" role="tab" aria-controls="baseChestNaklon20day">Грудь, наклонная</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseChestShim20day-list" data-toggle="list" href="#list-baseChestShim20day" role="tab" aria-controls="baseChestShim20day">Грудь, жим</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseChestRazvod20day-list" data-toggle="list" href="#list-baseChestRazvod20day" role="tab" aria-controls="baseChestRazvod20day">Грудь, разводка</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePullOver20day-list" data-toggle="list" href="#list-basePullOver20day" role="tab" aria-controls="basePullOver20day">Пуловер</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseBicepsBlock20day-list" data-toggle="list" href="#list-baseBicepsBlock20day" role="tab" aria-controls="baseBicepsBlock20day">Бицепс, нижний блок</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseBicepsBlockVnesh20day-list" data-toggle="list" href="#list-baseBicepsBlockVnesh20day" role="tab" aria-controls="baseBicepsBlockVnesh20day">Бицепс, нижний блок</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseBicepsSkott20day-list" data-toggle="list" href="#list-baseBicepsSkott20day" role="tab" aria-controls="baseSkott20day">Бицепс, скамья Скотта</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseBicepsMolotki20day-list" data-toggle="list" href="#list-baseBicepsMolotki20day" role="tab" aria-controls="baseBicepsMolotki20day">Бицепс, молотки</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePressMahi20day-list" data-toggle="list" href="#list-basePressMahi20day" role="tab" aria-controls="basePressMahi20day">Пресс, махи ногами</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePress20day-list" data-toggle="list" href="#list-basePress20day" role="tab" aria-controls="basePress20day">Пресс</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePressKosie20day-list" data-toggle="list" href="#list-basePressKosie20day" role="tab" aria-controls="basePressKosie20day">Пресс, косые мышцы</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseAfter20day-list" data-toggle="list" href="#list-baseAfter20day" role="tab" aria-controls="baseAfter20day">Завершение</a>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="list-baseNutrition20day" role="tabpanel" aria-labelledby="list-baseNutrition20day-list">
                                                    <?=$eggs?>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseRazminka20day" role="tabpanel" aria-labelledby="list-baseRazminka20day-list">
                                                    <?=$razminka?>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseChestNaklon20day" role="tabpanel" aria-labelledby="list-baseChestNaklon20day-list">
                                                    <li class="list-group-item list-group-item-primary">Жим на наклонной! <?=$time_power?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 20-25кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2,3,4,5 подход - 5 повторений, <?=$weight80?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseChestShim20day" role="tabpanel" aria-labelledby="list-baseChestShim20day-list">
                                                    <li class="list-group-item list-group-item-primary">Жим лёжа! <?=$time_power?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений, <?=$weight80?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseChestRazvod20day" role="tabpanel" aria-labelledby="list-baseChestRazvod20day-list">
                                                    <li class="list-group-item list-group-item-primary">Разводка рук в стороны на наклонной! <?=$time_power?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений, <?=$weight80?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePullOver20day" role="tabpanel" aria-labelledby="list-basePullOver20day-list">
                                                    <li class="list-group-item list-group-item-primary">Пуловер! <?=$time_power?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, гантели по 5-10кг! !</li>
                                                    <li class="list-group-item list-group-item-success">2,3,4,5 подход - 5 повторений, <?=$weight80?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseBicepsBlock20day" role="tabpanel" aria-labelledby="list-baseBicepsBlock20day-list">
                                                    <li class="list-group-item list-group-item-primary">Бицепс, Тяга нижнего блока внутренним хватом! <?=$time_power?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений, <?=$weight80?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseBicepsBlockVnesh20day" role="tabpanel" aria-labelledby="list-baseBicepsBlockVnesh20day-list">
                                                    <li class="list-group-item list-group-item-primary">Бицепс, Тяга нижнего блока внешним хватом! <?=$time_power?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений, <?=$weight80?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseBicepsMolotki20day" role="tabpanel" aria-labelledby="list-baseBicepsMolotki20day-list">
                                                    <li class="list-group-item list-group-item-primary">Бицепс, Молотки! <?=$time_power?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений, <?=$weight80?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseBicepsSkott20day" role="tabpanel" aria-labelledby="list-baseBicepsSkott20day-list">
                                                    <li class="list-group-item list-group-item-primary">Бицепс, Изолированное сгибание рук со штангой! <?=$time_power?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 5 повторений, <?=$weight80?></li>

                                                </div>

                                                <div class="tab-pane fade" id="list-basePressMahi20day" role="tabpanel" aria-labelledby="list-basePressMahi20day-list">
                                                    <li class="list-group-item list-group-item-primary">Пресс, махи ногами вверх<?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений, без веса отягощения!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePress20day" role="tabpanel" aria-labelledby="list-basePress20day-list">
                                                    <li class="list-group-item list-group-item-primary">Пресс, скручивание<?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений, без веса отягощения!</li>
                                                </div>

                                                <div class="tab-pane fade" id="list-basePressKosie20day" role="tabpanel" aria-labelledby="list-basePressKosie20day-list">
                                                    <li class="list-group-item list-group-item-primary">Пресс, косые мышцы живота! Наклоны в стороны с гантелей в руке,
                                                        после завершения упражнения взять гантелю в другую руку и повторить(вес гантели на выбор)! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseAfter20day" role="tabpanel" aria-labelledby="list-baseAfter20day-list">
                                                    <?=$after_training ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingBase21Day">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase21Day" aria-expanded="false" aria-controls="collapseBase21Day">
                                        День 21, Отдых!
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseBase21Day" class="collapse" aria-labelledby="headingBase21Day" data-parent="#accordionExample5">
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


    <!--    Последняя неделя тренировок-->

    <div class="card">
        <div class="card-header" id="headingTraining5Week">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTraining5Week" aria-expanded="false" aria-controls="collapseTraining5Week">
                    Неделя тренировок #4
                </button>
            </h5>
        </div>
        <div id="collapseTraining5Week" class="collapse" aria-labelledby="headingTraining5Week" data-parent="#accordionExample">
            <div class="card-body">

                Начинается неделя, для укрепления показателей выносливости!
                <div class="accordion" id="accordionExample6">

                    <?php if($training >= 10) { ?>

                        <div class="card">
                            <div class="card-header" id="headingBase22Day">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase22Day" aria-expanded="false" aria-controls="collapseBase22Day">
                                        День 22, Отдых!
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseBase22Day" class="collapse" aria-labelledby="headingBase22Day" data-parent="#accordionExample6">
                                <div class="card-body">
                                    <?=$break_days?>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingBase23Day">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseBase23Day" aria-expanded="true" aria-controls="collapseBase23Day">
                                        День 23, Ноги и Плечи! Пампинговая тренировка!
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseBase23Day" class="collapse" aria-labelledby="headingBase23Day" data-parent="#accordionExample6">
                                <div class="card-body">
                                    <!--                                 Описание 23 дня тренировки!-->
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="list-group" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action" id="list-baseNutrition23day-list" data-toggle="list" href="#list-baseNutrition23day" role="tab" aria-controls="baseNutrition23day">Питание</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseRazminka23day-list" data-toggle="list" href="#list-baseRazminka23day" role="tab" aria-controls="baseRazminka23day">Разминка</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePrised23day-list" data-toggle="list" href="#list-basePrised23day" role="tab" aria-controls="basePrised23day">Присед!</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseKvadro23day-list" data-toggle="list" href="#list-baseKvadro23day" role="tab" aria-controls="baseKvadro23day">Квадрицепс</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseBiceps23day-list" data-toggle="list" href="#list-baseBiceps23day" role="tab" aria-controls="baseBiceps23day">Бицепс</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePrivod23day-list" data-toggle="list" href="#list-basePrivod23day" role="tab" aria-controls="basePrivod23day">Приводящие мышцы</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseVneshStorBedra23day-list" data-toggle="list" href="#list-baseVneshStorBedra23day" role="tab" aria-controls="baseVneshStorBedra23day">Внешняя сторона бедра</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseGolen23day-list" data-toggle="list" href="#list-baseGolen23day" role="tab" aria-controls="baseGolen23day">Голень</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePlechiShimChest23day-list" data-toggle="list" href="#list-basePlechiShimChest23day" role="tab" aria-controls="basePlechiShimChest23day">Плечи, жим</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePlechiShimBack23day-list" data-toggle="list" href="#list-basePlechiShimBack23day" role="tab" aria-controls="basePlechiShimBack23day">Плечи, жим</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePlechiShimGanteli23day-list" data-toggle="list" href="#list-basePlechiShimGanteli23day" role="tab" aria-controls="basePlechiShimGanteli23day">Плечи, жим</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePlechiVStoroni23day-list" data-toggle="list" href="#list-basePlechiVStoroni23day" role="tab" aria-controls="basePlechiVStoroni23day">Плечи, в стороны</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePlechiPered23day-list" data-toggle="list" href="#list-basePlechiPered23day" role="tab" aria-controls="basePlechiPered23day">Плечи, перед собой</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePlechiVNaklone23day-list" data-toggle="list" href="#list-basePlechiVNaklone23day" role="tab" aria-controls="basePlechiVNaklone23day">Плечи, в наклоне</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePressMahi23day-list" data-toggle="list" href="#list-basePressMahi23day" role="tab" aria-controls="basePressMahi23day">Пресс, махи ногами</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePress23day-list" data-toggle="list" href="#list-basePress23day" role="tab" aria-controls="basePress23day">Пресс, скручивание</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePressKosie23day-list" data-toggle="list" href="#list-basePressKosie23day" role="tab" aria-controls="basePressKosie23day">Пресс, косые мышцы</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseAfter23day-list" data-toggle="list" href="#list-baseAfter23day" role="tab" aria-controls="baseAfter23day">Завершение</a>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="list-baseNutrition23day" role="tabpanel" aria-labelledby="list-baseNutrition23day-list">
                                                    <?=$eggs?>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseRazminka23day" role="tabpanel" aria-labelledby="list-baseRazminka23day-list">
                                                    <?=$razminka?>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePrised23day" role="tabpanel" aria-labelledby="list-basePrised23day-list">
                                                    <li class="list-group-item list-group-item-primary">Присед! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, без отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2,3,4,5,6 подход - 15 повторений, <?=$weight50?></li>
                                                    <?=$break5min?>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseKvadro23day" role="tabpanel" aria-labelledby="list-baseKvadro23day-list">
                                                    <li class="list-group-item list-group-item-primary">Разгибание ног в тренажере сидя, Квадрицепс бедра! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 15 повторений, <?=$weight50?></li>
                                                    <?=$break5min?>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseBiceps23day" role="tabpanel" aria-labelledby="list-baseBiceps23day-list">
                                                    <li class="list-group-item list-group-item-primary">Сгибание ног в тренажере лёжа, Бицепс бедра! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 15 повторений, <?=$weight50?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePrivod23day" role="tabpanel" aria-labelledby="list-basePrivod23day-list">
                                                    <li class="list-group-item list-group-item-primary">Сведение ног сидя, приводящие мышцы бедра! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 15 повторений, <?=$weight50?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseVneshStorBedra23day" role="tabpanel" aria-labelledby="list-baseVneshStorBedra23day-list">
                                                    <li class="list-group-item list-group-item-primary">Разведение ног сидя, внешняя сторона бедра! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 15 повторений, <?=$weight50?></li>
                                                </div>

                                                <div class="tab-pane fade" id="list-baseGolen23day" role="tabpanel" aria-labelledby="list-baseGolen23day-list">
                                                    <li class="list-group-item list-group-item-primary">Голень, подъем на носки в тренажере стоя! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 15 повторений, <?=$weight50?></li>
                                                </div>

                                                <div class="tab-pane fade" id="list-basePlechiShimChest23day" role="tabpanel" aria-labelledby="list-basebasePlechiShimChest23day-list">
                                                    <li class="list-group-item list-group-item-primary">Жим штанги от груди сидя! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 15 повторений, со штангой (20кг - вес штагни)!</li>
                                                    <li class="list-group-item list-group-item-success">2,3,4,5,6 подход - 15 повторений, <?=$weight50?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePlechiShimBack23day" role="tabpanel" aria-labelledby="list-basePlechiShimBack23day-list">
                                                    <li class="list-group-item list-group-item-primary">Жим штанги за голову сидя! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 15 повторений, <?=$weight50?></li>

                                                </div>
                                                <div class="tab-pane fade" id="list-basePlechiShimGanteli23day" role="tabpanel" aria-labelledby="list-basePlechiShimGanteli23day-list">
                                                    <li class="list-group-item list-group-item-primary">Жим гантелями сидя! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 10 повторений, <?=$weight50?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePlechiVStoroni23day" role="tabpanel" aria-labelledby="list-basePlechiVStoroni23day-list">
                                                    <li class="list-group-item list-group-item-primary">Подъём гантелей в стороны стоя! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 10 повторений, <?=$weight50?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePlechiPered23day" role="tabpanel" aria-labelledby="list-basePlechiPered23day-list">
                                                    <li class="list-group-item list-group-item-primary">Подъём гантелей перед собой стоя! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 10 повторений, <?=$weight50?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePlechiVNaklone23day" role="tabpanel" aria-labelledby="list-basePlechiVNaklone23day-list">
                                                    <li class="list-group-item list-group-item-primary">Подъём гантелей в стороны в наклоне сидя! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 10 повторений, <?=$weight50?></li>
                                                </div>

                                                <div class="tab-pane fade" id="list-basePressMahi23day" role="tabpanel" aria-labelledby="list-basePressMahi23day-list">
                                                    <li class="list-group-item list-group-item-primary">Пресс, махи ногами<?=$break?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений, без веса отягощения!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePress23day" role="tabpanel" aria-labelledby="list-basePress23day-list">
                                                    <li class="list-group-item list-group-item-primary">Пресс, скручивание<?=$break?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений, без веса отягощения!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePressKosie23day" role="tabpanel" aria-labelledby="list-basePressKosie23day-list">
                                                    <li class="list-group-item list-group-item-primary">Пресс, косые мышцы живота! Наклоны в стороны с гантелей в руке,
                                                        после завершения упражнения взять гантелю в другую руку и повторить(вес гантели на выбор)! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseAfter23day" role="tabpanel" aria-labelledby="list-baseAfter23day-list">
                                                    <?=$after_training ?>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingBase24Day">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase24Day" aria-expanded="false" aria-controls="collapseBase24Day">
                                        День 24, Отдых!
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseBase24Day" class="collapse" aria-labelledby="headingBase24Day" data-parent="#accordionExample6">
                                <div class="card-body">
                                    <?=$break_days?>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

                    <?php if($training >= 11) { ?>

                        <!--                                 Описание 25 тренировки!-->
                        <div class="card">
                            <div class="card-header" id="headingBase25Day">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase25Day" aria-expanded="false" aria-controls="collapseBase25Day">
                                        День 25, Спина и Трицепс!
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseBase25Day" class="collapse" aria-labelledby="headingBase25Day" data-parent="#accordionExample6">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="list-group" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action" id="list-baseNutrition25day-list" data-toggle="list" href="#list-baseNutrition25day" role="tab" aria-controls="baseNutrition25day">Питание</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseRazminka25day-list" data-toggle="list" href="#list-baseRazminka25day" role="tab" aria-controls="baseRazminka25day">Разминка</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseBackGrud25day-list" data-toggle="list" href="#list-baseBackGrud25day" role="tab" aria-controls="baseBackGrud25day">Спина, верхний блок!</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseBackZaSpiny25day-list" data-toggle="list" href="#list-baseBackZaSpiny25day" role="tab" aria-controls="baseBackZaSpiny25day">Спина, верхний блок!</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseBackGorizTyaga25day-list" data-toggle="list" href="#list-baseBackGorizTyaga25day" role="tab" aria-controls="baseBackGorizTyaga25day">Спина, нижний блок!</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseBackGorizTyagaNaklon25day-list" data-toggle="list" href="#list-baseBackGorizTyagaNaklon25day" role="tab" aria-controls="baseBackGorizTyagaNaklon25day">Спина, тяга в наклоне!</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseTricepsSidia25day-list" data-toggle="list" href="#list-baseTricepsSidia25day" role="tab" aria-controls="baseTricepsSidia25day">Трицепс, отжимания!</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseTricepsVerh25day-list" data-toggle="list" href="#list-baseTricepsVerh25day" role="tab" aria-controls="baseTricepsVerh25day">Трицепс, верх. блок!</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseTricepsRazgib25day-list" data-toggle="list" href="#list-baseTricepsRazgib25day" role="tab" aria-controls="baseTricepsRazgib25day">Трицепс, разгибание!</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseTrap25day-list" data-toggle="list" href="#list-baseTrap25day" role="tab" aria-controls="baseTrap25day">Трапеции!</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseGiper25day-list" data-toggle="list" href="#list-baseGiper25day" role="tab" aria-controls="baseGiper25day">Гиперэкстензия!</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePressMahi25day-list" data-toggle="list" href="#list-basePressMahi25day" role="tab" aria-controls="basePressMahi25day">Пресс, махи ногами</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePress25day-list" data-toggle="list" href="#list-basePress25day" role="tab" aria-controls="basePress25day">Пресс</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePressKosie25day-list" data-toggle="list" href="#list-basePressKosie25day" role="tab" aria-controls="basePressKosie25day">Пресс, косые мышцы</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseAfter25day-list" data-toggle="list" href="#list-baseAfter25day" role="tab" aria-controls="baseAfter11day">Завершение</a>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="list-baseNutrition25day" role="tabpanel" aria-labelledby="list-baseNutrition25day-list">
                                                    <?=$eggs?>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseRazminka25day" role="tabpanel" aria-labelledby="list-baseRazminka25day-list">
                                                    <?=$razminka?>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseBackGrud25day" role="tabpanel" aria-labelledby="list-baseBackGrud25day-list">
                                                    <li class="list-group-item list-group-item-primary">Тяга верхнего блока к груди! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 15 повторений, 15-20кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2,3,4,5,6 подход - 15 повторений, <?=$weight50?></li>
                                                </div>

                                                <div class="tab-pane fade" id="list-baseBackZaSpiny25day" role="tabpanel" aria-labelledby="list-baseBackZaSpiny25day-list">
                                                    <li class="list-group-item list-group-item-primary">Тяга верхнего блока за голову! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 15 повторений, <?=$weight50?></li>
                                                </div>

                                                <div class="tab-pane fade" id="list-baseBackGorizTyaga25day" role="tabpanel" aria-labelledby="list-baseBackGorizTyaga25day-list">
                                                    <li class="list-group-item list-group-item-primary">Тяга нижнего блока сидя! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 15 повторений, 20-25кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2,3,4,5,6 подход - 15 повторений, <?=$weight50?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseBackGorizTyagaNaklon25day" role="tabpanel" aria-labelledby="list-baseBackGorizTyagaNaklon25day-list">
                                                    <li class="list-group-item list-group-item-primary">Тяга гантели в наклоне(на каждую руку)! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 15 повторений, <?=$weight50?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseTricepsSidia25day" role="tabpanel" aria-labelledby="list-baseTricepsSidia25day-list">
                                                    <li class="list-group-item list-group-item-primary">Отжимания от скамьи! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, без веса отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2,3,4,5,6 подход - 15 повторений, <?=$weight50?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseTricepsVerh25day" role="tabpanel" aria-labelledby="list-baseTricepsVerh25day-list">
                                                    <li class="list-group-item list-group-item-primary">Разгибание рук на верхнем блоке! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 15 повторений, <?=$weight50?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseTricepsRazgib25day" role="tabpanel" aria-labelledby="list-baseTricepsRazgib25day-list">
                                                    <li class="list-group-item list-group-item-primary">Разгибание руки в наклоне(на каждую руку)! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 15 повторений, <?=$weight50?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseTrap25day" role="tabpanel" aria-labelledby="list-baseTrap25day-list">
                                                    <li class="list-group-item list-group-item-primary">Трапеции, шраги со штангой или гантелями! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 10-15кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2,3,4,5,6 подход - 15 повторений, <?=$weight50?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseGiper25day" role="tabpanel" aria-labelledby="list-baseGiper25day-list">
                                                    <li class="list-group-item list-group-item-primary">Гиперэкстензия! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 10 повторений, без веса отягощения!!</li>
                                                </div>

                                                <div class="tab-pane fade" id="list-basePressMahi25day" role="tabpanel" aria-labelledby="list-basePressMahi25day-list">
                                                    <li class="list-group-item list-group-item-primary">Пресс, махи ногами <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений, без веса отягощения!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePress25day" role="tabpanel" aria-labelledby="list-basePress25day-list">
                                                    <li class="list-group-item list-group-item-primary">Пресс, скручивание <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений, без веса отягощения!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePressKosie25day" role="tabpanel" aria-labelledby="list-basePressKosie25day-list">
                                                    <li class="list-group-item list-group-item-primary">Пресс, косые мышцы живота! Наклоны в стороны с гантелей в руке,
                                                        после завершения упражнения взять гантелю в другую руку и повторить(вес гантели на выбор)! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4 подход - 10 повторений!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseAfter25day" role="tabpanel" aria-labelledby="list-baseAfter25day-list">
                                                    <?=$after_training ?>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <!--                                 Описание 26 дня тренировки!-->
                        <div class="card">
                            <div class="card-header" id="headingBase26Day">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase26Day" aria-expanded="false" aria-controls="collapseBase26Day">
                                        День 26, Отдых!
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseBase26Day" class="collapse" aria-labelledby="headingBase26Day" data-parent="#accordionExample6">
                                <div class="card-body">
                                    <?=$break_days?>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

                    <?php if($training >= 12) { ?>

                        <!--                                 Описание 27 дня тренировки!-->
                        <div class="card">
                            <div class="card-header" id="headingBase27Day">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase27Day" aria-expanded="false" aria-controls="collapseBase27Day">
                                        День 27, Грудь и Бицепс!
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseBase27Day" class="collapse" aria-labelledby="headingBase27Day" data-parent="#accordionExample5">
                                <div class="card-body">


                                    <div class="row">
                                        <div class="col-3">
                                            <div class="list-group" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action" id="list-baseNutrition27day-list" data-toggle="list" href="#list-baseNutrition27day" role="tab" aria-controls="baseNutrition27day">Питание</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseRazminka27day-list" data-toggle="list" href="#list-baseRazminka27day" role="tab" aria-controls="baseRazminka27day">Разминка</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseChestNaklon27day-list" data-toggle="list" href="#list-baseChestNaklon27day" role="tab" aria-controls="baseChestNaklon27day">Грудь, наклонная</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseChestShim27day-list" data-toggle="list" href="#list-baseChestShim27day" role="tab" aria-controls="baseChestShim27day">Грудь, жим</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseChestRazvod27day-list" data-toggle="list" href="#list-baseChestRazvod27day" role="tab" aria-controls="baseChestRazvod27day">Грудь, разводка</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePullOver27day-list" data-toggle="list" href="#list-basePullOver27day" role="tab" aria-controls="basePullOver27day">Пуловер</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseBicepsBlock27day-list" data-toggle="list" href="#list-baseBicepsBlock27day" role="tab" aria-controls="baseBicepsBlock27day">Бицепс, нижний блок</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseBicepsBlockVnesh27day-list" data-toggle="list" href="#list-baseBicepsBlockVnesh27day" role="tab" aria-controls="baseBicepsBlockVnesh27day">Бицепс, нижний блок</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseBicepsScott27day-list" data-toggle="list" href="#list-baseBicepsScott27day" role="tab" aria-controls="baseBicepsScott27day">Бицепс, скотт</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseBicepsMolotki27day-list" data-toggle="list" href="#list-baseBicepsMolotki27day" role="tab" aria-controls="baseBicepsMolotki27day">Бицепс, молотки</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePressMahi27day-list" data-toggle="list" href="#list-basePressMahi27day" role="tab" aria-controls="basePressMahi27day">Пресс, махи ногами</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePress27day-list" data-toggle="list" href="#list-basePress27day" role="tab" aria-controls="basePress27day">Пресс</a>
                                                <a class="list-group-item list-group-item-action" id="list-basePressKosie27day-list" data-toggle="list" href="#list-basePressKosie27day" role="tab" aria-controls="basePressKosie27day">Пресс, косые мышцы</a>
                                                <a class="list-group-item list-group-item-action" id="list-baseAfter27day-list" data-toggle="list" href="#list-baseAfter27day" role="tab" aria-controls="baseAfter27day">Завершение</a>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="list-baseNutrition27day" role="tabpanel" aria-labelledby="list-baseNutrition27day-list">
                                                    <?=$eggs?>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseRazminka27day" role="tabpanel" aria-labelledby="list-baseRazminka27day-list">
                                                    <?=$razminka?>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseChestNaklon27day" role="tabpanel" aria-labelledby="list-baseChestNaklon27day-list">
                                                    <li class="list-group-item list-group-item-primary">Жим на наклонной! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, 20-25кг вес отягощения!</li>
                                                    <li class="list-group-item list-group-item-success">2,3,4,5,6 подход - 15 повторений, <?=$weight50?>!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseChestShim27day" role="tabpanel" aria-labelledby="list-baseChestShim27day-list">
                                                    <li class="list-group-item list-group-item-primary">Жим лёжа! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 15 повторений, <?=$weight50?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseChestRazvod27day" role="tabpanel" aria-labelledby="list-baseChestRazvod27day-list">
                                                    <li class="list-group-item list-group-item-primary">Разводка рук в стороны на наклонной!  <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 15 повторений, <?=$weight50?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePullOver27day" role="tabpanel" aria-labelledby="list-basePullOver27day-list">
                                                    <li class="list-group-item list-group-item-primary">Пуловер! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1 подход - 10 повторений, гантели по 5-10кг! !</li>
                                                    <li class="list-group-item list-group-item-success">2,3,4,5,6 подход - 15 повторений, <?=$weight50?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseBicepsBlock27day" role="tabpanel" aria-labelledby="list-baseBicepsBlock27day-list">
                                                    <li class="list-group-item list-group-item-primary">Бицепс, Тяга нижнего блока внутренним хватом! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 15 повторений, <?=$weight50?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseBicepsBlockVnesh27day" role="tabpanel" aria-labelledby="list-baseBicepsBlockVnesh27day-list">
                                                    <li class="list-group-item list-group-item-primary">Бицепс, Тяга нижнего блока внутренним хватом! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 15 повторений, <?=$weight50?></li>
                                                </div>

                                                <div class="tab-pane fade" id="list-baseBicepsScott27day" role="tabpanel" aria-labelledby="list-baseBicepsScott27day-list">
                                                    <li class="list-group-item list-group-item-primary">Бицепс, Изолированное сгибание рук со штангой! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 15 повторений, <?=$weight50?></li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseBicepsMolotki27day" role="tabpanel" aria-labelledby="list-baseBicepsMolotki27day-list">
                                                    <li class="list-group-item list-group-item-primary">Бицепс, Молотки! <?=$time_pump?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 15 повторений, <?=$weight50?></li>
                                                </div>

                                                <div class="tab-pane fade" id="list-basePressMahi27day" role="tabpanel" aria-labelledby="list-basePressMahi27day-list">
                                                    <li class="list-group-item list-group-item-primary">Пресс, махи ногами вверх<?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 10 повторений, без веса отягощения!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-basePress27day" role="tabpanel" aria-labelledby="list-basePress27day-list">
                                                    <li class="list-group-item list-group-item-primary">Пресс, скручивание<?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 10 повторений, без веса отягощения!</li>
                                                </div>

                                                <div class="tab-pane fade" id="list-basePressKosie27day" role="tabpanel" aria-labelledby="list-basePressKosie27day-list">
                                                    <li class="list-group-item list-group-item-primary">Пресс, косые мышцы живота! Наклоны в стороны с гантелей в руке,
                                                        после завершения упражнения взять гантелю в другую руку и повторить(вес гантели на выбор)! <?=$time_base?></li>
                                                    <li class="list-group-item list-group-item-success">1,2,3,4,5 подход - 10 повторений!</li>
                                                </div>
                                                <div class="tab-pane fade" id="list-baseAfter27day" role="tabpanel" aria-labelledby="list-baseAfter27day-list">
                                                    <?=$after_training ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>





                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingBase28Day">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBase28Day" aria-expanded="false" aria-controls="collapseBase28Day">
                                        День 28, Отдых!
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseBase28Day" class="collapse" aria-labelledby="headingBase28Day" data-parent="#accordionExample5">
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




</div>
