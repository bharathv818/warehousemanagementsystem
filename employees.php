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

  <div class="titlebar">
    <h2 style="color:black" align="center">WareHouse</h2>
  </div>

<div class="topnav" id="myTopnav">
  <a href="index.php" >Home</a>
  <a href="index2.php" >Items</a>
  <a href="shelf.php">shelf</a>
  <a href="employees.php" class="active">employees</a>
  <a href="delevaries.php">Delevaries</a>
  <a href="checkout.php">checkout</a>
 </div> 

<table>
  <tr>
    <th>first name</th>
    <th>last name</th>
    <th>employee no</th>
    <th>password</th>
    <th>salary</th>
    <th>contact</th>
    
  </tr>
  <?php
    require 'dbhin.php';
    $sql= "SELECT * FROM employee";
    //fred($sql); die;
    $result= $conn->query($sql);
    //fred($result); die;

     if($result->num_rows>0)

    {
         while ($row = $result->fetch_assoc())
        {
             echo "<tr>
                     <td>".$row["fname"]."</td>
                     <td>".$row["lname"]."</td>
                     <td>".$row["emply_no"]."</td>
                     <td>".$row["pass"]."</td>
                     <td>".$row["salary"]."</td>
                     <td>".$row["contact"]."</td>
                    </tr>";
        }
    }    
    echo "</table>";
    
     
   ?> 
</table>
</body>
</html>
