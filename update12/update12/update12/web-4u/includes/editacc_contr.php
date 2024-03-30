<?php

    declare(strict_types=1);

    function is_edit_fields_empty(string $email,string $first_name,string $last_name){
        
        if(empty($email) || empty($first_name) ||empty($last_name)) {

            return true;
        }else {
            return false;
        }

    }
    function is_passwords_empty(string $current_password,string $new_password,string $confirm_password){
        
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
    function is_email_invalid(string $email){
        
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            return true;
        }else {
            return false;
        }

    }
    function is_email_taken(object $pdo,string $email){
        
        if(get_email ($pdo, $email)) {

            return true;
        }else {
            return false;
        }

    }

    function is_password_wrong(string $password, string $hashed_password) {

        if(!password_verify($password,$hashed_password)) {
            return true;
    
        }else {
    
            return false;
        }
    
        
    }
    function is_similar_password(string $new_password, string $hashed_password) {

        if(password_verify($new_password,$hashed_password)) {
            return true;
    
        }else {
    
            return false;
        }
    
        
    }

    function is_confirm_password_not_match(string $password,string $confirm_password){
        
        if($password != $confirm_password) {

            return true;
        }else {
            return false;
        }

    }

    



?>