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

        return view('home', ["meals" => $allMeals]);
    }
}
