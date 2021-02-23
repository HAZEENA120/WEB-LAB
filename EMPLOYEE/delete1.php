<html>
<head>
<title>Retrieve data</title>
</head>
<body bgcolor="pink">
<center>
<?php 
include_once 'conne.php';
$sql="SELECT * FROM employeetable";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
?>
<br><br>
<table border="2">
<tr>
<th>Id</th>
<th>Name</th>
<th>Designation</th>
<th>Salary</th>
</tr>
<?php
$i=0;
while($row=mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["id"];?></td>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["designation"]; ?></td>
<td><?php echo $row["salary"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
</tr><br><br><br>
<form method="post" action="delete2.php">
Enter the Id to delete: &nbsp&nbsp
<input type="text" name="id">
<br><br><br>
<input type="submit" name="submit" value="submit">
</form>
<?php
}
else
{
echo "No result found";
}
mysqli_close($conn);
?>
</center>
</body>
</html>