<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />  
        <title> Consulta ao banco de Dados </title> 
        <style>
            div {
                color: blue;
                border: 1px solid black;
                padding: 5px;
                margin: 5px;
            }
        </style>
    </head>
    <body>
    <?php
        $pdo = new PDO('mysql:host=localhost;dbname=jeferson;charset=utf8', 'root', '');
        
        //SELECT varias linhas
        //==========================================================================
        $stmt = $pdo->prepare("SELECT * FROM faleconosco");
        $stmt->execute();
    
        while($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {

            echo "<div>" . $linha['id'] . " - ";
            echo $linha['nome'] . " - ";
            echo $linha['email'];

            $id = $linha['id'];
            $nome =   $linha['nome'] ;
            $email = $linha['email'];

            echo " <a href=\"editar_usuario.php?id=$id&nome=$nome&email=$email\" >Editar</a> </div>";
        }
        
        //==========================================================================
        echo "<br><br><a href='admin.html' >Voltar para a Área do Admin</a>";
    ?>
    </body>
</html>