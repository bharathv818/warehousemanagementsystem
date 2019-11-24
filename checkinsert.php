<?php
if (isset($_POST['submitcheck'])) 
{

    require 'dbhin.php';
   $adrs =  $_POST['addrs'];
   $del_date =  $_POST['deldate'];
   $del_time =  $_POST['deltime'];
   $itno =  $_POST['Itno'];
}
 

  $sql = "INSERT INTO checkpost ( addres, deliver_date_out, deliver_time_out, item_no) VALUES ('$adrs','$del_date', '$del_time', '$itno')";
  if ($conn->query($sql) === TRUE)
   {
      echo "New record created successfully";
      header("Location: checkpost.php");
      exit();
   } 
  else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }  


?>