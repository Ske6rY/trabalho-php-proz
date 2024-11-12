<?php
    session_start();
    include 'dp.php';
    if ($_SERVER['REQUEST_METHOD']=== 'POST'){
        $nome = $_POST['nome'];
        $nome_usuario = $_POST['nome_usuario'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];


        $sql = "INSERT  INTO usuarios (nome, nome_usuario, senha, email, telefone, endereco)
                VALUES ('$nome','$nome_usuario','$senha','$email','$telefone','$endereco')";

        if ($conn -> query($sql) === True){
            header("location: login.php");
                exit;
            }
            else{
                $error ="erro".$conn -> $error;

            }
        }
    
?>