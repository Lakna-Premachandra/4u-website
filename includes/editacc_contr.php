<?php



    function is_edit_fields_empty($email,$first_name,$last_name){
        
        if(empty($email) || empty($first_name) ||empty($last_name)) {

            return true;
        }else {
            return false;
        }

    }
    function is_passwords_empty( $current_password, $new_password,$confirm_password){
        
        if(!empty($current_password) || !empty($new_password) || !empty($confirm_password) ) {

            if(empty($current_password) || empty($confirm_password) || empty($new_password)) {

                return true;
            }else {
                return false;
            }

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
    function is_email_taken( $pdo, $email){
        
        if(get_email ($pdo, $email)) {

            return true;
        }else {
            return false;
        }

    }

    function is_password_wrong( $password, $hashed_password) {

        if(!password_verify($password,$hashed_password)) {
            return true;
    
        }else {
    
            return false;
        }
    
        
    }
    function is_similar_password( $new_password,$hashed_password) {

        if(password_verify($new_password,$hashed_password)) {
            return true;
    
        }else {
    
            return false;
        }
    
        
    }

    function is_confirm_password_not_match( $password,$confirm_password){
        
        if($password != $confirm_password) {

            return true;
        }else {
            return false;
        }

    }

    



?>