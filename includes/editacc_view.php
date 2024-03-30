<?php





function editacc_data() {

    echo'<div class="profile-box">
    <label for="name">First Name</label>
      <input type="name" name="first_name" value="'.$_SESSION["user"]["user_fname"].'" placeholder="First Name">
    </div>
    <div class="profile-box">
      <label for="name">Last Name</label>
      <input type="name" name="last_name" value="'.$_SESSION["user"]["user_lname"].'">
    </div>
    <div class="profile-box">
      <label for="name">Email</label>
      <input type="name" name="email" value="'.$_SESSION["user"]["user_email"].'" placeholder="Email">
      <input type="hidden" name="user_id"  value="'.$_SESSION["user"]["user_id"].'">
    </div>
      ';

}

function check_edit_account_errors() {

    if(isset($_SESSION["errors_editacc"])) {

        $errors = $_SESSION["errors_editacc"];


        foreach($errors as $error) {
          echo "<div class='error'>
                <h3>".$error."</h3>
                </div>";
                break;

                
            
        }

        unset($_SESSION["errors_editacc"]);


    }else if(isset($_GET["edituser"]) && $_GET["edituser"] === "success") {


        echo "<div class='correct'>
              <h3>Edit account success!</h3>
              </div>";

            


    }


}

?>