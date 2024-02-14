<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\employee;
use Illuminate\Http\Request;
use App\Http\Resources\EmployeeResource;
use App\Http\Traits\GeneralTrait;

class EmployeeController extends Controller
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
            $employees = Employee::all();
            return EmployeeResource::collection($employees);
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
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(employee $employee, $uuid)
    {
        
        try{
            $employe=$employee->where('uuid',$uuid)->first();
            // dd($employe[0]->uuid);
            return $this->apiResponse(EmployeeResource::make($employe));
        }catch(\Exception $ex){
            return $this->apiResponse(null,false,$ex->getMessage(),500);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(employee $employee)
    {
        //
    }
}
