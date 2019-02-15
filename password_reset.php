<? include "./partials/header.php"; ?>

<h1>The <em>amazing</em> logging in website!</h1>

<?php

    if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] === true){
        header("Location: ./index.php");
    } else {
        $message = "";
        include "./partials/password_reset_form.php";
    
    };
    
?>

<? include "./partials/footer.php"; ?>