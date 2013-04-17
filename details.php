<?php

require_once 'conn.php';

$id = $_GET['id'];

$sql_steek = "SELECT productnr, kleur, prijs FROM steken WHERE id='$id'" ;
$steek_out=mysql_query($sql_steek,$conn);
$steek=mysql_fetch_assoc($steek_out);
echo("gegevens zijn:" . $steek['productnr']. " " . $steek['kleur']);


?>