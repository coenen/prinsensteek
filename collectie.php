<?php
/*Gebruik conn.php voor de database connectie.*/
require_once 'conn.php';

$sql_foto = "SELECT foto,id FROM steken" ;
$foto_out=mysql_query($sql_foto,$conn);

while($row = mysql_fetch_array($foto_out))
{
	echo "<a href=\"details.php?id=" . $row['id'] . "\"><img src=\"images/" . $row['foto'] . "\" alt=\"\" /><br /></a>";
	echo "<br />";
}
?>