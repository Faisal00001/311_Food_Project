



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Montserrat|Sacramento&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Neucha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/burger.css">
    <link rel="stylesheet" href="css/Login.css">
  </head>
  <body>
      <h1>Welcome to Menu Bar</h1>
      <img  width="50%"  height="500px"src="images/1.jpg" alt="">
      <?php
         $conn=mysqli_connect('localhost','root','','live_kitchen');

        if($conn)
        {
          $sql="SELECT * FROM food_item WHERE Food_ID='F2'";
          $result=mysqli_query($conn,$sql);
          if(mysqli_num_rows($result)>0)
          {
            while($row=mysqli_fetch_assoc($result))
            {
              ?>
              <div class="">
                <form class="" action="cart.php" method="post">
                  <h4 class="Food_Item"> <?php echo "Food Item :"; echo $row['Category']; ?> </h4>
                  <h4 class="Food_Price"> <?php echo "Price :"; echo $row['Price']; echo " Take"; ?>  </h4>
                  <h4 class="Food_Quantity"> <?php echo "Quantity :"; echo $row['Quantity']; echo " gm"; ?>  </h4>
                  <h3>How many food you wanted to order</h3>
                  <input type="text" name="quantity" value="1">
                  <input type="hidden" name="hidden_name"  value= '<?php echo $row['Food_ID']; ?>'>
                  <input type="hidden" name="hidden_category"  value="<?php echo $row['Category']; ?>">
                  <input type="hidden" name="hidden_price"  value="<?php echo $row['Price']; ?>">
                  <br>
                  
                  <input class="Button_cart" type="submit" name="add_to_cart" value="Add to cart">

                </form>
              </div>
              <?php
            }
          }
        }
        else {
          echo " NOtLinked";
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
  </body>
</html>
<?php





 ?>
