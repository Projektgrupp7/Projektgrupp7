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
function add_db($sql, $conn){
  if($conn->query($sql)===FALSE)
  {
    echo "Error: " . $sql . "<br>" . $conn->error;
    return false;
  }
  else{
    return true;
  }
}


?>
