<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus;

class BusController extends Controller
{
    public function buses()
    {
        $buses = Bus::all();
        return view('buses', compact('buses'));
    }

    public function create()
    {
        return view('create');
    }

    public function addBus(Request $request)
    {
        $sizePicture = $request->file('picture')->getSize();
        $namePicture = $request->file('picture')->getClientOriginalName();
        $request->file('picture')->storeAs('public/images/', $namePicture);

        $bus = new Bus();
        $bus->namePicture = $namePicture;
        $bus->sizePicture = $sizePicture;
        $bus->brand = $request->input('brand');
        $bus->model = $request->input('model');
        $bus->color = $request->input('color');
        $bus->price = $request->input('price');
        $bus->speed = $request->input('speed');
        $bus->save();

        return redirect('/buses');
    }

    public function compare()
    {
        $mostExpensive = Bus::orderBy('price', 'desc')->first();
        return view('compare', ['mostExpensive' => $mostExpensive]);
    }
}