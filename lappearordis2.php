<?php 
   if(!isset($_SESSION['emppno'])){
    if (isset($_SESSION['uid'])) {
      // logged in
      echo '<div class="topnav" id="myTopnav">
        <form name="logoutform" method="POST" action="logout.php" style="float: right;height: auto;" >
        <button style="width: auto;height: 70%;padding: 10px;margin: 5px; " type="submit" name="submit" value="logout" >Logout</button>
      </form>
      <a style="float:right";>'.$_SESSION['uid'].'</a>';

      //if($_SESSION['userUid'] == "Admin")
      //  echo '<a href="upload.php" style="float:right;">Upload</a> </div>';
      //else
        echo '</div>';

    }   
    else {
      /* not logged in

      echo '<form name="loginform" method="POST" action="login.php" style="float: right;height: auto;" >
    <input style="width: auto;height: 70%;padding: 10px;margin: 5px; " type="text" name="uid" placeholder="employee number" >
    <input style="width: auto;height: 70%;padding: 10px;margin: 5px; " type="password" name="pwd" placeholder="password" >
    <button style="width: auto;height: 70%;padding: 10px;margin: 5px; " type="submit" name="submitadmin" value="login">Login</button>
  </form>*/
  echo'<form class="modal-content" action="adminlogin.php" method="POST">
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
  </form>


  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>

</div>


<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>';

    }
} 
   ?>