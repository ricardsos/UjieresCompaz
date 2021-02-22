<?php

namespace App\Http\Controllers;

use App\Models\Worship;
use App\Models\Day;
use Illuminate\Http\Request;

class WorshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $worships = Worship::all();
        return view('user/worship',compact('worships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $days = Day::all();
        return view('user/createWorship',compact('days'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        Worship::create([
            'nombre' => request('nombre'),
            'day_id' => request('dia'),
            'start_time' => request('horaInicio'),
            'end_time' => request('horaFin')
        ]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Worship  $worship
     * @return \Illuminate\Http\Response
     */
    public function show(Worship $worship)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Worship  $worship
     * @return \Illuminate\Http\Response
     */
    public function edit(Worship $worship)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Worship  $worship
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Worship $worship)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Worship  $worship
     * @return \Illuminate\Http\Response
     */
    public function destroy(Worship $worship)
    {
        //
    }
}
