<?php
include ('model_qiwi.php');
//mb_internal_encoding('utf8');


//Функция, которая используется для генереции подписи
function hexToStr($hex){
    $string='';
    for ($i=0; $i < strlen($hex)-1; $i+=2){
        $string .= chr(hexdec($hex[$i].$hex[$i+1]));
    }

    return $string;
}

//функция генерации подписи по ключу и строке параметров
function checkSign($key, $req){
    $sign_hash = hash_hmac("sha1", $req, $key);
    $sign_tr = hexToStr($sign_hash);
    $sign = base64_encode($sign_tr);

    return $sign;
}

//Функция возвращает упорядоченную строку значений параметров POST-запроса
function getReqParams(){
    $reqparams = "";
    ksort($_POST);
    foreach ($_POST as $param => $valuep) {
        $reqparams = "$reqparams|$valuep";
    }
    return substr($reqparams,1);
}

//Извлечение цифровой подписи из заголовков запроса
function getSign(){
    $HEADERS = getallheaders();
    foreach ($HEADERS as $header => $value) {
        if ($header == 'X-Api-Signature') {
            $SIGN_REQ = $value;
        }
    }

    return $SIGN_REQ;
}

// Сортировка параметров
$Request = getReqParams();
// Пароль ishop для уведомлений магазина
$NOTIFY_PWD = "mL45HOLKIBENmpxk8SlG";
// Вычисляем подпись

$reqres = checkSign($NOTIFY_PWD, $Request);

// Подпись из запроса
$SIGN_REQ = getSign();

if ($reqres == $SIGN_REQ) {
    $error = 0;
}
else $error = 151;


//waiting	Счет выставлен, ожидает оплаты или оплачивается	-
//paid	Счет оплачен	+
//rejected	Счет отклонен	+
//unpaid	Ошибка при проведении оплаты. Счет не оплачен	+
//expired	Время жизни счета истекло. Счет не оплачен +


if($error == 0){
    //Даём обработку полученному платежу
    exist_order_payment($id_payment, $error);


}else{
    //Удаляем заказ из бд с платежами в ожидании

}

switch ($result['status']){
    case 'waiting':
        //ничего не делаем  статус 0
        break;
    case 'paid':
        //vдобавляем в другую таблицу или в этой меняем. статус 1
        //Смотрим номер заказа, пополняем баланс юзера

        break;
    case 'rejected':
        //Удаляем из таблицы
        break;
    case 'unpaid':
        //удаляем из таблицы
        break;
    case 'expired':
        //удаляем заказ
        break;
}



