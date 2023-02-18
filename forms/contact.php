<?php 

$msg = "Nom:\t$Nomr\n";
$msg .= "E-mail:\t$email\n";
$msg .= "Message:\t$message\n\n";

$recipient = "privatedrivers7@gmail.com";
$subject = "Formulaire";

$mailheaders = "From: privatedrivers.github.io/.cg/<> \n";
$mailheaders .= "Reply-To: $CP\n\n";

mail($recipient, $subject, $msg, $mailheaders);

echo "<HTML><HEAD>";
echo "<TITLE>Formulaire envoyer!</TITLE></HEAD><BODY>";
echo "<H1 align=center>Merci, $nom </H1>";
echo "<P align=center>";
echo "Votre formulaire à bien été envoyé !</P>";
echo "</BODY></HTML>";

?> 