<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\DisplayCar;
class DisplayCarController extends Controller
{
    public function DisplayCar(){
      $car = DisplayCar::all();
      $isAUth = "GobiEncryptnotAuthenticatedAndAcessTemporallyDeniedUntilYouLogIN.";
      return view('welcome',compact('car','isAUth'));
    }
    public function DisplayCarUserAuth(){
        $car = DisplayCar::all();
      $isAUth = "GobiEncryptnotAuthenticatedAndAcessTemporallyDeniedUntilYouLogINIsOk.";
      return view('welcome',compact('car','isAUth'));
    }
}
