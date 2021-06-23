<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>AryaDev Chemicals</title>
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
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
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
                            <a class="navbar-brand" href="aryadev"><img src="images/logo_1.jpg" height="100%" width="100%"class="logo" alt=""><img src=""src="images/logo.jpg"></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav " data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="nav-item "><a class="nav-link" href="aryadev">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Product</a>
                            <ul class="dropdown-menu">
                            <li><a href="seed_treatment">Seed Treatment</a></li>
								<li><a href="harbiside">Harbicide</a></li>
                                <li><a href="lend_prepretion">Land Prepretion Soil Health</a></li>
                                <li><a href="fungicides">Fungicides</a></li>
                                <li> <a href="insecticides">Insecticides</a></li>
                            </ul>
                        </li>
                        <li class="nav-item active"><a class="nav-link" href="about">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact-us">Contact Us</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li  onclick="myFunction()"><i class="fa fa-search"></i></li>
                        
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
    <!-- Start All Title Box -->
    
    <!-- End All Title Box -->

    <!-- Start About Page  -->
    <div class="about-box-main">
        <div class="container">
            <div class="row">
				<div class="col-lg-6">
                    <div class="banner-frame"> <img class="img-fluid" height="20%"  src="images/aboutus.jpg" alt="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="noo-sh-title-top">Company <span>Profile</span></h2>
                    <p style="font-size:150%;" align="justify">AryaDev Chemicals.Established in the year of 2017 with a goal of achieving revolution in the agriculture filed by Providing Performance good Quality Products and improving them Continuously. the Company has a Team of Professionally qualified and well experienced Personnel in the field of manufacturing formulation of pesticides and marketing.</p>
                    <p></p>
                </div>
            </div>
            <div class="row my-5"> 
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>Our Mission	</h3>
                        <p  style="font-size:120%;" align="justify"> We are Committed to Supply the Highest Quality Products to Our Customer within Competitive Price and also to  discover, develop and provide new Formulation of Pesticides While Parallelly Fulfillig Our total Quality Control and Quality Assurance Policy with no Compromising Our Employees Healty and Safety.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>Our Vision</h3>
                        <p style="font-size:120%;" align="justify">To be global Organization by enhanceing and enriching Core Value for Customers by Setting up a benchmark in quality and determined to be one of  the most trusted Source of pesticides and fertilizer across the globle with Focusing on Satisfaction of the community. </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>Core Values</h3>
                <p style="font-size:120%;" align="justify">Our Core Values Driven by a Desire to Improve the Richness and Protection of Crop Through Scientific Excellent with the Highest Standard of Integrity.Our Values are Diamonds of Our Corporate Reputation. </p>
                    <ul type="circle">
                        <li  style="font-size:120%;">Ethics abd Integrity</li>
                        <li  style="font-size:120%;">Transparency</li>
                        <li  style="font-size:120%;">Innovations</li>
                        <li  style="font-size:120%;">Total Quality Control and Quality Assurance</li>
                        <li  style="font-size:120%;">Nurture Environment</li>
                        <li  style="font-size:120%;">Research and Development</li>
                        <li  style="font-size:120%;">Leadership through Collaboration</li>
                       
                    </ul>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- End About Page -->

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