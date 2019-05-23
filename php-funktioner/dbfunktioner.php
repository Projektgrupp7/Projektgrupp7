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

function add_rec()
{
  $conn = connect();
  $a = mysqli_real_escape_string($conn ,$_POST['recipename']);
  $b = mysqli_real_escape_string($conn, $_POST['description']);
  $c = mysqli_real_escape_string($conn, $_POST['ingredients']);
  $d = mysqli_real_escape_string($conn, $_POST['instructions']);
  $e = mysqli_real_escape_string($conn, $_POST['time']);

  if(isset($_POST['vegan']))
  {
  $vegan = $_POST['vegan'];
  }

  if(isset($_POST['gluten']))
  {
  $gluten = $_POST['gluten'];
  }

  if(isset($_POST['dairy']))
  {
  $mjölk = $_POST['dairy'];
  }

  $email = $_SESSION['email'];

  $query_getuserid = "SELECT id FROM users WHERE email = '$email'";
  $userid = mysqli_fetch_array(mysqli_query($conn, $query_getuserid))[0];

  $query_getpostid = "SELECT MAX(rec_id) FROM recipe";
  $postid = mysqli_fetch_array(mysqli_query($conn, $query_getpostid))[0] + 1;

  $query1 = "INSERT INTO recipe (name, beskrivning, ingredients, instructions, tid, poster)
  VALUES('$a', '$b', '$c', '$d', '$e', '$userid')";

  $query_vegan = "INSERT INTO vegan(postid) VALUES('$postid')";
  $query_gluten = "INSERT INTO gluten(postid) VALUES('$postid')";
  $query_mjölk = "INSERT INTO mjölk(postid) VALUES('$postid')";

  $check = true;
  if(!mysqli_query($conn, $query1))
  {
    $check = false;
  }

  if(isset($_POST['vegan']))
  {
    if(!mysqli_query($conn, $query_vegan))
    {
      $check = false;
    }
  }

  if(isset($_POST['gluten']))
  {
    if(!mysqli_query($conn, $query_gluten))
    {
      $check = false;
    }
  }

  if(isset($_POST['dairy']))
  {
    if(!mysqli_query($conn, $query_mjölk))
    {
      $check = false;
    }
  }

  if($check)
  {
    header("Location: index.php?msg=Recept tillagt!");
  }
  else {
    header("Location: postrecipe.php?msg=Försök att lägga till misslyckades, vänligen försök igen. ");
  }
}

?>
