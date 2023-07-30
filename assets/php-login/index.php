<?php
   
  require 'database.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html/css/js/imgd">
	<meta name="author" content="Logare">
	<meta name="keywords" content="Logare">
    <meta charset="UTF-8">
    <title>Bine ati venit!</title>
    <link rel="stylesheet" href="/assets/css/styleLog.css">
</head>
<body id="poza">
 <main>
    <!---Formular(begin)-->
    <div class="continut_tot">    
      <div class="continut_spate">
        <div class="continut_spate_log">
          <h3>Cont</h3>
          <p>Ai deja un cont?</p>
          <button id="buton_deinceput">Autentificare </button>
        </div>
        <div class="continut_spate_registru">
          <h3>Formular</h3>
          <p>Inregistreaza-te pentru a avea acces la toate facilitatiile!</p>
          <button id="buton_registru"> Creare cont </button>
        </div>
      </div>
      <!--Logare si inregistrare(begin)-->
      <!---Logare(begin)-->
      <div class="continut_log_registru">
        <form action="/assets/php-login/index.php" class="formular_log" method="post">

        <?php if(isset($_GET['error'])){ ?>
    		<div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
			</div>
		    <?php } ?>

        

          <h2>Autentificare</h2>
          <input type="text" name="email" value ="<?php echo (isset($_GET['email']))?$_GET['email']:"" ?>" placeholder="Email">

          <input type="password" name="password" value ="<?php echo (isset($_GET['password']))?$_GET['password']:"" ?>" placeholder="Parola">
          <button value="submit">Trimite</button>
        </form>
      <!---Logare(end)-->


      <!--Inregistrare(begin)-->
        <form action="/assets/php-login/index.php" class="formular_registru" method="POST">
        <?php $message = '';

          if (!empty($_POST['email']) && !empty($_POST['password'])) {
          $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
          $stmt = $conn->prepare($sql);
          $stmt->bindParam(':email', $_POST['email']);
          $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
          $stmt->bindParam(':password', $password);

           if ($stmt->execute()) {
             $message = 'Succes!';
            } else {
             $message = 'Ne pare rau,nu te-ai putut conecta!';
            }
          }
        ?>

           <?php if(!empty($message)): ?>
           <h2> <?= $message ?></h2>
           <?php endif; ?>
          <h2>Inregistrare</h2>
          <input type="text"name="email" placeholder="Email">
          <input type="password" name="password" placeholder="Parola">
          <input type="password" name="confirm_password" placeholder="Confirma parola">
          <button value="submit">Trimite</button>
        </form>
      <!--Inregistrare(end)-->
      </div>
      <!--Logare si inregistrare(end)-->
    </div>
    <!---Formular(end)-->
  </main>
  <script src="/assets/js/main.js"></script>

</body>
</html>