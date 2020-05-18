<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Montserrat|Sacramento&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Neucha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/Login.css">
    <link rel="stylesheet" href="css/menu.css">
  </head>
  <body>
    <h1>Wecome Admin</h1>
    <h3>Here is Customer Food Order List</h3>
    <?php
     if(isset($_POST['Admin_Menu_Butt']))
     {
       $conn=mysqli_connect('localhost','root','','live_kitchen');
       if($conn)
       {
         session_start();
         $Admin_menu_ID=$_SESSION['GotAdminID'];
           $customer_menu_id=$_SESSION["get"];

         $conn=mysqli_connect('localhost','root','','live_kitchen');
         $sql="SELECT *
               FROM cart
                ";
               $result=mysqli_query($conn,$sql);

                 if(mysqli_num_rows($result)>0)
                 {
                   while($row=mysqli_fetch_assoc($result))
                   {

                     ?>

                     <table class="Menu" border="3" width=50% align="center">
                       <tr>
                           <td><?php echo "Customer ID: ".$row['cid']; ?></td>
                         <td><?php echo "Food ID: ".$row['Food_ID']; ?></td>
                         <td><?php     echo "Food Name: ".$row['Food_Name_C']; ?>   </td>
                         <td><?php   echo "Food Price: ".$row['Food_Price_C']; echo" BDT"; ?> </td>
                       </tr>
                     </table>
                     <?php

                       $sql1="SELECT SUM(Food_Price_C)
                         FROM cart
                         ";
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
     }
     else {
       echo "You Havent Click the button";
     }






     ?>
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
   </div>
  </body>
</html>
