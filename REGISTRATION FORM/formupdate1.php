<html>
<head>
<title>retrivedata</title>
</head>
<body bgcolor="lightgreen">
<center>
  <?php
        include_once'conn.php';
        $sql="SELECT * FROM formtble";
        $result=mysqli_query($conn,$sql);
         if(mysqli_num_rows($result)>0)
         {
           ?>
          <br><br>
          <table border="2">

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
           
               </tr><br><br><br>
                     <form method="post" action="formupdate2.php">
                      Enter the id to update:&nbsp&nbsp
                      <input type="text" name="id">
                       <br><br>
                      <input type="submit" name="submit" value="submit">
                      </form>
                       <?php
                        }
                        else{
                        echo "No result found";
                           }

                        mysqli_close($conn);
                           ?>
                           </center>
                            </body>
                             </html>

      



