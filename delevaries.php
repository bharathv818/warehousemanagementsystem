<?php
function fred($val)
{
  echo '<pre>';
   print_r( $val );
  echo '</pre>';
}
?>
<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<title>warehouse management</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">

</head>
<body>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
  body, html {
  height: 100%;
}

.bg {
  /* The image used */
  background-image: url("warehpuse.jpg");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>

  <div class="titlebar">
    <h2 style="color:black" align="center">WareHouse</h2>
  </div>

<div class="topnav" id="myTopnav">
<a href="index.php" >Home</a>
  <a href="index2.php" >Items</a>
  <a href="shelf.php">shelf</a>
  <a href="employees.php" >employees</a>
  <a href="delevaries.php" class="active">Delevaries</a>
  <a href="checkout.php">checkout</a>
 </div> 

<table>
  <tr>
    <th>delivery date</th>
    <th>delivery time</th>
    <th>employee no</th>
    <th>item no</th>
    <th>status</th>
  </tr>
  <?php
    require 'dbhin.php';
    $sql= "SELECT * FROM deliver";
    //fred($sql); die;
    $result= $conn->query($sql);
    //fred($result); die;

     if($result->num_rows>0)

    {
         while ($row = $result->fetch_assoc())
        {
             echo "<tr>
                     <td>".$row["deliver_date"]."</td>
                     <td>".$row["deliver_time"]."</td>
                     <td>".$row["emply_no"]."</td>
                     <td>".$row["item_no"]."</td>
                     <td>".$row["status"]."</td>
                    </tr>";
        }
    }    
    echo "</table>";
   ?> 
</table>

<form class="modal-content" action="delinsert.php" method="POST">
     <div id= delins class="container">
      <h1>insert delivary details</h1>
      <form name="delinser" method="POST" action="delinsert.php" style="float: right;height: auto;" >
        <input style="width: auto;height: 70%;padding: 10px;margin: 5px; " type="text" name="deldate" placeholder="delivary date" >
        <input style="width: auto;height: 70%;padding: 10px;margin: 5px; " type="text" name="deltime" placeholder="delivary time" >
        <input style="width: auto;height: 70%;padding: 10px;margin: 5px; " type="text" name="emppno" placeholder="employee number" >
        <input style="width: auto;height: 70%;padding: 10px;margin: 5px; " type="text" name="Itno" placeholder="item number" >
        <button style="width: auto;height: 70%;padding: 10px;margin: 5px; " type="submit" name="submitdel" value="itemsender">ADD</button> 
      </form>
    </form>


</body>
</html>
