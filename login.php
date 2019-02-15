<? include "./partials/header.php"; ?>

<?php

// var_dump($_POST);

    if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] === true){
        header("Location: ./index.php");
        exit;

    } else {



        if($_POST && !empty($_POST["email"]) && !empty($_POST["password"])) {

            $email = $_POST["email"];
            $password = $_POST["password"];

            $query = "SELECT * FROM `users` WHERE `email` = '$email'";
            $result = mysqli_query($db_connection, $query);

            if (mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
                
                if($row["email"]=== $email && password_verify($password, $row["password"])){

                    if($row["verified"] == 1){

                        if($_POST["remember"]) {
                            setcookie("user", $_POST["email"], strtotime("+7 days"));
                        };

                        $_SESSION["loggedIn"] = true;
                        $_SESSION["firstName"] = $row["first_name"];
                        $_SESSION["lastName"] = $row["last_name"];
                        header("Location: ./members_area.php");
                        exit;
                    } else {
                        $message = "Account not activated. Please check your emails for a verification link.";
                        include "./partials/log_in_form.php";
                    };
                    
                } else {
                    $message = "Details incorrect.";
                    include "./partials/log_in_form.php";
                };

            } elseif (mysqli_num_rows($result) < 1){
                $message = "Details incorrect.";
                include "./partials/log_in_form.php";

            } elseif (mysqli_num_rows($result) > 1){
                $message = "Error Logging in.";
                include "./partials/log_in_form.php";
            };

        } elseif ($_POST && (empty($_POST["email"]) || empty($_POST["password"]))) {
            $message = "Required fields missing.";
            include "./partials/log_in_form.php";
            
        } else {
            $emailField = "";
            $message = "";
            if(isset($_COOKIE["user"])) {
                $emailField = $_COOKIE["user"];

                $query = "SELECT `first_name` FROM `users` WHERE `email` = '$emailField'";
                $result = mysqli_query($db_connection, $query);
                
                if (mysqli_num_rows($result) === 1){
                    $row = mysqli_fetch_assoc($result);
                    $name =  $row["first_name"];
                };
                    $message = "Hey $name! Just give us yer password and we'll let you back in.";
                    include "./partials/log_in_form.php";
                    include "scripts/password_field_focus.js";
            } else {
                include "./partials/log_in_form.php";
            };
        };
    };
?>

<? include "./partials/footer.php"; ?>
