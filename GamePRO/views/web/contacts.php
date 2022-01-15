<?php
    session_start();
?>

<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Heros Evolved</title>
  <link rel="stylesheet" href="<?php echo $_SESSION["path"]; ?>template/css/web/contacts.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="wrapper">
    <header>Send us a Message</header>
    <form action="#" method="POST">
      <div class="dbl-field">
        <div class="field">
          <input type="text" name="username" placeholder="Enter your name" autocomplete="off" value="Kinz">
          <i class='fas fa-user'></i>
        </div>
        <div class="field">
          <input type="text" name="email" placeholder="Enter your email" autocomplete="off">
          <i class='fas fa-envelope'></i>
        </div>
      </div>
      <div class="dbl-field">
        <div class="field">
          <input type="text" name="phone" placeholder="Enter your phone" autocomplete="off">
          <i class='fas fa-phone-alt'></i>
        </div>
        <div class="field">
          <input type="text" name="website" placeholder="Enter your website" autocomplete="off" value="localhost.heroEvolved.com">
          <i class='fas fa-globe'></i>
        </div>
      </div>
      <div class="message">
        <textarea placeholder="Write your message" name="message"></textarea>
        <i class="material-icons">message</i>
      </div>
      <div class="list-button">
        <div class="button-area">
          <button type="submit">Send Message</button>
          <span></span>
        </div>
        <div class="button-area">
          <a href="home.php">Back</button>
          <span></span>
        </div>
      </div>

    </form>
  </div>
  <script src="script.js"></script>

  <?php
    

    require_once($_SERVER['DOCUMENT_ROOT'].$_SESSION["path"]."common/connect.php");
    
    if(isset($_POST['username'])){
        $sql = "INSERT INTO contacts(username, mess, gmail, phone) VALUES('".$_POST['username']."',
        '".$_POST['message']."', '".$_POST['email']."', '".$_POST['phone']."')";

        if ($conn->query($sql) === TRUE) {
           $sql = "SET @num := 0;
           UPDATE heros SET id = @num:=(@num+1);
           ALTER TABLE heros AUTO_INCREMENT = 1; ";
           $conn->query($sql);
           $conn->close();
           echo "<script> 
            alert(\"Send Success\"); 
		    </script>";
        }
        else{
          echo "<script> 
              alert(\"Send Failed\"); 
          </script>";
          $conn->close();
        }
    }
?>

</body>
</html>