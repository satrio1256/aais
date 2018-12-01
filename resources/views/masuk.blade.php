<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <!-- META -->
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <!-- TITLE -->
        <title>MASUK - AAIS</title>

        <!-- Main StyleSheet -->
        <link href="style.css" rel="stylesheet" type="text/css" />
        <link href="style-responsive.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
        <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
        <link rel="stylesheet" href="css/libs/animate.css">


		<!-- bxSlider CSS file -->
        <link href="css/jquery.bxslider.css" rel="stylesheet" />


        <!-- LayerSlider stylesheet -->
        <link rel="stylesheet" href="layerslider/css/layerslider.css" type="text/css">
        <!-- External libraries: jQuery & GreenSock -->
        <script src="layerslider/js/jquery.js" type="text/javascript"></script>
        <script src="layerslider/js/greensock.js" type="text/javascript"></script>
        <!-- LayerSlider script files -->
        <script src="layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
        <script src="layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>

        <script src="js/bootstrap.min.js" type="text/javascript"></script>


		<link rel="stylesheet" type="text/css" href="lightbox/jquery.fancybox.css" media="screen" />
		<script src="lightbox/jquery.fancybox.js"></script>


</head>

<body>



        <div class="header">
        <div class="container">

                    <a href="#" class="logo"><img src="images/logo.png" alt="" /></a>

                    <div class="nav mobile">
                    <div class="title">Beranda <span class="fa "></span></div>
                    <ul>
                    <li><a href="{{env('APP_URL')}}">Beranda</a></li>
                    <li><a href="#faqs_part">Perakitan</a></li>
                    <li><a href="#features">Pengujian</a></li>
                    <li><a href="#testimonials_part">Sumber Daya Logistik </a></li>
                    <li><a style="color: #fff;" href="{{env('APP_URL')}}/login">Masuk</a></li>
                    <li><a href="{{env('APP_URL')}}/signup">Daftar</a></li>
                    </ul>
                    </div>

        </div>
        </div>



        <div class="common_section" id="contact_part">
        <div class="container">

                    <h2>AKSES AKUN</h2>
                    <h4>Silahkan Masukkan Email dan Password Akun Anda</h4>


                    <br clear="all" />


                    <form action="{{env('APP_URL')}}/login/process" method="post" class="hpform">
                      {{csrf_field()}}
                      <input type="email" name="email" placeholder="Email" />
                      <input type="password" placeholder="Password" name="pass"/>
                      <input type="submit" value="MASUK" />
                    </form>

        </div>
        </div>



        <div class="subscribe_section" id="subscribe_part">
        <div class="container">
        </div>
        </div>




        <div class="common_section">
        <div class="container">


            		<a href="#" class="footer_logo"><img src="images/logo.png" alt="" /></a>

					<div class="copyright">Implementasi Perangkat Lunak - <a href="https://telkomuniversity.ac.id/id/">Telkom University</a>

        </div>
        </div>


        </div><!--wrapper-->
</body>
</html>
