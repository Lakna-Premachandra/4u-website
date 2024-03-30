<?php

if($_SERVER["REQUEST_METHOD"]==="POST") {
    $email= $_POST["email"];
    $first_name= $_POST["first_name"];
    $last_name= $_POST["last_name"];
    $password= $_POST["password"];
    $confirm_password=$_POST["confirm_password"];

    try{
        require_once("../database.php");
        require_once("signup_model.php");
        require_once("signup_contr.php");

        //ERROR HANDLERS
        $errors = [];

        if(is_input_empty($email,$password,$confirm_password,$first_name,$last_name)) {
            $errors["empty_input"]= "Fill in all fields!";

        }
        if(is_email_invalid($email)) {
            $errors["invalid_email"]= "Invalid email used!";
        }
        if(is_email_taken($pdo,$email)) {
            $errors["email_used"]= "Email already registered!";
        }
        if(is_confirm_password_not_match($password,$confirm_password)){
            $errors["passwords_not_match"]= "Passwords do not match!";
        }

        require_once("config_session.php");

        if($errors) {
            $_SESSION["errors_signup"] =$errors;

            $signupData = [
                "email"=> $email,
                "first_name"=>$first_name,
                "last_name" =>$last_name

            ];

            $_SESSION["signup_data"] = $signupData;


            header("Location: ../new-accc.php");

            die();
        }

        create_user($pdo, $email, $password, $first_name,$last_name);

        header("Location: ../new-accc.php?signup=success");

        $pdo=null;
        $stmt=null;
        die();



    }catch(PDOException $e) {

        die("Query failed: ".$e->getMessage());
    }



}else {
    header("Location: ../new-accc.php");
    die();

}



?>