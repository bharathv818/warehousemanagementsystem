<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<title>warehouse database </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">

</head>
<body>
<style>
body, html {
  height: 100%;
}
</style>

  <div class="titlebar">
    <h2 style="color:black" align="center">WareHouse</h2>
  </div>

<div class="topnav" id="myTopnav">
  <!--<a href="index.php" class="active">Home</a>-->
  

  <!--Login form -->
  <?php
  include 'lappearordis.php';
 ?>
 </div>

<?php
  if (isset($_GET['error'])) {
        echo '<h1 style="font-size:30px;padding:0px;margin:0px;color:red;" align="center">'.$_GET['error'].'</h1>';
     }
 ?>
  
  <?php
  include 'lappearordis2.php';
 ?>
  


  <!--form class="modal-content" action="adminlogin.php" method="POST">
    <div class="container">
      <h1>admin login</h1>
      <hr>
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Admin login numbers" name="uid" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pwd" required>

      <div class="clearfix">
        <button type="submit" class="signupbtn" value="adminlogin" name="submitadmin">login</button>
      </div>
    </div>
  </form>-->
</div>
</script> </div>

 <section id="boxes">
      <div class="container">
        <div class="box">
          <img src="2.png">
          <h3>One System for the Entire Company</h3>
        </div>
        <div class="box">
          <img src="1.png">
          <h3> Detailed Inventory Visibility</h3>
        </div>
        <div class="box">
          <img src="3.png">
          <h3>Real Time Delivery and Checkout System</h3>
        </div>
      </div>
    </section>

</body>
</html>
