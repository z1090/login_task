<? include "./partials/header.php"; ?>

<?php

    if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] === true){
        header("Location: ./index.php");
        exit;

    } else {

        if($_POST && !empty($_POST["email"]) && !empty($_POST["password"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];

            $query = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";
            $result = mysqli_query($db_connection, $query);

            if (mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);

                if($row["email"]=== $email && $row["password"] === $password){
                    $_SESSION["loggedIn"] = true;
                    $_SESSION["firstName"] = $row["first_name"];
                    $_SESSION["lastName"] = $row["last_name"];
                    header("Location: ./members_area.php");
                    exit;
                } else {
                    $errMessage = "Details incorrect.";
                    include "./partials/log_in_form.php";
                };

            } elseif (mysqli_num_rows($result) < 1){
                $errMessage = "Details incorrect.";
                include "./partials/log_in_form.php";

            } elseif (mysqli_num_rows($result) > 1){
                $errMessage = "Error Logging in.";
                include "./partials/log_in_form.php";
            };

        } elseif ($_POST && (empty($_POST["email"]) || empty($_POST["password"]))) {
            $errMessage = "Required fields missing.";
            include "./partials/log_in_form.php";
            
        } else {
            $errMessage = "";
            include "./partials/log_in_form.php";
        };
    };
?>

<? include "./partials/footer.php"; ?>
