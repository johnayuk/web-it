@extends('layouts.app')

      <!-- Main Content -->
      <div class="adminx-content">
        <div class="adminx-main-content">
          <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active  aria-current="page">Regulard Tables</li>
              </ol>
            </nav>

            <div class="pb-3">
              <h1>Regular Tables</h1>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                
                <table  class="table table-bordered table-hover">

                  <thead class=" text-primary thead-dark">

                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Interested in</th>
                    <th>Action</th>

                  </thead>

                  <tbody>
                    @foreach ($messages as $item)
                    
                     <tr>
                     <td>{{$item->name}}</td>
                     <td>{{$item->phone}}</td>
                     <td>{{$item->email}}</td>
                     <td>{{$item->interest}}</td>
                    <td> <i class="fas fa-trash text-danger"></i></td>
                     </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>



            <div class="row">

              <div class="col-md-6">

           
            <div class="card mb-grid">
              <div class="card-header d-flex justify-content-between align-items-center">
                <div class="card-header-title">Basic Form Example</div>

                <nav class="card-header-actions">
                  <a class="card-header-action" data-toggle="collapse" href="#card1" aria-expanded="false" aria-controls="card1">
                    <i data-feather="minus-circle"></i>
                  </a>
                  
                  <div class="dropdown">
                    <a class="card-header-action" href="#" role="button" id="card1Settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i data-feather="settings"></i>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="card1Settings">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>

                  <a href="#" class="card-header-action">
                    <i data-feather="x-circle"></i>
                  </a>
                </nav>
              </div>
              <div class="card-body collapse show" id="card1">
                <form>
                  <div class="form-group">
                    <label class="form-label" for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck1">
                      <label class="custom-control-label" for="customCheck1">Remember me</label>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
          </div>
          
          <div class="col-md-6">

          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
          
        </div>
      </div>
             

           
      <!-- // Main Content -->
   