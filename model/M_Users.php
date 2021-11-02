<?php

class M_Users{

    private static $instance;
    private $mysqli;
    private $sid;
    private $uid;

    private $onlineMap;

    public static function Instance(){
        if (self::$instance == null)
            self::$instance = new M_Users();

        return self::$instance;
    }


//Проверка на подписку в группе
    public static function check_group(){
    $group = $_SESSION['user']['group'];
    if($group == 1){
        return true;
    }else{
        return false;
    }
}

//Проверка на авторизацию
    public static function check_authorize(){
        $user = $_SESSION['user']['uid'];
        if($user != ''){
            return true;
        }else{
            return false;
        }
    }
//Проверка на права администратора с привязкой на определённый вк
    public static function check_admin_rights(){
        if($_SESSION['user']['uid'] == 519511142){
            return true;
        }else{
            return false;
        }
    }
//Проверка на права капитанов команд
    public static function check_guide_rights(){
        if($_SESSION['user']['id_rights'] == 'admin' or $_SESSION['user']['id_rights'] == 'guide'){
            return true;
        }else{
            return false;
        }
    }

    public static  function  check_no_ban_guide(){
        if($_SESSION['user']['id_status'] != 5 ){
            return true;
        }else{
            return false;
        }
    }
    public static  function  check_no_ban_user(){
        if($_SESSION['user']['id_status'] != 4 ){
            return true;
        }else{
            return false;
        }
    }

    //Refresh data
    public static function refresh_data(){
        if($_SESSION['user']['uid'] != ''){
            $id_user = $_SESSION['user']['uid'];
            $mysqli = M_MYSQLI::Instance();
            $query = "SELECT * FROM clients_donat WHERE `id_url` = $id_user";
            $data_user = $mysqli->Select($query);

            if($data_user != ''){
                $_SESSION['user']['id_balance'] = $data_user[0]['id_balance'];
                $_SESSION['user']['id_points'] = $data_user[0]['id_points'];
                $_SESSION['user']['id_rights'] = $data_user[0]['id_rights'];
                $_SESSION['user']['id_all_payments'] = $data_user[0]['id_all_payments'];
                $_SESSION['user']['id_status'] = $data_user[0]['id_status'];
            }else{
                $_SESSION['user']['id_balance'] = 0;
                $_SESSION['user']['id_points'] = 0;
                $_SESSION['user']['id_rights'] = 0;
                $_SESSION['user']['id_all_payments'] = 0;
                $_SESSION['user']['id_status'] = 0;
            }
        }
    }

    public  static function specoperation_data(){
        $mysqli = M_MYSQLI::Instance();
        $query = "SELECT * FROM `specoperations`";
        $specop_data = $mysqli->Select($query);
        return $specop_data;
    }

//    Обмен денег на тренировку
    public static function change_money_on_type_training($type){
        if($_SESSION['user']['uid'] != '') {
            $id_user = $_SESSION['user']['uid'];

            $mysqli = M_MYSQLI::Instance();

            $query = "SELECT * FROM clients_donat WHERE `id_url` = $id_user";
            $data_user = $mysqli->Select($query);
            $data_user = $data_user[0];
//            var_dump($data_user);
            switch ($type){
                case 'base':
                    $max_count = 13;
                    break;
                case 'power':
                    $max_count = 12;
                    break;
                case 'muscle_building':
                    $max_count = 12;
                    break;
            }
            if($data_user != ''){
                $value = $data_user["$type"];

                if($value == NULL){
                    $value = 0;

                    echo '<br>'.$value;
                }
                //Проверка на максимальное количество уже купленных тренировок
                if($value < $max_count){
//                    echo '<br>Максимальное число - '. $max_count;
                    $value++;
//                    echo $value;
                    $money_user = $data_user['id_balance'];

                    $price_training = 1500;
                    if($money_user >= $price_training){
                        $money_user = $money_user - $price_training;
                        $query = "UPDATE clients_donat set `$type` = $value, `id_balance` = $money_user WHERE `id_url` = $id_user";
                        $update_value = $mysqli->Update($query);

                        $_SESSION['user']["$type"] = $value;
                        $_SESSION['user']['id_balance'] = $money_user;
                        echo '<div class="alert alert-success">Тренировка успешно приобретена!</div>';
                    }else{
                        echo '<div class="alert alert-danger">Не достаточно средств!</div>';
                    }
                }else{
                    echo '<div class="alert alert-danger">У вас и так максимальное количество тренировок в выбранной категории!</div>';
                }
            }
        }
    }

