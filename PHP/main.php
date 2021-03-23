<?php
    include 'conexao.php';
    $conexao=new conexao;
    #$conn = $conexao->OpenConect();
    #$conn = $conexao->Desconect($conn);
    include "user.php";
    $user1=new user;
    $user1->setNome("Nome");
    $user1->setEmail("Email");
    $user1->setCPF("CPF");
    $user1->setTelefone("Telefone");
    $user1->setDatadenascimento("Datadenascimento");
    $user1->setSenha("Senha");
    $user1->setStatus("FALSE");
    echo $user1->ToString($user1);
    echo "<br>".$user1->Insert($user1);
    echo "<br>".$user1->selectID($user1);
?>