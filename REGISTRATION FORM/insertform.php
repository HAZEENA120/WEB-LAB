<html>
<body bgcolor="yellowgreen">
<form action="main.html" method="post">
<center>
<br>
<br>
<?php
include_once 'conn.php';
if(isset($_POST['submit']))
{
   $fname=$_POST['uname'];
   $pass=$_POST['password'];
   $gen=$_POST['gender'];
   $em=$_POST['email'];
   $ph1=$_POST['code'];
   $ph2=$_POST['phno'];

$sql="INSERT INTO formtble(Name,Password,Gender,Email,phonenumber1,phonenumber2)VALUES('$fname','$pass','$gen','$em','$ph1','$ph2')";
if(mysqli_query($conn,$sql)){
echo "New record created sucessfully!<br>";
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

