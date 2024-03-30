<?php

    declare(strict_types=1);

    function get_user_via_id(object $pdo,int $user_id) {

        $query="SELECT * FROM user WHERE user_id = :user_id;";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":user_id", $user_id);
        $stmt->execute();
    
        $result= $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
        
    }

    function get_email (object $pdo, string $email) {

        $query="SELECT email FROM user WHERE email = :email;";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->execute();

        $result= $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }


    function edit_user_and_password(object $pdo,int $user_id, string $email,string $first_name,string $last_name,string $new_password){

        $query="UPDATE user SET email=:email,first_name=:first_name,last_name=:last_name,password=:password WHERE user_id=:user_id;";
        $stmt = $pdo->prepare($query);

        $options =[
            "cost"=>12

        ];

        $hashed_password= password_hash($new_password, PASSWORD_DEFAULT,$options);

        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":first_name", $first_name);
        $stmt->bindParam(":last_name", $last_name);
        $stmt->bindParam(":password", $hashed_password);
        $stmt->bindParam(":user_id", $user_id);
        $stmt->execute();
    }

    function edit_user(object $pdo,int $user_id, string $email,string $first_name,string $last_name){

        $query="UPDATE user SET email=:email,first_name=:first_name,last_name=:last_name WHERE user_id=:user_id;";
        $stmt = $pdo->prepare($query);



        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":first_name", $first_name);
        $stmt->bindParam(":last_name", $last_name);
        $stmt->bindParam(":user_id", $user_id);
        $stmt->execute();
    }


?>