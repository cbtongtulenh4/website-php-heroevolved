<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="<?php echo $_SESSION["path"]; ?>template/css/web/home.css?v=<?php echo time(); ?>" rel="stylesheet">
    <link href="<?php echo $_SESSION["path"]; ?>template/css/web/header.css?v=<?php echo time(); ?>" rel="stylesheet">
    <link href="<?php echo $_SESSION["path"]; ?>template/css/web/footer.css?v=<?php echo time(); ?>" rel="stylesheet">
    <link href="<?php echo $_SESSION["path"]; ?>template/css/web/common.css?v=<?php echo time(); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
	integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
	crossorigin="anonymous" referrerpolicy="no-referrer" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div id="main">
        <div class="container">
            <?php require_once($_SERVER['DOCUMENT_ROOT'].$_SESSION["path"]."common/web/header.php"); ?>
        </div>
    	<?php require_once($_SESSION["root"].$_SESSION["path"]."common/web/footer.php"); ?>
    </div>
<script type="text/javascript">
    function hide_float_right() {
    var content = document.getElementById('float_content_right');
    var hide = document.getElementById('hide_float_right');
    if (content.style.display == "none")
    {content.style.display = "block"; hide.innerHTML = '<a href="javascript:hide_float_right()"> Tắt quảng cáo [X]</a>'; }
        else { content.style.display = "none"; hide.innerHTML = '<a href="javascript:hide_float_right()">Watch ADS</a>';
    }
    }
	function myF(){
      onl.style.display = "block";
      
    }
    function un(){
        onl.style.display = "none";
    }
</script>
	
<style>
.float-ck { position: fixed; bottom: 300px; z-index: 9000}
* html .float-ck {position:absolute;bottom:auto;top:expression(eval (document.documentElement.scrollTop+document.docum entElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||0)-(parseInt(this.currentStyle.marginBottom,10)||0))) ;}
#float_content_right {border: 1px solid #01AEF0;}
#hide_float_right {text-align:right; font-size: 14px;}
#hide_float_right a {background: #01AEF0; padding: 2px 4px; color: #FFF;}
</style>
<body onload="myF()">
    <div class="float-ck" style="right: 0px" >
<div id="hide_float_right">
<a href="javascript:hide_float_right()">Tắt quảng cáo[X]</a></div>
<div id="float_content_right">
<!-- Start quang cao-->
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-F5b8Zxgu-KiVSzDa6ElXOmTXPY8BsCVu67KmxtGytHkhUGpI2FTwR-EmgRPiwflAhhc&usqp=CAU" width="165" height="115" />
<!-- End quang cao -->
</div>
</div>
    <!-- <div id="onl" style="position: fixed; bottom: 0px; top:200px;left:300px;z-index:100;">
        <div style="backgroud-color:black; width:1000px; height=200px;">
           <a href="javascript:un()" style="color:#F00;">Tắt quảng cáo[X]</a>
            <img src="https://img-cdn.2game.vn/pictures/2game/2019/06/21/2game-thuc-son-ky-hiep-mobile-to-vl-1.jpg  " width="800" height="600" />
        </div>
    </div> -->
    
</body>
</html>