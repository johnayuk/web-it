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

            <div class="pb-3 pt-4 m-0">
              <h2>{{Auth::user()->first_name}}</h2>
             </div>

            @if ($message = Session::get('success'))
              <div class="alert alert-primary alert-dismissible fade show" role="alert">

                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>

                  <strong>{{$message}}</strong>
              </div> 
              @endif 

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
                     
                    <td>
                       

                      <!-- Button trigger modal -->
                          {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> --}}
                          <i class="fas fa-trash text-danger" data-toggle="modal" data-target="#exampleModal{{$item->id}}"></i>
                          {{-- </button> --}}

                          <!-- Modal -->
                          <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Delete File{{$item->id}}</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                <form action="{{url('/delete/'.$item->id)}}" method="post">
                                  @csrf
                                  @method('DELETE')

                                  Deleting this file won't be restored back; Delete? 

                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                  </div>
                                </form>
                                </div>
                              </div>
                            </div>
                          </div>
                          {{-- modal ends here --}}
                      </td>
                     </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>



          
        </div>
      </div>
             

           
      <!-- // Main Content -->
   