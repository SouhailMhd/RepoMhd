<?php 
ini_set ("SMTP","smtp.mail.gmail.com");
ini_set ("sendmail_from","mouahid.souhail@gmail.com");
ini_get("SMTP")."\n";
 ini_get('sendmail_from')."\n";
 
$msg .= "Nom: ";
$msg .= "\t\t\t\t$sender_nom\n";
$msg .= "Prénom: ";
$msg .= "\t$sender_prenom\n";
$msg .= "Société: ";
$msg .= "\t$sender_societe\n";
$msg .= "Email: ";
$msg .= "\t$sender_mail\n";
$msg .= "Adresse Postale: ";
$msg .= "\t$sender_adresse ";
$msg .= "$sender_cp ";
$msg .= "$sender_ville\n";
$msg .= "Téléphone: ";
$msg .= "\t$sender_tel\n\n";
$msg .= "Recontacter par:\t$sender_R1\n";
$msg .= "Message:\n";
$msg .= "\t$sender_message\n\n";
 
$recipient = " mouahid.souhail@gmail.com";
$subject = "mail de test";
 
$mailheaders = "From: $sender_nom $sender_prenom via bsformation.sbzhost.com<> \n";
$mailheaders .= "Reply-To: $sender_mail\n\n";
 
if(mail($recipient, $subject, $msg, $mailheaders)){
 
echo "<HTML><HEAD>";
echo "<TITLE>Transmission E-mail</TITLE></HEAD><BODY>";
echo "<H1 align=center>Merci, $sender_nom $sender_prenom</H1>";
echo "<P align=center>";
echo "Votre message a été envoyé.</P>";
echo "<p></p>";
echo "<p></p>";
echo "</BODY></HTML>";
}
else{
echo'<center><br/><br/><font color="red"><center><b>ERREUR: </b>Message non envoyé</center></font>';
}
?>