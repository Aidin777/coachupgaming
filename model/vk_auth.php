<?php
$client_id = '6905849'; // ID приложения

$client_secret = 'YsFaB3w28PBTsuQzNtmP'; // Защищённый ключ

$redirect_uri = 'http://coachupgaming.ru'; // Адрес сайта

$url = 'http://oauth.vk.com/authorize';

$params_vk_for_autorization = array(
    'client_id'     => $client_id,

    'redirect_uri'  => $redirect_uri,

    'url' => $url,
    
    'response_type' => 'code'
);
//var_dump($params_vk);

if(isset($_SESSION['user'])){

}else{
    if($_GET['code']) {

//        echo 'Code = '.$_GET['code'].'<br>';
        $result_vk = false;

        $params_vk = array(
            'client_id' => $client_id,
            'client_secret' => $client_secret,
            'code' => $_GET['code'],
            'redirect_uri' => $redirect_uri
        );
//        var_dump($params_vk);
        $token = json_decode(file_get_contents('https://oauth.vk.com/access_token' . '?' . urldecode(http_build_query($params_vk))), true);

        if (isset($token['access_token'])) {
//            echo 'Token +++';
            $params_vk = array(
                'uids'         => $token['user_id'],
//            'fields'       => 'uid,first_name,last_name,screen_name,photo_50,photo_100,sex',
            //sex 1 - woman , 2 - man, 3 - no info
                'fields'       => 'uid,first_name,last_name,photo_100,sex',
                'access_token' => $token['access_token'],
                'v' => '5.95'
            );

            $userInfo = json_decode(file_get_contents('https://api.vk.com/method/users.get' . '?' . urldecode(http_build_query($params_vk))), true);

    //Список групп для вк!
            $groupInfo = json_decode(file_get_contents('https://api.vk.com/method/groups.get' . '?' . urldecode(http_build_query($params_vk))), true);
//            var_dump($groupInfo);

//            var_dump($userInfo);
            if (isset($groupInfo['response'])) {

                $groupInfo = $groupInfo['response'];
                $group_vk = 179354850;
                $i = 0;
                foreach ($groupInfo as $group){
                    if($group == $group_vk) $i++;
                }

                $groupArny = ($i > 0) ? 0 : 1;
//            echo '<pre>';
//            var_dump($userInfo);
//            echo '</pre>';
            }
            if (isset($userInfo['response'][0]['id'])) {

                $userInfo = $userInfo['response'][0];
                $result_vk = true;
//            echo '<pre>';
//            var_dump($userInfo);
//            echo '</pre>';
            }
        }else{
        echo "No token";
        }
        if ($result_vk) {
//        echo "User ID: " . $userInfo['uid'] . '<br>';
//
//        echo "Name: " . $userInfo['first_name'] . '<br>';
//
//        echo "Last_name: " . $userInfo['last_name'] . '<br>';
//
//        echo '<img src="' . $userInfo['photo_100'] . '">';
//        echo '<br>';

            $_SESSION['user']['uid'] = $userInfo['id'];
            $_SESSION['user']['first_name'] = $userInfo['first_name'];
            $_SESSION['user']['last_name'] = $userInfo['last_name'];
            $_SESSION['user']['sex'] = $userInfo['sex'];
            $_SESSION['user']['photo_100'] = $userInfo['photo_100'];
            $_SESSION['user']['group'] = $groupArny;
            // подключиться к бд

            if($_SESSION['user']['uid']){

                $table = 'clients_donat';
                $id = $_SESSION['user']['uid'];
                $query = "SELECT * FROM $table WHERE id_url = $id";
                $mysqli = M_MYSQLI::Instance();
                $row = $mysqli->Select($query);

                $data = $row[0];
//    echo '<br> Баланс = '.$data['id_balance'];
//    echo '<br> Права = '.$data['id_rights'];
//    echo '<br> Очки = '.$data['id_points'];
                if((!$data['id_balance']) or ($data['id_balance'] == NULL)){
                    $data['id_balance'] = '0';
                }
                if((!$data['id_all_payments']) or ($data['id_all_payments'] == NULL)){
                    $data['id_all_payments'] = '0';
                }
                if((!$data['id_points']) or ($data['id_points'] == NULL)){
                    $data['id_points'] = '0';
                }
                if((!$data['id_balls']) or ($data['id_balls'] == NULL)){
                    $data['id_balls'] = '0';
                }
                if((!$data['id_rights']) or ($data['id_rights'] == NULL)){
                    $data['id_rights'] = 'user';
                }
                if((!$data['power']) or ($data['power'] == NULL)){
                    $data['power'] = 0;
                }
                if((!$data['fat_loss']) or ($data['fat_loss'] == NULL)){
                    $data['fat_loss'] = 0;
                }
                if((!$data['muscle_building']) or ($data['muscle_building'] == NULL)){
                    $data['muscle_building'] = 0;
                }
                if((!$data['base']) or ($data['base'] == NULL)){
                    $data['base'] = 0;
                }
//                echo '<br>На балансе = '.$data['id_balance'].' рублей';
//                echo '<br> Баллы = '.$data['id_points'].'<br>';
                $_SESSION['user']['id_balance'] = $data['id_balance'];
                $_SESSION['user']['id_all_payments'] = $data['id_all_payments'];
                $_SESSION['user']['id_points'] = $data['id_points'];
                $_SESSION['user']['id_balls'] = $data['id_balls'];
                $_SESSION['user']['id_rights'] = $data['id_rights'];
                $_SESSION['user']['power'] = $data['power'];
                $_SESSION['user']['muscle_building'] = $data['muscle_building'];
                $_SESSION['user']['fat_loss'] = $data['fat_loss'];
                $_SESSION['user']['base'] = $data['base'];

            }
        }
    }else{
//    echo "None Get['code']!";
    }
}

?>