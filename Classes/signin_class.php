<?php
class Signin extends DBH
{
    protected function getUser($user_email, $user_password)
    {
        $query = 'SELECT user_password FROM users where user_email=?;';

        $stmt = $this->connect()->prepare($query);
        $stmt->bindParam(1, $user_email, PDO::PARAM_STR);

        if (!$stmt->execute()) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../index.php?error=usernotfound1");
            exit();
        }
        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($user_password, $pwdHashed[0]["user_password"]);
        if ($checkPwd == false) {
            $stmt = null;
            header("location: ../index.php?error=wrongpassword");
            exit();
        } 
        else if ($checkPwd == true) {
           
            $stmt=$this->connect()->prepare("SELECT * from users where user_email=? ");
          

            if (!$stmt->execute(array($user_email))) {
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }
            if ($stmt->rowCount() == 0) {
                $stmt=null;
                header("location: ../index.php?error=usernotfound2");
                exit();
            }
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            session_start();
            $_SESSION["user_firstname"] = $user[0]["user_firstname"];
            $_SESSION["user_email"] = $user[0]["user_email"];

            $stmt = null;
        }
    }
}
