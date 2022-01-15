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
    <title>Document</title>
    <link href="<?php echo $_SESSION["path"]; ?>template/css/web/hero.css?v=<?php echo time(); ?>" rel="stylesheet">
    <link href="<?php echo $_SESSION["path"]; ?>template/css/web/header.css?v=<?php echo time(); ?>" rel="stylesheet">
    <link href="<?php echo $_SESSION["path"]; ?>template/css/web/footer.css?v=<?php echo time(); ?>" rel="stylesheet">
    <link href="<?php echo $_SESSION["path"]; ?>template/css/web/common.css?v=<?php echo time(); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $_SESSION["path"]; ?>template/css/all.css">
    <link rel="stylesheet" href="<?php echo $_SESSION["path"]; ?>template/css/brands.css">
    <link rel="stylesheet" href="<?php echo $_SESSION["path"]; ?>template/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
</head>
<body>
    <div id="main">
      <div class="container" id="container">
          <?php require_once($_SERVER['DOCUMENT_ROOT'].$_SESSION["path"]."common/web/header.php"); ?>

          <div class="box-skill">
              <h3>
                Minh Phúc
                <span>Agility</span>
              </h3>
              <div class="kind">
                <span>MELEE</span>
                <span>GANKER</span>
                <span>CARRY</span>
              </div>
              <div class="attr">
                <span><img src="/project/GamePRO/template/images/skin/attrbar1.png"></span>
                <span><img src="/project/GamePRO/template/images/skin/attrbar2.png"></span>
                <span><img src="/project/GamePRO/template/images/skin/attrbar3.png"></span>
                <span><img src="/project/GamePRO/template/images/skin/attrbar4.png"></span>
              </div>
          </div>
          <div class="box-skin">
              <div class="skin-btn">skin</div>
              <div class="skin-list">
                  <div class="swiper-container mySwiper">
                      <div class="swiper-wrapper">
                        <?php 
                          $sql = "SELECT * FROM skin ";
                          $result = $conn->query($sql);
                          if($result->num_rows > 0){
                            if($_GET["gender"] == "male"){
                              while($row = $result->fetch_assoc()){
                                if($row["heroid"] == 2 ){
                                    ?>
                                      <div class="swiper-slide"><img src="/project/GamePRO/<?php echo $row["thumbnail"]; ?>"></div>
                                    <?php
                                }
                              }
                            }else{
                              while($row = $result->fetch_assoc()){
                                if($row["heroid"] == 1 ){
                                    ?>
                                      <div class="swiper-slide"><img src="/project/GamePRO/<?php echo $row["thumbnail"]; ?>"></div>
                                    <?php
                                }
                              }
                            }

                          }
                        ?>

                          <!--
                          <div class="swiper-slide"><img src="/project/GamePRO/template/images/skin/a2.jpg"></div>
                          <div class="swiper-slide"><img src="/project/GamePRO/template/images/skin/a3.jpg"></div>
                          <div class="swiper-slide"><img src="/project/GamePRO/template/images/skin/a4.jpg"></div>
                          <div class="swiper-slide"><img src="/project/GamePRO/template/images/skin/a5.jpg"></div>
                          <div class="swiper-slide"><img src="/project/GamePRO/template/images/skin/a6.jpg"></div>
                          <div class="swiper-slide"><img src="/project/GamePRO/template/images/skin/a7.jpg"></div>
                          <div class="swiper-slide"><img src="/project/GamePRO/template/images/skin/a8.jpg"></div>
                          <div class="swiper-slide"><img src="/project/GamePRO/template/images/skin/a9.jpg"></div>
                          <div class="swiper-slide"><img src="/project/GamePRO/template/images/skin/a10.jpg"></div> -->
                      </div>
                      <div class="swiper-pagination"></div>
                    </div>
              </div>
          </div>
        <!-- <div class="ads">
            <a href="#" class="close"><p>&times;</p></a>
          </div> -->
      </div>

      <?php require_once($_SERVER['DOCUMENT_ROOT'].$_SESSION["path"]."common/web/footer.php"); ?>
    </div>  

    <script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
      var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
          rotate: 0,
          stretch: 0,
          depth: 150,
          modifier: 1,
          slideShadows: true,
        },
        loop: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        on: {
          init: function () {
            console.log('swiper initialized');
          },
        },
      });
    </script>

    <script>
        swiper.on('slideChange', function () {
        var arr = [
         "/project/GamePRO/template/images/skin/1a.jpg",
          "/project/GamePRO/template/images/skin/2a.jpg",
          "/project/GamePRO/template/images/skin/3a.jpg",
          "/project/GamePRO/template/images/skin/4a.jpg",
          "/project/GamePRO/template/images/skin/5a.jpg",
          "/project/GamePRO/template/images/skin/6a.jpg",
          "/project/GamePRO/template/images/skin/7a.jpg",
          "/project/GamePRO/template/images/skin/8a.jpg",
          "/project/GamePRO/template/images/skin/9a.jpg",
          "/project/GamePRO/template/images/skin/10a.jpg"
        ];
        for(var i=0; i<arr.length;i++){
          if(i==swiper.realIndex){
            document.getElementById('container').style.backgroundImage = 'url("'+ arr[i] +'")';
            css();
          }
        }
      });

      $(document).ready(function(){
        document.getElementById('container').style.backgroundImage = 'url(/project/GamePRO/template/images/skin/1a.jpg)';
        css();
/*        var arr = document.getElementsByClassName("img-background");
        for(var i=0;i<arr.length;i++){
          console.log(i.val());
        }*/
      });

      function css(){
        document.body.style.backgroundPosition = 'center';
        document.body.style.backgroundSize = 'cover';
      }
    </script>

</body>
</html>