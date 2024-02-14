<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Traits\GeneralTrait;
use App\Models\League;
use App\Models\Season;

use Illuminate\Http\Request;
use App\Http\Resources\LeagueResource;
use App\Http\Resources\SeasonResource;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;

class LeagueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use GeneralTrait;

    public function index()
    {
        // return $this->apiResponse([SeasonResource::collection(Season::all()),
        // LeagueResource::collection(league::all())]);
        // return $this->apiResponse([LeagueResource::collection(league::all())]);
        

        $leagues=League::orderBy('points','desc')->orderBy('goals','desc')->get();
        return $this->apiResponse([LeagueResource::collection($leagues)]);

    }

    public function search(Request $request)
    {

    //dd(Season::where('uuid',$request->uuid)->first(),$request->uuid);
    $message = ['uuid.exists' => 'this season is not exists'];
        $validator = Validator::make(
            ['uuid' => $request->uuid],
            ['uuid' => 'required|exists:seasons,uuid|string'],
            $message
        );
        if($validator->fails()){
            $error=$validator->errors();
          return $this->apiResponse(null,false,$error,422);
               }

               else {
    $season_id=Season::where('uuid',$request->uuid)->first()->id;
    $league=League::where('season_id',$season_id)->orderBy('points','desc')->orderBy('goals','desc')->get();
    return $this->apiResponse([LeagueResource::collection($league)]);   }
    
      
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
     * @param  \App\Models\League  $league
     * @return \Illuminate\Http\Response
     */
    public function show(League $league)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\League  $league
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, League $league)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\League  $league
     * @return \Illuminate\Http\Response
     */
    public function destroy(League $league)
    {
        //
    }
}
