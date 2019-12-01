<?php

namespace App\Http\Controllers;
use App\Food;
use App\FoodMenu;
use Illuminate\Http\Request;
use DB;
class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // show the food from admin page CMS
         $foods = Food::all();
        $food_name = DB::table('food_menus')
         ->join('foods' , 'foods.id' ,'=' ,'food_menus.food_id')
         // ->join('static_tables' , 'static_tables.id' ,'=' ,'food_menus.week_days_id')
         // ->join('food_categories' , 'food_categories.id', '=' , 'food_menus.food_category_id')
         ->select('foods.name')
         ->get();
        // dd($food_name);
    //
    // echo "<pre>";
    // print_r($food_name);


        return view('cms.hostel.food_menu',compact('foods' , 'food_name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $foods = $request->except(['_token','descrption']);

        $data = [];
        foreach ($foods as $name => $food)
        {
            $week_time = explode('_',$name);
            $time    = $week_time[0];
            $weekday = $week_time[1];

            $foodMenu = new FoodMenu();
            $foodMenu->food_id = $food;
            $foodMenu->hostel_id = 3;
            $foodMenu->week_days_id = $weekday;
            $foodMenu->food_category_id = $time;
            $data[] = $foodMenu->attributesToArray();
        }

        $result = FoodMenu::insert($data);

        // if($result)
        //   return redirect()->route('hostel.index')->with('success','');
        // else
          return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function show(Food $food)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function edit($hostel_id)
    {
        $food_menu = FoodMenu::where('hostel_id',$hostel_id)->get();
        return view('cms.hostel.edit_food_menu',compact('food_menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $foods = $request->except(['_token','descrption']);
        $data = [];
        foreach ($foods as $name => $food)
        {
            $week_time = explode('_',$name);
            $time    = $week_time[0];
            $weekday = $week_time[1];

            FoodMenu::where('food_category_id',$time)->where('week_days_id',$weekday)->where('hostel_id',3)->Update(['food_id' => $food]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food $food)
    {
        //
    }
}
