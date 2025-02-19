<?php

	session_start();
	$allErrs = $name = $nameErr = $tym = $tymErr = $email = $emailErr = $phone = $phoneErr = $message = $messageErr = $projectErr = "";
	if(isset($_SESSION['errors'])){
		$allErrs = $_SESSION['errors'];
	}

	if(isset($_SESSION['postval'])){
		$allpostval =$_SESSION['postval'];
	}

	if(isset($allpostval['name'])){
		$name = $allpostval['name'];
	}

	if(isset($allpostval['email'])){
		$email = $allpostval['email'];
	}

	if(isset($allpostval['phone'])){
		$phone = $allpostval['phone'];
	}

	if(isset($allpostval['message'])){
		$message = $allpostval['message'];
	}

	if(isset($allpostval['tym'])){
		$tym = $allpostval['tym'];
	}

	if(isset($allErrs['name'])){
		$nameErr = $allErrs['name'];
	}

	if(isset($allErrs['email'])){
		$emailErr = $allErrs['email'];
	}


	if(isset($allErrs['phone'])){
		$phoneErr = $allErrs['phone'];
	}


	if(isset($allErrs['tym'])){
		$tymErr = $allErrs['tym'];
	}


	if(isset($allErrs['message'])){
		$messageErr = $allErrs['message'];
	}

	if(isset($allErrs['pid'])){
		$projectErr = $allErrs['pid'];
	}

?>   


<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

	<!-- Google Tag Manager -->


	<!-- End Google Tag Manager -->

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Kumar | Shops | Commercial</title>

	<meta name="description" Content="Commercial Office space for sale and lease in Hadapsar">

	<meta name="keywords" Content="Office Space">

	<link rel="shortcut icon" href="images/Logo/favicon.png" type="image/x-icon">
	<!-- <link rel="icon" href="images/favicon.png" type="image/x-icon"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/plugins.js" type="text/javascript"></script>
	<script src="assets/js/app88a7.js?v=13821" type="text/javascript"></script>
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/mobile-desktop.css">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<script src="assets/js/ajax-contact.js"></script>		

	<!--   <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
	<!-- <script type="text/javascript">
		window.addEventListener('load', function() {
			setTimeout(lazyLoad, 1000);
		});
		function lazyLoad() {
			var card_images = document.querySelectorAll('.lazyImg');
			card_images.forEach(function(card_image) {
				var image_url = card_image.getAttribute('data-image-full');
				card_image.style.backgroundImage = 'url(' + image_url + ')';
				card_image.className = card_image.className + ' is-loaded';
			});
		}

		document.addEventListener("DOMContentLoaded", function() {
		  var lazyloadImages = document.querySelectorAll("img.lazy");    
		  var lazyloadThrottleTimeout;
		  
		  function lazyload () {
		    if(lazyloadThrottleTimeout) {
		      clearTimeout(lazyloadThrottleTimeout);
		    }    
		    
		    lazyloadThrottleTimeout = setTimeout(function() {
		        var scrollTop = window.pageYOffset;
		        lazyloadImages.forEach(function(img) {
		            if(img.offsetTop < (window.innerHeight + scrollTop)) {
		              img.src = img.dataset.src;
		              img.classList.remove('lazy');
		            }
		        });
		        if(lazyloadImages.length == 0) { 
		          document.removeEventListener("scroll", lazyload);
		          window.removeEventListener("resize", lazyload);
		          window.removeEventListener("orientationChange", lazyload);
		        }
		    }, 20);
		  }
		  
		  document.addEventListener("scroll", lazyload);
		  window.addEventListener("resize", lazyload);
		  window.addEventListener("orientationChange", lazyload);
		});

	</script> -->

		<style>
			html {
				scroll-behavior: smooth;
			}
		</style>
		<!-- <script src='//trkr.scdn1.secure.raxcdn.com/t/5bc4999e7c0dac6975a19805.js'></script> -->
		<style>.carousel-fade .carousel-item {
			opacity: 0;
			transition-duration: 1.2s;
			transition-property: opacity;
		}

		.carousel-fade  .carousel-item.active,
		.carousel-fade  .carousel-item-next.carousel-item-left,
		.carousel-fade  .carousel-item-prev.carousel-item-right {
			opacity: 1;
		}

		.carousel-fade .active.carousel-item-left,
		.carousel-fade  .active.carousel-item-right {
			opacity: 0;
		}

		.carousel-fade  .carousel-item-next,
		.carousel-fade .carousel-item-prev,
		.carousel-fade .carousel-item.active,
		.carousel-fade .active.carousel-item-left,
		.carousel-fade  .active.carousel-item-prev {
			transform: translateX(0);
			transform: translate3d(0, 0, 0);
		}
	</style>
</head>
<body style="box-shadow: 0 20px 44px rgb(0 0 0 / 20%), 0 0 5px rgb(0 0 0 / 20%);">


	<div class="enquire_floating mobEqNow" style="" onclick="div_show()">
		Enquire Now
	</div>



	<style>
		.enquire_floating{
		/*          background: #FF9575;*/
/*				background: #BF3312;*/
				background: #f1eedf;
				position: fixed;
				top: 35%;
				right: -1px;
/*				color: #ffffff;*/
				color: #95492b;
				font-size: 18px;
				z-index: 3;
				padding: 19px 9px;
				transform: rotate(-180deg);
				/*     transform: rotate(-90deg); */
				writing-mode: vertical-lr;
				cursor: pointer;
				font-size: 13px;
				font-weight: 600;
				box-shadow: 0 0 14px -5px;
				border: 1px solid #95492b;
		}
	</style>



	<!-- <div class="overlay">
        <img src="images/developerlogo.png" alt="" class="logoLoading" style="width:200px">
      </div> -->

      <header id="header" class="">
      	<div class="container-fluid" style="display:flex;justify-content: center; padding: 0px 1rem;">
      		<div class="h-left">
      			<a href="index.html" class="logo" style="color: #fff;display: flex; ">

      				<!-- <img src="images/final kumar corp logo with tagline-200x69.png" style="width:auto;height:45px; margin: 0px 20px;"> -->
      				<img src="images/Logo/Tower-logo1-jpg.png" style="width:auto;height:55px;">
      			</a>
      			<nav>
      				<ul style="margin-bottom:0;">
      					<!-- <li><a href="#sec-banner" class="home" title="#">Home</a></li> -->
      					<li><a href="#sec-overview" class="overview1" title="Overview">Overview</a></li>
      					<li><a href="#sec-highlights" class="overview1" title="Location">Highlights</a></li>
						<!-- 					
						<li><a href="#sec-configuration" class="residences" title="Residences">Residences</a></li> -->
						<!-- <li><a href="#sec-amenities" class="overview1" title="Amenities">Amenities</a></li> -->
						<!-- <li><a href="#sec-gallery1" class="overview1" title="Gallery">Gallery</a></li> -->
						<li><a href="#sec-gallery" class="overview1" title="Floor Plan">Floor Plan</a></li>
						<!-- <li><a href="#sec-location" class="overview1" title="Location">Location</a></li> -->
						<li><a href="#sec-about" class="overview1" title="About Us">About Us</a></li>
					</ul>
				</nav>
			</div>
	<div class="right">
		<!-- <a html="true" href="tel:+919595110011" class="callNow" style="color:#e87816" ><img src="images/phone.png" style="filter:brightness(0)" width="16" height="16" > <span id="display_no"></span></a> -->
		<!-- <script>
			obApi('track', 'Enquire Now');
		</script> -->

	        <!-- <a href="index.html" class="logo" style="color: #fff;">
						<img src="images/developerlogo.png" style="width:120px;">
					</a> -->
	<!--         <a href="javascript:void(0);" class="" title=""> <img class="logoimgmain" src="images/developerlogo.png" alt="" class="" style="width: 70px;
		padding-right: 20px;"></a> -->

		

			<!-- <a href="javascript:void(0);" class="eq-header eqClick overview1 "  title="" onclick="div_show()">Enquire Now</a>   -->

			<!-- <a html="true" href="tel:+917676777111" class="callNow eq-header" style="color:#BF3312;text-align: center;" ><img src="images/phone.png" style="filter:brightness(0)" width="16" height="16" > <span id="display_no" style="text-align:center;">+91 9595 110011</span></a> -->
			<!-- <div style="display: flex;justify-content: center;align-items: center;" class="callNow eq-header" > -->
				<!-- <a html="javascript:void(0);" class="callNow eq-header" href="#" style="color:#BF3312; /*line-height: 0;*/ font-size: 12px;text-align:center;"> The Project is registered under MahaRERA : </br> P52100004518 </a> -->
			<!-- </div> -->
			<!-- <a href="javascript:void(0);" class="eq-header eqClick overview1 btn rounded-pill btn-success smooth-scroll-middle shadow" style="border-radius: 50rem!important;background-color: #c3c3c3;
				border-color: #c3c3c3;box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;" title="" onclick="div_show()">Contact Us</a>
			<img src="images/final kumar corp logo with tagline-200x69.png" style="width:auto;height:40px; margin: 0px 20px;">
			<a href="javascript:void(0);" class="hamburger" id="hamburger" title="">
				<span></span>
				<span></span>
				<span></span>
			</a> -->
	</div>

