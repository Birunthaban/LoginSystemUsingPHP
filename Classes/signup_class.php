<?php
class Signup extends DBH{
    protected function setUser($user_firstname, $user_lastname, $user_email, $user_address,$user_password){
        $query= 'INSERT INTO users(user_firstname,user_lastname,user_email,user_address,user_password)values(?,?,?,?,?);';
        $hashed_pwd = password_hash($user_password,PASSWORD_DEFAULT);
        $stmt=$this->connect()->prepare($query);
        if(!$stmt->execute(array($user_firstname, $user_lastname, $user_email, $user_address, $hashed_pwd))){
            $stmt=null;
            header("location: ../index.php?error=stmtfailed");
            exit();


        }
        $stmt=null;
      


    }
    protected function checkUser($user_email){
        $query= 'SELECT user_email FROM users WHERE user_email=?;';
        $stmt=$this->connect()->prepare($query);
        if(!$stmt->execute(array($user_email))){
            $stmt=null;
            header("location: ../index.php?error=stmtfailed");
            exit();


        }
        
        if($stmt->rowCount()>0){
            return false;
        }
        else{
            return true;
        }
        


    }

}


?>