<!DOCTYPE html>
<html lang="en">
  <head>
    <title>AdminX - Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="../dist/css/adminx.css" media="screen" />
  </head>
  <body>

    @if ($errors->any())
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
        @endforeach
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
  @endif
</div>


@if ($message = Session::get('success'))
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                             </button>
     
                         <strong>{{$message}}</strong>
                    </div> 
                    @endif




    <div class="adminx-container d-flex justify-content-center align-items-center">
      <div class="page-login">
        <div class="text-center">
          <a class="navbar-brand mb-4 h1" href="login.html">
            <img src="../demo/img/logo.png" class="navbar-brand-image d-inline-block align-top mr-2" alt="">
            Administrator
          </a>
        </div>

        <div class="card mb-0">
    
          <div class="card-body">
            <form action="{{url('userlogin')}}" method="POST">
              @csrf
               @method('post')
              <div class="form-group">
                <label  class="form-label">Email address</label>
                <input type="email" class="form-control" name="email"  placeholder="email">
              </div>
              <div class="form-group">
                <label  class="form-label">Password</label>
                <input type="text" class="form-control" name="password"  placeholder="Password">
              </div>
             
              <button type="submit" class="btn btn-sm btn-block btn-primary">Sign in</button>
            </form>
          </div>
         
        </div>
      </div>
    </div>

    <!-- If you prefer jQuery these are the required scripts -->
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="../dist/js/vendor.js"></script>
    <script src="../dist/js/adminx.js"></script> --}}

    <!-- If you prefer vanilla JS these are the only required scripts -->
    <!-- script src="../dist/js/vendor.js"></script>
    <script src="../dist/js/adminx.vanilla.js"></script-->
  </body>
</html>