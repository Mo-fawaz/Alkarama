<?php

namespace App\Http\Controllers\api;
use App\Http\Resources\TopfanResource;

use App\Http\Controllers\Controller;
use App\Models\topfan;
use Illuminate\Http\Request;

class TopfanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TopfanResource::collection(Topfan::all());

        
        
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
     * @param  \App\Models\topfan  $topfan
     * @return \Illuminate\Http\Response
     */
    public function show(topfan $topfan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\topfan  $topfan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, topfan $topfan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\topfan  $topfan
     * @return \Illuminate\Http\Response
     */
    public function destroy(topfan $topfan)
    {
        //
    }
}
