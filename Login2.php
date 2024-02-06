<?php
/* dit programma, pgm_post3bpost is met "post" aangeroepen vanuit pgm_post3a. De variabelen van pgm_post3a zijn 
dus ook bekend in:
001_dit programma (pgm_post3bpost) 
002_in de url http://localhost/anweb_pgm_html_php/pgm_post3b.php?vnaam=Mijn_Voornaam&anaam=Mijn_Achternaam */



$postMail = $_POST["E-mail"];		
$postWw = $_POST["Password"];

$email = "Admin@mborijnland.nl";
$wachtwoord = "Admin1";

echo "<br>  " .$postMail. " " .$postWw. "";

if($email == $postMail && $wachtwoord == $postWw)
{
   header("Location:index.html");
}

else
{
    header("Location:login.php");
}
?>