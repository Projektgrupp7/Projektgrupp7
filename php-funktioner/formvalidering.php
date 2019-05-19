<?php
#Validerar en användares namn, email och lösenord.
#True om allt stämmer, false annars.
function val_reg($_name, $_email, $_pword)
{
  $errors = array();
  if(0 === preg_match("/\S+/", $_name))
  {
    $errors["name"] = "Inget namn angivet.";
  }

  if(0 === preg_match("/.+@.+\..+/", $_email)){
      $errors["email"] = "Inkorrekt email";
  }

  if(0 === preg_match("/\S+/", $_pword) || strlen($_pword)<8)
  {
    $errors["password"] = "För kort lösenord.";
  }

  if(0 === count($errors))
  {
      return true;
  }
  else{
    return false;
  }
}

function val_log($_email, $_pword)
{
  $errors = array();
  if(0 === preg_match("/.+@.+\..+/", $_email)){
      $errors["email"] = "Inkorrekt email";
  }

  if(0 === preg_match("/\S+/", $_pword) || strlen($_pword)<8)
  {
    $errors["password"] = "För kort lösenord.";
  }

  if(0 === count($errors))
  {
      return true;
  }
  else{
    return false;
  }
}
?>
