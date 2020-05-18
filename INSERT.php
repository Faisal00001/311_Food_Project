<?php

$conn=mysqli_connect('localhost','root','','live_kitchen');
if($conn)
{
$sql = "INSERT INTO customer(Customer_ID,Fname,Lname,Email,PASSWORD)  VALUES ('Peter1213123','jdjsadasddasd' ,'Parkerdsasdsasd', 'peterparkedsasdsaddr@mail.com','212121221sdad')";
       if(mysqli_query($conn,$sql))
       {
         echo "Inserted";
       }
       else {
         echo "NO";
       }

}
else {
  echo "NOT CONNECTED";
}

 ?>
