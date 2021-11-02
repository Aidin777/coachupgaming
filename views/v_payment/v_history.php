<h1><?=$title?></h1>

<?php
//echo '<pre>';
//var_dump($history);
//echo '</pre>';
?>
<table class="table table-striped ">
    <tr>
        <th>Номер заказа</th>
        <th>Promo</th>
        <th>Сумма</th>
        <th>Баллы</th>
        <th>Дата создания</th>
        <th>Статус</th>
        <th>Платёжная система</th>
    </tr>

<?php
if ($history != ''){
    foreach ($history as $payment){ ?>
        <tr>
            <th><?=$payment['id_payment']?></th>
            <th><?=$payment['promo']?></th>
            <th><?=$payment['summ']?></th>
            <th><?=$payment['points']?></th>
            <th><?=$payment['date']?></th>
            <?php
                if($payment['status'] == 1){
                    $message = 'оплачено';
                }else{
                    $message = 'в ожидании';
                }
            ?>
            <th><?=$message ?></th>
            <th><?=$payment['payment_system']?></th>
        </tr>
    <?php }
} ?>

</table>
