<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function cars()
    {
        $cars = Car::all();
        return view('cars', compact('cars'));
    }

    public function create()
    {
        return view('create');
    }

    public function addCar(Request $request)
    {
        $sizePicture = $request->file('picture')->getSize();
        $namePicture = $request->file('picture')->getClientOriginalName();
        $request->file('picture')->storeAs('public/images/', $namePicture);

        $car = new Car();
        $car->namePicture = $namePicture;
        $car->sizePicture = $sizePicture;
        $car->brand = $request->input('brand');
        $car->model = $request->input('model');
        $car->color = $request->input('color');
        $car->price = $request->input('price');
        $car->speed = $request->input('speed');
        $car->save();

        return redirect('/cars');
    }

    public function compare()
    {
        $mostExpensive = Car::orderBy('price', 'desc')->first();
        return view('compare', ['mostExpensive' => $mostExpensive]);
    }
}