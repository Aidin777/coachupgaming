<h1>Личный кабинет!</h1>

    <?php
    if(isset($_POST['refresh_data_payments'])){
        M_Users::refresh_data();
    }
    $price_training = 1500;
    //Проверка на нажатие кнопок покупок тренировок
    if(isset($_POST['base_1_day']) or isset($_POST['power_1_day']) or isset($_POST['pump_1_day'])){
        M_Users::refresh_data();

        if(M_Users::check_no_ban_user()){
            if($_POST['base_1_day']){
                M_Users::change_money_on_type_training('base');
            }
            if($_POST['power_1_day']){
                M_Users::change_money_on_type_training('power');
            }
            if($_POST['pump_1_day']){
                M_Users::change_money_on_type_training('muscle_building');
            }
        }else{
            M_Users::you_have_ban();
        }
    }
    //Обработка выбора команд, которые провели вас.
    //Кейсы и Заказы
    if(isset($_POST['alfa_case_team'])  or isset($_POST['bravo_case_team']) or isset($_POST['charlee_case_team'])
    or isset($_POST['alfa_order_team'])  or isset($_POST['bravo_order_team']) or isset($_POST['charlee_order_team'])){
        M_Users::refresh_data();
        if(M_Users::check_no_ban_user()) {
            //Создаём экземпляр
            $mPages = M_Pages::Instance();

            if(isset($_POST['alfa_order_team'])  or isset($_POST['bravo_order_team']) or isset($_POST['charlee_order_team'])){
                //Выбор заказов
                $type_order = 'order_donat';
                if($_POST['alfa_order_team']){
                    $number_of_order = $_POST['alfa_number_order'];
                    $team_choice = $_POST['alfa_order_choice'];
                    $refresh_server = 'alfa';
                }
                if($_POST['bravo_order_team']){
                    $number_of_order = $_POST['bravo_number_order'];
                    $team_choice = $_POST['bravo_order_choice'];
                    $refresh_server = 'bravo';
                }
                if($_POST['charlee_order_team']){
                    $number_of_order = $_POST['charlee_number_order'];
                    $team_choice = $_POST['charlee_order_choice'];
                    $refresh_server = 'charlee';
                }
                //Выносим общее действие - Выбираем состав
                M_Users::select_team_from_client($refresh_server, $type_order, $number_of_order, $team_choice);

                switch($refresh_server){
                    case 'alfa':
                        $data_alfa_order = $mPages->show_order_server($refresh_server, '_order_donat');
                        break;
                    case 'bravo':
                        $data_bravo_order = $mPages->show_order_server($refresh_server, '_order_donat');
                        break;
                    case 'charlee':
                        $data_charlee_order = $mPages->show_order_server($refresh_server, '_order_donat');
                        break;
                }

            }else{
                //Выбор кейсовых заказов
                $type_order = 'case';
                if($_POST['alfa_case_team']){
                    $number_of_order = $_POST['alfa_number_case'];
                    $team_choice = $_POST['alfa_case_choice'];
                    $refresh_server = 'alfa';
                }
                if($_POST['bravo_case_team']){
                    $number_of_order = $_POST['bravo_number_case'];
                    $team_choice = $_POST['bravo_case_choice'];
                    $refresh_server = 'bravo';
                }
                if($_POST['charlee_case_team']){
                    $number_of_order = $_POST['charlee_number_case'];
                    $team_choice = $_POST['charlee_case_choice'];
                    $refresh_server = 'charlee';
                }

                //Выносим общее действие - Выбираем состав
                M_Users::select_team_from_client($refresh_server, $type_order, $number_of_order, $team_choice);

                switch($refresh_server){
                    case 'alfa':
                        $data_alfa_case = $mPages->show_order_server($refresh_server, '_case');
                        break;
                    case 'bravo':
                        $data_bravo_case = $mPages->show_order_server($refresh_server, '_case');
                        break;
                    case 'charlee':
                        $data_charlee_case = $mPages->show_order_server($refresh_server, '_case');
                        break;
                }
            }
        }else{
            M_Users::you_have_ban();
        }
    }
    //


    

    if(isset($_SESSION['user'])){
        ?>

        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-training-tab" data-toggle="tab" href="#nav-training" role="tab" aria-controls="nav-training" aria-selected="true">Тренировки</a>
                <a class="nav-item nav-link" id="nav-changer-tab" data-toggle="tab" href="#nav-changer" role="tab" aria-controls="nav-changer" aria-selected="false">Обменник</a>
                <a class="nav-item nav-link" id="nav-case-tab" data-toggle="tab" href="#nav-case" role="tab" aria-controls="nav-case" aria-selected="false">Кейсы</a>
                <a class="nav-item nav-link" id="nav-training-consultation-tab" data-toggle="tab" href="#nav-training-consultation" role="tab" aria-controls="nav-training-consultation" aria-selected="false">Персональная консультация</a>
                <a class="nav-item nav-link" id="nav-payment-history-tab" data-toggle="tab" href="#nav-payment-history" role="tab" aria-controls="nav-payment-history" aria-selected="false">История платежей</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-training" role="tabpanel" aria-labelledby="nav-training-tab">

                <!--                Навигация тренировок,  контент -->
                <div class="row">
                    <div class="col-4">
                        <div class="list-group" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Базовая</a>
                            <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Наращивание</a>
                            <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Силовая</a>
                            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Жиросжигание</a>
                            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-drying" role="tab" aria-controls="settings">Сушка</a>
                        </div>
                    </div>

                    <div class="col-8">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                                <div class="form-row">
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <label for="base_changer">Максимальное количество тренировочных дней  - 13!</label>
                                            <select class="form-control" name="price" id="base_changer">
                                                <option value="<?=$price_training?>">1 тренировка - <?=$price_training?>р</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input class="btn btn-default" type="submit" name="base_1_day" value="Обменять">
                                        </div>
                                        </form>

                                </div>
                            </div>

                            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                                <div class="form-row">
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <label for="pump_changer">Максимальное количество тренировочных дней  - 12!</label>
                                            <select class="form-control" name="price_pump" id="pump_changer">
                                                <option value="<?=$price_training?>">1 тренировка - <?=$price_training?>р</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input class="btn btn-primary" type="submit" name="pump_1_day" value="Обменять">
                                        </div>
                                    </form>
                                </div>

                            </div>

                            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                                <div class="form-row">
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <label for="power_changer">Максимальное количество тренировочных дней  - 12!</label>
                                            <select class="form-control" name="price_pump" id="power_changer">
                                                <option value="<?=$price_training?>">1 тренировка - <?=$price_training?>р</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input class="btn btn-success" type="submit" name="power_1_day" value="Купить">
                                        </div>
                                    </form>
                                </div>

                            </div>

                            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                                <div class="form-row">
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <label for="fat_loss_changer">Максимальное количество тренировочных дней  - 12!</label>
                                            <select class="form-control" name="price_fat_loss" id="fat_loss_changer">
                                                <option value="<?=$price_training?>">1 тренировка - <?=$price_training?>р</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input class="btn btn-danger" type="submit" name="fat_loss_1_day" value="Купить">
                                        </div>
                                    </form>
                                </div>

                            </div>

                            <div class="tab-pane fade" id="list-drying" role="tabpanel" aria-labelledby="list-drying-list">
                                <div class="form-row">
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <label for="fat_loss_changer">Максимальное количество тренировочных дней  - 12!</label>
                                            <select class="form-control" name="price_fat_loss" id="fat_loss_changer">
                                                <option value="<?=$price_training?>">1 тренировка - <?=$price_training?>р</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input class="btn btn-warning" type="submit" name="drying_1_day" value="Купить">
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

<!--            Раздел для Обменна баллов!-->
            <div class="tab-pane fade" id="nav-changer" role="tabpanel" aria-labelledby="nav-changer-tab">
                <div class="row">
                    <div class="col-2">
                        <div class="list-group" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active" id="list-changer-alfa-list" data-toggle="list" href="#list-changer-alfa" role="tab" aria-controls="changer-alfa">АЛЬФА</a>
                            <a class="list-group-item list-group-item-action" id="list-changer-bravo-list" data-toggle="list" href="#list-changer-bravo" role="tab" aria-controls="changer-bravo">БРАВО</a>
                            <a class="list-group-item list-group-item-action" id="list-changer-charlee-list" data-toggle="list" href="#list-changer-charlee" role="tab" aria-controls="changer-charlee">ЧАРЛИ</a>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="list-changer-alfa" role="tabpanel" aria-labelledby="list-changer-alfa-list">

                            <h3>Контент для Альфа!</h3>
                                <?php

                                if($data_alfa_order != '') { ?>

                                    <form action="" method="post">
                                        № Заказа -
                                        <select name="alfa_number_order">
                                            <?php
                                                foreach ($data_alfa_order as $option){
                                                    if($option['id_status'] != 1) { ?>
                                                        <option value="<?=$option['id']?>"><?=$option['id']?></option>
                                                    <?php  } } ?>
                                        </select>
                                        № Состава -
                                        <select name="alfa_order_choice">
                                            <?php  if($teams != '') {
                                                foreach ($teams as $team){ ?>
                                                    <option value="<?=$team['team_id']?>"><?=$team['team_id']?></option>
                                                <?php } } ?>
                                        </select>
                                        <input type="submit" class="btn btn-primary" value="Выбрать состав" name="alfa_order_team">
                                    </form>
                                <table class="table table-dark table-bordered">
                                    <thread>
                                        <tr>
                                            <th>№</th>
                                            <th>Спецуха</th>
                                            <th>Серв</th>
                                            <th>Цена</th>
                                            <th>Выбор</th>
                                            <th>Состав</th>
                                            <th>Создан</th>
                                            <th>Изменён</th>
                                            <th>Статус</th>
                                        </tr>
                                    </thread>
                                    <tbody>

                                    <?php

                                    foreach ($data_alfa_order as $alfa_order) { ?>
                                        <tr>
                                            <th scope="row"><?=$alfa_order['id']?></th>
                                            <td><?=$alfa_order['id_name_specoperation']?></td>
                                            <td><?=$alfa_order['id_server']?></td>
                                            <td><?=$alfa_order['id_price']?></td>
                                            <td><?=$alfa_order['id_choice']?></td>
                                            <td><?=$alfa_order['id_team']?></td>
                                            <td><?php if($alfa_order['create'] != NULL){ echo date("d.m.y-H:i:s", strtotime($alfa_order['create']));}?></td>
                                            <td><?php if($alfa_order['edit'] != NULL){ echo date("d.m.y-H:i:s", strtotime($alfa_order['edit']));}?></td>

                                            <?php if($alfa_order['id_status'] == 1){ ?>
                                                <td class="success-status"></td>
                                            <?php }else{ ?> <td></td> <?php } ?>

                                        </tr>
                                <?php } ?>

                                    </tbody>
                              </table>
                            <?php } ?>



                            </div>
                            <div class="tab-pane fade" id="list-changer-bravo" role="tabpanel" aria-labelledby="list-changer-bravo-list">

                                <h3>Контент для Браво</h3>
                                <?php

                                if($data_alfa_order != '') { ?>

                                    <form action="" method="post">
                                        № Заказа -
                                        <select name="bravo_number_order">
                                            <?php
                                            foreach ($data_bravo_order as $option){
                                                if($option['id_status'] != 1) { ?>
                                                    <option value="<?=$option['id']?>"><?=$option['id']?></option>
                                                <?php  } } ?>
                                        </select>
                                        № Состава -
                                        <select name="bravo_order_choice">
                                            <?php  if($teams != '') {
                                                foreach ($teams as $team){ ?>
                                                    <option value="<?=$team['team_id']?>"><?=$team['team_id']?></option>
                                                <?php } } ?>
                                        </select>
                                        <input type="submit" class="btn btn-primary" value="Выбрать состав" name="bravo_order_team">
                                    </form>
                                    <table class="table table-dark table-bordered">
                                        <thread>
                                            <tr>
                                                <th>№</th>
                                                <th>Спецуха</th>
                                                <th>Сервер</th>
                                                <th>Цена</th>
                                                <th>Выбор</th>
                                                <th>Провели</th>
                                                <th>Создан</th>
                                                <th>Изменён</th>
                                                <th>Статус</th>
                                            </tr>
                                        </thread>
                                        <tbody>

                                        <?php foreach ($data_bravo_order as $bravo_order) { ?>
                                            <tr>
                                                <th scope="row"><?=$bravo_order['id']?></th>
                                                <td><?=$bravo_order['id_name_specoperation']?></td>
                                                <td><?=$bravo_order['id_server']?></td>
                                                <td><?=$bravo_order['id_price']?></td>
                                                <td><?=$bravo_order['id_choice']?></td>
                                                <td><?=$bravo_order['id_team']?></td>
                                                <td><?php if($bravo_order['create'] != NULL){ echo date("d.m.y-H:i:s", strtotime($bravo_order['create']));}?></td>
                                                <td><?php if($bravo_order['edit'] != NULL){ echo date("d.m.y-H:i:s", strtotime($bravo_order['edit']));}?></td>


                                                <?php if($bravo_order['id_status'] == 1){ ?>
                                                    <td class="success-status"></td>
                                                <?php }else{ ?> <td></td> <?php } ?>

                                            </tr>
                                        <?php } ?>

                                        </tbody>
                                    </table>
                                <?php } ?>

                            </div>
                            <div class="tab-pane fade" id="list-changer-charlee" role="tabpanel" aria-labelledby="list-changer-charlee-list">

                                <h3>Контент для Чарли</h3>

                                <?php

                                if($data_charlee_order != '') { ?>

                                    <form action="" method="post">
                                        № Заказа -
                                        <select name="charlee_number_order">
                                            <?php
                                            foreach ($data_charlee_order as $option){
                                                if($option['id_status'] != 1) { ?>
                                                    <option value="<?=$option['id']?>"><?=$option['id']?></option>
                                                <?php  } } ?>
                                        </select>
                                        № Состава -
                                        <select name="charlee_order_choice">
                                            <?php  if($teams != '') {
                                                foreach ($teams as $team){ ?>
                                                    <option value="<?=$team['team_id']?>"><?=$team['team_id']?></option>
                                                <?php } } ?>
                                        </select>
                                        <input type="submit" class="btn btn-primary" value="Выбрать состав" name="charlee_order_team">
                                    </form>
                                    <table class="table table-dark table-bordered">
                                        <thread>
                                            <tr>
                                                <th>№</th>
                                                <th>Спецуха</th>
                                                <th>Сервер</th>
                                                <th>Цена</th>
                                                <th>Выбор</th>
                                                <th>Провели</th>
                                                <th>Создан</th>
                                                <th>Изменён</th>
                                                <th>Статус</th>
                                            </tr>
                                        </thread>
                                        <tbody>

                                        <?php foreach ($data_charlee_order as $charlee_order) { ?>
                                            <tr>
                                                <th scope="row"><?=$charlee_order['id']?></th>
                                                <td><?=$charlee_order['id_name_specoperation']?></td>
                                                <td><?=$charlee_order['id_server']?></td>
                                                <td><?=$charlee_order['id_price']?></td>
                                                <td><?=$charlee_order['id_choice']?></td>
                                                <td><?=$charlee_order['id_team']?></td>
                                                <td><?php if($charlee_order['create'] != NULL){ echo date("d.m.y-H:i:s", strtotime($charlee_order['create']));}?></td>
                                                <td><?php if($charlee_order['edit'] != NULL){ echo date("d.m.y-H:i:s", strtotime($charlee_order['edit']));}?></td>


                                                <?php if($charlee_order['id_status'] == 1){ ?>
                                                    <td class="success-status"></td>
                                                <?php }else{ ?> <td></td> <?php } ?>

                                            </tr>
                                        <?php } ?>

                                        </tbody>
                                    </table>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

<!--            кейса-->
            <div class="tab-pane fade" id="nav-case" role="tabpanel" aria-labelledby="nav-case-tab">
                <div class="row">
                    <div class="col-2">
                        <div class="list-group" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active" id="list-alfa-case-list" data-toggle="list" href="#list-alfa-case" role="tab" aria-controls="alfa-case">АЛЬФА</a>
                            <a class="list-group-item list-group-item-action" id="list-bravo-case-list" data-toggle="list" href="#list-bravo-case" role="tab" aria-controls="bravo-case">БРАВО</a>
                            <a class="list-group-item list-group-item-action" id="list-charlee-case-list" data-toggle="list" href="#list-charlee-case" role="tab" aria-controls="charlee-case">ЧАРЛИ</a>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="list-alfa-case" role="tabpanel" aria-labelledby="list-alfa-case-list">
                                <h3>Кейсы Альфа</h3>
                                <?php
                                if($data_alfa_case != '') { ?>
                                    <form action="" method="post">
                                        № Заказа -
                                        <select name="alfa_number_case">
                                            <?php
                                            foreach ($data_alfa_case as $option){
                                                if($option['id_status'] != 1) { ?>
                                                    <option value="<?=$option['id']?>"><?=$option['id']?></option>
                                                <?php  } } ?>
                                        </select>
                                        № Состава -
                                        <select name="alfa_case_choice">
                                            <?php  if($teams != '') {
                                                foreach ($teams as $team){ ?>
                                                    <option value="<?=$team['team_id']?>"><?=$team['team_id']?></option>
                                                <?php } } ?>
                                        </select>
                                        <input type="submit" class="btn btn-primary" value="Выбрать состав" name="alfa_case_team">
                                    </form>

                                    <table class="table table-dark table-bordered">
                                        <thread>
                                            <tr>
                                                <th>№</th>
                                                <th>Спецуха</th>
                                                <th>Сервер</th>
                                                <th>Очки</th>
                                                <th>Выбор</th>
                                                <th>Провели</th>
                                                <th>Провели</th>
                                                <th>Провели</th>
                                                <th>Статус</th>
                                            </tr>
                                        </thread>
                                        <tbody>

                                        <?php foreach ($data_alfa_case as $alfa_case) { ?>
                                            <tr>
                                                <th scope="row"><?=$alfa_case['id']?></th>
                                                <td><?=$alfa_case['id_name_specoperation']?></td>
                                                <td><?=$alfa_case['id_server']?></td>
                                                <td><?=$alfa_case['id_price']?></td>
                                                <td><?=$alfa_case['id_choice']?></td>
                                                <td><?=$alfa_case['id_team']?></td>
                                                <td><?php if($alfa_case['create'] != NULL){ echo date("d.m.y-H:i:s", strtotime($alfa_case['create']));}?></td>
                                                <td><?php if($alfa_case['edit'] != NULL){ echo date("d.m.y-H:i:s", strtotime($alfa_case['edit']));}?></td>


                                                <?php if($alfa_case['id_status'] == 1){ ?>
                                                    <td class="success-status"></td>
                                                <?php }else{ ?> <td></td> <?php } ?>

                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                <?php } ?>
                            </div>
                            <div class="tab-pane fade" id="list-bravo-case" role="tabpanel" aria-labelledby="list-bravo-case-list">
                                <h3>Кейсы Браво</h3>
                                <?php
                                if($data_bravo_case != '') { ?>
                                    <form action="" method="post">
                                        № Заказа -
                                        <select name="bravo_number_case">
                                            <?php
                                            foreach ($data_bravo_case as $option){
                                                if($option['id_status'] != 1) { ?>
                                                    <option value="<?=$option['id']?>"><?=$option['id']?></option>
                                                <?php  } } ?>
                                        </select>
                                        № Состава -
                                        <select name="bravo_case_choice">
                                            <?php  if($teams != '') {
                                                foreach ($teams as $team){ ?>
                                                    <option value="<?=$team['team_id']?>"><?=$team['team_id']?></option>
                                                <?php } } ?>
                                        </select>
                                    <input type="submit" class="btn btn-primary" value="Выбрать состав" name="bravo_case_team">
                                    </form>
                                    <table class="table table-dark table-bordered">
                                        <thread>
                                            <tr>
                                                <th>№</th>
                                                <th>Спецуха</th>
                                                <th>Сервер</th>
                                                <th>Очки</th>
                                                <th>Выбор</th>
                                                <th>Провели</th>
                                                <th>Создан</th>
                                                <th>Изменён</th>
                                                <th>Статус</th>
                                            </tr>
                                        </thread>
                                        <tbody>

                                        <?php foreach ($data_bravo_case as $bravo_case) { ?>
                                            <tr>
                                                <th scope="row"><?=$bravo_case['id']?></th>
                                                <td><?=$bravo_case['id_name_specoperation']?></td>
                                                <td><?=$bravo_case['id_server']?></td>
                                                <td><?=$bravo_case['id_price']?></td>
                                                <td><?=$bravo_case['id_choice']?></td>
                                                <td><?=$bravo_case['id_team']?></td>
                                                <td><?php if($bravo_case['create'] != NULL){ echo date("d.m.y-H:i:s", strtotime($bravo_case['create']));}?></td>
                                                <td><?php if($bravo_case['edit'] != NULL){ echo date("d.m.y-H:i:s", strtotime($bravo_case['edit']));}?></td>


                                                <?php if($bravo_case['id_status'] == 1){ ?>
                                                    <td class="success-status"></td>
                                                <?php }else{ ?> <td></td> <?php } ?>

                                            </tr>
                                        <?php } ?>

                                        </tbody>
                                    </table>
                                <?php } ?>

                            </div>
                            <div class="tab-pane fade" id="list-charlee-case" role="tabpanel" aria-labelledby="list-charlee-case-list">
                                <h3>Кейсы Чарли</h3>
                                <?php
                                if($data_charlee_case != '') { ?>

                                    <form action="" method="post">
                                        № Заказа -
                                        <select name="charlee_number_case">
                                            <?php
                                            foreach ($data_charlee_case as $option){
                                                if($option['id_status'] != 1) { ?>
                                                    <option value="<?=$option['id']?>"><?=$option['id']?></option>
                                                <?php  } } ?>
                                        </select>
                                        № Состава -
                                        <select name="charlee_case_choice">
                                            <?php  if($teams != '') {
                                                foreach ($teams as $team){ ?>
                                                    <option value="<?=$team['team_id']?>"><?=$team['team_id']?></option>
                                                <?php } } ?>
                                        </select>
                                        <input type="submit" class="btn btn-primary" value="Выбрать состав" name="charlee_case_team">
                                    </form>
                                    <table class="table table-dark table-bordered">
                                        <thread>
                                            <tr>
                                                <th>№</th>
                                                <th>Спецуха</th>
                                                <th>Сервер</th>
                                                <th>Очки</th>
                                                <th>Выбор</th>
                                                <th>Провели</th>
                                                <th>Создан</th>
                                                <th>Изменён</th>
                                                <th>Статус</th>
                                            </tr>
                                        </thread>
                                        <tbody>

                                        <?php foreach ($data_charlee_case as $charlee_case) { ?>
                                            <tr>
                                                <th scope="row"><?=$charlee_case['id']?></th>
                                                <td><?=$charlee_case['id_name_specoperation']?></td>
                                                <td><?=$charlee_case['id_server']?></td>
                                                <td><?=$charlee_case['id_price']?></td>
                                                <td><?=$charlee_case['id_choice']?></td>
                                                <td><?=$charlee_case['id_team']?></td>
                                                <td><?php if($charlee_case['create'] != NULL){ echo date("d.m.y-H:i:s", strtotime($charlee_case['create']));}?></td>
                                                <td><?php if($charlee_case['edit'] != NULL){ echo date("d.m.y-H:i:s", strtotime($charlee_case['edit']));}?></td>


                                                <?php if($charlee_case['id_status'] == 1){ ?>
                                                    <td class="success-status"></td>
                                                <?php }else{ ?> <td></td> <?php } ?>

                                            </tr>
                                        <?php } ?>

                                        </tbody>
                                    </table>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<!--            История платежей-->
            <div class="tab-pane fade" id="nav-payment-history" role="tabpanel" aria-labelledby="nav-payment-history-tab">
                <div class="row">
                    <div class="col">
                        <h3>История платежей!</h3>
                    </div>

                    <?php
                    if($data_payments != '') {?>
                        <div class="col-8">
                            <form action="" method="post">
                                <input type="submit" class="btn btn-primary" value="Обновить баланс" name="refresh_data_payments">
                            </form>
                        </div>

                        
                        <table class="table table-dark table-bordered">
                            <thread>
                                <tr>
                                    <th>№</th>
                                    <th>номер</th>
                                    <th>промо</th>
                                    <th>сумма</th>
                                    <th>Дата</th>
                                    <th>Статус</th>
                                </tr>
                            </thread>
                            <tbody>

                    <?php   foreach ($data_payments as $info) {
                                if ($info['status'] == 1) { ?>
                                    <tr class="success-status">
                                <?php } else { ?>
                                  <tr> <?php } ?>
                                <td><?=$info['id_payment']?></td>
                                <td><?=$info['phone']?></td>
                                <td><?=$info['promo']?></td>
                                <td><?=$info['summ']?></td>
                                <td><?=$info['date']?></td>
                                <?php
                                if($info['date'] == 1) { ?>
                                    <td class="success-status">Оплачено</td></tr>
                                <?php }else{ ?>
                                    <td class="waiting-status">Ожидание оплаты...</td></tr>
                                <?php }
                    } ?>
                            </tbody>
                        </table>
                    <?php } ?>

                </div>
            </div>
        </div>

        <?php
    }else{
        include 'views/v_need_authorized_to_see.php';
    }
    ?>

