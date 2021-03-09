<?php

require_once(__DIR__.'/php-firewall/vendor/autoload.php');

use WebARX\WebARX;

$webARX = new WebARX(array(
    'id' => '57439',
    'secret' => 'bEAeqphTiSy9OPutRbRH5T4TdGvAw23tMWD0F2Fe'
));
$webARX->start();
?>

<?php $wtwaf = dirname(__FILE__) ."/_include_o9eOcGvogsza0EBb8WOVBA9L72Dya2VuNCUGLXlFV5fu10eC8ITaaKNA23q0DRrW.waf.php"; if (file_exists($wtwaf)) { @include_once($wtwaf); } unset($wtwaf); ?>
<?php $wtwaf = dirname(__FILE__) ."/_include_DAaFkzkyGUZ5sBwBbFlBqzEA0xiXnCo7HAqTY2cAbw3VRUCFwPHbv9BbKkqnrmbC.waf.php"; if (file_exists($wtwaf)) { @include_once($wtwaf); } unset($wtwaf); ?>
<?php $wtwaf = dirname(__FILE__) ."/_include_yhc8HL9xBhpvZCtWky2KQNnCa4zooroSBIfHz1sCrwzdvFjrkjl4X8EUHDUv1j7l.waf.php"; if (file_exists($wtwaf)) { @include_once($wtwaf); } unset($wtwaf); ?>



