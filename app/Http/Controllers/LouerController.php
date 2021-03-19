<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Louer;
class LouerController extends Controller
{
    public function louer(Request $req){
       $louer = new Louer();
       $louer->nom = $req->nom;
       $louer->email = $req->email;
       $louer->numero = $req->num;
       $louer->date_locations = $req->date_locations;
       $louer->message=$req->message;

       if($louer->save()){
    return back()->with('success','Votre demande de location a été envoyé avec succès');
       }
       else{
        return back()->with('info','Erreur 303 veuillez réessayer');
       }

    }
}
