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
              <form action="{{url('/createUser')}}" method="POST" >
                @csrf
                @method('POST')
                
                  <div class="form-group">
                    <label class="form-label">FirstName</label>
                    <input type="text" class="form-control" name="first_name">
                
                  </div>
                  <div class="form-group">
                    <label class="form-label" >LastNmae</label>
                    <input type="text" class="form-control" name="last_name">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
          </div>
          
          <div class="col-md-6">

          <table class="table table-bordered">
            <thead class="thead-dark">
              <tr>
                <th scope="col">FirstName</th>
                <th scope="col">LastName</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $item)
              <tr>
              <td>{{$item->first_name}}</td>
              <td>{{$item->last_name}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
          
        </div>
      </div>
             

           
      <!-- // Main Content -->
   