</div>
</header><!-- /header -->

<!--   hidden-xs -->
<style>
	@media (max-width:767px){
		.hidden-xs{
			display:none!important
		}

		header, header.fixed{
/*      background: linear-gradient(#000, #000000b0);  */
backdrop-filter:unset;
}


@media only screen and (max-width:480px)
{
	.logoimgmain{
		width:80px !important; 
	}
}
</style>

<!-- <main> -->
	<!--home Section -->
	<section id="home" class="home">
		<!-- <div class="overlay"> -->
			<!-- <div class="home_skew_border"> -->
				<!-- <div class="container"> -->
					<!-- <div class="row"> -->
						<!-- <div class="col-lg-12 col-md-8 col-sm-12"> -->
		                        <!-- <div class="main_home_slider text-center ">
		                            <div class="single_home_slider">
		                                <div class="hero">

		                                    <video autoplay loop muted plays-inline class="back-video mobile" poster="images/banner/deskstopbanner_v1.png">
		                                       <source src="images/Lodha_World's_Finest 4-5_07.mp4"> 
		                                    </video>
		                                    <video autoplay loop muted plays-inline class="back-video desk">
		                                       <source src="images/Prospera_video3.mp4"> 
		                                    </video>    

		                                    <div class="content fadeInUp">
		                                        <h1>Prospera</h1>
		                                        <a href="#feature">Landscape Design by <br>	Gregory Kunak , Singapore.</a>
		                                    </div>

		                                </div>
		                                
		                            </div>
		                            
		                          </div> -->
		                          <!-- </div> -->
		                          <!-- </div> -->
		                          <!-- </div> -->
		            <!-- <div class="scrooldown">
		                <a href="#feature"><i class="fa fa-arrow-down"></i></a>
		              </div> -->
		              <!-- </div> -->
		              <!-- </div> -->
		            <!-- </section> -->
		            <!--End of home section -->
		            <!-- <section class="sec-banner" id="sec-banner"> -->

<!-- 			<div class="container" align="center">
				<div class="hidden-xs" style="margin-top: -300px;">
          <div class="bannerTxt1" style="color:#fff; font-size:27px;line-height:1.4; word-spacing:2px; min-width:93vw;">
Make a smart move.<br>With India’s largest* real estate developer</div>
          <center style="border: 2px solid #bd9234; width:130px; margin:15px 0px"></center>
          <div class="" style="color:#fff; font-size:22px;line-height:1.4; min-width: 93vw;">3 BHK homes starting from <span style="font-family: DejaVu Sans;">&#x20b9;</span><span>&nbsp;XXX</span></div>
				</div>
        
        <div class="visible-xs" style="margin-left:-7px; margin-top: -300px;">
             <div class="bannerTxt1" style="color:#fff; font-size:15px;line-height:1.4; word-spacing:2px; min-width:93vw;">
Make a smart move.<br>With India’s largest* real estate developer</div>
          <center style="border: 1px solid #bd9234; width:100px; margin:15px 0px"></center>
          <div class="" style="color:#fff; font-size:15px;line-height:1.4; min-width: 93vw;">3 BHK homes starting from <span style="font-family: DejaVu Sans;">&#x20b9;</span><span>&nbsp;XXX</span></div>
          </div>
        </div> -->

        <!-- 			<span class="bannerDisclaimer">*T&C apply.</sspan> -->
        	<div class="scrollDown" id="scrollDown">
        		<div class="circle">

        		</div>
        	</div>

        	<!-- swiper-slide -->
        	<div class="swiper-container main-slider loading" style="position:relative; ">
        		<div class="swiper-wrapper">
        			<div class="">

        				<div class="" >
        					<picture >
        						<source srcset="images/banner/BannerM(23-11-2023).jpg" media="(max-width: 420px)" />
        						<source srcset="images/banner/PTT-Commercial_Banner_1920-x-900.jpg" media="(max-width: 1024px)" />
        						<source srcset="images/banner/PTT-Commercial_Banner_1920-x-900.jpg" media="(max-width: 1440px)" />

        						<img src="images/banner/PTT-Commercial_Banner_1920-x-900.jpg" />
        						<!-- <img src="images/banner/Banner22.jpg" /> -->
        							<!-- <h4 class="title2 has-animation" style="color:#2d1c14; font-size:60px; position: relative;top: -800px;left: 100px" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
        								Prime Business Space
        							</h4>
        							<h5 class=" has-animation" style="color:#000;font-size:40px;padding-bottom:10px;position: relative;top: -800px;left: 100px " data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
        									Neighbouring
        							</h5>
        							<h5 class=" has-animation" style="color:#000;font-size:40px;padding-bottom:10px;position: relative;top: -800px;left: 100px " data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
        								Mega malls, Premium residences ,
        							<h5 class=" has-animation" style="color:#000;font-size:40px;padding-bottom:10px;position: relative;top: -800px;left: 100px " data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
        								IT parks and Industerial Area.
        							</h5> -->
        						</picture>
        					</div>
        				</div>
<!-- 			    <div class="swiper-slide">
			      <div class="slide-bgimg" >
				    <picture>
						<source srcset="images/banner/mobilebanner_2.png" media="(max-width: 420px)" />
						<source srcset="images/banner/desktopbanner_2.png" media="(max-width: 800px)" />
						<source srcset="images/banner/desktopbanner_2.png" media="(max-width: 1440px)" />
						<img src="images/banner/desktopbanner_2.png" />
					</picture>
			      </div>
			    </div> -->
<!-- 			    <div class="swiper-slide">
			      <div class="slide-bgimg" >
				    <picture>
						<source srcset="images/banner/mobilebanner_3.png" media="(max-width: 420px)" />
						<source srcset="images/banner/desktopbanner_3.png" media="(max-width: 800px)" />
						<source srcset="images/banner/desktopbanner_3.png" media="(max-width: 1440px)" />
						<img src="images/banner/desktopbanner_3.png" />
					</picture>
			      </div>
			    </div> -->
			  </div>
			  <!-- If we need navigation buttons -->
			</div>
			<div class="swiper-pagination"></div>
		</section>

		<style>

			.hidetext{ margin-top: -28px; margin-left: 261px; }   @media only screen and (max-width:1024px) { .hidetext{ margin-top: 86px; margin-left: 211px; }   .main-slider .swiper-slide .slide-bgimg { width: 100%;/* height: 45%; */ }  .sec-banner { height: calc(var(--vh, 1vh) * 41); }  }   @media only screen and (max-width:767px) { .hidetext{ display:none; }  .sec-banner { height: calc(var(--vh, 1vh) * 90); }  }  


			@media only screen and (max-width:760px)
			{
				.hidetext{
					display:none;
				}
			}


			a:hover, a:focus {
				color: #000 !important;
				text-decoration: underline;
			}
		</style>





<!--     <section>
     <div class="location-para">
				<h4 class="title2 has-animation" >Site Address</h4>
				<p class="has-animation">Thellohalli Agrahara, Karnataka 562110
</p>
			</div>
		</section> -->



<!--     <section style="background:#000; height:20px" id="sec-overview">
			<div class="container">
        <center>
          <img src="images/3icons.png" class="title1" style="width:650px"><br>
        </center>
			</div>
		</section> -->

<!--     <section id="" style="background-image: url(images/back.jpg); padding-bottom:50px; padding-top:50px" data-image-full="images/configuration.jpg?=v1.1">
			<div class="container" align="center">
				<img src="images/column.png" style="width:800px"/>
			</div>
		</section> -->

<!--     <section class="sec-location" id="sec-overview" style="overflow:hidden; padding-top:100px; padding-bottom: 70px; background: linear-gradient(45deg, #4a84c4, black);">
        <div class="section-header">
          <div class="container">
				<h4 class="title2 has-animation" style="color:#fff">6 REASONS TO UPGRADE YOUR LIFE</h4>
			</div>
          
        <div class="row  wow zoomIn" style="text-align:center">
         
          <div class="col-sm-12" style="color:#fff">
             <div>

            <div class="col-sm-3">
            <img src="images/icons/icon1x.png" style='width:80px'/>
            <p>The Tallest Development in the Vicinity</p>
            </div>
            
            
             <div class="col-sm-3">
            <img src="images/icons/icon2x.png" style='width:85px'/>
            <p>Splendid Views</p>
            </div>
            
            
             <div class="col-sm-3">
            <img src="images/icons/icon3x.png" style='width:90px'/>
            <p>At the Heart of Seamless Connectivity</p>
            </div>
            
             <div class="col-sm-3">
            <img src="images/icons/icon4x.png" style='width:90px'/>
            <p>25+ Lifestyle Amenities to Indulge Every Day</p>
            </div>
            
                         <div class="col-sm-3">
            <img src="images/icons/icon5r.png" style='width:90px'/>
            <p>Jain Temple</p>
            </div>
            
                         <div class="col-sm-3">
            <img src="images/icons/icon6x.png" style='width:90px'/>
            <p>Beautifully-Designed Residences</p>
            </div>
            
        </div>
          </div>
            
        </div>
          </div>
        </section> -->

        <style>
        	#sec-highlights .col-md-2{
        		padding: 10px;
        	}

        	.maintitle{
        		line-height:50px;
        	}

        	.maincontent{
        		line-height:27px;
        	}

        	.rightcont{
        		display:flex;
        		align-items:center;
        		justify-content:left;
/*         height:100%; */
/*         width:100%; */
}

