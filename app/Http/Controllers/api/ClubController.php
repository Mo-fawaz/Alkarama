<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Club;
use App\Http\Resources\ClubResource;
use Illuminate\Http\Request;
use App\Http\Traits\GeneralTrait;
class ClubController extends Controller
{
    use GeneralTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $clubs = Club::all();
            return $this->apiResponse(ClubResource::collection($clubs));
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
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function show(Club $club , $uuid)
    {
        try{
            $club1 = $club->where('uuid',$uuid)->first();
            return $this->apiResponse(ClubResource::make($club1));
        }catch(\Exception $ex){
            return $this->apiResponse(null,false,$ex->getMessage(),500);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Club $club)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function destroy(Club $club)
    {
        //
    }
}
