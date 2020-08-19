<?php

session_start();

include 'connection.php';

?>

<html>
  <head>
    <title>VVMP 2020</title>
  </head>
  <body align="center">
    <br>
    <h1>Register Your Self</h1>
    <br><hr><br>
    <form action="register.php" method="post">
      <input type="text" name="name" placeholder="Enter Name">
      <br><br>
      <input type="email" name="email" placeholder="Enter Email">
      <br><br>
      <input type="text" name="contact" placeholder="Enter Contact">
      <br><br>
      <select name="usertype">
        <option value="sp">Select Plan</option>
        <option value="IEEE Member Student">IEEE Member Student</option>
        <option value="Non-IEEE Member Student">Non-IEEE Member Student</option>
        <option value="Faculty">Faculty or Profetional</option>
      </select>
      <br><br>
      <input type="password" name="password" placeholder="Enter Password">
      <br><br>
      <input type="password" name="cnfpassword" placeholder="Confirm Password">
      <br><br><br>
      <input type="submit" name="register" value="Register Now">
    </form>
    <br><br>
    Already Registered? <a href="loginHTML.php">Login Now</a>
  </body>
</html>
