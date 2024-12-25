<?php 
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "qp";

    $con = new PDO("mysql:host=$server;dbname=gemini", $username, $password);

    try{
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";

        //QUERY: create database
        // $sql = "CREATE DATABASE gemini";
        // $con->exec($sql);
        // echo "<br>Database created successfully";



        //QUERY: create table
        // $sql = "CREATE TABLE users(
        //  id INT(6) AUTO_INCREMENT PRIMARY KEY,
        //  firstname VARCHAR(50) NOT NULL,
        //  email VARCHAR(100) UNIQUE NOT NULL
        // );";

        // $con->exec($sql);
        // echo "<br>Table created successfully";



        //QUERY: insert data
        // $sql = "INSERT INTO users (firstname, email) VALUES ('John Doe', 'johndoe@example.com')";
        // $con->exec($sql);
        // echo "<br>New record created successfully";



        //QUERY: INSET Multiple
        // $con->beginTransaction();
        // $sql = "INSERT INTO users (firstname, email) VALUES ('Hamza', 'hamza@example.com')";
        // $con->exec($sql);
        // $sql = "INSERT INTO users (firstname, email) VALUES ('burhan', 'burhan@example.com')";
        // $con->exec($sql);
        // $con->commit();

        // echo "<br>Multiple records created successfully";


        //QUERY: Prepare statment
        // $sql = "INSERT INTO users (firstname, email) VALUES (:f,:e)";
        // $stmnt = $con->prepare($sql);
        // $stmnt->bindParam(':f', $firstname,);
        // $stmnt->bindParam(':e', $email);

        // $firstname = "Ahmad";
        // $email = "ahmad@example.com";
        // $stmnt->execute();

        // $firstname = "Aladdin";
        // $email = "aladdin@example.com";
        // $stmnt->execute();

        // echo "<br>New records created successfully";


        //QUERY SELECT
        // $stmnt = $con->prepare("SELECT * FROM users");
        // $stmnt->execute();
        // $result = $stmnt->setFetchMode(PDO::FETCH_ASSOC);
        // $result = $stmnt->fetchAll();
        // echo var_dump($result);

        // foreach ($result as $key => $row) {
        //     echo "Key: " . $key . "<br>";
        //     foreach ($row as $column => $value) {
        //         echo "Column: " . $column . " Value: " . $value . "<br>";
        //     }
        //     echo "<hr>"; // Separate rows for readability
        // }
        
        

    }catch(PDOException $e){
        echo "Error". $e->getMessage();
    }


    $con = null
?>