<html>
<head>
<title>
<retrive data</title>
</head>
<body bgcolor="lightpink">
<form action="mainlib.html" method="post">
<center>

<?php
  include_once'conn.php';
$sql="SELECt * from lib";
$result=mysqli_query($conn,$sql);
 if (mysqli_num_rows($result)>0)
 {
?>
<br><br>
 <table border ="2">
<tr>
<th>Bookid</th>
<th>Author</th>
<th>Title</th>
<th>Publishername</th>
<th>Price</th>
<th>Quantity</th>
</tr>

<?php
$i=0;
while($row=mysqli_fetch_assoc($result)){
?>

<tr>
<td><?php echo $row["Bookid"];?></td>
<td><?php echo $row["Author"];?></td>
<td><?php echo $row["Title"];?></td>
<td><?php echo $row["Publishername"];?></td>
<td><?php echo $row["Price"];?></td>
<td><?php echo $row["Quantity"];?></td>

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




