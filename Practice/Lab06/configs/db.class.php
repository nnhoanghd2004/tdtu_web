<?php

class DB {

    protected static $connection;

    public function __construct() {
        
    }

    public function connect(){
        $config = parse_ini_file("config.ini");
        $conn = mysqli_connect("localhost", $config["username"], $config["password"], $config["database"]);
        if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
        return $conn;
    }

    public function query_execute($query_string){
        
        $connection = $this->connect();
        $result = $connection->query($query_string);
        $connection->close();
    }
    
    public function query_select($query_string){
        $connection = $this->connect();
        $result = $connection->query($query_string);
        $connection->close();
        
        // $rows = array();
        // while($item = $result->fetch_assoc()){
            
        //     $rows[] = $item;
        // }
        
        // return $rows;
        return $result;
    }
}

?>