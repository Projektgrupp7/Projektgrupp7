<!DOCTYPE html>
<html>
  <head>
  </head>
  <div class="newrecipe">
  <h1>Lägg till ditt recept!</h1>
  <form class="newrecipe" name='recipe' onsubmit="return rec_val();" action="postrecprocess.php" method='POST'>

    <label for="recipename">Namn*:  </label><br>
    <input type="text" name="recipename" value=""><br>
    <label for="description">Beskrivning*: </label><br>
    <input type="text" name="description" value=""><br>
    <label for="ingredients">Ingredienser*: </label><br>
    <input type="text" name="ingredients" value=""><br>
    <label for="instructions">Instruktioner*: </label><br>
    <input type="text" name="instructions" value=""><br>
    <label for="time">Tid i minuter*: </label><br>
    <input type="text" name="time" value=""><br>

    <input type="checkbox" name="vegan" value="vegan"> Veganskt<br>
    <input type="checkbox" name="gluten" value="gluten"> Glutenfritt<br>
    <input type="checkbox" name="dairy" value="dairy"> Mjölkfritt<br>

    <input type="submit" name="submit" value="Posta">
    <p>* = obligatoriska fält</p>
  </div>
  </form>

  <form action="upload.php" method="post" enctype="multipart/form-data">
  Välj bild att ladda upp:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
  </form>
</html>
