<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <meta name="csrf-token" content="{{ csrf_token() }}">​
  <link rel="stylesheet" href="{{asset('admin_assets/plugins/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin_assets/dist/css/adminlte.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('admin_assets/plugins/iCheck/flat/blue.css')}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{asset('admin_assets/plugins/morris/morris.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{asset('admin_assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{asset('admin_assets/plugins/datepicker/datepicker3.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('admin_assets/plugins/daterangepicker/daterangepicker-bs3.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{asset('admin_assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Inconsolata|Sacramento|Tangerine" rel="stylesheet">
  <style type="text/css">
  .data-list th,.data-list td{
    text-align: center;
  }
</style>
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- SEARCH FORM -->
      <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" href="index.php?mod=login&act=logout">
            <span >ĐĂNG XUẤT</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fa fa-th-large"></i></a>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: rgba(71,201,229,0.9);background: linear-gradient(45deg,rgba(71,201,229,0.9) 0,rgba(102,252,233,0.9) 100%)!important; z-index: 1025">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link" style="border-bottom: 1px solid white;">
          <span class="brand-text font-weight-light" style="padding-left: 20px!important;font-weight: 700!important;">MY FOOD BLOG</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="border-bottom: 1px solid white;">
            <div class="image">
              <img src="{{asset('blog_assets/img/avata/IMG_9755.JPG')}}" class="img-circle elevation-2" alt="User Image" style="width: 50px">
            </div>
            <div class="info" style="height: 70px">
              <a href="#" class="d-block" style="line-height: 60px; font-size: 40px;font-family: 'Tangerine';">Thu Nguyen</a>
            </div>
          </div>
          <style type="text/css">
          .nav-item p,.nav-item i,.info a,.brand-text{
            color: white!important;
            font-weight: 700;
            font-size: 20px;
          }
          .nav-item p,.info a{
            font-family: 'Inconsolata';
          }
        </style>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="index.php" class="nav-link">
                <i class="nav-icon fa fa-dashboard"></i>
                <p>
                  Bảng điều khiển
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="{{asset('admin/posts/list')}}" class="nav-link">
                <i class="nav-icon fa fa-book"></i>
                <p>
                  Quản lý bài viết
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="{{asset('admin/categories/list')}}" class="nav-link">
                <i class="nav-icon fa fa-archive"></i>
                <p>
                  Quản lý categories
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="{{asset('admin/tags/list')}}" class="nav-link">
                <i class="nav-icon fa fa-users"></i>
                <p>
                  Quản lý tags
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <section class="content-wrapper">
      @yield('content')
    </section>





    <footer class="main-footer" >
      <strong>Copyright &copy; 2014-2018 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.0-alpha
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" type="text/javascript" charset="utf-8" async defer></script>


  <!-- jQuery -->
  <script src="{{asset('admin_assets/plugins/jquery/jquery.min.js')}}"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script type="text/javascript" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- Morris.js charts -->
  <script src="{{asset('admin_assets/plugins/morris/morris.min.js')}}"></script>
  <!-- Sparkline -->
  <script src="{{asset('admin_assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
  <!-- jvectormap -->
  <script src="{{asset('admin_assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
  <script src="{{asset('admin_assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{asset('admin_assets/plugins/knob/jquery.knob.js')}}"></script>
  <!-- daterangepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
  <script src="{{asset('admin_assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
  <!-- datepicker -->
  <script src="{{asset('admin_assets/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="{{asset('admin_assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
  <!-- Slimscroll -->
  <script src="{{asset('admin_assets/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{asset('admin_assets/plugins/fastclick/fastclick.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('admin_assets/dist/js/adminlte.js')}}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{asset('admin_assets/dist/js/pages/dashboard.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{asset('admin_assets/dist/js/demo.js')}}"></script>
  <script type="text/javascript">
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
  </script>
  {{-- <script>
    $('.btn-secondary').click(function(){
     var url = $(this).attr('data-url');
    //console.log(id);
       // alert($id);;
       swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
       .then((willDelete) => {
        if (willDelete) {
          // console.log('index.php?mod=customer&act=delete&MA_KH='+id);
          window.location.href = url;
          swal("Poof! Your imaginary file has been deleted!", {
            icon: "success",
          });
        } else {
          swal("Your imaginary file is safe!");
        }
      });

     })
   </script> --}}
   
   <script>
    $('#posts-table').DataTable({
      processing: true,
      serverSide: true,
      ajax: '{{asset("admin/posts/getlistposts")}}',
      columns: [
      { data: 'id', name: 'id' },
      { data: 'title', name: 'title' },
      { data: 'description', name: 'description' },
      { data: 'content', name: 'content' },
      { data: 'created_at', name: 'created_at' },
      { data: 'updated_at', name: 'updated_at' },
      { data: 'action', name: 'action' }
      ]
    });
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script type="text/javascript" charset="utf-8">
    
    //bắt sự kiện click vào nút show
    $(document).on('click', '.btn-show', function(){
      var url = $(this).data('url');
      $.ajax({
        type: 'get',
        url: url,
        success: function (response) {
          $('.thumbnail').attr("src",response.post.thumbnail);
          $('.title').text(response.post.title);
          $('.description').text(response.post.description);
          $('.postcontent').text(response.post.content);
          $('.user_id').text(response.user.name);
          $('.slug').text(response.post.slug);
          $('.category_id').text(response.categories.name);
          $('.view_count').text(response.post.view_count);
          $('.created_at').text(response.post.created_at);
          $('.updated_at').text(response.post.updated_at);
        },
        error: function (jqXHR, textStatus, errorThrown) {
        }
      })
    })
    </script>
  </body>
  </html>


