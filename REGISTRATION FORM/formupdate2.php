<html>
<head>
<title>Update Data</title>
</head>
<body bgcolor="cyan">
<form method="post" action="formupdate3.php">
<center>
<?php
include_once'conn.php';
$rid=$_POST['id'];
$sql="SELECT * FROM formtble where id='$rid'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
?>
<br><br>
<?php
if($row=mysqli_fetch_assoc($result)){
?>
  Form id &nbsp&nbsp<input type="text" value="<?php echo $row["id"];?>"Name="id"><br><br>
<b>
UserName &nbsp&nbsp</b>
 <input type="text" value="<?php echo $row["Name"];?>"name="upduname"<br><br>
<b>Password&nbsp&nbsp</b>
<input type="text" value"<?php echo $row["Password"];?>"
name="password2"><br><br>
<b>Gender&nbsp&nbsp</b>
 <input type="radio" name="gender"value="male"<?php
if($row["Gender"]=="male"){echo "checked";}?>/>Male
  <input type="radio" name="gender" value="female"<?php
if($row["Gender"]=="female"){echo "checked";}?>/>Female<br><br>
<b>Email &nbsp&nbsp</b>
<input type="text" value="<?php echo $row["Email"];?>"name="email"<br><br>
<b>Phone number &nbsp&nbsp</b>
<select name="code">
<option <?php if($row["phonenumber1"]=="997"){echo "selected";}?>>997</option>
<option<?php if($row["phonenumber1"]=="998"){echo "selected";}?>>998</option>
<option<?php if($row["phonenumber1"]=="999"){echo "selected";}?>>999</option>
<option<?php if($row["phonenumber1"]=="997"){echo "selected";}?>>997</option>
<option<?php if($row["phonenumber1"]=="973"){echo "selected";}?>>973</option>
<option<?php if($row["phonenumber1"]=="992"){echo "selected";}?>>992</option>
<option<?php if($row["phonenumber1"]=="994"){echo "selected";}?>>994</option>
</select>
 <input tpe="text" value="<?php echo $row["phonenumber2"];?>"
name="phonenumber2"><br><br>
<input type="Submit" value="Update" name="submit">
<?php

}
?>
<?php
}
else{
echo"NO result found";
}
?>
</center>
</form>
</body>
</html>