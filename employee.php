<?php
$conn=mysqli_connect('localhost','root','','live_kitchen');

if($conn)
{
  $sql=SELECT * FROM employee;
  $result=mysqli_query($conn,$sql);


}


 ?>
