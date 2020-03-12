<?php
    /**Conecta ao banco de dados produtos */    
    $host="localhost";
    $user="root";
    $password="";
    $dataBase="produtos";
    
    $mysqli = new mysqli($host,$user,$password,$dataBase);

    /** Retorna o erro em caso de falha na conexão */
            
            if($mysqli->connect_errno)
            echo"Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;

?>