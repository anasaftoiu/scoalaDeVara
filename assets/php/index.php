<?php include("/xampp/htdocs/assets/php/db.php"); ?>
<?php include("/xampp/htdocs/assets/php/includes/header.php"); ?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <?php  if(isset($_SESSION['message'])){ ?>
                <div class="alert alert-<?=$_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
              <?=$_SESSION['message'] ?>
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php session_unset(); } ?>    
    
            <div class="card card-body">
                <form action="save.php" method="POST">
                    <div class="form-group">
                        
                        <input type="text" name="name" class="form-control"
                        placeholder="Nume" autofocus>
                        
                    </div>
                    <div class="form-group">
                        <textarea name="comentariu" rows="2"
                        class="form-control" placeholder="Comentarii/Sugestii"></textarea>
                    </div>
                    
                    <input type="submit" class="btn btn-success btn-block"
                    name="save" value="Salveaza">
                    
                </form>
            </div>
        </div>
        <div class="col-md-8">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nume</th>
                    <th>Comentariu</th>
                    <th>Data</th>
                    <th>Editeaza</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM com";
                $result_coms = mysqli_query($conn, $query);
                while($row = mysqli_fetch_assoc($result_coms)) {?>
                <tr>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['comentariu'] ?></td>
                    <td><?php echo $row['creat la'] ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                        <i class="fas fa-marker"></i>
                        </a>
                        <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                        <i class="far fa-trash-alt"></i>
                        </a>
                        
                    </td>
                    
                    
                    
                </tr>

               <?php }?>
            </tbody>
        </table>
        </div>
    </div>
    <form action="/assets/pagini/ScoalaDeVara2022Home.html" method="post">
<input type="submit" value="Acasa">
<label for="button" ></label>
</form>
</div



<?php include("/xampp/htdocs/assets/php/includes/footer.php"); ?>