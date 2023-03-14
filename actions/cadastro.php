<?php

session_start();

require_once 'controller.php';

if(isset($_POST['btn-cadastrar'])){
    $codigo = mysqli_escape_string($connection,$_POST['FCodigo']);
    $nome = mysqli_escape_string($connection,$_POST['FNome']);
    $sobrenome = mysqli_escape_string($connection,$_POST['FSobrenome']);
    $email = mysqli_escape_string($connection,$_POST['FEmail']);
    $cpf = mysqli_escape_string($connection,$_POST['FCPF']);
    $sexo = mysqli_escape_string($connection,$_POST['FSexo']);
    $usuario = mysqli_escape_string($connection,$_POST['FUsuario']);
    $senha = mysqli_escape_string($connection,$_POST['FSenha']);

    $sql = "INSERT INTO tbClientes(nomeCli,sobrenomeCli,emailCli,idadeCli)VALUES('$nome','$cargo','$dataEntregaCargo','$anosNaEmpresa''$setor','$salario')";
}

if(mysqli_query($connection, $sql)){
    $_SESSION['mensagem'] = "Sucesso ao cadastrar.";

    header('Location: ../index.php');
}

else{
    $_SESSION['mensagem'] = "Erro ao cadastrar.";

    header('Location: ../index.php');
}
?>