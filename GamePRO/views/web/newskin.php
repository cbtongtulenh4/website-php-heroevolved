<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
	integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
	crossorigin="anonymous" referrerpolicy="no-referrer" >
    <link href="<?php echo $_SESSION["path"]; ?>template/css/web/common.css?v=<?php echo time(); ?>" rel="stylesheet">
     <link href="<?php echo $_SESSION["path"]; ?>template/css/web/newskin.css?v=<?php echo time(); ?>" rel="stylesheet">
     <link href="<?php echo $_SESSION["path"]; ?>template/css/web/header.css?v=<?php echo time(); ?>" rel="stylesheet">
    <link href="<?php echo $_SESSION["path"]; ?>template/css/web/footer.css?v=<?php echo time(); ?>" rel="stylesheet">
</head>
<body>
    <div id="main">
        <div class="container">
        <?php require_once($_SERVER['DOCUMENT_ROOT'].$_SESSION["path"]."common/web/header.php"); ?>
        <div class="content">
            <a href="" class="btn">Poseidon Hero</a>
            <h1>New skin - 15/03/2021</h1>
            <p>Since being crowned god of the seas, <br> Poseidon ruled over the ocean with his trident.
            <br> For the first time ever,
            humans were separated <br> from the domain of the gods.<br> No one dared to challenge Poseidon's jurisdiction.</p>
            <h2>I Hope You Enjoy It</h2>   
        </div>
        <img src="<?php echo $_SESSION["path"]; ?>template/images/dragon lan.png" class="dragon-lan">
        <div class="social-links">
            <i class="fa fab fa-facebook-square" aria-hidden="true"></i>
            
            <i class="fa fab fa-instagram" aria-hidden="true"></i>
            
            <i class="fa fab fa-twitter-square" aria-hidden="true"></i>
            
        </div>
        </div>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].$_SESSION["path"]."common/web/footer.php"); ?>
    </div>
</body>
</html>