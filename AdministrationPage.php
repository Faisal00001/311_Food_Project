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
    <h1>Hello Administration</h1>
    <form class="" action="Admin_Menu.php" method="post">
      <input class="cart_btn" type="submit" name="Admin_Menu_Butt" value="Click To See  Order List">

    </form>



     <form class="" action="" method="post">
       <input class="cart_btn" type="submit" name="Admin_Menu_Manager" value="Want To Add a Manager">

     </form>
     <?php
        if(isset($_POST['Admin_Menu_Manager']))
        {
          $conn=mysqli_connect('localhost','root','','live_kitchen');
          if($conn)
          {
            ?>

            <form class="" action="" method="post">
              <input  type="text" name="MID" value="" placeholder="Manager ID">
              <input type="text" name="MFame" value="" placeholder="Manager First Name">
              <input  type="text" name="MLname" value="" placeholder="Manager Last Name">
              <input  type="text" name="MAdd" value="" placeholder="Manager Address">
              <input class="cart_btn" type="submit" name="Manager_Add" value="Submit Manager Info">

            <?php
          }
          else {
            echo "No hi";
          }
        }
        else {

        }


      ?>
      <?php
             if(isset($_POST['Manager_Add']))
             {
                 $conn=mysqli_connect('localhost','root','','live_kitchen');
                 if($conn)
                 {
                  session_start();
                $Mid=$_POST['MID'];
                $Mf=$_POST['MFame'];
                $Ml=$_POST['MLname'];

                $MA=$_POST['MAdd'];
                $AID=$_SESSION['GotAdminID'];


                $sql="INSERT INTO managers(Manager_ID,Manager_Fname,Manager_Lname,A_ID,Manager_Address)
                 VALUES('$Mid','$Mf','$Ml','$AID','$MA')";
                   $result=mysqli_query($conn,$sql);
                   if($result)
                   {
                          echo "A Manager Add Succesfully...Congratulation";
                   }
                   else {
                     echo "Insert Unique Manager ID Please Sir";
                     ?>

                     <?php
                   }
                 }
                 else {
                   echo "Not CONNECTED";
                 }
             }
             else {

             }


       ?>
     <form class="" action="" method="post">
       <input class="cart_btn" type="submit" name="Admin_Emp" value="Want To add an employee">

     </form>
     <?php
        if(isset($_POST['Admin_Emp']))
        {
          $conn=mysqli_connect('localhost','root','','live_kitchen');
          if($conn)
          {
            ?>

            <form class="" action="" method="post">
              <input type="text" name="EID" value="" placeholder="Employee ID">
              <input  type="text" name="EFname" value="" placeholder="Employee First Name">
              <input  type="text" name="ELname" value="" placeholder="Employee Last Name">
              <h3>Select Your Manager For Employee</h3>
              <?php

                $sql="SELECT Manager_ID FROM managers";
                $res=mysqli_query($conn,$sql);
                if($res)
                {

                         while($rows=mysqli_fetch_assoc($res))
                         {
                           echo "Manager ID :".$rows['Manager_ID'];
                           ?>
                           <br>
                           <?php
                         }

                }
                else {
                  echo "Not GOt";
                }

               ?>

              <input  type="text" name="EMID" value="" placeholder="Employee Manager ID">



               <input type="text" name="EAd" value="" placeholder="Employee Address">

              <input class="cart_btn" type="submit" name="Employee_Add" value="Submit Employee Info">

            <?php
          }
          else {
            echo "No hi";
          }
        }
        else {
            
        }


      ?>
      <?php
       if(isset($_POST['Employee_Add']))
       {

                 $conn=mysqli_connect('localhost','root','','live_kitchen');
                 if($conn)
                 {
                   $EID_=$_POST['EID'];
                   $EFname_=$_POST['EFname'];
                   $ELname=$_POST['ELname'];
                   $EMID_=$_POST['EMID'];
                   $EAd_=$_POST['EAd'];
                   $sql="INSERT INTO employee(Employee_ID,Employee_Fname,Employee_Lname,E_Manager_ID,Employee_Address)
                   VALUES('$EID_','$EFname_','$ELname','$EMID_','$EAd_')";
                   $r=mysqli_query($conn,$sql);
                   if($r)
                   {
                     echo "Employee Added Succesfully";
                   }
                   else {
                     echo "No";
                   }

                 }
                 else {
                   echo "Please Insert All Information";
                 }


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

  </body>
</html>
