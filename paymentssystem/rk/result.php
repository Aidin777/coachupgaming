
<?php
// file for processing data to db

// регистрационная информация (пароль #2)
// registration info (password #2)
$mrh_pass2 = "Q61VM4rkhLCsBTckHo64";
//pass2      SiyOMj4yz31yiyPnn2s4
//tst  pass2   Q61VM4rkhLCsBTckHo64

//установка текущего времени
//current date

//echo $date.';<br>';
// чтение параметров
// read parameters
$out_summ = $_REQUEST["OutSum"];
$inv_id = $_REQUEST["InvId"];
//$shp_item = $_REQUEST["Shp_item"];
$crc = $_REQUEST["SignatureValue"];

$crc = strtoupper($crc);

//$my_crc = strtoupper(md5($out_summ.':'.$inv_id.':'.$mrh_pass2.':Shp_item='.$shp_item));
$my_crc = strtoupper(md5($out_summ.':'.$inv_id.':'.$mrh_pass2));


//$table = 'utubers';
//$query = "SELECT * FROM $table WHERE id_url = 519511142";

// Написать function update data и вызвать через статику
//$mysqli = M_MYSQLI::Instance();
//$data_order = $mysqli->Select($query);
//$promo = 'genkoMan';
//$query = "SELECT * FROM $table WHERE utuber_promo = '$promo'";
//$utuber_data = $mysqli->Select($query);
//$utuber_data = $utuber_data[0];
echo '<pre>';
//var_dump($utuber_data);
//var_dump($utubers);
echo '</pre>';

// скрипт обработки с создания ресурса - работает.
$out_summ = $_REQUEST["OutSum"];
$inv_id = $_REQUEST["InvId"];
$shp_item = $_REQUEST["Shp_item"];
$crc = $_REQUEST["SignatureValue"];


// check signature
if ($my_crc != $crc)
{
    echo 'Несоответствие цифровых подписей<br><pre>';
    $text_data = file_get_contents('logs/logs1.txt');
    echo $text_data.'</pre>';
}else{
//        $f=@fopen("logs/logs1.txt","a+");
    //    fputs($f,"Заказ не прошел, ошибка подписи\n");
    //    fputs($f,'my_crc='.$my_crc.'___crc=.'.$crc.'\n');
    //    fputs($f,"order_num :$inv_id;Summ :$out_summ;Date :$date\n");
//        fclose($f);

    // 1) Проверка на существование
    // Подключиться к БД по номеру заказа и взять оттуда номер заказа, если он существует
    // Передать значение в определенный заказ.

//    $number_order = $inv_id;
//    $table = 'users_payments';
//    $query_order = "SELECT * FROM $table WHERE id_payment = $number_order and status = 0";
//    $data_order = $mysqli->Select($query_order);
//    // Сравнить значение из робокассы и у нас в БД
//    // Если равны, то делаем проверку дальше
//    if($data_order != '' ){
//        // Вставить в блокнот, что такой заказ существует
//        // Прочитать строку для оплаты, счделать в тестовом редакторе
//        // $data_order['status'] - строка
//        $status = $data_order['status'];
//        if($status == 0 ){
//            $message = 'Номер заказа - '. $data_order['id_payment'].' имеет статус = '.$status.' изменён на 1 - оплачено';
//            //    echo "OK$inv_id\n";
//            // Сделать проверку на соотвествие сумм.
//            // Та сумма, которая в бд есть, сравнить с той, что пришла
////            M_Users::updateUsersData($inv_id, $out_summ);
//        }else{
//            // Заказ уже оплачен
//            $message = 'Заказ уже оплачен, повторное пополнение по этому заказу невозможно - '. $data_order['id_payment'];
//        }
////            $f=@fopen("logs/logs1.txt","a+");
////        //    fputs($f,"Заказ не прошел, ошибка подписи\n");
////        //    fputs($f,'my_crc='.$my_crc.'___crc=.'.$crc.'\n');
////            fputs($f,$message.'\n');
////        //    fputs($f,"order_num :$inv_id;Summ :$out_summ;Date :$date\n");
////            fclose($f);
//    } else {
//        $message = 'Такого заказа не существует \n';
//    }
//    // Вставить в тестовый документ текст об оплате
//    $f=@fopen("logs/logs1.txt","a+");
//    fputs($f,"order_num :$inv_id;Summ :$out_summ;Date :$date\n");
//    fputs($f,$message.'\n');
//    fclose($f);
    //    echo "OK$inv_id\n";



    M_Users::updateUsersData($inv_id, $out_summ);
// запись в файл информации о проведенной операции
// save order info to file

}
?>


