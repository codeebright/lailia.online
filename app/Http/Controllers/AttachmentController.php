<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttachmentController extends Controller
{
    public function index(){
      return view('iamege')
    }

    // Save image
   public function save(Request $request){
       $new_file = new Attachment;
       if(Input::hasFile('image')){
         $file = Input::file('image');
         $file->move(public_path('images').'/',$file->getClientOriginalName());
         $new_file->file_name = $file->getClientOriginalName();
         $new_file->save();
         return back();
       }
   }

}
