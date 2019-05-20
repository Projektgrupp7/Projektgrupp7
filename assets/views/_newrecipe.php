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

    <input type="checkbox" name="preference" value="vegan"> Vegan<br>
    <input type="checkbox" name="preference" value="gluten"> Gluten free<br>
    <input type="checkbox" name="preference" value="dairy"> Dairy free<br>

    #ska fixa så att det går att lägga till bilder men är mycket svårare
    än resten så försöker förstå hur det funkar

    <input type="submit" name="submit" value="Submit">
  </div>
  </form>
</html>
