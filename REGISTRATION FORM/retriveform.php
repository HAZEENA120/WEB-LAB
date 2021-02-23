<html>
<head>
<title>
<retrive data</title>
</head>
<body bgcolor="lightpink">
<form action="main.html" method="post">
<center>

<?php
  include_once'conn.php';
$sql="SELECt * from formtble";
$result=mysqli_query($conn,$sql);
 if (mysqli_num_rows($result)>0)
 {
?>
<br><br>
 <table border ="2">
<tr>
<th>id</th>
<th>Name</th>
<th>Password</th>
<th>Gender</th>
<th>Email</th>
<th>phonenumber</th>
</tr>

<?php
$i=0;
while($row=mysqli_fetch_assoc($result)){
?>

<tr>
<td><?php echo $row["id"];?></td>
<td><?php echo $row["Name"];?></td>
<td><?php echo $row["Password"];?></td>
<td><?php echo $row["Gender"];?></td>
<td><?php echo $row["Email"];?></td>
<td><?php echo $row["phonenumber1"];echo $row["phonenumber2"];?></td>

</tr>

<?php
$i++;
}
?>
</table>

<?php
}
else{
echo"No result found";
}
?>

<br>
<br>
<input type="submit" value="back to home page" name="submit">
</center>
</form>
</body>
</html>