.leftcont{
	display:flex;
	align-items:center;
	justify-content:left;
/*         height:100%; */
/*         width:100%; */
}



.highcont{
	justify-content:right;
	text-align: right;
}

@media only screen and (max-width:480px){
	.rightcont,.leftcont,.highcont{
		text-align:center;
		margin: 0px 15px 15px;
	}
}
</style>




    <style>
    	@media only screen and (max-width:480px)
    	{
    		.lefthigh{
    			margin: 0px 15px 15px;
    		}
    	}
    </style>

    <style type="text/css">
    	.spacer {
    		height: 100vh;
    	}

    	.background-text {
    		margin-top: 150px;
    		transition: 1s ease-in-out all;
    		text-align: center;
    		list-style: none;
    		background: #f5f5f5;
    	}

    	.background-text__item {
    		font-family: "Orbitron";
    		font-style: normal;
    		font-weight: 900;
    		font-size: 100px;
    		line-height: 120px;
    		text-transform: uppercase;
    		color: wheat;
    		text-align: center;
    		background: transparent;
    		z-index: -1111;
    	}</style>

    <!-- <div class="spacer"></div>

    <ul class="background-text">
      <li class="background-text__item">we love</li>
      <li class="background-text__item">your smile</li>
      <li class="background-text__item">please, take care</li>
      <li class="background-text__item">of yourself</li>
    </ul>

    <div class="spacer"></div>

    <ul class="background-text">
      <li class="background-text__item">we love</li>
      <li class="background-text__item">your smile</li>
      <li class="background-text__item">please, take care</li>
      <li class="background-text__item">of yourself</li>
    </ul>

    <div class="spacer"></div>
  -->
  <script type="text/javascript">
  	Result Skip Results Iframe
  	EDIT ON
  	gsap.registerPlugin(ScrollTrigger);

  	document.body.style.overflow = "auto";

  	const backTextWrapper = document?.querySelectorAll(".background-text");

  	backTextWrapper.forEach((section) => {

  		const textLines = section?.querySelectorAll(".background-text__item");

  		textLines.forEach(function(line, index) {

  			const [x, xEnd] = index % 2
  			? [window.innerWidth, (line.scrollWidth - section.offsetWidth) * -1]
  			: [line.scrollWidth * -1, 0];

  			gsap.fromTo(
  				line,
  				{ x },
  				{
  					x: xEnd,
  					scrollTrigger: {
  						trigger: section,
  						scrub: 0.5,
  						start: 'top bottom',
  						end: 'bottom top',
             // markers: true
  					}
  				}
  				);

  		})

  	});
  </script>

  

  <section class="sec-overview" id="sec-overview" style="position:relative; background:#f7f7f7;overflow:hidden;padding: 0px; ">

  	<div class="row">
  		<div class="leftcont lefthigh col-md-6 " data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine" style="display: flex;justify-content:center; align-items: center;">

  			<img src="images/Overview/man_entrance.jpg" style="    width: 100%;  box-shadow:
  			0px 50px 80px rgba(0, 0, 0, 0.07)
  			;">
            	<!-- <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            	  <ol class="carousel-indicators">
            	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            	  </ol>
            	  <div class="carousel-inner"style="box-shadow: 0 0 14px -5px; border-radius: 5px 50px;">
            	    <div class="carousel-item active ">
            	      <img class="d-block w-100" src="images/gallery/BirdEye Night View870 X 440.jpg" alt="First slide">
            	    </div>
            	    <div class="carousel-item">
            	      <img class="d-block w-100" src="images/gallery/Artistic-View_c.jpg" alt="Second slide">
            	    </div>
            	    <div class="carousel-item">
            	      <img class="d-block w-100" src="images/gallery/Bird's Eye Night View870 X 440.jpg" alt="Third slide">
            	    </div>
            	  </div>
            	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            	    <span class="sr-only">Previous</span>
            	  </a>
            	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
            	    <span class="sr-only">Next</span>
            	  </a>
            	</div> -->
            	<!-- <img style="box-shadow: 0 0 14px -5px; border-radius: 5px 50px;" src="images/gallery/Bird's Eye Night View870 X 440.jpg"> -->
            </div>

            <div class="rightcont col-md-6">


            	<div class="" style="padding:20px;" >
            		<h4 class="title2 " style="color:#2d1c14; display: flex;justify-content: center;align-items: center;" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
            			Reach Out To Success
            		</h4>

            		<br><br>

            		<!-- <div class="title2 has-animation" style="">‘Kumar Primus’ is yet another business landmark from a brand synonymous with leadership, quality and reliability.</div> -->
            		<!-- <div class="container"> -->
            			<div class="row">
            				<div class="col-lg-4" data-aos="fade-left"data-aos-offset="300"data-aos-easing="ease-in-sine" data-aos-duration="1500" style="display:flex;justify-content: center;align-items: center;flex-direction: column;box-shadow:
            				100px 100px 80px rgba(0, 0, 0, 0.07)
            				;border-radius: 25px;">
            				<img src="images/icon/location.png" >
            				<br><br>
            				<h5 class="title2 " style="color:#000; font-size:20px;text-align: center;box-shadow:
            				100px 100px 80px rgba(0, 0, 0, 0.07)
            				;">
            				Ready to Move
            			</h5>  
            		</div>
            		<div class="col-lg-4"data-aos="fade-left"data-aos-offset="300"data-aos-easing="ease-in-sine" data-aos-duration="1000" style="display:flex;justify-content: center;align-items: center;flex-direction: column;box-shadow:
            		100px 100px 80px rgba(0, 0, 0, 0.07)
            		;border-radius: 25px;">
            		<img src="images/icon/Connectivity.png">
            		<br><br>
            		<h5 class="title2 " style="color:#2d1c14; font-size:20px;text-align: center;box-shadow:
            		100px 100px 80px rgba(0, 0, 0, 0.07)
            		; border-radius: 25px;">
            		Easy <br> Connectivity
            	</h5>
            </div>
            <div class="col-lg-4" data-aos="fade-left"data-aos-offset="300"data-aos-easing="ease-in-sine" data-aos-duration="1200"style="display:flex;justify-content: center;align-items: center;flex-direction: column;box-shadow:
            100px 100px 80px rgba(0, 0, 0, 0.07)
            ;border-radius: 25px;">
            <img src="images/icon/road-facing.png">
            <br><br>
            <h5 class="title2 " style="color:#2d1c14; font-size:20px;text-align: center;box-shadow:
            100px 100px 80px rgba(0, 0, 0, 0.07)
            ;">
            Road-facing Frontage
          </h5>
        </div>
      </div>
      <br><br>

      <div class="row" style="display:flex;justify-content: center;align-items: center;">
      	<div class="col-lg-6"data-aos="fade-left"data-aos-offset="200"data-aos-easing="ease-in-sine" data-aos-duration="1000" style="display:flex;justify-content: center;align-items: center;flex-direction: column;box-shadow:
      	100px 100px 80px rgba(0, 0, 0, 0.07)
      	;border-radius: 25px;">
      	<img src="images/icon/factory.png">
      	<br><br>
      	<h5 class="title2 " style="color:#000; font-size:20px;text-align: center;">
      		Close to <br> Industrial Area , IT Hub
      	</h5>  
      </div>
      <div class="col-lg-6" data-aos="fade-left"data-aos-offset="200"data-aos-easing="ease-in-sine" data-aos-duration="1200" style="display: flex; justify-content: center;align-items: center;flex-direction: column;box-shadow:
      100px 100px 80px rgba(0, 0, 0, 0.07)
      ;border-radius: 25px;">
      <img src="images/icon/24-hours.png" width="75px">
      <br><br>
      <h5 class="title2 " style="color:#2d1c14; font-size:20px;text-align: center;">
      	24 x 7  Security
      </h5>
    </div>
    <br><br>
                  			<!-- <div class="col-lg-4">
                  				<img src="images/icon/location.png">
                  				<br><br>
                  									<h5 class="title2 has-animation" style="color:#2d1c14; font-size:31px;">
                  				            Road-facing Frontage
                  				            </h5>
                  				          </div> -->
                  				        </div>


                  				        <!-- </div> -->

                  				      </div>


                  				    </div>
                  				  </div>

                  				</section>

    <!-- <section id="financial" class="trial text-center wow fadeIn"  >
        <div class="main_trial_area" >
            		<div class="video_overlay sections" id="parallex" style="background-image: url(images/gallery/Bird_Eye_Night_View_900x600.jpg);">
                 <div class="container"> 
                        <div class="main_trial">
                            <div class="col-lg-12 col-sm-12">
                                <a href="corporate-filings.php" class=""></a>
                            </div>
                        </div>
                </div>
          </div>
        </div>
      </section> -->


      <!-- <section class="sec-amenities" id="sec-amenities" style="background:#CAD5E2;">
      	<div class="container">
      		<h4 class="title2 has-animation" style="color:#000 ;font-family: 'Poppins', sans-serif; line-height: 70px;" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500" > Amazing <span style="color:#BF3312">Highlights</span></h4>
      		<br>
					<h5 class="title2 has-animation"></h5>
         <h4 class="has-animation"  style="color:#fff;font-size:18px;">Your home at Atrium opens up myriad ways to stay fit and healthy. Discover a multitude of sports, games and open spaces for activities right beside your home. 
         </h4>

         <div class="amenitiesSliContainer">
         	<div class="ame-prev ame-back" >
         		<img src="images/arrowwhite.png" style="filter:brightness(1);
         		width: 20px;
         		margin-right: -80px;"/>
         	</div>
         	<div class="ame-next ame-next" style="filter:brightness(1);width: 20px;
         	margin-right: -20px;">
         	<img src="images/arrowwhite.png" />
         </div>

         <div class="swiper-container has-animation" id="amenities-carousel" >

         	<div class="swiper-wrapper">

         		<div class="swiper-slide">
         			<picture class="lazy-picture">
         				<source srcset="images/highlight/KUMAR_PRIMUS_GEVP4060 copy _800 x 800.jpg" />
         				<img src="images/highlight/KUMAR_PRIMUS_GEVP4060 copy _800 x 800.jpg" />
         			</picture>
         			<p  style="color:#000">10-Storeyed Building</p>
         		</div>

         		<div class="swiper-slide">
         			<picture class="lazy-picture">
         				<source srcset="images/amenities/MultipurposeCourt.jpg">
         					<img src="images/amenities/MultipurposeCourt.jpg">
         				</picture>
         				<p style="color:#000">Easy Connectivity</p>
         			</div>

         			<div class="swiper-slide">
         				<picture class="lazy-picture">
         					<source srcset="images/amenities/Podium.jpg" />
         					<img src="images/amenities/Podium.jpg" />
         				</picture>
         				<p  style="color:#000">Road-facing Frontage</p>
         			</div>
         			<div class="swiper-slide">
         				<picture class="lazy-picture">
         					<source srcset="images/amenities/amphitheator.jpg" />
         					<img src="images/amenities/amphitheator.jpg" />
         				</picture>
         				<p  style="color:#000">Close to Industrial Area</p>
         			</div>

         			<div class="swiper-slide">
         				<picture class="lazy-picture">
         					<source srcset="images/amenities/EntranceGate.jpg" />
         					<img src="images/amenities/EntranceGate.jpg" />
         				</picture>
         				<p  style="color:#f4c93f">24 x 7 Security</p>
         			</div>


               <div class="swiper-slide">
				        	<picture class="lazy-picture">
							  <source srcset="images/amenities/yoga.png" />
							  <img src="images/amenities/yoga.png" />
							</picture>
				        	<p style="color:#f4c93f">Yoga and Meditation Pavilion</p>
				        </div>
              
              
               <div class="swiper-slide">
				        	<picture class="lazy-picture">
							  <source srcset="images/amenities/jogging.png" />
							  <img src="images/amenities/jogging.png" />
							</picture>
				        	<p style="color:#f4c93f">Jogging and Cycling Track</p>
				        </div>

				        

				      </div>
				    </div>
				  </div>
				</div>
			</section> -->





