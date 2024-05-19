@extends('backend.master')
@section('title','Edit Description')
@section('content')

<form class="user"  action="{{route('description.update',$description->id)}}" method='POST'>
    @csrf
                              
     <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">About </label>
        <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Description of About section" name='about' value="{{$description->about?? ''}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Skills </label>
        <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Description of Skills section" name='skills' value="{{$description->skills?? ''}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Sumary </label>
        <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Description of Sumary section" name='sumary' value="{{$description->sumary?? ''}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Language </label>
        <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Description of Language section" name='language' value="{{$description->language?? ''}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Resume </label>
        <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Description of Resume section" name='myself' value="{{$description->myself?? ''}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Contact </label>
        <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Description of Contact section" name='contact' value="{{$description->contact?? ''}}">
     </div>
                                
                                
 <
 <button type="submit" class="btn btn-primary btn-user btn-block">Update</button>
   <hr>
</form>
@endsection