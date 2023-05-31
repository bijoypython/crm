<?php
$con=new mysqli('localhost','root','','crm');
$name=$_GET['id'];
$q="delete from dealer where id='$name'";
$con->query($q);
header('Location:dealer_create.php');

?>