<!-- 		<section  id="sec-configuration" style="background-image: url(images/back.png);	   
					background-attachment: fixed; background-size: cover; background-position: center center;
					background-repeat: no-repeat;width:100%; height:100%;padding-bottom:150px; padding-top:150px; position:relative">
			<div class="container" style="    position: relative;z-index: 2;">
				<div class="configuration-para" align="center" style="color:#fff">
					<h4 class="title2 has-animation" >Devanahalli
the Most
Happening
Location by
Vocation</h4>
					<p class="has-animation" style="text-align:center;font-size: 18px;">
					 A blend of Mother Nature, suburban serenity and contemporary conveniences, Dukes Legend Sujay is a true blueprint for celebrating life.
 		<br>
Away from urban clutter yet close enough for convenient drive to the city, thanks to upcoming 90-metre wide STRR of four lanes, IRR and TRR passageways as well as widening of NH7 to 8 lanes.
<br>
Ideal to reconnect with family and friends, this fast developing part of Bengaluru is known as pollution-free IT corridor, where maintaining work life balance is effortless.
<br>
City's best educational institutions and many prestigious housing projects are all around. A high-flyers' dream destination, it's only a few minutes’ drive to Kempegowda International Airport. The resourceful locale is well-placed 
commercially with under 10 km driving distance to Aero SEZ, Hardware Park and Finance City, and key business districts of Bengaluru within easy reach
            

          </p>
				</div>

			</div>
		</section> -->

		<style>
			#sec-amenities p{
				color:#000 !important;


			}

			#amenities-carousel .swiper-slide img {
				filter:brightness();
			}

		</style>

		

		<style>
			#gallery-carousel .swiper-slide {
				position: relative;
			}
			#gallery-carousel picture::after {
				position: absolute;
/*           content: 'Artistic Impression'; */
bottom: 0;
right: 0;
font-size: 10px;
color: #fff;
background: #000;
padding: 2px 7px;
}


#gallery-carousel2 .swiper-slide {
	position: relative;
}
#gallery-carousel2 picture::after {
	position: absolute;
	content: 'Artistic Impression';
	bottom: 0;
	right: 0;
	font-size: 10px;
	color: #fff;
	background: #000;
	padding: 2px 7px;
}

.formControl input{
	color: #000 !important;
}


</style>
    <!-- <section class="" id="sec-walk" style="padding-top:60px; padding-bottom: 70px;">
    			<div class="container">
            <center> <h4 class="title2 has-animation" style="padding-bottom:12px">Model Flat Walkthrough</h4></center>
            <div class="row">
              <div class="col-md-3">
              </div>
              <div class="col-md-6">
                									<iframe width="100%" height="300px" src="https://www.youtube.com/embed/8AaVQ6JFnbo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

              </div>
              <div class="col-md-3">
              </div>
            </div>
			</div>
		</section> -->
		


			<section class="sec-gallery" id="sec-gallery" style="position:relative; background:#f1eedf;overflow:hidden;">
				<div class="container">
					<div class="gallery-para">
						<h4 class="title2 has-animation" style="padding-bottom:12px; border-radius: 5px 30px;" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500"  >Floor <span style="color:#95492b">Plans</span> </h4>


					</div>
					<center>

