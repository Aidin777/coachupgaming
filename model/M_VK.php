<?php

class Auth_Vk {
    private $code;
    private $token;
    private $uid;
    private static $instance;
//    private $APP_ID;
//    private $APP_SECRET;
//    private $REDIRECT_URI;
//    private $URL_ACCESS_TOKEN;
//    private $URL_AUTH;
//    private $URL_GET_USER;

    public static function Instance()
    {
        if (self::$instance == null)
            self::$instance = new M_Pages();

        return self::$instance;
    }

    public function __construct() {
        require "config_vk.php";
    }

    public function set_code($code) {
        $this->code = $code;
    }

    public function set_token($token) {

        $this->token = $token;

    }

    public function set_uid($id) {

        $this->uid = $id;

    }

    public function redirect($url) {

        header('HTTP/1.1 301 Moved Permanently');
        header("Location:".$url);
        exit();

    }
    public function get_token(){
        if(!$this->code){
            exit('eror of code');
        }

        $ku = curl_init();
        $query = 'client_id='.APP_ID."&client_secret=".APP_SECRET."&code=".$this->code."&redirect_uri=".REDIRECT_URI;

        cerl_setopt($ku, CURLOPT_URL, URL_ACCESS_TOKEN."?".$query);
        cerl_setopt($ku, CURLOPT_RETURNTRANSFER, URL_ACCESS_TOKEN."?".$query);

        $result = curl_exec($ku);

        curl_close($ku);

        $ob = json_decode($result);

        if($ob->access_token){
            $this->set_token($ob->access_token);
            $this->set_uid($ob->user_id);
            return true;

        }

        else if($ob->error){
            $_SESSION['error'] = "Ошибка";
            return false;
        }

    }
    public function get_user(){

        if(!$this->token){
            exit('Wrong code');
        }
        if(!$this->uid){
            exit('wrong code!');
        }

        $query = "uids=".$this->uid."&fields=first_name,last_name,nickname,sex,bdate,city,country,timezone,photo,photo_medium,photo_big,has_mobile,rate,contacts,education,online,counters&access_token=".$this->token;


        $kur = curl_init();

        curl_setopt($kur, CURLOPT_URL, URL_GET_USER."?".$query);

        // Отключение проверки

        curl_setopt($kur, CURLOPT_URL, false);

        curl_setopt($kur, CURLOPT_SSL_VERIFYPEER, false);

        curl_setopt($kur, CURLOPT_RETURNTRANSFER, TRUE);

        $result2 = curl_exec($kur);

        curl_close($kur);



        $_SESSION['user'] = json_decode($result2);

        var_dump($_SESSION['user']);

        $this->redirect("http://wf-lottery.ru");

    }

}


?>