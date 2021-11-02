<h3>Платёжная система</h3>

<?php

    if($_SESSION['user']['uid']){
        //Проверка на нажатие кноки оплаты
        if($_POST['pay_qiwi777']) {
            //Проверка на ознакомление с тремя пунктами
            if($_POST['new_kid'] and $_POST['teams'] and $_POST['fines']){

            //Проверка типа данных телефона и длины символов
            if( $_POST['price_qiwi'] and $_POST['promo'] and $_POST['phone']){
//                    echo '+7'.$_POST['phone'].'<br>';
//                    $type_phone = gettype($_POST['phone']);
//                    echo $type_phone.'<br>';

                    $number_phone = (int)$_POST['phone'];
                    $lenght = strlen((string)$number_phone);
//                    echo $number_phone.'- Номер телефона<br>';
//                    echo $lenght.'- Длина после обработки<br>';

                    if(gettype($number_phone) == 'integer' and $lenght == 10){
//                        echo $number_phone.' = integer';
//                      Проверка на неоплаченные заказы
                        if(M_Users::check_no_exist_payments()){
                            //Выбор платежа

                            switch ($_POST['price_qiwi']){
                                case '1':
                                    $price = 50;
                                    $summ_id = 1;
                                    break;
                                case '2':
                                    $price = 100;
                                    $summ_id = 2;
                                    break;
                                case '3':
                                    $price = 500;
                                    $summ_id = 3;
                                    break;
                                case '4':
                                    $price = 1000;
                                    $summ_id = 4;
                                    break;
                                case '5':
                                    $price = 2000;
                                    $summ_id = 5;
                                    break;
                                case '6':
                                    $price = 3000;
                                    $summ_id = 6;
                                    break;
                                case '7':
                                    $price = 4000;
                                    $summ_id = 7;
                                    break;
                                case '8':
                                    $price = 5000;
                                    $summ_id = 8;
                                    break;
                                case '9':
                                    $price = 4500;
                                    $summ_id = 9;
                                    break;
                                case '10':
                                    $price = 7500;
                                    $summ_id = 10;
                                    break;
                                case '11':
                                    $price = 4000;
                                    $summ_id = 11;
                                    break;
                                case '12':
                                    $price = 7000;
                                    $summ_id = 12;
                                    break;
                                case '13':
                                    $price = 4000;
                                    $summ_id = 13;
                                    break;
                                case '14':
                                    $price = 7000;
                                    $summ_id = 14;
                                    break;
                                default:
                                    $price = 50;
                                    $summ_id = 1;
                            }

                            switch ($_POST['promo']){
                                case 'arny':
                                    $promo = 'arny';
                                    break;
                                case 'openok':
                                    $promo = 'openok';
                                    break;
                                case 'gribo':
                                    $promo = 'gribo';
                                    break;
                                case 'deadmen':
                                    $promo = 'deadmen';
                                    break;
                                case 'genkoMan':
                                    $promo = 'genkoMan';
                                    break;
                                case 'grishko':
                                    $promo = 'grishko';
                                    break;
                                default:
                                    $promo = 'arny';
                            }

                            $phone = '+7'.$number_phone;
                            //Создать запрос на QIWI.com
                            M_Users::create_payment_qiwi($promo, $phone, $price, $summ_id);
                            ?>
                            <div class="btn btn-success btn-block">Запрос на сумму <?=$price?> рублей создан! Перейдите в личный кабинет
                                <a target="_blank" href="https://qiwi.com/main">QIWI</></a> для оплаты!</div>
                            <?php
                            //Иначе вывести запись в лс киви зайдите!
                        } else { ?>
                            <div class="btn btn-danger btn-block">Есть неоплаченный заказ! Перейдите в личный кабинет
                                <a target="_blank" href="https://qiwi.com/main">QIWI</></a> для оплаты!</div>
                        <? }

                    }else{ ?>
                        <div class="btn btn-danger btn-block">Некорректные данные для оплаты, введите номер повторно!</div>
               <?php }
                }
            //Конец проверки с 3 пунктами!
            }else{ ?>
            <div class="btn btn-danger btn-block">Необходимо ознакомиться со всеми пунктами!</div>
            <?php }
        } ?>

        <form action="" method="post">
            <input type="checkbox" required name="new_kid"> C правилами <a target="_blank" href="/info/new_kid">Новичка</a> ознакомлен!<br>
            <input type="checkbox" required name="teams"> C правилами <a target="_blank" href="/info/teams">Команд</a> ознакомлен!<br>
            <input type="checkbox" required name="fines"> Cо <a target="_blank" href="/info/fines">Штрафами</a> на сайте ознакомлен!<br>
            <input type="checkbox" required name="off_claims"> Я отказываюсь от претензий, если при использовании данных программ тренировок наврежу себе!<br>
<!--            <input type="checkbox" required name="off_bonus"> В конце каждого месяца не потраченные БАЛЛЫ и ОЧКИ сбрасываются!<br>-->
            <input type="checkbox" required name="payback"> Я понимаю, что раздел пве бесплатный и буду терпеливо ждать когда мне напишет капитан команды (Если вы играете WarFace)!<br>
            <select name="price_qiwi">
                <?php $help = '(Помощь в развитии ресурса!)' ?>
                <option value="1">50рублей - 50 баллов<?=$help?></option>
                <option value="2">100рублей - 100 баллов<?=$help?></option>
                <option value="3">500рублей - 500 баллов<?=$help?></option>
                <option value="4">1000рублей - 1000 баллов<?=$help?></option>
                <option value="5">2000рублей - 2000 баллов<?=$help?></option>
                <option value="6">3000рублей - 3000 баллов<?=$help?></option>
                <option value="7">4000рублей - 4000 баллов<?=$help?></option>
                <option value="8">5000рублей - 5000 баллов<?=$help?></option>
                <option value="9">4500 рублей - Базовый 7 тренировок</option>
                <option value="10">7500 рублей - Базовый 13 тренировок</option>
                <option value="11">4000 рублей - Наращивание 6 тренировок</option>
                <option value="12">7000 рублей - Наращивание 12 тренировок</option>
                <option value="13">4000 рублей - Силовая 6 тренировок</option> 
                <option value="14">7000 рублей - Силовая 12 тренировок</option>
            </select>
            <select name="promo">
                <?php
                    if($utubers){
                        foreach ($utubers as $utuber){ ?>
                            <option value="<?=$utuber['utuber_id']?>"><?=$utuber['utuber_name']?></option>
                       <?php } } ?>
            </select>
            +7<input type="text" placeholder="909777****" required name="phone" maxlength="10" value="<?php
            if(isset($_POST['phone'])) echo $_POST['phone'];
            ?>">
            <input type="submit" value="Пополнить" name="pay_qiwi">
        </form>
    <?php } ?>
