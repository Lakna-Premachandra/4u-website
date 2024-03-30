<?php

if($_SERVER["REQUEST_METHOD"]==="POST") {
    $user_id= $_POST["user_id"];
    $email= $_POST["email"];
    $first_name= $_POST["first_name"];
    $last_name= $_POST["last_name"];
    $current_password= $_POST["current_password"];
    $new_password=$_POST["new_password"];
    $confirm_password=$_POST["confirm_password"];

    try{
        require_once("../database.php");
        require_once("editacc_model.php");
        require_once("editacc_contr.php");

        //ERROR HANDLERS
        $errors = [];
    

        if(is_passwords_empty($current_password,$new_password,$confirm_password)) {
            $errors["empty_passwords"]= "Fill all password fields!";

        }else{

            if(is_edit_fields_empty($email,$first_name,$last_name)) {
                $errors["empty_input"]= "Insert new data!";
 
            }           

            if(is_email_invalid($email)) {
                $errors["invalid_email"]= "Invalid email used!";
            }

            $result = get_user_via_id($pdo,$user_id);

            if($result["email"] != $email) {

                if(is_email_taken($pdo,$email)) {
                    $errors["email_used"]= "Email already registered!";
                }

            }

            if(!empty($current_password)) {

                if(is_password_wrong($current_password, $result["password"])) {
                    $errors["login_incorrect"]= "Incorrect existing password!";
                }

                
                
                if(is_confirm_password_not_match($new_password,$confirm_password)){
                    $errors["passwords_not_match"]= "Passwords do not match!";
                }

                if(is_similar_password($new_password, $result["password"])){
                    $errors["login_incorrect"]= "New password is similar to existing password!";
                }

                

            }else {
                if($result["email"] == $email && $result["first_name"] == $first_name && $result["last_name"] == $last_name) {
                    $errors["not_changed"]= "Details are not changed!";
                }
            }
         
            

        }
           
        require_once("config_session.php");

        if($errors) {
            $_SESSION["errors_editacc"] =$errors;

            header("Location: ../account.php");

            die();
        }

        if(!empty($current_password)){
            edit_user_and_password($pdo,$user_id, $email,$first_name,$last_name,$new_password);
        }else {
            edit_user($pdo,$user_id, $email,$first_name,$last_name);
        }

        $result=get_user_via_id($pdo,$user_id);



        $user_id=$result["user_id"];
        $user_email= htmlspecialchars($result["email"]);
        $user_fname=htmlspecialchars($result["first_name"]);
        $user_lname=htmlspecialchars($result["last_name"]);

        $userarray=array (
            "user_id"=>$user_id,"user_email"=> $user_email,"user_fname"=>$user_fname, "user_lname"=>$user_lname
        );
        $_SESSION["user"]=$userarray;

        $_SESSION["last_regeneration"] = time();


        header("Location: ../account.php?edituser=success");

        $pdo=null;
        $stmt=null;
        die();



    }catch(PDOException $e) {

        die("Query failed: ".$e->getMessage());
    }

}else {
    header("Location: ../account.php");
    die();

}




?>