<!--         <div class="triggerbtns">
          <div id="terr">Images</div>
          <div id="podi">Floor Plans</div>
          
        </div> -->
      </center>


    </div>





    <div id="ami1">
    	<div class="gallerySlider">
    		<div class="arrow-prev arrow-slide " >
    			<img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDI0MC44MjMgMjQwLjgyMyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMjQwLjgyMyAyNDAuODIzOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCI+CjxnPgoJPHBhdGggaWQ9IkNoZXZyb25fUmlnaHRfMV8iIGQ9Ik0xODMuMTg5LDExMS44MTZMNzQuODkyLDMuNTU1Yy00Ljc1Mi00Ljc0LTEyLjQ1MS00Ljc0LTE3LjIxNSwwYy00Ljc1Miw0Ljc0LTQuNzUyLDEyLjQzOSwwLDE3LjE3OSAgIGw5OS43MDcsOTkuNjcxbC05OS42OTUsOTkuNjcxYy00Ljc1Miw0Ljc0LTQuNzUyLDEyLjQzOSwwLDE3LjE5MWM0Ljc1Miw0Ljc0LDEyLjQ2Myw0Ljc0LDE3LjIxNSwwbDEwOC4yOTctMTA4LjI2MSAgIEMxODcuODgxLDEyNC4zMTUsMTg3Ljg4MSwxMTYuNDk1LDE4My4xODksMTExLjgxNnoiIGZpbGw9IiMwMDAwMDAiLz4KCTxnPgoJPC9nPgoJPGc+Cgk8L2c+Cgk8Zz4KCTwvZz4KCTxnPgoJPC9nPgoJPGc+Cgk8L2c+Cgk8Zz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
    		</div>
    		<div class="arrow-next arrow-slide " >
    			<img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDI0MC44MjMgMjQwLjgyMyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMjQwLjgyMyAyNDAuODIzOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCI+CjxnPgoJPHBhdGggaWQ9IkNoZXZyb25fUmlnaHRfMV8iIGQ9Ik0xODMuMTg5LDExMS44MTZMNzQuODkyLDMuNTU1Yy00Ljc1Mi00Ljc0LTEyLjQ1MS00Ljc0LTE3LjIxNSwwYy00Ljc1Miw0Ljc0LTQuNzUyLDEyLjQzOSwwLDE3LjE3OSAgIGw5OS43MDcsOTkuNjcxbC05OS42OTUsOTkuNjcxYy00Ljc1Miw0Ljc0LTQuNzUyLDEyLjQzOSwwLDE3LjE5MWM0Ljc1Miw0Ljc0LDEyLjQ2Myw0Ljc0LDE3LjIxNSwwbDEwOC4yOTctMTA4LjI2MSAgIEMxODcuODgxLDEyNC4zMTUsMTg3Ljg4MSwxMTYuNDk1LDE4My4xODksMTExLjgxNnoiIGZpbGw9IiMwMDAwMDAiLz4KCTxnPgoJPC9nPgoJPGc+Cgk8L2c+Cgk8Zz4KCTwvZz4KCTxnPgoJPC9nPgoJPGc+Cgk8L2c+Cgk8Zz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
    		</div>
    		<div class="swiper-container has-animation" id="gallery-carousel" >
    			<div class="swiper-wrapper" style="position:relative;top: 0!important;">

