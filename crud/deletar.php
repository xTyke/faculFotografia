<?php
    $pdo = new PDO('mysql:host=localhost;dbname=jeferson;charset=utf8', 'root', '');

    //DELETE
    //==========================================================================
    //$id = 2;
    $id = $_GET["id"];
    echo $id;

    $stmt = $pdo->prepare('DELETE FROM faleconosco WHERE id = ?');
    $stmt->bindParam(1, $id);
    $stmt->execute();

    echo "Usuário removido";

    //Método alternativo:
    // $stmt = $pdo->prepare('DELETE FROM usuarios WHERE id = :id');
    // $stmt->execute(array(
    //     ':id' => $id
    //  ));

    //==========================================================================
    echo "<br><br><a href='admin.html' >Voltar para a Área do Admin</a>";
?>