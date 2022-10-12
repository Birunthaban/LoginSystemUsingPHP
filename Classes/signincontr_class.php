<?php



class SignInCOntr extends Signin
{


    private $user_email;
    private $user_password;


    public function signinUser()
    {
        if ($this->emptyInput() == true) {
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        $this->getUser($this->user_email,$this->user_password);
    }

    public function __construct( $user_email, $user_password)
    {

        $this->user_email = $user_email;

        $this->user_password = $user_password;
    }

    private function emptyInput()
    {
        
        if (empty($this->user_email)|| empty($this->user_password)) {
            return true;
        } else {
            return false;
        }
   
    }
}
