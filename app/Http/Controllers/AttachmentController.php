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

      $file_details = HostelDetails::find();
      $files = Attachment::where('detail_id',$file_details->id);
      return view('front/khabgha_list',compact('files'));
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


//store photo from dropdown ... ramazan
     public function addphotos(Request $request)
     {


         $image = $request->file('file');
         $imageName = $image->getClientOriginalName();
         $image->move(public_path('images'),$imageName);

         // $hostel = new Hostel;


         $imageUpload = new Attachment;
         // $imageUpload->hostel_id = $hostel->id;
         $imageUpload->file_name = $imageName;
         $imageUpload->save();
         return response()->json(['success'=>$imageName]);


     }

     //deleting photos from table ... ramazan
    public function fileDestroy(Request $request)
    {
        $filename =  $request->get('file_name');
        Attachment::where('file_name',$filename)->delete();
        $path=public_path().'/images/'.$filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return $filename;
    }
}