    public static function you_have_ban(){
        echo '<div class="alert alert-danger">Вы имеете бан в бонусном разделе!</div>';
    }

    //Выбор команды Пользователем!
    public static function select_team_from_client($server, $type_order, $number_order, $choice_team){
        if($_SESSION['user']['uid'] != '') {
            $table = $server.'_'.$type_order;

            $id_user = $_SESSION['user']['uid'];
            $mysqli = M_MYSQLI::Instance();

            //Защита от дурака для $number_order

            //Взять все заказы пользователя, и выбрать все номера и сравнить
            $query_all = "SELECT * FROM $table WHERE id_url = $id_user";
            $data_of_all_orders = $mysqli->Select($query_all);

            $real_number_of_order = 1;
            $number_order = (int)$number_order;

            foreach ($data_of_all_orders as $data){
                if($data['id'] == $number_order){
                    $real_number_of_order = $number_order;
                }
            }
//            echo $real_number_of_order;

            $query_order = "SELECT * FROM $table WHERE `id` = $real_number_of_order";

            $data_of_order = $mysqli->Select($query_order);

            $data_of_order = $data_of_order[0];


            if($data_of_order != ''){
                //Соотвествие урл клиента в заказе с авторизованным пользователем
                if($data_of_order['id_url'] == $id_user){
                    //Проверка на статус заказа! Если 1- уже закрыто! Иначе продолжаем...
                    if($data_of_order['id_status'] != 1){
                        $team_id = 1;
                        $mPages = M_Pages::Instance();
                        $teams = $mPages->show_teams();

                        $team_id = 7;
                        $choice_team = (int)$choice_team;

                        foreach ($teams as $team){
                            if($team['team_id'] == $choice_team){
                                $team_id = $choice_team;
                            }
                        }
                        date_default_timezone_set('Europe/Moscow');
                        $time = date('Y.m.d H:i:s');

                        $query = "UPDATE $table set `id_choice` = '$team_id', `edit` = '$time' WHERE id = $real_number_of_order";
                        $query_update = $mysqli->Update($query);

                        
                        echo '<div class="alert alert-success">Вы успешно выбрали состав - '.$team_id.'! В заказе - '.$real_number_of_order.' !<br>
                         Если вы ошиблись с выбором состава, не переживайте... Пока капитан команды не закрыл заказ вы в праве выбрать состав снова! <br>
                         Поэтому писать в поддержку не стоит)))))</div>';
                    }else{
                        echo '<div class="alert alert-danger">Заказ уже закрыт!!</div>';
                    }
                }else{
                    echo '<div class="alert alert-danger">Данный заказ вам не принадлежит!</div>';
                }
            }else{
                echo '<div class="alert alert-danger">Номер заказа не найден!</div>';
            }
        }
    }
    



