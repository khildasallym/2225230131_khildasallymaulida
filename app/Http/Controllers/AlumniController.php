<?php

namespace App\Http\controllers;

use App\Models\Alumniuntirta;
use Illuminate\Http\Request;

class AlumniController extends controller
{
    public function index(){
        $alumniuntirta = Alumniuntirta::all();
        return view('index',compact(['alumniuntirta']));
    }

    public function create(){
        return view('create');  
    }

    public function store(Request $request){
       // dd($request->except(['_token']));
        Alumniuntirta::create($request->except(['_token']));
        return redirect('/alumni');
    }

    public function edit($id){
        $alumniuntirta = Alumniuntirta::find($id);
        return view('edit',compact(['alumniuntirta']));
    }

    public function update($id, Request $request){
        $alumniuntirta = Alumniuntirta::find($id);
        $alumniuntirta->update($request->except(['_token', 'submit']));
        return redirect('/alumni');
    }
    
    public function destroy($id){
        $alumniuntirta = Alumniuntirta::find($id);
        $alumniuntirta->delete();
        return redirect('/alumni');
    }
}