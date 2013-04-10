<?php
/*Gebruik conn.php voor de database connectie.*/
require_once 'conn.php';

/*Alles naar makkelijke variabelen omzetten.*/
$id = $_POST['id'];
$productnr = $_POST['productnr'];
$kleur = $_POST['kleur'];
$prijs = mysql_real_escape_string($_POST['prijs']);
$foto = mysql_real_escape_string($_POST['foto']);


        /*Database contacten wordt verder op uitgelegt.*/
        $check_sql = "SELECT productnr " .
                     "FROM steken " .
                     "WHERE productnr='$productnr'";
					 
        $sql = "INSERT INTO steken (productnr, kleur, prijs, foto) " .
               "VALUES ('" . $productnr . "','" . $kleur . "','" . $prijs . "','" . $foto . "')";
	
		$check_result = mysql_query($check_sql, $conn)
                          or die ('Could not check up productnumber; ' . mysql_error());

        

        /*De eerste database contact wordt hier gebruikt om te checken of jou
         *ingevoerde productnummer nog niet bestaat. Bestaat het wel foutmelding*/
        if ((mysql_fetch_array($check_result)) != 0) {
          header ('refresh: 3; url=steek.html');
          die ('productnummer bestaat al, deze steek is al eerder toegevoegd');
        }
		
		/*Steek toevoegen aan database*/
        mysql_query($sql, $conn)
          or die ('Could not create product; ' . mysql_error());
         

        header ('refresh: 3; url=../collectie.html');
	
        echo ('Steek toegevoegd');
        break;
		 
		
		
?>