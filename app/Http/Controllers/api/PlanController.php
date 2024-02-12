<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\GameResource;
use App\Http\Resources\PlanResource;
use App\Http\Traits\GeneralTrait;
use App\Models\Game;
use App\Models\plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PlanController extends Controller
{
    use GeneralTrait;
    
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
     * @param  \App\Models\plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function show(plan $plan,$uuid)
    {
        $message = ['uuid.exists' => 'this game is not exists'];
        $validator = Validator::make(
            ['uuid' => $uuid],
            ['uuid' => 'required|exists:games,uuid|string'],
            $message
        );
        if ($validator->fails()) {
            return $this->apiResponse(Null,False,$validator->errors(),422);
        }
        else
        {
            $game=Game::whereuuid($uuid)->first();
            $data['game']=GameResource::make($game);
            $data['plan']=PlanResource::collection($game->plans);
            $data['statistic']=$game->statistic;
            $data['replacments']=$game->replacmentsin;
        }
        return $this->apiResponse($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, plan $plan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function destroy(plan $plan)
    {
        //
    }
}
