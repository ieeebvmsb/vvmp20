<?php

session_start();

include 'connection.php';

?>

<html>
  <head>
    <title>Login Page | VVMP 2020</title>
  </head>
  <body align="center">
    <br>
    <h1>Login..!!</h1>
    <br><hr><br>
    <form action="login.php" method="post">
      <input type="email" name="email" placeholder="Enter Email">
      <br><br>
      <input type="password" name="password" placeholder="Enter Password">
      <br><br><br>
      <input type="submit" name="login" value="Login">
    </form>
  </body>
</html>
