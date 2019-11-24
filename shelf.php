
<?php
function fred($val)
{
   echo '<pre>';
   print_r( $val );
   echo '</pre>';
}?>
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
}
</style>
<style>

body, html {
  height: 100%;
}

</style>

  <div class="titlebar">
    <h2 style="color:black" align="center">WareHouse</h2>
  </div>

<div class="topnav" id="myTopnav">
 <a href="index.php">Home</a>
  <a href="index2.php">Items</a>
  <a href="shelf.php" class="active">shelf</a>
  <a href="employees.php">employees</a>
  <a href="delevaries.php">Delevaries</a>
  <a href="checkout.php">checkout</a>
 </div> 

 <!--<table>
  <tr>
    <th>shelf name</th>
    <th>shelf number</th>
    <th>item number</th>
    <th>on level</th>
  </tr>-->
  <?php
    require 'dbhin.php';
    $sql= "SELECT * FROM shelf";
    $result= $conn->query($sql);
    $itemnum= $_GET["itemnumber"];
     if($result->num_rows>0)  
     
    {
         while ($row = $result->fetch_assoc())
        {
          if($row["item_no"]==$itemnum)
          {
            $shelfno=$row["shelf_no"];
            $lvl=$row["on_level"];
          } 
        }
    }    
     
   ?>
   </table>
   <form class="modal-content" action="shelf.php" method="POST">
     <div id= shsearch class="container">
      <h1>Display shelf</h1>
      <form name="shsearch" method="POST" action="shelf.php" style="float: right;height: auto;" >
      <div id= shsearch class="container">
        <h2 style color:rgb(225,255,225)> Shelf Number: <?php echo $shelfno; ?> </h2>
        <h3 style="color:rgb(0,255,0)">Level 1</h3>
        <h3 style="color:rgb(225,0,0)">Level 2</h3>
        <h3 style="color:rgb(225,255,0)">Level 3</h3>
        <h3 style="color:rgb(0,255,225)">Level 4</h3>
      </form>
    </form>
     <br>
     <br>
     <br>  
     <?php
       for($i=1;$i<=9;$i++)
       {
        $idno="SH0".$i;
         if($shelfno==$idno)
         {

           switch($lvl)
           {
             case 1: echo' <svg id="SH01" width="100" height="100">
             <rect width="100" height="100" style="fill:rgb(0,255,0);stroke-width:10;stroke:rgb(0,0,0)" />
             </svg>';
             break;

             case 2:echo' <svg id="SH01" width="100" height="100">
             <rect width="100" height="100" style="fill:rgb(225,0,0);stroke-width:10;stroke:rgb(0,0,0)" />
             </svg>';
             break;

             case 3:echo' <svg id="SH01" width="100" height="100">
             <rect width="100" height="100" style="fill:rgb(225,255,0);stroke-width:10;stroke:rgb(0,0,0)" />
             </svg>';
            break;

            case 4:echo' <svg id="SH01" width="100" height="100">
            <rect width="100" height="100" style="fill:rgb(0,255,225);stroke-width:10;stroke:rgb(0,0,0)" />
            </svg>';
            break;

           }
         }
         else{
           echo'<svg id="SH01" width="100" height="100">
           <rect width="100" height="100" style="fill:rgb(0,0,225);stroke-width:10;stroke:rgb(0,0,0)" />
        </svg>';
         }
       }    
     ?>     
    
  
</body>
</html>
