<?php

namespace App\Http\Controllers;
use App\notebook;
use Illuminate\Http\Request;

class Notecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('note.create');
    }

    
    public function store(Request $request)
    {
        $title=$request->title;
        $description=$request->description;
        

        $notebooks=new notebook();
        $notebooks->title="$title";
        $notebooks->description="$description";
        $notebooks->save();
        
      
       return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $note=notebook::find($id);
        return view('note.show',[
            'note'=>$note
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $note=notebook::find($id);
        return view('note.edit',[
            'note'=>$note
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $title=$request->title;
        $description=$request->description;
        

        $notebooks=notebook::find($id);
        $notebooks->title="$title";
        $notebooks->description="$description";
        $notebooks->save();
        
      
       return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        notebook::find($id)->delete();
        return redirect()->route('home');
    }
}
