<?php



    function get_email ($pdo,$email) {

        $query="SELECT email FROM user WHERE email = :email;";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->execute();

        $result= $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    function set_user( $pdo,$email, $password,$first_name,$last_name){
        
        $query="INSERT INTO user (email,first_name,last_name,password) VALUES (:email,:first_name,:last_name,:password);";
        $stmt = $pdo->prepare($query);

        $options =[
            "cost"=>12

        ];

        $hashed_password= password_hash($password, PASSWORD_DEFAULT,$options);


        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":first_name", $first_name);
        $stmt->bindParam(":last_name", $last_name);
        $stmt->bindParam(":password", $hashed_password);
        $stmt->execute();
    }


?>