<?php
#Funktion som returnerar salt i form av 22 slumpmässiga tecken
function salt(){
  return substr(sha1(mt_rand()),0,22);
}

#Funktion som hämtar saltet från en databas
function getSalt()
{
  $email = $_POST['email'];
  $sql = "SELECT salt FROM users WHERE email = '$email'";
  $conn = connect();
  $result = mysqli_fetch_array(mysqli_query($conn,$sql));
  $salt = $result[0];
  mysqli_close($conn);
  return $salt;
}

 ?>
