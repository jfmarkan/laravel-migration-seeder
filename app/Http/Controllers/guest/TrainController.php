<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    //
    
    public function index(){
        $todayTrain = Train::where('depart_time', '2023-07-23%');

        return view('guest.train.index', compact('todayTrain'));
    }
}
