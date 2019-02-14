<? include "./partials/header.php"; ?>

<?php

    $DB_EMAIL = "root@root.com";
    $DB_PASSWORD = "root";
    $DB_FIRST_NAME = "Ian";

    if(empty($_POST)) {
        $errMessage = "";
        include "./partials/log_in_form.php";
    };

    if(!empty($_POST) && $_POST["action"] === "Log in") {
        $email = $_POST["email"];
        $password = $_POST["password"];

        if($DB_EMAIL === $email && $DB_PASSWORD === $password){
            $_SESSION["loggedIn"] = true;
            $_SESSION["firstName"] = $DB_FIRST_NAME;
            header("Location: ./members_area.php");
            exit;
        } else {
            $errMessage = "Details incorrect.";
            include "./partials/log_in_form.php";
        };
    };
?>

<? include "./partials/footer.php"; ?>
