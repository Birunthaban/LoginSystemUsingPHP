<?php
if(isset($_POST["submit"])){
    //Getting data from sign up page
    $user_firstname=$_POST["firstname"];
    $user_lastname=$_POST["lastname"];
    $user_email=$_POST["email"];
    $user_password=$_POST["password"];
    $user_confpassword=$_POST["confpassword"];
    $user_address=$_POST["address"];

//Instantiate the class
include "../Classes/databasehandle_class.php";
include "../Classes/signup_class.php";
include "../Classes/signupcontr_class.php";
$signup = new SignUPCOntr($user_firstname,$user_lastname,$user_email,$user_password,$user_confpassword,$user_address);

//Running error handlers and user sign up
$signup->signupUser();

//going back to front page
header("location: ../index.php?error=none");

}

