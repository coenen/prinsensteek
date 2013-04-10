<?php

/*Vul hier je hostname, user, password en database in.*/
define('SQL_HOST','mysql06-int.cp.hostnet.nl');
define('SQL_USER','u42875_admin');
define('SQL_PASS',',emcegm02,');
define('SQL_DB','db42875_steken');

$conn = mysql_connect(SQL_HOST, SQL_USER, SQL_PASS)
  or die('Could not connect to the database; ' . mysql_error());

/*Hier wordt de database geactiveerd.*/
mysql_select_db(SQL_DB, $conn)
  or die('Could not select database; ' . mysql_error());

?>