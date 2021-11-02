<h3>RoboKassa::Прайсы для тренировок</h3>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Курс тренировок</th>
        <th scope="col">Цена,рубли</th>
        <th scope="col">Краткое описание</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Базовый домашний (3 недели)</td>
        <td>3000</td>
        <td>Набор массы на обычном питании, без пищевых добавок. Вес до 88кг</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Базовый домашний (2 недели)</td>
        <td>3000</td>
        <td>Набор массы с усиленным питанием, с пищевыми добавками (Протеин + БЦА). Вес до 88кг</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>Конец курса (3-4 недели)</td>
        <td>5000</td>
        <td>Набор массы с усиленным питанием, с пищевыми добавками (Протеин + БЦА). Вес 88,7кг</td>
    </tr>
    <tr>
        <th scope="row">4</th>
        <td>Цикл 2.0 (4 недели)</td>
        <td>10000</td>
        <td>Набор массы с усиленным питанием, с пищевыми добавками (Протеин + БЦА). В процессе.</td>
    </tr>
    <tr>
        <th scope="row">5</th>
        <td>Тренировка в спортзале, проработка</td>
        <td>10000</td>
        <td>Программа в разработке</td>
    </tr>
    </tbody>
</table>



<h5>После пополнения баланса, данные автоматически обновляются на ресурсе</h5>
<h6>При пополнении программы тренировок на большую сумму, автоматически открывается доступ на более бюджетные тренировки</h6>
<h6>То есть при покупке программы на 10.000 рублей, открывается доступ на программы 5.000 и 3.000 рублей</h6>
<h6>При покупке программы на 5.000 рублей, открывается доступ на программы 3.000 рублей</h6>
<h6>Если вы пополнили баланс на 5.000 рублей и захотели приобрести курс на 10.000 рублей, то достаточно пополнить общий на сумму ещё 5.000рублей</h6>
<!--<script src="https://auth.robokassa.ru/Merchant/PaymentForm/FormM.js"></script>-->
<!--<script type="text/javascript" src="https://auth.robokassa.ru/Merchant/bundle/robokassa_iframe.js"></script>-->

<?
//echo '<pre>';
//var_dump($utubers);
//echo '</pre>';

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
//var_dump($utubers);
// Проверка на существующий заказ, есть ли он?
if($_POST['create_payment'] or $_POST['delete']){
    if($_POST['create_payment']){
        M_Users::create_payment_robocassa($_POST['promo'], $_POST['summ']);
    }

// Принадлежит ли заказ этому человеку, статус.
    if($_POST['delete']){
        M_Users::delete_payment_robocassa($data['id_payment']);
    }
//Обновляемм данные заказа, если была нажата кнопка удаления или создания платежа
}

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
<!--         <div class="form-group">-->
<!--             <input type="checkbox" class="form-check-input" id="exampleCheck4" required  name="teams">-->
<!--             <label class="form-check-label1" for="exampleCheck4">C правилами <a target="_blank" href="/info/teams">Команд</a> ознакомлен!</label>-->
<!--         </div>-->
<!--         <div class="form-group">-->
<!--             <input type="checkbox" class="form-check-input" id="exampleCheck3" required name="fines">-->
<!--             <label class="form-check-label1" for="exampleCheck3">Cо <a target="_blank" href="/info/fines">Штрафами</a> на сайте ознакомлен!</label>-->
<!--         </div>-->
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
<!--                    <option value="1">100</option>-->
<!--                    <option value="2">200</option>-->

                    <? foreach ($prices as $price){ ?>
                        <option value=" <?= $price['id']?> "><?= $price['price'] ?></option>
                    <? } ?>

                </select>
            </div>
             <div class="col-2">рублей</div>
         </div>


         <div class="form-group">
             <label for="exampleFormControlSelect2">Промокод</label>
             <select  class="form-control" id="exampleFormControlSelect2" name="promo">

                 <? foreach ($utubers as $utuber){ ?>
                     <option value="<?= $utuber['utuber_promo']?>"><?= $utuber['utuber_name'] ?></option>
                 <? } ?>

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

<div class="row order-to-pay">


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
</div>



         <!--    //    "<form action='https://auth.robokassa.ru/Merchant/Index.aspx' method=POST>".-->
         <!--        //    "<input type=submit value='Пополнить баланс'>".-->
         <!--        //    "</form>-->


