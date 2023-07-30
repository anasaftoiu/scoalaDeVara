<?php 
include("/xampp/htdocs/assets/php/db.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM com WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if(!$result) {
        die("Esuat.");
    }

   $_SESSION['message'] = 'Continutul a fost sters cu succes!';
   $_SESSION['message_type'] = 'danger';
    header('Location: index.php');
}
?>