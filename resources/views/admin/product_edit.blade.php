<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AryaDev Chamical</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
   <link rel="shortcut icon" href="../../dist/img/logo.jpg">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
     

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          
          <div class="dropdown-divider"></div>

          <div class="dropdown-divider"></div>     
          
          <div class="dropdown-divider"></div>
          
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" >
    <!-- Brand Logo -->
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
       
      </div>

      <!-- SidebarSearch Form -->
	  <div class="image">
          <img src="../../dist/img/logo.jpg"  height="70%" width="100%" alt="User Image"><br><br>
		
        </div>
     
	<hr>
      <!-- Sidebar Menu -->
      <nav class="mt-3">
        <ul class="nav nav-pills nav-sidebar flex-column"  data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          <li class="nav-item">
            <a href="insert_product" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Add Product
                
              </p>
            </a>
          </li>
		   <li class="nav-item">
            <a href="view_product" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                View Product
                
              </p>
            </a>
          </li>
		   
          
               
                @guest
                            
                          
                        @else
                            <li class="nav-item dropdown"> 
                                <a id="navbarDropdown" class="nav-link dropdown-toggle " href="#" role="button"   data-toggle="dropdown" 
                                 aria-haspopup="true" aria-expanded="false" v-pre>
                                   <i class="nav-icon fas fa-power-off"></i> <font color="white">{{ Auth::user()->name }}</font>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
              
              
             
           
 
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>ADD PRODUCT</h1>
          </div>
          <div class="col-sm-6">
            
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content ">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-10	">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body">
                <form action="{{route('view_product.update',$products->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                 @method('PUT')
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$products->product_name ?? ''}}" name="product_name" placeholder="Enter Product Name" required>
                  </div>
                  <div class="form-group">
                 
                    <img  src="{{asset('uploads/'. $products->product_image)}}" height="70px" width="70px">
                    
                  </div>
				   		   <div class="form-group">
                   <label for="customFile">Product Image</label>

                    <div class="custom-file">
                    
                      <input type="file" class="custom-file-input" value="{{$products->product_image ?? ''}}"  4 name="product_image" id="customFile" >
                      <label class="custom-file-label"  name="product_image" for="customFile">Choose file</label>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Product Chamical</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$products->product_chamical ?? ''}}"  name="product_chamical" placeholder="Enter Product Chamical" required>
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Product Packing</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  value="{{$products->product_packing ?? ''}}" name="product_packing" placeholder="Enter Product Packing" required>
                  </div>
                  
				  <div class="form-group">
                        <label>Select Category</label>
                        <select class="form-control"  name="catagory_name">
                           <option value="Seed Treatment">Seed Treatment</option>
                          <option value="Harbiside">Harbiside</option> 
													<option value="Land Prepration Soil Health">Land Prepration Soil Health</option>
                           <option value="Fungicides">Fungicides</option>
                          <option value="Insecticides">Insecticides</option>
                        </select>
                      </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- general form elements -->
            
            <!-- /.card -->

            <!-- Input addon -->
          
            <!-- /.card -->
            <!-- Horizontal Form -->
            
          <!--/.col (left) -->
          <!-- right column -->
          
            <!-- /.card -->

            

            <!-- general form elements disabled -->
    
  
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
   
    <strong>Copyright &copy; 2021 <a href="https://adminlte.io"></a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
