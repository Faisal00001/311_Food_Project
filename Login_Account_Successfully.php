<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/Login.css">
    <link rel="icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Montserrat|Sacramento&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Neucha&display=swap" rel="stylesheet">
  </head>
  <body>

  </body>
</html>
<?php
$conn=mysqli_connect('localhost','root','','live_kitchen');

if(isset($_POST['submit2']))
{
  session_start();
  $User=$_POST['User_Name'];
  $_SESSION["get"] = $User;

  $password_=$_POST['Password'];
  if(empty($User) || empty($password_))
  {
    echo "Please insert value";
  }
  else {
    $sql="SELECT * FROM customer WHERE Customer_ID='".$User."' AND PASSWORD='".$password_."' LIMIT 1";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
      ?>
      <h1>Login Successfuly</h1>
      <form class="" action="ShowFood.php" method="post">
        <input class="Submit" type="submit" name="submit2" value="Check Food">
      </form>
      <?php
    }
    else {
      ?>
      <h1>Incorrect User Name Or Password</h1>
      <form class="" action="Customer.php" method="post">
          <input class="Submit" type="submit" name="submit2" value="Go Back">

      </form>

      <?php
    }
  }
}
?>
<?php


 ?>
 <hr>
 <body>
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
