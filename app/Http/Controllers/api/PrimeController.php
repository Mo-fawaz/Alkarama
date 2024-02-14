<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\prime;
use App\Http\Resources\PrimeResource;
use Illuminate\Http\Request;
use App\Http\Traits\GeneralTrait;

class PrimeController extends Controller
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
           $primes = Prime::all();
        return $this->apiResponse(PrimeResource::collection($primes)); 
        }
        catch(\Exception $ex){
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
     * @param  \App\Models\prime  $prime
     * @return \Illuminate\Http\Response
     */
    public function show(prime $prime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\prime  $prime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, prime $prime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\prime  $prime
     * @return \Illuminate\Http\Response
     */
    public function destroy(prime $prime)
    {
        //
    }
}
