<!DOCTYPE html>
<html lang="en">

@includeIf('admin/head')

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
@includeIf('admin/header')
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
@includeIf('admin/sidebar')
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        @yield('content')
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
@includeIf('admin/footer')
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('admin/lib/jquery-ui-1.9.2.custom.min.js')}}"></script>
  <script src="{{asset('admin/lib/jquery.ui.touch-punch.min.js')}}"></script>
  <script class="include" type="text/javascript" src="{{asset('admin/lib/jquery.dcjqaccordion.2.7.js')}}"></script>
  <script src="{{asset('admin/lib/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('admin/lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="{{asset('admin/lib/common-scripts.js')}}"></script>
  <!--script for this page-->
  @yield('script')
</body>

</html>
