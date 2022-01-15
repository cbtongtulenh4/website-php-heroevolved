<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hero Evolved</title>
    <?php include "store/style.php"; ?>
    <link href="<?php echo $_SESSION["path"]; ?>template/css/web/common.css?v=<?php echo time(); ?>" rel="stylesheet">
</head>
<body>
<div id="main">
<div class="container">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].$_SESSION["path"]."common/web/header.php"); ?>
    
    <div class="content12">
        <div class="fullbg">    
            <div class="content">
                <div class="wrapper">
                
                    <div class="banner">
                        <div class="msgcont">
                            <div class="tempWrap" style="overflow:hidden; position:relative; width:1280px">
                                <ul class="clearfix" style="width: 5120px; position: relative; overflow: hidden; padding: 0px; margin: 0px; left: -3639.28px;">
                                    <li class="clone" style="float: left; width: 1280px;">
                                        <a href="javascript:;"><img src="/template/images/ads/limitedSkin.jpg" alt=""></a>
                                    </li>
                                        <li style="float: left; width: 1280px;"><a href="javascript:;"><img src="/template/images/ads/rare.jpg" alt=""></a></li>
                                        <li style="float: left; width: 1280px;"><a href="javascript:;"><img src="/template/images/ads/limitedSkin.jpg" alt=""></a></li>
                                    <li class="clone" style="float: left; width: 1280px;"><a href="javascript:;"><img src="/template/images/ads/rare.jpg" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="payment">
                        <div class="section zindex">
                            <p class="step-title">Step 1. Payment Methods</p>
                            <ul class="method-list clearfix">
                                <?php include "store/method-list.php" ?>
                            </ul>
                            <div class="moreinfo" id="codapaydiv" style="display: none;">
                                <p>
                                    <label>Select a Country:</label>
                                    <select id="selcountry" onchange="selcountrychange()">
                                        <option value="608">Philippines</option>
                                        <option value="458">Malaysia</option>
                                        <option value="360">Indonesia</option>
                                        <option value="764">Thailand</option>                                    
                                        <option value="702">Singapore</option>
                                        <option value="104">Myanmar</option>
                                        <option value="116">Cambodia</option>
                                        
                                        <option value="158">Taiwan</option>
                                        <option value="50">Bangladesh</option>
                                        <option value="586">Pakistan</option>
                                        <option value="496">Mongolia</option>
                                        <option value="818">Egypt</option>
                                        <option value="710">South Africa</option>
                                        <option value="32">Argentina</option>
                                        <option value="76">Brazil</option>
                                        <option value="484">Mexico</option>
                                        <option value="566">Nigeria</option>
                                        <option value="344">Hong Kong</option>
                                    </select>
                                </p>
                                <p>
                                    <label>Select a payment way: </label>
                                    <select id="selpaymentway"><option value="250">Bank Transfer</option><option value="251">Convenience Store</option><option value="252">GCash</option><option value="253">7-Eleven PH</option><option value="255">GrabPay</option><option value="256">GrabPay PH In-App</option><option value="257">PayMaya</option><option value="258">Coinsph</option></select>
                                </p>
                            </div>
                            <div class="moreinfo" id="dlocaldiv" style="display: none;">
                                <p>
                                    <label>Select a Country:</label>
                                    <select id="seldcountry" onchange="seldcountrychange()">
                                        <option selected="selected" value="AR">Argentina</option>
                                        <option value="BR" selected="selected">Brasil</option>
                                        <option value="CL">Chile</option>
                                        <option value="CO">Colombia</option>
                                        <option value="MX">Mexico</option>
                                    </select>
                                </p>
                                <p>
                                    <label>Select a Bank:</label>
                                    <select id="selbank"></select>
                                </p>
    
                                <p>
                                    <label>Input Name:</label>
                                    <input type="text" id="dlocalname">
                                </p>
                                <p>
                                    <label class="idtxt">Input ID:</label>
                                    <input type="text" id="dlocalCPF">
                                    <img class="dlocalhint" src="./store_files/he-dlocal.png" alt="" style="display: none;">
                                </p>
                            </div>
                        </div>
                        <div class="section">
                            <p class="step-title sp">Step 2. Platform</p>
                            <ul class="cm-list clearfix" id="serverlist">
                                <li data-id="1" class="on">
                                    <a href="javascript:;"><i class="and"></i>Android</a>
                                </li>
                                <li data-id="2">
                                    <a href="javascript:;"><i class="ios"></i>iOS</a>
                                </li>
                            </ul>
                        </div>
    
                        <div class="section">
                            <p class="step-title">Step 3. Server</p>
                            <ul class="cm-list clearfix" id="server1">                                  <li class="on">             <a href="javascript:;" data-id="100">LOST TEMPLE [NA]</a>         </li>                                  <li>             <a href="javascript:;" data-id="111">ASGARD[EU]</a>         </li>                                  <li>             <a href="javascript:;" data-id="121">AMAZON [SA]</a>         </li>                                  <li>             <a href="javascript:;" data-id="131">S1.ANGKOR [AS]</a>         </li>                                  <li>             <a href="javascript:;" data-id="133">S2.EL NIDO [AS]</a>         </li>                                  <li>             <a href="javascript:;" data-id="134">ไทย[TH]</a>         </li>                                              </ul>
                            <ul class="cm-list clearfix" id="server2" style="display: none;">                                  <li class="on">             <a href="javascript:;" data-id="101">NEW ORDER [NA]</a>         </li>                                  <li>             <a href="javascript:;" data-id="112">OLYMPUS[EU]</a>         </li>                                  <li>             <a href="javascript:;" data-id="122">EL DORADO [SA]</a>         </li>                                  <li>             <a href="javascript:;" data-id="132">SHANGRI-LA [AS]</a>         </li>                                  <li>             <a href="javascript:;" data-id="135">ไทยแลนด์[TH]</a>         </li>                                              </ul>
                        </div>
                        <script id="ServerTable" type="text/html">
                            {{# for(var i = 0, len = d.length; i < len; i++){  }}
            <li>
                <a href="javascript:;" data-id="{{d[i].key}}">{{d[i].name}}</a>
            </li>
                            {{# } }}
                        </script>
                        <div class="section scroll1">
                            <p class="step-title">
                                Step 4. Player ID <i class="question">?</i>
                                <img class="idpic" src="<?php echo $_SESSION["path"]; ?>template/images/store_files/id.jpg">
                            </p>
                            <p class="playerid">
                                <input type="text" name="" id="playerid" placeholder="Enter your Player ID">
                            </p>
                          <!--  <p class="hint"><span>* Is this your Player Name?</span> <b>[Player Name # Here]</b></p> -->
                        </div>
    
                        <div class="section scroll2">
                            <p class="step-title">Step 5. Products</p>
                            <?php include "store/products.php"; ?>
                        </div>
                        <script id="Ttable1" type="text/html">
                            {{# for(var i = 0, len = d.length; i < len; i++){  }}
            <li><a href="javascript:;" data-id="{{d[i].AutoId}}" data-des="{{d[i].ProductDesc}}" data-price="{{d[i].ProductPrice}}" data-cur="{{d[i].Currency}}" data-name="{{d[i].ProductName}}">
                <img src="{{d[i].ProductIcon}}" alt="{{d[i].ProductName}}" /></a></li>
                            {{# } }}
                        </script>
                        <div class="section">
                            <p class="step-title">Step 6. Email Address</p>
                            <p class="email">
                                <input type="text" name="" id="playeremail" placeholder="Enter your Email Address">
                            </p>
                        </div>
    
                        <div class="summary">
                            <p>
                                <label>Summary:</label>
                                <b id="bsummary">4040 Tokens</b>
                            </p>
                            <p>
                                <label>Currency:</label>
                                <b id="bcurrency">USD</b>
                            </p>
                            <p>
                                <label>Payment Menthod:</label>
                                <b id="bpayment">paypal</b>
                            </p>
                            <p>
                                <label>Price:</label>
                                <strong id="bprice">31.79</strong>
                            </p>
                            <p class="confirm"><a href="">Confirm</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="popbox" id="popmsg">
            <div class="msgbox">
                <div class="msg">
                    <a href="javascript:;" class="close">×</a>
                    <div class="cont">
                        <p id="msg"></p>
                    </div>
                </div>
                <p class="tcenter"><a href="javascript:;" class="cbtn">Ok</a></p>
            </div>
            <div class="mask"></div>
        </div>
    
        <div class="popbox" id="payconfirm">
            <div class="msgbox">
                <div class="msg">
                    <!--<a href="javascript:;" class="close">&times;</a>-->
                    <div class="cont">
                        <p><b>Please double-check the information before the payment!</b></p>
                        <ul id="payui">
                            <li>
                                <label>Server:</label>
                                <span id="payuiServer">shanghjwere</span>
                            </li>
                            <li>
                                <label>Player Name:</label>
                                <span id="payuiName">shanghjwere</span>
                            </li>
                            <li>
                                <label>Player ID:</label>
                                <span id="payuiID">shanghjweref4444444444554666667</span>
                            </li>
                            <li>
                                <label>Email Address:</label>
                                <span id="payuiEmail">shanghjwere</span>
                            </li>
                            <li>
                                <label>Product:</label>
                                <span id="payuiProduct">shanghjwere</span>
                            </li>
                            <li>
                                <label>Payment Method:</label>
                                <span id="payuiMethod">Razer Gold</span>
                            </li>
                            <li>
                                <label>Price:</label>
                                <span id="payuiPrice">$0.99</span>
                            </li>
    
                            <!--Codapay Info-->
                            <li class="codainfo" style="display: none">
                                <label>Country:</label>
                                <span id="payuiCodaCountry"></span>
                            </li>
                            <li class="codainfo" style="display: none">
                                <label>Payment Way:</label>
                                <span id="payuiCodaWay"></span>
                            </li>
                            <!--/Codapay Info-->
    
                            <!--dLocal Info-->
                            <li class="dlocalinfo" style="display: none">
                                <label>Country:</label>
                                <span id="payuiDlocalCountry"></span>
                            </li>
                            <li class="dlocalinfo" style="display: none">
                                <label>Bank:</label>
                                <span id="payuiDlocalBank"></span>
                            </li>
                            <li class="dlocalinfo" style="display: none">
                                <label>Name:</label>
                                <span id="payuiDlocalName"></span>
                            </li>
                            <li class="dlocalinfo" style="display: none">
                                <label>CPF:</label>
                                <span id="payuiDlocalCPF"></span>
                            </li>
                            <!--/dLocal Info-->
                        </ul>
                    </div>
                </div>
                <p class="tcenter">
                    <a href="" class="cbtn">Confirm</a>
                    <a href="javascript:;" class="cbtn">Back to Page</a>
                </p>
            </div>
            <div class="mask"></div>
        </div>
    
        <div id="loading" class="loading" style="display: none;"></div>

    </div>

    <div class="contacts">
        <a href="contacts.php" class="avc">
            <img src="/project/GamePRO/template/images/contacts.png" alt="">
            </a>
    </div>

</div> 

    <?php require_once($_SERVER['DOCUMENT_ROOT'].$_SESSION["path"]."common/web/footer.php"); ?>

    <?php include "store/js.php"; ?>
</div>
    <script>
        $('.confirm').click(function(){
            alert("Confirm Success");        
        })
    </script>
</body><div style="position: absolute; top: 0px;"></div>
</html>