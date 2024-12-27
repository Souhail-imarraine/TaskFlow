<?php
class Database {
    private $host = 'localhost';
    private $dbpass = '';
    private $dbuser = 'root';
    private $dbname = 'taskflow';

    private function connection(){
        $dns = "mysql:host=". $this->host . ";dbname=". $this->dbname;
        $pdo = new PDO($dns, $this->dbuser, $this->dbpass);
        $pdo->setAttribute(PDO:: ATTR_ERRMODE , PDO::FETCH_ASSOC);
        return $pdo;
    }
    
}
?>
