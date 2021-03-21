<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;
use App\Models\DisplayCar;
class UpdateController extends Controller
{
    public function editView($id){
        $checkdata = DB::select('SELECT * FROM voiture WHERE id=?',[$id]);
        return view('modification',compact('checkdata'));
    }
    public function edit(Request $req,$id){
        

        $sendToDatabaseCarCode = $req->code;
        $sendToDatabaseCarNom = $req->nom;
        $sendToDatabaseCarDesc = $req->desc;

        if($req->hasFile('file')){
            $file = $req->file('file');

            $filename = 2*time().'.'.$file->getClientOriginalExtension();
            Image::make($file)->save(public_path('/voiture/'.$filename));

            $sendToDatabaseCarImage= $filename;
         }
         $requestUpdate = DB::update("UPDATE voiture SET code_voiture=?,voiture_nom=?,voiture_description=?,voiture_image=? WHERE id=?",[
            $sendToDatabaseCarCode,$sendToDatabaseCarNom,$sendToDatabaseCarDesc,$sendToDatabaseCarImage,$id,
         ]);
         return back()->with('sucess','Modification effectuéé avec success');
    }
}
