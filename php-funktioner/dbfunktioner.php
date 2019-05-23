<?php

#Funktion som returnerar en connection. Kan t.ex. skriva $conn = connect() om man
#Vill koppla upp sig mot databasen när man ska göra en query
function connect(){
  $servername = "dbtrain.im.uu.se";
  $dbusername = "dbtrain_1083";
  $dbpassword = "tbepnr";
  $dbname = "dbtrain_1083";
  $conn = new mysqli($servername,$dbusername,$dbpassword,$dbname);
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  else{
  return $conn;
  }
}

#Funktion som tar en query och en connection och genomför queryn.
#True och lyckas false annars. Om false visar den error.
function db($sql, $conn){
  $conn = connect();
  if($conn->query($sql)===FALSE)
  {
    echo "Error: " . $sql . "<br>" . $conn->error;
    return false;
  }
  else{
    return true;
  }
}

#Funktion som hämtar värde ur en angiven column för angiven mail
function get_one($email, $column)
{
  $sql = "SELECT " . $column ." FROM users WHERE email = '$email'";
  $conn = connect();
  $result = mysqli_fetch_array(mysqli_query($conn,$sql));
  $salt = $result[0];
  mysqli_close($conn);
  return $salt;
}
?>
