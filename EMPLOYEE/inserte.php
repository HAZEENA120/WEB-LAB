<html>
<body bgcolor="violet">
<form action="main.html" method="post">
<center>
<br><br>
<?php
include 'conne.php';
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$designation=$_POST['designation'];
$salary=$_POST['salary'];
$sql="INSERT INTO employeetable(name,designation,salary)VALUES('$name','$designation','$salary')";
if(mysqli_query($conn,$sql))
{
echo "New record created successfully!<br>";
}
else
{
echo "Error:".$sql."".mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<br><br><input type="submit" value="Back" name="submit">
</center>
</body>
</html>
</center>