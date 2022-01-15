<?php
    session_start();
    require_once($_SERVER['DOCUMENT_ROOT'].$_SESSION["path"]."common/connect.php");
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="<?php echo $_SESSION["path"]; ?>template/css/web/heros.css?v=<?php echo time(); ?>" rel="stylesheet">
    <link href="<?php echo $_SESSION["path"]; ?>template/css/web/header.css?v=<?php echo time(); ?>" rel="stylesheet">
    <link href="<?php echo $_SESSION["path"]; ?>template/css/web/footer.css?v=<?php echo time(); ?>" rel="stylesheet">
    <link href="<?php echo $_SESSION["path"]; ?>template/css/web/common.css?v=<?php echo time(); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $_SESSION["path"]; ?>template/css/all.css">
    <link rel="stylesheet" href="<?php echo $_SESSION["path"]; ?>template/css/brands.css">
    <link rel="stylesheet" href="<?php echo $_SESSION["path"]; ?>template/css/fontawesome.min.css">
</head>
<body>
    <div id="main">
        <div class="container">
            <?php require_once($_SERVER['DOCUMENT_ROOT'].$_SESSION["path"]."common/web/header.php") ?>

            <div class="content">
                <div class="heronav">
                    <a href="#" class="check on" date-filter="all">ALL</a>
                    <a href="#" class="check" date-filter="strength" >STRENGTH</a>
                    <a href="#" class="check" date-filter="agility" >AGILITY</a>
                    <a href="#" class="check" date-filter="intelligence" >INTELLIGENCE</a>
                </div>

                <div class="herotype">
                    <li><input type="checkbox" value="MELEE"> Melee</li>
                    <li><input type="checkbox" value="RANGED"> Ranged</li>
                    <li><input type="checkbox" value="NUKER"> Nuker</li>
                    <li><input type="checkbox" value="DURABLE"> Durable</li>
                    <li><input type="checkbox" value="DISABLER"> Disabler</li>
                    <li><input type="checkbox" value="GANKER"> Ganker</li>
                    <li><input type="checkbox" value="CARRY"> Carry</li>
                    <li><input type="checkbox" value="PUSHER"> Pusher</li>
                </div>

                <div class="wrapper">
                    <ul class="hero-list" >
                        <?php
                            $sql = "SELECT * FROM heros ";
                            $result = $conn->query($sql);
                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                    ?>
                                    
                                        <li class="<?php echo $row["attribute"]; ?>">
                                            <a href="hero.php?gender=male" ><img src=" <?php echo "/project/GamePRO/".$row["image"]; ?> " alt="name">
                                            <br> <?php echo $row["name"]; ?> 
                                        </a></li>

                                    <?php
                                }
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].$_SESSION["path"]."common/web/footer.php") ?>
    </div>

    
    

    <script src="https://code.jquery.com/jquery-3.6.0.js" 
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" 
        crossorigin="anonymous">
    </script>

    <script type="text/javascript">
        $(function(){
            $('.check').click(function(){
                const value = $(this).attr('date-filter');
                if(value == 'all'){
                    $('li').show();
                }else{
                    $('.hero-list li').not('.' + value).hide();
                    $('.hero-list li').filter('.' + value).show();
                }
                $(this).addClass('on').siblings().removeClass();
            })
        })
    </script>
</body>
</html>