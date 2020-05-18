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
  </head>
  <body>
     <?php


           $Food_ID=$_POST['hidden_name'];
            $Food_name=$_POST['hidden_category'];
            $Food_price=$_POST['hidden_price'];
            $Food_Quantity=$_POST['quantity'];
            $price=$Food_price*$Food_Quantity;

            ?>
            <br>
            <?php






      ?>
      <h1>Welcom Customer</h1>
      <table class="Cart_Table" border="0" width=30% align=center>
        <tr>
           <td align=center bgcolor="#cc0e74"> <font color="white"> <?php echo "Order Has Been Add to Cart" ?> </td>
        </tr>
        <tr>
           <td align=center bgcolor="#cc0e74" > <font color="white"> <?php echo "Food ID:"; echo $Food_ID ;?> </td>
        </tr>
        <tr>
             <td align=center bgcolor="#cc0e74"> <font color="white">  <?php echo "Food name:"; echo $Food_name ;?> </td>
        </tr>
        <tr>
         <td align=center bgcolor="#cc0e74"> <font color="white"> <?php echo "Price:" ; echo $price; echo" BDT" ?> </td>
        </tr>
        <tr>
          <td align=center bgcolor="#cc0e74"> <font color="white">  <?php echo "Order Place Successfuly" ?> </td>
        </tr>

      </table>
      <form class="" action="ShowFood.php" method="post">
        <input class="cart_btn" type="submit" name="cart_submit" value="Order More">

      </form>
      <?php
      $conn=mysqli_connect('localhost','root','','live_kitchen');

      session_start();
      $variable=(rand(10,100000));
      $name=strval( $variable );

      $variables=(rand(10,100000));
      $names=strval( $variable );
      $p=$name+$names;
      $customer_id=$_SESSION["get"];
      if($conn)
      {
        $sql="INSERT INTO cart(Food_ID,Food_Name_C,Food_Price_C,cid)
              VALUES('$Food_ID','$Food_name','$Food_price','$customer_id')";
              if(mysqli_query($conn,$sql))
              {
                ?>
                <form class="" action="Menu.php" method="post">
                  <input class="cart_btn" type="submit" name="cart_submit" value="Click To See Menu">

                </form>
                <?php

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
