<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){ //to ensure no sql injection

        //calling the atributes and assigning them values
        $username = $_POST["username"];
        $email = $_POST["email"];
        $dob = $_POST["dob"];
        $phone = $_POST["phone"];
        $paswd = $_POST["paswd"];

        try{//try catch block

            //call the main database
            require_once "dbh.inc.php";

            //insert the values into this 
            //this is a sql code to insert values
            $query = "INSERT INTO register (username, email, dob, phone, paswd) values(?, ?, ?, ?, ?);";

            
            $stmt = $pdo->prepare($query);
            $stmt->execute([$username, $email, $dob, $phone, $paswd]);

            $pdo = null;
            $stmt = null;

            header("location: ../register.php");

            die();
        }
        catch(PDOException $e){
            echo "Error: " . $e->getMessage();
            //header("location: ../register.php");
            exit();
        }
    }
    else{
        header("location: ../register.php");
        exit();
    }