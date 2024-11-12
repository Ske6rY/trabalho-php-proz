<?php
    session_start();
    include 'dp.php';
    if ($_SERVER['REQUEST_METHOD']=== 'POST'){
        $nome_usuario = $_POST['nome_usuario'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM cadastro WHERE nome_usuario = '$nome_usuario'";
        $resultado = $conn -> query($sql);

        if ($resultado -> num_rows > 0){
            $user = $resultado -> fetch_assoc();
            if ($password_verify($senha, $user['senha'])){
                $_SESSION['user_id']=  $user['id'];
                header("location: dashboard.php");
                exit;
            }
            else{
                $error ="senha incorreta";

            }
        }
            else {
                $error ="usuario não encontrado";
            }
        }
    
?>