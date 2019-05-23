<?php
#Funktion som kontrollerar som en användare är inloggad. False eller true
function is_log(){
  if(!isset($_SESSION['email']) || $_SESSION['loggedin'] !== true)
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

function logbtn()
  {
    if(is_log() == true)
    {
      echo "<li><a href=logoutprocess.php class=" . "menu" . ">LOG<br>OUT</a></li>";
    }
    else {
      echo "<li><a href=login.php class=" . "menu" . ">LOG<br>IN</a></li>";
    }
  }
 ?>
