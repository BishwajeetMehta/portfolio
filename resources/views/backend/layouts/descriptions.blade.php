@extends('backend.master')
@section('title','Description')
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
                                            <th>About </th>
                                            <th>Skills</th>
                                            <th>Sumary</th>
                                            <th>Language</th>
                                            <th>Resume</th>
                                            <th>Contact</th>
                                            
                                           
                                            <th>Actions</th>
                                           
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                    @forelse($descriptions as $desc)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$desc->about}}</td>
                                            <td>{{$desc->skills}}</td>
                                            <td>{{$desc->sumary}}</td>
                                            <td>{{$desc->language}}</td>
                                            <td>{{$desc->myself}}</td>
                                            <td>{{$desc->contact}}</td>
                                           
                                           
                                            <td> &nbsp&nbsp&nbsp<a href="{{route('description.edit',$desc->id)}}"  class='btn btn-primary'>edit</a> </td>
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

