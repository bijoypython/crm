<?php
$db=new mysqli('localhost','root','','crm');
$db->query("delete from leads where id=".$_GET['id']);
header('Location: R_leads.php');
?>