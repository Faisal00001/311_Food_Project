




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
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/Login.css">
  </head>
  <body>
    <h1>Hello Sir</h1>
    <form class="" action="" method="post">
      <input type="text" name="Payment_type" value="" placeholder="Payment Type">

      <input class="cart_btn" type="submit" name="Payment_butt" value="Add Payment">

    </form>
    <?php
    if(isset($_POST['Payment_butt']))
    {
      session_start();
      $payment_cid=$_SESSION["get"];

      $conn=mysqli_connect('localhost','root','','live_kitchen');
      $payment_type=$_POST['Payment_type'];
      $Total=$_SESSION['Total_Price'] ;
      $sql="INSERT INTO payment_method(Payment_type,P_Customer_ID,Total_Cash)
      VALUES('$payment_type','$payment_cid','$Total')";
      $result=mysqli_query($conn,$sql);
      if($result)
      {
        echo "Payment Successfuly Done.Thank You";
      }
      else {
        echo "Not success";
      }





    }
    else {

      echo "Not Success";
    }




     ?>
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

  </body>

</html>
