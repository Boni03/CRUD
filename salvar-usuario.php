<?php

switch(@$_REQUEST['acao']){
    case 'cadastrar':
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $data_nasc = $_POST['data_nasc'];

        $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('$nome', '$email', '$senha', '$data_nasc')";
        $res = $conn->query($sql);

        if($res== true){
            print "<script>alert('Usuario cadastrado com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        }else{
            print "<script>alert('Erro ao cadastrar usuario');</script>";
            print "<script>location.href='?page=novo';</script>";
        }
            break;

    case 'editar':
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $data_nasc = $_POST['data_nasc'];

        $sql = "UPDATE usuarios SET 
        nome = '{$nome}',
        email = '{$email}',
        senha = '{$senha}',
        data_nasc = '{$data_nasc}'
        WHERE id = ".$_REQUEST['id'];
        $res = $conn->query($sql);




        if($res== true){
            print "<script>alert('Usuario Editado com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        }else{
            print "<script>alert('Erro ao Editar usuario');</script>";
            print "<script>location.href='?page=editar';</script>";
        }


            break;
    case 'excluir':
        $sql = "DELETE FROM usuarios WHERE id = ".$_REQUEST['id'];
        $res = $conn->query($sql);
        if($res== true){
            print "<script>alert('Usuario Excluido com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        }else{
            print "<script>alert('Erro ao Excluir usuario');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
            break;

           }
?>