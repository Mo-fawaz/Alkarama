<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\boss;
use App\Http\Resources\BossResource;
use Illuminate\Http\Request;
use App\Http\Traits\GeneralTrait;

class BossController extends Controller
{
    use GeneralTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $bosses = Boss::all();
            return $this->apiResponse(BossResource::collection($bosses));  
        }catch(\Exception $ex){
            return $this->apiResponse(null,false,$ex->getMessage(),500);
        }
        
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
     * @param  \App\Models\boss  $boss
     * @return \Illuminate\Http\Response
     */
    public function show(boss $boss)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\boss  $boss
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, boss $boss)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\boss  $boss
     * @return \Illuminate\Http\Response
     */
    public function destroy(boss $boss)
    {
        //
    }
}
