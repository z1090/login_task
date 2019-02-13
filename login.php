<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Wonderful SIte</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css"> -->
    
</head>
<body>
    <div class="container">

        <?php
            $DB_EMAIL = "root@root.com";
            $DB_PASSWORD = "root";

            $loggedIn = false;

            function printWelcomeMessage($loggedIn) {
                if($loggedIn === true) {
                    include("welcome_page.php");
                };
            };

            function printLogInForm($errMessage) {
                include "logInForm.php";
            };

            function logInCheck($DB_EMAIL, $DB_PASSWORD) {
                $errMessage = "";

                if(!empty($_POST) && $_POST["action"] === "Log in") {
                    $email = $_POST["email"];
                    $password = $_POST["password"];
            
                    if($DB_EMAIL === $email && $DB_PASSWORD === $password){
                        $loggedIn = true;
                        printWelcomeMessage($loggedIn);
                    } else {
                        $errMessage = "Details incorrect.";
                        // echo "Details incorrect.";
                        // echo $errMessage;
                        printLogInForm($errMessage);
                    };
                } else {
                    printLogInForm($errMessage);
                };
            };
            
            logInCheck($DB_EMAIL, $DB_PASSWORD);

        ?>
    </div>

    <!-- <script src="main.js"></script> -->
</body>
</html>