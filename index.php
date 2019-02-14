<? include "./partials/header.php"; ?>

<h1>The <em>amazing</em> logging in website!</h1>

<?php

    if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] === true){?>
        <p>Welcome back, <?echo $_SESSION["firstName"];?></p>
    <?};
    

?>

<? include "./partials/footer.php"; ?>