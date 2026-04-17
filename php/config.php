<?php
// Database configuration
    $dbHost = 'localhost'; // Database host
    $dbUsername = 'root'; // Database username
    $dbPassword = ''; // Database password
    $dbName = 'formulario_projeto' ; // Database name
    
    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // if($conexao->connect_errno)
    //     {
    //         echo "Erro";
    //     }
    //     else{
    //         echo "conexão efetuada com sucesso";
    //     }

?>