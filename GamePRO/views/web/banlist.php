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
    <link href="<?php echo $_SESSION["path"]; ?>template/css/web/banlist.css?v=<?php echo time(); ?>" rel="stylesheet">
    <link href="<?php echo $_SESSION["path"]; ?>template/css/web/header.css?v=<?php echo time(); ?>" rel="stylesheet">
    <link href="<?php echo $_SESSION["path"]; ?>template/css/web/footer.css?v=<?php echo time(); ?>" rel="stylesheet">
    <link href="<?php echo $_SESSION["path"]; ?>template/css/web/common.css?v=<?php echo time(); ?>" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
	integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
	crossorigin="anonymous" referrerpolicy="no-referrer" >
</head>
<body>
    <div id="main">
    <div class="container">
        <?php require_once($_SERVER['DOCUMENT_ROOT'].$_SESSION["path"]."common/web/header.php"); ?>

        <div class="content">
            <div class="hr1"></div>
            <h1>Notice Regarding Account Punishment on June 69rd!</h1>
            <span class="pubtime">06/09/2021</span>
            <p>The following accounts are punished for extreme behaviors or using illegal programs in matches.</p>
            <table>
                <tbody style="display: table-row-group; vertical-align: middle; border-color: inherit;">
                    <tr>
                        <td nowrap="nowrap" style="width:132px;">
                            <strong>In-game Name</strong>
                        </td>
                        <td nowrap="nowrap" style="width:294px;">
                            <strong>Punishment</strong>
                        </td>
                        <td nowrap="nowrap" style="width:185px;">
                            <strong>Reason</strong>
                        </td>
                        <td nowrap="nowrap" style="width:115px;">
                            <strong>Date</strong>
                        </td>
                    </tr>
                    <?php
                        $sql = "SELECT * FROM baner ";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                ?>
                                    <tr>
                                        <td style="width:132px;">
                                            <?php echo $row["nickname"]; ?>
                                        </td>
                                        <td nowrap="nowrap">
                                            <?php echo $row["punishment"]; ?>
                                        </td>
                                        <td nowrap="nowrap">
                                            <?php echo $row["reason"]; ?>   
                                        </td>
                                        <td nowrap="nowrap">
                                            <?php echo $row["dateban"]; ?>
                                        </td>
                                    </tr>
                                <?php
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>  
    </div>
    <!-- <div class="ads">
        <p style="
            position: absolute;
            font-size: 3rem;
                font-weight: 800;
                text-decoration: none;
                color: #fff;
                top: -30px;
                right: -15px;
                ">&times;</p>
    </div> -->

    <?php require_once($_SESSION["root"].$_SESSION["path"]."common/web/footer.php"); ?>
    </div>
</body>
</html>