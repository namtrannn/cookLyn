<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title> @yield('title')Cooking Diary | Trang chủ</title>
    <base href="{{ asset('')}}">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="sources/assets/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="sources/assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="sources/assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="sources/assets/css/slick.css">    
    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="sources/assets/css/bootstrap-datepicker.css">   
     <!-- Gallery Lightbox -->
    <link href="sources/assets/css/magnific-popup.css" rel="stylesheet"> 
    <!-- Theme color -->
    <link id="switcher" href="sources/assets/css/theme-color/default-theme.css" rel="stylesheet">     

    <!-- Main style sheet -->
    <link href="sources/style.css" rel="stylesheet">    
    <link rel="stylesheet" type="text/css" href="sources/assets/css/style11.css">
    <link rel="stylesheet" type="text/css" href="sources/assets/css/recipe.css">
   


  </head>
  <body>

  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->

  @include('header')
  <!-- End header section -->
 

  @yield('content')

  <!-- Start Footer -->
  @include('footer')
  <!-- End Footer -->

  <!-- jQuery library -->
  <script src="sources/assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="sources/assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="sources/assets/js/slick.js"></script>
  <!-- Counter -->
  
  <!-- Gallery Lightbox -->
  <script type="text/javascript" src="sources/assets/js/jquery.magnific-popup.min.js"></script>
  <!-- Date Picker -->
  <script type="text/javascript" src="sources/assets/js/bootstrap-datepicker.js"></script> 
  <!-- Ajax contact form  -->
  <script type="text/javascript" src="sources/assets/js/app.js"></script>
  <script src="https://kit.fontawesome.com/1e6c72168e.js" crossorigin="anonymous"></script>

  @yield('script')
  <!-- Custom js -->
  <script src="sources/assets/js/custom.js"></script> 



  </body>
</html>