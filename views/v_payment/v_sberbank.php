<h1>Оплата через сбербанк</h1>

<h3>RoboKassa</h3>

<!--<script src="https://auth.robokassa.ru/Merchant/PaymentForm/FormM.js"></script>-->
<!--<script type="text/javascript" src="https://auth.robokassa.ru/Merchant/bundle/robokassa_iframe.js"></script>-->

<?

// 2.
// Оплата заданной суммы с выбором валюты на сайте ROBOKASSA
// Payment of the set sum with a choice of currency on site ROBOKASSA

// регистрационная информация (логин, пароль #1)
// registration info (login, password #1)
$mrh_login = "couchupgaming";
$mrh_pass1 = "wJ57GEs6pVJeUf6Ik6gd";

$isTest = 1; // test mode
//pass1      sYFumdIRkCMATJv91686
//pass2      SiyOMj4yz31yiyPnn2s4
//tst  pass1   wJ57GEs6pVJeUf6Ik6gd
//tst  pass2   Q61VM4rkhLCsBTckHo64

// номер заказа
// number of order
$inv_id = 56;

// описание заказа
// order description
$inv_desc = "Пополнение баланса аккаунта на couchupgaming";

// сумма заказа
// sum of order

// тип товара
// code of goods
$shp_item = "2";

// предлагаемая валюта платежа1
// default payment e-currency
$in_curr = "";

// язык
// language
$culture = "ru";

// формирование подписи
// generate signature
$crc  = md5("$mrh_login:$out_summ:$inv_id:$mrh_pass1:Shp_item=$shp_item");

// форма оплаты товара
// payment form

//print "<html>".
//    "<form action='https://auth.robokassa.ru/Merchant/Index.aspx' method=POST>".
//    "<input type=hidden name=MerchantLogin value=$mrh_login>".
//    "<input type=hidden name=OutSum value=$out_summ>".
//    "<input type=hidden name=InvId value=$inv_id>".
//    "<input type=hidden name=Description value='$inv_desc'>".
//    "<input type=hidden name=SignatureValue value=$crc>".
//    "<input type=hidden name=Shp_item value='$shp_item'>".
//    "<input type=hidden name=IncCurrLabel value=$in_curr>".
//    "<input type=hidden name=Culture value=$culture>".
//    "<input type=submit value='Пополнить баланс'>".
//    "</form></html>";

//$out_summ = "88888.00";
//$IsTest = 1;
//$crc = md5("$mrh_login:$out_summ:$inv_id:$mrh_pass1");
//echo 'mrh_login - '.$mrh_login.'<br>';
//echo 'out_summ - '.$out_summ.'<br>';
//echo 'inv_id - '.$inv_id.'<br>';
//echo 'inv_desc - '.$inv_desc.'<br>';
//echo 'isTest - '.$isTest.'<br>';
//print "<html><script language=JavaScript ".
//    "src='https://auth.robokassa.ru/Merchant/PaymentForm/FormMS.js?".
//    "MerchantLogin=$mrh_login&OutSum=$out_summ&InvoiceID=$inv_id".
//    "&Description=$inv_desc&SignatureValue=$crc&IsTest=$IsTest'></script></html>";
?>



<?php

if($_POST['create_payment']){
    M_Users::create_payment_robocassa($_POST['promo'], $_POST['summ']);
}

if($_POST['delete']){
    M_Users::delete_payment_robocassa($data['id_payment']);
}
//Обновляемм данные заказа, если была нажата кнопка кдаления или создания платежа
$not_payed_order = M_Users::get_not_payed_order();
$data = $not_payed_order[0];


