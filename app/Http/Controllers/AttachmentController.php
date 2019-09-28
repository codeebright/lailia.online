<?php

namespace App\Http\Controllers;
use App\Attachment;
use App\HostelDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\input;

class AttachmentController extends Controller
{


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

    public function index()
    {
      //
      // $file_details = HostelDetails::find();
      // $files = Attachment::where('detail_id',$file_details->id);
      // return view('khabgha_list')->were('files',$files);
      // // return view('khabgha_list',compact('files'));
    }

    public function store(Request $request)
    {
      $hDetail_id = HostelDetails::all();

      $new_file = new Attachment;
      if (Input::hasFile('image')) {
        $file = Input::file('image');
        $file->move(public_path('images').'/',$file->getClientOriginalName());
        $new_file->file_name = $file->getClientOriginalName();
        $new_file->save();
        return back()->with('success','data saved successfully');
      }
    }



     public function show()
     {
     }
}
