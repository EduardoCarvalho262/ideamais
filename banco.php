<?php
        $nome = $_GET['nome']; // usando o GET para capturar variaveis do js
        $telefone = $_GET['telefone'];
        $email = $_GET['email'];
        $op = $_GET["op"];
        $nome1 = $_GET['nome1'];
        $telefone1 = $_GET['telefone1'];
        $email1 = $_GET['email1'];
        $mensagem = $_GET['mensagem'];

        $servername = "127.0.0.1:3306"; // informações do banco
        $database = "ideamais";
        $username = "root";
        $password = "";
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $database) or die ("error ao conectar"); // criando conexão ao banco e respondendo caso dê erro
        
        if($op == 0){ // na url vem um indentificador colocado propositalmente visando separas as funções

        $sql  = "INSERT INTO orcamentos (nome, telefone, email, situacao) VALUES ('$nome', $telefone, '$email', 1)"; // insert na tabela orcamentos
        $result = mysqli_query( $conn,$sql) or die ("error ao tentar cadastrar"); // caso dê erro
        
        //echo $sql;
        echo 'Inserido'; // resposta caso inserido
      
        }else if($op == 1){

        $sql  = "INSERT INTO contatos (nome, telefone, email, mensagem, situacao) VALUES ('$nome1', $telefone1, '$email1', '$mensagem', 1)"; // insert na tabela contatos
        $result = mysqli_query( $conn, $sql) or die ("error ao tentar cadastrar");
        
        //echo $sql;
        echo 'Inserido';
        
        }
        

        mysqli_close($conn);  

?>