//Обмен баллов или очков на спецоперацию
    public static function change_currency_on_specoperation($type_of_payment, $server, $specoperation_value){
        if($_SESSION['user']['uid'] != ''){
            $id_user = $_SESSION['user']['uid'];

            $mysqli = M_MYSQLI::Instance();

            $query = "SELECT * FROM clients_donat WHERE `id_url` = $id_user";
            $data_user = $mysqli->Select($query);

            //Если есть данные в таблице, то подключаемся к таблице спецопераций и берём оттуда данные от спецопераций!
            if($data_user != ''){
                //Проверка на выбор сервера

                $server_name = '';
                switch ($server){
                    case 'alfa':
                        $server_name = 'alfa';
                        break;
                    case 'bravo':
                        $server_name = 'bravo';
                        break;
                    case 'charlee':
                        $server_name = 'charlee';
                        break;
                }
                //Выбран ли сервер?
                if($server_name != ''){
                    //Проверка типа спецухи(ПРОДУМАТЬ!) вводить вручную

                    $spec_value = 'pripiat_profi';

                    $query_specoperation = "SELECT * FROM `specoperations`";
                    $query_spec = $mysqli->Select($query_specoperation);

                    foreach ($query_spec as $specoperation){
                        if($specoperation['value'] == $specoperation_value){
                            $spec_value = $specoperation_value;
                            $specoperation_data = $specoperation;
                        }
                    }

                    //Даём начальные данные(Защита от дурака)
                    $table_type = '_order_donat';
                    $user_balance = $data_user['id_balls'];
                    $spec_price = $specoperation_data['balls'];
                    $spec_name = 'Припять_Профи';

                        //Выбираем какой тип Баллы или Oчки!
                        switch ($type_of_payment){
                            case 'balls':
                                $table_type = '_order_donat';
                                $user_balance = $data_user[0]['id_balls'];
                                $spec_price = $specoperation_data['balls'];
                                $spec_name = $specoperation_data['name'];
                                $field_client = 'id_balls';
                                break;
                            case 'points':
                                $table_type = '_case';
                                $user_balance = $data_user[0]['id_points'];
                                $spec_price = $specoperation_data['points'];
                                $spec_name = $specoperation_data['name'];
                                $field_client = 'id_points';
                                break;
                        }
//                    echo 'Баланс - '.$user_balance.'<br>';
//                    echo 'Тип - '.$table_type.'<br>';
//                    echo 'Прайс спецухи - '.$spec_price.'<br>';
//                    echo 'Поле - '.$field_client.'<br>';
//                    echo 'Server - '.$server_name.'<br>';
                    if($user_balance == NULL){
                        $user_balance = 0;
                    }

                    if($user_balance >= $spec_price){
                        //Вычитаем у пользователя очки и вставляем в бд заказ
                        $final_balance = $user_balance - $spec_price;
                        $id_screen = $_SESSION['user']['photo_100'];

                        //Обновляем значения данных у пользователя
                        $user_update = "UPDATE clients_donat SET `$field_client` = $final_balance WHERE `id_url` = $id_user";
                        $data_user_update = $mysqli->Update($user_update);

                        //Создаём заказ спецухи в таблице кейсов или обменника
                        $table = $server_name.$table_type;

                        date_default_timezone_set('Europe/Moscow');
                        $time = date('Y.m.d H:i:s');

                        $spec_final_query = "INSERT INTO $table (
                              `id_url`, `id_screen`, `id_name_specoperation`, `id_price`, `id_server`, `id_status`, `id_choice`, `id_team`, `create`, `edit`)
                        VALUES('$id_user', '$id_screen', '$spec_name', '$spec_price', '$server_name', 0, NULL, NULL, '$time', '$time' )";

                        $create_spec = $mysqli->Insert($spec_final_query);

                        if($table_type == '_order_donat'){
                            $_SESSION['user']['id_balls'] = $final_balance;
                        }else{
                            $_SESSION['user']['id_points'] = $final_balance;
                        }
                        echo '<div class="alert alert-success">Ваш заказ успешно создан, ожидайте когда вам напишут в ВК( Не забывайте включить возможность вам написать)!<hr> Если вы выбрали ПП или ВП изучите тактику, не забывайте о штрафах!
Выбранная спецоперация находится в разделе ПРОФИЛЬ -> ОБМЕННИК(КЕЙСЫ). <hr>Не забывайте, что только после прохода в вашем заказе необходимо выбрать номер команды, которая вас провела! Иначе ждать другой состав, который вас поведёт!</div >';
                    }else{
                        echo '<div class="alert alert-danger">У вас недостаточно средств для обмена!</div >';
                    }
                }else{
                    echo  '<div class="alert alert-danger">Вы не выбралии сервер!</div >';
                }
            }else{
                echo  '<div class="alert alert-danger">Для данных действий необходимо пополнить баланс!</div >';
            }
        }
    }

