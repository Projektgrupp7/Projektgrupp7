<!DOCTYPE html>
<html>
  <head>
  </head>
  <div class="newrecipe">
  <h1>Lägg till ditt recept!</h1>
  <form class="newrecipe" name='recipe' onsubmit="" action="" method='POST'>

    <label for="recipename">Namn:  </label><br>
    <input type="text" name="recipename" value=""><br>
    <label for="description">Description: </label><br>
    <input type="text" name="description" value=""><br>
    <label for="ingredients">Ingredients: </label><br>
    <input type="text" name="ingredients" value=""><br>
    <label for="instructions">Instructions: </label><br>
    <input type="text" name="instructions" value=""><br>
    <label for="time">Time: </label><br>
    <input type="text" name="time" value=""><br>

    <input type="checkbox" name="vegan" value="vegan"> Vegan<br>
    <input type="checkbox" name="gluten" value="gluten"> Gluten free<br>
    <input type="checkbox" name="dairy" value="dairy"> Dairy free<br>

    <input type="submit" name="submit" value="Submit">
  </div>
  </form>

  <form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
  </form> 

</html>
