<?php

    echo"Atualizar";



    include("conect.php");

    $marca = $_POST ['marca'];
    $valor = $_POST['valor'];
    $data =  $_POST['data'];

    $id = $_GET['id'];
    $idUpdate =$id;

    
echo $id;

    echo "Marca: ".$marca;
    echo"</br>";
    echo"</br>";
    echo "R$ ".$valor;
    echo"</br>";
    echo"</br>";
    echo "Data ".$data;

    header("../index.php");

   /**  $update = "UPDATE `cadastroprodutos` SET `marca` = '$marca' WHERE `cadastroprodutos`.`id` = $id";
    $con = $mysqli ->query($update) or die ($mysqli->error);
*/
?>