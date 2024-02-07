<?php

namespace App\Http\Controllers\api;
use illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Player;
use App\Http\Resources\playerResource;
use App\Http\Traits\GeneralTrait;
class playerController extends Controller
{
    use GeneralTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players=playerResource::collection(Player::all());
        return $this->apiResponse($players);
    }
    
    public function show($id)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'uuid'=>Str::uuid(),
                'name'=>'required|regex:/^[\p{Arabic}]+$/',
                'high'=>'required|integer',
                'position'=>'required|regex:/^[\p{Arabic}]+$/',
                'number'=>'required|integer',
                'from'=>'required|regex:/^[\p{Arabic}]+$/',
                'born'=>'required|date',
                'first_club'=>'required|regex:/^[\p{Arabic}]+$/',
                'career'=>'required|required|regex:/^[\p{Arabic}]+$/',
                'image'=>'required|string',
                'sport_id'=>'required|exists:sports,id'
            ],
        );
        if ($validator->fails()) {
            return  $this->requiredField($validator->errors());
        } else {
            $data = ([
                'uuid'=>$request->uuid,
        'name'=>$request->name,
        'high'=>$request->high,
        'position'=>$request->position,
        'number'=>$request->number,
        'from'=>$request->from,
        'born'=>$request->born,
        'first_club'=>$request->first_club,
        'career'=>$request->career,
        'image'=>$request->image,
        'sport_id'=>$request->sport_id
            ]);
            player::create($data);
            return $request->apiResponse($data);
        }
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
