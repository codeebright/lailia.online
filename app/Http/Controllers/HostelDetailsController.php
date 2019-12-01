<?php


namespace App\Http\Controllers;

use App\Attachment;
use App\Hostel;
use App\FoodMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Image;


class HostelDetailsController extends Controller
{
    public function index($hostel_id)
    {
        $food_menus = FoodMenu::all();
        // morning foods
        $sat_mor = $food_menus->where("food_category_id", "1")->where('hostel_id', $hostel_id)
            ->where("week_days_id", "1");
        $sun_mor = $food_menus->where("food_category_id", "1")->where('hostel_id', $hostel_id)
            ->where("week_days_id", "2");
        $mon_mor = $food_menus->where("food_category_id", "1")->where('hostel_id', $hostel_id)
            ->where("week_days_id", "3");
        $thu_mor = $food_menus->where("food_category_id", "1")->where('hostel_id', $hostel_id)
            ->where("week_days_id", "4");
        $wed_mor = $food_menus->where("food_category_id", "1")->where('hostel_id', $hostel_id)
            ->where("week_days_id", "5");
        $thur_mor = $food_menus->where("food_category_id", "1")->where('hostel_id', $hostel_id)
            ->where("week_days_id", "6");
        $fri_mor = $food_menus->where("food_category_id", "1")->where('hostel_id', $hostel_id)
            ->where("week_days_id", "7");

        // lunch foods
        $sat_lun = $food_menus->where('food_category_id', 2)->where('hostel_id', $hostel_id)
            ->where("week_days_id", "1");
        $sun_lun = $food_menus->where("food_category_id", "2")->where('hostel_id', $hostel_id)
            ->where("week_days_id", "2");
        $mon_lun = $food_menus->where("food_category_id", "2")->where('hostel_id', $hostel_id)
            ->where("week_days_id", "3");
        $thu_lun = $food_menus->where("food_category_id", "2")->where('hostel_id', $hostel_id)
            ->where("week_days_id", "4");
        $wed_lun = $food_menus->where("food_category_id", "2")->where('hostel_id', $hostel_id)
            ->where("week_days_id", "5");
        $thur_lun = $food_menus->where("food_category_id", "2")->where('hostel_id', $hostel_id)
            ->where("week_days_id", "6");
        $fri_lun = $food_menus->where("food_category_id", "2")->where('hostel_id', $hostel_id)
            ->where("week_days_id", "7");

        // night foods
        $sat_nig = $food_menus->where('food_category_id', 3)->where('hostel_id', $hostel_id)
            ->where("week_days_id", "1");
        $sun_nig = $food_menus->where("food_category_id", "3")->where('hostel_id', $hostel_id)
            ->where("week_days_id", "2");
        $mon_nig = $food_menus->where("food_category_id", "3")->where('hostel_id', $hostel_id)
            ->where("week_days_id", "3");
        $thu_nig = $food_menus->where("food_category_id", "3")->where('hostel_id', $hostel_id)
            ->where("week_days_id", "4");
        $wed_nig = $food_menus->where("food_category_id", "3")->where('hostel_id', $hostel_id)
            ->where("week_days_id", "5");
        $thur_nig = $food_menus->where("food_category_id", "3")->where('hostel_id', $hostel_id)
            ->where("week_days_id", "6");
        $fri_nig = $food_menus->where("food_category_id", "3")->where('hostel_id', $hostel_id)
            ->where("week_days_id", "7");

        $hostel = Hostel::find($hostel_id);
        return view('front.khabgah_details',
            compact([
                'hostel',
                'new_img',
                'sat_mor',
                'sun_mor',
                'mon_mor',
                'thu_mor',
                'wed_mor',
                'thur_mor',
                'fri_mor',

                'sat_lun',
                'sun_lun',
                'mon_lun',
                'thu_lun',
                'wed_lun',
                'thur_lun',
                'fri_lun',

                'sat_nig',
                'sun_nig',
                'mon_nig',
                'thu_nig',
                'wed_nig',
                'thur_nig',
                'fri_nig',
            ]));

    }


}

