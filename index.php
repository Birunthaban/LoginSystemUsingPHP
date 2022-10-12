<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login System for a User </title>
</head>

<body>
    
    <form action="Includes/signup_page.php" method="post">


        <div>
            <div>
                <label for="firstname"><b>First Name</b></label>
                <input type="text" name="firstname" required>
            </div>
            <div>
                <label for="lastname"><b>Last Name</b></label>
                <input type="text" name="lastname" required>

            </div>
            <div>

                <label for="email"><b> Email Address</b></label>
                <input type="email" name="email" required>
            </div>
            <div> <label for="address"><b>Address</b></label>
                <input type="text" name="address" required>

            </div>
            <div><label for="password"><b>Password</b></label>
                <input type="password" name="password" required>

            </div>
            <div>

                <label for="confpassword"><b>Confirm Password</b></label>
                <input type="password" name="confpassword" required>

            </div>







            <button type="submit" name="submit">Sign Up </button>

        </div>



    </form>
    <br>
    <br>
    <br>
    <div>
        <form action="Includes/signin_page.php" method="post">
            <div>
                <label for="email"><b> Email Address</b></label>
                <input type="email" name="email" required>
            </div>
            <div>
                <label for="password"><b>Password</b></label>
                <input type="password" name="password" required>
            </div>


            <button type="submit" name="submit">Sign IN </button>
        </form>
    </div>



</body>

</html>