//Выбор команды от пользователя

//Выбор команды от капитана состава

//Киви -------------------------
//Проверка на наличие существующих платежей
    public static function check_no_exist_payments(){
        //Если есть существующие платежи то вернуть false
        $id_user = $_SESSION['user']['uid'];
        if($id_user != ''){
            //0 - статус не оплаченный!
            //1 - оплачено
            $query = "SELECT * FROM users_payments WHERE id_user = $id_user AND status = 0";

            $mysqli = M_MYSQLI::Instance();

            $result_payment = $mysqli->Select($query);

            if($result_payment == '') {
                return true;
            }else{
                return false;
            }
        }
    }

    public static function get_not_payed_order(){
        $id_user = $_SESSION['user']['uid'];
        $table = 'users_payments';
        // Проверка на существующие заказы

        $query = "SELECT * FROM $table WHERE id_user = $id_user AND status = 0";
        $mysqli = M_MYSQLI::Instance();
        $result_payment = $mysqli->Select($query);
//        var_dump($result_payment);
        return $result_payment;
    }

    public static function create_payment_robocassa($promo, $summ_id){
        $id_user = $_SESSION['user']['uid'];
        $table = 'users_payments';
        // Проверка на существующие заказы

        $query = "SELECT * FROM $table WHERE id_user = $id_user AND status = 0";
        $mysqli = M_MYSQLI::Instance();
        $result_payment = $mysqli->Select($query);
//        var_dump($result_payment);

        $pages = M_Pages::Instance();
        $all_prices = $pages->show_prices();
        $utubers = $pages->show_utubers();

        // Все известные прайсы, сравнить со значением полученным, чтобы были только нужные ценники
        $summ = 1000;
        $points = 0;
        $current_promo = 'arny';
        // Если нету платежей со статусом 0, то создаём платёж дальше
        if($result_payment == '') {
            $summ_id = (int)$summ_id;
            foreach ($all_prices as $price) {
                $price['id'] = (int)$price['id'];
                if($summ_id == $price['id']){
                    $summ = $price['price'];
                }
            }

            foreach ($utubers as $user){
                if($promo == $user['utuber_promo']){
                    $current_promo = $user['utuber_promo'];
                }
            }
        }


        if($result_payment == ''){
            $query = "INSERT INTO $table (`id_user`,`promo`, `summ`, `points`, `payment_system`, `status`) 
                                                              VALUES ('$id_user', '$current_promo', '$summ', '$summ', 'RK', 0)";

            $create_payment = $mysqli->Insert($query);
            $query = "SELECT * FROM $table WHERE id_user = $id_user AND status = 0";
            $result_payment = $mysqli->Select($query);
        }

    }

    public static function delete_payment_robocassa(){
        $id_user = $_SESSION['user']['uid'];
        $table = 'users_payments';

        $query = "DELETE FROM $table WHERE id_user = '$id_user' AND status = 0";
        $mysqli = M_MYSQLI::Instance();
        $result = $mysqli->Delete($query);
    }

    public static function updateUsersData($id_payment, $summ){
        // 1) Найти заказ с пришедшим номером и проверить статус на 0
        // mysqli -> number order
        $id_payment = (int)$id_payment; // сумма, которую на предоставили
        $summ = (int)$summ; // номер оплаченного заказа

        // 1) Проверка на существование
        // Подключиться к БД по номеру заказа и взять оттуда номер заказа, если он существует
        // Передать значение в определенный заказ.

        // Сделать проверки на баллы и суммы
        //Таблица  с заказами
        $table = 'users_payments';
        $query = "SELECT * FROM $table WHERE id_payment = $id_payment and status = 0";

        // Написать function update data и вызвать через статику
        $mysqli = M_MYSQLI::Instance();
        $data_order = $mysqli->Select($query);
        $data_order = $data_order[0];

        // Сравнить значение из робокассы и у нас в БД
        // Если равны, то делаем проверку дальше
        $f=@fopen("logs/logs1.txt","a+") or
        die("error");
        if($data_order != ''){
            // Добавление данных в лог файл для отчётности

            $tm = getdate(time());
            date_default_timezone_set('Europe/Kaliningrad');
            $date="$tm[year]-$tm[mon]-$tm[mday] $tm[hours]:$tm[minutes]:$tm[seconds]";
            // Вставить данные в текстовый фал, чтобы увидеть данные заказа.

            //        $summ = 0; // сделать сравнение, чтобы дебичи не обманули

            $points = 0;
            $promo = ''; // не забыть про промокод
            fputs($f,"order_num :$id_payment;Summ :$summ;Date :$date\n");

//            fputs($f,"Есть такой счёт и статус = 0\n");
            fputs($f,"Сумма из бд - ".$data_order['summ'].", сумма оплаты из магазина - ".$summ."\n");


            // 2) Если есть такой заказ, проверить на соответствие сумм принято и той, что в заказе


            if($data_order['summ'] == $summ){
                // 3) Если совпадают, то выставить статус оплачено


                // Если найден, то проверить на статус НЕ выполнено
                fputs($f,"начинаем обновление статуса\n");
                // status = 1 в заказе платежа
                $query = "UPDATE $table set status = 1 WHERE id_payment = $id_payment";
                $query_update = $mysqli->Update($query);
//                fputs($f,"Есть такой счёт и статус = 0\n");
                // Выставить статус выполнено
                fputs($f,"Статус счёта - $id_payment - оплачено\n");
                // Пополнить баланс
                // Если нету данных и это первый платёж, то создать данные человека

                // Смотрим ошибки отсюда.
                $id_user = (int)$data_order['id_user'];
                $table = 'clients_donat';
                $query = "SELECT * FROM $table WHERE id_url = $id_user";
                $user_data = $mysqli->Select($query);
                $user_data = $user_data[0];
                // 4) ID юзера найти
                // id из заказа = id из данных в таблице с клиентами

                if($user_data == ''){
                    // Создаём в таблице данные клиента
                    fputs($f,"Создаётся клиент - $id_user- пополнен на $summ\n");
                   $query = "INSERT INTO $table  (`id`, `id_url`, `id_all_payments`, `id_balance`, `id_rights`, `id_balls`, `id_points`, `id_count_case`, `id_status`, `power`, `fat_loss`, `muscle_building`, `base`)
                                           VALUES (NULL, '$id_user', '$summ', '$summ', 'user', '$summ', '0', '0', '0', '0', '0', '0', '0')";
                    $result = $mysqli->Insert($query);
                }else{
                    // Пополняем баланс
                    $all_payments = $user_data['id_all_payments'];
                    fputs($f,"Баланс исходный - $all_payments - пополнен на $summ, id = $id_user\n");
                    $all_payments = $user_data['id_all_payments'] + $summ; // из БД
                    $id_balance = $user_data['id_all_payments'] + $summ; // из БД
                    // Доделать, апдейт не правильный
                    $balance = $user_data['id_balance'];
                    // Простое пополнение баланса клиента
                    $balance = $balance + $summ;

//                    UPDATE `clients_donat` SET `id_all_payments` = '10000', `id_balance` = '10000', `id_balls` = '4000', `id_points` = '3990' WHERE `clients_donat`.`id` = 15;
                    $query = "UPDATE $table SET id_all_payments = $id_balance, id_balance = $balance WHERE id_url = $id_user";
                    fputs($f,"Баланс клиента под номером - $id_payment- пополнен на $summ, id = $id_user\n");

                    $result = $mysqli->Update($query);
                }
                // Дать ютуберу 10% от суммы клиента.
                fputs($f,"Даём  ютаберу 10%\n");
                $table = 'utubers';
                // Взять промокод из заказа.
                $promo = $data_order['promo'];
                fputs($f,"Промокод $promo\n");
                //utuber_id
                //utuber_url
                //utuber_name
                //utuber_promo
                //utuber_count_clients
                //utuber_cash
                //utuber_useful
                //utuber_salary



                $query = "SELECT * FROM $table WHERE utuber_promo = '$promo'";
                $utuber_data = $mysqli->Select($query);
                $utuber_data = $utuber_data[0];

                if($utuber_data != ''){
                    fputs($f,"Исходные данные ютубера \n");
                    $count_clients = $utuber_data['utuber_count_clients'] + 1;
                    $cash = $utuber_data['utuber_cash'] + ($summ * 0.1);
                    $usefull = $utuber_data['utuber_useful'] + $summ;

                    $query = "UPDATE $table SET utuber_count_clients = '$count_clients', utuber_cash = '$cash', utuber_useful = '$usefull' WHERE utuber_promo = '$promo'";
                    $result = $mysqli->Update($query);
                    fputs($f,"Баланс должен быть обновлён\n");
                }else{
                    fputs($f,"Нету такого ютубера\n");
                }
            }else{
                fputs($f,"сумма не равна той, которая пришла\n");
            }
        }else{
            fputs($f,"заказа не существует\n");
        }
        fclose($f);
    }

    public static function updateUsersDataAdmin($id_user, $summ){
        // 1) Найти заказ с пришедшим номером и проверить статус на 0
        // mysqli -> number order // сумма, которую на предоставили
        $summ = (int)$summ;             // номер оплаченного заказа
        $id_user = (int)$id_user;
        $mysqli = M_MYSQLI::Instance();


        // 3) Если совпадают, то выставить статус оплачено
        $table = 'clients_donat';
        $query = "SELECT * FROM $table WHERE id_url = $id_user";
        $user_data = $mysqli->Select($query);
        $user_data = $user_data[0];


//        var_dump($user_data);
        echo 'Операция началась';
        if($user_data == ''){
            // Создаём в таблице данные клиента
            $query = "INSERT INTO $table  (`id`, `id_url`, `id_all_payments`, `id_balance`, `id_rights`, `id_balls`, `id_points`, `id_count_case`, `id_status`, `power`, `fat_loss`, `muscle_building`, `base`)
                                   VALUES (NULL, '$id_user', '$summ', '$summ', 'user', '$summ', '0', '0', '0', '0', '0', '0', '0')";
            $result = $mysqli->Insert($query);
        }else{
            // Пополняем баланс
            $id_balance = $summ; // из БД
            // Доделать, апдейт не правильный
            $balance = $summ;
//                    UPDATE `clients_donat` SET `id_all_payments` = '10000', `id_balance` = '10000', `id_balls` = '4000', `id_points` = '3990' WHERE `clients_donat`.`id` = 15;
            $query = "UPDATE `$table` SET `id_all_payments` = '$id_balance', `id_balance` = '$balance' WHERE `id_url` = '$id_user'";

            $result = $mysqli->Update($query);
        }

    }


    public static function showDataUser($id_user)
    {

        $id_user = (int)$id_user;
        $table = 'clients_donat';
        $mysqli = M_MYSQLI::Instance();
        $query = "SELECT * FROM $table WHERE id_url = $id_user";
        $user_data = $mysqli->Select($query);
        $user_data = $user_data[0];
        return $user_data;
    }





    //Создание платежа в бд и отправка на киви
    public static function create_payment_qiwi($promo, $phone, $summ, $summ_id){

        //Создать в бд платёжку
        $id_user = $_SESSION['user']['uid'];
        $table = 'users_payments';
        $query = "INSERT INTO $table (`id_user`, `phone`,`promo`, `summ`, `summ_id`, `status`) 
                                                              VALUES ('$id_user', '$phone', '$promo', '$summ', '$summ_id', 0)";
        $mysqli = M_MYSQLI::Instance();
        $create_payment = $mysqli->Insert($query);

        //Для запроса необходимо знать номер заказа.
        $query ="SELECT * FROM $table WHERE id_user = $id_user and status = 0";
        $payment_data = $mysqli->Select($query);


        //Создать запрос в киви магазин!

        //ID счета
        $BILL_ID = $payment_data['id_payment'];

        $PHONE = $phone;
        $summ = $summ.'.00';
        $isoDate = date('c',strtotime("+5 min"));


        $SHOP_ID = "560655";
        $REST_ID = "92459688";
        $PWD = "AQcokSNTZ19p95LOpb4C";

        $pay_source = 'qw';

        $data = array(
            "user" => "tel:+7" . $PHONE,
            "amount" => $summ,
            "ccy" => "RUB",
            "comment" => $promo,
            "lifetime" => $isoDate,
            "pay_source" => $pay_source,
            "prv_name" => "wf-lottery"
        );

        $ch = curl_init('https://api.qiwi.com/api/v2/prv/'.$SHOP_ID.'/bills/'.$BILL_ID);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_USERPWD, $REST_ID.":".$PWD);
        curl_setopt($ch, CURLOPT_HTTPHEADER,array (
            "Accept: application/json"
        ));

        $results = curl_exec ($ch) or die(curl_error($ch));
        //Закомментить две строки
