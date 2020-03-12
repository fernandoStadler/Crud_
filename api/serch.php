<?php
include("conect.php");

$serch = "SELECT id, marca, valor, date_format(data,'%d/%m/%Y') as 'data' FROM `cadastroprodutos`";







$con = $mysqli ->query($serch) or die ($mysqli->error);




?>