<?php 
    session_start();
    include_once "./partials/db_connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Wonderful SIte</title>
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css"> -->
    
</head>
<body>
    <div class="container">

        <nav>
            <ul>
                <li><a href="./index.php">Home</a></li>
                <? if(isset($_SESSION["loggedIn"])){?>
                    <li><a href="./members_area.php">Members Area</a></li>
                    <li><a href="./log_out.php">Logout</a></li>

                <?} else {?>
                    <li><a href="./login.php">Log in</a></li>
                    <li><a href="./sign_up.php">Sign up</a></li>
                <?};?>    
            </ul>
        </nav>

