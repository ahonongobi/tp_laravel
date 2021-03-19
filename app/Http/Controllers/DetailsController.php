<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DisplayCar;
use DB;
class DetailsController extends Controller
{
    //
    public function show($id){
        //$specifiqueCarDetails = DisplayCar::where('id',$id);
        $specifiqueCarDetails = DB::select("SELECT * FROM voiture WHERE id=?",[$id]);
        return view('details',compact('specifiqueCarDetails'));
    }
    public function islouer($id){
        $specifiqueCarDetailOnlyOne = DB::select("SELECT * FROM voiture WHERE id=?",[$id]);
        return view('louer',compact('specifiqueCarDetailOnlyOne'));
    }
}
