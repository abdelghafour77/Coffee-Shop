<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meal;
use App\Models\User;

class dashboardController extends Controller
{
        // function index get count of meals and users
        public function index()
        {
            $meals = Meal::count();
            $users = User::count();
            return view('/dashboard', compact('meals', 'users'));
        }
}