<!--                         <div class="swiper-slide">
							<a href="images/gallery/fl1.jpg" data-fancybox="gallery">
							<picture class="">
								<source srcset="images/gallery/fl1.jpg" />
								<img class="" src="images/gallery/fl1.jpg" />
							</picture>
							<center><p style="color:#000;padding-top:10px">Image Title</p></center>
								<center><p style="border-bottom: 1px solid #bd9234; width:100px;"></p></center>
							</a>
						</div>
    
                     
    
                        <div class="swiper-slide">
							<a href="images/gallery/fl3.jpg" data-fancybox="gallery">
							<picture class="">
								<source srcset="images/gallery/fl3.jpg" />
								<img class="" src="images/gallery/fl3.jpg" />
							</picture>
							<center><p style="color:#000;padding-top:10px">Image Title</p></center>
								<center><p style="border-bottom: 1px solid #bd9234; width:100px;"></p></center>
							</a>
						</div>
    
               <div class="swiper-slide">
							<a href="images/gallery/fl4.jpg" data-fancybox="gallery">
							<picture class="">
								<source srcset="images/gallery/fl4.jpg" />
								<img class="" src="images/gallery/fl4.jpg" />
							</picture>
							<center><p style="color:#000;padding-top:10px">Image Title</p></center>
								<center><p style="border-bottom: 1px solid #bd9234; width:100px;"></p></center>
							</a>
						</div>
                 <div class="swiper-slide">
							<a href="images/gallery/fl2.jpg" data-fancybox="gallery">
							<picture class="">
								<source srcset="images/gallery/fl2.jpg" />
								<img class="" src="images/gallery/fl2.jpg" />
							</picture>
							<center><p style="color:#000;padding-top:10px">Image Title</p></center>
								<center><p style="border-bottom: 1px solid #bd9234; width:100px;"></p></center>
							</a>
						</div> -->

						<!-- <div class="swiper-slide">
							<a  class="mobEqNow" href="javascript:void(0);" onclick="div_show()"> -->
								<!-- <picture class=""> -->
									<!-- <source  srcset="images/gallery/floorPlan1.png" /> -->
									<!-- <a href="">Get Details</a> -->
									<!-- <img src="images/gallery/Primus1ndFloor.jpg"/> -->
									<!-- </picture> -->
							<!-- <center><p style="color:#000;padding-top:10px">Image Title</p></center>
								<center><p style="border-bottom: 1px solid #bd9234; width:100px;"></p></center> -->
								<!-- </a> -->
								<!-- </div> -->
								<style type="text/css">
									.button {
										background-color: #4CAF50; /* Green */
										border: none;
										color: white;
										padding: 15px 32px;
										text-align: center;
										text-decoration: none;
										display: inline-block;
										font-size: 16px;
										margin: 4px 2px;
										cursor: pointer;
										-webkit-transition-duration: 0.4s; /* Safari */
										transition-duration: 0.4s;
										display: flex;
/*							  align-items: center;*/
/*							  justify-content: center;*/

position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
-ms-transform: translate(-50%, -50%);
background-color: #555;
color: white;
font-size: 16px;
padding: 12px 24px;
border: none;
cursor: pointer;
border-radius: 5px;
}
.button1 {
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2:hover {
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}</style>
<div class="swiper-slide">
	<a class="mobEqNow" href="javascript:void(0);" onclick="div_show()" style="padding:15px 20px; : red;">
		<!-- <picture class=""> -->
			<!-- <source srcset="images/gallery/floorPlan1.png" /> -->
			<img  src="images/FloorPlan/Primus1ndFloor.jpg" style="filter: blur(8px);-webkit-filter: blur(5px);"/>
			<button class="button button2">Get Details</button>
			<!-- </picture> -->
							<!-- <center><p style="color:#000;padding-top:10px">Image Title</p></center>
								<center><p style="border-bottom: 1px solid #bd9234; width:100px;"></p></center> -->
							</a>
						</div>
						<div class="swiper-slide">
							<a class="mobEqNow" href="javascript:void(0);" onclick="div_show()">
								<!-- <a href="images/gallery/floorPlan1.png" data-fancybox="gallery"> -->
									<!-- <picture class=""> -->
										<!-- <source srcset="images/gallery/floorPlan1.png" /> -->
										<img class="" src="images/FloorPlan/Primus2ndFloor.jpg" style="filter: blur(8px);-webkit-filter: blur(5px);" />
										<button class="button button2">Get Details</button>
										<!-- </picture> -->
							<!-- <center><p style="color:#000;padding-top:10px">Image Title</p></center>
								<center><p style="border-bottom: 1px solid #bd9234; width:100px;"></p></center> -->
							</a>
						</div>

						<div class="swiper-slide">
							<a class="mobEqNow" href="javascript:void(0);" onclick="div_show()"  >
								<!-- <a href="images/gallery/floorPlan1.png" data-fancybox="gallery"> -->
									<!-- <picture class=""> -->
										<!-- <source srcset="images/gallery/floorPlan1.png" /> -->
										<img class="" src="images/FloorPlan/Primus1ndFloor.jpg"  style="filter: blur(8px);-webkit-filter: blur(5px);" />
										<button class="button button2">Get Details</button>
										<!-- </picture> -->
							<!-- <center><p style="color:#000;padding-top:10px">Image Title</p></center>
								<center><p style="border-bottom: 1px solid #bd9234; width:100px;"></p></center> -->
							</a>
							<!-- </div> -->

						</div>
					</div>
				</div>
			</div>





		</section>





		<script>
			$("#terr").css("background","#3d3f40");
			$("#terr").css("color","#000");
			$("#podi").css("background","#fff");
			$("#podi").css("color","#000");

			$("#terr").click(function(){

				$("#ami1").css("display","block");
				$("#ami2").css("display","none");

				$("#terr").css("background","#3d3f40");
				$("#terr").css("color","#fff");
				$("#podi").css("background","#fff");
				$("#podi").css("color","#000");


			});


			$("#podi").click(function(){

				$("#ami1").css("display","none");
				$("#ami2").css("display","block");

				$("#podi").css("background","#3d3f40");
				$("#podi").css("color","#fff");
				$("#terr").css("background","#fff");
				$("#terr").css("color","#000");


			});

			$(function(){
				$('#terr').trigger('click');
			});

		</script>







		<style>

			.triggerbtns div {
				display: inline-block;
				background: #fff;
				padding: 10px 70px;
				font-size: 18px;
				border-radius: 15px;
				color: #000;
				border: 1px solid #3d3f40;
				margin: 10px;
				cursor:pointer;
			}     
			.view360 {
				width:80vw;height:30vw;
			}

			@media only screen and (max-width: 600px) {
				.view360 {
					width:90vw !important;height:120vw !important;
				}
			}

		</style>

		<script>



			$("#terr1").css("background","#3d3f40");
			$("#terr1").css("color","#000");
			$("#podi1").css("background","#fff");
			$("#podi1").css("color","#000");

			$("#terr1").click(function(){

				$("#amin1").css("display","block");
				$("#amin2").css("display","none");

				$("#terr1").css("background","#3d3f40");
				$("#terr1").css("color","#fff");
				$("#podi1").css("background","#fff");
				$("#podi1").css("color","#000");


			});


			$("#podi1").click(function(){

				$("#amin1").css("display","none");
				$("#amin2").css("display","block");

				$("#podi1").css("background","#3d3f40");
				$("#podi1").css("color","#fff");
				$("#terr1").css("background","#fff");
				$("#terr1").css("color","#000");


			});

			$(function(){
				$('#terr1').trigger('click');
			});

		</script>




<!--     <section class="sec-overview" id="sec-overview" style="background: #fff;">
			<div class="container">
				
				<div class="configuration-para" >
          
           <center>

        
          <h5 class=" has-animation" style="color:#2d1c14; font-size:31px;">
           Dukes Shelters
            </h5>
             
					<p class="has-animation" data-delay="100"  style="color:#000">
            
           Subsidiary of Dukes India, renowned for the business of biscuits and confectionaries. 2 decades plus household brand in the competitive Biscuit & Confectionery market. Dukes has spread happiness and sweetness across India as well as foreign countries, including USA, UK, Australia, and Japan. Backed by its dedication to innovation, Dukes Shelters is developing over a million square feet in Hyderabad and creating landmarks in the process, while it has already sold 100+ acres. 

          

          </p>
             
             
              <br>
             <h5 class=" has-animation" style="color:#2d1c14; font-size:31px;">
          Legend India
            </h5>
            
					<p class="has-animation" data-delay="100"  style="color:#000">
            
          Legend has changed the merits of real estate companies in Telangana and Andhra Pradesh. A strong value-based company of more than 10,000 family members, adhering to quality standards in over 100 delivered projects in Hyderabad and completed 150+ acres of layout development in Visakhapatnam, including Legend Crest, Legend Elite, Legend Summit, Legend Kanak and more. 
          

          </p>
          </center>
				</div>
			</div>
		</section>
	-->


<!--     <section id="walkthrough" class="" style="padding:100px 0px; background:#f7f7f7">
    	<div class="container">
        <div class="">
           <h2 class="wow slideInDown" align="center" style="color:#000;text-transform:uppercase">
             <font style="font-family:'Quattrocento', serif; font-size:35px; text-transform:uppercase">Configuration</font></h2>
        </div><br>
        <div class="row" style="text-align:center">
          <div class="col-md-6 col-xs-12" style=" padding:15px">
            <div style="margin:0px 10px; border:1px solid #ad8c4c;padding: 20px;">
              <h2 style="color:#000; padding-top:20px">
                2 BHK
                </h2>
              
                  <div class="mobEqNow" data-toggle="modal" data-target="#enquiryModal" class="btn btn-warning" style="background: #ad8c4c;display: inline;padding: 10px 15px;border-radius: 9px;color: #fff;">CLICK FOR FLOOR PLAN</div>
               
            </div>
            	
            
          </div>
					 <div class="col-md-6 col-xs-12" style=" padding:15px">
             <div style="margin:0px 10px;border:1px solid #ad8c4c;padding: 20px;">
           <h2 style="color:#000; padding-top:20px">
                3 BHK
            </h2>
             
               <div class="mobEqNow" data-toggle="modal" data-target="#enquiryModal" class="btn btn-warning"  style="background: #ad8c4c;display: inline;padding: 10px 15px;border-radius: 9px;color: #fff;">CLICK FOR FLOOR PLAN</div>
                
             </div>
          </div>
					
        </div>
      </div>
    </section> -->


    <section class="wrapper style_1  " id="sec-about" >
    	<!-- <div class="inner"> -->
    		<section class="" id="about_kumar" >
    			<!-- <div class="container" style="padding:50px;"> -->
    				<!-- <div class="inner">	 -->
    					<div class="row">	

    						<!-- <div class="col-md-6 col-sm-6">
    							<div class="container" >
    								<h3 data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500" >A GOLDEN LEGACY OF OVER</h3>
    								<h3 id="decadesHead" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1700">5 DECADES	</h3><br>
    								<p data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1900">	Kumar Properties is a household name in Pune, thanks to the countless projects it has dotted across the city for over 5 decades.
    									<br><br> A consistent track record of timely delivery, high construction quality, and happy customers has resulted in numerous awards and accolades.</p>
    							</div>						
    							</div> -->
    							<div class="col-md-12 col-sm-12">
    								<!-- <div class="container" > -->
    									<img src="images/Kumar-Corp-Legacy.jpg" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">	
    								<!-- </div> -->
    							</div>	

    						</div>
    					<!-- </div>	 -->
    					<!-- </div> -->
    				</section>			
    				<!-- </div> -->
    			</section>					



    			



    				<section id="footer-section-form" class="" style="padding:75px 0 75px 0;margin:0; color:#fff; text-align:center;">
    					<div class="container" style="padding: 0 4em;">

    						<div class="has-animation" style="color:#fff;font-size: 40px;font-family: 'EB Garamond', serif;text-transform: uppercase;margin-bottom: 20px; color: #BF3312;" >Enquire Now</div>
    						<!-- <img src="images/leaf.png" style="width:60px;     filter: brightness(30);"> -->
    						<br>
    						<br>
    						<div class="row" style="display:flex;justify-content: center;align-items: center;">
    							<div class="col-md-6">
    								<div style="text-align:left">
    									<div style="font-size:25px;color: #BF3312;">
    										<b>For any query contact us at :</b>
    									</div>
    									<br>

    									<div style="font-size:20px;">
    										<a html="true" href="mailto:sales@kumarworld.com" class="footercallNow"style="color: #BF3312;">  Email : &nbsp; <span id="display_no" > sales@kumarworld.com</span></a>
    									  </div>
    									<br>
    									<div style="font-size:20px;">
    										<a html="true" href="tel:+919595110011" class="footercallNow"style="color: #BF3312;">  Phone : &nbsp; <span id="display_no" > +91 9595110011</span></a>
    									</div>
    									<!-- <div style="display:flex;" >
    										<a html="javascript:void(0);" class="footercallNow"style="color: #BF3312;"> The Project is registered under MahaRERA : </br> P52100004518 </a>
    										<img src="images/Primus - A ~ P52100004518.png" >
    									</div> -->
    									<br>
    									<br>
    								</div>
    							</div>

    							<div class="col-md-6" id="bottom-form2">
    								<div id="error" style="color:white; text-align:center"></div>
    								<div class="container" style="max-width: 97%;">

    									<form id="myForm1" onsubmit=" handleFormSubmit(event,'bottom-form2'); return false" method="POST" style="background-color: gray;
    									padding:36px;border-style: solid;border-color:#b4844f;">



    									<input type="hidden" id="hdn_country1">
    									<input type="hidden" id="hdn_dialcode1">
    									<input type="hidden" id="form_type1">
    									<input type="hidden" id="config_type1">

    									<input type="hidden" name="date" class="datenewform" value="">

    									<input type="text" class="form-control" id="name" name="name" placeholder="Name *" required>
    									<br>

    									<input type="email" class="form-control" id="email" name="email" placeholder="Email">

    									<br>
    									<input type="text" class="form-control" id="phone" name="phone" placeholder="Mobile *"  oninvalid="this.setCustomValidity('Enter valid 10 digit mobile number')"
    									oninput="this.setCustomValidity('')" pattern="[6-9]{1}[0-9]{9}" required>
    									<br>
    									<br>

    									<button type="submit" class="subBtn dissubmit">Submit</button>
    									<br>

    									<br>
    									<!-- <input type="checkbox" value="agree" id="dnd" name="agree" required checked style="width: 15px;min-height: 31px;"> -->
    									<!-- <label for="dnd" class="input_label" style="color: #fff;font-size: 10px;width: 84%;">I agree and authorize team to contact me. This will override the registry with DNC / NDNC</label> -->
    									<!-- 				<br><center><font style="font-size:11px; color:#fff"><b>&#169; Powered by ANAROCK DIGITAL.</b></font></center> -->

<!--         <div class="input_wrap block">
					<input type="checkbox" value="agree" id="dnd" name="agree" required checked>
					<label for="dnd" class="input_label" style="color:#fff; font-size:10px">I agree and authorize team to contact me. This will override the registry with DNC / NDNC</label>
				<br><center><font style="font-size:11px; color:#fff"><b>&#169; Powered by ANAROCK DIGITAL.</b></font></center>
			</div> -->


		</form>
	</div>
</div>
</div>
</div>

</section>

<style>
	#footer-section-form{
		background:radial-gradient(
              rgba(255, 49, 3, 0.896),
              rgba(251, 255, 0, 0.75)), ,url(images/Overview/KUMAR_PRIMUS_1920_1080.jpg);
		position:relative;
		background-attachment:fixed;
		background-position:center;
/*		background-size:cover;*/
		background-size: auto;	
         background:#c3c3c3; 
/*		filter: grayscale(70%);*/
		color:#000;

}

