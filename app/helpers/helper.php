<?php
use App\Food;
function selectFoodMenue($food_menu,$food_cat_id,$week_day_id)
{
  $foods = Food::all();
  $option = "<option value='' selected>انتخاب نماید.</option>";
  foreach ($food_menu as $menue)
  {
     if($menue->food_category_id==$food_cat_id && $menue->week_days_id==$week_day_id)
     {
       foreach ($foods as $food)
       {
         if($menue->food_id==$food->id)
         {
           $option .= '<option value='.$food->id.' selected>'.$food->name.'</option>';
         }
         else{
            $option .= '<option value='.$food->id.'>'.$food->name.'</option>';
         }
       }
     }
  }


  echo $option;
}

 ?>
