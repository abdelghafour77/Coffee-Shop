<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Illuminate\Http\Request;

class MealController extends Controller
{
    //
    public function index()
    {

        $allMeals = Meal::all();
        // $allMeals = ["Meal 1 ", "Meal 2", "Meal 3", "Meal 4"];
        return view('meals', ["meals" => $allMeals]);
    }
}
