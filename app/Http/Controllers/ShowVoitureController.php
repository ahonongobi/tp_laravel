<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShowVoiture;
use App\Models\Louer;
class ShowVoitureController extends Controller
{
    //

    public function show(){
        $allCar = ShowVoiture::paginate(5);
        return view('dashboard',compact('allCar'));
    }
    public function showcommades(){
        $allCommandes = Louer::paginate(5);
        return view('dashboardsecond',compact('allCommandes'));
    }

}
