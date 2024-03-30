<?php



function check_login_errors() {

    if(isset($_SESSION["errors_login"])) {

        $errors = $_SESSION["errors_login"];


        foreach($errors as $error) {
            echo "<div class='message'>
                    <h4 id='error'>".$error."</h4> 
                    </div>";
                break;
            break;
        }

        unset($_SESSION["errors_login"]);


    }else if(isset($_GET["login"]) && $_GET["login"] === "success") {


        echo "<div class='message'>
            <h4 id='correct'>Login success!</h4> 
            </div>";


    }


}

?>