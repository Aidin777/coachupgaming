<?php
class C_Auth extends C_Base{

    public function __construct()
    {
        parent::__construct();
    }

    public  function before(){
        parent::before();
    }

    public function action_login(){
        $this->title .= '::Авторизация';
        $mUsers = M_users::Instance();
        $mUsers->Logout();
        if($this->isPost()){
            if($mUsers->Logout($_POST['login'], $_POST['password'], $_POST['remember']));
            $this->redirect('/');
        }
        $this->content = $this->Template('views/v_login.php');
    }
}
