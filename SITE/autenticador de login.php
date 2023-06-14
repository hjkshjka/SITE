<?php
session_start();
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "usuario" && $password === "senha") {
       
        header("Location: index.php");
        exit();
        
    } else {
        $error = "Credenciais inválidas. Tente novamente.";
    }
}
?>