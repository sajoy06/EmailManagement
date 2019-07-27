
<!DOCTYPE html>
<html>

<!-- Head content -->

  @include('Admin.layouts.head')

<!-- /.content -->

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Top Header content -->

      @include('Admin.layouts.topheader')

  <!-- /.content -->



  <!-- Left side column. contains the logo and sidebar -->
  

      @include('Admin.layouts.sidebar')


  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">
      @yield('content')
   </div>

  <!-- /.content-wrapper -->
 
  <!-- Footer content -->

      @include('layouts.footer')
</div>
<!-- ./wrapper -->

    <!-- Script content -->

      @include('Admin.layouts.script')

    <!-- /.content -->


</body>
</html>
