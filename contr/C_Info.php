<?php

class C_Info extends C_Base{

    protected $params_vk_for_authorization;
    private $client_id;
    private $redirect_url;
    private $response_type;

    public function __construct($url, $client_id, $redirect_url){
        parent::__construct();
        $this->url = $url;
        $this->client_id = $client_id;
        $this->redirect_url = $redirect_url;
        $this->response_type = 'code';
        $this->params_vk_for_menu = array('client_id' => $this->client_id,
            'redirect_uri' => $this->redirect_url, 'response_type' => $this->response_type);
    }
    public function before(){
        parent::before();
    }

//    protected function action_edit_orders(){
//        //Сервер - альфа браво чарли
//        //тип заказа - баллы кейсы
//        //номер заказа
//
//        $mUsers = M_Users::Instance();
//        $rights = $mUsers->check_guide_rights();
//
//        //Проверка на права капитанов
//        if($rights){
//            //Проверка на сервера
//            $server = '';
//            if(isset($this->params[2]) and $this->params[2] != ''){
//                switch ($this->params[2]){
//                    case 'alfa':
//                        $server = 'alfa';
//                        break;
//                    case 'bravo':
//                        $server = 'bravo';
//                        break;
//                    case 'charlee':
//                        $server = 'charlee';
//                        break;
//                }
//            }
//            //Баллы или очки
//            $currency = '';
//            if(isset($this->params[3]) and $this->params[3] != ''){
//                switch ($this->params[3]){
//                    case 'balls':
//                        $currency = 'order_donat';
//                        break;
//                    case 'points':
//                        $currency = 'case';
//                        break;
//                }
//            }
//
//            $number_order = 0;
//            //номер заказа
//            if(isset($this->params[4]) and $this->params[4] != ''){
//                $number_order = (int)$this->params[4];
//            }
//            //url_client для его полного досье
//
//            $url_client = 0;
//            if(isset($this->params[5]) and $this->params[5] != ''){
//                $url_client = (int)$this->params[5];
//            }
//
//            $mPages = M_Pages::Instance();
//            $teams = $mPages->show_teams();
//            $mysqli = M_MYSQLI::Instance();
//            $this->title .= '::Редактор!';
//            $this->content = $this->Template('views/v_edit.php', array('title' => $this->title,
//                'server' => $server,
//                'currency' => $currency,
//                'number_order' => $number_order,
//                'url_client' => $url_client,
//                'teams' => $teams,
//                'mysqli' => $mysqli
//
//            ));
//
//        }else{
//
//            $this->title .= '::NOT FOUND!';
//            $this->content = $this->Template('views/v_resource_not_found.php', array(
//                'title' => $this->title,
//                'url'=> $this->url,
//                'params_vk_for_menu' => $this->params_vk_for_menu ));
//        }
//    }


//    public function action_help_changers()
//    {
//        $server = '';
//        if(isset($this->params[2]) and $this->params[2] != ''){
//            switch ($this->params[2]){
//                case 'alfa':
//                    $server = 'alfa';
//                    break;
//                case 'bravo':
//                    $server = 'bravo';
//                    break;
//                case 'charlee':
//                    $server = 'charlee';
//                    break;
//            }
//        }
//        if($server != ''){
//
//            $mPages = M_Pages::Instance();
//            $type = '_order_donat';
//            $table = $server.$type;
//
//            $current_page = 1;
//            $count_orders = 10;
//            $max_rows = $mPages->get_count_rows($table, 1);
//            $max_pages = ceil($max_rows / $count_orders);
//
//            if(isset($this->params[3]) and ($this->params[3] != '') and gettype((int)($this->params[3])) === 'integer'){
//
//                $page = abs((int)$this->params[3]);
//
//                if($page != ''){
////                    if($page >= $max_pages){
////                        $current_page = $max_pages;
////                    }else{
////                        $current_page = $page;
////                    }
//                    $current_page = ($page >= $max_pages) ? $max_pages : $page;
//
//
////                    if($current_page > 1 ){
////                        $current_order = (($current_page - 1) * $count_orders);
////                    }elseif($current_page <= 1){
////                        $current_order = 0;
////                    }
//                    $current_order = ($current_page > 1) ? (($current_page - 1) * $count_orders) : 0;
//
//                    $turn = 'ORDER by id DESC LIMIT '.$current_order.', '.$count_orders;
//                }
//            }else{
//                $turn = 'ORDER by id DESC LIMIT 0, '.$count_orders;
//            }
//
//            $changers_help = $mPages->show_complete_winners($table, 1, $turn);
//        }else{
//            $changers_help = '';
//        }
//        $this->title .= '::Помощь в проходах!';
//        $this->content = $this->Template('views/v_info/v_help_changers.php', array('title' => $this->title,
//            'changers_help' => $changers_help,
//            'server' => $server,
//            'current_page' => $current_page,
//            'count_orders' => $count_orders,
//            'max_pages' => $max_pages,
//
//            'url'=> $this->url,
//            'params_vk_for_menu' => $this->params_vk_for_menu
//        ));
//    }



//    public function action_case_winners()
//    {
//        $server = '';
//        if(isset($this->params[2]) and $this->params[2] != ''){
//            switch ($this->params[2]){
//                case 'alfa':
//                    $server = 'alfa';
//                    break;
//                case 'bravo':
//                    $server = 'bravo';
//                    break;
//                case 'charlee':
//                    $server = 'charlee';
//                    break;
//            }
//        }
//
//        if($server != ''){
//            $mPages = M_Pages::Instance();
//            $type = '_case';
//            $table = $server.$type;
//
//            $current_page = 1;
//            $count_orders = 10;
//            $max_rows = $mPages->get_count_rows($table, 1);
//            $max_pages = ceil($max_rows / $count_orders);
//
//            if(isset($this->params[3]) and ($this->params[3] != '') and gettype((int)($this->params[3])) === 'integer'){
//
//                $page = abs((int)$this->params[3]);
//
//                if($page != ''){
//                    $current_page = ($page >= $max_pages) ? $max_pages : $page;
//
//                    $current_order = ($current_page > 1) ? (($current_page - 1) * $count_orders) : 0;
//
//                    $turn = 'ORDER by id DESC LIMIT '.$current_order.', '.$count_orders;
//                }
//            }else{
//                $turn = 'ORDER by id DESC LIMIT 0, '.$count_orders;
//            }
//            $changers_help = $mPages->show_complete_winners($table, 1, $turn);
//
//        }else{
//            $changers_help = '';
//        }
//        $this->title .= '::Кейсовики!';
//        $this->content = $this->Template('views/v_info/v_case_winners.php', array('title' => $this->title,
//            'changers_help' => $changers_help,
//            'server' => $server,
//            'current_page' => $current_page,
//            'count_orders' => $count_orders,
//            'max_pages' => $max_pages,
//
//            'url'=> $this->url,
//            'params_vk_for_menu' => $this->params_vk_for_menu
//        ));
//    }

//    public function action_changers_active(){
//
//        $server = '';
//        if(isset($this->params[2]) and $this->params[2] != ''){
//            switch ($this->params[2]){
//                case 'alfa':
//                    $server = 'alfa';
//                    break;
//                case 'bravo':
//                    $server = 'bravo';
//                    break;
//                case 'charlee':
//                    $server = 'charlee';
//                    break;
//            }
//        }
//        $mUsers = M_Users::Instance();
//        $rights = $mUsers->check_guide_rights();
//
//        if($rights){
//
//            if($server != ''){
//                $mPages = M_Pages::Instance();
//                $type = '_order_donat';
//                $table = $server.$type;
//                $type_currency = 'balls';
//
//
//                $current_page = 1;
//                $count_orders = 20;
//                $max_rows = $mPages->get_count_rows($table, 1);
//                $max_pages = ceil($max_rows / $count_orders);
//
//
//                if(isset($this->params[3]) and ($this->params[3] != '') and gettype((int)($this->params[3])) === 'integer'){
//
//                    $page = abs((int)$this->params[3]);
//
//                    if($page != ''){
//                        $current_page = ($page >= $max_pages) ? $max_pages : $page;
//
//                        $current_order = ($current_page > 1) ? (($current_page - 1) * $count_orders) : 0;
//
//                        $turn = 'ORDER by id DESC LIMIT '.$current_order.', '.$count_orders;
//                    }
//                }else{
//                    $turn = 'ORDER by id DESC LIMIT 0, '.$count_orders;
//                }
//
//                $changers_help = $mPages->show_complete_winners($table, 0, $turn);
//            }else{
//                $changers_help = '';
//            }
//            $this->title .= '::Заказы Активные!!';
//            $this->content = $this->Template('views/v_info/v_changers_active.php', array('title' => $this->title,
//
//                'changers_help' => $changers_help,
//                'server' => $server,
//                'type_currency' => $type_currency,
//
//                'current_page' => $current_page,
//                'count_orders' => $count_orders,
//                'max_pages' => $max_pages
//            ));
//
//        }else{
//
//            $this->title .= '::NOT FOUND!';
//            $this->content = $this->Template('views/v_resource_not_found.php', array(
//                'title' => $this->title,
//                'url'=> $this->url,
//                'params_vk_for_menu' => $this->params_vk_for_menu ));
//        }
//    }

//    public function action_case_active(){
//        $server = '';
//
//        if(isset($this->params[2]) and $this->params[2] != ''){
//            switch ($this->params[2]){
//                case 'alfa':
//                    $server = 'alfa';
//                    break;
//                case 'bravo':
//                    $server = 'bravo';
//                    break;
//                case 'charlee':
//                    $server = 'charlee';
//                    break;
//            }
//        }
//
//        $mUsers = M_Users::Instance();
//        $rights = $mUsers->check_guide_rights();
//
//        if($rights){
//            if($server != ''){
//                $mPages = M_Pages::Instance();
//                $type = '_case';
//                $table = $server.$type;
//                $type_currency = 'points';
//
//                $current_page = 1;
//                $count_orders = 20;
//                $max_rows = $mPages->get_count_rows($table, 1);
//                $max_pages = ceil($max_rows / $count_orders);
//
//                if(isset($this->params[3]) and ($this->params[3] != '') and gettype((int)($this->params[3])) === 'integer'){
//
//                    $page = abs((int)$this->params[3]);
//
//                    if($page != ''){
//                        $current_page = ($page >= $max_pages) ? $max_pages : $page;
//
//                        $current_order = ($current_page > 1) ? (($current_page - 1) * $count_orders) : 0;
//
//                        $turn = 'ORDER by id LIMIT '.$current_order.', '.$count_orders;
//                    }
//                }else{
//                    $turn = 'ORDER by id LIMIT 0, '.$count_orders;
//                }
//
//
//
//                $changers_help = $mPages->show_complete_winners($table, 0, $turn);
//            }else{
//                $changers_help = '';
//            }
//
//            $this->title .= '::Кейсы активные!';
//            $this->content = $this->Template('views/v_info/v_case_active.php', array('title' => $this->title,
//
//                'changers_help' => $changers_help,
//                'server' => $server,
//                'type_currency' => $type_currency,
//
//                'current_page' => $current_page,
//                'count_orders' => $count_orders,
//                'max_pages' => $max_pages,
//
//
//            ));
//
//        }else{
//            $this->title .= '::NOT FOUND!';
//            $this->content = $this->Template('views/v_resource_not_found.php', array(
//                'title' => $this->title,
//                'url'=> $this->url,
//                'params_vk_for_menu' => $this->params_vk_for_menu ));
//        }
//    }

