<?php

class M_MYSQLI{
    private static $instance;
    private static $mysqli_server;
    private static $mysqli_user;
    private static $mysqli_password;
    private static $mysqli_db;

    //Получение экземпляра класса MSQLI

    public static function Instance(){
        if(self::$instance == null)
            self::$instance = new M_MYSQLI();

        return self::$instance;
    }

    function __construct(){
//        $this->mysqli_server = MYSQLI_SERVER;
//        $this->mysqli_user = MYSQLI_USER;
//        $this->mysqli_password = MYSQLI_PASSWORD;
//        $this->mysqli_db = MYSQLI_DB;
        setlocale(LC_ALL,'ru_RU.UTF-8');
//        $conn_db1 = mysqli_connect(MYSQLI_SERVER, MYSQLI_USER, MYSQLI_PASSWORD, MYSQLI_DB) or die('No connect with data base');
//        mysqli_set_charset($conn_db1, 'utf8');
//        echo '<pre>';
//        var_dump($conn_db1);
//        echo '</pre>';
//        return $conn_db1;
    }

    public function connect_to_db(){
        setlocale(LC_ALL,'ru_RU.UTF-8');
        $conn_db = mysqli_connect(MYSQLI_SERVER, MYSQLI_USER, MYSQLI_PASSWORD, MYSQLI_DB) or die('No connect with data base');
        mysqli_set_charset($conn_db, 'utf-8');
//        echo '<pre>';
//        var_dump($conn_db);
//        echo '</pre>';
        return $conn_db;
    }

    public function disconnect($conn_to){
        mysqli_close($conn_to);
    }

    public function Select($query){
        $conn_db1 = $this->connect_to_db();

        $result = mysqli_query($conn_db1, $query);

        if (!$result) die(mysqli_error($conn_db1));
        
        while($row = mysqli_fetch_assoc($result)){
            $arr[] = $row;
        }
//        echo '<pre>';
//        var_dump($arr);
//        echo '</pre>';
        $this->disconnect($conn_db1);
        return $arr;
    }

    //
    // Вставка строки
    // $table 		- имя таблицы
    // $object 		- ассоциативный массив с парами вида "имя столбца - значение"
    // результат	- идентификатор новой строки
    //
    public function Insert($query)
    {
        $conn_db1 = $this->connect_to_db();

        $result = mysqli_query($conn_db1, $query);

        if (!$result) die(mysqli_error($conn_db1));

        $this->disconnect($conn_db1);
    }

    // Изменение строк

    public function Update($query)
    {
        $conn_db1 = $this->connect_to_db();

        $result = mysqli_query($conn_db1, $query);

        if (!$result) die(mysqli_error($conn_db1));

        $this->disconnect($conn_db1);
    }

    // Удаление строк
    public function Delete($query)
    {
        $conn_db1 = $this->connect_to_db();

        $result = mysqli_query($conn_db1, $query);

        if (!$result) die(mysqli_error($conn_db1));

        $this->disconnect($conn_db1);
    }

    public function CountRows($query){
        $conn_db1 = $this->connect_to_db();

        $result = mysqli_query($conn_db1, $query);

        if (!$result) die(mysqli_error($conn_db1));
        
        $rows_count = mysqli_num_rows($result);
        $this->disconnect($conn_db1);
        return $rows_count;
    }
    
}