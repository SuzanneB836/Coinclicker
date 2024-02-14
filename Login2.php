<?php
$postMail = $_POST["E-mail"];		
$postWw = $_POST["Password"];

$email = "Admin@mborijnland.nl";
$wachtwoord = "Admin1";

if($email == $postMail && $wachtwoord == $postWw)
{
   header("Location:index.html");
}
else
{
    header("Location:login.php");
}
?>
