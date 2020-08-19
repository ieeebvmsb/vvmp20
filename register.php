<?php

session_start();

include 'connection.php';

extract($_POST);
$feespaid = 0;
$participantid = rand(000000,999999);
// print_r($_POST['it']);
// echo "<br>";
// $cnt = count($_POST['it']);
// echo "<br>";
// for($i=0;$i<$cnt;$i++)
// {
//   echo $it[$i];
//   echo "<br>";
// }
// print_r($_POST['ce']);
// echo "<br>";
// $cnt1 = count($_POST['ce']);
// echo "<br>";
// echo $cnt1;

if($password == $cnfpassword)
{

  $sql = " select * from participants where email = '$email' ";

  $r = mysqli_query($conn, $sql);
  $count = mysqli_num_rows($r);

  if($count == 0){

   $query = "INSERT INTO participants(id,name,email,contact,password,feespaid,type)
   values('$participantid','$name','$email','$contact','$password','$feespaid','$usertype')";

  	if(mysqli_query($conn,$query))
  	{
  		echo "User Created";
      echo "<br>";
      $_SESSION["name"] = $name;
      $_SESSION["email"] = $email;
  		header('Location: dashboard.php');
  		exit();
  	}
    else
  	{
  		echo "not added";
  	}
  }
  else{
  	echo "<alert>You are Already Registered</alert>";
    $_SESSION["name"] = $name;
    $_SESSION["email"]=$email;
    header('Location: dashboard.php');
    exit();
  }
} else {
  echo "<alert>Password Doesn't Match</alert>";
}

?>
