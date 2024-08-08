<?php
    session_start();
    include "dbh.php";

    //register
    if(isset($_POST["register"])){
     $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
    

    $sql ="SELECT * FROM users WHERE usersEmail = '$email'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
        $msg = "User Already Registered!";
    }else{
        $sql =  "INSERT INTO users (usersName,usersPwd,usersEmail) VALUES ('$username','$password','$email')";
        try {
            mysqli_query($conn,$sql);
            $msg = "User Registered Successfully!";
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    header("Location:../index.php?msg=" .urlencode($msg));

    }

    //login
    if(isset($_POST["login"])){
           $email = $_POST["email"];
           $password = $_POST["password"];
       
       $sql ="SELECT * FROM users WHERE usersEmail='$email' AND usersPwd='$password'";
    
       
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            $_SESSION["email"] = $email;
            header("Location:../pages/home.php");
        }else{
            $msg = "Invalid Username or Password";
            header("Location:../index.php?msg=" .urlencode($msg));
        }
       
    }
       

    

?>