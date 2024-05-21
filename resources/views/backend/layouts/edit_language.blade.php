@extends('backend.master')
@section('title','Edit User')
@section('content')

<form class="user"  action="{{route('language.update',$Language->id)}}" method='POST'>
    @csrf
                              
     <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Langauge </label>
        <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Langauge Name" name='language' value="{{$Language->language?? ''}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Langauge Skill  </label>
        <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Langauge Skills level" name='skill' value="{{$Language->skill?? ''}}">
    </div>
   
                    
                                
 
 <button type="submit" class="btn btn-primary btn-user btn-block">Update</button>
   <hr>
</form>
@endsection