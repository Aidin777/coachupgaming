<?php
class M_Pages
{
    private static $instance;    //

    public static function Instance()
    {
        if (self::$instance == null)
            self::$instance = new M_Pages();

        return self::$instance;
    }

    public function text_get($id)
    {
        return file_get_contents("data/$id.txt");
    }

    public function text_set($text, $id)
    {
        file_put_contents("data/$id.txt", $text);
    }

    // показать купленные тренировки
    public function get_type_training($type)
    {
        $id_user = $_SESSION['user']['uid'];
//        $id_user = 241984411;
        if ($id_user != NULL) {
            $t = "SELECT * FROM clients_donat WHERE id_url = $id_user";
            $query = sprintf($t, $id_user);
//            echo 'бред<hr>';
            $mysqli = M_MYSQLI::Instance();
//            echo 'Конец запроса!<hr>';
            $result_training = $mysqli->Select($query);
//            echo '<br><br><br><br>';
//
//            var_dump($result_training[0][$type]);

            return $result_training[0][$type];
        }
    }


    public function get_count_rows($table, $status){

            $query = "SELECT * FROM $table WHERE id_status = $status ORDER BY id DESC ";

            $mysqli = M_MYSQLI::Instance();
            $count_rows = $mysqli->CountRows($query);
            return $count_rows;

    }

    //Личный кабинет показать купленные
    public function show_order_server($server, $type_of_change){
        //GПроверка клиента
        $id_user = $_SESSION['user']['uid'];
        if(isset($id_user) != ''){
            //Прверка сервера
            if(isset($server) != '' and isset($type_of_change) != ''){
                $choice = 'alfa';
                switch ($server){
                    case 'alfa':
                        $choice = 'alfa';
                        break;
                    case 'bravo':
                        $choice = 'bravo';
                        break;
                    case 'charlee':
                        $choice = 'charlee';
                        break;
                }

                $type = '_order_donat';
                switch ($type_of_change){
                    case '_order_donat':
                        $type = '_order_donat';
                        break;
                    case '_case':
                        $type = '_case';
                        break;
                }

                $table = $choice.$type;
                $query = "SELECT * FROM $table WHERE id_url = $id_user ORDER BY id DESC ";

                $mysqli = M_MYSQLI::Instance();
                $data_client_on_server = $mysqli->Select($query);

                return $data_client_on_server;

            }else{
                echo 'Need server!';
            }
        }else{
            echo 'Need authorize!';
        }
    }



    //История платежей!
    function history_payments(){
            //Взяли номер юзера
        $id_user = $_SESSION['user']['uid'];
        $query = "SELECT * FROM users_payments WHERE id_user = $id_user";
        $mysqli = M_MYSQLI::Instance();
        $payments_data = $mysqli->Select($query);
        return $payments_data;
    }

//Показать ютуберов
function  show_utubers(){
    $query = "SELECT * FROM utubers";
    $mysqli = M_MYSQLI::Instance();
    $utubers = $mysqli->Select($query);
    return $utubers;
}

//Показать составы
public function show_teams(){
    $query = "SELECT * FROM team_guides";
    $mysqli = M_MYSQLI::Instance();
    $result_teams = $mysqli->Select($query);
    return $result_teams;
}
//Показать составы
function show_consultations(){
    $query = "SELECT * FROM consultations";
    $mysqli = M_MYSQLI::Instance();
    $all_consultations = $mysqli->Select($query);
    return $all_consultations;
}

function show_complete_winners($table, $status, $turn){
    $query = "SELECT * FROM $table WHERE id_status = $status $turn";
    $mysqli = M_MYSQLI::Instance();
    $winners = $mysqli->Select($query);
    return $winners;
}

function  show_prices(){
    $query = "SELECT * FROM prices";
    $mysqli = M_MYSQLI::Instance();
    $all_prices = $mysqli->Select($query);
    return $all_prices;
}

}

?>