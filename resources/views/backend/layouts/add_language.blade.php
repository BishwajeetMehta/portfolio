@extends('backend.master')
@section('title','Add Language Skills')
@section('content')

<form class="user"  action="{{route('language.submit')}}" method='POST'>
    @csrf
                              
    <div class="form-group">
        <label for="exampleInputEmail1">User Id</label>
   
    <div >
         <select  name="Userid"> 
            @forelse($User as $usr)
            <option value="{{$usr->id}}">{{$usr->name}}</option>
             @empty
            <option value="">No User</option>
             @endforelse
         </select >
     </div>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Language </label>
        <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Language name" name='language' >
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Skill Level </label>
        <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Langauge Skills level " name='skill' >
    </div>
   
 <button type="submit" class="btn btn-primary btn-user btn-block">Insert New Record</button>
   <hr>
</form>

@endsection