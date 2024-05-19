@extends('backend.master')
@section('title','Manage User')
@section('content')


<form>

<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Description of each Section </h6>
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    
                                        <tr>
                                            <th>S.N</th>
                                            <th>Name </th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>Age</th>
                                            <th>Profession</th>
                                            <th>Status</th> 
                                            <th>Description</th>
                                            <th>Image</th>
                                            
                                           
                                            <th>Actions</th>
                                           
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                    @forelse($User as $user)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->phone}}</td>
                                            <td>{{$user->address}}</td>
                                            <td>{{$user->age}}</td>
                                            <td>{{$user->profession}}</td>
                                            <td>{{$user->status}}</td>
                                            <td>{{$user->description}}</td>
                                            <td>{{$user->image}}</td>
                                           
                                           
                                            <td> &nbsp&nbsp&nbsp<a href="{{route('user.edit',$user->id)}}"  class='btn btn-primary'>edit</a> </td>
                                          @empty
                                            <td>
                                                no records
                                            </td>

                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                               
                            </div>
                           
                        </div>
                        
                           
                    </div>

</form>
@endsection

