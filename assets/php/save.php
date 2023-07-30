<?php

include("/xampp/htdocs/assets/php/db.php"); 

if (isset($_POST['save'])) {
  $name = $_POST['name'];
  $comentariu = $_POST['comentariu'];

  $query = "INSERT INTO com(name, comentariu) VALUES ('$name', '$comentariu')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'S-a salvat!';
  $_SESSION['message_type'] = 'success';
 
  header('Location: index.php');
  
  
  
  
  
  

  
  
  

}

?>





