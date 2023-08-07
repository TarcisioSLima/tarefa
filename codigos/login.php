<?php
    $name_user_login = $_GET["name_user_login"];
    $phone_number_user_login = $_GET["phone_number_user_login"];

    $servidor = "db";
    $usuario = "root";
    $senha = "54321";
    $banco = "db_site";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

    $sql = "SELECT * FROM tabela_usuario WHERE  = '$name_user_login' = primeiro_nome  and telefone_para_contato = '$phone_number_user_login'";
    
    $resultados = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultados) > 0){
        header('Location: pagina_pos_login.html');
        exit();
    } else {
        header('Location: login.html');
        exit(); 
    };

?>