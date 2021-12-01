<?php

namespace App\Http\Controllers\Api;
use App\notebook;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Notecontroller extends Controller
{
    public function index(){
        $datas=Note::where('id',2)->first();
        return $datas;
    }
    public function store(Request $request)
    {
        $title=$request->title;
        $description=$request->description;
        

        $notebooks=new notebook();
        $notebooks->title="$title";
        $notebooks->description="$description";
        $notebooks->save();
        
      
       return $note;
    }


}
