<?php

namespace App\Http\Controllers\api;
use App\Http\Traits\GeneralTrait;
use App\Http\Controllers\Controller;
use App\Http\Traits\GeneralTrait;
use App\Models\association;
use App\Http\Resources\associationResource;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AssociationController extends Controller
{
    use GeneralTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use GeneralTrait;

    public function index()
    {
        return $this->apiResponse([associationResource::collection(association::all())]);
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
     * @param  \App\Models\association  $association
     * @return \Illuminate\Http\Response
     */
    public function show(association $association)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\association  $association
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, association $association)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\association  $association
     * @return \Illuminate\Http\Response
     */
    public function destroy(association $association)
    {
        //
    }
}
