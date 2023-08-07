<?php
    $new_city = $_GET["new_city"];
    $phone_number_login = $_GET["phone_number_user_login"];

    $servidor = "db";
    $usuario ="root";
    $senha = "54321";
    $nome_banco ="bd_tarefa";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $nome_banco );

    

?>