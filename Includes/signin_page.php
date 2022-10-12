<?php
if(isset($_POST["submit"])){
    //Getting data from sign up page
    
    $user_email=$_POST["email"];
    $user_password=$_POST["password"];
   

//Instantiate the class
include "../Classes/databasehandle_class.php";
include "../Classes/signin_class.php";
include "../Classes/signincontr_class.php";
$signin = new SignInCOntr($user_email,$user_password);

//Running error handlers and user sign in
$signin->signinUser();

//going back to front page
header("location: ../index.php?error=none");

}