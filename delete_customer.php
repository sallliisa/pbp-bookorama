<?php
  require_once('./lib/db_login.php');

  $db->query("DELETE FROM customers WHERE customerid={$_GET['id']}");
  header("Location: view_customer.php");
?>