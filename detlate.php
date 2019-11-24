<?php
 if(isset($_SESSION["submitdel"]) && isset($_SESSION["submitcheck"]) )
 {
    $del_datec =  $_POST['del_date'];
    $del_timec =  $_POST['del_time'];
    $del_date1 =  $_POST['deldate'];
   $del_time1 =  $_POST['deltime'];
 }
    
 if (($del_date1 > $del_datec) && ($del_time1 > $del_timec))
 {

    
 }




?>