//echo $results;
//echo curl_error($ch);
        curl_close ($ch);

    }


    public function __construct()
    {
        $this->mysqli = M_MYSQLI::Instance();
        $this->sid = null;
        $this->uid = null;
        $this->onlineMap = null;
    }

   

    //Очистка ненужных сессий
    public  function ClearSessions(){
        $min = date('Y-m-d H:i:s', time() - 60 * 20);
        $t = "time_last < '%s'";
        $where = sprintf($t, $min);
        $this->msqli->Delete('sessions', $where);
    }

    public function Login($login, $password, $remember = true)
    {
        // вытаскиваем пользователя из БД
        $user = $this->GetByLogin($login);

        if ($user == null)
            return false;

        $id_user = $user['id_user'];

        // проверяем пароль
        if ($user['password'] != md5($password))
            return false;

        // запоминаем имя и md5(пароль)
        if ($remember)
        {
            $expire = time() + 3600 * 24 * 100;
            setcookie('login', $login, $expire);
            setcookie('password', md5($password), $expire);
        }

        // открываем сессию и запоминаем SID
        $this->sid = $this->OpenSession($id_user);

        return true;
    }

    //Функция выхода


    public function Logout()
    {
        setcookie('login', '', time() - 1);
        setcookie('password', '', time() - 1);
        unset($_COOKIE['login']);
        unset($_COOKIE['password']);
        unset($_SESSION['sid']);
        $this->sid = null;
        $this->uid = null;
    }
    //Получение данных пользователя
    //$id_user если не указан, брать текущего
    //Результат - объект

    public function Get($id_user = null)
    {
        // Если id_user не указан, берем его по текущей сессии.
        if ($id_user == null)
            $id_user = $this->GetUid();

        if ($id_user == null)
            return null;

        // А теперь просто возвращаем пользователя по id_user.
        $t = "SELECT * FROM users WHERE id_user = '%d'";
        $query = sprintf($t, $id_user);
        $result = $this->msqli->Select($query);
        return $result[0];
    }
    
    

    //Брать пользователя по логину

    public function GetByLogin($login)
    {
        $t = "SELECT * FROM users WHERE login = '%s'";
        $query = sprintf($t, mysqli_real_escape_string($login));
        $result = $this->msqli->Select($query);
        return $result[0];

    }

