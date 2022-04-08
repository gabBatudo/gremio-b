<?php

    include("./bd/connect.php");

    $usuario = $_POST['user'];
    $pass = $_POST['pass'];

    $script = "SELECT * FROM admin WHERE user='$usuario' AND password='$pass' ";

    $logar = mysqli_query($connect, $script);

    if(mysqli_num_rows($logar) > 0){

        session_start();
        $_SESSION['user'] = $usuario;
        $_SESSION['password'] = $pass;

        ?>
            <script>
                alert('sim');
                window.location.href='index.php';
            </script>
        <?php
    }else{
        session_start();
        unset($_SESSION['email']);
        unset($_SESSION['password']);

        ?>
            <script>
                alert('nao');
                window.location.href='index.php';
            </script>
        <?php
    }

?>