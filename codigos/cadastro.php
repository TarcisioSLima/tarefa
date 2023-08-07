<?php
    $first_name_user = $_GET["first_name"];
    $second_name_user = $_GET["second_name"];
    $city_user = $_GET["city_user"];
    $phone_number_user = $_GET["phone_number_user"];
    $email = $_GET["email"];

    $servidor = "db";
    $usuario ="root";
    $senha = "54321";
    $nome_banco ="bd_tarefa";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $nome_banco );

    $pesquisa_email = "SELECT * FROM tabela_contato WHERE email = '$email'";
    $teste_email_repitido = mysqli_query($conexao, $pesquisa_email);

    

    if (mysqli_num_rows($teste_email_repitido) == 0){
        $insert_tb_cidade = "INSERT INTO tabela_cidade (cidade_usuario) VALUES ('$city_user')";
        $insert_tb_contato = "INSERT INTO tabela_contato (primeiro_nome, segundo_nome, telefone_para_contato, email,) VALUES ('$first_name_user', '$second_user', '$phone_number_user','$email')";
    if (mysqli_query($conexao, $insert_bd)) {
        header('Location: login.html');
        exit();
    } else {
        header('Location: cadastro.html');
        exit();
    }
    }else {
        header('Location: cadastro.html');
        exit();
    }
?>
