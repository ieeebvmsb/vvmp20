<?php

session_start();

include 'connection.php';

if ($_SESSION["email"] != "") {
  header('Location: dashboard.php');
  exit();
} else {

extract($_POST);

$sql = " select * from participants where email = '$email' and password = '$password' ";

$r = mysqli_query($conn, $sql);
$count = mysqli_num_rows($r);

if($count == 1){

	if($row=mysqli_fetch_assoc($r))
	{
		echo "User Logged In";
    echo "<br>";
    $_SESSION["name"] = $row['name'];
    $_SESSION["email"] = $row['email'];
    $_SESSION["id"] = $row['id'];
		header('Location: dashboard.php');
		exit();
	}
  else
	{
		echo "User Not Logged In..!!";
	}
}
else{
	echo "<alert>Please, Register Your Self..!!</alert>";
  header('Location: registerHTML.php');
  exit();
}
}

?>
