<?php

require_once 'conn.php';

$id = $_GET['id'];

$sql = "SELECT productnr " . 
               "FROM steken " .
               "WHERE id='$id' ";
			   
echo ('productnummer is: ' $sql);

?>