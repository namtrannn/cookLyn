<!DOCTYPE html>
<html> 
    <head>
        <title>Cooking Diary |Trang quản trị</title>
        <base href="{{ asset('')}}">
        <!-- Bootstrap -->
        <link href="source/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="source/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="source/assets/styles.css" rel="stylesheet" media="screen">
        <link href="source/assets/DT_bootstrap.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="vendors/flot/excanvas.min.js"></script><![endif]-->
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="source/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    
    <body>
        @include('admin.layout.header')

        <div class="container-fluid">
            <div class="row-fluid">
                
                @include('admin.layout.menu')
                <!--/span-->

                @yield('content')

            </div>
            <hr>
            <footer>
                <p>&copy; Made by YunLove 2024</p>
            </footer>
        </div>
        <!--/.fluid-container-->

        <script src="source/vendors/jquery-1.9.1.js"></script>
        <script src="source/bootstrap/js/bootstrap.min.js"></script>
        <script src="source/vendors/datatables/js/jquery.dataTables.min.js"></script>
        <script src="source/vendors/jquery.uniform.min.js"></script>
        <script src="source/vendors/chosen.jquery.min.js"></script>
        <script src="source/vendors/bootstrap-datepicker.js"></script>
        
        <script src="source/assets/scripts.js"></script>
        <script src="source/assets/DT_bootstrap.js"></script>
        
        <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                    responsive: true
            });
        });
        
        </script>
        {{-- <script type="text/javascript" language="javascript" src="admin_asset/ckeditor/ckeditor.js" ></script> --}}
        @yield('script')


    </body>

</html>