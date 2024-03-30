<?php



    function signup_inputs() {     

        if(isset($_SESSION["signup_data"]["first_name"])) {

            echo'<div class="f-l-box">         
            <input
              type="text"
              placeholder="First name"
              name="first_name"
              id="email" value="'.$_SESSION["signup_data"]["first_name"].'"
            />';

        }else {
            echo'<div class="f-l-box">         
            <input
              type="text"
              placeholder="First name"
              name="first_name"
              id="email"
            />';
        }
        if(isset($_SESSION["signup_data"]["last_name"])) {

            echo'<input
            type="text"
            placeholder="Last name"
            name="last_name"
            id="email" value="'.$_SESSION["signup_data"]["last_name"].'"
            />
            </div>';

        }else {
            echo'<input
            type="text"
            placeholder="Last name"
            name="last_name"
            id="email"
            />
            </div>';
        }

        if(isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["errors_signup"]["invalid_email"]) 
        && !isset($_SESSION["errors_signup"]["email_used"])) {

            echo'<input
            type="text"
            placeholder="Email"
            name="email"
            id="email" value="'.$_SESSION["signup_data"]["email"].'"
            />';

        }else {
            echo'<input
            type="text"
            placeholder="Email"
            name="email"
            id="email"
            />';
        }

        echo'<div class="pass-box">
        <input
          type="password"
          placeholder="Password"
          name="password"
          id="email" class="password"
            />
            <i class="bx bx-low-vision"></i>

        </div>
        <div class="pass-box">
            <input
            type="password"
            placeholder="Confirm Password"
            name="confirm_password"

            id="email" class="password"
            />
            <i class="bx bx-low-vision"></i>';

    }

    function check_signup_errors() {

        if(isset($_SESSION["errors_signup"])) {
            $errors= $_SESSION["errors_signup"];



            foreach($errors as $error) {
                echo "<div class='message'>
                    <h4 id='error'>".$error."</h4> 
                    </div>";
                break;
            }

            unset($_SESSION["errors_signup"]);

        }
        else if(isset($_GET["signup"]) && $_GET["signup"] === "success") {


            echo "<div class='message'>
            <h4 id='correct'>Signup Success</h4> 
            </div>";


        }
    }

?>