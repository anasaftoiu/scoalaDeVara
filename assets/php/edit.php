<?php
include("/xampp/htdocs/assets/php/db.php");

    if  (isset($_GET['id'])) {
     $id = $_GET['id'];
     $query = "SELECT * FROM com WHERE id=$id";
     $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1) {
          $row = mysqli_fetch_array($result);
          $name = $row['name'];
          $comentariu = $row['comentariu'];
        }
    }
    if (isset($_POST['update'])) {
        $id = $_GET['id'];
        $name= $_POST['name'];
        $comentariu = $_POST['comentariu'];
       

        $query = "UPDATE com set name = '$name', comentariu = '$comentariu' WHERE id=$id";
        mysqli_query($conn, $query);
        $_SESSION['message'] = 'S-a actualizat cu succes!';
        $_SESSION['message_type'] = 'warning';
        header('Location: index.php');
    }
?>
<?php include("/xampp/htdocs/assets/php/includes/header.php"); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id'] ?>" method="POST">
        <div class="form-group">
          <input name="name" type="text" class="form-control" value="<?php echo $name; ?>" placeholder="Actualizati numele">
        </div>
        <div class="form-group">
        <textarea name="comentariu" class="form-control" cols="30" rows="10"><?php echo $comentariu;?></textarea>
        </div>
        <button class="btn-success" name="update">
          Actualizat 
        </button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include("/xampp/htdocs/assets/php/includes/footer.php"); ?>