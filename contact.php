<?php
 $email= htmlspecialchars($_POST[cEmail]);
 $message = htmlspecialchars($_POST[cMessage]);
 $sender= htmlspecialchars($_POST[cName]);
 if(!empty($email) && !empty($message)) {
   if (@mail("hagelstumm1234@gmail.com", "Message: ", $message, "E-Mail: $email", "Sender: $sender")) { echo "Die Nachricht wurde abgeschickt";
 } else { 
   echo "Es gab einen Fehler";
 }
 }
 ?>
