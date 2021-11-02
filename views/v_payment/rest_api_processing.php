<?php
function exist_order_payment($id_payment, $result_code){
    $conn = startup();
    $table_users_payments = 'users_payments';
    $result = mysqli_query($conn, "SELECT * FROM $table_users_payments WHERE `id_payment` = $id_payment");
    $row = mysqli_fetch_assoc($result); //данные которые мы получили из киви, сверяем contr таблицей платежей

    if($row != ''){  //Есть ли такой заказ
        echo 'Да такой заказ есть!';

        if($result_code == 0){ //Если статус 0 - оплачено

            $table_clents_donat = 'clients_donat';
            $utabers_table = 'utubers';

            $utuber_money = $row['summ'] * 0.1;  // сумма денег ютубера кровные 10%
            $utuber_promo = $row['promo']; // Промокод из платежа.

            //Делаем статус оплачено, т.к. ответ 0 - клиент оплатил! Меняем статус и делаем оплачено!
            $result = mysqli_query($conn, "UPDATE $table_users_payments SET `status` = 1 WHERE `id_payment` = $id_payment");

            $k = ($result)?'<div class="action action-success">Статус - оплачено!!</div>' : '<div class="action action-attention">Ошибка при обновлении статуса!!!</div>' ;
            echo $k;

            $url_user = $row['id_user']; // берем урл из платежа, чтобы проверить на первый платеж

            $full_payment = $row['summ']; //берем всю сумму платежа, чтобы проверить на первый платеж

            $price_of_first_payment = 2000;

            //Проверка на первый платеж свыше 2000р.
            if($full_payment >= $price_of_first_payment){
                //Проверить на первый платёж, если не пополнял, то дать бонус
                $table_bonus_payments = 'bonus_payments'; //Таблица первых платежей! создать к стати

                $result = mysqli_query($conn, "SELECT * FROM $table_bonus_payments WHERE `id_url` = $url_user");
                $row_bonus = mysqli_fetch_assoc($result);
                //Првоеряем есть ли данные

                $bonus = ($row_bonus == '') ? true : false;

                if($bonus == true){
                    //Внести в таблицу contr первоначальным бонусом 	id	id_url	id_summ	id_time
                    $result = mysqli_query($conn, "INSERT INTO $table_bonus_payments(`id_url`, `id_summ`)
                                                                    VALUES ('$url_user', '$full_payment')");

                    if($result) echo 'Первый бонусный платеж зачислен!';

                    $enought_bonus = 400;  //UPDATE C бонусом в данные пользователя

                    //Подкл-ся к бд и берем данные для апдейта
                    $result = mysqli_query($conn, "SELECT * FROM $table_clents_donat WHERE `id_url` = $url_user");
                    $row_user_data = mysqli_fetch_assoc($result);

                    //Проверяем на наличие, данных.
                    if($row_user_data == ''){
                        //Добавляем в таблицу contr бонусом
                        /*id id_url id_all_payments id_balance id_rights id_points id_count_case id_status  */

                        $result = mysqli_query($conn, "INSERT INTO $table_clents_donat(`id_url`, `id_all_payments`, `id_balance`, `id_rights`, `id_points`, `id_count_case`, `id_status`)
                                                                    VALUES ('$url_user', '$full_payment', '$full_payment', 'user', '$enought_bonus', 0, 0 )");

                    }else{
                        //Делаем апдейт С бонусом, Если были платежи, то просто пополнить!

                        $balance_after = $row_user_data['id_balance'] + $full_payment;
                        $all_payment_after = $row_user_data['id_all_payments'] + $full_payment;
                        $all_points_after = $row_user_data['id_points'] + $enought_bonus;

                        $result = mysqli_query($conn, "UPDATE $table_clents_donat SET `id_all_payments` = $all_payment_after, `id_balance` = $balance_after, `id_points` = $all_points_after
                                                                                                        WHERE `id_url` = $url_user");
                    }
                    //Дать ютаберу его 10%
                    give_utuber_percents($conn, $utabers_table, $utuber_promo, $utuber_money, $full_payment);

                }else{
                    //UPDATE без бонуса
                    update_data_clents_without_bonus($conn, $table_clents_donat, $full_payment, $url_user);

                    //Дать ютаберу его 10%
                    give_utuber_percents($conn, $utabers_table, $utuber_promo, $utuber_money, $full_payment);
                }
            }else{

                update_data_clents_without_bonus($conn, $table_clents_donat, $full_payment, $url_user);

                //Дать ютаберу его 10%
                give_utuber_percents($conn, $utabers_table, $utuber_promo, $utuber_money, $full_payment);
            }
        }else{
            //Удаляем заказ т.к. статус не 0
            $result = mysqli_query($conn, "DELETE FROM $table_users_payments WHERE `id_payment` = $id_payment");
            echo 'Заказ удален, т.к. статус не оплачен или отменён!!'.$id_payment;
        }
    }else{
        echo 'Такого заказа нету!';
    }
    discon();
}

function update_data_clents_without_bonus($conn, $table, $full_payment, $url_user){

    //Просто пополнить баланс, т.к. сумма не превышает бонусную границу
    //Взять данные из таблицы
    $result = mysqli_query($conn, "SELECT * FROM $table WHERE `id_url` = $url_user");
    $row_user_data = mysqli_fetch_assoc($result);
    //Проверка на существование данных в таблице донатеров!
    if(empty($row_user_data)){
        //Если нету данных, то создать
        $result  = mysqli_query($conn, "INSERT INTO $table(`id_url`, `id_all_payments`, `id_balance`, `id_rights`, `id_points`, `id_count_case`, `id_status`)
                                                                    VALUES ('$url_user', '$full_payment', '$full_payment', 'user', 0, 0, 0 )");
    }else{
        //Если были платежи, то просто пополнить!
        $balance_after = $row_user_data['id_balance'] + $full_payment;
        $all_payment_after = $row_user_data['id_all_payments'] + $full_payment;

        $result = mysqli_query($conn, "UPDATE $table SET `id_all_payments` = $all_payment_after, `id_balance` = $balance_after
                                                                                                        WHERE `id_url` = $url_user");
    }
}

function give_utuber_percents($conn, $table, $utuber_promo, $utuber_money, $full_payment){
    //Дать ютаберу его 10%
    $result = mysqli_query($conn, "SELECT * FROM $table WHERE `utuber_promo` = $utuber_promo");
    $utuber_data = mysqli_fetch_assoc($result);
    if(!empty($utuber_data)){
        // utuber_count_clients utuber_cash utuber_useful utuber_salary
        $utuber_count_clients = $utuber_data['utuber_count_clients'];
        $utuber_cash = $utuber_data['utuber_cash'];
        $utuber_useful = $utuber_data['utuber_useful'];

        $utuber_count_clients++;
        $utuber_cash += $utuber_money;
        $utuber_useful += $full_payment;

        $result = mysqli_query($conn, "UPDATE $table SET `utuber_count_clients` = $utuber_count_clients,`utuber_cash` = $utuber_cash, `utuber_useful` = $utuber_useful
                                                                  WHERE `utuber_promo` = $utuber_promo");
        if($result){
            echo 'Выплачено денег ютуберу !'. $utuber_cash;
        }
    }
}
?>