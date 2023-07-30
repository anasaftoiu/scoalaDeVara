<?php
session_start();
$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'php_mysql_web'
  ) or die(mysqli_erro($mysqli));
?>