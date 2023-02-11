<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Meal;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meals = Meal::all();

        return view('meals.index', ["meals" => $meals]);
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
        $request->validate([
            "title" => "required|min:3|max:200",
            "description" => "required|min:5",
            "price" => "required",
            "image" => "required|image|mimes:jpg,bmp,png|max:5120",
        ]);
        $inputs = $request->all();
        $inputs['slug'] = Str::slug($inputs['title'], '-');
        $inputs['image'] = $request->file('image')->store('images', 'public');

        Meal::create($inputs);
        toast('Your Post as been submited!', 'success');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {

        // $meal = Meal::find($id)->where('slug', $id)->first();
        $meal = Meal::where('slug', $slug)->first();
        return view('meals.edit', ["meal" => $meal]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validatedData = Validator::make($request->all(), [
            "title" => "required|min:3|max:200",
            "description" => "required|min:5",
            "price" => "required",
            "image" => "image|mimes:jpg,bmp,png|max:5120",
        ]);
        // check if there is problem in validation then redirect to edit page
        if ($validatedData->fails()) {
            return back()->withErrors($validatedData->errors());
        }



        $meal = Meal::find($id);
        $inputs = $request->all();
        $inputs['slug'] = Str::slug($inputs['title'], '-');
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($meal->image);
            $inputs['image'] = $request->file('image')->store('images', 'public');
        }
        $meal->update($inputs);
        toast('Your Post as been updated!', 'success');
        return redirect()->route('meals.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Meal::destroy($id);
        return redirect()->back();
    }
}
