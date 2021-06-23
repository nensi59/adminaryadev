<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>AryaDev Chamicals</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('images/logo.jpg')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

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
                    <a class="navbar-brand" href="aryadev"><img src="images/logo_1.jpg" height="100%" width="100%" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                 <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav " data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="nav-item "><a class="nav-link" href="aryadev">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow active" data-toggle="dropdown">Product</a>
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
    <!-- End Top Search -->

    <!-- Start All Title Box -->
   
    <!-- End All Title Box -->

    <!-- Start Shop Page  -->
    <div class="shop-box-inner "  >
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                    <div class="right-product-box">
                       

                        <div class="product-categorie-box">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                <h1  class="display-4" align="center"><b>Fungicides</b></h1>
                                    <div class="row pt-3">
                                    @foreach($products as $product)	
                                     <div class="col-md-6 col-lg-4 col-xl-4">
												<div class="blog-box">
													<div class="blog-img">
														<img class="img-fluid" src="{{asset('uploads/'. $product->product_image)}}" alt="" />
													</div>
													<div class="shop-cat-box">
														<div class="title-blog">
															<h3 align="center">{{$product->product_name }}</h3><br>
															<a class="btn hvr-hover" href="{{route('fungicides.show',$product->product_name)}}">Khow More</a>
															<p></p>
														</div>
													   
													</div>
												</div>
										</div>
                                        @endforeach	
                                    </div>
                                   
                                </div>
                   
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Shop Page -->

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
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{asset('js/jquery.superslides.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-select.js')}}"></script>
    <script src="{{asset('js/inewsticker.js')}}"></script>
    <script src="{{asset('js/bootsnav.js.')}}"></script>
    <script src="{{asset('js/images-loded.min.js')}}"></script>
    <script src="{{asset('js/isotope.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/baguetteBox.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.js')}}"></script>
    <script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('js/form-validator.min.js')}}"></script>
    <script src="{{asset('js/contact-form-script.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
</body>

</html>