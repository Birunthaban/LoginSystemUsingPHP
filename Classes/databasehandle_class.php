<?php
class DBH {
    protected function connect(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        
        try {
          $dbh= new PDO("mysql:host=$servername;dbname=OxygenSports", $username, $password);
          // set the PDO error mode to exception
          $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          return $dbh;
        } catch(PDOException $e) {
          die ("Connection failed: " . $e->getMessage()."<br/>");
         
        }
    
}
}
?>