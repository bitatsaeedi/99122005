<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motorcycle;

class MotorcycleController extends Controller
{
    public function motorcycles()
    {
        $motorcycles = Motorcycle::all();
        return view('motorcycles', compact('motorcycles'));
    }

    public function create()
    {
        return view('create');
    }

    public function addMotorcycle(Request $request)
    {
        $sizePicture = $request->file('picture')->getSize();
        $namePicture = $request->file('picture')->getClientOriginalName();
        $request->file('picture')->storeAs('public/images/', $namePicture);

        $motorcycle = new Motorcycle();
        $motorcycle->namePicture = $namePicture;
        $motorcycle->sizePicture = $sizePicture;
        $motorcycle->brand = $request->input('brand');
        $motorcycle->model = $request->input('model');
        $motorcycle->color = $request->input('color');
        $motorcycle->price = $request->input('price');
        $motorcycle->speed = $request->input('speed');
        $motorcycle->save();

        return redirect('/motorcycles');
    }

    public function compare()
    {
        $mostExpensive = Motorcycle::orderBy('price', 'desc')->first();
        return view('compare', ['mostExpensive' => $mostExpensive]);
    }
}