// Проверка наличия привилегии
    // $priv 		- имя привилегии
    // $id_user		- если не указан, значит, для текущего
    // результат	- true или false
    //
    public function Can($priv, $id_user = null)
    {
        if ($id_user == null)
            $id_user = $this->GetUid();

        if ($id_user == null)
            return false;

        $t = "SELECT count(*) as cnt FROM privs2roles p2r
			  LEFT JOIN users u ON u.id_role = p2r.id_role
			  LEFT JOIN privs p ON p.id_priv = p2r.id_priv 
			  WHERE u.id_user = '%d' AND p.name = '%s'";

        $query  = sprintf($t, $id_user, $priv);
        $result = $this->msqli->Select($query);

        return ($result[0]['cnt'] > 0);
    }


    // Проверка активности пользователя
    // $id_user		- идентификатор
    // результат	- true если online
    //
    public function IsOnline($id_user)
    {
        if ($this->onlineMap == null)
        {
            $t = "SELECT DISTINCT id_user FROM sessions";
            $query  = sprintf($t, $id_user);
            $result = $this->msqli->Select($query);

            foreach ($result as $item)
                $this->onlineMap[$item['id_user']] = true;
        }

        return ($this->onlineMap[$id_user] != null);
    }


    // Получение id текущего пользователя
    // результат	- UID
    //
    public function GetUid()
    {
        // Проверка кеша.
        if ($this->uid != null)
            return $this->uid;

        // Берем по текущей сессии.
        $sid = $this->GetSid();

        if ($sid == null)
            return null;

        $t = "SELECT id_user FROM sessions WHERE sid = '%s'";
        $query = sprintf($t, mysqli_real_escape_string($sid));
        $result = $this->msqli->Select($query);

        // Если сессию не нашли - значит пользователь не авторизован.
        if (count($result) == 0)
            return null;

        // Если нашли - запоминм ее.
        $this->uid = $result[0]['id_user'];
        return $this->uid;
    }

    // Функция возвращает идентификатор текущей сессии
    // результат	- SID
    //
    private function GetSid()
    {
        // Проверка кеша.
        if ($this->sid != null)
            return $this->sid;

        // Ищем SID в сессии.
        $sid = $_SESSION['sid'];

        // Если нашли, попробуем обновить time_last в базе.
        // Заодно и проверим, есть ли сессия там.
        if ($sid != null)
        {
            $session = array();
            $session['time_last'] = date('Y-m-d H:i:s');
            $t = "sid = '%s'";
            $where = sprintf($t, mysqli_real_escape_string($sid));
            $affected_rows = $this->msqli->Update('sessions', $session, $where);

            if ($affected_rows == 0)
            {
                $t = "SELECT count(*) FROM sessions WHERE sid = '%s'";
                $query = sprintf($t, mysqli_real_escape_string($sid));
                $result = $this->msqli->Select($query);

                if ($result[0]['count(*)'] == 0)
                    $sid = null;
            }
        }

        // Нет сессии? Ищем логин и md5(пароль) в куках.
        // Т.е. пробуем переподключиться.
        if ($sid == null && isset($_COOKIE['login']))
        {
            $user = $this->GetByLogin($_COOKIE['login']);

            if ($user != null && $user['password'] == $_COOKIE['password'])
                $sid = $this->OpenSession($user['id_user']);
        }

        // Запоминаем в кеш.
        if ($sid != null)
            $this->sid = $sid;

        // Возвращаем, наконец, SID.
        return $sid;
    }

    //
    // Открытие новой сессии
    // результат	- SID
    //
    private function OpenSession($id_user)
    {
        // генерируем SID
        $sid = $this->GenerateStr(10);

        // вставляем SID в БД
        $now = date('Y-m-d H:i:s');
        $session = array();
        $session['id_user'] = $id_user;
        $session['sid'] = $sid;
        $session['time_start'] = $now;
        $session['time_last'] = $now;
        $this->msqli->Insert('sessions', $session);

        // регистрируем сессию в PHP сессии
        $_SESSION['sid'] = $sid;

        // возвращаем SID
        return $sid;
    }



    // Генерация случайной последовательности
    // $length 		- ее длина
    // результат	- случайная строка
    //
    private function GenerateStr($length = 10)
    {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPRQSTUVWXYZ0123456789";
        $code = "";
        $clen = strlen($chars) - 1;

        while (strlen($code) < $length)
            $code .= $chars[mt_rand(0, $clen)];

        return $code;
    }
    
}