<?php


namespace App\Http\Controllers;
use App\Attachment;
use App\HostelDetails;
use App\Hostel;
use App\Food;
use App\FoodMenu;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class HostelDetailsController extends Controller
{
    public function index($hostel_id)
    {
        $food_menus = FoodMenu::where('food_category_id',1)->where('hostel_id',$hostel_id)->get();
        $hostel = Hostel::find($hostel_id);
        return view('front/khabgah_details', compact(['hostel','food_menus']));
    }

}
