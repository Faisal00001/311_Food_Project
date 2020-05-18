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
        
  </head>
  <body>

    <?php
       $conn=mysqli_connect('localhost','root','','live_kitchen');
      if(isset($_POST['Admin_Login']))
      {
        session_start();
        $AdminID=$_POST['Admin_ID_Value'];
        $passwords=$_POST['passwordfield'];
        $_SESSION['GotAdminID']=$AdminID;

        if(empty($AdminID) || empty($passwords))
        {
          echo "Please insert value";
        }
        else {
          $sql="SELECT * FROM administration WHERE Admin_ID='".$AdminID."' AND Password='".$passwords."' LIMIT 1";
          $result=mysqli_query($conn,$sql);
          if(mysqli_num_rows($result)>0)
          {
            ?>
            <h1>Login Successfuly</h1>
            <form class="" action="AdministrationPage.php" method="post">
              <input class="cart_btn" type="submit" name="cart_submit" value="Click To Continue">

            </form>
            <?php
          }
          else {
            ?>
            <h1>Incorrect User Name Or Password</h1>
            <form class="" action="Administration.php" method="post">
              <input class="cart_btn" type="submit" name="cart_submit" value="Go Back">

            </form>

            <?php
          }
        }


       }
       else {
         echo "No hi";
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
