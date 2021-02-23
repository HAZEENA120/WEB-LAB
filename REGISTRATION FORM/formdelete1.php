<html>
<head>
<title>retrive data</title>
</head>
<body bgcolor="lightpink">
<center>
 <?php
        include_once 'conn.php';
        $sql="SELECT * FROM formtble";
        $result=mysqli_query($conn,$sql);
              if(mysqli_num_rows($result)>0)
                {
            ?>
           <br><br>
           <table border="2">
            

            <tr>
            <th>Id</th>
            <th>Name</th> 
            <th>Password</th> 
            <th>Gender</th> 
            <th>Email</th>  
            <th>Phonenumber</th>   
             </tr>
             <?php
             $i=0;
             while($row=mysqli_fetch_assoc($result)){
             ?>
      <tr>
      <td><?php echo $row["id"]; ?></td>

      <td><?php echo $row["Name"];?></td>
      <td><?php echo $row["Password"];?></td>
      <td><?php echo $row["Gender"];?></td>
      <td><?php echo $row["Email"];?></td>
      <td><?php echo $row["phonenumber1"];echo $row["phonenumber2"]; ?></td>
      </tr>
  
           <?php
           $i++;
           }
           ?>
           </table>
           
               </tr><br><br><br>
                     <form method="post" action="formdelete2.php">
                      Enter the id to delete:&nbsp&nbsp
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

      



