<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "&nsinom@r2017";
    $dbname = "ciaw_secom_comca_rm3";    
    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    $conn_rm3 = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    if(!$conn){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{
        //echo "Conexao realizada com sucesso";
    }
?>