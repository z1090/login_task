<? include "./partials/header.php"; ?>

<?php

include_once "./partials/db_connection.php";

    if($_GET && $_GET["validate"] && $_GET["email"]){
        $validKey = $_GET["email"];
        $clean_validKey = mysqli_real_escape_string($db_connection, $validKey);

        $query = "SELECT * FROM `users` WHERE `Email_Valid_Str` = '$clean_validKey'";
        $result = mysqli_query($db_connection, $query);

        if (mysqli_num_rows($result) !== 1){
            echo "Unable to verify account. It may already be verified!";
        } else {
            // $row = mysqli_fetch_assoc($result);
            $query = "UPDATE `users` SET `verified` = 1, `Email_Valid_Str` = NULL WHERE `Email_Valid_Str` = '$clean_validKey'";
            $result = mysqli_query($db_connection, $query);
            header("Location: ./login.php?signup=verified");

            // if (mysqli_num_rows($result) == 1){
            // } else {
            //     echo "Unable to verify account.";
            // };
        };
    };


?>

<? include "./partials/footer.php"; ?>