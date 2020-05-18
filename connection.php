<?php

$conn=mysqli_connect('localhost','root','','live_kitchen');
if($conn)
{
  
  $sql="SELECT * FROM customer;";
  $result=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_assoc($result))
  {
    echo "ID: ".$row['Customer_ID'];
  }
}
else {
  echo "Not connected";
}
 ?>
