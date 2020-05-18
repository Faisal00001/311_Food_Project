<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Live Kitchen</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/Login.css">
    <link rel="icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Montserrat|Sacramento&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Neucha&display=swap" rel="stylesheet">
  </head>

<?php

$conn=mysqli_connect('localhost','root','','live_kitchen');
$User=$_POST['User_name'];
$Fname= $_POST['First_Name'];
$Lname=$_POST['Last'];
$mail=$_POST['Email'];
$password_=$_POST['Password'];

if($conn)
{

    $sql="INSERT INTO customer(Customer_ID,Fname,Lname,Email,PASSWORD)
          VALUES('$User','$Fname','$Lname','$mail','$password_')";

   if(mysqli_query($conn,$sql))
   {
     ?>
     <body>
       <h1>Create account Successfuly</h1>

        <form class="" action="Customer.php" method="post">
          <input class="Submit" type="submit" name="submit1" value="Click To Login Now">

        </form>






     </body>
     <?php
   }
   else {
     ?>
    <body>
      <h1>Create account Not Created try another time</h1>

       <form class="" action="Customer.php" method="post">
         <input class="Submit" type="submit" name="submit1" value="Click To Login Now">

       </form>

    </body>
    <?php
   }
}
?>


<body>
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
<?php




?>
