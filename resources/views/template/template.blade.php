<html>
    <head>
        <title>TMDC HelpDesk - @yield('title')</title>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        @section('sidebar')
            This is the master sidebar.
            
        @show
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>HD</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b>TMDC HelpDesk</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>





        <div class="container">
            @yield('content')
        </div>
    </body>
</html>