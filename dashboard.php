<?php

session_start();

include 'connection.php';

$useremail = $_SESSION["email"];

$sql = "select * from participants where email = '$useremail' ";

$r = mysqli_query($conn, $sql);
$count = mysqli_num_rows($r);

if($count == 1){
  if($row=mysqli_fetch_assoc($r))
  {
    $_SESSION["id"] = $row["id"];
?>

<html>
  <head>
    <title>VVMP 2020</title>
  </head>
  <body align="center">
    <h1>User Dash Board</h1>
    <br><hr><br>
    <h4>Name: <?php echo $row["name"]; ?> </h4>
    <h5>Email: <?php echo $useremail; ?> </h5>
    <br>
    <h5>Fee Payment: <?php echo (($row["feespaid"] == 0) ? "Not Paid" : "Paid"); ?></h5>
    <br><br>
    <form action="payment.php" method="post">
      <select name="amount" <?php echo (($row["feespaid"] == 1) ? "disabled" : ""); ?>>
        <option value="sa">Select Type</option>
        <option value="20" <?php echo (($row["type"] == "IEEE Member Student") ? "selected" : ""); ?>>IEEE Member Student</option>
        <option value="40" <?php echo (($row["type"] == "Non-IEEE Member Student") ? "selected" : ""); ?>>Non-IEEE Member Student</option>
        <option value="50" <?php echo (($row["type"] == "Faculty") ? "selected" : ""); ?>>Faculty or Profetional</option>
      </select>
      <br><br>
      <input type="submit" name="pay" value="Pay Now" <?php echo (($row["feespaid"] == 1) ? "disabled" : ""); ?>>
    </form>
    <br><br>
    <a href="logout.php"><button type="button" name="logout">Logout</button></a>
  </body>
</html>

<?php
}
} else {
  echo $useremail;
  echo "<br>";
  echo "No User Found..!!";
  header('Location: registerHTML.php');
  exit();
}

?>
