<?php

use Illuminate\Database\Seeder;
use App\Food;

class foodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $foods = [
        ['name' => 'قابلی'],
        ['name' => 'برنج'],
        ['name' => 'لوبیا'],
        ['name' => 'شوربا'],
        ['name' => 'تخم'],
        ['name' => 'شیر'],
        ['name' => 'ماکارونی'],
        ['name' => 'عسل'],
        ['name' => 'پنیر'],
      ];


        foreach ($foods as $value) {
            Food::create($value);
        }
    }
}
