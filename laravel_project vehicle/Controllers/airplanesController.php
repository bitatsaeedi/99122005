<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Airplane;

class AirplaneController extends Controller
{
    public function airplanes()
    {
        $airplanes = Airplane::all();
        return view('airplanes', compact('airplanes'));
    }

    public function create()
    {
        return view('create');
    }

    public function addAirplane(Request $request)
    {
        $sizePicture = $request->file('picture')->getSize();
        $namePicture = $request->file('picture')->getClientOriginalName();
        $request->file('picture')->storeAs('public/images/', $namePicture);

        $airplane = new Airplane();
        $airplane->namePicture = $namePicture;
        $airplane->sizePicture = $sizePicture;
        $airplane->brand = $request->input('brand');
        $airplane->color = $request->input('color');
        $airplane->price = $request->input('price');
        $airplane->speed = $request->input('speed');
        $airplane->save();

        return redirect('/airplanes');
    }

    public function compare()
    {
        $mostExpensive = Airplane::orderBy('price', 'desc')->first();
        return view('compare', ['mostExpensive' => $mostExpensive]);
    }
}