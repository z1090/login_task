<? include "./partials/header.php"; ?>
<? include "./sign_up_email_sender.php"; ?>

<?PHP
 
    if($_POST){
        $errors = false;
        foreach($_POST as $key => $value) {
            if(empty($value)){
                $message = "Missing fields. ";
                $errors = true;
                // include "./partials/sign_up_form.php";
                break;
            };
        };
        if($_POST["password"] !== $_POST["password-confirm"]){
            $errors = true;
            $message = $message."Passwords don't match.";
            // include "./partials/sign_up_form.php";
        };

        if($errors){
            include "./partials/sign_up_form.php";
            $message = "";
        } else {
            // var_dump($_POST);

            $clean_first_name = mysqli_real_escape_string($db_connection, $_POST["first_name"]);
            $clean_last_name = mysqli_real_escape_string($db_connection, $_POST["last_name"]);
            $clean_email = mysqli_real_escape_string($db_connection, $_POST["email"]);

            $hashed_password = password_hash($_POST["password"], PASSWORD_DEFAULT);
            $clean_password = mysqli_real_escape_string($db_connection, $hashed_password);


            $emailValidkey = generateKey($db_connection);
            $clean_emailValidkey = mysqli_real_escape_string($db_connection, $emailValidkey);

            $query = "INSERT INTO users (`first_name`, `last_name`, `email`, `password`, `Email_Valid_Str`) VALUES ('$clean_first_name', '$clean_last_name', '$clean_email', '$clean_password', '$clean_emailValidkey');";

            var_dump($query);


            $result = mysqli_query($db_connection, $query);

            if ($result){
                if (mysqli_affected_rows($db_connection) === 1){
                    validateEmail($db_connection, $_POST["email"], $emailValidkey, $_POST["first_name"]);
                    header("Location: ./login.php?signup=success");
                }else{
                    $message = "Something went wrong...soz.";
                    $errors = true;
                    include "./partials/sign_up_form.php";
                };
            }else{
                echo "Something went wrong...soz.";
                // Uh oh, query didn't run! A problem with the query
            };
            

        };


    } else {
        $message = "";
        include "./partials/sign_up_form.php";    
    };
?>


<? include "./partials/footer.php"; ?>
