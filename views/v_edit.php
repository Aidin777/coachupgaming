<hr>

<?php
    if(M_Users::check_guide_rights()){
?>

    <h1>Редактор!</h1>


    <?php
    //Проверка прав -> Проверка статуса капитана -> Проверка статуса заказа-> Проверка клиента
    // -> Проверка на совпадение с клиентом -> Закрытие заказа

    if($_POST['select_order_team'] or ($_POST['select_case_team'])){
        //обновим данные
        M_Users::refresh_data();

        //Проверка на бан если нету, то идём дальше
        if(M_Users::check_no_ban_guide()){
            //Проверка статуса заказа
            $table = $server.'_'.$currency;
            $query_of_current_order = "SELECT * FROM $table WHERE id = $number_order";

            $data_of_current_order = $mysqli->Select($query_of_current_order);
            $data_of_current_order = $data_of_current_order[0];

            //Статус заказа, выбор клиента?

            if($data_of_current_order['id_status'] != 1){
//                echo 'Статус заказа - открыт! ';

                if($data_of_current_order['id_choice'] != ''){
                    //Проверка соответствует ли выбор клиента с выбором состава!
                                    echo '<hr>';
                    $team_id = $_POST['team_id'];
                    if($data_of_current_order['id_choice'] == $team_id){
//                        echo '<hr>'.$number_order;
                        //Создаём строку и закрываем заказ(выбираем состав, который провёл)

                        date_default_timezone_set('Europe/Moscow');
                        $time = date('Y.m.d H:i:s');
                        $query_update_team = "UPDATE $table set `id_team` = '$team_id', `id_status` = 1, `edit` = '$time' WHERE `id` = $number_order";
//                        var_dump($query_update_team);
                        $close_order = $mysqli->Update($query_update_team);
//                        echo '<hr>'.$number_order;
                        //Если это был заказ за баллы, то добавляем баллы в копилку состава!
                        if($currency == 'order_donat'){
                            //Делаем статус выполнено у заказа.....


                            foreach ($teams as $team){
                                if($team['team_id'] == $team_id){

                                    $price_of_order = $data_of_current_order['id_price'];
                                    $data_of_team = $team;
                                    $team_money = $data_of_team['team_money'];
                                    $teams_users_success = $data_of_team['team_users_success'];
                                    $teams_users = $data_of_team['team_users'];


//                                    echo '<hr>------------->teams_users = '.$teams_users;
                                    $team_money =+ $price_of_order;
                                    $teams_users_success++;
                                    $teams_users++;

//                                    echo '<hr>------------->teams_users = '.$teams_users;

                                    $query_team_update = "UPDATE `team_guides` set `team_users_success` = $teams_users_success,
                                             `team_users` = $teams_users, 
                                             `team_money` = $team_money WHERE `team_id` = $team_id";
                                }
                            }

                        }else{
                            //Очки
                            $data_of_team = $team;
                            $teams_users_success = $data_of_team['team_users_success'];
                            $teams_users = $data_of_team['team_users'];

                            $teams_users_success++;
                            $teams_users++;

                            $query_team_update = "UPDATE `team_guides` set `team_users_success` = $teams_users_success,
                                             `team_users` = $teams_users WHERE `team_id` = $team_id";

                        }

//                        echo '<hr>'.$number_order;
                        echo '<hr>'.$query_team_update;
                        $update_team_data = $mysqli->Update($query_team_update);
                        echo '<div class="alert alert-success">Заказ успешно закрыт!</div>';
                    }else{
                        echo '<div class="alert alert-danger">Ваш выбор отличается от выбора клиента!</div>';
                    }
                }else{
                    echo '<div class="alert alert-danger">Клиент ещё не выбрал команду!</div>';
                }
            }else{
                echo '<div class="alert alert-danger">Статус заказа - закрыто! </div>';
            }
        }else{
            //Ваш статус не позволяет делать действий
            echo '<div class="alert alert-danger">Ваш статус - бан</div>';
        }

    }

    //Проверка статуса игрока -> принадлежит ли этот заказ ему -> Статус заказа -> выбрать состав.

    //Проверка на пустой сервер
        if($server != ''){
            //Проверка на тип
            if($currency != ''){
                //Првоерка на номер заказа
                if($number_order != 0){
                    //Данные из таблицы
                    $table = $server.'_'.$currency;

                    $query = "SELECT * FROM $table WHERE id = $number_order";

                    $data_of_order = $mysqli->Select($query);
                    $data_of_order = $data_of_order[0];
//                    var_dump($data_of_order);
                    if($currency == 'order_donat'){
                        //Баллы
                        ?>

                        <form action="#" method="post">
                            № Состава -
                            <select name="team_id">
                                <?php  if($teams != '') {
                                    foreach ($teams as $team){ ?>
                                        <option value="<?=$team['team_id']?>"><?=$team['team_id']?></option>
                                    <?php } } ?>
                            </select>
                            <input type="submit" class="btn btn-primary" value="Выбрать состав" name="select_order_team">
                        </form>
                        <hr>
                        <h1>Данные от заказа!</h1>
                    <table class="table table-dark table-bordered">
                        <thread>
                            <tr>
                                <th>№</th>
                                <th>Спецуха</th>
                                <th>Сервер</th>
                                <th>Баллы</th>
                                <th>Выбор</th>
                                <th>Провели</th>
                                <th>Создан</th>
                                <th>Изменён</th>
                                <th>Статус</th>
                            </tr>
                        </thread>
                        <tbody>
                            <tr>
                                <th scope="row"><?=$data_of_order['id']?></th>
                                <td><?=$data_of_order['id_name_specoperation']?></td>
                                <td><?=$data_of_order['id_server']?></td>
                                <td><?=$data_of_order['id_price']?></td>
                                <td><?=$data_of_order['id_choice']?></td>
                                <td><?=$data_of_order['id_team']?></td>
                                <td><?=$data_of_order['create']?></td>
                                <td><?=$data_of_order['edit']?></td>
                                <?php if($data_of_order['id_status'] == 1){ ?>
                                    <td class="alert-success"></td>
                                <?php }else{ ?> <td></td> <?php } ?>

                            </tr>
                        </tbody>
                        </table>
                    <?php }else{
                        //Очки
                      ?>


                        <form action="#" method="post">
                            № Состава -
                            <select name="team_id">
                                <?php  if($teams != '') {
                                    foreach ($teams as $team){ ?>
                                        <option value="<?=$team['team_id']?>"><?=$team['team_id']?></option>
                                    <?php } } ?>
                            </select>
                            <input type="submit" class="btn btn-primary" value="Выбрать состав" name="select_case_team">
                        </form>
                        <hr>
                        <h1>Данные от кейсового заказа!</h1>
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
                                            <tr>
                                                <th scope="row"><?=$data_of_order['id']?></th>
                                                <td><?=$data_of_order['id_name_specoperation']?></td>
                                                <td><?=$data_of_order['id_server']?></td>
                                                <td><?=$data_of_order['id_price']?></td>
                                                <td><?=$data_of_order['id_choice']?></td>
                                                <td><?=$data_of_order['id_team']?></td>
                                                <td><?=$data_of_order['create']?></td>
                                                <td><?=$data_of_order['edit']?></td>
                                                <?php if($data_of_order['id_status'] == 1){ ?>
                                                    <td class="alert-success"></td>
                                                <?php }else{ ?> <td></td> <?php } ?>

                                            </tr>
                                        </tbody>
                                    </table>
                    <?php }

                    //Для досье
                    if($url_client != 0){
                        //Вывести всю инфу о заказах клиента
                        //Вывести всю инфу о платежах клиента

                        $data_user = "SELECT * FROM `clients_donat` WHERE `id_url` = $url_client";

                        //Баланс, очки, балллы
                        $data_user = $mysqli->Select($data_user);

                        $query_qiwi = "SELECT * FROM `users_payments` WHERE `id_user` = $url_client";
                        $data_qiwi = $mysqli->Select($query_qiwi);

                        $field = 'id_url';

                        $order_alfa = "SELECT * FROM alfa_order_donat WHERE $field = $url_client";
                        $data_order_alfa = $mysqli->Select($order_alfa);

                        $order_bravo = "SELECT * FROM bravo_order_donat WHERE $field = $url_client";
                        $data_order_bravo = $mysqli->Select($order_bravo);

                        $order_charlee = "SELECT * FROM charlee_order_donat WHERE $field = $url_client";
                        $data_order_charlee = $mysqli->Select($order_charlee);

                        $case_alfa = "SELECT * FROM alfa_case WHERE $field = $url_client";
                        $data_case_alfa = $mysqli->Select($case_alfa);

                        $case_bravo = "SELECT * FROM bravo_case WHERE $field = $url_client";
                        $data_case_bravo = $mysqli->Select($case_bravo);

                        $case_charlee = "SELECT * FROM charlee_case WHERE $field = $url_client";
                        $data_case_charlee = $mysqli->Select($case_charlee);
                        //Теперь вставка во вьюшки!

                        if($data_order_alfa != '' or $data_order_bravo != '' or $data_order_charlee != ''){ ?>
                            <h1>Список заказов пользователя в обменнике!</h1>
                            <table class="table table-striped table-dark table-bordered">
                            <thread>
                                <tr>
                                    <th>№</th>
                                    <th>Наименование</th>
                                    <th>Сервер</th>
                                    <th>Баллы</th>
                                    <th>Победитель</th>
                                    <th>Провели</th>

                                </tr>
                            </thread>
                            <tbody>
                        <?php
                            if($data_order_alfa != ''){
                                foreach ($data_order_alfa as $data){ ?>
                                    <tr>
                                        <th scope="row"><?=$data['id']?></th>
                                        <td><?=$data['id_name_specoperation']?></td>
                                        <td><?=$data['id_server']?></td>
                                        <td><?=$data['id_price']?></td>
                                        <td><?=$data['id_choice']?></td>
                                        <td><?=$data['id_team']?></td>
                                    </tr>
                                <?php }
                            }
                            if($data_order_bravo != ''){
                                foreach ($data_order_bravo as $data){ ?>
                                    <tr>
                                        <th scope="row"><?=$data['id']?></th>
                                        <td><?=$data['id_name_specoperation']?></td>
                                        <td><?=$data['id_server']?></td>
                                        <td><?=$data['id_price']?></td>
                                        <td><?=$data['id_choice']?></td>
                                        <td><?=$data['id_team']?></td>
                                    </tr>
                                <?php }
                            }
                            if($data_order_charlee != ''){
                                foreach ($data_order_charlee as $data){ ?>
                                    <tr>
                                        <th scope="row"><?=$data['id']?></th>
                                        <td><?=$data['id_name_specoperation']?></td>
                                        <td><?=$data['id_server']?></td>
                                        <td><?=$data['id_price']?></td>
                                        <td><?=$data['id_choice']?></td>
                                        <td><?=$data['id_team']?></td>
                                    </tr>
                                <?php }
                            }
                        } ?>
                            </tbody>
                        </table>

                        <?php
                        if($data_case_alfa != '' or $data_case_bravo != '' or $data_case_charlee != ''){ ?>
                            <h1>Список заказов поользователя в кейсах!</h1>
                            <table class="table table-striped table-dark table-bordered">
                            <thread>
                                <tr>
                                    <th>№</th>
                                    <th>Наименование</th>
                                    <th>Сервер</th>
                                    <th>Баллы</th>
                                    <th>Победитель</th>
                                    <th>Провели</th>

                                </tr>
                            </thread>
                            <tbody>

                            <?php
                            if($data_case_alfa != ''){
                                foreach ($data_case_alfa as $data){ ?>
                                    <tr>
                                        <th scope="row"><?=$data['id']?></th>
                                        <td><?=$data['id_name_specoperation']?></td>
                                        <td><?=$data['id_server']?></td>
                                        <td><?=$data['id_price']?></td>
                                        <td><?=$data['id_choice']?></td>
                                        <td><?=$data['id_team']?></td>
                                    </tr>
                            <?php }
                            }

                            if($data_case_bravo != ''){
                                foreach ($data_case_bravo as $data){ ?>
                                    <tr>
                                        <th scope="row"><?=$data['id']?></th>
                                        <td><?=$data['id_name_specoperation']?></td>
                                        <td><?=$data['id_server']?></td>
                                        <td><?=$data['id_price']?></td>
                                        <td><?=$data['id_choice']?></td>
                                        <td><?=$data['id_team']?></td>
                                    </tr>
                                <?php }
                            }

                            if($data_case_charlee != ''){
                                foreach ($data_case_charlee as $data){ ?>
                                    <tr>
                                        <th scope="row"><?=$data['id']?></th>
                                        <td><?=$data['id_name_specoperation']?></td>
                                        <td><?=$data['id_server']?></td>
                                        <td><?=$data['id_price']?></td>
                                        <td><?=$data['id_choice']?></td>
                                        <td><?=$data['id_team']?></td>
                                    </tr>
                                <?php }
                            }

                            ?>
                            </tbody>
                        </table>
                        <?php } ?>

                        <?php
                        if($data_qiwi != ''){ ?>
                            <h1>Список платежей пользователя!</h1>
                            <?php
                            $data_payments = $data_qiwi;
                            if($data_payments != '') { ?>
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

                            <?php

                        }
                    }
                }else{
                    echo 'Number of order not found';
                }
            }else{
                echo 'Type of order not found';
            }
        }else{
            echo 'Server not found';
        }

    ?>




<?php } ?>