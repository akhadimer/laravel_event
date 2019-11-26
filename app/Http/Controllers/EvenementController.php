<?php

namespace App\Http\Controllers;

use App\Evenement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class EvenementController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('evenements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request = Validator::make($request->all(), [
            'titre' => 'required|max:255',
            'date' => 'required',
            'status' => 'required',
            'description' => 'required',
            'lieu' => 'required',
        ])->validate();

        Auth::user()->Evenement::create($request->all());

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evenement  $Evenement
     * @return \Illuminate\Http\Response
     */
    public function show(Evenement $evenement)
    {
        return view('evenements.show', [
            'evenement' => $evenement
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function edit(Evenement $evenement)
    {
        return view('evenements.edit', [
            'evenement' => $evenement
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evenement $evenement)
    {
        Validator::make($request->all(), [
            'titre' => 'required|max:255',
            'date' => 'required',
            'status' => 'required',
            'description' => 'required',
            'lieu' => 'required',
        ])->validate();

        $evenement->titre = $request->titre;
        $evenement->contenu = $request->contenu;
        $evenement->save();

        return redirect()->route('home')->with('success', 'Evenement Modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evenement $evenement)
    {
        $evenement->delete();
        return redirect()->route('home')->with('success', 'Evenement Supprimé');
    }
}
