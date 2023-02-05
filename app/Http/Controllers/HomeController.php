<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // $allMeals = DB::table('meals')->get();
        $allMeals = Meal::all();
        // $allMeals = ["Meal 1 ", "Meal 2", "Meal 3", "Meal 4"];
        return view('index', ["meals" => $allMeals]);
    }
}
