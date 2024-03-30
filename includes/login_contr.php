<?php



function is_input_empty($email, $password){
        
    if(empty($email) || empty($password)) {

        return true;
    }else {
        return false;
    }

}

function is_email_wrong( $result) {

    if(!$result) {
        return true;

    }else {

        return false;
    }

    
}

function is_password_wrong($password, $hashed_password) {

    if(!password_verify($password,$hashed_password)) {
        return true;

    }else {

        return false;
    }

    
}

?>