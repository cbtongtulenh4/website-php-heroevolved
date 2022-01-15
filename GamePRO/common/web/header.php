

<div class="navbar">
        
        <nav>
            <a href="<?php echo $_SESSION["path"]; ?>decorator/url.php?myPage=home" class="logo"><img src="<?php echo $_SESSION["path"]; ?>template/images/logo.png" alt=""></a>
            <ul class="clearfix">
                <li><a class="light" href="<?php echo $_SESSION["path"]; ?>decorator/url.php?myPage=home">HOME</a></li>
                <li class="active"><a href="" class="light">GAME INFO</a>
                    <div class="sub-menu-1">
                        <ul>
                            <li><a href="<?php echo $_SESSION["path"]; ?>decorator/url.php?myPage=hero">Battleground</a></li>
                            <li class="active1"><a href="" class="update">Update</a>  <i class="fa fa-angle-right" aria-hidden="true"></i>
                                <div class="sub-menu-2">
                                    <ul>
                                        <li><a href="<?php echo $_SESSION["path"]; ?>decorator/url.php?myPage=banlist">Ban List</a></li>
                                        <li><a href="<?php echo $_SESSION["path"]; ?>decorator/url.php?myPage=newskin"">New Skin</a></li>
                                        <li><a href="">Event</a></li>
                                    </ul>
                                </div> 
                            </li>
                            <li><a href="#">Items</a></li>
                        </ul>
                    </div> 
                </li>
                <li><a class="light" href="<?php echo $_SESSION["path"]; ?>decorator/url.php?myPage=heros">HEROES</a></li>
                <li><a class="light"href="<?php echo $_SESSION["path"]; ?>decorator/url.php?myPage=news">NEWS</a></li>
                <li><a class="light" href="<?php echo $_SESSION["path"]; ?>decorator/url.php?myPage=store">STORE</a></li>
            </ul>
            <div class="search">
                <input type = "Search" placeholder="Search">
                <i class="fas fa-search"></i>
            </div>
        </nav>
        <div class="account">
            <div class="profile">
                <img src="<?php echo $_SESSION["path"]; ?>template/images/account/acc.jpg" alt="">
            </div>
            <div class="menu">
                <h3><?php echo $_SESSION["USERNAME"]; ?></h3>
                <ul>
                    <li>
                        <img src="<?php echo $_SESSION["path"]; ?>template/images/account/user.png" alt="">
                        <a href="<?php echo $_SESSION["path"]; ?>common/web/code/index.html">My Profile</a>
                    </li>
                    <li>
                        <img src="<?php echo $_SESSION["path"]; ?>template/images/account/edit.png" alt="">
                        <a href="">Edit Profile</a>
                    </li>
                    <li>
                        <img src="<?php echo $_SESSION["path"]; ?>template/images/account/settings.png" alt="">
                        <a href="">Settings</a>
                    </li>
                    <li>
                        <img src="<?php echo $_SESSION["path"]; ?>/template/images/account/question.png" alt="">
                        <a href="<?php echo $_SESSION["path"]; ?>decorator/url.php?myPage=contacts">Help</a>
                    </li>
                    <li>
                        <img src="<?php echo $_SESSION["path"]; ?>/template/images/account/logout.png" alt="">
                        <a href="<?php echo $_SESSION["path"]; ?>decorator/url.php?myPage=login">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
        
    </div>