//var_dump($not_payed_order[0]);
if($data == ''){
//    echo 'Неоплаченных заказов нету';

    ?>

    <form  action='' method=POST>

        <div class="form-group">
            <input type="checkbox" class="form-check-input" id="exampleCheck5" required  name="new_kid">
            <label class="form-check-label1" for="exampleCheck5">C правилами <a target="_blank" href="/info/new_kid">Новичка</a> ознакомлен!</label>
        </div>
        <div class="form-group">
            <input type="checkbox" class="form-check-input" id="exampleCheck4" required  name="teams">
            <label class="form-check-label1" for="exampleCheck4">C правилами <a target="_blank" href="/info/teams">Команд</a> ознакомлен!</label>
        </div>
        <div class="form-group">
            <input type="checkbox" class="form-check-input" id="exampleCheck3" required name="fines">
            <label class="form-check-label1" for="exampleCheck3">Cо <a target="_blank" href="/info/fines">Штрафами</a> на сайте ознакомлен!</label>
        </div>
        <div class="form-group">
            <input type="checkbox" class="form-check-input" id="exampleCheck2" required name="off_claims">
            <label class="form-check-label1" for="exampleCheck2">Я отказываюсь от претензий, если при использовании данных программ тренировок наврежу себе!</label>
        </div>
        <div class="form-group">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" required name="payback">
            <label class="form-check-label1" for="exampleCheck1">Я понимаю, что раздел PVE бесплатный и буду терпеливо ждать когда мне напишет капитан команды (Если вы играете WarFace)!</label>
        </div>
        <div class="form-row">
            <label for="exampleFormControlSelect1">Сумма пополнения баланса</label>
            <div class="col-10">
                <select class="form-control" id="exampleFormControlSelect1" name="summ">
                    <option value="1">100</option>
                    <option value="2">200</option>
                    <option value="3">300</option>
                    <option value="4">400</option>
                    <option value="5">500</option>
                    <option value="6">600</option>
                    <option value="7">700</option>
                    <option value="8">800</option>
                    <option value="9">900</option>
                    <option value="10">1000</option>
                    <option value="11">2000</option>
                    <option value="12">3000</option>
                    <option value="13">4000</option>
                    <option value="14">5000</option>
                    <option value="15">6000</option>
                    <option value="16">7000</option>
                    <option value="17">8000</option>
                </select>
            </div>
            <div class="col-2">рублей</div>
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect2">Промокод</label>
            <select  class="form-control" id="exampleFormControlSelect2" name="promo">
                <option value="self">Сам пришел</option>
                <option value="kirill">mrKirill</option>
                <option value="oleg">mrOleg</option>
            </select>
        </div>


        <!--         <input type=hidden name=Culture value=--><?//=$culture?>
        <!--         --><?php //$out_summ = "8.96"; ?>
        <br>
        <input type=submit value='Создать заказ' name="create_payment"> Для создания номера заказа в платёжной системе
    </form>

    <?php
}else{
?>
<table class="table table-striped ">
    <tr>
        <th>Номер заказа</th>
        <th>Ваш id</th>
        <th>Promo</th>
        <th>Сумма</th>
        <th>Баллы</th>
        <th>Дата создания</th>
        <th>Статус</th>
        <th>Платёжная система</th>
    </tr>
    <tr>
        <td><?=$data['id_payment'] ?></td>
        <td><?=$data['id_user'] ?></td>
        <td><?=$data['promo'] ?></td>
        <td><?=$data['summ'] ?></td>
        <td><?=$data['points'] ?></td>
        <td><?=$data['date'] ?></td>
        <td><?php if($data['status'] == 0){
                echo 'Ожидание';
            }else{ echo 'Оплачено'; } ?></td>
        <td><?=$data['payment_system'] ?></td>
    </tr>

    <tr>
        <td>
            <form action="" method="post">
                <input type="submit" value="Удалить заказ" name="delete">
            </form>
        </td>

        <td colspan="7">
            Удаление заказа, если не верно указана сумма пополнения
        </td>
    </tr>
    <tr>
        <td>
            <form action="https://auth.robokassa.ru/Merchant/Index.aspx" method="post">
                <?php

                // 2.
                // Оплата заданной суммы с выбором валюты на сайте ROBOKASSA
                // Payment of the set sum with a choice of currency on site ROBOKASSA

                // регистрационная информация (логин, пароль #1)
                // registration info (login, password #1)
                $mrh_login = "couchupgaming";
                $mrh_pass1 = "wJ57GEs6pVJeUf6Ik6gd";

                $isTest = 1; // test mode
                //pass1      sYFumdIRkCMATJv91686
                //pass2      SiyOMj4yz31yiyPnn2s4
                //tst  pass1   wJ57GEs6pVJeUf6Ik6gd
                //tst  pass2   Q61VM4rkhLCsBTckHo64

                // номер заказа
                $inv_id = $data['id_payment'];
                // описание заказа
                // order description
                $inv_desc = "Пополнение баланса аккаунта на couchupgaming.ru";

                // сумма заказа
                // sum of order

                $out_summ = $data['summ'].".00";
                // тип товара

                $isTest = 1;
                // предлагаемая валюта платежа1
                // default payment e-currency
                $in_curr = "";

                // язык
                // language
                $culture = "ru";

                // формирование подписи
                // generate signature
                $crc  = md5("$mrh_login:$out_summ:$inv_id:$mrh_pass1");

                echo "<input type=hidden name=MerchantLogin value=$mrh_login>".
                    "<input type=hidden name=OutSum value=$out_summ>".
                    "<input type=hidden name=InvId value=$inv_id>".
                    "<input type=hidden name=IsTest value=$isTest>".
                    "<input type=hidden name=Description value='$inv_desc'>".
                    "<input type=hidden name=SignatureValue value=$crc>".
                    "<input type=hidden name=IncCurrLabel value=$in_curr>".
                    "<input type=hidden name=Culture value=$culture>"; ?>
                <input type="submit" value="Оплатить заказ">
            </form>

            <?php
            //             print "<html><script language=JavaScript ".
            //                 "src='https://auth.robokassa.ru/Merchant/PaymentForm/FormMS.js?".
            //                 "MerchantLogin=$mrh_login&OutSum=$out_summ&InvoiceID=$inv_id".
            //                 "&Description=$inv_desc&SignatureValue=$crc&IsTest=$IsTest'></script></html>";
            //     ?>
        </td>
        <td colspan="7">
            Оплата через КИВИ кошелёк или пластиковую карточку (VISA)
        </td>

    </tr>

    <?php } ?>


    <!--    //    "<form action='https://auth.robokassa.ru/Merchant/Index.aspx' method=POST>".-->
    <!--        //
    <!--        //    "<input type=submit value='Пополнить баланс'>".-->
    <!--        //    "</form>-->



