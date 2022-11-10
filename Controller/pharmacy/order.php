<?php

  require_once '../../Model/pharmacy/db_connect2.php';
$id="$_GET[id]";
$customerid="$_GET[customerid]";
$med="$_GET[med]";
$unitprice="$_GET[unitprice]";
$pname="$_GET[pname]";
$phone="$_GET[phone]";


$query ="INSERT INTO `order_list` (`order_id`, `status`, `total_price`, `customer_id`, `date`) VALUES ('$id','Approved', '$price', '$customerid', '$date');";


 execute($query);

	header("Location:../view/orderinfo.php");




  ?>
