<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Models\DisplayCar;
class AddcarController extends Controller
{
    public function store(Request $req){

        request()->validate([
            'nom' => ['required'] ,
            'desc' => ['required', 'string'] ,
            'code' => ['required', 'integer'] ,
            'cout' => ['required'] , 
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            
        ]);
        $sendToDatabaseCar = new  DisplayCar();

        $sendToDatabaseCar->code_voiture = $req->code;
        $sendToDatabaseCar->voiture_nom = $req->nom;
        $sendToDatabaseCar->voiture_description = $req->desc;
        
        if($req->hasFile('file')){
            $file = $req->file('file');

            $filename = 2*time().'.'.$file->getClientOriginalExtension();
            Image::make($file)->save(public_path('/voiture/'.$filename));

            $sendToDatabaseCar->voiture_image = $filename;
         }
         if($sendToDatabaseCar->save()){
             return back()->with('sucess','Bien enregistre');
         }
         else{
            return back()->with('danger','Une erreur lors de l\'enregistrement');
         }


    }
}
