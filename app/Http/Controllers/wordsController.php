<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\descripton;

class wordsController extends Controller
{
    public function index()
    {
        $data['about'] = descripton::find(1);
        $_SESSION['description'] = $data['about'];
       
    }
    //Display function
    public function disp()
    {
        $data['descriptions'] = descripton::all();
        return view('backend.layouts.descriptions', $data);
    }
    //edit function
    public function edit($id){
        if(!$id){
          return rediect()->back();
    }
    $data['description']=descripton::find($id);
               
    if($data){
        return view ('backend.layouts.edit_Description',$data);
    }
    return redirect()->back();
    }
// Update function
    public function update(Request $request,$id){
        if(!$id){
            return rediect()->back();
    }
    $record=descripton::find($id);
    if($record){
        $data=[
            'about'=>$request->about,
               'skills'=>$request->skills,
               'sumary'=>$request->sumary,
               'language'=>$request->language,
               'myself'=>$request->myself, 
               'contact'=>$request->contact,
        ];
    
      $record->update($data);
       
        return redirect()->route('description.display');
    
    }
    return redirect()->back();
}
}