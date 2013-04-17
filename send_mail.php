<?php
//functie voor opstellen mail
function activation($voornaam, $achternaam, $adres, $postcode, $emailadres, $telefoonnummer, $content)
{	
	$to = "maikel_coenen@hotmail.com";
	$subject = "Informatie-aanvraag";
	$message = "Hallo Peter, " . $voornaam . " " . $achternaam . "heeft zojuist een contactformulier ingevuld. /n De gegevens zijn: /n Naam:" . $voornaam . " " . $achternaam . "/n Adres:" . $adres . "/n Postcode:" . $postcode . "/n Email-adres:" . $emailadres . "/n Telefoonnummer:" . $telefoonnummer . "/n /n Het bericht wat hij/zij hierbij plaatste was: " . $content;
	$from = $emailadres;
	$headers = "From:" . $from;
	mail($to,$subject,$message,$headers);
}

/*Kijk of de formulier is verzonden, zoniet dan krijg je de foutmelding.*/
if (!isset($_REQUEST['action'])) {
  die ('No form has been submitted.<br/>Press back to return.');
} else {

		/*Check of geen enkele variabelen leeg is, is er wel een leeg.
         *Dan krijg je een foutmelding.*/
        if (empty($voornaam) || empty($achternaam) || empty($adres) || empty($postcode) ||empty($emailadres) || empty($telefoonnummer) || empty($content) {
          header ('refresh: 3; url=contact.html');
          die ('One or more fields have not been filled in');


        }
		/*Alles naar variabelen omzetten.*/
        $voornaam = mysql_real_escape_string($_POST['voornaam']);
        $achternaam = mysql_real_escape_string($_POST['achternaam']);
        $adres = mysql_real_escape_string($_POST['adres']);
		$postcode = mysql_real_escape_string($_POST['postcode']);
		$telefoon = mysql_real_escape_string($_POST['telefoonnummer']);
		$emailadres = mysql_real_escape_string($_POST['email']);
		$content = mysql_real_escape_string($_POST['content'];
		
		

		activation($voornaam, $achternaam, $adres, $postcode, $emailadres, $telefoonnummer, $content);
		
		echo ('Mail Sent');
?>