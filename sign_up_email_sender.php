

<?php

include_once "./partials/db_connection.php";
    

    function checkKeys($db_connection, $randStr){
        $query = "SELECT * FROM `users` WHERE `verified` = 0";
        $result = mysqli_query($db_connection, $query);

        while($row = mysqli_fetch_assoc($result)) {
            if ($row["Email_Valid_Str"] === $randStr) {
                $keyExists = true;
                break;
            } else {
                $keyExists = false;
            }
        }
        return $keyExists;
    }

    function generateKey($db_connection){
        $uniqid = uniqid();
        $str = "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $shuffled = str_shuffle($str);
        $randStr = md5($uniqid.$str);

        $checkKey = checkKeys($db_connection, $randStr);

        while($checkKey === true) {
            $randStr = substr(str_shuffle($str), 0, $keyLength);
            $checkKey = checkKeys($db_connection, $randStr);
        }

        return $randStr;
    }

    // echo generateKey($db_connection);

    function validateEmail($db_connection, $to_email, $emailValidkey, $firstName){


        // $to_email = $_POST["email"];
        $to_email = "z1090@hotmail.com";
        $subject = "The Amazing Logging in website registration.";
        $headers = "From: ian.wildsmith@gmail.com";
        $message = 
"Hi there, $firstName!\n
Thanks for signing up to The Amazing Logging in website. We're sure you'll enjoy your time here with us!\n
To verify your email address, please click on the link below:\n
http://ian.w/login_task/sign_up_validation.php?validate=true&email=$emailValidkey";
        echo $message;
        mail($to_email, $subject, $message, $headers);


        // header("Location: ./login.php?signup=success");
    };

    // validateEmail($db_connection, "to_email");
?>

