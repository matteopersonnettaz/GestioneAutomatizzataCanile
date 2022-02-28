<?php
session_start();
    
        $conn = new mysqli("localhost","root","", "DB_CasaDiTom");
        $username = $_POST["Username"];
        $password = $_POST["Password"];

        if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
        }
        $query = "SELECT * FROM user WHERE Username LIKE '$username' AND Password LIKE '$password'";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
        $pass=$row['Password'];
        $user=$row['Username'];
        $id=$row['ID'];
        $Admin=$row['Admin'];
        $conn->close();

    if ($username == $user && $password == $pass)
    {
        $_SESSION["Username"]=$user;
        $_SESSION["Password"]=$pass;
        $_SESSION['ID'] = $id;
        $_SESSION['Admin']=$Admin;
        Header("Location: http://localhost/CasaDiTom/index.php");
        exit;
    }
    else
    {
        /*Username e password errati, redirect alla pagina di login*/
        Header("Location: http://localhost/CasaDiTom/index.php");
    }
?>