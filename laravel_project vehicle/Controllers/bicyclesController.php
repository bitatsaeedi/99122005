<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bicycle;

class BicycleController extends Controller
{
    public function bicycles()
    {
        $bicycles = Bicycle::all();
        return view('bicycles', compact('bicycles'));
    }

    public function create()
    {
        return view('create');
    }

    public function addBicycle(Request $request)
    {
        $sizePicture = $request->file('picture')->getSize();
        $namePicture = $request->file('picture')->getClientOriginalName();
        $request->file('picture')->storeAs('public/images/', $namePicture);

        $bicycle = new Bicycle();
        $bicycle->namePicture = $namePicture;
        $bicycle->sizePicture = $sizePicture;
        $bicycle->brand = $request->input('brand');
        $bicycle->size = $request->input('size');
        $bicycle->color = $request->input('color');
        $bicycle->price = $request->input('price');
        $bicycle->speed = $request->input('speed');
        $bicycle->save();

        return redirect('/bicycles');
    }

    public function compare()
    {
        $mostExpensive = Bicycle::orderBy('price', 'desc')->first();
        return view('compare', ['mostExpensive' => $mostExpensive]);
    }
}