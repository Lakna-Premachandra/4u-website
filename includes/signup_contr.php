<?php



    function is_input_empty( $email,$password, $confirm_password, $first_name, $last_name){
        
        if(empty($email) || empty($password) ||empty($confirm_password) ||empty($first_name) ||empty($last_name)) {

            return true;
        }else {
            return false;
        }

    }
    function is_email_invalid($email){
        
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            return true;
        }else {
            return false;
        }

    }
    function is_email_taken($pdo,$email){
        
        if(get_email ($pdo, $email)) {

            return true;
        }else {
            return false;
        }

    }

    function is_confirm_password_not_match($password,$confirm_password){
        
        if($password != $confirm_password) {

            return true;
        }else {
            return false;
        }

    }



    function create_user( $pdo, $email,$password,$first_name, $last_name){
        
        set_user($pdo,$email,$password, $first_name, $last_name);
    }
    



?>