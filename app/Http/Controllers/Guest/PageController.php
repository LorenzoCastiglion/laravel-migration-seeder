<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index(){
        $trains = Train::all();
        return view('home', compact('trains'));
    }
    public function filtered(){
        $trains = Train::all()->where('data_partenza', '2021-05-11'); 
        return view('home', compact('trains'));
    }
}
