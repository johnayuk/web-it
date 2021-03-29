</html><!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bentech</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="./dist/css/adminx.css" media="screen" />
    <link rel="stylesheet" href="css/all.min.css">
  </head>
  <body>
    <div class="adminx-container">
      <nav class="navbar navbar-expand justify-content-between fixed-top">
        <a class="navbar-brand mb-0 h1 d-none d-md-block" href="index.html">
          {{-- <img src="./demo/img/logo.png" class="navbar-brand-image d-inline-block align-top mr-2" alt=""> --}}
          <div class="pb-3 pt-4 m-0">
            <h2 id="col-1" class="p-0 m-0"></h2>
        </div>
        </a>

       

        <div class="d-flex flex-1 d-block d-md-none">
          <a href="#" class="sidebar-toggle ml-3">
            <i data-feather="menu"></i>
          </a>
        </div>

        <ul class="navbar-nav d-flex justify-content-end mr-2">
          <!-- Notificatoins -->
          <li><a class="dropdown-item" href="{{url('logout')}}">Logout</a></li>
         

      <!-- expand-hover push -->
      <!-- Sidebar -->
      <div class="adminx-sidebar expand-hover push">
        <ul class="sidebar-nav">
          <li class="sidebar-nav-item">
          <a href="{{url('admin')}}" class="sidebar-nav-link active">
              <span class="sidebar-nav-icon">
                <i data-feather="home"></i>
              </span>
              <span class="sidebar-nav-name">
                Dashboard
              </span>
              <span class="sidebar-nav-end">

              </span>
            </a>
          </li>

          <li class="sidebar-nav-item">
            <a href="/tables" class="sidebar-nav-link active">
              <span class="sidebar-nav-icon">
                <i class="fas fa-envelope"></i>
              </span>
              <span class="sidebar-nav-name">
                Messages
              </span>
              <span class="sidebar-nav-end">

              </span>
            </a>
          </li>


          <li class="sidebar-nav-item">
            <a href="{{url('users_tables')}}" class="sidebar-nav-link active">
                <span class="sidebar-nav-icon">
                  <i class="fas fa-user"></i>
                </span>
                <span class="sidebar-nav-name">
                  Users
                </span>
                <span class="sidebar-nav-end">
  
                </span>
              </a>
            </li>
   
      </div><!-- Sidebar End -->


       
@yield('content')

 </div>
</div>
<!-- If you prefer jQuery these are the required scripts -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
<script src="./dist/js/vendor.js"></script>
<script src="./dist/js/adminx.js"></script>
<script src="js/my.js"></script>

<!-- If you prefer vanilla JS these are the only required scripts -->
<!-- script src="./dist/js/vendor.js"></script>
<script src="./dist/js/adminx.vanilla.js"></script-->
</body>
</html>