#footer-section-form .container{
	position:relative;
	z-index:3;
}

#footer-section-form::after{
	position: absolute;
	content: '';
          background: #000000;
width: 100%;
height: 100%;
top: 0;
left: 0;
}

</style>


<!--     <section id="enquireform" class="" style="padding:100px 0px; background:#f7f7f7">
      <div class="container" style="text-align:center">
        <script src='//trkr.scdn1.secure.raxcdn.com/t/forms/5bc4999e7c0dac6975a19805/5c8105c15e3c307d8ac32494.js' data-form-id='5c8105c15e3c307d8ac32494'></script>

        	
      </div>
      
    </section> -->





		<!-- <section class="sec-rera" style="background:#f7f7f7; padding-bottom:80px">
			<div class="container">
				<img src="images/maharera.png" alt="">
				<p>RERA Registration No.: PRM/KA/RERA/1251/446/PR/210302/003980
				<br>
				<br>Disclaimer : Interiors and fit-outs shown here if any, are not part of the standard offering. All architectural and interior views and images unless specified otherwise, are computer graphics artist impressions and simulated interpretation of actual property with an endeavor to impart clear informative understanding to the recipient with respect to the project and therefore, this printed material does not constitute an offer and/or contract of any type between the promoter (developer) and the recipient / proposed allottee. Prospective purchasers should make and must rely on their own enquiries. The colours of the buildings are indicative only. The information contained herein is believed to be correct but is not guaranteed. Any purchaser under this development shall be governed by the terms and conditions of the agreement to sell, to be entered into between the developer and proposed allottee, and the details of the facilities and amenities etc. will be specified in the said agreement to sell. The area mentioned in the unit plans will vary because of plaster and column locations and no adjustment/refunds of any nature whatsoever, will be made by the developer for such variation.</p>
       </div>
     </section> -->

<!--     <section style="background:#f7f7f7">
      <div class="container" align="center" >
        <center style="border-bottom: 1px solid #9b9b9b"></center>
         <img src="images/Anarock-logoB1.png" style="width:120px;  padding-top:30px">
        <p style="margin-bottom:100px; font-size:10px">
          ANAROCK Property Consultants Pvt. Ltd. PRM/KA/1251/446/AG/171110/000554<br>
           
        </p>
       
      </div>
    </section> -->




  </main>

  <!-- enquire now section -->
		<!-- <section class="sec-eq SampleForm" id="bottom-form">
			<div id="error" style="color:white; text-align:center"></div>
			<div class="container" style="max-width: 97%;">
				<div class="closeIcon " onclick="div_hide()" >+</div>
				 <form id="myForm" onsubmit="SubForm ();" method="POST" >
					<font style="font-size:20px; color:#000; padding-right:10px; display: flex;justify-content: center;">Please Fill The Details </font>
	        <h5 class="eqTitle" style="font-family:'Fakt Pro'; font-size: 20px; color:#000">
	          <a html="true" href="tel:+919513702564" > <span id="display_no"></span></a>
	        </h5>

	        <input type="hidden" name="source" value="KP_WebSite">
	        <input name="firstname" type="hidden" id="firstname" class="hide-robot">
	        <input type="hidden" name="EnquireNowPopUp" value="Enquire Now PopUp">
	        <input type="hidden" class="phpform" name="utm_source" value="<?php if(isset($_COOKIE['__gtm_campaign_url'])){echo $_COOKIE['__gtm_campaign_url'];}?>" id="m_utm_source" >
					<input type="hidden" name="date" id="datenewform" value="">
					<input type="hidden" id="hdn_country">
	        <input type="hidden" id="hdn_dialcode">
	        <input type="hidden" id="form_type">
	        <input type="hidden" id="config_type">
	        <div class="form-group formControl">
	        	<input type="text" class="form-control" id="lbl_name" name="name"  placeholder="Name*" required >
	        	<span class="text-danger"><?php echo $nameErr; ?></span>
	        </div>

	        <div class="formControl">
	        	 <input type="email" class="form-control" id="lbl_email" name="email" placeholder="E-mail">
	        	 <span class="text-danger"><?php echo $emailErr; ?></span>
	        </div>

	        <div class="form-group formControl">
	        	<input type="tel" class="form-control" id="customer_mobile" name="phone" placeholder="Mobile Number" pattern="\d*" minlength="10" required>
	        	<span class="text-danger"><?php echo $phoneErr; ?></span>
	        </div>

					<div class="formControl">
						  <input type="text" class="form-control" id="phone" name="phone" placeholder="Mobile*"  oninvalid="this.setCustomValidity('Enter valid 10 digit mobile number')"
	  					oninput="this.setCustomValidity('')" pattern="[6-9]{1}[0-9]{9}" required>
	        	<span class="text-danger"><?php echo $phoneErr; ?></span>
					</div>

					<div class="formControl btn">
						<button type="submit" class="subBtn dissubmit">Submit</button>
					</div>
	        <div class="formControl input_wrap block">
						<input type="checkbox" value="agree" id="dnd" name="agree" required checked style="width: 15px;min-height: 31px;">
						<label for="dnd" class="input_label" style="color: #000;font-size: 10px;width: 88%;">I agree and authorize team to contact me. This will override the registry with DNC / NDNC</label>
	        </div>
	        <div class="input_wrap block">
						<input type="checkbox" value="agree" id="dnd" name="agree" required checked>
						<label for="dnd" class="input_label" style="color:#fff; font-size:10px">I agree and authorize team to contact me. This will override the registry with DNC / NDNC</label>
					<br><center><font style="font-size:11px; color:#fff"><b>&#169; Powered by ANAROCK DIGITAL.</b></font></center>
	        </div>
				</form>
			</div>
		</section> -->	

		<!-- enquire now section -->
		<section class="sec-eq SampleForm" id="bottom-form">
			<div id="error" style="color:white; text-align:center"></div>
			<div class="container" style="max-width: 97%;">
				<div class="closeIcon " onclick="div_hide()" >+</div>
				<form  autocomplete="off" class="lead_form formsSubmit" data-id="contactUsForm" method="POST"  >
					<font style="font-size:20px; color:#000; padding-right:10px; display: flex;justify-content: center;">Please Fill The Detailsfgdgdgdgdg </font>
					<!-- <h5 class="eqTitle" style="font-family:'Fakt Pro'; font-size: 20px; color:#000">
						<a html="true" href="tel:+919960482299" > <span id="display_no"></span></a>
					</h5>

					<input type="hidden" name="source" value="KP_WebSite">
					<input name="firstname" type="hidden" id="firstname" class="hide-robot">
					<input type="hidden" name="EnquireNowPopUp" value="Enquire Now PopUp">
					<input type="hidden" class="phpform" name="utm_source" value="<?php if(isset($_COOKIE['__gtm_campaign_url'])){echo $_COOKIE['__gtm_campaign_url'];}?>" id="m_utm_source" >
					<input type="hidden" name="date" id="datenewform" value="">
					<input type="hidden" id="hdn_country">
					<input type="hidden" id="hdn_dialcode">
					<input type="hidden" id="form_type">
					<input type="hidden" id="config_type"> -->
					<div class="form-group formControl">
						<input type="text" class="form-control" name="name1" id="name1"  placeholder="Name*"  >
						<div class="error_msg error" id="name1_error">Please Enter Your Name</div>
						<span class="text-danger"><?php echo $nameErr; ?></span>
					</div>

					<div class="formControl">
						<input type="email" class="form-control" name="email1" id="email1" placeholder="E-mail">
						<div class="error_msg error" id="email1_error">Please Enter Your Email</div>
						<span class="text-danger"><?php echo $emailErr; ?></span>
					</div>


			        <div class="formControl">
			        	<input type="text" class="form-control" name="mobile1" id="mobile1" placeholder="Mobile*"  oninvalid="this.setCustomValidity('Enter valid 10 digit mobile number')"
			        	oninput="this.setCustomValidity('')" pattern="[6-9]{1}[0-9]{9}" >
			        	<div class="error_msg error" id="mobile1_error">Please Enter Your Mobile Number</div>
			        	<span class="text-danger"><?php echo $phoneErr; ?></span>
			        </div>

        <div class="formControl btn">
        	<button type="submit" id="form1" class="submit-btn subBtn dissubmit">Submit</button>
        </div>
		</form>
	</div>
