<?php
    //Conexão no database
    $pdo = new PDO('mysql:host=localhost;dbname=jeferson;charset=utf8', 'root', '');

    $nome = $_GET["nome"];
    $email =  $_GET["email"];
    $msg =  $_GET["msg"];


    echo $nome . "<br>";
    echo $email . "<br>";
    echo $msg . "<br>";

    //Vamos inserir!
   
    $stmt = $pdo->prepare("INSERT INTO faleconosco (nome, email, msg) VALUES (?, ?, ?);");

    $stmt->bindParam(1, $nome);
    $stmt->bindParam(2, $email);
    $stmt->bindParam(3, $msg);
    $stmt->execute();

    
    echo "Obrigado pela mensagem <3..."
    
?>