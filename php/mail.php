<?php
session_start();

if(isset($_POST['captcha']))
{
   if($_POST['captcha'] == $_SESSION['captcha'])
   {
       $prenom      = $_POST['prenom'];
       $nom         = $_POST['nom'];
       $email       = $_POST['mail'];
       $message     = $_POST['subject'];
       $formcontent = "De: $prenom $nom \nMessage:\n $message";
       $recipient   = "aurelien.vilminot@gmail.com";
       $subject     = "Nouveau message venant du site !";
       $header .= "Reply-to: $email \r\n";
       $header .= "MIME-Version: 1.0 \r\n";
       mail($recipient, $subject, $formcontent, $header) or die("Désolé, une erreur s'est produite.");
       header('Location: ../popup.html');
       exit;
   }
   else
   {
      echo "Captcha invalide...";
   }
}
