@extends('backend.master')
@section('title','Edit User')
@section('content')

<form class="user"  action="{{route('user.update',$User->id)}}" method='POST'>
    @csrf
                              
     <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Name </label>
        <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Description of About section" name='name' value="{{$User->name?? ''}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Email </label>
        <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Description of Skills section" name='email' value="{{$User->email?? ''}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Phone </label>
        <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Description of Sumary section" name='phone' value="{{$User->phone?? ''}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Address </label>
        <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Description of Language section" name='address' value="{{$User->address?? ''}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Age </label>
        <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Description of Resume section" name='age' value="{{$User->age?? ''}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Profession </label>
        <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Description of Contact section" name='profession' value="{{$User->profession?? ''}}">
     </div>
     <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Degree </label>
        <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Description of Contact section" name='degree' value="{{$User->degree?? ''}}">
     </div>
     <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Status </label>
        <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Description of Contact section" name='status' value="{{$User->status?? ''}}">
     </div>
     <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Description </label>
        <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Description of Contact section" name='description' value="{{$User->description?? ''}}">
     </div>
                                
                                
 
 <button type="submit" class="btn btn-primary btn-user btn-block">Update</button>
   <hr>
</form>
@endsection