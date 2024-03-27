<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use Illuminate\Http\Request;

use App\Models\User;

class logins extends Controller

{
    public readonly Candidato $candidato;

    public function __construct(){
    $this->candidato = new Candidato();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $candidatos = $this->candidato->all();
        return view('Lista',['candidatos' => $candidatos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->candidato->create(['name'=> $request ->input('name'),'telefone'=>$request ->input('telefone')]);

        if($created){
            return redirect()->back()->with('message','Sucessfully created');
        }
        return redirect()->back()->with('message','Error created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Candidato $candidato)
    {
        return view('mostrar', ['candidato' => $candidato]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $candidato = Candidato::find($id);
        return view('candidato_edit', ['candidato' => $candidato]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->candidato->where('id',$id)->update($request -> except(['_token', '_method']));

        if($updated)
        {
            return redirect()->route('logins.edit',  ['candidato' => $id])->with('message','Sucessfully updated');
        }

        return redirect()->route('logins.edit', ['candidato' => $id])->with('message','Error updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->candidato->where('id', $id)->delete();

        return redirect()->route('logins.index');
    }
    public function lista()
    {
        $candidatos = $this->candidato->all();
        return view('Lista',['candidatos' => $candidatos]);
    }
}
