<?php

    include("conect.php");

  
    $id = $_GET['id'];
    $idDelete =$id;

    echo"O Id ".$idDelete." foi deletado com sucesso!";

    $delete = "DELETE FROM cadastroprodutos WHERE id=$idDelete";

    $con = $mysqli ->query($delete) or die ($mysqli->error);

    header("Location: ".$_SERVER['HTTP_REFERER']."");


    

?>