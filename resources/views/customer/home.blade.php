<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>AryaDev Chemicals
	</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === 'block') {
    x.style.display = 'none';
  } else {
    x.style.display = 'block';
  }
}
</script>
<style>
#myDIV {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: right;
 color:white;
 width: 90%;
  background: #000000;
}

form.example button {
  float: right;
  width: 10%;
  padding: 10px;
  background: #000000;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
}
form.example::after {
  content: "";
  clear: both;
  display: table;
}
</style>

</head>

<body>
    <!-- Start Main Top -->

    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="aryadev"><img src="images/logo_1.jpg"  height="100%" width="100%"class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav " data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="aryadev">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Product</a>
                            <ul class="dropdown-menu">
                            <li><a href="seed_treatment">Seed Treatment</a></li>
								<li><a href="harbiside">Harbicide </a></li>
                                <li><a href="lend_prepretion">Land Prepretion Soil Health</a></li>
                                <li><a href="fungicides">Fungicides</a></li>
                                <li> <a href="insecticides">Insecticides</a></li>
                            </ul>
                        </li>
                       

                        <li class="nav-item"><a class="nav-link" href="about">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact-us">Contact Us</a></li>
                        
                        <!--<li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>-->
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li  onclick=" myFunction()"><i class="fa fa-search"></i></li>
                        
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
           
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div id="myDIV"  style="display:none;">
    <form class="example" method="get" action="{{route('search.index')}}" >
  <input type="text" placeholder="Search Product Name" name="search" required>
  <button type="submit"><i class="fa fa-search"></i></button>
  
</form>
           
</div>
    <!-- End Top Search -->

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="images/slider-4.jpg"  alt="">
                <div class="container">
                    <div class="row pt-4">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> AryaDev Chemicals</strong></h1>
                            <a class="btn-lg hvr-hover text-white" href="about">Know More</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/slider-5.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> AryaDev Chemicals</strong></h1>
                            <a class="btn-lg hvr-hover text-white" href="about">Know More</a>
                            
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/slider-3.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> AryaDev Chemicals</strong></h1>
                            <a class="btn-lg hvr-hover text-white " href="about">Know More</a>
                        
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <div class="box-add-products  mt-5" style="background-color: rgb(235, 235, 224);">
		<div class="container">
			<div class="row">
				 <div class="col-lg-12  pt-2 ">
					<center><p><h1><strong>Sales & Distribution Network</strong></h1><img src="images/delaeroutlets.jpg"></p></center><br>
                    <center><p><h1>144</h1></p></center>
                    <center><p><h2><strong>DEALER OUTLETS</strong></h2>
                </div>
			</div>
		</div>
	</div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    
    <!-- End Categories -->
	
	<div class="box-add-products">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="offer-box-products">
						<img class="img-fluid" src="images/home-4.jpg" alt="" />
					</div>
				</div>
				 <div class="col-lg-6">
                    <h2 class="noo-sh-title-top">About <span>Us</span></h2>
					<p><font size="5px">AryaDev Chemicals.Established in the year of 2017 with a goal of achieving revolution in the agriculture filed by Providing Performance good Quality Products and improving them Continuously. the Company has a Team of Professionally qualified and well experienced Personnel in the field of manufacturing formulation of pesticides and marketing.</font></p>
					<p><a class="btn hvr-hover" href="about"><font color="white" size="4px">Read More</font></a></p>
                    <p></p>
                </div>
			</div>
		</div>
	</div>
   
    <div class="latest-blog"  style="background-color: rgb(235, 235, 224);">
        <div class="container" >
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Value Chain Offering</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/seed1.jpg" alt="" />
                        </div>
                        <div class="shop-cat-box">
                            <div class="title-blog">
                                <h3 align="center">Seed Treatment</h3><br>
								<a class="btn hvr-hover" href="seed_treatment">Show Products</a>
                                <p></p>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/harbiside.jpg"  alt="" />
                        </div>
                        <div class="shop-cat-box">
                            <div class="title-blog">
                                <h3 align="center">Harbicide</h3><br>
								<a class="btn hvr-hover" href="harbiside">Show Products</a>
                                <p></p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/land1.jpg" alt="" />
                        </div>
                        <div class="shop-cat-box">
                            <div class="title-blog">
                                <h3 align="center">Land Preparation & Soil Health</h3><br>
								<a class="btn hvr-hover" href="lend_prepretion">Show Products</a>
                                <!--<p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed mollis. Praesent laoreet lacinia elit id lobortis.</p>-->
                            </div>
                           
                        </div>
                    </div>
                </div>
				<div class="col-md-6 col-lg-4 col-xl-4 ">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/ini-1.jpg" alt="" />
                        </div>
                        <div class="shop-cat-box">
                            <div class="title-blog">
                                <h3 align="center">Insecticides</h3><br>
								<a class="btn hvr-hover" href="insecticides">Show Products</a>
                                <!--<p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed mollis. Praesent laoreet lacinia elit id lobortis.</p>-->
                            </div>
                            
                        </div>
                    </div>
                </div>
					<div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/Fungicides_1.jpg" alt="" />
                        </div>
                        <div class="shop-cat-box">
                            <div class="title-blog">
                                <h3 align="center">Fungicides</h3><br>
								<a class="btn hvr-hover" href="fungicides">Show Products</a>
                                <!--<p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed mollis. Praesent laoreet lacinia elit id lobortis.</p>-->
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
	
        </div>
    </div>
   <!-- <div class="box-add-products">
		<div class="container">
			<div class="row">
				 <div class="col-lg-12">
                    <h2 class="noo-sh-title-top">Dealer Ship <span> </span></h2>
					<p><i>  </i></p>
					
                    
                </div>
			</div>
		</div>
	</div>-->

    <!-- Start Products  -->
  
	
    <!-- End Products  -->

    <!-- Start Blog  -->
    
    <!-- End Blog  -->


    <!-- Start Instagram Feed  -->
   
    <!-- End Instagram Feed  -->


    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
				
				<hr>
                <div class="row">
                    <div class="col-lg-8 ">
                        <div class="footer-widget">
                            <h4>Contact Address</h4>
                            <p>Balaji Ind Area,Plot No.2,Shed No.2,-Shaoar(Veraval),<br>Ta. Kotda  Sangani, Dist. Rajkot,(GUJ)<br>Mo.99798 58077,94289 86729</p> 
							 							
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Mobile No: <a href="tel:+1-888705770">8200933711</a></p>
									<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 94289 86729</p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:Aryadevchamical@gmail.com">Aryadevchamical@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
  <div class="footer-copyright">
        <p class="footer-company">©2021 | Privacy Policy </p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>