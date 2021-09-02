<?php
class DBController {
    private $host = "localhost";
    private $user = "root";
    private $password = "root";
    private $database = "lorenzobd_dieug";
    private $port = "8889";
    private $conn;



    function __construct() {
        $this->conn = $this->connectDB();
    }

    function connectDB() {
        try{
            $conn = new PDO("mysql:host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->database, $this->user, $this->password);
        }catch(PDOException $e){
            var_dump($e);
        }
        
        
        
        return $conn;
    }

    function runQuery($query) {
        $result = $this->conn->query($query);
        while($row=$result->fetch(PDO::FETCH_ASSOC)) {
            $resultset[] = $row;
        }
        if(!empty($resultset))
            return $resultset;
    }

    function numRows($query) {
        $result  = $this->conn->query($query);
        $rowcount = $result->rowcount();
        return $rowcount;
    }
}
?>