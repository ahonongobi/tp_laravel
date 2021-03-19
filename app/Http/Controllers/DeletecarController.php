<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DeletecarController extends Controller
{
    public function delete($id){
     $delete = DB::delete('DELETE from voiture WHERE id=? ',[$id]);
     return back();
    }
}
