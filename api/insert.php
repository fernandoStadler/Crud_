<?php

include("conect.php");

    $marca = $_POST ['marca'];
    $valor = $_POST['valor'];
    $data =  $_POST['data'];

    
    echo "Marca: ".$marca;
    echo"</br>";
    echo"</br>";
    echo "R$ ".$valor;
    echo"</br>";
    echo"</br>";
    echo "Data ".$data;

    header("../index.php");

    $add = "INSERT INTO cadastroprodutos (id, marca, valor, data) VALUES ('','$marca','$valor','$data')";
    $con = $mysqli ->query($add) or die ($mysqli->error);

    header("Location: ".$_SERVER['HTTP_REFERER']."");

    
?>


