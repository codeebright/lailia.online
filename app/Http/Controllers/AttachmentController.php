<?php

namespace App\Http\Controllers;
use App\Attachment;
use App\HostelPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\input;

class AttachmentController extends Controller
{


    // Save image
   public function save(Request $request){
       $new_file = new HostelPhoto();
       if(Input::hasFile('file')){
         $file = Input::file('file');
         $file->move(public_path('/assets-/app/media/img/blog/hostels-img').'/',$file->getClientOriginalName());
         $new_file->file_name = $file->getClientOriginalName();
         $new_file->save();
         return back();
       }
   }

    public function index()
    {
    }


//    store rooms images
    public function store(Request $request)
    {
      $new_file = new Attachment();
      if (Input::hasFile('img_name')) {
        $file = Input::file('img_name');
        $file->move(public_path('/assets-/app/media/img/blog/rooms-img').'/',$file->getClientOriginalName());
        $new_file->img_name = $file->getClientOriginalName();
        $new_file->save();
        return back()->with('success','data saved successfully');
      }
    }

     public function show()
     {
     }
}