</section>





<section class="sec-eqMobile" style=" background:#BF3312; text-decoration: underline;font-family: Arial; font-size:18px" >
	<a html="true" href="tel:+919595110011" style="color:#000"><img src="images/phone.png" width="16" height="16" style="filter: brightness(0);" class="footernumber"><span id="display_no"></span>Call Now</a>
	<a href="javascript:void(0);" class="mobEqNow mobileformeq" style="color:#000;border-left: 1px solid #000;"><img src="images/mail.png" style="filter: brightness(0); " class="mobileformeq" onclick="div_show()" />Enquire Now</a>

</section>

<section class="poweredby" style="background:#000; padding:5px;height: 20px;">

</section>


  <!--  <script>
    changedate();
    
    function changedate(){
      var newdate = new Date();
			$(".datenewform").attr("value",newdate);
   		 // alert(newdate);
      
    }
    
  </script> -->







  		<!-- <script>
        window.sell_do_form_submitted = function (paramsJson) {
          window.location = window.location.protocol+'//'+window.location.hostname+'/thankyou.html';
        }
      </script> -->

 	  <!-- <script>
 			function SubForm (){
 				$.ajax({
 					url:"http://127.0.0.1/SerenityFormAjax/save.php",
 					type:"post",
 					data:$("#myForm").serializeArray(),
 					success: function(){
 						alert("Form Data Submitted :)")
 					},
 					error: function(){
 						alert("There was an error :(")
 					}
 				});
 			}
 		</script> -->

 		<!-- <script>
 		    $(function(){
 		       $('#submit').click('submit', function(e){
 		            e.preventDefault();
 		            $.ajax({
 		                url: "http://127.0.0.1/KumarPA/thankyou.html",
 		                type: "POST",
 		                data: $("#formdata").serialize(),
 		                success: function(data){
 		                  // if (data == true) {
 		                      // alert("Successfully submitted.")
 		                      window.location = "http://127.0.0.1/KumarPA/thankyou.html";
 		                                  // }

 		                }
 		            });
 		       }); 
 		    });
 		  </script>  -->	

  <!-- <script>
		function SubForm (){
			$.ajax({
				url:"https://api.apispreadsheets.com/data/18973/",
				type:"post",
				data:$("#global_form").serializeArray(),
				success: function(){
					alert("Form Data Submitted :)")
				},
				error: function(){
					alert("There was an error :(")
				}
			});
		}
	</script>
-->

   <!-- <script>
		function SubForm2 (){
			$.ajax({
				url:"https://api.apispreadsheets.com/data/18973/",
				type:"post",
				data:$("#global_form2").serializeArray(),
				success: function(){
					alert("Form Data Submitted :)")
				},
				error: function(){
					alert("There was an error :(")
				}
			});
		}
	</script> -->
	
	<script src="assets/js/jquery.fancybox.min.js" type="text/javascript"></script>
	<script src="assets/js/intlTelInput.js" type="text/javascript"></script>
	<script src="assets/js/jquery.validate.js" type="text/javascript"></script>
	<script src="assets/js/form_validation.js" type="text/javascript"></script>
	<link rel="stylesheet" href="assets/css/form.css?v=27181">
	<link rel="stylesheet" href="assets/css/intlTelInput.css">
	<link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>



	<!-- <script>
	    var pdfUrl = "http://127.0.0.1/ProBang/images/E-Brochure-Tower-B.pdf";

	    $('.SampleForm').on('submit', function () {
	        window.open(pdfUrl, '_blank');
	    });
	  </script> -->

	  <script type="text/javascript">
	  	(function(){
	  		$('.mobEqNow, .eqClick').on('click',function(){
	  			$('.sec-eq').addClass('show');
	  		});
	  		$('.closeIcon').on('click',function(){
	  			$('.sec-eq').removeClass('show');
	  		});    
	  	})();
	  </script>

  <!-- <script>
      $(document).ready(function(){
          $("#bottom-form").modal('show');
          // alert( "submitted!" );
      });
    </script> -->

    <script>
      //Function To Display Popup
    	function div_show() {
    		document.getElementById('bottom-form').style.display = "block";
    	}
          //Function to Hide Popup
    	function div_hide(){
    		document.getElementById('bottom-form').style.display = "none";
    	}
    </script>

	<!-- <script type="text/javascript">
		(function(){
			$('.mobEqNow, .eqClick').on('click',function(){
		    	$('.sec-eq').addClass('show');
		    });
		    $('.closeIcon').on('click',function(){
		    	$('.sec-eq').removeClass('show');
		    });    
		})();
	</script> -->
	<script>
		(function(){
			$('form :input[name=phone]').each(function(index) {
				$(this).intlTelInput({
					geoIpLookup: function(callback) {
		                // $.get("https://crm.netbizlabs.com/campaign/ip2nation").always(function(resp) {
		                //    callback(resp);
		                // });
					},
					initialCountry: "in",
					nationalMode: false,
					autoHideDialCode: false,
					separateDialCode: true,
					utilsScript: "assets/js/utils.js"
				});
			});
		})();
	</script>

	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

	<script>
		AOS.init();
	</script>

	<script>
		$('.carousel').carousel({
			interval: 2500
		})

	</script>
	<script>
		$('.carousel1').carousel({
			interval: 2500
		})
	</script>
	<!--<script src="https://cwc.livserv.in/chat.js?lid=22799" id="lp_cwc_xqzyihjdskw" ></script>-->
	<!--<script src="https://cw1.livserv.in?did=22799&amp;pid=1"></script>-->    
	<!-- <script type="text/javascript">document.addEventListener('contextmenu', event => event.preventDefault());</script> -->
	<!-- <script type="text/javascript">
		$(document).on({
		    "contextmenu": function (e) {
		        console.log("ctx menu button:", e.which); 

		        e.preventDefault();
		    },
		    "mousedown": function(e) { 
		        console.log("normal mouse down:", e.which); 
		    },
		    "mouseup": function(e) { 
		        console.log("normal mouse up:", e.which); 
		    }
		});
		document.addEventListener('contextmenu', (e) => e.preventDefault());

		function ctrlShiftKey(e, keyCode) {
		  return e.ctrlKey && e.shiftKey && e.keyCode === keyCode.charCodeAt(0);
		}

		document.onkeydown = (e) => {
		  if (
		    event.keyCode === 123 ||
		    ctrlShiftKey(e, 'I') ||
		    ctrlShiftKey(e, 'J') ||
		    ctrlShiftKey(e, 'C') ||
		    (e.ctrlKey && e.keyCode === 'U'.charCodeAt(0))
		  )
		    return false;
		};
	</script> -->



</body>
</html>

<?php 
	session_destroy();
?>

