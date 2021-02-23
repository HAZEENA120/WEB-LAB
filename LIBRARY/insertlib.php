<html>
<body bgcolor="yellowgreen">
<form action="mainlib.html" method="post">
<center>
<br>
<br>
<?php
include_once 'conn.php';
if(isset($_POST['submit']))
{
   $author=$_POST['auname'];
   $tit=$_POST['title'];
   $pubname=$_POST['pname'];
   $pr=$_POST['price'];
   $qua=$_POST['quantity'];
   

$sql="INSERT INTO lib(Author,Title,Publishername,Price,Quantity)VALUES('$author','$tit','$pubname','$pr','$qua')";
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

