<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\notebook;

class homecontroller extends Controller
{
   public function index(){
      $notes=notebook::orderBy('id','desc')->get();
    return view('note.index',[
       'notes'=>$notes
    ]);
   }
  
}
