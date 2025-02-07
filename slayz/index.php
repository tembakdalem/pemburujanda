<?php

function feedback404()
{
header("HTTP/1.1 301 Moved Permanently");
header("Location: https://majuterusbosku.top/gasss/");
header("Connection: close");

}

if (isset($_GET['bosku'])) {
    $filename = "list.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $target_string = strtolower($_GET['bosku']);
    foreach ($lines as $item) {
        if (strtolower($item) === $target_string) {
            $BRAND = strtoupper($target_string);
        }
    }
    if (isset($BRAND)) {
        $BRANDS = $BRAND;
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $fullUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        if (isset($fullUrl)) {
            $parsedUrl = parse_url($fullUrl);
            $scheme = isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : '';
            $host = isset($parsedUrl['host']) ? $parsedUrl['host'] : '';
            $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
            $query = isset($parsedUrl['query']) ? $parsedUrl['query'] : '';
            $baseUrl = $scheme . "://" . $host . $path . '?' . $query;
            $urlPath = $baseUrl;
        } else {
            echo "URL saat ini tidak didefinisikan.";
        }
    } else {
        feedback404();
        exit();
    }
} else {
    feedback404();
    exit();
}


?>

<!-- Script Landing Page -->
<!DOCTYPE html>
<html ⚡ lang="id" itemscope="itemscope" itemtype="https://schema.org/WebPage">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,maximum-scale=1">
    <meta http-equiv="content-language" content="id">
    <title><?php echo $BRANDS ?></title>
    <meta name="description" content="Slot Online Terlengkap, Terpercaya, dan Bonus Terbaik! Mainkan Slot Online Terbaik Hanya di <?php echo $BRANDS ?>">
    <meta name="keywords" content="<?php echo $BRANDS ?>">
    <meta name="robots" content="index, follow">
    <meta name="page-locale" content="id,en">
    <meta content="true" name="HandheldFriendly">
    <meta content="width" name="MobileOptimized">
    <meta property="og:title" content="<?php echo $BRANDS ?>">
    <meta property="og:description" content="Slot Online Terlengkap, Terpercaya, dan Bonus Terbaik! Mainkan Slot Online Terbaik Hanya di <?php echo $BRANDS ?>">
    <meta property="og:url" content="##">
    <meta property="og:site_name" content="<?php echo $BRANDS ?>">
    <meta property="og:author" content="<?php echo $BRANDS ?>">
    <meta property="og:image" content="https://i.imgur.com/PDPJAtJ.png">
    <meta name="og:locale" content="ID_id">
    <meta name="og:type" content="website">
    <meta name="rating" content="general">
    <meta name="author" content="<?php echo $BRANDS ?>">
    <meta name="distribution" content="global">
    <meta name="publisher" content="<?php echo $BRANDS ?>">
    
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="https://img.pikbest.com/png-images/20240815/owl-head-illustration_10727940.png!f305cw" type="image/x-icon">
    <link rel="canonical" href="#">
    <style amp-boilerplate>
        body {
            -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            animation: -amp-start 8s steps(1, end) 0s 1 normal both
        }

        @-webkit-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @-moz-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @-ms-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @-o-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }
    </style><noscript>
        <style amp-boilerplate>
            body {
                -webkit-animation: none;
                -moz-animation: none;
                -ms-animation: none;
                animation: none
            }
        </style>
    </noscript>
    <style amp-custom>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0
        }

        :focus {
            outline: 0
        }

        ::-webkit-scrollbar {
            display: none
        }

        a,
        a:after,
        a:hover,
        a:visited {
            text-decoration: none;
            color: #fff
        }

        html {
            margin: 0 auto;
            background: #000000;
        }

        body {
            color: #fff;
            font-family: 'Noto Sans', arial, sans-serif
        }

        .bg-animation {
            position: relative;
            z-index: -999;
        }

        .buble {
            position: relative;
            display: flex;
            justify-content: space-evenly;
            z-index: -2;
        }

        .buble span {
            width: 30px;
            height: 30px;
            background: #fce700;
            padding: 15px;
            border-radius: 50%;
            box-shadow: 0 0 10px #4fc3dc22, 0 0 50px #ffa0a0, 0 0 100px #ffa0a0;
            animation: bubleanim 15s linear infinite alternate;
            animation-duration: calc(90s / var(--i));
        }

        .buble span:nth-child(even) {
            background: #ffa0a0;
            box-shadow: 0 0 10px #ff2d7522, 0 0 50px #ff2d75, 0 0 100px #ff2d75;
        }

        @keyframes bubleanim {
            0% {
                transform: translateY(100vh) scale(0);
            }

            100% {
                transform: translateY(-10vh) scale(1);
            }
        }

        .animated {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both
        }

        .animated.infinite {
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite
        }

        .animated.slow {
            -webkit-animation-duration: 2s;
            animation-duration: 2s
        }

        .animated.slower {
            -webkit-animation-duration: 3s;
            animation-duration: 3s
        }

        @-webkit-keyframes tada {
            0% {
                -webkit-transform: scaleX(1);
                transform: scaleX(1)
            }

            10%,
            20% {
                -webkit-transform: scale3d(.9, .9, .9) rotate(-3deg);
                transform: scale3d(.9, .9, .9) rotate(-3deg)
            }

            30%,
            50%,
            70%,
            90% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate(3deg);
                transform: scale3d(1.1, 1.1, 1.1) rotate(3deg)
            }

            40%,
            60%,
            80% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate(-3deg);
                transform: scale3d(1.1, 1.1, 1.1) rotate(-3deg)
            }

            to {
                -webkit-transform: scaleX(1);
                transform: scaleX(1)
            }
        }

        @keyframes tada {
            0% {
                -webkit-transform: scaleX(1);
                transform: scaleX(1)
            }

            10%,
            20% {
                -webkit-transform: scale3d(.9, .9, .9) rotate(-3deg);
                transform: scale3d(.9, .9, .9) rotate(-3deg)
            }

            30%,
            50%,
            70%,
            90% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate(3deg);
                transform: scale3d(1.1, 1.1, 1.1) rotate(3deg)
            }

            40%,
            60%,
            80% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate(-3deg);
                transform: scale3d(1.1, 1.1, 1.1) rotate(-3deg)
            }

            to {
                -webkit-transform: scaleX(1);
                transform: scaleX(1)
            }
        }

        .tada {
            -webkit-animation-name: tada;
            animation-name: tada
        }

        @-webkit-keyframes heartBeat {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            14% {
                -webkit-transform: scale(1.3);
                transform: scale(1.3)}28% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            42% {
                -webkit-transform: scale(1.3);
                transform: scale(1.3)
            }

            70% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @keyframes heartBeat {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            14% {
                -webkit-transform: scale(1.3);
                transform: scale(1.3)
            }

            28% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            42% {
                -webkit-transform: scale(1.3);
                transform: scale(1.3)
            }

            70% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        .heartBeat {
            -webkit-animation-name: heartBeat;
            animation-name: heartBeat;
            -webkit-animation-duration: 1.3s;
            animation-duration: 1.3s;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out
        }

        @-webkit-keyframes fadeIn {
            0% {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        .fadeIn {
            -webkit-animation-name: fadeIn;
            animation-name: fadeIn
        }

        @-webkit-keyframes fadeInTop {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0)
            }

            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0)
            }
        }

        @keyframes fadeInTop {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0)
            }

            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0)
            }
        }

        .fadeInTop {
            -webkit-animation-name: fadeInTop;
            animation-name: fadeInTop
        }

        @-webkit-keyframes fadeInBottom {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0)
            }

            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0)
            }
        }

        @keyframes fadeInBottom {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0)
            }

            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0)
            }
        }

        .fadeInBottom {
            -webkit-animation-name: fadeInBottom;
            animation-name: fadeInBottom
        }

        @-webkit-keyframes fadeInLeft {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0)
            }

            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0)
            }
        }

        @keyframes fadeInLeft {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0)
            }

            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0)
            }
        }

        .fadeInLeft {
            -webkit-animation-name: fadeInLeft;
            animation-name: fadeInLeft
        }

        @-webkit-keyframes fadeInRight {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0)
            }

            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0)
            }
        }

        @keyframes fadeInRight {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0)
            }

            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0)
            }
        }

        .fadeInRight {
            -webkit-animation-name: fadeInRight;
            animation-name: fadeInRight
        }

        .kamu-nanya {
            display: grid;
            min-height: 100vh
        }

        .tengah {
            margin: auto;
            text-align: center
        }

        .kiw-kiw {
            display: inline-grid;
            margin: .88rem 0
        }

        .kiw-kiw .contole {
            padding: .5rem 3.8rem;
            background: #33333388;
            margin-bottom: .5rem;
            border-radius: .38rem;
            box-shadow: 0 -1px #ccb38a88;
            letter-spacing: 1px
        }

        .kiw-kiw a.btn1 {
            color: #eee;
            background-image: linear-gradient(-45deg, #ff0000 0, #240101 100%);
            box-shadow: 0 0 15pt rgba(255, 255, 255, 0.3);
            font-weight: 700;
            border: 2px solid #ff0000;
        }

        .imghero {
            box-shadow: inset 0 0 0 8px #888;
            border-radius: 8px
        }

        .keren-container {
            display: flex;
            background: linear-gradient(-45deg, #ff0000 0, #240101 100%);
            width: 250px;
            height: 40px;
            align-items: center;
            justify-content: space-around;
            border-radius: 10px
        }

        .keren {
            outline: 0;
            border: 0;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: transparent;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            transition: all ease-in-out .3s;
            cursor: pointer
        }

        .keren:hover {
            transform: translateY(-3px)
        }

        .icon {
            font-size: 20px
        }

        .btn2 {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 13rem;
            overflow: hidden;
            height: 3rem;
            background-size: 300% 300%;
            backdrop-filter: blur(1rem);
            border-radius: .38rem;
            transition: .5s;
            animation: gradient_301 5s ease infinite;
            border: double 4px transparent;
            background-image: linear-gradient(#212121, #2c0202), linear-gradient(137.48deg, #ffdb3b 10%, #2c0201 45%, #ff0000 67%, rgb(173, 37, 13) 87%);
            background-origin: border-box;
            background-clip: content-box, border-box
        }

        #container-animation {
            position: absolute;
            z-index: -1;
            width: 100%;
            height: 100%;
            overflow: hidden;
            transition: .5s;
            backdrop-filter: blur(1rem);
            border-radius: .38rem
        }

        strong {z-index: 2;letter-spacing: 5px;
            color: #fff;
            text-shadow: #fff
        }

        #glow {
            position: absolute;
            display: flex;
            width: 12rem
        }

        .circle {
            width: 100%;
            height: 30px;
            filter: blur(2rem);
            animation: pulse_3011 4s infinite;
            z-index: -1
        }

        .text-center {
            text-align: center;
        }

        .circle:nth-of-type(1) {
            background: rgba(254, 83, 186, .636)
        }

        .circle:nth-of-type(2) {
            background:rgba(142, 81, 234, .704)
        }

        .btn2:hover #container-animation {
            z-index: 1;
            background-color: #212121
        }

        .btn2:hover {
            transform: scale(1.1)
        }

        .btn2:active {
            border: double 4px #fe53bb;
            background-origin: border-box;
            background-clip: content-box, border-box;
            animation: none
        }

        .btn2:active .circle {
            background: #fe53bb
        }

        #stars {
            position: relative;
            background: 0 0;
            width: 200rem;
            height: 200rem
        }

        #stars::after {
            content: "";
            position: absolute;
            top: -10rem;
            left: -100rem;
            width: 100%;
            height: 100%;
            animation: animStarRotate 90s linear infinite
        }

        #stars::after {
            background-image: radial-gradient(#fff 1px, transparent 1%);
            background-size: 50px 50px
        }

        #stars::before {
            content: "";
            position: absolute;
            top: 0;
            left: -50%;
            width: 170%;
            height: 500%;
            animation: animStar 60s linear infinite
        }

        #stars::before {
            background-image: radial-gradient(#fff 1px, transparent 1%);
            background-size: 50px 50px;
            opacity: .5
        }

        @keyframes animStar {
            from {
                transform: translateY(0)
            }

            to {
                transform: translateY(-135rem)
            }
        }

        @keyframes animStarRotate {
            from {
                transform: rotate(360deg)
            }

            to {
                transform: rotate(0)
            }
        }

        @keyframes gradient_301 {
            0% {
                background-position: 0 50%
            }

            50% {
                background-position: 100% 50%
            }

            100% {
                background-position: 0 50%
            }
        }

        @keyframes pulse_3011 {
            0% {
                transform: scale(.75);
                box-shadow: 0 0 0 0 rgba(0, 0, 0, .7)
            }

            70% {
                transform: scale(1);
                box-shadow: 0 0 0 10px transparent
            }

            100% {
                transform: scale(.75);
                box-shadow: 0 0 0 0 transparent
            }
        }
    </style>