    public function action_fines()
    {
        $this->title .= '::Штрафы!';
        $this->content = $this->Template('views/v_info/v_fines.php', array(
            'title' => $this->title,
            'url'=> $this->url,
            'params_vk_for_menu' => $this->params_vk_for_menu ));
    }

    public function action_new_kid()
    {
        $this->title .= '::Новичку!';
        $this->content = $this->Template('views/v_info/v_new_kid.php', array(
            'title' => $this->title,
            'url'=> $this->url,
            'params_vk_for_menu' => $this->params_vk_for_menu ));
    }

    public function action_admin_panel()
    {
        if ($_SESSION['user']['id_rights'] == 'admin'){
            $this->title .= '::Панель администратора';
            $data = [
                'title' => $this->title,
                'url'=> $this->url,
                'params_vk_for_menu' => $this->params_vk_for_menu
            ];
            $view = 'views/v_info/v_admin_panel.php';
        }else{
            $data = [];
            $view =  'views/v_resource_not_found.php';
        }

        $this->content = $this->Template($view, $data);
    }

    public function action_dark_orbit()
    {
        if ($_SESSION['user']['id_rights'] == 'admin'){
            $this->title .= '::DARK';
            $data = [
                'title' => $this->title,
                'url'=> $this->url,
                'params_vk_for_menu' => $this->params_vk_for_menu
            ];
            $view = 'views/v_info/v_dark_orbit.php';
        }else{
            $data = [];
            $view =  'views/v_resource_not_found.php';
        }

        $this->content = $this->Template($view, $data);
    }

//    ---------------------------------------------------------------------
//    public function action_teams()
//    {
//        $this->title .= '::Команды!';
//        $mPages = M_Pages::Instance();
//        $teams = $mPages->show_teams();
//        $this->content = $this->Template('views/v_info/v_teams.php', array(
//            'title' => $this->title, 'teams' => $teams,
//            'url'=> $this->url,
//            'params_vk_for_menu' => $this->params_vk_for_menu ));
//    }

//    public function action_consultations()
//    {
//        $this->title .= '::Консультации!';
//        $mPages = M_Pages::Instance();
//        $consultations = $mPages->show_consultations();
//        $this->content = $this->Template('views/v_info/v_consultations.php', array(
//            'title' => $this->title, 'consultations' => $consultations,
//            'url'=> $this->url,
//            'params_vk_for_menu' => $this->params_vk_for_menu ));
//    }

//    public  function action_edit(){
//        if(!M_Users::Instance()->Can('EDIT_PAGES')){
//            $this->redirect('/auth/login');
//        }
//        $this->title .= '::Редактирование';
//
//        $id = isset($this-> params[2]) ? (int)params[2] : 1;
//        $mPages = M_Pages::Instance();
//
//        if($this->IsPost()){
//            $mPages->text_set($_POST['text'], $id);
//            $this->redirect('/page/index/id');
//
//            $text =  $mPages->text_get($id);
//            $this->content = $this->Template('views/v_edit.php', array('text' => $text));
//        }
//    }




}