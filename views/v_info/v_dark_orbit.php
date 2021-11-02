<h1>Страница Дарка</h1>


<?php
//$url = 'https://www.darkorbit.com/';
//
//$result = file_get_contents ($url);
//echo $result;

//<div id="header_button_logout" onclick="do_redirect('/indexInternal.es?action=externalLogout')"></div>
$username = 'ДругТестировщика8';
$password = '89154911947Aa';
$fields = 'username='.$username.'&password='.$password.'&submit';
//echo $postfields;
$url = 'https://www.darkorbit.com/index.es?lang=ru';
//$url = 'https://ru3.darkorbit.com/indexInternal.es?action=internalStart&prc=100';

$base_path = 'https://ru3.darkorbit.com/indexInternal.es?action=internal';
$skylab = $base_path.'Skylab';
$auction = $base_path.'Auction';

$data = json_encode([
    "username" => $username,
    "password" => $password,
]);
//$data_string = json_encode($data);

//$curl = curl_init ();
//curl_setopt ($curl, CURLOPT_URL, $url);
//curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
//curl_setopt ($curl, CURLOPT_POST, true);
//curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
////curl_setopt($curl, CURLOPT_HEADER, true);
////curl_setopt($curl, CURLOPT_HTTPHEADER,
////    array(
////        'Content-Type:application/json',
////        'Content-Length: ' . strlen($data_string)
////    )
////);
//$result = curl_exec ($curl);//выполнение запроса
//
//curl_close ($curl);//закрытие сеанса
//
////var_dump($result);
//echo $result;
echo file_get_contents('https://www.darkorbit.com/');

?>

<script>

    login = function(){
        document.getElementById('bgcdw_login_form_username').value = 'ДругТестировщика8';
        document.getElementById('bgcdw_login_form_password').value = '89154911947Aa';
        console.log(a);
        console.log(b);
        setTimeout(enter, 2000);
    }

    function enter(){
        document.getElementsByClassName('bgcdw_button bgcdw_login_form_login')[0].click();
    }

    function closeOtherWindows(){
        document.getElementById('button_close').click();
        document.getElementById('button_main').click();
    }

    function exitToMainPage(){
        let exit = document.getElementById('header_button_home').click();

    }



    // Заход в скайлеб (прокачка дальнейшая, нужна ли или нет.)
    function skyLabEnter(){
        let skylab = document.getElementById('lab_btn');
        skylab.click();
        console.log('Enter in skylab');
    }


    // Выход + выход главному меню, чтобы ввести данные для след аккаунта.
    function logOut(){
            document.getElementById('header_button_logout').click();

        function backToGame(){
            document.getElementsByClassName('buttonGameLink')[0].click();

        }
        setTimeout(backToGame, 3000);
    }

    // Экспедиция, проверка на активные, тупо забрать
    function dispatch(){

        // Нажимаем на активные, (5 раз нужен цикл)
        let  activeDispatch = document.getElementById('dispatch_inprogress').click();

        // Обращаемся ко всем кнопкам с классом получения наград активных и выбираем первую
        let  takeDispatch1 = document.getElementsByClassName('dispatch_collect_button')[0].click();

        closeWindow();




        // Доступные экспедиции
        let  activeAvailable = document.getElementById('dispatch_available').click();


        // Выбираем нужную экспедицию, на ресурсы,чтобы появилась кнопка найма экспедиции
        let  r01 = document.getElementsByClassName('dispatchItemRow')[13].click();

        //Нажимаем  нанять
        let  sendDispatch = document.getElementById('dispatch_dispatch').click();

        //Окно с подтверждением оплаты экспедиции
        let payDispatch = document.getElementsByClassName('button-green')[0].click();

        // Закрыть окно с подтверждением, ОК

        closeWindow();    }


    // Закрыть окно с подтверждением
    function closeWindow(){
        let close = document.getElementsByClassName('button-close')[0].click();
    }



    // function (){
    //     let  = document.getElementById('');
    //     .click();
    // }

    setTimeout(login, 5000);

    function startFarm(){
        login();
        enter();

        setTimeout(closeOtherWindows, 5000); // Закрываем остальные окна
        setTimeout(skyLabEnter, 10000);  // Скайлеб зашли
    }




</script>
