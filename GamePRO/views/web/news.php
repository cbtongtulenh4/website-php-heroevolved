<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hero Evolved</title>
    <link rel="stylesheet" href="<?php echo $_SESSION["path"]; ?>template/css/web/news.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $_SESSION["path"]; ?>template/css/web/common.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $_SESSION["path"]; ?>template/css/web/footer.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $_SESSION["path"]; ?>template/css/web/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $_SESSION["path"]; ?>template/css/animate.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $_SESSION["path"]; ?>template/css/hover.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https:/cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
	integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
	crossorigin="anonymous" referrerpolicy="no-referrer" >
</head>
<body>
    <div id="main">
        <div class="wrapper" id="wrapper">
        <div class="img-header">
        <?php require_once($_SERVER['DOCUMENT_ROOT'].$_SESSION["path"]."common/web/header.php"); ?>
            <div class="rain">
                <img src="<?php echo $_SESSION["path"]; ?>template/images/skin/1b.jpg" alt=""> 
            </div> 
        </div>
        <div class="event-wrapper">
            <div class="event-info">
                    <div class="mod info-1">
                        <img src="<?php echo $_SESSION["path"]; ?>images/3c.jpg" alt="">
                    </div>
                    <div class="mod info-2">
                        <div class="list-img">
                            <ul>
                                <li class="active"><img src="<?php echo $_SESSION["path"]; ?>images/img1.png" alt=""></li>
                                <li><img src="<?php echo $_SESSION["path"]; ?>images/0.jpg" alt=""></li>
                                <li><img src="<?php echo $_SESSION["path"]; ?>images/img2.jpg" alt=""></li>
                                <li><img src="<?php echo $_SESSION["path"]; ?>images/imgT.jpg" alt=""></li>
                                <li><img src="<?php echo $_SESSION["path"]; ?>images/img3.jpg" alt=""></li>
                            </ul>
                        </div>
                        <div class="list-text">
                            <a href="" class="active">Li Bai</a>
                            <a href="">Scarlet</a>
                            <a href="">Yanbing Cao</a>
                            <a href="">Young Yanbing</a>
                            <a href="">Fumiko</a>
                        </div>
                    </div>
                    <div class="mod info-3">
                        <div class="list-title">
                            <a href="" class="active">EVENT-1</a>
                            <a href="">EVENT-2</a>
                            <a href="">EVENT-3</a>
                            <a href="">EVENT-4</a>
                        </div>
                        <div class="list-tab">
                            <div class="tab-item active">
                                <a href="" class="title-item">Miracles EVENT</a>
                                <ul class="list-item">
                                    <li>
                                        <a href="">
                                            <div class="icon">
                                                <img src="<?php echo $_SESSION["path"]; ?>images/birthday-cake.png" alt="">
                                            </div>
                                            <span>Happy 2nd Birthday</span>
                                            <time class="time"> 10-1 </time>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <div class="icon">
                                                <img src="<?php echo $_SESSION["path"]; ?>images/ice-cream.png" alt="">
                                            </div>
                                            <span>vibrant summer</span>
                                            <time class="time"> 10-1 </time>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <div class="icon">
                                                <img src="<?php echo $_SESSION["path"]; ?>images/valentines-day.png" alt="">
                                            </div>
                                            <span>sweet valentine</span>
                                            <time class="time"> 10-1 </time>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <div class="icon">
                                                <img src="<?php echo $_SESSION["path"]; ?>images/chick.png" alt="">
                                            </div>
                                            <span>hard-working farmer</span>
                                            <time class="time"> 10-1 </time>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <div class="icon">
                                                <img src="<?php echo $_SESSION["path"]; ?>images/christmas-tree.png" alt="">
                                            </div>
                                            <span>Merry Christmas</span>
                                            <time class="time"> 10-1 </time>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <div class="icon">
                                                <img src="<?php echo $_SESSION["path"]; ?>images/shuttle.png" alt="">
                                            </div>
                                            <span>golden wish</span>
                                            <time class="time"> 10-1 </time>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-item">
                                <a href="" class="title-item">EVENT-2</a>
                                <ul class="list-item">
                                    <li>
                                        <a href="">
                                            <div class="icon">
                                                <img src="<?php echo $_SESSION["path"]; ?>images/birthday-cake.png" alt="">
                                            </div>
                                            <span>Content EVENT</span>
                                            <time class="time"> 10-1 </time>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <div class="icon">
                                                <img src="<?php echo $_SESSION["path"]; ?>images/ice-cream.png" alt="">
                                            </div>
                                            <span>Content EVENT</span>
                                            <time class="time"> 10-1 </time>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <div class="icon">
                                                <img src="<?php echo $_SESSION["path"]; ?>images/valentines-day.png" alt="">
                                            </div>
                                            <span>Content EVENT</span>
                                            <time class="time"> 10-1 </time>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <div class="icon">
                                                <img src="<?php echo $_SESSION["path"]; ?>images/chick.png" alt="">
                                            </div>
                                            <span>Content EVENT</span>
                                            <time class="time"> 10-1 </time>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <div class="icon">
                                                <img src="<?php echo $_SESSION["path"]; ?>images/christmas-tree.png" alt="">
                                            </div>
                                            <span>Content EVENT</span>
                                            <time class="time"> 10-1 </time>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <div class="icon">
                                                <img src="<?php echo $_SESSION["path"]; ?>images/shuttle.png" alt="">
                                            </div>
                                            <span>Content EVENT</span>
                                            <time class="time"> 10-1 </time>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-item">
                                <a href="" class="title-item">EVENT-3</a>
                                <ul class="list-item">
                                    <li>
                                        <a href="">
                                            <div class="icon">
                                                <img src="<?php echo $_SESSION["path"]; ?>images/birthday-cake.png" alt="">
                                            </div>
                                            <span>Content EVENT</span>
                                            <time class="time"> 10-1 </time>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <div class="icon">
                                                <img src="<?php echo $_SESSION["path"]; ?>images/ice-cream.png" alt="">
                                            </div>
                                            <span>Content EVENT</span>
                                            <time class="time"> 10-1 </time>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <div class="icon">
                                                <img src="<?php echo $_SESSION["path"]; ?>images/valentines-day.png" alt="">
                                            </div>
                                            <span>Content EVENT</span>
                                            <time class="time"> 10-1 </time>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <div class="icon">
                                                <img src="<?php echo $_SESSION["path"]; ?>images/chick.png" alt="">
                                            </div>
                                            <span>Content EVENT</span>
                                            <time class="time"> 10-1 </time>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <div class="icon">
                                                <img src="<?php echo $_SESSION["path"]; ?>images/christmas-tree.png" alt="">
                                            </div>
                                            <span>Content EVENT</span>
                                            <time class="time"> 10-1 </time>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <div class="icon">
                                                <img src="<?php echo $_SESSION["path"]; ?>images/shuttle.png" alt="">
                                            </div>
                                            <span>Content EVENT</span>
                                            <time class="time"> 10-1 </time>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-item">
                                <a href="" class="title-item">EVENT-4</a>
                                <ul class="list-item">
                                    <li>
                                        <a href="">
                                            <div class="icon">
                                                <img src="<?php echo $_SESSION["path"]; ?>images/birthday-cake.png" alt="">
                                            </div>
                                            <span>Content EVENT</span>
                                            <time class="time"> 10-1 </time>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <div class="icon">
                                                <img src="<?php echo $_SESSION["path"]; ?>images/ice-cream.png" alt="">
                                            </div>
                                            <span>Content EVENT</span>
                                            <time class="time"> 10-1 </time>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <div class="icon">
                                                <img src="<?php echo $_SESSION["path"]; ?>images/valentines-day.png" alt="">
                                            </div>
                                            <span>Content EVENT</span>
                                            <time class="time"> 10-1 </time>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <div class="icon">
                                                <img src="<?php echo $_SESSION["path"]; ?>images/chick.png" alt="">
                                            </div>
                                            <span>Content EVENT</span>
                                            <time class="time"> 10-1 </time>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <div class="icon">
                                                <img src="<?php echo $_SESSION["path"]; ?>images/christmas-tree.png" alt="">
                                            </div>
                                            <span>Content EVENT</span>
                                            <time class="time"> 10-1 </time>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <div class="icon">
                                                <img src="<?php echo $_SESSION["path"]; ?>images/shuttle.png" alt="">
                                            </div>
                                            <span>Content EVENT</span>
                                            <time class="time"> 10-1 </time>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="read-more">
                            <a href=""><h3>read more</h3></a>
                        </div>
                    </div>
                </div>
            </div>
        <div class="event-section">
            <div class="container">
                <div class="title">
                    <h1>EVENTS</h1>
                </div>
                <div class="content">
                        <div class="story-item">
                            <div class="event-text">
                                <h3>New Skin</h3>
                                <span class="date">06/09/2999</span>
                                <p>As the game progresses you’ll acquire
                                     gold you can spend on powerful items 
                                     that improve your champions performance 
                                     on the Fields of Justice. Items can 
                                     provide all manner of useful bonuses 
                                     such as faster movement, Improved damage, 
                                     increased durability, reduced ability
                                      cooldowns, etc. You can purchase items
                                       from the shop near the summoner platform
                                        where you spawn at the beginning of a game.
                                </p>
                            </div>
                            <div class="event-img">
                                <div class="framew">
                                    <img src="<?php echo $_SESSION["path"]; ?>template/images/skin/1b.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="story-item">
                            <div class="event-text">
                                <h3>New Skin</h3>
                                <span class="date">06/09/2999</span>
                                <p>As the game progresses you’ll acquire
                                     gold you can spend on powerful items 
                                     that improve your champions performance 
                                     on the Fields of Justice. Items can 
                                     provide all manner of useful bonuses 
                                     such as faster movement, Improved damage, 
                                     increased durability, reduced ability
                                      cooldowns, etc. You can purchase items
                                       from the shop near the summoner platform
                                        where you spawn at the beginning of a game.
                                </p>
                            </div>
                            <div class="event-img">
                                <div class="framew">
                                    <img src="<?php echo $_SESSION["path"]; ?>template/images/skin/7a.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="story-item">
                            <div class="event-text">
                                <h3>New Skin</h3>
                                <span class="date">06/09/2999</span>
                                <p>As the game progresses you’ll acquire
                                     gold you can spend on powerful items 
                                     that improve your champions performance 
                                     on the Fields of Justice. Items can 
                                     provide all manner of useful bonuses 
                                     such as faster movement, Improved damage, 
                                     increased durability, reduced ability
                                      cooldowns, etc. You can purchase items
                                       from the shop near the summoner platform
                                        where you spawn at the beginning of a game.
                                </p>
                            </div>
                            <div class="event-img">
                                <div class="framew">
                                    <img src="<?php echo $_SESSION["path"]; ?>template/images/skin/8a.jpg" alt="">
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="event-topic" id="event-topic">
            <div class="line">
            </div>
            <h2 class="title title-topic">
                <span>Event Topic</span>
                <div class="icon">
                    <img src="<?php echo $_SESSION["path"]; ?>images/hot.png" alt="">
                </div>
            </h2>
            <div class="list-topic">
                <ul>
                    <li>
                        <a href="">
                            <img src="<?php echo $_SESSION["path"]; ?>images/imgT.jpg" alt="">
                            <span class="hover">EVENT HOT</span>
                        </a>
                    </li>
                    <li>
                        <a href=""><img src="<?php echo $_SESSION["path"]; ?>images/imgT.jpg" alt=""></a>
                    </li>
                    <li>
                        <a href=""><img src="<?php echo $_SESSION["path"]; ?>images/imgT.jpg" alt=""></a>
                    </li>
                    <li>
                        <a href=""><img src="<?php echo $_SESSION["path"]; ?>images/imgT.jpg" alt=""></a>
                    </li>
                    <li>
                        <a href=""><img src="<?php echo $_SESSION["path"]; ?>images/imgT.jpg" alt=""></a>
                    </li>
                    <li>
                        <a href=""><img src="<?php echo $_SESSION["path"]; ?>images/imgT.jpg" alt=""></a>
                    </li>
                </ul>
            </div>
        </div>
        <?php require_once($_SESSION["root"].$_SESSION["path"]."common/web/footer.php"); ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?php echo $_SESSION["path"]; ?>template/js/custom.js"></script>

</body>
</html>