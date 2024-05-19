<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User;

class usercontroller extends Controller
{

    public function index()
    {
        $data['info'] = User::find(1);
        $_SESSION['details'] = $data['info'];
       
    }
    
    
    //Display function
    public function disp()
    {
        $data['User'] = User::all();
        return view('backend.layouts.manage_user', $data);
    }

      //edit function
      public function edit($id){
        if(!$id){
          return rediect()->back();
    }
    $data['User']=User::find($id);
               
    if($data){
        return view ('backend.layouts.edit_user',$data);
    }
    return redirect()->back();
    }
// Update function
    public function update(Request $request,$id){
        if(!$id){
            return rediect()->back();
    }
    $record=User::find($id);
    if($record){
        $data=[
            'name'=>$request->name,
               'email'=>$request->email,
               'phone'=>$request->phone,
               'address'=>$request->address,
               'age'=>$request->age, 
               'profession'=>$request->profession,
               'degree'=>$request->degree,
               'status'=>$request->status,
               'description'=>$request->description,
        ];
    
      $record->update($data);
       
        return redirect()->route('user.display');
    
    }
    return redirect()->back();
}
}
