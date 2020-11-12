<?php

require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):
    
    $descricao = $_POST['descricao'];
    $cidade = $_POST['cidade'];
    $populacao = $_POST['populacao'];
    $eleitores = $_POST['eleitores'];
    $nivel_confianca = $_POST['nivel_confianca'];
    $margem_erro = $_POST['margem_erro'];
    $total_participante = $_POST['total_participante'];
    $introducao = $_POST['introducao'];
    $perguntas = $_POST['perguntas'];

    $sql = "INSERT INTO search(descricao, cidade, populacao, eleitores, nivel_confianca, margem_erro, total_participante, introducao, , perguntas) VALUES ('$descricao', '$cidade', '$populacao', '$eleitores', '$nivel_confianca', '$margem_erro', '$total_participante', '$introducao', '$perguntas')";

    if(mysqli_query($connect, $sql)):
        header('Location: index.php?sucesso');
    else:
        header('Location: index.php?erro');
    endif;
endif;
