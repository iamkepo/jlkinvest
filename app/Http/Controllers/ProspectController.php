<?php

namespace App\Http\Controllers;

use App\Models\Prospect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProspectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role_name == "admin"){
            $prospect =  Prospect::all();
        }else{
            $prospect =  Prospect::latest()->Where('user_id',Auth::user()->id)->get();
        }
        return view('prospect.prospect',compact('prospect'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prospect.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //   "ppe" => "oui"
    //   "name" => "wilsonkos"
    //   "email" => "wilsonkossouho@gmail.com"
    //   "tel" => "96183338"
    //   "ville" => "Cotonou"
    //   "pays" => "Bénin"
    //   "zip_code" => "BP229"
    //   "profession" => "banquier"
    //   "secteurAct" => "Financier"
    //   "presentation" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur id amet eligendi nulla excepturi atque! Non magni laudantium ullam sequi?"
    //   "originProspect" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur id amet eligendi nulla excepturi atque! Non magni laudantium ullam sequi?"
    //   "potentielRelation" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur id amet eligendi nulla excepturi atque! Non magni laudantium ullam sequi?"

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:prospects,email'],
            'tel' => ['required','digits_between:10,12'],
            'ville' => ['required', 'string', 'max:255'],
            'pays' => ['required', 'string', 'max:255'],
            'zip_code' => ['required', 'string', 'max:255'],
            'profession' => ['required', 'string', 'max:255'],
            'secteurAct'=> ['required', 'string', 'max:255'],
            'presentation' => ['required', 'string', 'max:255'],
            'originProspect' => ['required', 'string', 'max:255'],
            'potentielRelation' => ['required', 'string', 'max:255'],
        ]);
        $ppe = 0;
        if($request->ppe == 'oui'){
            $ppe = 1;
        }

        $prospect = Prospect::created([
            'designation' => strtolower($request->name),
            'email' => strtolower($request->email),
            'tel' => strtolower($request->tel),
            'ville' => strtolower($request->ville),
            'pays' => strtolower($request->pays),
            'zip_code' => strtolower($request->zip_code),
            'profession' => strtolower($request->profession),
            'secteurAct'=> strtolower($request->secteurAct),
            'presentation' => strtolower($request->presentation),
            'originProspect' => strtolower($request->originProspect),
            'potentielRelation' => strtolower($request->potentielRelation),
            'ppe' => $ppe,
        ]);

        return redirect()->route('prospect.index')->with('success','Votre Prospect a été crée!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prospect  $prospect
     * @return \Illuminate\Http\Response
     */
    public function show(Prospect $prospect)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prospect  $prospect
     * @return \Illuminate\Http\Response
     */
    public function edit(Prospect $prospect)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prospect  $prospect
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prospect $prospect)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prospect  $prospect
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prospect $prospect)
    {
        //
    }
}
