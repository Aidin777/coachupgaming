<?php

/**
 * Class C_Page
 *
 */
class C_Page extends C_Base{

    protected $params_vk_for_authorization;
    private $client_id;  
    private $redirect_url;
    private $response_type;

    /**
     * C_Page constructor.
     * @param $url
     * @param $client_id
     * @param $redirect_url
     */
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

    public function action_index(){
        $this->title .= '::Главная!';
        $this->content = $this->Template('views/v_index.php', array('title'=> $this->title,
                                            'url'=> $this->url,
                                            'params_vk_for_menu' => $this->params_vk_for_menu ));
    }

    public function action_base(){
        $this->title .= '::Базовая тренировка';
        $mPages = M_Pages::Instance();
        $type = 'base';
        $training = $mPages->get_type_training($type);
        $this->content = $this->Template('views/v_training/v_base.php', array('title' => $this->title, 'training' => $training));
    }

    public function action_power(){
        $this->title .= '::Силовая тренировка';
        $mPages = M_Pages::Instance();
        $type = 'power';
        $training = $mPages->get_type_training($type);
        $this->content = $this->Template('views/v_training/v_power.php', array('title' => $this->title, 'training' => $training));
    }

    public function action_fat_loss(){
        $this->title .= '::Жиросжигание';
        $mPages = M_Pages::Instance();
        $type = 'fat_loss';
        $training = $mPages->get_type_training($type);
        $this->content = $this->Template('views/v_training/v_fat_loss.php', array('title' => $this->title, 'training' => $training));
    }

    public function action_building(){
        $this->title .= '::Наращивание';
        $mPages = M_Pages::Instance();
        $type = 'muscle_building';
        $training = $mPages->get_type_training($type);
        $this->content = $this->Template('views/v_training/v_pumping.php', array('title' => $this->title, 'training' => $training));
    }

    public function action_nutritional_supplements(){
        $this->title .= '::Пищевые добавки!';
        $mPages = M_Pages::Instance();
        $this->content = $this->Template('views/v_training/v_nutritional_supplements.php', array('title' => $this->title));
    }

//------------------------------------------------------------------------------------------------------------
//Warface - раздел для игры
    public function action_tactics(){
        $this->title .= '::Тактики!';

        $specoperation = '';
        if(isset($this->params[2]) and $this->params[2] != ''){
            switch ($this->params[2]){
                case 'pripiat':
                    $specoperation = 'pripiat';
                    break;
                case 'voshod':
                    $specoperation = 'voshod';
                    break;
                case 'hardcore':
                    $specoperation = 'hardcore';
                    break;
                case 'led':
                    $specoperation = 'led';
                    break;
                case 'zatmenie':
                    $specoperation = 'zatmenie';
                    break;
            }
        }

        $mUsers = M_Users::Instance();
        $authorized = $mUsers->check_authorize();
        $check_group = $mUsers->check_group();

        if($authorized){
            if($check_group){
                $this->content = $this->Template('views/v_warface/v_tactics.php', array('title' => $this->title,

                    'specoperation' => $specoperation
                ));
            }else{
                $this->content = $this->Template('views/v_need_authorized_to_see.php', array('title' => $this->title));
            }
        }else{
            $this->content = $this->Template('views/v_need_authorized_to_see.php', array('title' => $this->title));
        }

    }



    public function action_changer(){
        
        $this->title .= '::Обменник!';
        $mUsers = M_Users::Instance();
        $spec_data = $mUsers->specoperation_data();
        $this->content = $this->Template('views/v_warface/v_changer.php', array(
            'title' => $this->title,
            'spec_data' => $spec_data
            ));
    }
    
    public function action_cases(){
        $this->title .= '::Кейсы!';
        $this->content = $this->Template('views/v_warface/v_cases.php', array('title' => $this->title));
    }

