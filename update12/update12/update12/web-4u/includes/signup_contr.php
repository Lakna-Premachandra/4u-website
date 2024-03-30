<?php

    declare(strict_types=1);

    function is_input_empty(string $email,string $password,string $confirm_password,string $first_name,string $last_name){
        
        if(empty($email) || empty($password) ||empty($confirm_password) ||empty($first_name) ||empty($last_name)) {

            return true;
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

    function is_confirm_password_not_match(string $password,string $confirm_password){
        
        if($password != $confirm_password) {

            return true;
        }else {
            return false;
        }

    }



    function create_user(object $pdo,string $email,string $password,string $first_name,string $last_name){
        
        set_user($pdo,$email,$password, $first_name, $last_name);
    }
    



?>