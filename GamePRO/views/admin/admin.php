<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-witdh, initial-scale=1.0" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_SESSION["path"]; ?>template/css/style.css?v=<?php echo time(); ?>" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_SESSION["path"]; ?>template/css/font-awesome.min.css?v=<?php echo time(); ?>" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600;700&display=swap" rel="stylesheet">


</head>

<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].$_SESSION["path"]."common/admin/menu.php"); ?>


    <Section id="main-content">


	<?php require_once($_SERVER['DOCUMENT_ROOT'].$_SESSION["path"]."common/admin/header.php"); ?>


        <div class="main-content-info container">
            <div class="card">
                <h2 class="cus-num cus-h">130</h2>
                <p>Customers</p>
            </div>
            <div class="card">
                <h2 class="cus-num cus-pro">250</h2>
                <p>Projects</p>
            </div>
            <div class="card">
                <h2 class="cus-num cus-ord">155</h2>
                <p>Order</p>
            </div>
            <div class="card">
                <h2 class="cus-num cus-inc">100k</h2>
                <p>Income</p>
            </div>
            <div class="clear"></div>
        </div>
        <div class="content-pro-par container">
            <div class="pro-table">
                <div class="recent-project">
                    <div class="rec-pro-h">
                        <h2>Recent Project</h2>
                    </div>
                    <div class="see-all">
                        <button>See all</button>
                    </div>
                    <div class="clear"></div>
                </div>
                <table style="width:100%">
                    <tr>
                        <th>Project Title</th>
                        <th>Department</th>
                        <th>Status</th>
                    </tr>
                    <tr>
                        <td>Web Development</td>
                        <td>Development Team</td>
                        <td><span class="rev-span"></span>Review</td>
                    </tr>
                    <tr>
                        <td>Ui/Ux Design</td>
                        <td>Ui Team</td>
                        <td><span class="progress-span"></span>In Progress</td>
                    </tr>
                </table>
            </div>
            <div class="pro-cus">
                <div class="recent-project">
                    <div class="rec-pro-h">
                        <h2>All Customers</h2>
                    </div>
                    <div class="see-all">
                        <button>See all</button>
                    </div>
                    <div class="clear"></div>
                </div>
                <table style="width:100%">
                    <tr>
                        <th>Pic</th>
                        <th>Name</th>
                        <th>Contact</th>
                    </tr>
                    <tr>
                        <td><img class="table-img" src="<?php echo $_SESSION["path"]; ?>template/images/user.png"/></td>
                        <td>Smith Jhon</td>
                        <td class="cnt-info-td"><a href="tel:9800121212"><i class="fa fa-phone"></i></a><a href="tel:9800121212"><i class="fa fa-envelope"></i></a><a href="tel:9800121212"><i class="fa fa-map-marker"></i></a></td>
                    </tr>
                    <tr>
                        <td><img class="table-img" src="<?php echo $_SESSION["path"]; ?>template/images/user.png"/></td>
                        <td>Jhon Doe</td>
                        <td class="cnt-info-td"><a href="tel:9800121212"><i class="fa fa-phone"></i></a><a href="tel:9800121212"><i class="fa fa-envelope"></i></a><a href="tel:9800121212"><i class="fa fa-map-marker"></i></a></td>
                    </tr>
                    <tr>
                        <td><img class="table-img" src="<?php echo $_SESSION["path"]; ?>template/images/user.png"/></td>
                        <td>Mr Lewerce</td>
                        <td class="cnt-info-td"><a href="tel:9800121212"><i class="fa fa-phone"></i></a><a href="tel:9800121212"><i class="fa fa-envelope"></i></a><a href="tel:9800121212"><i class="fa fa-map-marker"></i></a></td>
                    </tr>
                    <tr>
                        <td><img class="table-img" src="<?php echo $_SESSION["path"]; ?>template/images/user.png"/></td>
                        <td>Damin Roe</td>
                        <td class="cnt-info-td"><a href="tel:9800121212"><i class="fa fa-phone"></i></a><a href="tel:9800121212"><i class="fa fa-envelope"></i></a><a href="tel:9800121212"><i class="fa fa-map-marker"></i></a></td>
                    </tr>
                    <tr>
                        <td><img class="table-img" src="<?php echo $_SESSION["path"]; ?>template/images/user.png"/></td>
                        <td>Smith Jhon</td>
                        <td class="cnt-info-td"><a href="tel:9800121212"><i class="fa fa-phone"></i></a><a href="tel:9800121212"><i class="fa fa-envelope"></i></a><a href="tel:9800121212"><i class="fa fa-map-marker"></i></a></td>
                    </tr>
                    <tr>
                        <td><img class="table-img" src="<?php echo $_SESSION["path"]; ?>template/images/user.png"/></td>
                        <td>Jhon Doe</td>
                        <td class="cnt-info-td"><a href="tel:9800121212"><i class="fa fa-phone"></i></a><a href="tel:9800121212"><i class="fa fa-envelope"></i></a><a href="tel:9800121212"><i class="fa fa-map-marker"></i></a></td>
                    </tr>
                    <tr>
                        <td><img class="table-img" src="<?php echo $_SESSION["path"]; ?>template/images/user.png"/></td>
                        <td>Damin Roe</td>
                        <td class="cnt-info-td"><a href="tel:9800121212"><i class="fa fa-phone"></i></a><a href="tel:9800121212"><i class="fa fa-envelope"></i></a><a href="tel:9800121212"><i class="fa fa-map-marker"></i></a></td>
                    </tr>
                    <tr>
                        <td><img class="table-img" src="<?php echo $_SESSION["path"]; ?>template/images/user.png"/></td>
                        <td>Smith</td>
                        <td class="cnt-info-td"><a href="tel:9800121212"><i class="fa fa-phone"></i></a><a href="tel:9800121212"><i class="fa fa-envelope"></i></a><a href="tel:9800121212"><i class="fa fa-map-marker"></i></a></td>
                    </tr>
                    <tr>
                        <td><img class="table-img" src="<?php echo $_SESSION["path"]; ?>template/images/user.png"/></td>
                        <td>Smith</td>
                        <td class="cnt-info-td"><a href="tel:9800121212"><i class="fa fa-phone"></i></a><a href="tel:9800121212"><i class="fa fa-envelope"></i></a><a href="tel:9800121212"><i class="fa fa-map-marker"></i></a></td>
                    </tr>
                    <tr>
                        <td><img class="table-img" src="<?php echo $_SESSION["path"]; ?>template/images/user.png"/></td>
                        <td>Smith</td>
                        <td class="cnt-info-td"><a href="tel:9800121212"><i class="fa fa-phone"></i></a><a href="tel:9800121212"><i class="fa fa-envelope"></i></a><a href="tel:9800121212"><i class="fa fa-map-marker"></i></a></td>
                    </tr>
                    <tr>
                        <td><img class="table-img" src="<?php echo $_SESSION["path"]; ?>template/images/user.png"/></td>
                        <td>Mr Lewerce</td>
                        <td class="cnt-info-td"><a href="tel:9800121212"><i class="fa fa-phone"></i></a><a href="tel:9800121212"><i class="fa fa-envelope"></i></a><a href="tel:9800121212"><i class="fa fa-map-marker"></i></a></td>
                    </tr>
                    
                </table>
            </div>
            <div class="clear"></div>
        </div>
    </Section>
    <div class="clear"></div>




    <script type="text/javascript" src="template/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="template/js/external.js"></script>
</body>

</html>
