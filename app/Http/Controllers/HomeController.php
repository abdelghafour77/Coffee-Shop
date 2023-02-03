<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $allMeals = ["Meal 1 ", "Meal 2", "Meal 3", "Meal 4"];
        return view('index', ["meals" => $allMeals]);
    }
}
