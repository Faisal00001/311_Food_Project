<?php

if(isset($_POST['Remove_Item']))
{
  $Get_ID=$_POST['Remove_ID'];
  $Get_User=$_POST['Remove_User'];
  $Get_Num=$_POST['Total'];


    $conn=mysqli_connect('localhost','root','','live_kitchen');
  if($conn)
  {
    $sql3="DELETE FROM cart
        WHERE Food_ID='".$Get_ID."' AND cid='".$Get_User."' LIMIT $Get_Num ";
    $res=mysqli_query($conn,$sql3);
    if($res)
    {

    }
    else {
      echo "No";
    }
  }
  else {
    echo "Error";
  }
}
else {

}





 ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="icon" href="favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Merriweather|Montserrat|Sacramento&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Neucha&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/cart.css">
  <link rel="stylesheet" href="css/menu.css">
  <link rel="stylesheet" href="css/Login.css">

  <body>
    <h1>Welcome to your selected Item Bar</h1>
  <?php
  $conn=mysqli_connect('localhost','root','','live_kitchen');
  if($conn)
  {
    session_start();
      $customer_menu_id=$_SESSION["get"];

    $conn=mysqli_connect('localhost','root','','live_kitchen');
    $sql="SELECT Food_ID,Food_Name_C,Food_Price_C
          FROM cart
          WHERE cid='".$customer_menu_id."' ";
          $result=mysqli_query($conn,$sql);

            if(mysqli_num_rows($result)>0)
            {
              while($row=mysqli_fetch_assoc($result))
              {

                ?>

                <table class="Menu" border="3" width=50% align="center">
                  <tr>
                    <td><?php echo "Food ID: ".$row['Food_ID']; ?></td>
                    <td><?php     echo "Food Name: ".$row['Food_Name_C']; ?>   </td>
                    <td><?php   echo "Food Price: ".$row['Food_Price_C']; echo" BDT"; ?> </td>
                  </tr>
                </table>
                <?php

                  $sql1="SELECT SUM(Food_Price_C)
                    FROM cart
                    where cid='".$customer_menu_id."'";
                  $result2=mysqli_query($conn,$sql1);

                $row2 = mysqli_fetch_assoc($result2);
                $_SESSION['Total_Price'] =$row2['SUM(Food_Price_C)'];






                ?>




                <br>
                <?php


              }
            }

            else {
              echo "No HI";
            }
            ?>
            <table class="Menu" border="3" width=50% align="center" >
              <tr>
                <td style="text-align:center;"><?php        echo "Total ". $row2['SUM(Food_Price_C)']; echo " BDT";?>   </td>

              </tr>
            </table>
            <?php




  }


   ?>
   <h3>Enter Food ID and User Name To remove Food</h3>
   <form class="" action="" method="post">
     <input required type="text" name="Remove_ID" value="" placeholder="Food ID">
     <input required type="text" name="Remove_User" value="" placeholder="User Name">
     <input required type="text" name="Total" value="" placeholder="Remove How Many">

     <input class="cart_btn" type="submit" name="Remove_Item" value="Remove Item">

   </form>
   <form class="" action="Payment.php" method="post">
     <input class="cart_btn" type="submit" name="cart_submit" value="Add Payment">

   </form>

   <form class="" action="ShowFood.php" method="post">
     <input class="cart_btn" type="submit" name="cart_submit" value="Go Back Home">

   </form>

   <hr>
   <div class="contact-me">
     <h2>Get In Touch</h2>
     <h3>Feel Free To Conatct with us</h3>
     <p class="Contact-message">Any suggestion send us mail</p>
     <a class="btn" href="mailto:faisalosman798@gmail.com">CONTACT ME</a>
   </div>
 </div>

 <div class="bottom-container">

   <p>© 2020 Faisal Osman.</p>
 </div>


   </body>

</html>
