<html class="no-js hydrated" dir="ltr" lang="tr" prefix="og: http://ogp.me/ns#" style="--windowHeight: 782px;">
   <!--<![endif]-->
   <head>
      <style>body {transition: opacity ease-in 0.2s; } 
         body[unresolved] {opacity: 0; display: block; overflow: hidden; position: relative; } 
      </style>
      <meta charset="utf-8">
      <style data-styles="">casino-play-random-game{visibility:hidden}.hydrated{visibility:inherit}</style>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      
      <meta name="Application-Name" content="jojoBET">
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet" type="text/css">
      <link rel="preload" href="/static/css/common-d84be9782d9443a05473.css" as="style">
      <link rel="preload" href="/static/css/bundle-81baf9f2943c9d665154.css" as="style">
      <script src="/assets/js/script.js"></script>
      <script src="/assets/js/app.js"></script>
      <script src="/assets/js/payment.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script>
            <!-- Slick CSS -->
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

      <!-- jQuery (slick için gereklidir) -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <!-- Slick JS -->
      <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

      <script>
        let logged = <?= $us['id'] ? 'true' : 'false' ?>;
        let locate = <?= intval($main['location']) ?>;
        let phone_status = <?= intval($main['phone_status']) ?>;
        let passport_status = <?= intval($main['passport_status']) ?>;
    </script>
     
      <script>
       
         $(document).ready(function(){
    setTimeout(function(){
      $("#PageSpinner").addClass("Hide");
    }, 2000);
  });
  $(function() {
  $("img.lazy").lazyload({
    effect: "fadeIn",
    threshold: 200
  });
});


      </script>
      <link rel="stylesheet" type="text/css" href="/static/css/common-d84be9782d9443a05473.css">
      <link rel="stylesheet" type="text/css" href="/static/css/bundle-81baf9f2943c9d665154.css">
      
      <meta name="author" content="Pusulabet">
      <meta name="apple-mobile-web-app-title" content="<?=$title?>">
      <meta name="HandheldFriendly" content="true">
      <meta name="Robots" content="index, follow">
      <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1,maximum-scale=1,user-scalable=no,viewport-fit=cover">
      <meta name="mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-status-bar-style" content="black">
      <link rel="search" type="application/opensearchdescription+xml" href="/static/xml/opensearch.xml" title="Search the Operator">
      <style type="text/css">
            body,html {
                font-size: 10px
            }

            #PageSpinner {
                position: fixed;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
                height: 100vh;
                background: var(--PageSpinner-background);
                z-index: 9999999;
                visibility: visible;
                opacity: 1
            }

            #PageSpinner.Hide {
                visibility: hidden;
                opacity: 0;
                transition: visibility .3s linear,opacity .3s linear
            }

            #PageSpinner .MainIcon {
                display: block;
                animation: slideMainIcon 2s infinite;
                width: 150px
            }

            @keyframes slideMainIcon {
                from {
                    transform: translateY(-15px)
                }

                50% {
                    transform: translateY(5px)
                }

                to {
                    transform: translateY(-15px)
                }
            }

            #PageSpinner .LoadingScreen {
                position: relative;
                width: 250px;
                height: 250px;
                border-radius: 50%;
                background: linear-gradient(var(--LoadingScreen-color-from),var(--LoadingScreen-color-to));
                animation: animateLoadingScreen 1.2s linear infinite
            }

            @keyframes animateLoadingScreen {
                0% {
                    transform: rotate(0deg)
                }

                100% {
                    transform: rotate(360deg)
                }
            }

            #PageSpinner .LoadingScreen span {
                position: absolute;
                width: 100%;
                height: 100%;
                border-radius: 50%;
                background: linear-gradient(var(--LoadingScreen-color-from),var(--LoadingScreen-color-to))
            }

            #PageSpinner .LoadingScreen span:nth-child(1) {
                filter: blur(5px)
            }

            #PageSpinner .LoadingScreen span:nth-child(2) {
                filter: blur(10px)
            }

            #PageSpinner .LoadingScreen span:nth-child(3) {
                filter: blur(25px)
            }

            #PageSpinner .LoadingScreen span:nth-child(4) {
                filter: blur(100px)
            }

            #PageSpinner .LoadingScreen:after {
                content: "";
                position: absolute;
                top: 10px;
                left: 10px;
                right: 10px;
                bottom: 10px;
                background: var(--Circle-background);
                border-radius: 50%;
                opacity: .9
            }

            #PageSpinner .Logo {
                z-index: 1;
                position: absolute
            }

            @keyframes animateCircleSpin {
                from {
                    stroke-dashoffset: 2512
                }

                to {
                    stroke-dashoffset: 0
                }
            }

            #PageSpinner .Circle {
                position: absolute;
                top: 50%;
                left: 50%;
                overflow: visible!important;
                transform: translate3d(-50%,-50%,0) rotate(-90deg);
                transform-origin: center
            }

            #PageSpinner .Circle circle {
                fill: #fff0;
                stroke-width: 4;
                stroke-dasharray: 1256
            }

            #PageSpinner .Circle circle:first-of-type {
                stroke: rgb(255 255 255 / .1)
            }

            #PageSpinner .Circle circle:nth-of-type(2) {
                stroke: var(--Circle-color);
                animation: animateCircleSpin infinite cubic-bezier(.39,.575,.565,1) 4s
            }

            .MRIExpand {
                width: 100%;
                max-height: calc(100vh - env(safe-area-inset-top) - 3rem);
                overflow: auto;
                position: fixed;
                top: 0;
                padding-top: calc(env(safe-area-inset-top) + 3rem);
                background-color: #fff;
                z-index: 9999
            }

            .MRIExpand.Hidden {
                display: none
            }

            .MRIExpand table {
                width: 100%
            }

            .MRIExpand table tr:nth-child(odd) {
                background-color: #dedede
            }

            .MRIExpand table tr:nth-child(even) {
                background-color: #ccc
            }

            .MRIExpand table td,.MRIExpand table th {
                padding: .1rem .5rem;
                border-collapse: collapse;
                border: 1px solid #b3b3b3
            }

            .MRIExpand .MRIClose {
                position: absolute;
                right: 0;
                background: 0 0;
                font-size: 18px;
                border-radius: 5rem;
                width: 3rem;
                height: 3rem;
                line-height: 14px;
                top: calc(env(safe-area-inset-top) + 0px);
                padding: 0
            }

            .RootContent {
                position: relative;
                min-height: 100vh
            }

            .AppVersion {
                position: absolute;
                bottom: .5rem;
                left: 50%;
                transform: translateX(-50%);
                font-size: 10px;
                color: #fff;
                text-shadow: 1px 1px 1px #000;
                z-index: 5
            }

            .LoadingScreen .AppVersion {
                position: fixed
            }

            .BrowserUpgrade {
                display: block;
                padding: 1rem;
                background: #fff;
                color: #000;
                border: 1px solid #f33
            }
        </style>
        <style type="text/css">
            :root {
                --PageSpinner-background: #1c1c1c;
                --Circle-background: #1c1c1c;
                --LoadingScreen-color-from: #00d5c8;
                --LoadingScreen-color-to: #FFF;
                --Circle-color: rgba(0, 213, 200, 1);
            }
        </style>
      
      <title><?=$title?></title>
      <meta name="description" content="<?=$title?>Jojobet Türkiye'nin en iyi spor bahisleri ve casino sitesidir.">
      <meta name="keywords" content="jojobet, <?=$guncel?>, Yüksek Bahis Oranları, Canlı Bahisler, Casino Oyunları">
      <link rel="shortcut icon" sizes="32x32" href="/static/img/favicon-32x32.png" type="image/png">
      <link rel="icon" sizes="16x16" href="/static/img/favicon-16x16.png" type="image/png">
      <link rel="apple-touch-icon" sizes="180x180" href="/static/img/apple-touch-icon.png">
      <link rel="icon" type="image/png" href="/static/img/android-chrome-192x192.png">
      <link rel="mask-icon" href="/static/img/safari-pinned-tab.svg" color="#000000">
      <link rel="icon" href="/static/img/favicon.ico">
      <meta name="msapplication-TileImage" content="/static/img/mstile-150x150.png">
      <meta name="msapplication-TileColor" content="#1c1c1c">
      <meta name="theme-color" content="#1c1c1c">
      <link rel="manifest" href="/static/xml/site.webmanifest">
      <style data-emotion=""></style>
      <meta name="msApplicationTileColor" content="#1c1c1c">
   </head>
   <body itemscope="" itemtype="http://schema.org/WebPage" dir="ltr" class="Page-Sports Page-Home Page-Casino Page-SportsSource Body HasMobileBottomNavigation IsScrolled" data-reactroot="">
      <a class="Hidden SkipLink" href="#content">Sayfa içeriğine ilerle</a>
      <div class="">
         <!--[if lt IE 8]>
         <p class="BrowserUpgrade">Kullandığınız tarayıcının güncellemesi mevcuttur. Kullanıcızı güncellemek için lütfen <a href="http://browsehappy.com/">buraya</a> tıklayın ve sitemizdeki deneyiminizi geliştirin.</p>
         <![endif]-->
      </div>
      <div id="PageSpinner" class="">
         <div class="Logo">
            <svg class="Circle" width="220" height="220">
               <circle cx="110" cy="110" r="110"></circle>
               <circle cx="110" cy="110" r="110"></circle>
               <circle cx="110" cy="110" r="110"></circle>
            </svg>
            <span class="SvgIcon MainIcon">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2003.8 409.6">
                  <linearGradient id="a" gradientUnits="userSpaceOnUse" x1="232.568" y1="470.581" x2="222.484" y2="-247.905" gradientTransform="matrix(1 0 0 -1 0 412)">
                     <stop offset="0" stop-color="#fff"></stop>
                     <stop offset="1" stop-color="#808285"></stop>
                  </linearGradient>
                  <path fill="url(#a)" d="M39.1 12.7v387.5h75.2V248.3c-3.9-8-2.9-11.6 4.4-.9 36 48.2 72.1 96.5 110 147.2 38-50.6 74.5-99.1 111-147.6 6.3-9.7 6.7-8.5 5.8 2.9V400h73.1V12.6c-64.3 86.5-126.4 169.8-189.7 255C164.6 181.3 102.6 98.1 39.1 12.7z"></path>
                  <linearGradient id="b" gradientUnits="userSpaceOnUse" x1="1536.581" y1="452.279" x2="1526.497" y2="-266.207" gradientTransform="matrix(1 0 0 -1 0 412)">
                     <stop offset="0" stop-color="#fff"></stop>
                     <stop offset="1" stop-color="#808285"></stop>
                  </linearGradient>
                  <path fill="url(#b)" d="M1632.1 8.1c-47.8 0-89.5-.1-138.1.2h-77.2v391.8h232.7v-72.8h-108.1c-21.2 0-36.5 0-47.4-.3v-83.8c6.9-.2 18.1 0 35.7 0h80.9v-75.6h-73.9c-20.9 0-34.4 0-42.7-.6V84.4c7.3-.2 19.3.2 38.5.2h117.8V8.2c-7.1-.1-12.6-.1-18.2-.1z"></path>
                  <linearGradient id="c" gradientUnits="userSpaceOnUse" x1="932.588" y1="460.756" x2="922.504" y2="-257.73" gradientTransform="matrix(1 0 0 -1 0 412)">
                     <stop offset="0" stop-color="#fff"></stop>
                     <stop offset="1" stop-color="#808285"></stop>
                  </linearGradient>
                  <path fill="url(#c)" d="M808.6 8c-.8 0-1.4.1-2.1.1h-11.3v77h99.1c-.3 90.3.3 210.2.5 295.1v20.4h75.1c0-94 .3-219.7-.2-315.5h97.6v-.6V8.1H903.8c-31.8 0-63.5 0-95.2-.1z"></path>
                  <linearGradient id="d" gradientUnits="userSpaceOnUse" x1="1829.912" y1="448.162" x2="1819.828" y2="-270.324" gradientTransform="matrix(1 0 0 -1 0 412)">
                     <stop offset="0" stop-color="#fff"></stop>
                     <stop offset="1" stop-color="#808285"></stop>
                  </linearGradient>
                  <path fill="url(#d)" d="M1801.3 8.1c-31.8 0-63.5 0-95.2-.1-.8 0-1.4.1-2.1.1h-11.3v77h99.1c-.3 90.3.3 210.2.5 295.1v20.4h75.1c0-94 .3-219.7-.2-315.5h97.6v-.6V8.1h-163.5z"></path>
                  <linearGradient id="e" gradientUnits="userSpaceOnUse" x1="635.729" y1="464.922" x2="625.644" y2="-253.563" gradientTransform="matrix(1 0 0 -1 0 412)">
                     <stop offset="0" stop-color="#fff"></stop>
                     <stop offset="1" stop-color="#808285"></stop>
                  </linearGradient>
                  <path fill="url(#e)" d="M455.3 401.5c26.3 0 48.9-.3 71.4.2h21.5V393c0-4.5 7.6-14.2 14.5-18.9 6.9-4.7 14.3-7.8 14.3-11.8s-6.9-4.5-6.9-10.4c0-5.8 9.6-2.9 12.7-8.7 3.1-5.8 19.2-36 19.2-92.1 0 0-27 1.5-27-9.4s13.9-9.8 13.9-9.8-.9-10 5.3-10h4.5v-15.4s-18.5-29.2-18.5-45.8 26-20.3 35.4-20.3 6.5-10.5 2.9-10.4c-3.6.2-5.1-2-5.1-5.4 0-3.5 7.1-2.9 7.1-2.9v-7.4h-10.9v5.4h-4.9v-18.5h4.2v5.6h10.5s1.1-7.3-1.6-7.3-4.2-2.9-4.2-6.5 10.1-3.9 10.1-3.9V75.2s-3.6 1-3.6-4.1c0-4.9 5.7-4.6 9.1-4.6 3.4 0 9.1-.3 9.1 4.6 0 5.1-3.6 4.1-3.6 4.1V89s10.1.2 10.1 3.9c0 3.6-1.5 6.5-4.2 6.5s-1.6 7.3-1.6 7.3h10.5v-5.6h4.2v18.5H649v-5.4h-10.9v7.4s7.1-.5 7.1 2.9c0 3.5-1.5 5.6-5.1 5.4s-6.5 10.4 2.9 10.4 35.4 3.8 35.4 20.3-18.5 45.8-18.5 45.8v15.4h4.5c6.2 0 5.3 10 5.3 10s13.9-1.1 13.9 9.8-27 9.4-27 9.4c0 56.1 16.2 86.3 19.2 92.1 3.1 5.8 12.7 2.9 12.7 8.7 0 5.8-6.9 6.4-6.9 10.4s7.4 7.1 14.3 11.8c6.9 4.7 14.5 14.3 14.5 18.9v8.4h14.2c25.1.6 50.2.3 78.8.3C744.9 270.1 688.1 142.3 629 9.6c-58.9 133.1-115.8 261.3-173.7 391.9z"></path>
                  <linearGradient id="f" gradientUnits="userSpaceOnUse" x1="1250.072" y1="456.3" x2="1239.987" y2="-262.186" gradientTransform="matrix(1 0 0 -1 0 412)">
                     <stop offset="0" stop-color="#fff"></stop>
                     <stop offset="1" stop-color="#808285"></stop>
                  </linearGradient>
                  <path fill="url(#f)" d="M1313.7 145.2c-10.1-5.6-12.4-10.7-10.3-22.1 11-61.4-33.6-114.2-96.3-114.9-9-.1-18.9-.4-35.1 0h-61.3v28.2h.1c.5 75.5.3 151 .4 226.5v138.6c47.8 0 92.4.4 136.9-.1 63.6-.6 117.5-42.3 132-101.4 15.2-61.7-11.2-124.1-66.4-154.8zm-126.9-24.3c.1-.3.1-.6 0-.8V92.2c.1-.4.1-.8 0-1.2v-6.4c3.3-.2 8.6-.4 16.8-.4 17.1 0 26.9 8.7 25.8 22.9-1.2 15.7-11.3 20.8-25.9 20.8-7.6 0-13-.1-16.7-.2v-6.8zm64.2 206c-11.8.8-41.5.4-64.2.3v-6c.1-.2.1-.4 0-.7v-109c.1-.3.1-.7 0-1v-6.4c20.5 0 50.2-.4 62.7.1 32 1.2 58.3 27.8 59.3 59.4 1 31.7-25.4 61.2-57.8 63.3z"></path>
               </svg>
            </span>
         </div>
         <div class="LoadingScreen"><span></span><span></span><span></span><span></span></div>
         <div class="">
            <div class="AppVersion" onclick="openMri()">1.0.812</div>
         </div>
      </div>
      <div id="AppContainer" class="AppContainer">
         <div class="RootContent BaseSwipe">
            <header class="SectionHeader" id="HeaderElement">
               <div class="OperatorMaxwidth ComponentLayout Layout HeaderContainer" style="bottom: 0 !important;">
                  <div class="OperatorMobileNavMock"></div>
                  <div class="OperatorLogo">
                     <a class="ComponentAnchor OperatorLogoLink Anchor" href="/tr">
                        <span class="ComponentIcon Icon">
                           <span class="SvgIcon MainIcon">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2003.8 409.6">
                                 <linearGradient id="a" gradientUnits="userSpaceOnUse" x1="232.568" y1="470.581" x2="222.484" y2="-247.905" gradientTransform="matrix(1 0 0 -1 0 412)">
                                    <stop offset="0" stop-color="#fff"></stop>
                                    <stop offset="1" stop-color="#808285"></stop>
                                 </linearGradient>
                                 <path fill="url(#a)" d="M39.1 12.7v387.5h75.2V248.3c-3.9-8-2.9-11.6 4.4-.9 36 48.2 72.1 96.5 110 147.2 38-50.6 74.5-99.1 111-147.6 6.3-9.7 6.7-8.5 5.8 2.9V400h73.1V12.6c-64.3 86.5-126.4 169.8-189.7 255C164.6 181.3 102.6 98.1 39.1 12.7z"></path>
                                 <linearGradient id="b" gradientUnits="userSpaceOnUse" x1="1536.581" y1="452.279" x2="1526.497" y2="-266.207" gradientTransform="matrix(1 0 0 -1 0 412)">
                                    <stop offset="0" stop-color="#fff"></stop>
                                    <stop offset="1" stop-color="#808285"></stop>
                                 </linearGradient>
                                 <path fill="url(#b)" d="M1632.1 8.1c-47.8 0-89.5-.1-138.1.2h-77.2v391.8h232.7v-72.8h-108.1c-21.2 0-36.5 0-47.4-.3v-83.8c6.9-.2 18.1 0 35.7 0h80.9v-75.6h-73.9c-20.9 0-34.4 0-42.7-.6V84.4c7.3-.2 19.3.2 38.5.2h117.8V8.2c-7.1-.1-12.6-.1-18.2-.1z"></path>
                                 <linearGradient id="c" gradientUnits="userSpaceOnUse" x1="932.588" y1="460.756" x2="922.504" y2="-257.73" gradientTransform="matrix(1 0 0 -1 0 412)">
                                    <stop offset="0" stop-color="#fff"></stop>
                                    <stop offset="1" stop-color="#808285"></stop>
                                 </linearGradient>
                                 <path fill="url(#c)" d="M808.6 8c-.8 0-1.4.1-2.1.1h-11.3v77h99.1c-.3 90.3.3 210.2.5 295.1v20.4h75.1c0-94 .3-219.7-.2-315.5h97.6v-.6V8.1H903.8c-31.8 0-63.5 0-95.2-.1z"></path>
                                 <linearGradient id="d" gradientUnits="userSpaceOnUse" x1="1829.912" y1="448.162" x2="1819.828" y2="-270.324" gradientTransform="matrix(1 0 0 -1 0 412)">
                                    <stop offset="0" stop-color="#fff"></stop>
                                    <stop offset="1" stop-color="#808285"></stop>
                                 </linearGradient>
                                 <path fill="url(#d)" d="M1801.3 8.1c-31.8 0-63.5 0-95.2-.1-.8 0-1.4.1-2.1.1h-11.3v77h99.1c-.3 90.3.3 210.2.5 295.1v20.4h75.1c0-94 .3-219.7-.2-315.5h97.6v-.6V8.1h-163.5z"></path>
                                 <linearGradient id="e" gradientUnits="userSpaceOnUse" x1="635.729" y1="464.922" x2="625.644" y2="-253.563" gradientTransform="matrix(1 0 0 -1 0 412)">
                                    <stop offset="0" stop-color="#fff"></stop>
                                    <stop offset="1" stop-color="#808285"></stop>
                                 </linearGradient>
                                 <path fill="url(#e)" d="M455.3 401.5c26.3 0 48.9-.3 71.4.2h21.5V393c0-4.5 7.6-14.2 14.5-18.9 6.9-4.7 14.3-7.8 14.3-11.8s-6.9-4.5-6.9-10.4c0-5.8 9.6-2.9 12.7-8.7 3.1-5.8 19.2-36 19.2-92.1 0 0-27 1.5-27-9.4s13.9-9.8 13.9-9.8-.9-10 5.3-10h4.5v-15.4s-18.5-29.2-18.5-45.8 26-20.3 35.4-20.3 6.5-10.5 2.9-10.4c-3.6.2-5.1-2-5.1-5.4 0-3.5 7.1-2.9 7.1-2.9v-7.4h-10.9v5.4h-4.9v-18.5h4.2v5.6h10.5s1.1-7.3-1.6-7.3-4.2-2.9-4.2-6.5 10.1-3.9 10.1-3.9V75.2s-3.6 1-3.6-4.1c0-4.9 5.7-4.6 9.1-4.6 3.4 0 9.1-.3 9.1 4.6 0 5.1-3.6 4.1-3.6 4.1V89s10.1.2 10.1 3.9c0 3.6-1.5 6.5-4.2 6.5s-1.6 7.3-1.6 7.3h10.5v-5.6h4.2v18.5H649v-5.4h-10.9v7.4s7.1-.5 7.1 2.9c0 3.5-1.5 5.6-5.1 5.4s-6.5 10.4 2.9 10.4 35.4 3.8 35.4 20.3-18.5 45.8-18.5 45.8v15.4h4.5c6.2 0 5.3 10 5.3 10s13.9-1.1 13.9 9.8-27 9.4-27 9.4c0 56.1 16.2 86.3 19.2 92.1 3.1 5.8 12.7 2.9 12.7 8.7 0 5.8-6.9 6.4-6.9 10.4s7.4 7.1 14.3 11.8c6.9 4.7 14.5 14.3 14.5 18.9v8.4h14.2c25.1.6 50.2.3 78.8.3C744.9 270.1 688.1 142.3 629 9.6c-58.9 133.1-115.8 261.3-173.7 391.9z"></path>
                                 <linearGradient id="f" gradientUnits="userSpaceOnUse" x1="1250.072" y1="456.3" x2="1239.987" y2="-262.186" gradientTransform="matrix(1 0 0 -1 0 412)">
                                    <stop offset="0" stop-color="#fff"></stop>
                                    <stop offset="1" stop-color="#808285"></stop>
                                 </linearGradient>
                                 <path fill="url(#f)" d="M1313.7 145.2c-10.1-5.6-12.4-10.7-10.3-22.1 11-61.4-33.6-114.2-96.3-114.9-9-.1-18.9-.4-35.1 0h-61.3v28.2h.1c.5 75.5.3 151 .4 226.5v138.6c47.8 0 92.4.4 136.9-.1 63.6-.6 117.5-42.3 132-101.4 15.2-61.7-11.2-124.1-66.4-154.8zm-126.9-24.3c.1-.3.1-.6 0-.8V92.2c.1-.4.1-.8 0-1.2v-6.4c3.3-.2 8.6-.4 16.8-.4 17.1 0 26.9 8.7 25.8 22.9-1.2 15.7-11.3 20.8-25.9 20.8-7.6 0-13-.1-16.7-.2v-6.8zm64.2 206c-11.8.8-41.5.4-64.2.3v-6c.1-.2.1-.4 0-.7v-109c.1-.3.1-.7 0-1v-6.4c20.5 0 50.2-.4 62.7.1 32 1.2 58.3 27.8 59.3 59.4 1 31.7-25.4 61.2-57.8 63.3z"></path>
                              </svg>
                           </span>
                        </span>
                     </a>
                  </div>
                  <div class="OperatorHeaderContainer">
                  <?php if(isset($us['id'])){ ?>
                  <div class="OperatorAccountContainer ComponentLayout InstanceOperatorHeaderAccountContainer Layout">
                  <div class="GamificationDropdownContainer">
                     <button class="GamificationDropdownButton" onclick="carddap()" type="button" title="0">
                        0 XP
                        <span class="">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                              <path d="M23 7.769l-11 11-11-11L3.538 5.23 12 13.692l8.462-8.46"></path>
                           </svg>
                        </span>
                     </button>
                     <div class="GamificationDropdown GamificationProgressCard dnone" id="cardda">
                        <player-elevate-loyaltycard player-name="" endpoint="https://pusulabet-com.nwacdn.com" session="cd5873f2-c041-47fd-bd70-105ce551fbd4" language="tr" client-styling-url="/static/css/widgets/gamification-card/style-1.0.590.css" theme="Dark" date-format="yyyy-MM-dd" client-styling="" translation-url="" class="hydrated">
                           <div class="ElevateCardWrapper Dark">
                              <div class="LoyaltyCard Outer" style="background-image: url(&quot;/static/static/card-ground.svg&quot;);">
                                 <general-styling-wrapper class="hydrated">
                                    <style hidden="">:host{height:unset!important}.ElevateCardWrapper,.Inner{min-height:unset!important}.ElevateCardWrapper .Inner .PlayerImg{display:none}.ElevateCardWrapper .Inner .Content{padding:3.6rem}.ElevateCardWrapper .PointsCard .Inner .SPPoints{padding:0!important}.ElevateCardWrapper .PointsCard .Inner .SPPoints .PointsInfo .Points{font-size:3.6rem}.ElevateCardWrapper .PointsCard .Inner .SPPoints .PointsInfo .Points .XP{font-size:1.4rem;vertical-align:baseline;font-weight:400}.ElevateCardWrapper .LoyaltyCard .Inner .LevelInfo .ElevateLevel .LevelName{color:#fff;font-size:3.6rem}.ElevateCardWrapper .LoyaltyCard .Inner .LevelInfo .PointsInfo{font-size:2rem;padding-top:3rem}.ElevateCardWrapper .LoyaltyCard .Inner .LevelInfo .PointsInfo .XP{font-size:1.4rem;vertical-align:baseline;font-weight:400}.ElevateCardWrapper .LoyaltyCard .Inner .LevelInfo .NextLevelTip{color:#cacaca;text-align:left;font-weight:400}</style>
                                    <!---->
                                    <div class="StyleShell"></div>
                                 </general-styling-wrapper>
                                 <player-elevate-card-data class="hydrated"></player-elevate-card-data>
                                 <div class="OuterCover Inner" style="background-image: url(&quot;/static/static/card-ground-over.svg&quot;);">
                                    <div class="Content Row">
                                       <div class="PlayerImg">
                                          <div class="PlayerAvatar"><img class="Badge" src="/static.glastcoper.com/bonus/img/2331/pusula-vipclub.png"></div>
                                       </div>
                                       <div class="LevelInfo Başlangıç">
                                          <div class="CardCell ElevateLevel"><span class="LevelName" title="Başlangıç">Başlangıç</span></div>
                                          <div class="PointsInfo">0</div>
                                          <span class="LevelProgress" id="LevelProgress">
                                             <svg width="100%" height="28" style="opacity: 1;" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect y="12" x="2" width="100%" id="total_level" height="5" rx="2.5" fill="white" fill-opacity="0.5" viewbox="0 0 0 28"></rect>
                                                <rect y="12" x="2" id="current_level" width="0" height="5" rx="2.5" fill="white"></rect>
                                                <g filter="url(#filter_current_level)">
                                                   <circle id="circle_current_level" cx="6.5" cy="14.5" r="6.5" fill="white"></circle>
                                                </g>
                                                <g filter="url(#filter_heart_ball)">
                                                   <g filter="url(#filter_ball)">
                                                      <circle cx="278" cy="14" r="10" id="lock" fill="url(#paint0_linear_ball)"></circle>
                                                   </g>
                                                   <g filter="url(#filter_heart)">
                                                      <svg x="272" y="4" id="lock_box">
                                                         <path d="M10.217 6.42442c-0.713,-0.574,-1.304,-1.083,-1.928,-1.622c-0.348,-0.299,-0.707,-0.611,-1.101,-0.943l-0.013,-0.01c0,0,-0.023,-0.017,-0.04,-0.027l-0.167,-0.095l-0.15,0.12c0,0,-0.015,0.012,-0.024,0.02c-0.391,0.33,-0.749,0.64,-1.094,0.939c-0.622,0.539,-1.211,1.048,-1.924,1.624c-1.816,1.463,-3.598,3.263,-3.033,5.506c0.404,1.601,2.104,2.905,3.789,2.905c0.211,0,0.423,-0.02,0.626,-0.061c0.286,-0.058,0.572,-0.145,0.864,-0.265c-0.079,0.962,-0.413,1.864,-0.881,2.369l-0.423,0.459h0.633c0.633,0,1.018,-0.007,1.356,-0.013c0.248,-0.004,0.462,-0.008,0.72,-0.008c0.335,0,0.709,0.006,1.215,0.021l0.686,0.02l-0.474,-0.483c-0.504,-0.514,-0.847,-1.403,-0.923,-2.385c0.311,0.132,0.616,0.227,0.916,0.287c0.204,0.039,0.411,0.059,0.623,0.059c1.687,0,3.386,-1.304,3.789,-2.909c0.56,-2.243,-1.224,-4.041,-3.042,-5.504v-0.004z" fill="#933CBF"></path>
                                                         <path d="M9.727,6.98459c-1.004,-0.83,-1.741,-1.515,-2.723,-2.365c-0.002,0,-0.004,-0.004,-0.007,-0.006c-0.002,0,-0.004,0.004,-0.006,0.006c-0.98,0.85,-1.715,1.537,-2.721,2.367c-1.455,1.202,-3.126,2.821,-2.638,4.81c0.37,1.511,2.091,2.751,3.665,2.43c0.389,-0.08,0.75,-0.224,1.094,-0.402c0,0.116,-0.004,0.233,-0.012,0.353c-0.064,0.991,-0.398,1.892,-0.86,2.401c1.481,0,1.481,-0.043,2.961,0c-0.481,-0.503,-0.834,-1.382,-0.9,-2.401c-0.008,-0.127,-0.012,-0.253,-0.012,-0.378c0.357,0.19,0.733,0.342,1.14,0.425c1.574,0.319,3.292,-0.922,3.661,-2.433c0.486,-1.992,-1.189,-3.609,-2.644,
                                                            -4.809l0.002,0.002z" fill="url(#paint1_linear_lock)"></path>
                                                         <path d="M9.255,7.551c-0.844,-0.716,-1.462,-1.309,-2.286,-2.045c-0.002,0,-0.004,-0.004,-0.006,-0.006c0,0,-0.004,0.004,-0.006,0.006c-0.824,0.736,-1.44,1.329,-2.284,2.047c-0.919,0.782,-1.94,1.769,-2.214,2.943c-0.115,0.021,-0.914,0.044,-0.914,0.044l0.887,0.083c-0.039,0.206,-0.055,0.418,-0.041,0.638c0.087,-1.371,1.25,-2.507,2.282,-3.384c0.844,-0.718,1.462,-1.313,2.284,-2.047c0.002,-0.002,0.004,-0.004,0.006,-0.006c0.002,0,0.004,0.004,0.006,0.004c0.824,0.734,1.442,1.329,2.286,2.045c1.034,0.879,2.198,2.013,2.286,3.386c0.093,-1.517,-1.173,-2.761,-2.286,-3.708z" fill="#9040C9"></path>
                                                      </svg>
                                                   </g>
                                                </g>
                                                <g filter="url(#filter_lock)">
                                                   <svg x="272" y="9" id="heart_box">
                                                      <path d="M7,6c-0.19,-0.002,-0.377,0.052,-0.534,0.154c-0.158,0.103,-0.278,0.25,-0.346,0.42c-0.069,0.171,-0.081,0.357,-0.035,0.535c0.046,0.177,0.147,0.337,0.29,0.457v0.834c0,0.159,0.066,0.312,0.183,0.424c0.117,0.113,0.276,0.176,0.442,0.176c0.166,0,0.325,-0.063,0.442,-0.176c0.117,-0.112,0.183,-0.265,0.183,-0.424v-0.834c0.143,-0.12,0.244,-0.28,0.29,-0.457c0.046,-0.178,0.034,-0.364,-0.035,-0.535c-0.068,-0.17,-0.188,-0.317,-0.346,-0.42c-0.157,-0.102,-0.344,-0.156,-0.534,-0.154zm3.125,-2.4v-1.2c0,-0.796,-0.329,-1.559,-0.915,-2.121c-0.586,-0.563,-1.381,-0.879,-2.21,-0.879c-0.829,0,-1.624,0.316,-2.21,0.879c-0.586,0.562,-0.915,1.325,-0.915,2.121v1.2c-0.497,0,-0.974,0.19,-1.326,0.527c-0.351,0.338,-0.549,0.796,-0.549,1.273v4.2c0,0.477,0.198,0.935,0.549,1.273c0.352,0.337,0.829,0.527,1.326,0.527h6.25c0.497,0,0.974,-0.19,1.326,-0.527c0.351,-0.338,0.549,-0.796,0.549,-1.273v-4.2c0,-0.477,-0.198,-0.935,-0.549,-1.273c-0.352,-0.337,-0.829,-0.527,-1.326,-0.527zm-5,-1.2c0,-0.477,0.198,-0.935,0.549,-1.273c0.352,-0.337,0.829,-0.527,1.326,-0.527c0.497,0,0.974,0.19,1.326,0.527c0.351,0.338,0.549,0.796,0.549,1.273v1.2h-3.75v-1.2zm5.625,7.2c0,0.159,-0.066,0.312,-0.183,0.424c-0.117,0.113,-0.276,0.176,-0.442,0.176h-6.25c-0.166,0,-0.325,-0.063,-0.442,-0.176c-0.117,-0.112,-0.183,-0.265,-0.183,-0.424v-4.2c0,-0.159,0.066,-0.312,0.183,-0.424c0.117,-0.113,0.276,-0.176,0.442,-0.176h6.25c0.166,0,0.325,0.063,0.442,0.176c0.117,0.112,0.183,0.265,0.183,0.424v4.2z" fill="white"></path>
                                                   </svg>
                                                </g>
                                                <defs>
                                                   <filter id="filter_current_level" x="-8" y="4" width="21" height="21" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                      <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                                      <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                                                      <feGaussianBlur stdDeviation="2" result="effect1_foregroundBlur_305_23"></feGaussianBlur>
                                                   </filter>
                                                   <filter id="filter_heart_ball" x="264" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                      <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                                      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                                      <feOffset></feOffset>
                                                      <feGaussianBlur stdDeviation="2"></feGaussianBlur>
                                                      <feComposite in2="hardAlpha" operator="out"></feComposite>
                                                      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></feColorMatrix>
                                                      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_305_23"></feBlend>
                                                      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_305_23" result="shape"></feBlend>
                                                   </filter>
                                                   <filter id="filter_ball" x="268" y="4" width="20" height="21" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                      <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                                      <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                                                      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                                      <feOffset dy="1"></feOffset>
                                                      <feGaussianBlur stdDeviation="1"></feGaussianBlur>
                                                      <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"></feComposite>
                                                      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.55 0"></feColorMatrix>
                                                      <feBlend mode="normal" in2="shape" result="effect1_innerShadow_305_23"></feBlend>
                                                   </filter>
                                                   <filter id="filter_heart" x="270" y="5.72727" width="14.7271" height="15.6364" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                      <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                                      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                                      <feOffset></feOffset>
                                                      <feGaussianBlur stdDeviation="0.5"></feGaussianBlur>
                                                      <feComposite in2="hardAlpha" operator="out"></feComposite>
                                                      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></feColorMatrix>
                                                      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_305_23"></feBlend>
                                                      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_305_23" result="shape"></feBlend>
                                                   </filter>
                                                   <filter id="filter_lock" x="272" y="7" width="12" height="14" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                      <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                                      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                                      <feOffset></feOffset>
                                                      <feGaussianBlur stdDeviation="0.5"></feGaussianBlur>
                                                      <feComposite in2="hardAlpha" operator="out"></feComposite>
                                                      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></feColorMatrix>
                                                      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_305_23"></feBlend>
                                                      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_305_23" result="shape"></feBlend>
                                                   </filter>
                                                   <linearGradient id="paint0_linear_ball" x1="272" y1="6" x2="283.2" y2="22.6" gradientUnits="userSpaceOnUse">
                                                      <stop stop-color="#946AD7"></stop>
                                                      <stop offset="1" stop-color="#EFABEB"></stop>
                                                   </linearGradient>
                                                   <linearGradient id="paint1_linear_lock" x1="278" y1="18.4056" x2="278" y2="10.2845" gradientUnits="userSpaceOnUse">
                                                      <stop stop-color="#814FD6"></stop>
                                                      <stop offset="1" stop-color="#D679D8"></stop>
                                                   </linearGradient>
                                                </defs>
                                             </svg>
                                          </span>
                                          <div class="Row NextLevelTip">Need 25000.00 to reach Bronz</div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <style>:host {
                           display: block;
                           width: 360px;
                           height: 230px;
                           }

                           .ElevateCardWrapper {
                           contain: layout inline-size;
                           width: 100%;
                           height: fit-content;
                           min-height: 218px;
                           }

                           .Outer {
                           container-type: inline-size;
                           font-size: 12px;
                           background-size: cover;
                           background-repeat: no-repeat;
                           line-height: initial;
                           width: 100%;
                           height: 100%;
                           }

                           .Dark {
                           color: var(--emfe-w-color-gray150, #efefef);
                           }

                           .Light {
                           color: var(--emfe-w-color-black, #0e0e0e);
                           }

                           @container (min-width: 381px) {
                           .Outer {
                              background-size: cover;
                           }
                           .Outer .OuterCover {
                              min-height: 190px;
                           }
                           }
                           @container (min-width: 260px) {
                           .Outer {
                              background-size: contain;
                           }
                           }
                           .OuterCover {
                           width: 100%;
                           height: 100%;
                           content: "";
                           background-repeat: no-repeat;
                           background-size: cover;
                           border-radius: 15px;
                           }

                           .Inner {
                           display: flex;
                           flex-direction: column;
                           min-height: 158px;
                           }
                           .Inner .Content {
                           padding: 15px;
                           flex-wrap: wrap;
                           gap: 8px;
                           }
                           .Inner .Row {
                           display: flex;
                           flex-direction: row;
                           }
                           .Inner .CardCell {
                           display: flex;
                           }
                           .Inner .LevelProgress svg {
                           transition: opacity 0.4s;
                           }
                           .Inner .LevelInfo {
                           display: flex;
                           flex-direction: column;
                           }
                           .Inner .LevelInfo .ElevateLevel .LevelName {
                           height: 28px;
                           border-radius: 5px;
                           line-height: 28px;
                           overflow: hidden;
                           text-overflow: ellipsis;
                           white-space: nowrap;
                           }
                           .Inner .LevelInfo.Level0 .ElevateLevel .LevelName {
                           box-shadow: -2px -2px 7px 0px var(--emfe-w-elevate-color-level0button-shadow, rgba(191, 84, 6, 0.75));
                           background: linear-gradient(180deg, var(--emfe-w-elevate-color-level0-bg0, #E2792C) 0%, var(--emfe-w-elevate-color-level0-bg1, rgba(242, 151, 99, 0)) 100%);
                           }
                           .Inner .LevelInfo.Level1 .ElevateLevel .LevelName {
                           box-shadow: -2px -2px 7px 0px var(--emfe-w-elevate-color-level1button-shadow, rgba(151, 151, 151, 0.75));
                           background: linear-gradient(180deg, var(--emfe-w-elevate-color-level1-bg0, #BEBFED) 0%, var(--emfe-w-elevate-color-level1-bg1, rgba(216, 217, 233, 0)) 100%);
                           }
                           .Inner .LevelInfo.Level2 .ElevateLevel .LevelName {
                           box-shadow: -2px -2px 7px 0px var(--emfe-w-elevate-color-level2button-shadow, rgba(191, 120, 6, 0.75));
                           background: linear-gradient(180deg, var(--emfe-w-elevate-color-level2-bg0, #FCC410) 0%, var(--emfe-w-elevate-color-level2-bg1, rgba(255, 189, 43, 0)) 100%);
                           }
                           .Inner .LevelInfo.Level3 .ElevateLevel .LevelName {
                           box-shadow: -2px -2px 7px 0px var(--emfe-w-elevate-color-level3button-shadow, rgba(65, 6, 191, 0.75));
                           background: linear-gradient(180deg, var(--emfe-w-elevate-color-level3-bg0, #B1A2DB) 0%, var(--emfe-w-elevate-color-level3-bg1, rgba(203, 202, 245, 0)) 100%);
                           }
                           .Inner .LevelInfo.Level4 .ElevateLevel .LevelName {
                           box-shadow: -2px -2px 7px 0px var(--emfe-w-elevate-color-level4button-shadow, rgba(65, 6, 191, 0.75));
                           background: linear-gradient(180deg, var(--emfe-w-elevate-color-level4-bg0, #B1A2DB) 0%, var(--emfe-w-elevate-color-level4-bg1, rgba(203, 202, 245, 0)) 100%);
                           }
                           .Inner .LevelInfo .ElevateLevel {
                           display: flex;
                           }
                           .Inner .LevelInfo {
                           flex: 1;
                           flex-grow: 1;
                           min-width: 150px;
                           }
                           .Inner .PlayerImg {
                           width: 29%;
                           margin: auto;
                           max-width: 100px;
                           min-width: 30px;
                           order: 0;
                           }
                           .Inner .PlayerAvatar {
                           max-width: 100px;
                           flex-basis: 100px;
                           height: auto;
                           margin: auto;
                           padding-top: 10px;
                           }
                           .Inner .PlayerAvatar .Avatar, .Inner .PlayerAvatar .Badge {
                           width: 100%;
                           height: 100%;
                           }
                           .Inner .PlayerAvatar .Avatar {
                           border-radius: 50%;
                           background-size: contain;
                           background-repeat: no-repeat;
                           }
                           .Inner .ElevateLevel .ExpirationDate {
                           max-width: 138px;
                           min-width: 118px;
                           }
                           .Inner .PlayerName, .Inner .RedeemButton, .Inner .ElevateLevel {
                           text-transform: capitalize;
                           width: 100%;
                           }
                           .Inner .PlayerName {
                           font-size: 16px;
                           }
                           .Inner .Row .PointsInfo {
                           display: table;
                           font-weight: 600;
                           }
                           .Inner .Row .Redeem {
                           justify-content: flex-end;
                           margin-left: auto;
                           }
                           .Inner .Row .Redeem:hover {
                           color: var(--emfe-w-elevate-color-redeem-hover, #00ABA4);
                           cursor: pointer;
                           }
                           .Inner .Row .RedeemButton:hover span {
                           color: var(emfe-w-elevate-color-redeem-text-hover, #f1f1f1);
                           font-weight: bold;
                           }
                           .Inner .Row .RedeemButton {
                           width: 95px;
                           height: 35px;
                           display: flex;
                           align-items: center;
                           border-radius: 10px;
                           background: var(--emfe-w-elevate-color-redeem-bg, linear-gradient(0deg, #26CC37, #26CC37)), linear-gradient(117.99deg, rgba(255, 255, 255, 0.5) 0%, rgba(255, 255, 255, 0) 33.89%), linear-gradient(283.85deg, rgba(255, 255, 255, 0.5) 0%, rgba(255, 255, 255, 0) 33.47%), linear-gradient(268.18deg, rgba(255, 255, 255, 0.6) -17.36%, rgba(239, 239, 239, 0) 15.78%);
                           box-shadow: 0px 4px 4px 0px #00000040;
                           }
                           .Inner .Row .RedeemButton span {
                           color: var(--emfe-w-color-white, #fff);
                           line-height: 18px;
                           font-size: 15px;
                           text-align: center;
                           width: 100%;
                           }
                           .Inner .Row .Points {
                           font-size: large;
                           vertical-align: middle;
                           }
                           .Inner .Row .Points .XP {
                           font-size: x-small;
                           }
                           .Inner .Row .ExpirationPoints {
                           font-size: small;
                           text-align: right;
                           font-weight: bold;
                           color: var(--emfe-w-color-red, #9e595f);
                           }</style>
                        </player-elevate-loyaltycard>
                     </div>
                  </div>  
                  <a class="ComponentAnchor CTASecondary OperatorHeaderDeposit DepositBtn ComponentButton InstanceDeposit Button OperatorTransferModal InstanceOperatorTransferModalTrigger   Anchor" href="/deposit">
                        <div class="TotalBalanceWrapper">
                           <p class="ComponentText InstanceOperatorCasinoBalance Text">Toplam Bakiyeniz</p>
                           <span class="Currency"><span class="FormattedAmount"><?=$us['balance']?></span><span class="CurrencyPlaceholder"> ₺</span></span>
                        </div>
                        <span class="PlusIcon">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                              <g transform="translate(0 -952.362)">
                                 <path d="M50 952.4c-3.6 0-6.6 2.9-6.6 6.6v36.8H6.6c-3.6 0-6.6 2.9-6.6 6.6 0 3.6 2.9 6.6 6.6 6.6h36.8v36.8c0 3.6 2.9 6.6 6.6 6.6s6.6-2.9 6.6-6.6V1009h36.8c3.6 0 6.6-2.9 6.6-6.6 0-3.6-2.9-6.6-6.6-6.6H56.6V959c0-3.7-3-6.6-6.6-6.6z"></path>
                              </g>
                           </svg>
                        </span>
                     </a>
                     <a class="ComponentAnchor IosAppPageLinkWrapper Anchor" href="/ios-app">
                        <span class="IosAppPageLinkIcon">
                           <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 814 1000" height="36" width="28">
                              <path d="M788.1 340.9c-5.8 4.5-108.2 62.2-108.2 190.5 0 148.4 130.3 200.9 134.2 202.2-.6 3.2-20.7 71.9-68.7 141.9-42.8 61.6-87.5 123.1-155.5 123.1s-85.5-39.5-164-39.5c-76.5 0-103.7 40.8-165.9 40.8s-105.6-57-155.5-127C46.7 790.7 0 663 0 541.8c0-194.4 126.4-297.5 250.8-297.5 66.1 0 121.2 43.4 162.7 43.4 39.5 0 101.1-46 176.3-46 28.5 0 130.9 2.6 198.3 99.2zm-234-181.5c31.1-36.9 53.1-88.1 53.1-139.3 0-7.1-.6-14.3-1.9-20.1-50.6 1.9-110.8 33.7-147.1 75.8-28.5 32.4-55.1 83.6-55.1 135.5 0 7.8 1.3 15.6 1.9 18.1 3.2.6 8.4 1.3 13.6 1.3 45.4 0 102.5-30.4 135.5-71.3z" fill="currentColor"></path>
                           </svg>
                        </span>
                     </a>
                     <a class="ComponentAnchor WhatsappIconWrapper Anchor" href="https://storage.googleapis.com/stateless-jojobet/2024/12/073fe9f3-jojobet-release-1.0.5.apk">
                        <span class="CallIcon">
                           <svg fill="currentColor" height="800px" width="800px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 299.679 299.679" xml:space="preserve">
                              <g id="XMLID_197_">
                                 <path id="XMLID_221_" d="M181.122,299.679c10.02,0,18.758-8.738,18.758-18.758v-43.808h12.525c7.516,0,12.525-5.011,12.525-12.525 V99.466H74.749v125.123c0,7.515,5.01,12.525,12.525,12.525H99.8v43.808c0,10.02,8.736,18.758,18.758,18.758 c10.019,0,18.756-8.738,18.756-18.758v-43.808h25.051v43.808C162.364,290.941,171.102,299.679,181.122,299.679z"></path>
                                 <path id="XMLID_222_" d="M256.214,224.589c10.02,0,18.756-8.737,18.756-18.758v-87.615c0-9.967-8.736-18.75-18.756-18.75 c-10.021,0-18.758,8.783-18.758,18.75v87.615C237.456,215.851,246.192,224.589,256.214,224.589z"></path>
                                 <path id="XMLID_223_" d="M43.466,224.589c10.021,0,18.758-8.737,18.758-18.758v-87.615c0-9.967-8.736-18.75-18.758-18.75 c-10.02,0-18.756,8.783-18.756,18.75v87.615C24.71,215.851,33.446,224.589,43.466,224.589z"></path>
                                 <path id="XMLID_224_" d="M209.899,1.89c-2.504-2.52-6.232-2.52-8.736,0l-16.799,16.743l-0.775,0.774 c-9.961-4.988-21.129-7.479-33.566-7.503c-0.061,0-0.121-0.002-0.182-0.002h-0.002c-0.063,0-0.121,0.002-0.184,0.002 c-12.436,0.024-23.604,2.515-33.564,7.503l-0.777-0.774L98.516,1.89c-2.506-2.52-6.232-2.52-8.736,0 c-2.506,2.506-2.506,6.225,0,8.729l16.25,16.253c-5.236,3.496-9.984,7.774-14.113,12.667C82.032,51.256,75.727,66.505,74.86,83.027 c-0.008,0.172-0.025,0.342-0.033,0.514c-0.053,1.125-0.078,2.256-0.078,3.391H224.93c0-1.135-0.027-2.266-0.078-3.391 c-0.008-0.172-0.025-0.342-0.035-0.514c-0.865-16.522-7.172-31.772-17.057-43.487c-4.127-4.893-8.877-9.171-14.113-12.667 l16.252-16.253C212.405,8.115,212.405,4.396,209.899,1.89z M118.534,65.063c-5.182,0-9.383-4.201-9.383-9.383 c0-5.182,4.201-9.383,9.383-9.383c5.182,0,9.383,4.201,9.383,9.383C127.917,60.862,123.716,65.063,118.534,65.063z M181.145,65.063 c-5.182,0-9.383-4.201-9.383-9.383c0-5.182,4.201-9.383,9.383-9.383c5.182,0,9.383,4.201,9.383,9.383 C190.528,60.862,186.327,65.063,181.145,65.063z"></path>
                              </g>
                           </svg>
                        </span>
                     </a>
                     <div class="ContentTriggerContainer">
                        <div class="InstanceToggleMenu ContentTriggerWrapper ComponentContentTrigger Prerender">
                           <button class="ToggleUserMenu ComponentButton InstanceOperatorShowusermenuButton ContentTrigger Button" onclick="openUserMenu()" type="button">
                              <span class="ComponentIcon InstanceUserIcon ButtonIconStart Icon">
                                 <span class="SvgIcon MainIcon CustomHtml">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                       <path d="M8.57 14.098A6.83 6.83 0 1118.63 8.08a6.83 6.83 0 01-3.47 5.946c5.084.87 8.03 3.96 8.03 8.25h-1.5c0-4.195-3.43-6.998-9.63-6.998-6.2 0-9.628 2.803-9.628 6.998h-1.5c0-4.18 2.795-7.218 7.64-8.178zm3.23-.69a5.33 5.33 0 100-10.66 5.33 5.33 0 000 10.66z"></path>
                                    </svg>
                                 </span>
                              </span>
                           </button>
                           <div class="ContentTriggerContentWrapper">
                              <div class="ContentTriggerContainer">
                                 <div class="MyAccountMenuWrapper">
                                    <div class="MyAccount TopWrapper">
                                       <div class="MyAccount TopInnerWrapper">
                                          <div class="MyAccountMenu UserContainer">
                                             <div class="MyAccountMenuUsername"><?=$us['login']?></div>
                                          </div>
                                          <div class="MyAccountMenu SmsSecurityContainer">
                                             <div class="Info">SMS GÜVENLİĞİ</div>
                                             <div class="toggle-switch"><input type="checkbox" class="toggle-switch-checkbox" id="switch"><label class="toggle-switch-label" for="switch" tabindex="1"><span class="toggle-switch-inner" data-yes="AÇIK" data-no="KAPALI" tabindex="-1"></span><span class="toggle-switch-switch" tabindex="-1"></span></label></div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="MyAccountMenu BalanceContainer">
                                       <div class="BalanceContainerItem">
                                          <div class="BalanceWrapper">
                                             <p class="GameChips ComponentText InstanceOperatorMenuCasinochips Text">Bakiyeniz</p>
                                             <span class="Currency"><span class="FormattedAmount"><?=$us['balance']?></span><span class="CurrencyPlaceholder"> ₺</span></span>
                                          </div>
                                       </div>
                                       <div class="BalanceContainerItem">
                                          <div class="TotalBonusesWrapper">
                                             <p class="ComponentText InstanceOperatorTotalBonuses Text">Bonus Bakiyeniz</p>
                                             <span class="Currency"><span class="FormattedAmount">0,00</span><span class="CurrencyPlaceholder"> ₺</span></span>
                                          </div>
                                       </div>
                                       <div class="BalanceContainerItem">
                                          <div class="TotalBalanceWrapper">
                                             <p class="ComponentText InstanceOperatorCasinoBalance Text">Toplam Bakiyeniz</p>
                                             <span class="Currency"><span class="FormattedAmount"><?=$us['balance']?></span><span class="CurrencyPlaceholder"> ₺</span></span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="MyAccountMenu GamificationControls">
                                       <a class="ComponentAnchor GamificationButton Anchor" href="/level">
                                          <span class="SvgIcon">
                                             <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9 19.1662L4.5145 21.8575C4.18522 22.0551 3.7719 22.0467 3.45096 21.8358C3.13002 21.625 2.95815 21.249 3.00871 20.8684L3.84201 14.5945L3.65067 14.1326C3.5976 14.0042 3.49529 13.902 3.36713 13.8486L2.05905 13.3067C1.44075 13.0506 0.949461 12.5595 0.693155 11.9413C0.43685 11.323 0.436757 10.6277 0.692444 10.0093L1.23401 8.70177C1.28698 8.57332 1.28683 8.42908 1.23358 8.30074L0.692143 6.9898C0.565342 6.68366 0.500053 6.35554 0.5 6.02417C0.499947 5.69251 0.565242 5.3641 0.692158 5.05768C0.819073 4.75127 1.00512 4.47287 1.23967 4.23839C1.47414 4.00398 1.75279 3.81793 2.05912 3.69111L3.36735 3.1492C3.49556 3.09619 3.59776 2.99401 3.65119 2.86597L4.19275 1.55847C4.44896 0.939895 4.9404 0.448431 5.55897 0.192203C6.17754 -0.0640268 6.87256 -0.0640268 7.49113 0.192203L8.09848 0.443785L8.7985 0.732504L8.80048 0.733324C8.86572 0.760395 8.93506 0.773742 9.00435 0.773362C9.07073 0.772626 9.13701 0.759293 9.19952 0.733354L9.2015 0.732534L9.86728 0.457937L10.5089 0.192172C11.1274 -0.0640574 11.8225 -0.0640574 12.441 0.192172C13.0596 0.448401 13.551 0.939865 13.8072 1.55844L14.3488 2.86594C14.4022 2.99398 14.5044 3.09616 14.6326 3.14917L15.9409 3.69108C16.2472 3.8179 16.5259 4.00395 16.7603 4.23836C16.9949 4.47284 17.1809 4.75124 17.3078 5.05765C17.4348 5.36407 17.5001 5.69248 17.5 6.02413C17.4999 6.35551 17.4347 6.68363 17.3079 6.98977L16.7664 8.30071C16.7132 8.42905 16.713 8.57329 16.766 8.70174L17.3076 10.0092C17.5632 10.6277 17.5632 11.323 17.3068 11.9412C17.0505 12.5594 16.5592 13.0506 15.9409 13.3067L14.6329 13.8486C14.5047 13.9019 14.4024 14.0042 14.3493 14.1325L14.158 14.5945L14.9913 20.8683C15.0419 21.249 14.87 21.625 14.549 21.8358C14.2281 22.0466 13.8148 22.0551 13.4855 21.8575L9 19.1662ZM9.02619 2.77325C8.68932 2.77694 8.35189 2.71322 8.0345 2.58208L6.72574 2.03995C6.59724 1.98672 6.45286 1.98672 6.32436 2.03995C6.19586 2.09318 6.09376 2.19528 6.04052 2.32381L5.49777 3.63417C5.24099 4.25141 4.74988 4.74159 4.13217 4.99719L2.82422 5.53898C2.76056 5.56533 2.70241 5.60409 2.65368 5.6528C2.60495 5.70152 2.5663 5.75936 2.53993 5.82303C2.51356 5.88669 2.49999 5.95493 2.5 6.02384C2.50001 6.09276 2.5136 6.161 2.53999 6.22465L2.5405 6.22588L3.08087 7.53425C3.33702 8.15223 3.33778 8.8475 3.08232 9.4658L2.54047 10.774C2.48742 10.9025 2.48744 11.0469 2.54067 11.1753C2.59392 11.3038 2.696 11.4058 2.82444 11.459L4.13333 12.0012C4.75128 12.2578 5.24287 12.7496 5.49867 13.3678L5.78595 14.0614C5.79078 14.0725 5.79542 14.0837 5.79985 14.0949L6.04076 14.6766C6.09405 14.8048 6.19615 14.907 6.32447 14.9601C6.45283 15.0133 6.59704 15.0133 6.72544 14.9603L8 14.4331L8.03516 14.4178C8.3561 14.2852 8.6977 14.2216 9.03848 14.2269C9.3536 14.2316 9.66806 14.2952 9.96484 14.4179L11.2746 14.9602C11.403 15.0133 11.5472 15.0132 11.6755 14.9601C11.8038 14.9069 11.9059 14.8048 11.9592 14.6765L12.2001 14.0949C12.2046 14.0836 12.2092 14.0724 12.2141 14.0613L12.5013 13.3678C12.7571 12.7495 13.2487 12.2578 13.8667 12.0011L15.1756 11.459C15.304 11.4058 15.4061 11.3037 15.4593 11.1753C15.5126 11.0469 15.5126 10.9024 15.4595 10.774L14.9177 9.46577C14.6622 8.84747 14.663 8.1522 14.9191 7.53421L15.46 6.22462C15.4864 6.16096 15.5 6.09273 15.5 6.02381C15.5 5.9549 15.4864 5.88666 15.4601 5.823C15.4337 5.75933 15.395 5.70149 15.3463 5.65277C15.2976 5.60406 15.2394 5.5653 15.1758 5.53895L13.8678 4.99716C13.2501 4.74156 12.759 4.25138 12.5022 3.63414L11.9595 2.32378C11.9062 2.19525 11.8041 2.09315 11.6756 2.03992C11.5471 1.98669 11.4028 1.98669 11.2743 2.03992L9.9655 2.58205C9.66456 2.70639 9.3456 2.77012 9.02619 2.77325ZM9.00959 16.2267C8.93832 16.2255 8.86686 16.2388 8.79983 16.2666L7.4899 16.8084C6.87373 17.0632 6.18177 17.0639 5.56525 16.8104L5.26444 19.0752L8.07391 17.3895L8.10297 17.3718C8.2083 17.3072 8.42671 17.1732 8.67827 17.118C8.89023 17.0715 9.10977 17.0715 9.32173 17.118C9.57329 17.1732 9.7917 17.3072 9.89703 17.3718L9.92609 17.3895L12.7356 19.0751L12.4347 16.8104C11.8182 17.0638 11.1263 17.0632 10.5101 16.8084L9.20017 16.2665C9.13916 16.2412 9.07447 16.2279 9.00959 16.2267Z"></path>
                                             </svg>
                                          </span>
                                          My Level
                                       </a>
                                       <a class="ComponentAnchor GamificationButton Anchor" href="/shop">
                                          <span class="SvgIcon">
                                             <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.46429 2.19354C7.21442 2.19354 6.97106 2.2977 6.78878 2.48928C6.6059 2.6815 6.50001 2.94609 6.50001 3.2258C6.50001 3.50552 6.6059 3.77011 6.78878 3.96232C6.97106 4.15391 7.21442 4.25806 7.46429 4.25806H9.63425C9.56187 4.08118 9.47857 3.89797 9.38356 3.7164C8.89769 2.78793 8.27398 2.19354 7.46429 2.19354ZM10 6.32258V9.41935L2.60001 9.41935C2.30348 9.41935 2.14122 9.41855 2.02464 9.40871C2.02 9.40832 2.0156 9.40793 2.01145 9.40753C2.01107 9.40325 2.01069 9.39871 2.01031 9.39392C2.00078 9.27358 2.00001 9.10609 2.00001 8.8V6.94193C2.00001 6.63584 2.00078 6.46835 2.01031 6.348C2.01069 6.34321 2.01107 6.33868 2.01145 6.33439C2.0156 6.334 2.02 6.3336 2.02464 6.33321C2.14122 6.32338 2.30348 6.32258 2.60001 6.32258H10ZM4.66953 4.25806C4.55822 3.92911 4.50001 3.58027 4.50001 3.2258C4.50001 2.41043 4.80802 1.62479 5.36188 1.04266C5.91635 0.459899 6.67224 0.129028 7.46429 0.129028C9.259 0.129028 10.3725 1.38679 11 2.47456C11.6275 1.38679 12.741 0.129028 14.5357 0.129028C15.3278 0.129028 16.0837 0.459899 16.6381 1.04266C17.192 1.62479 17.5 2.41043 17.5 3.2258C17.5 3.58027 17.4418 3.92911 17.3305 4.25806L19.4319 4.25806C19.6843 4.25803 19.9301 4.258 20.1382 4.27555C20.3668 4.29483 20.6366 4.34032 20.908 4.48308C21.2843 4.68101 21.5903 4.99684 21.782 5.38531C21.9203 5.66549 21.9644 5.94392 21.9831 6.17989C22.0001 6.39476 22 6.64847 22 6.90899V8.83294C22 9.09346 22.0001 9.34717 21.9831 9.56204C21.9644 9.79801 21.9203 10.0764 21.782 10.3566C21.5903 10.7451 21.2843 11.0609 20.908 11.2588C20.6366 11.4016 20.3668 11.4471 20.1382 11.4664C20.0938 11.4701 20.0476 11.4731 20 11.4754V18.543C20 19.0872 20 19.5566 19.9694 19.9433C19.9371 20.3513 19.8658 20.7573 19.673 21.1478C19.3854 21.7305 18.9265 22.2043 18.362 22.5012C17.9836 22.7002 17.5904 22.7738 17.195 22.8071C16.8205 22.8387 16.3657 22.8387 15.8386 22.8387H11.0014C11.0009 22.8387 11.0005 22.8387 11 22.8387C10.9995 22.8387 10.9991 22.8387 10.9986 22.8387H6.16144C5.6343 22.8387 5.17954 22.8387 4.80498 22.8071C4.40963 22.7738 4.01641 22.7002 3.63803 22.5012C3.07355 22.2043 2.6146 21.7305 2.32699 21.1478C2.13419 20.7572 2.06288 20.3513 2.03057 19.9432C1.99997 19.5566 1.99999 19.0872 2 18.543L2.00001 11.4754C1.95241 11.4731 1.90624 11.4701 1.86178 11.4664C1.63318 11.4471 1.36345 11.4016 1.09202 11.2588C0.715701 11.0609 0.409739 10.7451 0.217992 10.3566C0.0796947 10.0764 0.0356271 9.79801 0.0169504 9.56204C-5.6861e-05 9.34717 -2.74161e-05 9.09345 2.50544e-06 8.83292L5.24726e-06 6.94193C5.24726e-06 6.93095 3.93595e-06 6.91997 2.62465e-06 6.909C-2.72969e-05 6.64848 -5.67418e-05 6.39476 0.0169505 6.17989C0.0356274 5.94392 0.079695 5.66549 0.217992 5.38531C0.409739 4.99684 0.7157 4.68101 1.09202 4.48308C1.36345 4.34032 1.63318 4.29483 1.86178 4.27555C2.06993 4.258 2.31573 4.25803 2.56811 4.25806C2.57873 4.25806 2.58936 4.25806 2.60001 4.25806H4.66953ZM4.00001 11.4839V18.5032C4.00001 19.0984 4.00078 19.4827 4.02393 19.7751C4.04613 20.0556 4.08381 20.1595 4.109 20.2106C4.20487 20.4048 4.35785 20.5627 4.54601 20.6617C4.59546 20.6877 4.69618 20.7266 4.96784 20.7495C5.25118 20.7734 5.62345 20.7742 6.20001 20.7742H10V11.4839H4.00001ZM12 11.4839V20.7742H15.8C16.3766 20.7742 16.7488 20.7734 17.0322 20.7495C17.3038 20.7266 17.4046 20.6877 17.454 20.6617C17.6422 20.5627 17.7951 20.4048 17.891 20.2106C17.9162 20.1595 17.9539 20.0556 17.9761 19.7751C17.9992 19.4827 18 19.0984 18 18.5032V11.4839H12ZM19.4 9.41935C19.6965 9.41935 19.8588 9.41855 19.9754 9.40871C19.98 9.40832 19.9844 9.40792 19.9886 9.40752C19.9889 9.40324 19.9893 9.39871 19.9897 9.39392C19.9992 9.27358 20 9.10609 20 8.8V6.94193C20 6.63584 19.9992 6.46835 19.9897 6.34801C19.9893 6.34322 19.9889 6.33868 19.9885 6.33439C19.9844 6.334 19.98 6.3336 19.9754 6.33321C19.8588 6.32338 19.6965 6.32258 19.4 6.32258H12V9.41935H19.4ZM14.5357 4.25806C14.7856 4.25806 15.0289 4.15391 15.2112 3.96232C15.3941 3.77011 15.5 3.50552 15.5 3.2258C15.5 2.94609 15.3941 2.6815 15.2112 2.48928C15.0289 2.2977 14.7856 2.19354 14.5357 2.19354C13.726 2.19354 13.1023 2.78793 12.6165 3.7164C12.5214 3.89797 12.4381 4.08118 12.3658 4.25806H14.5357Z"></path>
                                             </svg>
                                          </span>
                                          Shop
                                       </a>
                                       <a class="ComponentAnchor GamificationButton Anchor" href="/loyalty-history">
                                          <span class="SvgIcon">
                                             <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.2413 4.11648e-07H5.7587C4.95374 -1.19522e-05 4.28937 -2.2158e-05 3.74818 0.0441949C3.18608 0.0901201 2.66937 0.188684 2.18404 0.435975C1.43139 0.819469 0.819469 1.43139 0.435975 2.18404C0.188684 2.66937 0.0901201 3.18608 0.0441949 3.74818C-2.21543e-05 4.28937 -1.19522e-05 4.95372 4.11648e-07 5.75869V16.2413C-1.19522e-05 17.0463 -2.2158e-05 17.7106 0.0441949 18.2518C0.0901201 18.8139 0.188684 19.3306 0.435975 19.816C0.819469 20.5686 1.43139 21.1805 2.18404 21.564C2.66937 21.8113 3.18608 21.9099 3.74818 21.9558C4.28937 22 4.95372 22 5.75868 22H8.5C9.05229 22 9.5 21.5523 9.5 21C9.5 20.4477 9.05229 20 8.5 20H5.8C4.94342 20 4.36113 19.9992 3.91104 19.9624C3.47262 19.9266 3.24842 19.8617 3.09202 19.782C2.7157 19.5903 2.40973 19.2843 2.21799 18.908C2.1383 18.7516 2.07337 18.5274 2.03755 18.089C2.00078 17.6389 2 17.0566 2 16.2V5.8C2 4.94342 2.00078 4.36113 2.03755 3.91104C2.07337 3.47262 2.1383 3.24842 2.21799 3.09202C2.40973 2.7157 2.7157 2.40973 3.09202 2.21799C3.24842 2.1383 3.47262 2.07337 3.91104 2.03755C4.36113 2.00078 4.94342 2 5.8 2H12.2C13.0566 2 13.6389 2.00078 14.089 2.03755C14.5274 2.07337 14.7516 2.1383 14.908 2.21799C15.2843 2.40973 15.5903 2.7157 15.782 3.09202C15.8617 3.24842 15.9266 3.47262 15.9624 3.91104C15.9992 4.36113 16 4.94342 16 5.8V9.5C16 10.0523 16.4477 10.5 17 10.5C17.5523 10.5 18 10.0523 18 9.5V5.75868C18 4.95372 18 4.28937 17.9558 3.74818C17.9099 3.18608 17.8113 2.66937 17.564 2.18404C17.1805 1.43139 16.5686 0.819469 15.816 0.435975C15.3306 0.188684 14.8139 0.0901201 14.2518 0.0441949C13.7106 -2.21543e-05 13.0463 -1.19522e-05 12.2413 4.11648e-07Z"></path>
                                                <path d="M5 5C4.44772 5 4 5.44772 4 6C4 6.55229 4.44772 7 5 7H13C13.5523 7 14 6.55229 14 6C14 5.44772 13.5523 5 13 5H5Z"></path>
                                                <path d="M5 9C4.44772 9 4 9.44772 4 10C4 10.5523 4.44772 11 5 11H11C11.5523 11 12 10.5523 12 10C12 9.44772 11.5523 9 11 9H5Z"></path>
                                                <path d="M5 13C4.44772 13 4 13.4477 4 14C4 14.5523 4.44772 15 5 15H7C7.55229 15 8 14.5523 8 14C8 13.4477 7.55229 13 7 13H5Z"></path>
                                                <path d="M16.8333 15.9333C16.8333 15.381 16.3856 14.9333 15.8333 14.9333C15.281 14.9333 14.8333 15.381 14.8333 15.9333V17.8333C14.8333 18.2121 15.0473 18.5584 15.3861 18.7278L17.3194 19.6944C17.8134 19.9414 18.4141 19.7412 18.6611 19.2472C18.9081 18.7532 18.7079 18.1526 18.2139 17.9056L16.8333 17.2153V15.9333Z"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.8333 12C12.6117 12 10 14.6117 10 17.8333C10 21.055 12.6117 23.6667 15.8333 23.6667C19.055 23.6667 21.6667 21.055 21.6667 17.8333C21.6667 14.6117 19.055 12 15.8333 12ZM12 17.8333C12 15.7162 13.7162 14 15.8333 14C17.9504 14 19.6667 15.7162 19.6667 17.8333C19.6667 19.9504 17.9504 21.6667 15.8333 21.6667C13.7162 21.6667 12 19.9504 12 17.8333Z"></path>
                                             </svg>
                                          </span>
                                          Loyalty History
                                       </a>
                                    </div>
                                    <ul class="MyAccountMenu LinksContainer">
                                       <li class="MenuItem ListItem">
                                          <a class="ComponentAnchor MyAccountMenuLink Anchor" href="/deposit">
                                             <span class="MenuItemImg">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve" alt="">
                                                   <style type="text/css">
                                                      .st0{fill:none;stroke:#00D5C8;stroke-width:1.44;stroke-linecap:round;stroke-linejoin:round;}
                                                   </style>
                                                   <g id="Para_Yatır">
                                                      <path class="st0" d="M22.6,24v66.7c0,3.5,2.8,6.2,6.2,6.2h42.5c3.5,0,6.2-2.8,6.2-6.2V24"></path>
                                                      <line class="st0" x1="32.1" y1="88.1" x2="32.1" y2="81.1"></line>
                                                      <line class="st0" x1="32.1" y1="72.5" x2="32.1" y2="63.8"></line>
                                                      <polyline class="st0" points="54.3,22.6 54.3,96.9 64.4,96.9 64.4,22.2  "></polyline>
                                                      <path class="st0" d="M79.1,33.8h3.6c1.7,0,3.1-1.4,3.1-3.1v-6.4c0-1.7-1.4-3.1-3.1-3.1H17.3c-1.7,0-3.1,1.4-3.1,3.1v6.6   c0,1.7,1.4,3,3.1,3.1h3.6"></path>
                                                      <path class="st0" d="M20.9,49.9H5.8c-2.2,0-4-1.8-4-4V7.1c0-2.2,1.8-4,4-4h88.4c2.2,0,4,1.8,4,4v38.8c0,2.2-1.8,3.9-4,4H79.1"></path>
                                                   </g>
                                                </svg>
                                             </span>
                                             <span class="AnchorText">PARA YATIR</span>
                                          </a>
                                       </li>
                                       <li class="MenuItem ListItem">
                                          <a class="ComponentAnchor MyAccountMenuLink Anchor" href="/withdraw">
                                             <span class="MenuItemImg">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve" alt="">
                                                   <style type="text/css">
                                                      .st0{fill:none;stroke:#00D5C8;stroke-width:1.44;stroke-linecap:round;stroke-linejoin:round;}
                                                   </style>
                                                   <g id="Para_Çek">
                                                      <polyline class="st0" points="25.5,20.4 25.5,97.3 74.4,97.3 74.4,20.4  "></polyline>
                                                      <path class="st0" d="M65.5,50c0-6.4-7-11.6-15.6-11.6S34.3,43.5,34.3,50s7,11.6,15.6,11.6S65.5,56.4,65.5,50z"></path>
                                                      <path class="st0" d="M53,26.6c0-1.7-1.4-3.1-3.1-3.1c-1.7,0-3.1,1.4-3.1,3.1c0,1.7,1.4,3.1,3.1,3.1l0,0   C51.6,29.7,52.9,28.2,53,26.6z"></path>
                                                      <path class="st0" d="M74.2,32.5h7.4c1.7,0,2.9-1.4,2.9-2.9v-6.4c0-1.7-1.3-2.9-2.9-2.9H18.2c-1.7,0-2.9,1.3-2.9,2.9v6.4   c0,1.7,1.3,2.9,2.9,2.9h7.4"></path>
                                                      <path class="st0" d="M25.6,48.1H7.1c-2,0-3.8-1.8-3.8-3.8V6.5c0-2.2,1.7-3.8,3.8-3.8h85.9c2.2,0,3.8,1.7,3.8,3.8v37.6   c0,2-1.8,3.8-3.8,3.8H74.2"></path>
                                                   </g>
                                                </svg>
                                             </span>
                                             <span class="AnchorText">PARA ÇEK</span>
                                          </a>
                                       </li>
                                       <li class="MenuItem ListItem">
                                          <a class="ComponentAnchor MyAccountMenuLink Anchor" href="/active-bonuses">
                                             <span class="MenuItemImg">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve" alt="">
                                                   <style type="text/css">
                                                      .st0{fill:none;stroke:#00D5C8;stroke-width:1.44;stroke-linecap:round;stroke-linejoin:round;}
                                                   </style>
                                                   <g id="Aktif_Bonuslar">
                                                      <polygon class="st0" points="12.7,47.9 50.1,97.3 87.4,47.9  "></polygon>
                                                      <polyline class="st0" points="39.2,47.9 37.5,47.9 49.1,91.9 50,95.4 50,95.1 50.1,95.4 50.9,91.9 62.6,47.9  "></polyline>
                                                      <polyline class="st0" points="12.7,47.2 21,31.7 80.3,31.7 87.4,47.2  "></polyline>
                                                      <path class="st0" d="M30,31.7l6.6,14.9c1.3,1.4,0.8,1.4,2,0l6.6-14.9"></path>
                                                      <path class="st0" d="M55,31.7l6.6,14.9c1.3,1.4,0.8,1.4,2,0l6.6-14.8"></path>
                                                      <line class="st0" x1="49.8" y1="4.7" x2="49.8" y2="16.4"></line>
                                                      <line class="st0" x1="24.1" y1="9.2" x2="29" y2="19.7"></line>
                                                      <line class="st0" x1="3.2" y1="22.5" x2="12.2" y2="30"></line>
                                                      <line class="st0" x1="75.6" y1="8.7" x2="70.8" y2="19.2"></line>
                                                      <line class="st0" x1="96.8" y1="21.6" x2="87.8" y2="29.1"></line>
                                                   </g>
                                                </svg>
                                             </span>
                                             <span class="AnchorText">AKTİF BONUSLAR</span>
                                          </a>
                                       </li>
                                       <li class="MenuItem ListItem">
                                          <a class="ComponentAnchor MyAccountMenuLink Anchor" href="/bonus-history">
                                             <span class="MenuItemImg">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve" alt="">
                                                   <style type="text/css">
                                                      .st0{fill:none;stroke:#00D5C8;stroke-width:1.44;stroke-linecap:round;stroke-linejoin:round;}
                                                      .st1{fill:#00D5C8;}
                                                      .st2{fill:none;stroke:#00D5C8;stroke-linecap:round;stroke-linejoin:round;}
                                                   </style>
                                                   <g>
                                                      <polyline class="st0" points="38.7,46.4 36.9,46.4 48.6,89.9 49.3,93.5 49.4,93.2 49.4,93.5 50.3,89.9 61.8,46.4  "></polyline>
                                                      <g>
                                                         <path class="st1" d="M86.4,46.8c-0.4,0-0.6-0.2-0.9-0.5l-6.7-14.7H21.3l-8,14.8c-0.2,0.5-0.7,0.6-1.2,0.4    c-0.5-0.2-0.6-0.7-0.4-1.2l8.2-15.4c0.1-0.2,0.5-0.5,0.7-0.5h58.5c0.4,0,0.6,0.2,0.9,0.5l7,15.2c0.2,0.5,0,1-0.5,1.2    C86.6,46.6,86.5,46.8,86.4,46.8z"></path>
                                                      </g>
                                                      <path class="st0" d="M29.6,30.6l6.5,14.6c1.2,1.3,0.7,1.3,2,0l6.5-14.6"></path>
                                                      <path class="st0" d="M54.2,30.6l6.5,14.6c1.2,1.3,0.7,1.3,2,0l6.5-14.6"></path>
                                                      <line class="st0" x1="49.1" y1="3.8" x2="49.1" y2="15.4"></line>
                                                      <line class="st0" x1="23.7" y1="8.3" x2="28.6" y2="18.7"></line>
                                                      <line class="st0" x1="3.2" y1="21.4" x2="11.9" y2="28.9"></line>
                                                      <line class="st0" x1="74.7" y1="7.8" x2="69.8" y2="18.2"></line>
                                                      <line class="st0" x1="95.5" y1="20.5" x2="86.7" y2="28"></line>
                                                      <path class="st0" d="M79.1,64.9c-0.4,0-0.7,0.4-0.7,0.7l0,0V78c0,0.4,0.4,0.7,0.7,0.7h8.8c0.4,0,0.7-0.4,0.7-0.7s-0.4-0.7-0.7-0.7   h-8V65.6C79.9,65.3,79.6,64.9,79.1,64.9L79.1,64.9z"></path>
                                                      <path class="st1" d="M87.1,46c-0.1-0.2-0.5-0.5-0.7-0.5H12.5c-0.4,0-0.6,0.2-0.7,0.5c-0.1,0.2-0.1,0.6,0.1,1l36.8,48.8   c0.1,0.2,0.4,0.4,0.7,0.4l0,0c0.2,0,0.5-0.1,0.7-0.4l13.2-17.5L62,77.2L49.4,93.7L14.3,47.4h70.2L77,57.3l1.7,0.7l8.3-10.9   C87.2,46.6,87.2,46.4,87.1,46z"></path>
                                                      <path class="st2" d="M79.1,60.5c-6.4,0-12.3,3.4-15.3,9.1V62c0-0.4-0.4-0.7-0.7-0.7l0,0c-0.4,0-0.7,0.2-0.7,0.7l0,0v9.4   c0,0.4,0.2,0.7,0.7,0.7l0,0h9.6c0.4,0,0.7-0.2,0.7-0.7l0,0c0-0.4-0.4-0.7-0.7-0.7l0,0h-7.7c4-7.8,13.7-11,21.6-7s11,13.7,7,21.6   c-2.7,5.4-8.3,8.8-14.3,8.7c-6.7,0-13.2-5.1-15.3-12.1c-0.1-0.4-0.5-0.6-0.9-0.5l0,0c-0.4,0.1-0.6,0.5-0.5,1   c2.3,7.6,9.3,13.1,16.8,13.1c9.7,0,17.5-7.8,17.5-17.5C96.6,68.3,88.8,60.5,79.1,60.5z"></path>
                                                      <path class="st1" d="M63.9,72.1c1,0,1.8-0.9,1.8-1.8s-0.9-1.8-1.8-1.8c-1,0-1.8,0.9-1.8,1.8S62.9,72.1,63.9,72.1z"></path>
                                                   </g>
                                                </svg>
                                             </span>
                                             <span class="AnchorText">GEÇMİŞ BONUSLARIM</span>
                                          </a>
                                       </li>
                                       <li class="MenuItem ListItem">
                                          <a class="ComponentAnchor MyAccountMenuLink Anchor" href="/">
                                             <span class="MenuItemImg">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve" alt="">
                                                   <style type="text/css">
                                                      .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#00D5C8;}
                                                      .st1{fill:#00D5C8;}
                                                   </style>
                                                   <g id="Spor_Geçmişim">
                                                      <path class="st0" d="M63.6,74.8c0.1-0.1,0.3-0.4,0.4-0.5c0.1-0.3-0.3-0.8-0.3-0.9c-0.1-0.1-0.1-0.3-0.3-0.4c-0.1-0.3-0.1-0.5,0-0.8   c0.3-0.5,0.8-0.9,1.3-1c0.4-0.1,0.8-0.3,1.2-0.5c0.7-0.4,1.2-0.9,1.6-1.4c1-1.3,1.8-2.7,2.5-4.2c0.4-0.8,0.7-1.6,0.9-2.5   s0.3-2,0.1-2.9c-0.1-0.9-0.3-1.8-0.5-2.7c-0.1-0.7-0.9-1-1.6-0.9l0,0l-1.4,0.3c-0.4,0.1-0.9,0.1-1.3,0.3c-0.7,0.3-1.3,0.8-1.6,1.4   c-0.4,0.8-0.8,1.6-1.2,2.4c-0.4,0.8-0.8,1.6-1.2,2.2S61.4,64,61,64.8c-0.3,0.4-0.4,0.8-0.4,1.2c0,0.4,0.1,0.9,0.3,1.3   c0.3,0.9,0.5,1.8,0.8,2.7c0.1,0.4,0.3,0.9,0.4,1.3c0.1,0.3,0.3,0.4,0.3,0.5c0.4,0.5,0.4,1.2,0.1,1.7c-0.5,0.5-1.2,1-1.8,1.3   c-0.8,0.5-1.6,1-2.4,1.6c-0.8,0.5-1.7,0.9-2.6,1.3C55,77.9,54,78.3,53.6,79c0,0.1-0.1,0.3-0.1,0.5c0,0.1,0,0.3,0,0.5   c-0.1,0.5-0.9,0.8-1.3,0.9l0,0c-0.7,0.1-1.2,0.3-1.8,0.3c-1.3,0-2.4-0.1-3.7-0.3c-0.7,0-1.2-0.1-1.7-0.1c-1-0.1-2.1-0.4-3-0.8   c-0.5-0.1-0.9-0.4-1.3-0.7c-0.3-0.3-0.3-0.7,0-0.8c0,0,0.1-0.1,0.3-0.1c0.4,0,0.8,0.1,1.2,0.3c1.2,0.4,2.4,0.7,3.5,0.9   c0.9,0.1,1.7,0.3,2.6,0.4c0.5,0,0.9,0,1.4-0.1c0.5,0,0.9-0.4,1-0.8c0.1-0.4-0.3-0.7-0.5-0.9c-0.3-0.3-0.5-0.4-0.8-0.5   c-1.2-0.5-2.4-1.2-3.4-1.8c-0.5-0.4-1-0.7-1.7-0.9c-0.8-0.1-1.6-0.3-2.4-0.3c-1.6-0.1-3-0.3-4.4-0.7c-0.4-0.1-0.8-0.1-1,0   c-0.4,0.1-0.7,0.7-0.5,1l0,0c0.1,0.3,0.4,0.5,0.5,0.8c0.1,0.1,0.5,0.5,0.5,0.9c0,0.4-0.4,0.7-0.8,0.7c-0.3-0.1-0.7-0.3-0.9-0.4   c-1.8-1.2-3.4-2.6-4.7-4.2c-3.5-4-5.6-9.1-5.9-14.5c-0.1-1.6-0.1-3.3,0.1-4.8c0.1-1.4,0.5-2.7,0.9-4.2c1.4-4.8,4.3-9,8.2-12.1   c3-2.5,6.5-4.2,10.3-5c1.6-0.3,3-0.5,4.6-0.5c3.4-0.1,6.7,0.5,9.8,1.7c2.6,1,5,2.5,7.2,4.4c2.1,1.8,3.8,3.9,5.2,6.3   c0.4,0.7,0.7,1.3,1,2c0.1,0.4,0.3,0.8,0.1,1.2c-0.1,0.8-0.8,1.2-0.8,2.1c0,0.7,0.1,1.3,0.3,2c0,0.3,0,0.4,0.1,0.7   c0.1,0.4,0.5,0.5,0.8,0.7s0.1,0.1,0.1,0.1s0.3,0,0.3-0.1c0.3,0,0.5,0.1,0.8,0.3c0.3,0.3,0.4,0.7,0.4,0.9c0.1,0.9,0.1,1.7,0.1,2.6   c0,3.1-0.5,6.3-1.7,9.3c-2.5,5.9-7.1,10.7-12.8,13.3c-0.3,0.1-0.7,0.3-1,0.4c-0.3,0-0.5-0.3-0.7-0.5v-0.1c0-0.3,0.4-0.5,0.7-0.7   c0.3-0.1,0.7-0.3,0.9-0.4c1.2-0.5,2.2-1.2,3.3-2C63.2,75.2,63.5,75.1,63.6,74.8L63.6,74.8z M60.6,36.8c0,0.3,0.3,0.5,0.4,0.7   c0.7,0.8,1.4,1.6,2.4,2.2c0.4,0.3,0.9,0.5,1.4,0.8c0.3,0.1,0.5,0.3,0.9,0.3c0.3-0.1,0.4-0.3,0.4-0.5c0-0.3-0.3-0.4-0.4-0.7   c-0.9-0.9-1.8-1.7-3-2.5c-0.4-0.3-0.8-0.5-1.3-0.8c-0.1,0-0.3,0-0.3,0C60.9,36.3,60.8,36.6,60.6,36.8L60.6,36.8z M43,35   c0-0.3-0.4-0.4-0.7-0.4c-0.7,0-1.3,0.3-2,0.5c-0.7,0.3-1.2,0.5-1.7,0.9c-2.2,1.2-4.2,2.6-5.9,4.6c-0.7,0.7-1.2,1.4-1.7,2.2   c-0.1,0.3-0.3,0.4-0.3,0.7c0,0.3,0.4,0.5,0.7,0.7c0.7,0.1,1.2,0,1.7-0.4c0.5-0.3,1-0.8,1.6-1c1-0.8,2.2-1.4,3.4-2.1   c0.3-0.1,0.7-0.3,0.9-0.5c0.8-0.4,1.4-1,2-1.8c0.4-0.5,0.7-1.2,1-1.7c0.1-0.3,0.4-0.5,0.5-0.8C42.9,35.5,42.9,35.2,43,35z    M48.8,34.9c-0.7,0-1.2,0.1-1.8,0.3c-0.9,0.3-1.7,0.9-2.2,1.6c-0.3,0.4-0.7,0.8-0.9,1.2c-0.3,0.4-0.5,0.8-0.8,1.2   c-0.1,0.4-0.1,0.9,0.1,1.2c0.3,0.4,0.5,0.8,0.9,1c0.7,0.7,1.4,1.3,2.1,2.1c0.5,0.8,1.3,1.3,2.1,1.7c0.4,0,0.7,0,1,0   c0.7,0,1.2,0,1.8,0c0.9,0,1.8,0,2.7,0.1c0.4,0.1,0.8,0.5,0.7,0.9c0,0,0,0,0,0.1c-0.1,0.8-1.3,0.7-2,0.7c-1.3,0.1-2.6,0.4-3.9,0.8   c-0.5,0.4-0.9,0.8-1.2,1.3c-0.7,1.2-1.3,2.4-2,3.5c-0.5,0.9-0.9,1.8-1.3,2.7c-0.1,0.8-0.7,1.4-1.3,2c-0.5,0.1-1,0.3-1.6,0   c-0.8-0.1-1.7-0.3-2.5-0.3h-2.4c-0.8-0.1-1.6-0.1-2.4-0.1c-0.5,0.3-0.9,0.7-1.2,1.2c-0.3,0.7-0.5,1.3-0.9,1.8   c-0.4,0.5-0.5,1.3-0.7,2c-0.3,0.7-0.3,1.4-0.3,2.2c0.1,0.7,0.4,1.3,0.8,1.8c0.7,1.2,1.3,2.4,2.1,3.4c0.7,1,1.6,2,2.7,2.4   c0.7,0.3,1.4,0.4,2.2,0.5s1.6,0.3,2.4,0.4c0.7,0.1,1.4,0.1,2.1-0.1c0.9-0.8,1.7-2,2.1-3.1c0.3-0.7,0.7-1.2,0.9-1.8   c0.3-0.5,0.4-1.3,0.1-1.8c-0.3-0.7-0.5-1.2-0.8-1.8c-0.8-1.6-1.3-2.1-2.1-3.7c-0.3-0.4-0.4-0.8-0.4-1.2c0-0.7,0.5-0.9,1-0.4   c0.1,0.1,0.3,0.4,0.4,0.5c0.5,0.8,0.7,1,1.2,1.7c0.7,1,1,1.7,1.7,2.6c0.5,0.5,1.2,0.9,1.8,1.2c0.9,0.1,1.8,0.3,2.9,0.1   c1,0,2,0,3-0.1c0.5,0,1,0,1.4-0.1c0.4,0,0.8-0.1,1.2-0.3c0.7-0.3,1-0.8,1.4-1.3c0.4-0.7,0.8-1.3,1.2-2c0.4-0.7,0.7-1.4,1-2.1   s0.7-1.4,0.9-2.1c0.1-0.4,0.3-0.8,0.3-1.2c0-0.4-0.1-0.8-0.3-1.2c-0.3-0.7-0.7-1.3-1-2c-0.4-0.7-0.8-1.3-1.2-2   c-0.4-0.7-0.8-1.3-1.2-1.8c-0.3-0.4-0.7-0.7-0.9-1c-0.3-0.4-1.3-0.7-1.4-0.9c-0.1-0.3-0.1-0.7,0-0.9c0.1-0.3,1-0.7,1.6-1   c0.3-0.3,0.5-0.5,0.7-0.9c0.4-0.7,0.8-1.3,1-2c0.5-0.5,0.7-1.3,0.7-2.1C60.4,39,60,38.5,59.5,38c-1-1-2.1-2-3.4-2.7   c-0.7-0.4-1.4-0.7-2.2-0.8c-1-0.1-2-0.1-3,0C50.2,34.7,49.5,34.7,48.8,34.9L48.8,34.9z M61.8,42.3c-0.5,0.8-1,1.7-1.4,2.6   c-0.3,0.4-0.4,0.8-0.4,1.3c0.1,0.7,0.4,1.2,0.8,1.6c1.2,1.6,2.2,3.3,3.1,5c0.1,0.3,0.3,0.5,0.4,0.8c0.3,0.5,0.8,0.8,1.3,0.9   c0.4,0,0.7,0,1-0.1l2.2-0.4c0.8-0.1,1.4-0.5,1.6-1.3c0-0.8,0-1.4-0.1-2.2c0-0.7-0.1-1.4-0.3-2.1c-0.1-1.2-0.7-2.4-1.3-3.4   c-1.2-1.3-2.5-2.4-3.9-3.3c-0.4-0.4-0.9-0.5-1.6-0.5c-0.1,0-0.3,0-0.3,0.1C62.5,41.6,62.2,41.9,61.8,42.3L61.8,42.3z M29.6,46.2   c-0.4,0.4-0.8,0.8-1,1.3c-0.9,2-1.4,3.9-1.7,6c-0.1,1.7-0.1,3.3,0,5c0,0.7,0.1,1.4,0.4,2.1c0.1,0.5,0.5,0.9,1,1.2   c0.5,0.3,0.8-0.3,1-0.7c0.3-0.4,0.4-1,0.5-1.6c0.4-1,0.9-2.1,1.4-3c0.3-0.4,0.4-0.9,0.5-1.4c0-0.7,0-1.2-0.1-1.8   c-0.1-1.3-0.3-2.6-0.3-4c0-0.3,0-0.7,0-0.9c0-0.4,0-0.9-0.1-1.3c-0.3-0.5-0.8-0.8-1.3-0.9C29.8,46.1,29.7,46.2,29.6,46.2L29.6,46.2   z M28,64.4c0,0.1,0,0.4,0.1,0.5c0.1,0.3,0.1,0.4,0.3,0.7c1.2,2.5,2.6,4.7,4.6,6.8c0.1,0.1,0.5,0.7,0.8,0.7s0.3-0.3,0.3-0.3   c0-0.1-0.1-0.4-0.1-0.5c-0.3-0.5-0.7-1.2-1-1.7c-0.8-1.2-1.6-2.4-2.2-3.5c-0.3-0.4-0.4-0.9-0.7-1.3s-0.5-0.7-0.8-1   C29,64.5,28.7,64,28.4,64C28.1,64.1,28,64.2,28,64.4z"></path>
                                                      <path class="st1" d="M92.4,68.1c-0.8,0-1.6-0.7-1.6-1.6v-41c0.1-0.8,0.8-1.4,1.7-1.4c0.8,0.1,1.3,0.7,1.4,1.4v41.1   C93.9,67.5,93.3,68.1,92.4,68.1z"></path>
                                                      <path class="st1" d="M92.4,27.2H7.6c-0.8,0-1.6-0.7-1.6-1.4l0,0V10c0-0.8,0.7-1.6,1.6-1.6l0,0H23c0.8,0,1.6,0.7,1.6,1.6   c0,0.8-0.7,1.6-1.6,1.6H9.2v12.5h81.7V11.6h-7.8c-0.8,0-1.6-0.7-1.6-1.6c0-0.9,0.7-1.6,1.6-1.6l0,0h9.3c0.8,0,1.6,0.7,1.6,1.4   c0,0,0,0,0,0.1v15.5C93.9,26.4,93.3,27.2,92.4,27.2L92.4,27.2z"></path>
                                                      <path class="st1" d="M76.4,11.5H29.3c-0.8,0-1.6-0.7-1.6-1.6s0.7-1.6,1.6-1.6l0,0h47.1C77.2,8.3,78,9,78,9.9   C77.9,10.8,77.2,11.5,76.4,11.5z"></path>
                                                      <path class="st1" d="M69.5,90.3c-0.8,0-1.4-0.8-1.4-1.6c0-0.5,0.3-0.9,0.8-1.2C72.1,86,73,74.5,72.5,67c0-0.4,0.1-0.8,0.4-1.2   c0.3-0.3,0.7-0.5,1-0.5h18.4c0.7,0,1.2,0.4,1.4,0.9c0.3,0.5,0.1,1.2-0.3,1.7L75.1,86.4c-0.5,0.5-1.3,0.7-1.8,0.3   c-0.7,1.4-1.7,2.6-3,3.4C70,90.2,69.8,90.2,69.5,90.3z M75.7,68.1c0.1,2.9,0,5.7-0.1,8.6c-0.1,2-0.4,3.9-0.8,5.9l14.1-14.5H75.7z"></path>
                                                      <path class="st1" d="M59.6,92.8h-52c-0.8,0-1.6-0.7-1.6-1.6l0,0V25.6c0.1-0.8,0.8-1.4,1.7-1.4c0.8,0.1,1.3,0.7,1.4,1.4v64.1h50.5   c5,0,9.8-2,13.4-5.4c0.7-0.5,1.6-0.4,2.1,0.1c0.5,0.5,0.5,1.4,0,2C71,90.6,65.5,92.8,59.6,92.8z"></path>
                                                      <path class="st1" d="M23.3,17.9c-0.8,0-1.6-0.7-1.6-1.6V2.9c0-0.8,0.7-1.6,1.6-1.6c0.9,0,1.6,0.7,1.6,1.6l0,0v13.4   C24.9,17.1,24.2,17.9,23.3,17.9z"></path>
                                                      <path class="st1" d="M76.6,17.9c-0.8,0-1.6-0.7-1.6-1.6l0,0V2.9c0-0.8,0.7-1.6,1.6-1.6c0.8,0,1.6,0.7,1.6,1.6l0,0v13.4   C78.1,17.1,77.5,17.9,76.6,17.9z"></path>
                                                      <path class="st1" d="M92.4,98.7H11.4c-0.8,0-1.6-0.7-1.6-1.6c0-0.8,0.7-1.6,1.6-1.6h79.4V76.4c-0.1-0.8,0.5-1.6,1.4-1.7   c0.9-0.1,1.6,0.5,1.7,1.4c0,0.1,0,0.1,0,0.3v20.9C93.9,98,93.3,98.7,92.4,98.7z"></path>
                                                   </g>
                                                </svg>
                                             </span>
                                             <span class="AnchorText">SPOR GEÇMİŞİM</span>
                                          </a>
                                       </li>
                                       <li class="MenuItem ListItem">
                                          <a class="ComponentAnchor MyAccountMenuLink Anchor" href="//gaming-history">
                                             <span class="MenuItemImg">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve" alt="">
                                                   <style type="text/css">
                                                      .st0{fill:#00D5C8;}
                                                      .st1{fill:none;stroke:#00D5C8;stroke-width:2;stroke-miterlimit:10;}
                                                   </style>
                                                   <g>
                                                      <path class="st0" d="M92.4,68.2c-0.8,0-1.6-0.7-1.6-1.6V25.7c0-0.8,0.7-1.6,1.6-1.6c0.8,0,1.6,0.7,1.6,1.6l0,0v41.1   C93.8,67.5,93.2,68.2,92.4,68.2z"></path>
                                                      <path class="st0" d="M92.4,27.3H7.6c-0.8,0-1.6-0.7-1.6-1.6V10.2c0-0.8,0.7-1.6,1.6-1.6H23c0.8,0,1.6,0.7,1.6,1.6   c0,0.8-0.7,1.6-1.6,1.6H9.2v12.5h81.6V11.7H83c-0.8,0-1.6-0.7-1.6-1.6s0.7-1.6,1.6-1.6l0,0h9.3c0.8,0,1.6,0.7,1.6,1.6l0,0v15.5   C93.8,26.5,93.2,27.1,92.4,27.3z"></path>
                                                      <path class="st0" d="M76.3,11.6H29.3c-0.8,0-1.6-0.7-1.6-1.6c0-0.8,0.7-1.6,1.6-1.6l0,0h47.1c0.8,0,1.6,0.7,1.6,1.6   C77.9,11,77.1,11.6,76.3,11.6z"></path>
                                                      <path class="st0" d="M69.4,90.4c-0.8-0.1-1.4-0.8-1.4-1.7c0-0.5,0.3-0.9,0.7-1.2c3.3-1.6,4.2-13,3.7-20.6c0-0.4,0.1-0.8,0.4-1.2   c0.3-0.3,0.7-0.5,1-0.5h18.4c0.7,0,1.2,0.4,1.4,0.9s0.1,1.2-0.3,1.7L75,86.4c-0.5,0.5-1.3,0.7-1.8,0.3c-0.7,1.4-1.7,2.6-3,3.4   C69.9,90.2,69.7,90.2,69.4,90.4z M75.6,68.2c0.1,2.9,0,5.7-0.3,8.6c-0.1,2-0.4,3.9-0.8,5.9l14.2-14.5H75.6z"></path>
                                                      <path class="st0" d="M59.6,92.8h-52c-0.8,0-1.6-0.7-1.6-1.6V25.7c0.1-0.8,0.8-1.4,1.7-1.4c0.8,0.1,1.3,0.7,1.4,1.4v64h50.5   c5,0,9.8-2,13.3-5.3c0.7-0.5,1.6-0.5,2.1,0c0.5,0.5,0.5,1.6,0,2.1l0,0C70.9,90.5,65.4,92.8,59.6,92.8z"></path>
                                                      <path class="st0" d="M23.4,18c-0.8,0-1.6-0.7-1.6-1.6V3c-0.1-0.8,0.5-1.6,1.4-1.7c0.8-0.1,1.6,0.5,1.7,1.4c0,0.1,0,0.1,0,0.3v13.4   C24.8,17.2,24.2,18,23.4,18L23.4,18z"></path>
                                                      <path class="st0" d="M76.6,18c-0.8,0-1.6-0.7-1.6-1.6V3c-0.1-0.8,0.5-1.6,1.4-1.7c0.9-0.1,1.6,0.5,1.7,1.4c0,0.1,0,0.1,0,0.3v13.4   C78,17.2,77.4,18,76.6,18L76.6,18z"></path>
                                                      <path class="st0" d="M92.4,98.7H11.5c-0.8,0-1.6-0.7-1.6-1.6c0-0.8,0.7-1.6,1.6-1.6h79.3V76.4c0-0.8,0.7-1.6,1.6-1.6   c0.8,0,1.6,0.7,1.6,1.6l0,0v20.9C93.8,98.1,93.2,98.7,92.4,98.7z"></path>
                                                      <path class="st1" d="M41.1,48.2l-11.7-1.2c-0.7,0-1.2,0.3-1.6,0.7l0,0l-9.6,13.6c-0.5,0.5-0.7,1.3-0.4,2l6.8,14.9   c0.3,0.7,0.9,1.2,1.6,1.3l0,0L42.8,81c0.7,0,1.2-0.3,1.6-0.8l8.3-11.7 M30.1,50.5L37.2,64l-9.6,11.3"></path>
                                                      <path class="st1" d="M76.6,41.9l-0.3-0.3l-0.1-0.1l-13.7-9.6c-0.5-0.4-1.2-0.4-1.7-0.1l-15,6.9c-0.7,0.1-1.3,0.8-1.3,1.6l-1.4,16.4   c0,0.1,0,0.1,0,0.3c0,0.1,0,0.3,0,0.3c0,0.1,0,0.3,0.1,0.4c0,0.1,0,0.1,0,0.3c0,0,0,0,0,0.1c0,0.1,0.1,0.1,0.3,0.3   c0.1,0.1,0.1,0.1,0.3,0.3c0,0,0,0,0,0.1l13.7,9.4c0.5,0.4,0.9,0.7,1.4,0.4l15.4-7c0.8-0.4,1.2-0.8,1.3-1.6L77,43c0-0.1,0-0.1,0-0.3   c0-0.1,0-0.3,0-0.4s0-0.3-0.1-0.3C76.9,42.1,76.7,42,76.6,41.9z"></path>
                                                      <polyline class="st1" points="61,35.1 59.4,49.7 46.6,55.3  "></polyline>
                                                      <line class="st1" x1="59.4" y1="49.7" x2="71.5" y2="58.2"></line>
                                                      <line class="st1" x1="37.2" y1="64" x2="45" y2="64"></line>
                                                      <line class="st1" x1="28.1" y1="56.2" x2="28.1" y2="58.8"></line>
                                                      <line class="st1" x1="25.5" y1="66.6" x2="25.5" y2="69.2"></line>
                                                      <line class="st1" x1="51.6" y1="41.9" x2="51.6" y2="44.5"></line>
                                                      <line class="st1" x1="59.4" y1="54.9" x2="59.4" y2="57.5"></line>
                                                      <line class="st1" x1="64.6" y1="58.8" x2="64.6" y2="61.4"></line>
                                                      <line class="st1" x1="59.4" y1="61.4" x2="59.4" y2="64"></line>
                                                      <line class="st1" x1="54.2" y1="57.5" x2="54.2" y2="60.1"></line>
                                                      <line class="st1" x1="64.6" y1="37.9" x2="64.6" y2="40.6"></line>
                                                      <line class="st1" x1="71.1" y1="49.7" x2="71.1" y2="52.3"></line>
                                                   </g>
                                                </svg>
                                             </span>
                                             <span class="AnchorText">OYUN GEÇMİŞİM</span>
                                          </a>
                                       </li>
                                       <li class="MenuItem ListItem">
                                          <a class="ComponentAnchor MyAccountMenuLink Anchor" href="/payment-history">
                                             <span class="MenuItemImg">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve" alt="">
                                                   <style type="text/css">
                                                      .st0{fill:none;stroke:#00D5C8;stroke-width:1.44;stroke-linecap:round;stroke-linejoin:round;}
                                                      .st1{fill:none;stroke:#00D5C8;stroke-width:1.44;stroke-miterlimit:22.93;}
                                                   </style>
                                                   <g id="Hesap_Özeti">
                                                      <path class="st0" d="M50.1,80.8c2.6,0,4.6,2,4.6,4.7s-2,4.7-4.7,4.7c-2.7,0-4.6-2-4.6-4.7S47.4,80.8,50.1,80.8   C49.9,80.8,50.1,80.8,50.1,80.8z"></path>
                                                      <path class="st0" d="M7.8,73.9h84.3c2.6,0,4.6,2,4.6,4.6v13.9c0,2.6-2,4.6-4.6,4.6H7.8c-2.6,0-4.6-2-4.6-4.6V78.5   C3.2,76,5.3,73.9,7.8,73.9z"></path>
                                                      <path class="st1" d="M17.3,60.9c-0.8,0.8-0.8,2,0,2.8s2,0.8,2.8,0c0.8-0.8,0.8-2,0-2.8C19.2,60.1,18.1,60.1,17.3,60.9z"></path>
                                                      <path class="st1" d="M32.7,60.9c-0.8,0.8-0.8,2,0,2.8c0.8,0.8,2,0.8,2.8,0c0.8-0.8,0.8-2,0-2.8C34.6,60.1,33.4,60.1,32.7,60.9z"></path>
                                                      <path class="st1" d="M48.3,60.9c-0.8,0.8-0.8,2,0,2.8c0.8,0.8,2,0.8,2.8,0c0.8-0.8,0.8-2,0-2.8l0,0C50.3,60.1,49,60.1,48.3,60.9z"></path>
                                                      <path class="st1" d="M64,60.9c-0.8,0.8-0.8,2,0,2.8c0.8,0.8,2,0.8,2.8,0c0.8-0.8,0.8-2,0-2.8C66.1,60.1,64.8,60.1,64,60.9z"></path>
                                                      <path class="st1" d="M79.6,60.9c-0.8,0.8-0.8,2,0,2.8c0.8,0.8,2,0.8,2.8,0c0.8-0.8,0.8-2,0-2.8C81.7,60.1,80.4,60.1,79.6,60.9z"></path>
                                                      <path class="st1" d="M17.3,47.8c-0.8,0.8-0.8,2,0,2.8s2,0.8,2.8,0c0.8-0.8,0.8-2,0-2.8C19.2,47.1,18.1,47.1,17.3,47.8z"></path>
                                                      <path class="st1" d="M32.7,47.8c-0.8,0.8-0.8,2,0,2.8c0.8,0.8,2,0.8,2.8,0c0.8-0.8,0.8-2,0-2.8C34.6,47.1,33.4,47.1,32.7,47.8z"></path>
                                                      <path class="st1" d="M48.3,47.8c-0.8,0.8-0.8,2,0,2.8c0.8,0.8,2,0.8,2.8,0c0.8-0.8,0.8-2,0-2.8l0,0C50.3,47.1,49,47.1,48.3,47.8z"></path>
                                                      <path class="st1" d="M64,47.8c-0.8,0.8-0.8,2,0,2.8c0.8,0.8,2,0.8,2.8,0c0.8-0.8,0.8-2,0-2.8C66.1,47.1,64.8,47.1,64,47.8z"></path>
                                                      <path class="st1" d="M79.6,47.8c-0.8,0.8-0.8,2,0,2.8c0.8,0.8,2,0.8,2.8,0c0.8-0.8,0.8-2,0-2.8C81.7,47.1,80.4,47.1,79.6,47.8z"></path>
                                                      <path class="st0" d="M13.5,34.3c0,1.2,1,2.2,2.2,2.2l0,0h24.7c1.2,0,2.2-1,2.2-2.2l0,0c0-9.6,0-19.1,0-28.7l-3.6-2.7l-5.6,3.3   c-0.8,0.5-1.9,0.5-2.7,0l0,0l-5.1-3.3l-5.1,3.2c-0.8,0.5-1.8,0.6-2.6,0.3l0,0l-4.2-2.2L13.5,34.3L13.5,34.3z"></path>
                                                      <path class="st0" d="M53.9,26.7h30.5c1.3,0,2.2,1,2.2,2.2v5c0,1.3-1,2.2-2.2,2.2H53.9c-1.3,0-2.2-1-2.2-2.2v-5   C51.7,27.6,52.8,26.7,53.9,26.7L53.9,26.7z"></path>
                                                      <path class="st0" d="M43,17.9h49.1c2.6,0,4.6,2,4.6,4.6v46.6c0,2.6-2,4.7-4.6,4.9"></path>
                                                      <path class="st0" d="M7.8,73.9c-2.6-0.1-4.6-2.3-4.6-4.9V22.5c0-2.2,0.1-4.6,3.8-4.6h4.5"></path>
                                                   </g>
                                                </svg>
                                             </span>
                                             <span class="AnchorText">HESAP ÖZETİM</span>
                                          </a>
                                       </li>
                                       <li class="MenuItem ListItem">
                                          <a class="ComponentAnchor MyAccountMenuLink Anchor" href="/">
                                             <span class="MenuItemImg">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve" alt="">
                                                   <style type="text/css">
                                                      .st0{fill:none;stroke:#00D5C8;stroke-width:1.44;stroke-linecap:round;stroke-linejoin:round;}
                                                   </style>
                                                   <g>
                                                      <path class="st0" d="M65.1,27.2v63.9c0,1.8-1.4,3.3-3.4,3.4H6.6c-1.8,0-3.4-1.4-3.4-3.4V8.9c0-1.8,1.4-3.4,3.4-3.4h36.8"></path>
                                                      <path class="st0" d="M65.1,27.2H46.7c-1.8,0-3.4-1.4-3.4-3.4V5.5L65.1,27.2L65.1,27.2z"></path>
                                                      <path class="st0" d="M77,16.6h11.9v61.9c0,12.3-11.9,12.3-11.9,0V16.6z"></path>
                                                      <polyline class="st0" points="96.7,49.6 96.8,26.4 76.9,26.4  "></polyline>
                                                      <line class="st0" x1="82.8" y1="94.5" x2="82.8" y2="87.8"></line>
                                                      <line class="st0" x1="16.6" y1="23.4" x2="34.2" y2="23.4"></line>
                                                      <line class="st0" x1="16.6" y1="40" x2="51.8" y2="40"></line>
                                                      <line class="st0" x1="16.6" y1="49.8" x2="51.8" y2="49.8"></line>
                                                      <line class="st0" x1="16.6" y1="59.5" x2="51.8" y2="59.5"></line>
                                                      <line class="st0" x1="16.6" y1="69.3" x2="34.2" y2="69.3"></line>
                                                   </g>
                                                </svg>
                                             </span>
                                             <span class="AnchorText">BAHİS KURALLARI</span>
                                          </a>
                                       </li>
                                    </ul>
                                    <div class="MyAccountMenu TornamentsRankContainer">
                                       <casino-tournaments-player-rank lang="tr" currency="TRY" >
                                       <style id="svelte-tx5qze">*,*::before,*::after{margin:0;padding:0;list-style:none;text-decoration:none;outline:none;box-sizing:border-box}.TournamentContentDetails{display:flex;flex-direction:column;gap:20px}.Thumbnail{display:flex;gap:20px}.CardImg{border-radius:5px;background:url("");background-repeat:no-repeat;background-position:center;background-size:auto;width:85px;height:60px}.CardImg.CardImgFinished{filter:grayscale(1)}.CardImg.Mobile{width:85px;height:60px;display:inline-block;margin-bottom:10px;margin-right:10px;font-size:12px;line-height:15px}
                                       .Thumbnail{cursor:pointer}.PrizeSec,.RankSec{background-color:#f9c408}.PrizeIcon svg path,.UserIcon svg path{fill:#1c1c1c}
                                       </style>
                                       <div class="TournamentsPage"><div class="TournamentContentDetails"><div class="Thumbnail"><img class="Mobile CardImg " src="/static.glastcoper.com/bonus/img/2005/ggggggggggtttrrr.png" width="65px" height="40px" title="24-31 Mart 1.500.000 TL Ödüllü Slot Turnuvası"> <div class="MobileRight"><div class="Title">Matbet <?php
// Türkçe yerel ayarları kullanmak için:
setlocale(LC_TIME, 'tr_TR.UTF-8');

// Bir gün öncesi için zaman damgası oluşturuyoruz
$yesterday = strtotime("-1 day");
$oneweeklater = strtotime("+6 day");


// Tarihi "gün ay" formatında yazdırıyoruz
echo strftime("%d %B", $yesterday);
echo '-';
echo strftime("%d %B", $oneweeklater);
echo ' ';
?>
 15.000.000 TL Ödüllü Slot Turnuvası</div> <div>Başlangıç <?=date("d/m/Y")?> 00:00 Bitiş <?=date("d/m/Y", strtotime("+1 week"))?> 23:59</div></div></div> <casino-tournaments-rank translationurl=""></casino-tournaments-rank></div><style>.Thumbnail{cursor:pointer}.PrizeSec,.RankSec{background-color:#f9c408}.PrizeIcon svg path,.UserIcon svg path{fill:#1c1c1c}</style></div>
                                       </casino-tournaments-player-rank>
                                    </div>
                                    <div class="MyAccountMenu LastLoginDateContainer"><span><b class="LastLoginDateLabel">Son Giriş: </b><?php echo date("j.m.Y, g:i:s a");?></span></div>
                                    <div class="MyAccountMenu FooterContainer">
                                       <div class="LogOutButtonContainer"><button class="LogOutButton ComponentLogoutButton InstanceOperatorButtonLogout E2E-logout-button Button MyAccountLogoutButton" onclick="logOut()" title="Çıkış Yap" type="button"><span class="ButtonText">Çıkış Yap</span></button></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="DropDownBackground ComponentLayout Layout Prerender"></div>
                        </div>
                     </div>
                     <div class="ComponentSiteLanguageSelector LanguageSelectorContainer CustomSelect OperatorTopLanguage">
                        <div class="CustomSelectTrigger">
                           <div class="LanguageSelectorSVGFlag">
                              <span class="Icon">
                                 <span class="SvgIcon MainIcon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 87.51">
                                       <defs>
                                          <clipPath id="clip-path">
                                             <path class="cls-1" d="M0 0h150v87.51H0z"></path>
                                          </clipPath>
                                          <style>#tr-layer .cls-1{fill:none}#tr-layer .cls-2{clip-path:url(#clip-path)}#tr-layer .cls-3{fill:#d00027}#tr-layer .cls-4{fill:#fff}</style>
                                       </defs>
                                       <g id="tr-layer" data-name="Layer 2">
                                          <g class="cls-2" id="Layer_1-2" data-name="Layer 1">
                                             <path class="cls-3" d="M0 0h150v87.51H0z"></path>
                                             <g class="cls-2">
                                                <path class="cls-4" d="M43.78 21.86a21.87 21.87 0 11-21.87 21.87 21.86 21.86 0 0121.87-21.87"></path>
                                                <path class="cls-3" d="M49.22 26a17.71 17.71 0 11-17.44 17.73A17.51 17.51 0 0149.22 26"></path>
                                                <path class="cls-4" d="M62.23 43.73l10.45 3.68 1.81-5.23-12.26 1.55z"></path>
                                                <path class="cls-4" d="M62.23 43.73l10.45-3.1 1.81 5.18-12.26-2.08z"></path>
                                                <path class="cls-4" d="M69.8 33.33v10.93h5.44L69.8 33.33z"></path>
                                                <path class="cls-4" d="M69.8 33.33l6.5 8.85-4.42 3.15-2.08-12z"></path>
                                                <path class="cls-4" d="M69.8 54.18l6.5-8.85-4.42-3.15-2.08 12z"></path>
                                                <path class="cls-4" d="M69.8 54.18V43.25h5.44L69.8 54.18z"></path>
                                                <path class="cls-4" d="M82.01 37.49l-10.4 3.14 1.81 5.18 8.59-8.32z"></path>
                                                <path class="cls-4" d="M82.01 37.49l-6.24 8.85-4.69-3.09 10.93-5.76z"></path>
                                                <path class="cls-4" d="M82.01 49.97l-6.24-8.86-4.69 3.68 10.93 5.18z"></path>
                                                <path class="cls-4" d="M82.01 49.97l-10.4-3.1 1.81-5.22 8.59 8.32z"></path>
                                             </g>
                                          </g>
                                       </g>
                                    </svg>
                                 </span>
                              </span>
                              <span class="LanguageSelectorSelectedText">Türkçe</span><span class="LanguageSelectorSelectedCode">tr</span>
                           </div>
                        </div>
                        <ul class="CustomListContainer List ListUnordered HeaderLanguageSelector">
                           <li class="CustomSelectOption ListItem" title="English">
                              <div class="LanguageSelectorSVGFlag">
                                 <span class="Icon">
                                    <span class="SvgIcon MainIcon">
                                       <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 21">
                                          <image width="40" height="21" xlink:href="data:image/png;base64,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"></image>
                                       </svg>
                                    </span>
                                 </span>
                                 <span class="LanguageSelectorSelectedText">English</span><span class="LanguageSelectorSelectedCode">en</span>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <?php }else{?>
                     <div class="OperatorAccountContainer ComponentLayout Layout">
                        <a class="ComponentAnchor Button ButtonRegister ComponentAnchor Anchor  Anchor" id="RegisterButton-Header" href="/register"><span class="AnchorText" id="RegisterButton-Header-Text">Kayıt Ol</span></a><button type="button" onclick="openLoginModal()" class="Button ButtonLogin InstanceOperatorLoginLink" id="Header" data-disable-click="false"><span class="AnchorText" id="Header-Text">Giriş</span></button>
                        <a class="ComponentAnchor IosAppPageLinkWrapper Anchor" href="/ios-app">
                           <span class="IosAppPageLinkIcon">
                              <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 814 1000" height="36" width="28">
                                 <path d="M788.1 340.9c-5.8 4.5-108.2 62.2-108.2 190.5 0 148.4 130.3 200.9 134.2 202.2-.6 3.2-20.7 71.9-68.7 141.9-42.8 61.6-87.5 123.1-155.5 123.1s-85.5-39.5-164-39.5c-76.5 0-103.7 40.8-165.9 40.8s-105.6-57-155.5-127C46.7 790.7 0 663 0 541.8c0-194.4 126.4-297.5 250.8-297.5 66.1 0 121.2 43.4 162.7 43.4 39.5 0 101.1-46 176.3-46 28.5 0 130.9 2.6 198.3 99.2zm-234-181.5c31.1-36.9 53.1-88.1 53.1-139.3 0-7.1-.6-14.3-1.9-20.1-50.6 1.9-110.8 33.7-147.1 75.8-28.5 32.4-55.1 83.6-55.1 135.5 0 7.8 1.3 15.6 1.9 18.1 3.2.6 8.4 1.3 13.6 1.3 45.4 0 102.5-30.4 135.5-71.3z" fill="currentColor"></path>
                              </svg>
                           </span>
                        </a>
                        <a class="ComponentAnchor WhatsappIconWrapper Anchor" href="/">
                           <span class="CallIcon">
                              <svg fill="currentColor" height="800px" width="800px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 299.679 299.679" xml:space="preserve">
                                 <g id="XMLID_197_">
                                    <path id="XMLID_221_" d="M181.122,299.679c10.02,0,18.758-8.738,18.758-18.758v-43.808h12.525c7.516,0,12.525-5.011,12.525-12.525 V99.466H74.749v125.123c0,7.515,5.01,12.525,12.525,12.525H99.8v43.808c0,10.02,8.736,18.758,18.758,18.758 c10.019,0,18.756-8.738,18.756-18.758v-43.808h25.051v43.808C162.364,290.941,171.102,299.679,181.122,299.679z"></path>
                                    <path id="XMLID_222_" d="M256.214,224.589c10.02,0,18.756-8.737,18.756-18.758v-87.615c0-9.967-8.736-18.75-18.756-18.75 c-10.021,0-18.758,8.783-18.758,18.75v87.615C237.456,215.851,246.192,224.589,256.214,224.589z"></path>
                                    <path id="XMLID_223_" d="M43.466,224.589c10.021,0,18.758-8.737,18.758-18.758v-87.615c0-9.967-8.736-18.75-18.758-18.75 c-10.02,0-18.756,8.783-18.756,18.75v87.615C24.71,215.851,33.446,224.589,43.466,224.589z"></path>
                                    <path id="XMLID_224_" d="M209.899,1.89c-2.504-2.52-6.232-2.52-8.736,0l-16.799,16.743l-0.775,0.774 c-9.961-4.988-21.129-7.479-33.566-7.503c-0.061,0-0.121-0.002-0.182-0.002h-0.002c-0.063,0-0.121,0.002-0.184,0.002 c-12.436,0.024-23.604,2.515-33.564,7.503l-0.777-0.774L98.516,1.89c-2.506-2.52-6.232-2.52-8.736,0 c-2.506,2.506-2.506,6.225,0,8.729l16.25,16.253c-5.236,3.496-9.984,7.774-14.113,12.667C82.032,51.256,75.727,66.505,74.86,83.027 c-0.008,0.172-0.025,0.342-0.033,0.514c-0.053,1.125-0.078,2.256-0.078,3.391H224.93c0-1.135-0.027-2.266-0.078-3.391 c-0.008-0.172-0.025-0.342-0.035-0.514c-0.865-16.522-7.172-31.772-17.057-43.487c-4.127-4.893-8.877-9.171-14.113-12.667 l16.252-16.253C212.405,8.115,212.405,4.396,209.899,1.89z M118.534,65.063c-5.182,0-9.383-4.201-9.383-9.383 c0-5.182,4.201-9.383,9.383-9.383c5.182,0,9.383,4.201,9.383,9.383C127.917,60.862,123.716,65.063,118.534,65.063z M181.145,65.063 c-5.182,0-9.383-4.201-9.383-9.383c0-5.182,4.201-9.383,9.383-9.383c5.182,0,9.383,4.201,9.383,9.383 C190.528,60.862,186.327,65.063,181.145,65.063z"></path>
                                 </g>
                              </svg>
                           </span>
                        </a>
                        <div class="ComponentSiteLanguageSelector LanguageSelectorContainer CustomSelect OperatorTopLanguage">
                           <div class="CustomSelectTrigger">
                              <div class="LanguageSelectorSVGFlag">
                                 <span class="Icon">
                                    <span class="SvgIcon MainIcon">
                                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 87.51">
                                          <defs>
                                             <clipPath id="clip-path">
                                                <path class="cls-1" d="M0 0h150v87.51H0z"></path>
                                             </clipPath>
                                             <style>#tr-layer .cls-1{fill:none}#tr-layer .cls-2{clip-path:url(#clip-path)}#tr-layer .cls-3{fill:#d00027}#tr-layer .cls-4{fill:#fff}</style>
                                          </defs>
                                          <g id="tr-layer" data-name="Layer 2">
                                             <g class="cls-2" id="Layer_1-2" data-name="Layer 1">
                                                <path class="cls-3" d="M0 0h150v87.51H0z"></path>
                                                <g class="cls-2">
                                                   <path class="cls-4" d="M43.78 21.86a21.87 21.87 0 11-21.87 21.87 21.86 21.86 0 0121.87-21.87"></path>
                                                   <path class="cls-3" d="M49.22 26a17.71 17.71 0 11-17.44 17.73A17.51 17.51 0 0149.22 26"></path>
                                                   <path class="cls-4" d="M62.23 43.73l10.45 3.68 1.81-5.23-12.26 1.55z"></path>
                                                   <path class="cls-4" d="M62.23 43.73l10.45-3.1 1.81 5.18-12.26-2.08z"></path>
                                                   <path class="cls-4" d="M69.8 33.33v10.93h5.44L69.8 33.33z"></path>
                                                   <path class="cls-4" d="M69.8 33.33l6.5 8.85-4.42 3.15-2.08-12z"></path>
                                                   <path class="cls-4" d="M69.8 54.18l6.5-8.85-4.42-3.15-2.08 12z"></path>
                                                   <path class="cls-4" d="M69.8 54.18V43.25h5.44L69.8 54.18z"></path>
                                                   <path class="cls-4" d="M82.01 37.49l-10.4 3.14 1.81 5.18 8.59-8.32z"></path>
                                                   <path class="cls-4" d="M82.01 37.49l-6.24 8.85-4.69-3.09 10.93-5.76z"></path>
                                                   <path class="cls-4" d="M82.01 49.97l-6.24-8.86-4.69 3.68 10.93 5.18z"></path>
                                                   <path class="cls-4" d="M82.01 49.97l-10.4-3.1 1.81-5.22 8.59 8.32z"></path>
                                                </g>
                                             </g>
                                          </g>
                                       </svg>
                                    </span>
                                 </span>
                                 <span class="LanguageSelectorSelectedText">Türkçe</span><span class="LanguageSelectorSelectedCode">tr</span>
                              </div>
                           </div>
                           <ul class="CustomListContainer List ListUnordered HeaderLanguageSelector">
                              <li class="CustomSelectOption ListItem" title="English">
                                 <div class="LanguageSelectorSVGFlag">
                                    <span class="Icon">
                                       <span class="SvgIcon MainIcon">
                                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 21">
                                             <image width="40" height="21" xlink:href="data:image/png;base64,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"></image>
                                          </svg>
                                       </span>
                                    </span>
                                    <span class="LanguageSelectorSelectedText">English</span><span class="LanguageSelectorSelectedCode">en</span>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <?php }?>
                     <nav class="OperatorMainMenu ComponentMenu NavMenu">
                        <button type="button" disabled="" class="MainNavScrollBtn LeftNavScrollBtn">
                           <span class="ComponentIcon Icon">
                              <span class="SvgIcon MainIcon">
                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34.63 55.06">
                                    <g data-name="Layer 2">
                                       <path d="M34.63 27.53L31.09 24l-24-24L0 7.06l20.47 20.47L0 48l7.09 7.06 24-24 3.54-3.53z" data-name="Layer 1"></path>
                                    </g>
                                 </svg>
                              </span>
                           </span>
                        </button>
                        <ul class="Menu Vertical List ListUnordered">
                           <li class="MenuItem ListItem"><a class="ComponentAnchor  Anchor" id="DesktopNavButton-/casino/games/mobil-oyunlar:32430/?prevRoute=/casino/cat/mobil-oyunlar" href="/aviator"><span class="AnchorText" id="DesktopNavButton-/casino/games/">Aviator</span></a></li>
                           <li class="MenuItem ListItem"><a class="ComponentAnchor  Anchor" id="DesktopNavButton-/live-casino/games/poker-klas:poker-klas-37036/?prevRoute=%2Flive-casino%2Fcat%2Fpoker-klas" href="/poker"><span class="AnchorText" id="DesktopNavButton-/live-casino/games/poker-klas:poker-klas-37036/?prevRoute=%2Flive-casino%2Fcat%2Fpoker-klas-Text">Poker Klas</span></a></li>
                           <li class="MenuItem ListItem"><a class="ComponentAnchor  Anchor" id="DesktopNavButton-/sports/i/" href="/"><span class="AnchorText" id="DesktopNavButton-/sports/i/-Text">Bahis</span></a></li>
                           <li class="MenuItem ListItem"><a class="ComponentAnchor  Anchor" id="DesktopNavButton-/live-sports/i" href="/#livesports"><span class="AnchorText" id="DesktopNavButton-/live-sports/i-Text">Canlı Bahis</span></a></li>
                           <li class="MenuItem ListItem"><a class="ComponentAnchor  Anchor" id="DesktopNavButton-/sports/i/spor/yüksek-oran/101/dünya/240/lokasyon" href="/#ozeloranlar">Özel Oranlar</span></a></li>
                           <li class="MenuItem ListItem"><a class="ComponentAnchor  Anchor" id="DesktopNavButton-/live-casino" href="/livecasino"><span class="AnchorText" id="DesktopNavButton-/live-casino-Text">Canlı Casino</span></a></li>
                           <li class="MenuItem ListItem"><a class="ComponentAnchor  Anchor" id="DesktopNavButton-/casino" href="/casino"><span class="AnchorText" id="DesktopNavButton-/casino-Text">Casino</span></a></li>
                           <li class="MenuItem ListItem"><a class="ComponentAnchor  Anchor" id="DesktopNavButton-/live-casino/games/loto:canlı-loto-49160/?prevRoute=%2Flive-casino%2Fcat%2Floto" href="/canliloto"><span class="AnchorText" id="DesktopNavButton-/live-casino/games/loto:canlı-loto-49160/?prevRoute=%2Flive-casino%2Fcat%2Floto-Text">Canlı Loto</span></a></li>
                           <li class="MenuItem ListItem"><a class="ComponentAnchor  Anchor" id="DesktopNavButton-/casino/cat/turnuva-oyunları" href="/turnuva-oyunlari"><span class="AnchorText" id="DesktopNavButton-/casino/cat/turnuva-oyunları-Text">Ödüllü Oyunlar</span></a></li>
                           <li class="MenuItem ListItem"><a class="ComponentAnchor  Anchor" id="DesktopNavButton-/live-casino/cat/tombala" href="/tombala"><span class="AnchorText" id="DesktopNavButton-/live-casino/cat/tombala-Text">Tombala</span></a></li>
                           <li class="MenuItem ListItem"><a class="ComponentAnchor  Anchor" id="DesktopNavButton-/tournaments/all" href="/tournaments"><span class="AnchorText" id="DesktopNavButton-/tournaments/all-Text">Özel Turnuvalar</span></a></li>
                           <li class="MenuItem ListItem"><a class="ComponentAnchor  Anchor" id="DesktopNavButton-/promotions" href="/promotions"><span class="AnchorText" id="DesktopNavButton-/promotions-Text">Promosyonlar</span></a></li>
                           <li class="MenuItem ListItem"><a target="_blank" class="ComponentAnchor  Anchor" href="https://dub.is/matdiscount" id="DesktopNavButton-https://dub.is/matdiscount"><span class="AnchorText" id="DesktopNavButton-https://dub.is/matdiscount-Text">Discount Talep Et</span></a></li>
                        </ul>
                        <button type="button" class="MainNavScrollBtn RightNavScrollBtn">
                           <span class="ComponentIcon Icon">
                              <span class="SvgIcon MainIcon">
                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34.63 55.06">
                                    <g data-name="Layer 2">
                                       <path d="M34.63 27.53L31.09 24l-24-24L0 7.06l20.47 20.47L0 48l7.09 7.06 24-24 3.54-3.53z" data-name="Layer 1"></path>
                                    </g>
                                 </svg>
                              </span>
                           </span>
                        </button>
                     </nav>
                  </div>
               </div>
            </header>