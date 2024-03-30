<?php 
    if($_SERVER["REQUEST_METHOD"]==="POST") {

        

        $email= $_POST["email"];
        $password= $_POST["password"];

        try {
            require_once("../database.php");
            require_once("login_model.php");
            require_once("login_contr.php");

            //ERROR HANDLERS
            $errors = [];

            if(is_input_empty($email,$password)) {
                $errors["empty_input"]= "Fill in all fields!";

            }

            $result = get_user($pdo,$email);

            if(is_email_wrong($result)) {
                $errors["login_incorrect"]= "Incorrect login Info!";

            }

            if(!is_email_wrong($result) && is_password_wrong($password,$result["password"])) {
                $errors["login_incorrect"]= "Incorrect login Info!";

            }


            require_once("config_session.php");

            if($errors) {
                $_SESSION["errors_login"] =$errors;

                header("Location: ../loginform.php");

                die();
            }

            

            $user_id=$result["user_id"];
            $user_email= htmlspecialchars($result["email"]);
            $user_fname=htmlspecialchars($result["first_name"]);
            $user_lname=htmlspecialchars($result["last_name"]);

            $userarray=array (
                "user_id"=>$user_id,"user_email"=> $user_email,"user_fname"=>$user_fname, "user_lname"=>$user_lname
            );
            $_SESSION["user"]=$userarray;

            $_SESSION["last_regeneration"] = time();

            header("Location: ../index.php");

            $pdo= null;
            $stmt = null;

            die();
            

        }catch(PDOException $e) {

            die("Query failed: ".$e->getMessage());
        }


    }else {
        header("Location: ../loginform.php");
        die();

    }

?>