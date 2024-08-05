<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <?php 
    //Se Login não estiver definido, ou seja, ninguem logado direciona ate login php
    if(!isset($_SESSION['login'])){
        //Verifica se o formulario chegou
        if(isset($_POST['acao'])){
            $user = 'jorge';
            $pass = '1234';

            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];

            //Compara as senhas vindas do formulario com as do banco, no caso declaradas no codigo
            if($usuario == $user && $senha == $pass){
                //atribui valor ao login
                $_SESSION['login']=$user;
                //redireciona até index.php
                header('Location: index.php');
            }else{
                echo 'Login ou senha incorretos';
            }
        }
        //direcionamento
        include('login.php');
        //Se login estiver definido, redirecionar para home.php
    }else{
        if(isset($_GET['logout'])){
            //Desatruibui o valor jorge da sessao login
            unset($_SESSION['login']);
            //Destroi por completo a sessao
            session_destroy();
            header('Location: index.php');
        }
        include('home.php');
    }
    ?>
    
</body>
</html>