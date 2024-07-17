<?php
    //Conexão no database
    $pdo = new PDO('mysql:host=localhost;dbname=jeferson;charset=utf8', 'root', '');

    $id = $_GET["id"];
    $nome = $_GET["nome"];
    $email = $_GET["email"];

    //echo $id . "<br>";
    //echo $nome;

    $stmt = $pdo->prepare('UPDATE faleconosco SET nome = ?, email = ? WHERE id = ?');
    $stmt->bindParam(1, $nome);
    $stmt->bindParam(2, $email);
    $stmt->bindParam(3, $id);
    $stmt->execute();

    echo "Usuário atualizado!";
    echo "<br><br><a href='admin.html' >Voltar para a Área do Admin</a>";
?>