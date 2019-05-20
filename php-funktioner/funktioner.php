<?php
#Funktion som kontrollerar som en användare är inloggad. False eller true
function is_log(){
  if(!isset($_SESSION['email']))
    {
      return false;
    }
  else {
    return true;
  }
}

function try_log(){
  if(!is_log())
  {
    header("Location: login.php?msg=Vänligen logga in för att kunna posta");
  }
}

 ?>
