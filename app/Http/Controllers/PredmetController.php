<?php

namespace App\Http\Controllers;

use App\Predmet;
use Illuminate\Http\Request;

class PredmetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $predmets=Predmet::all();
         //dd($predmets);
         echo '<ul>';
         foreach ($predmets as $key => $p) {
          echo '<li>'.$p->nazpred.'</li>';
         }
         echo '</ul>';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Predmet  $predmet
     * @return \Illuminate\Http\Response
     */
    public function show(Predmet $predmet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Predmet  $predmet
     * @return \Illuminate\Http\Response
     */
    public function edit(Predmet $predmet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Predmet  $predmet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Predmet $predmet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Predmet  $predmet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Predmet $predmet)
    {
        //
    }
}