    //необходима проверка на авторизацию
    public function action_personal_cabinet(){
        $this->title .= '::Личный кабинет!';

        $mUsers = M_Users::Instance();
        $authorized = $mUsers->check_authorize();

        if($authorized){

            $check_group = $mUsers->check_group();
            if($check_group){
                $mPages = M_Pages::Instance();
                $data_alfa_order = $mPages->show_order_server('alfa', '_order_donat');
                $data_bravo_order = $mPages->show_order_server('bravo', '_order_donat');
                $data_charlee_order = $mPages->show_order_server('charlee', '_order_donat');
                $data_alfa_case = $mPages->show_order_server('alfa', '_case');
                $data_bravo_case = $mPages->show_order_server('bravo', '_case');
                $data_charlee_case = $mPages->show_order_server('charlee', '_case');
                $teams = $mPages->show_teams();
                $data_payments = $mPages->history_payments();
                $this->content = $this->Template('views/v_warface/v_personal_cabinet.php',
                    array('title' => $this->title,
                        'data_alfa_order' => $data_alfa_order,
                        'data_bravo_order' => $data_bravo_order,
                        'data_charlee_order' => $data_charlee_order,
                        'data_alfa_case' => $data_alfa_case,
                        'data_bravo_case' => $data_bravo_case,
                        'data_charlee_case' => $data_charlee_case,
                        'teams' => $teams,
                        'data_payments' => $data_payments
                    ));
            }else{
                $this->content = $this->Template('views/v_need_authorized_to_see.php', array('title' => $this->title));
            }
        }else{
            $this->content = $this->Template('views/v_need_authorized_to_see.php', array('title' => $this->title));
        }
    }
    
 //------------------------------------------------------------------------------------------------------------
//Информация
    protected function action_edit_orders(){
        //Сервер - альфа браво чарли
        //тип заказа - баллы кейсы
        //номер заказа

        $mUsers = M_Users::Instance();
        $rights = $mUsers->check_guide_rights();

        //Проверка на права капитанов
        if($rights){
        //Проверка на сервера
            $server = '';
            if(isset($this->params[2]) and $this->params[2] != ''){
                switch ($this->params[2]){
                    case 'alfa':
                        $server = 'alfa';
                        break;
                    case 'bravo':
                        $server = 'bravo';
                        break;
                    case 'charlee':
                        $server = 'charlee';
                        break;
                }
            }
            //Баллы или очки
            $currency = '';
            if(isset($this->params[3]) and $this->params[3] != ''){
                switch ($this->params[3]){
                    case 'balls':
                        $currency = 'order_donat';
                        break;
                    case 'points':
                        $currency = 'case';
                        break;
                }
            }

            $number_order = 0;
            //номер заказа
            if(isset($this->params[4]) and $this->params[4] != ''){
                $number_order = (int)$this->params[4];
            }
            //url_client для его полного досье

            $url_client = 0;
            if(isset($this->params[5]) and $this->params[5] != ''){
                $url_client = (int)$this->params[5];
            }

            $mPages = M_Pages::Instance();
            $teams = $mPages->show_teams();
            $mysqli = M_MYSQLI::Instance();
            $this->title .= '::Редактор!';
            $this->content = $this->Template('views/v_edit.php', array('title' => $this->title,
                'server' => $server,
                'currency' => $currency,
                'number_order' => $number_order,
                'url_client' => $url_client,
                'teams' => $teams,
                'mysqli' => $mysqli
                
            ));

        }else{

            $this->title .= '::NOT FOUND!';
            $this->content = $this->Template('views/v_resource_not_found.php', array('title' => $this->title));
        }
    }


    public function action_help_changers()
    {
        $server = '';
        if(isset($this->params[2]) and $this->params[2] != ''){
            switch ($this->params[2]){
                case 'alfa':
                    $server = 'alfa';
                    break;
                case 'bravo':
                    $server = 'bravo';
                    break;
                case 'charlee':
                    $server = 'charlee';
                    break;
            }
        }
        if($server != ''){
            $mPages = M_Pages::Instance();
            $type = '_order_donat';
            $table = $server.$type;
            $turn = 'ORDER by id DESC';
//            var_dump($table);
            $changers_help = $mPages->show_complete_winners($table, 1, $turn);
        }else{
            $changers_help = '';
        }
        $this->title .= '::Помощь в проходах!';
        $this->content = $this->Template('views/v_info/v_help_changers.php', array('title' => $this->title,
            'changers_help' => $changers_help,
            'server' => $server
        ));
    }

    public function action_case_winners()
    {
        $server = '';
        if(isset($this->params[2]) and $this->params[2] != ''){
            switch ($this->params[2]){
                case 'alfa':
                    $server = 'alfa';
                    break;
                case 'bravo':
                    $server = 'bravo';
                    break;
                case 'charlee':
                    $server = 'charlee';
                    break;
            }
        }
        if($server != ''){
            $mPages = M_Pages::Instance();
            $type = '_case';
            $table = $server.$type;
            $turn = 'ORDER by id DESC';
//            var_dump($table);
            $changers_help = $mPages->show_complete_winners($table, 1, $turn);
        }else{
            $changers_help = '';
        }
        $this->title .= '::Кейсовики!';
        $this->content = $this->Template('views/v_info/v_case_winners.php', array('title' => $this->title,
            'changers_help' => $changers_help,
            'server' => $server
        ));
    }

