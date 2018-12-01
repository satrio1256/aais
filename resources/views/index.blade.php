<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <!-- META -->
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <!-- TITLE -->
        <title>AAIS</title>

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


		<!-- bxSlider Javascript file -->
        <script src="js/jquery.bxslider.js"></script>
        <script>
		$(document).ready(function(){
		$('.bxslider').bxSlider({

								pager: false,
								controls: true,
								auto: true


								});
		});
		</script>



		<link rel="stylesheet" type="text/css" href="lightbox/jquery.fancybox.css" media="screen" />
		<script src="lightbox/jquery.fancybox.js"></script>
        <script type="text/javascript">
                $(document).ready(function() {

                    $('.fancybox').fancybox();

                });
        </script>


        <!-- GOTO TOP JQUERY -->
        <script type="text/javascript">
        $(function() {
            $(window).scroll(function() {
                if($(this).scrollTop() != 0) {
                    $('#gotop').fadeIn();
                } else {
                    $('#gotop').fadeOut();
                }
            });

            $('#gotop').click(function() {
                $('body,html').animate({scrollTop:0},800);
            });
        });
        </script>



		<!-- HEADER JQUERY -->
        <script type="text/javascript">
        $(function() {
            $(window).scroll(function() {
                if($(this).scrollTop() >= 200) {
                    $('.header').addClass("header_fix");
                } else {
                   $('.header').removeClass("header_fix");
                }
            });
        });
        </script>


        <script type="text/javascript">

		if($(window).width() <= 900){
		$(document).ready(function() {



                    $('.mobile .title').click(function() {

												$(this).next("ul").slideToggle();
												$(this).toggleClass("minus");

												});



                });

		}
        </script>

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




		<div class="wrapper">
        <div class="slider_main">
        <div id="full-slider-wrapper">
        <div id="layerslider" style="width:100%;height:473px;">


                                <div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
                                <img src="images/slider/slide-bg.jpg" class="ls-bg" alt="Slide background"/>


                                <div class="ls-l" style="top:140px;left:438px;white-space: nowrap;" data-ls="offsetxin:0;delayin:1000;easingin:easeInOutQuart;scalexin:0.7;scaleyin:0.7;offsetxout:-800;durationout:1000;">
                                <h2 class="l1">PERAKITAN</h2>
                                </div>

                                <div class="ls-l" style="top:200px;left:333px;white-space: nowrap;" data-ls="offsetxin:0;delayin:1000;easingin:easeInOutQuart;scalexin:0.7;scaleyin:0.7;offsetxout:-800;durationout:1000;">
                                <h2 class="l2">Hal pertama yang harus kita lakukan adalah merakit</h2>
                                </div>



                                <div class="ls-l" style="top:265px;left:353px;" data-ls="offsetxin:0;delayin:1000;easingin:easeInOutQuart;scalexin:0.7;scaleyin:0.7;offsetxout:-800;durationout:1000;">
                                <a href="#" class="button2">Pelajari</a>
                                </div>


                                <div class="ls-l" style="top:265px;left:555px;" data-ls="offsetxin:0;delayin:1000;easingin:easeInOutQuart;scalexin:0.7;scaleyin:0.7;offsetxout:-800;durationout:1000;">
                                <a href="#" class="button1">Mulai Merakit</a>
                                </div>


                                </div><!--FIRST SLIDE-->

                                <div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
                                <img src="images/slider/slide-bg.jpg" class="ls-bg" alt="Slide background"/>


                                <div class="ls-l" style="top:140px;left:438px;white-space: nowrap;" data-ls="offsetxin:0;delayin:1000;easingin:easeInOutQuart;scalexin:0.7;scaleyin:0.7;offsetxout:-800;durationout:1000;">
                                <h2 class="l1">PENGUJIAN</h2>
                                </div>

                                <div class="ls-l" style="top:200px;left:333px;white-space: nowrap;" data-ls="offsetxin:0;delayin:1000;easingin:easeInOutQuart;scalexin:0.7;scaleyin:0.7;offsetxout:-800;durationout:1000;">
                                <h2 class="l2">Pengujian & Pengujian Pengujian Pengujian Pengujian</h2>
                                </div>



                                <div class="ls-l" style="top:265px;left:353px;" data-ls="offsetxin:0;delayin:1000;easingin:easeInOutQuart;scalexin:0.7;scaleyin:0.7;offsetxout:-800;durationout:1000;">
                                <a href="#" class="button2">Pelajari</a>
                                </div>


                                <div class="ls-l" style="top:265px;left:555px;" data-ls="offsetxin:0;delayin:1000;easingin:easeInOutQuart;scalexin:0.7;scaleyin:0.7;offsetxout:-800;durationout:1000;">
                                <a href="#" class="button1">Mulai Menguji</a>
                                </div>


                                </div><!--SECOND SLIDE-->



                                <div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
                                <img src="images/slider/slide-bg.jpg" class="ls-bg" alt="Slide background"/>


                                <div class="ls-l" style="top:140px;left:315px;white-space: nowrap;" data-ls="offsetxin:0;delayin:1000;easingin:easeInOutQuart;scalexin:0.7;scaleyin:0.7;offsetxout:-800;durationout:1000;">
                                <h2 class="l1">SUMBER DAYA LOGISTIK</h2>
                                </div>

                                <div class="ls-l" style="top:200px;left:230px;white-space: nowrap;" data-ls="offsetxin:0;delayin:1000;easingin:easeInOutQuart;scalexin:0.7;scaleyin:0.7;offsetxout:-800;durationout:1000;">
                                <h2 class="l2">Sumber Daya Logistik Sumber Daya Logistik Sumber Daya Logistik Sumber Daya</h2>
                                </div>



                                <div class="ls-l" style="top:265px;left:353px;" data-ls="offsetxin:0;delayin:1000;easingin:easeInOutQuart;scalexin:0.7;scaleyin:0.7;offsetxout:-800;durationout:1000;">
                                <a href="#" class="button2">Pelajari</a>
                                </div>


                                <div class="ls-l" style="top:265px;left:555px;" data-ls="offsetxin:0;delayin:1000;easingin:easeInOutQuart;scalexin:0.7;scaleyin:0.7;offsetxout:-800;durationout:1000;">
                                <a href="#" class="button1">Sumber Daya</a>
                                </div>


                                </div><!--THIRD SLIDE-->




        </div>
        </div>
        </div>




        <div class="service_section">
        <div class="container">

        			<h2>Yang kami bisa berikan untuk anda</h2>
                    <h4>Anda membutuhkan bantuan untuk pembuatan pesawat?  Inilah yang anda butuhkan</h4>

                    <div class="insider">

                   		<div class="column">
                        <span class="fa fa-gear"></span>
                        <h3>Perakitan</h3>
                        <p>Disini kami akan memberikan perakitan perakitan perakitan perakitan.</p>
                        </div>

                        <div class="column">
                        <span class="fa fa-check-square-o"></span>
                        <h3>Pengujian</h3>
                        <p>Disini kami akan memberikan pengujian pengujian pengujian pengujian.</p>
                        </div>

                        <div class="column">
                       	<span class="fa fa-gear"></span>
                        <h3>Sumber Daya Logistik</h3>
                        <p>Disini kami akan meberikan Sumber Daya Logistik Sumber Daya Logistik.</p>
                        </div>

                    </div>

        </div>
        </div>





        <div class="feature_section" id="perakitan">
        <div class="container">


                        <div class="leftside">
                        <img src="images/thumbs/t1.png" alt=""  class="wow bounceInLeft animated" data-wow-duration="2s" data-wow-offset="300" data-wow-delay="0.2s" />
                        </div>


                        <div class="rightside">
                        <h2>Perakitan</h2>
                        <p>
                        Designing is a matter of concentration. You go deep into what you want to do. It's about intensive research, really. The concentration is warm and intimate and like the fire inside the earth - intense but not distorted. You can go to a place, really feel it in your heart. It's actually a beautiful feeling.
                        </p>

                        <div class="feature">
                        <span class="fa fa-life-ring"></span>
                        <div class="description">
                        <strong>Good in Performance</strong> <br />
                        Designing is a matter of concentration. You go deep into what you want to do. It's about intensive research, really.
                        </div>
                        </div>

                        <br clear="all" />

                        <a href="#" class="button3">Pelajari</a>
                        <a href="#" class="button4">Mulai Merakit</a>
                        </div>

        </div>
        </div>





        <div class="feature_section ano_feature_section" id="pengujian">
        <div class="container">


                        <div class="leftside">
                        <h2>Pengujian</h2>
                        <p>
                        Designing is a matter of concentration. You go deep into what you want to do. It's about intensive research, really. The concentration is warm and intimate and like the fire inside the earth - intense but not distorted. You can go to a place, really feel it in your heart. It's actually a beautiful feeling.
                        </p>

                        <div class="feature">
                        <span class="fa fa-life-ring"></span>
                        <div class="description">
                        <strong>Good in Performance</strong> <br />
                        Designing is a matter of concentration. You go deep into what you want to do. It's about intensive research, really.
                        </div>
                        </div>

                        <div class="feature">
                        <span class="fa fa-play-circle-o "></span>
                        <div class="description">
                        <strong>Video Background</strong> <br />
                        Designing is a matter of concentration. You go deep into what you want to do. It's about intensive research, really.
                        </div>
                        </div>

                        <br clear="all" />

                        <a href="#" class="button3">Pelajari</a>
                        <a href="#" class="button4">Mulai Menguji</a>
                        </div>

                        <div class="rightside">
                        <img src="images/thumbs/t2.png" alt="" class="wow bounceInRight animated imagethumb2"  data-wow-offset="300" data-wow-delay="0.2s" />
                        </div>
        </div>
        </div>





        <div class="feature_section" id="sumber_daya">
        <div class="container">


                        <div class="leftside">
                        <img src="images/thumbs/t1.png" alt=""  class="wow bounceInLeft animated" data-wow-duration="2s" data-wow-offset="300" data-wow-delay="0.2s" />
                        </div>


                        <div class="rightside">
                        <h2>Sumber Daya Logistik</h2>
                        <p>
                        Designing is a matter of concentration. You go deep into what you want to do. It's about intensive research, really. The concentration is warm and intimate and like the fire inside the earth - intense but not distorted. You can go to a place, really feel it in your heart. It's actually a beautiful feeling.
                        </p>

                        <div class="feature">
                        <span class="fa fa-life-ring"></span>
                        <div class="description">
                        <strong>Good in Performance</strong> <br />
                        Designing is a matter of concentration. You go deep into what you want to do. It's about intensive research, really.
                        </div>
                        </div>

                        <br clear="all" />

                        <a href="#" class="button3">Pelajari</a>
                        <a href="#" class="button4">Sumber Daya</a>
                        </div>

        </div>
        </div>



        <div class="subscribe_section" id="subscribe_part"><div class="container"></div></div>


        <div class="common_section">
        <div class="container">


                    <a href="#" class="footer_logo"><img src="images/logo.png" alt="" /></a>

                    <div class="copyright">Implementasi Perangkat Lunak - <a href="https://telkomuniversity.ac.id/id/">Telkom University</a>

        </div>
        </div>


        </div><!--wrapper-->


		<script>
            jQuery("#layerslider").layerSlider({
                responsive: false,
                responsiveUnder: 1100,
                layersContainer: 1100,
                skin: 'fullwidth',
                hoverPrevNext: false,
                skinsPath: 'layerslider/skins/'
            });


        </script>

		<script src="js/wow.js"></script>
        <script>
        wow = new WOW(
          {
            animateClass: 'animated',
            offset:       100
          }
        );
        wow.init();
        document.getElementById('moar').onclick = function() {
          var section = document.createElement('section');
          section.className = 'section--purple wow fadeInDown';
          this.parentNode.insertBefore(section, this);
        };
        </script>

		<script type="text/javascript">
		$(function() {
		$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		var target = $(this.hash);
		target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		if (target.length) {
		$('html,body').animate({
		scrollTop: target.offset().top - 132
		}, 2000);
		return false;
		}
		}
		});
		});
        </script>


		<script type="text/javascript">


        $(document).ready(function() {

        if($(window).width() <= 1200){


        $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
        $('html,body').animate({
        scrollTop: target.offset().top - 132
        }, 2000);
        return false;
        }
        }
        });
        });



        }

        });


        </script>



</body>
</html>
