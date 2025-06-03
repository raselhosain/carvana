<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index ()
    {

        $cars = Car::where('status', '=', 1)->paginate(3);

        return view('frontend.index', compact('cars'));
    }
}
