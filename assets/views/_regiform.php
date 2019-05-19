<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class='form' name = 'form' onsubmit="return clientval();" method='POST' action='register-process.php'>
      <label for="email">Email: </label>
      <br>
      <input type="text" name="email" value="">
      <br>
      <label for="password">Password (min 8 characters):  </label>
      <br>
      <input type="password" name="password" value="">
      <br><br>
      <input type="submit" name="subReg" value="Register">
    </form>
  </body>
</html>