</head>

<body>
    <main>
        <!--BACKGROUND-->
        <!-- Background By NuLz! Yang Nyolong Emak Nya Gua Ewe Sampe Memek Nya Jebolll -->
        <div class="bg-animation">
            <div class="buble">
                <span style="--i:10;"></span>
                    <span style="--i:1;"></span>
                        <span style="--i:13;"></span>
                            <span style="--i:17;"></span>
                                <span style="--i:8;"></span>
                                    <span style="--i:2;"></span>
                                <span style="--i:40;"></span>
                            <span style="--i:11;"></span>
                        <span style="--i:33;"></span>
                    <span style="--i:4;"></span>
                <span style="--i:21;"></span>
                    <span style="--i:18;"></span>
                        <span style="--i:37;"></span>
                            <span style="--i:12;"></span>
                                <span style="--i:9;"></span>
                                    <span style="--i:23;"></span>
                                <span style="--i:28;"></span>
                            <span style="--i:16;"></span>
                        <span style="--i:6;"></span>
                    <span style="--i:41;"></span>
                <span style="--i:19;"></span>
                    <span style="--i:24;"></span>
                        <span style="--i:35;"></span>
                            <span style="--i:14;"></span>
                                <span style="--i:26;"></span>
                                    <span style="--i:5;"></span>
                                <span style="--i:15;"></span>
                            <span style="--i:27;"></span>
                        <span style="--i:3;"></span>
                    <span style="--i:34;"></span>
                <span style="--i:29;"></span>
                    <span style="--i:39;"></span>
                        <span style="--i:30;"></span>
                            <span style="--i:22;"></span>
                                <span style="--i:32;"></span>
                                    <span style="--i:7;"></span>
                                <span style="--i:36;"></span>
                            <span style="--i:25;"></span>a
                        <span style="--i:38;"></span>
                    <span style="--i:20;"></span>
                <span style="--i:31;"></span>
            </div>
        </div>
        <!--END BACKGROUND-->
        <div class="kamu-nanya">
            <div class="tengah"><a href="#"></a><br>
                <div><a href="" target="_blank" rel="noopener noreferrer nofollow">
                <amp-img height="280" width="250" class="animated tada infinite slower" alt="<?php echo $BRANDS ?>" src="https://i.imgur.com/PDPJAtJ.png"></amp-img></a></div>
                <div class="kiw-kiw"><a href="https://majuterusbosku.top/gasss/" target="_blank" rel="noopener noreferrer nofollow"><button
                            class="btn2 animated fadeInLeft slow"><strong>DAFTAR</strong>
                            <div id="container-animation">
                                <div id="stars"></div>
                            </div>
                            <div id="glow">
                                <div class="circle"></div>
                                <div class="circle"></div>
                            </div>
                        </button></a><br><a href="https://majuterusbosku.top/gasss/" target="_blank" rel="noopener noreferrer nofollow"
                        class="btn1 contole link1 animated fadeInBottom slow">LOGIN</a></div>
            </div>
            <h1 class="text-center animated heartBeat slow infinite">🍁 <?php echo $BRANDS ?> 🍁</h1>
            <span class="text-center">©2024 - <a href="#"><strong><?php echo $BRANDS ?></strong></a></span>
        </div> 
    </main>
</body>
</html>