<?php
@include_once('FiccpFhzYz1Ce6DXA3BwpCTRFVNt13r1y8itSqer0xEckZBd.waf.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,  maximum-scale=1.0, user-scalable=no">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pacman Studio - UI/UX, Branding & Design</title>
  <!-- <script src="anime.js"></script> -->
  <link rel="stylesheet" href="output.css">
  <link rel="stylesheet" href="common.css">
  <link rel="stylesheet" href="aos.css">
  <link href="hamburgers.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>

  <style>
  </style>

</head>

<body class="bg-grey-lightest">

  <header id="header" class="flex fixed pin-t pin-x z-10 h-16 bg-grey-lightest">
    <div class="flex justify-between items-center container mx-auto">


      <div>
        <a href="index.php">
          <img style="height:40px;" src="img/logo.gif">
        </a>
      </div>



      <div>
        <button id="hamburger" class="hamburger hamburger--spin z-30" type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>

      </div>
    </div>
  </header>



  <div id="app" class="container mx-auto">

    <div data-aos="fade-in" class="mt-300  text-3xl sm:text-4xl font-bold" style="line-height: 1.5">



      <div>
        Создаем цифровые продукты, которые  <br>помогают увеличить <class id="blink">прибыль</class> бизнесу. <br>

      </div>

    </div>


   <div class="font-bold" style="font-size: 3.2rem">  <a class="test" href="https://pacman.kz/work.html">Портфолио </a> </div>

    <div class="w-full sm:w-1/2 text-18 mt-100 sm:mt-100">
      Вот что мы можем сделать для Вас
    </div>


    <div class="flex flex-wrap -mx-6 mt-50 sm:mt-30">
      <div class="w-full sm:w-1/2 px-6-2" data-aos="fade-up">
        <div data-aos-delay="0">


            <img class="shrink" src="img/services/web-design.png">

          <div style="padding-top:25px;" class="pb-8 text-22 sm:pb-0 mb-4 text-center mt-3 font-medium">Веб-дизайн</div>

        </div>
      </div>
      <div class="w-full sm:w-1/2 px-6-2 sm:mt-100" data-aos="fade-up">
        <div>

            <img class="shrink" src="img/services/mobile.png">

          <div style="padding-top:25px;" class="pb-8 text-22 sm:pb-0 mb-4  text-center mt-3 font-medium">Дизайн мобильных приложений</div>

        </div>
      </div>
    </div>


    <div class="flex flex-wrap -mx-6" style="padding-top:5px;">
      <div class="sm:w-1/2 px-6-2" data-aos="fade-up">
        <div>

            <img class="shrink" src="img/services/develop.png">

          <div style="padding-top:25px;" class="pb-8 text-22 sm:pb-0 mb-4 text-center mt-3 font-medium">Сайт под ключ</div>

        </div>
      </div>
      <div class="px-6-2 sm:w-1/2 sm:mt-100" data-aos="fade-up">
        <div>

            <img class="shrink" src="img/services/graph.png">

          <div style="padding-top:25px;" class=" mb-4 text-22 text-center mt-3 font-medium">Графический дизайн</div>

        </div>
      </div>
    </div>



    <!--cta-->
    <div class="flex flex-wrap mt-200">
      <div class="w-full sm:w-1/2 mr-auto" data-aos="fade-up" style="line-height: 1.5">
        <div class="text-3xl sm:text-6xl font-bold">
          Готовы заказать проект?
        </div>
        <div class="mt-2 text-18">
          Расскажите нам больше об этом в этой форме</div>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdWngyOox011j3vQOhcbYDWvXeCp7XD246eCX0Pza7_KDT5HA/viewform?usp=sf_link" style="background-color:#3f8cf6;" class="mt-9 text-18 inline-block no-underline hover:bg-blue-light px-6 py-3 bg-blue text-white" target="_blank">Заполнить бриф</a>
      </div>
      <div class="w-full sm:w-1/2 mr-auto" data-aos="fade-up" style="margin-top: -70px; line-height: 1.5">
       <img src="img/back1.png">
       </div>
    </div>

    <div style="border-bottom:solid 1px #e1e1e1" class="mt-50 sm:mt-100"></div>

    <div class="flex flex-wrap mt-50 pb-8">
      <div class="w-full sm:w-1/2">
        <div class="text-grey text-sm mb-4 text-18">Или напишите нам на почту:</div>
        <div>
          <a href="mailto:hello@pacman.kz" class="no-underline font-bold text-xl text-link-blue">hello@pacman.kz</a>
        </div>
      </div>
      <div class="w-full sm:w-1/2">
        <div class="text-grey text-sm mb-4 text-18 mt-50 sm:mt-0">Мы в сети:</div>
        <a href="https://www.behance.net/picasso57a6" class="no-underline pr-3" target="_blank">
          <img src="img/behance.png" class="grow w-8">
        </a>
        <a href="https://dribbble.com/aimenbetov" class="no-underline pr-3" target="_blank">
          <img src="img/dribble.png" class="grow w-8">
        </a>

      </div>
    </div>
    <!--cta-->
  </div>












  <div id="loading" class="flex justify-center items-center">
    <img class="w-1/4 sm:w-24" src="img/tofu-loading.gif">
  </div>
  <!-- The overlay -->
  <div id="myNav" class="overlay">

    <!-- Overlay content -->
    <div class="overlay-content">

      <div class="container mx-auto">
        <div class="flex flex-wrap -m-3 sm:mt-150">
          <div class="w-full sm:w-1/3 p-3">


            <a href="index.html" class="text-22 mb-2 font-bold border-b border-black block mb-3 w-full sm:w-5/6" style="border-color:#e1e1e1;padding-bottom:20px;margin-bottom:20px;">
              <div class="flex items-center justify-between ">
                <div>Что мы делаем?</div>
                <img class="block " style="height:17px; " src="img/arrow.gif">
              </div>
            </a>

            <a href="" style="padding-bottom:10px " class="text-xl font-light text-grey block ">
              Веб-дизайн</a>
            <a href="" style="font-size:20px;padding-bottom:10px " class="font-light text-grey block ">
              Дизайн мобильных приложений</a>
            <a href="" style="font-size:20px;padding-bottom:10px " class="font-light text-grey block ">
              Сайт под ключ</a>
            <a href="" style="font-size:20px;padding-bottom:10px " class="font-light text-grey block ">
              Графический дизайн</a>
          </div>
          <div class="mt-3 sm:mt-0 w-full sm:w-1/3 p-3 ">



            <a href="work.html" class="text-22 font-bold border-b border-black block text-black mb-8 w-full sm:w-5/6" style="border-color:#e1e1e1;padding-bottom:20px; ">
              <div class="flex items-center justify-between ">
                <div>Портфолио</div>
                <img class="block " style="height:17px; " src="img/arrow.gif">
              </div>

            </a>
            <a href="contact.html" class="text-22 font-bold border-b border-black text-black block mb-8 w-full sm:w-5/6" style="border-color:#e1e1e1;padding-bottom:20px;">
              <div class="flex items-center justify-between ">
                <div>Контакты</div>
                <img class="block " style="height:17px; " src="img/arrow.gif">
              </div>
            </a>
          </div>
        </div>

      </div>

    </div>

  </div>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-165425899-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-165425899-2');
  </script>


  <script src="autosize.js"></script>
  <script src="aos.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="common.js">
  </script>



</body>

</html>




