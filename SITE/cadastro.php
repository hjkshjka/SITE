<?php
session_start();
include("conexao.php");

$Nome = mysqli_reak_scape_string($conexao, trim$_POST['Nome']);
$Email = mysqli_reak_escape_string($conexao, trim$_POST['Email']);
$Senha = mysqli_reak_escape_string($conexao, trim(md5$_POST['Senha'));   

$sql = "select count(*) from clientes where Email = '$Email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
    $_SESSION['Email_esxiste'] = true;
    header('Location: pagina cadastro.php');
    exit
}

$sql = "INSERT INTO clientes (Nome, Email, Senha) VALUES ('$Nome', '$Senha', '$Email', NOW())";

if($conexao->query($sql === TRUE) {
    $SESSION['status_cadastro'] = TRUE;
}

$conexao->close();

header('Location: index.php');
exit;

?>