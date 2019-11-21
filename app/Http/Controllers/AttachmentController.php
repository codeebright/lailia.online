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

      $file_details = HostelDetails::find();
      $files = Attachment::where('detail_id',$file_details->id);
      return view('front/khabgha_list',compact('files'));
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


//store photo from dropdown ... ramazan
     public function addphotos(Request $request)
     {


         $image = $request->file('file');
         $imageName = $image->getClientOriginalName();
         $image->move(public_path('images'),$imageName);

         $imageUpload = new Attachment;
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
