<?php
include("assets/bootstrap.php")
  #REGISTRERINGSFUNKTION. EJ TESTAD ÄNNU.
  if (isset($_POST['subReg']))
  {
    $conn = connect();
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $pw = mysqli_real_escape_string($conn, $_POST['password']);
    //Kör valideringsfunktionen
    if(!val_reg())
    {
      header("Location: register.php?msg=Något gick fel, vänligen försök igen");
      die();
    }
    else
    {
      $salt = salt();
      $encpw = md5($salt . $pw);
      $query = "INSERT INTO users(name, email, pw, salt, admin)
            VALUES('$name', '$email', '$encpw', '$salt', 'FALSE');";

      if(add_db($query, $conn))
        {
          $conn->close();
          header("Location: login.php?msg=Registered! Please log in below.");
        }else
          header("Location: register.php?msg=Email already in use");
        die();
        }
    }
  }
 ?>
