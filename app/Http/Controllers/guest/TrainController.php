<?php

namespace App\Http\Controllers\Guest;

use Carbon\Carbon;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    //
    
    public function index(){
        $thisMoment = Carbon::now();

        $todayTrain = Train::where('depart_time', '>', $thisMoment)->get();

        return view('guest.train.index', compact('todayTrain'));
    }
}
