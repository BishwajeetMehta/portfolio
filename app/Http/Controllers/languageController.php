<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\languageModel;
Use App\User;

class languageController extends Controller
{

     // retuned for userid as foreign key in language table
     public function userId()
     {
         $data['User'] = User::all();
         return view('backend.layouts.add_language', $data);
     }
 
     // Adding new language
     public function create(Request $request){
        $data = [
            'language'=>$request->language,
            'skill'=>$request->skill,
        ];
        languageModel::insert($data);
        return redirect()->back();
    }

     
    // Display function
    public function disp(){
    
        $data['Language'] = languageModel::with('user')->get();
        return view('backend.layouts.manage_language', $data);
        
    }
    
    // Edit function
    public function edit($id){
        if(!$id){
            return rediect()->back();
      }
      $data['Language']=languageModel::find($id);
                 
      if($data){
          return view ('backend.layouts.edit_language',$data);
      }
      return redirect()->back();
      } 


      public function update(Request $request,$id){
        if(!$id){
            return rediect()->back();
    }
    $record=languageModel::find($id);
    if($record){
        $data=[
            'language'=>$request->language,
               'skill'=>$request->skill,
              
        ];
    
      $record->update($data);
        return redirect()->route('language.display');
    
    }
    return redirect()->back();
}


public function delete($id){
    if(!$id){
        return rediect()->back();
    }
    $data=languageModel::find($id);
    if($data){
        $data->delete();
    }
    return redirect()->back();
}
    }

