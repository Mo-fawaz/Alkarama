<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\season;
use Illuminate\Http\Request;

class SeasonController extends Controller
{
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
     * @param  \App\Models\season  $season
     * @return \Illuminate\Http\Response
     */
    public function show(season $season)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\season  $season
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, season $season)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\season  $season
     * @return \Illuminate\Http\Response
     */
    public function destroy(season $season)
    {
        //
    }
}
