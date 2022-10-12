<?php



class SignUPCOntr extends Signup
{

    private $user_firstname;
    private $user_lastname;
    private $user_email;
    private $user_password;
    private $user_confpassword;
    private $user_address;

    public function signupUser()
    {
        if ($this->emptyInput() == true) {
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if ($this->validFirstName() == false) {
            header("location: ../index.php?error=invalidfirstname");
            exit();
        }
        if ($this->validLastName() == false) {
            header("location: ../index.php?error=invalidlastname");
            exit();
        }
        if ($this->validEmail() == false) {
            header("location: ../index.php?error=invalidemail");
            exit();
        }
        if ($this->passwordMatch() == false) {
            header("location: ../index.php?error=passwordnomatch");
            exit();
        }
        if ($this->validLastName() == false) {
            header("location: ../index,php?error=invalidlastname");
            exit();
        }
        if ($this->userEmailTakenCheck() == false) {
            header("location: ../index,php?error=useremailtaken");
            exit();
        }
        $this->setUser($this->user_firstname, $this->user_lastname, $this->user_email, $this->user_address, $this->user_password);
    }

    public function __construct($user_firstname, $user_lastname, $user_email, $user_password, $user_confpassword, $user_address)
    {
        $this->user_firstname = $user_firstname;
        $this->user_lastname = $user_lastname;
        $this->user_email = $user_email;
        $this->user_address = $user_address;
        $this->user_password = $user_password;
        $this->user_confpassword = $user_confpassword;
    }

    private function emptyInput()
    {

        if (empty($this->user_firstname) || empty($this->user_lastname) || empty($this->user_email) || empty($this->user_password) || empty($this->user_confpassword) || empty($this->user_address)) {
            return true;
        } else {
            return false;
        }
    }
    private function validFirstName()
    {

        if (!preg_match('/^[a-zA-Z0-9]*$/', $this->user_firstname)) {
            return false;
        } else {
            return true;
        }
    }
    private function validLastName()
    {
        if (!preg_match('/^[a-zA-Z0-9]*$/', $this->user_lastname)) {
            return false;
        } else {
            return true;
        }
    }
    private function validEmail()
    {
        if (!filter_var($this->user_email, FILTER_VALIDATE_EMAIL)) {
            return false;
        } else {
            return true;
        }
    }
    private function passwordMatch()
    {

        if ($this->user_password !== $this->user_confpassword) {
            return false;
        } else {
            return true;
        }
    }
    private function userEmailTakenCheck()
    {


        if (!$this->checkUser($this->user_email)) {
            return false;
        } else {
            return true;
        }
    }
}
