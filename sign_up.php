<? include "./partials/header.php"; ?>

<?PHP

    
    if($_POST){
        $errors = false;
        foreach($_POST as $key => $value) {
            if(empty($value)){
                $errMessage = "Missing fields";
                $errors = true;
                include "./partials/sign_up_form.php";
                break;
            };
        };
        if($_POST["password"] !== $_POST["password-confirm"]){
            $errors = true;
            $errMessage = "Passwords don't match.";
            include "./partials/sign_up_form.php";
        };

        if(!$errors){
            // header("Location: ./sign_up_form.php?success=true");
            header("Location: ./partials/sign_up_success.php");
        };


    } else {
        $errMessage = "";
        include "./partials/sign_up_form.php";    
    };
?>


<? include "./partials/footer.php"; ?>
