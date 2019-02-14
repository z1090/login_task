<? include "./partials/header.php"; ?>

<h1>The <em>amazing</em> logging in website!</h1>

<?php

    if(isset($_SESSION["loggedIn"])){?>
        <p>Welcome back, <?echo $_SESSION["firstName"];?></p>
    <?};

    // if(isset($_SESSION["firstName"])){
    //     echo "Welcome back ".$_SESSION["firstName"];
    // };

?>

<? include "./partials/footer.php"; ?>