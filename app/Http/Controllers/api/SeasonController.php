<?php

namespace App\Http\Controllers\api;
use App\Http\Traits\GeneralTrait;
use App\Http\Controllers\Controller;
use App\Http\Resources\SeasonResource;
use App\Models\Season;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class SeasonController extends Controller
{
    use GeneralTrait;

    public function index()
    {
        return $this->apiResponse([SeasonResource::collection(Season::all())]);
    }

   
    public function store(Request $request)
    {
        $validator=validator::make($request->all(),
        [
            'name'=>'required|string',
            'start'=>'required|date',
            'end'=>'required|date',   
        ] );
            if($validator->fails()){
                $error=$validator->errors();
              return $this->apiResponse(null,false,$error,422);
                   }

            else{
              $data=new Season;
              $data->uuid =Str::uuid();
              $data->name=$request->input('name');
              $data->start=$request->input('start');
              $data->end=$request->input('end');
              $data->save();
              return $this->apiResponse(new SeasonResource($data),true,"Successfully Added",201);
             

            }
    }

    
    public function show(season $season,$id)
    {
        if($season::find($id)){
        return SeasonResource::make( $season::all()->first());}
        else{
            $error='Not found';
            return $this->notFoundResponse($error);

        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\season  $season
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, season $season,$id)
    {
        $validator=validator::make($request->all(),
        [
            'name'=>'required|string',
            'start'=>'required|date',
            'end'=>'required|date',   
        ] );
            if($validator->fails()){
                $error=$validator->errors();
              return $this->apiResponse(null,false,$error,422);
                   }

            else{
              $data= Season::find($id);;
              $data->name=$request->input('name');
              $data->start=$request->input('start');
              $data->end=$request->input('end');
              $data->save();
              return $this->apiResponse($data);
            }
    }

   
    public function destroy(season $season,$id)
    {
        $season::find($id);
        $season->delete();
       
    }
}
