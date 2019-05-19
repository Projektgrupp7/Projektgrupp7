<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class='form' name = 'form' onsubmit= method='POST' action='register-process.php'>
      <label for="namn">Ditt namn: </label>
      <br>
      <input type="text" name="namn" value="">
      <br>
      <label for="email">Email: </label>
      <br>
      <input type="text" name="email" value="">
      <br>
      <label for="pass">Password (min 8 characters):  </label>
      <br>
      <input type="password" name="password" value="">
      <br><br>
      <input type="submit" name="subReg" value="Register">
    </form>
  </body>
</html>
