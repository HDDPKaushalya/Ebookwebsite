<?php

/*This validation is not required but in some exceptional case like client
side validation is bypassed, it's better than nothong,
*/

if(empty($_POST["user_name"])){
    die("User name is required.");
}

if(empty($_POST["name"])){
    die("Name is required.");
}

if(empty($_POST["email"])){
    die("Email is required.");
}

if(empty($_POST["address"])){
    die("address is required.");
}

if(empty($_POST["contact_no"])){
    die("Contact no is required.");
}

if(empty($_POST["password"])){
    die("Password is required.");
}

if(! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    die("Email is not valid, please check it and try agian."); 
}

if(strlen($_POST["password"])< 8 ){
    die("Password must contain atleast 8 characters");
}

if(! preg_match("/[a-z]/i", $_POST["password"])){
    die("Password must contain at least one letter.");
}

if(! preg_match("/[0-9]/i", $_POST["password"])){
    die("Password must contain at least one number.");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/cusotmersDB.php";

$sql = "INSERT INTO customers (user_name, name,  email, address, contact_no, password_hash) 
        VALUES(?, ?, ?, ?, ?, ?)";

$stmt = $mysqli->stmt_init();

if(! $stmt->prepare($sql)){
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("ssssss",
                $_POST["user_name"],
                $_POST["name"],
                $_POST["email"],
                $_POST["address"],
                $_POST["contact_no"],
                $password_hash);
                

if ($stmt->execute()){
    header("Location: index.php?page=Loginpage v1");
    exit;
}

else{
    if ($mydqli->errno === 1062){
        die("user name is already be taken.");
    }
    else{
    die($mysqli->error . " " . $mysqli->errno);
    }
}



?>


