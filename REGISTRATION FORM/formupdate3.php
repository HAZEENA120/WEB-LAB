<html>
<body bgcolor="lightblue">
<form action="main.html" method="post">
<center>
<?php
include_once 'conn.php';
if(isset($_POST['submit']))
{
   $uid=$_POST['id'];
   $fname=$_POST['upduname'];
   $pass=$_POST['password2'];
   $gen=$_POST['gender'];
   $em=$_POST['email'];
   $ph1=$_POST['code'];
   $ph2=$_POST['phonenumber2'];
$sql="UPDATE formtble SET Name='$fname',password='$pass',Gender='$gen',Email='$em',phonenumber1='$ph1',phonenumber2='$ph2' where id='$uid'";

   if(mysqli_query($conn,$sql)){
echo"Updated sucessfully!<br><br>";
}
 else
{
  echo"Error:".$sql."".mysqli_error($conn);
}
 mysqli_close($conn);
}
?>
<br><br><input type="submit" value="back to home page" name="submit"></form>
</center>
</body>
</html>

