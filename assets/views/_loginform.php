<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="style.css">
  </head>
  <div class="login">
  <h1>Please log in: </h1>
  <form class="login" name='form' onsubmit="return clientval();" action="login-process.php" method='POST'>
    <label for="email">Enter your email: </label><br>
    <input type="text" name="email" value=""><br>
    <label for="password">Enter your password: </label><br>
    <input type="password" name="password" value=""><br><br>
    <input type="submit" name="login" value="Log in">
  </div>
  <p>Not registered? Click <a href=register.php>here</a></p>
  </form>
</html>
