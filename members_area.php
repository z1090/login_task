<? include "./partials/header.php"; ?>

<?php
    if(isset($_SESSION["loggedIn"])){?>
       <h1>Secret members area</h1>
       <p>Welcome back, <?echo $_SESSION["firstName"];?></p>
       <img src="members_only/images/secret_image.jpg" alt="the secret image" style="width: 40%;">
    <?} else {
        header("Location: ./login.php");
        exit;
    };


?>

<? include "./partials/footer.php"; ?>