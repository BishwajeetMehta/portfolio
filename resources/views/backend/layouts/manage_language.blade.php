@extends('backend.master')
@section('title','Manage Language Skills')
@section('content')


<form>

<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Language skills </h6>
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    
                                        <tr>
                                            <th>S.N</th>
                                            <th>User Name</th>
                                            <th>Language  </th>
                                            <th>Skill Level</th>
                                            <th>Actions</th>
                                           
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                    @forelse($Language as $lang)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$lang->user_id}}</td>
                                            <td>{{$lang->language}}</td>
                                            <td>{{$lang->skill}}</td>
                                  
                                            <td> &nbsp&nbsp&nbsp<a href="{{route('language.edit',$lang->id)}}"  class='btn btn-primary'>edit</a> &nbsp&nbsp&nbsp<a href="{{route('language.delete',$lang->id)}}"  class='btn btn-danger'>Delete</a> </td>
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