    public function action_changers_active(){

        $server = '';
        if(isset($this->params[2]) and $this->params[2] != ''){
            switch ($this->params[2]){
                case 'alfa':
                    $server = 'alfa';
                    break;
                case 'bravo':
                    $server = 'bravo';
                    break;
                case 'charlee':
                    $server = 'charlee';
                    break;
            }
        }
        $mUsers = M_Users::Instance();
        $rights = $mUsers->check_guide_rights();

        if($rights){

            if($server != ''){
                $mPages = M_Pages::Instance();
                $type = '_order_donat';
                $table = $server.$type;
                $turn = '';
                $type_currency = 'balls';
//            var_dump($table);
                $changers_help = $mPages->show_complete_winners($table, 0, $turn);
            }else{
                $changers_help = '';
            }
            $this->title .= '::Заказы Активные!!';
            $this->content = $this->Template('views/v_info/v_changers_active.php', array('title' => $this->title,

                'changers_help' => $changers_help,
                'server' => $server,
                'type_currency' => $type_currency
            ));

        }else{

            $this->title .= '::NOT FOUND!';
            $this->content = $this->Template('views/v_resource_not_found.php', array('title' => $this->title));
        }
    }

    public function action_case_active(){
        $server = '';

        if(isset($this->params[2]) and $this->params[2] != ''){
            switch ($this->params[2]){
                case 'alfa':
                    $server = 'alfa';
                    break;
                case 'bravo':
                    $server = 'bravo';
                    break;
                case 'charlee':
                    $server = 'charlee';
                    break;
            }
        }

        $mUsers = M_Users::Instance();
        $rights = $mUsers->check_guide_rights();

        if($rights){
            if($server != ''){
                $mPages = M_Pages::Instance();
                $type = '_case';
                $table = $server.$type;
                $turn = '';
                $type_currency = 'points';
                $changers_help = $mPages->show_complete_winners($table, 0, $turn);
            }else{
                $changers_help = '';
            }

            $this->title .= '::Кейсы активные!';
            $this->content = $this->Template('views/v_info/v_case_active.php', array('title' => $this->title,

                'changers_help' => $changers_help,
                'server' => $server,
                'type_currency' => $type_currency

            ));

        }else{
            $this->title .= '::NOT FOUND!';
            $this->content = $this->Template('views/v_resource_not_found.php', array('title' => $this->title));
        }
    }
    
//    public function action_fines()
//    {
//        $this->title .= '::Штрафы!';
//        $this->content = $this->Template('views/v_info/v_fines.php', array('title' => $this->title));
//    }
//
//    public function action_new_kid()
//    {
//        $this->title .= '::Новичку!';
//        $this->content = $this->Template('views/v_info/v_new_kid.php', array('title' => $this->title));
//    }


//    ---------------------------------------------------------------------
//    public function action_teams()
//    {
//        $this->title .= '::Команды!';
//        $mPages = M_Pages::Instance();
//        $teams = $mPages->show_teams();
//        $this->content = $this->Template('views/v_info/v_teams.php', array('title' => $this->title, 'teams' => $teams));
//    }
//
//    public function action_consultations()
//    {
//        $this->title .= '::Консультации!';
//        $mPages = M_Pages::Instance();
//        $consultations = $mPages->show_consultations();
//        $this->content = $this->Template('views/v_info/v_consultations.php', array('title' => $this->title, 'consultations' => $consultations));
//    }
//
//        public  function action_edit(){
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

//    public function action_qiwi(){
//        $this->title .= '::QIWI!';
//        $mPages = M_Pages::Instance();
//
//        if($_SESSION['user']['uid']){
//            $id_user = $_SESSION['user']['uid'];
//            $utubers = $mPages->show_utubers();
//
//
//            $this->content = $this->Template('views/v_payment/v_qiwi.php', array('title' => $this->title,
//                'utubers' => $utubers));
//        }else{
//            $this->content = $this->Template('views/v_need_authorized_to_see.php', array('title' => $this->title));
//        }
//    }

}