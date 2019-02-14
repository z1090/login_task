<? include "./partials/header.php"; ?>

<?PHP


    
    if($_POST){
        foreach($_POST as $key => $value) {
            if(empty($value)){
                $errMessage = "Missing fields";
                include "./partials/sign_up_form.php";
                break;
            };
        };
        if($_POST["password"] !== $_POST["password-confirm"]){
            $errMessage = "Passwords don't match.";
            include "./partials/sign_up_form.php";
        };

        header("Location: ./sign_up_form.php?success=true");
        header("Location: ./sign_up_success.php");


    } else {
        $errMessage = "";
        include "./partials/sign_up_form.php";    
    };
?>


<? include "./partials/footer.php"; ?>
