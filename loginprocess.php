<?php
include_once("assets\bootstrap.php");
#Hämtar datan från formuläret
$email = $_POST['email'];
$pw = $_POST['password'];
#Validerar formdatan och kontrollerar lösenorder om validering går igenom
if(val_log($email, $pw)){
    if(md5(get_one($email, "salt") . $pw) === get_one($email, "pw"))
    {
      $_SESSION['email'] = $email;
    }
    else{
      header("Location: login.php?msg=Incorrect email or password.");
      break;
    }
  }
  else {
    header("Location: login.php?msg=Incorrect email or password");
    break;
  }

#Kontrollerar om användaren har adminbehörighet
if(get_one($email, "admin") == 1)
{
  $_SESSION['admin'] = true;
  header("Location: index.php?msg=Log in successful, admin account.");
}
else{
  header("Location: index.php?msg=Log in successful");
}
 ?>
