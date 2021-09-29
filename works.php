<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NSP </title>
    <meta name="description"  content="有限会社NSPは店舗経営コンサルタントとして物件リサーチから日々の経理業務まで店舗に関する経営をトータルサポートします。まずはお気軽にお問い合わせください">
    <meta name="keywords"  content="店舗,経営,コンサルタント,コンサル,物件リサーチ,経理業務">
    <!--=============Google Font ===============-->
    <link href="https://fonts.googleapis.com/css?family=Lato:900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--==============レイアウトを制御する独自のCSSを読み込み===============-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.css">
    <link rel="stylesheet" type="text/css" href="./css/reset.css">
    <link rel="stylesheet" type="text/css" href="./css/contactform.css">
    <link rel="stylesheet" type="text/css" href="./css/parts.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<div id="splash">
<!-- <div id="splash-logo"><div class="bgextend bgLRextend"><span class="bgappear">Our Service</span></div> -->
</div>
<!--/splash--></div>
<!-- 画面遷移用 -->
<div class="splashbg"></div>

<body>
<header id="header">
<h1><a href="./index.php"><img src="./img/NSP_logo2.png" alt="logo" class="logo"></a></h1>
    
<nav id="pc-nav">
        <ul>
            <li><a href="./index.php"><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">About</span></span></a></li>
            <li><a href="./service.php"><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">Service</span></span></a></li>
            <li><a href="#"><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">OurWorks</span></span></a></li>
            <li><a href="./index.php"><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">Company</span></span></a></li>
            <li><a href="#Contact"><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">Contact</span></span></a></li>
        </ul>
</nav>   
</header>
<main id="main">
    <section id="OurWorks" class="scroll-point SubPage">
        <h2><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">Our Works</span></span></h2>
        <p class="subtitle"><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">制作実績</span></span></p>
        <div class="works-area">
            <div class="works-contents">
                <div class="grid">
                    <img src="../img/work_img/HPw1.jpg" alt="NSP コンサル コンテンツ 写真１" class="workImg flipLeftTrigger">
                </div>
                <div class="grid">
                    <img src="../img/work_img/HPw2.jpg" alt="NSP コンサル コンテンツ 写真２" class="workImg flipLeftTrigger">
                </div>
                <div class="grid">
                    <img src="../img/work_img/HPw3.jpg" alt="NSP コンサル コンテンツ 写真３" class="workImg flipLeftTrigger">
                </div>
                <div class="grid">
                    <img src="../img/work_img/HPw4.jpg" alt="NSP コンサル コンテンツ 写真１" class="workImg flipLeftTrigger">
                </div>
                <div class="grid">
                    <img src="../img/work_img/HPw5.jpg" alt="NSP コンサル コンテンツ 写真２" class="workImg flipLeftTrigger">
                </div>
                <div class="grid">
                    <img src="../img/work_img/HPw6.jpg" alt="NSP コンサル コンテンツ 写真３" class="workImg flipLeftTrigger">
                </div>
                <div class="grid">
                    <img src="../img/work_img/HPw7.jpg" alt="NSP コンサル コンテンツ 写真１" class="workImg flipLeftTrigger">
                </div>
                <div class="grid">
                    <img src="../img/work_img/HPw8.jpg" alt="NSP コンサル コンテンツ 写真２" class="workImg flipLeftTrigger">
                </div>
                <div class="grid">
                    <img src="../img/work_img/HPw9.jpg" alt="NSP コンサル コンテンツ 写真３" class="workImg flipLeftTrigger">
                </div>
                <div class="grid">
                    <img src="../img/work_img/HPw10.jpg" alt="NSP コンサル コンテンツ 写真１" class="workImg flipLeftTrigger">
                </div>
                <div class="grid">
                    <img src="../img/work_img/HPw11.jpg" alt="NSP コンサル コンテンツ 写真２" class="workImg flipLeftTrigger">
                </div>
                <div class="grid">
                    <img src="../img/work_img/HPw12.jpg" alt="NSP コンサル コンテンツ 写真３" class="workImg flipLeftTrigger">
                </div>
            </div>
        </div>
    </section>
    <section id="Contact" class="scroll-point">
        <div class="center">
            <h2><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">Contact</span></span></h2>
            <p class="subtitle2"><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">お問い合わせ</span></span></p>
        </div>
        <?php include('./contactform.php'); ?>
    </section>
</main>

<footer id="footer">
<div class="openbtn"><span></span><span>Menu</span><span></span></div>
    <div id="g-nav">
    <div id="g-nav-list">
<ul>
    <li><a href="./index.php#About">About</a></li>
    <li><a href="./service/service.php">Service</a></li>
    <li><a href="#">OurWorks</a></li>
    <li><a href="../index.php#Company">Company</a></li>
    <li><a href="#Contact">Contact</a></li>
</ul>
</div>
</div>
    <p class="footerContents">Copyright © by NSP Co., Ltd. All rights reserved.</p>
</footer>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!--機能編 9-4-1 ニュースティッカー-->   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.js"></script>
    <!--機能編 9-1-5 スクロールをするとエリアの高さに合わせて線が伸びる-->  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollgress/2.0.0/scrollgress.min.js"></script>
    <!--自作のJS-->   
    <script src="./JS/script.js"></script>
</body>
</html>