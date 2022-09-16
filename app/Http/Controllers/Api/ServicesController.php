<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Http\Resources\GroupResource;
use App\Http\Resources\ServiceResource;
use App\Models\Group;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


/**
 * @group Services API
 * 
 * Managing all services API Resource
 */

class ServicesController extends Controller
{
    
    /**
     * fetch all services
     * 
     * @return \Illuminate\Http\Response
    */
    public function showall()
    {

        try {

            $all_service = Service::all();
            return ServiceResource::collection($all_service);
            
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'status'=>false,
                'message'=>$th->getMessage(),
            ],500);
        }

       
    }


    /**
     * Create Service Request
     * 
     * you can create any services with attaching group
     *
     * @apiResource App\Http\Resources\GroupResource
     * @apiResourceModel App\Models\Group
     * 
    */
    public function create()
    {
        $groups = Group::all();


        return GroupResource::collection($groups);
    }


    /**
     * store service request
     * 
     * @bodyParam servicename string required The name of service. Example: Laundry
     * @bodyParam title string required The title of service. Example: Golden Laundry Co.
     * @bodyParam username string required The username of service. Example: Sardar Karkuki
     * @bodyParam email string required The email of service. Example: sardar@app.com
     * @bodyParam password string required The password of service. Example: 123123
     * @bodyParam status string required The status of service. Example: notAvailable
     * @bodyParam from string required The from of service which its start time of available. Example: 8AM
     * @bodyParam to string required The to of service which its end time of available. Example: 4PM
     * @bodyParam group_id string required The group of service ex: Lalav. Example: 1
     * @apiResource App\Http\Resources\ServiceResource
     * @apiResourceModel App\Models\Service
    */
    public function store(ServiceRequest $serviceRequest)
    {
        try {

            $validated_service = $serviceRequest->validated();

            $service = Service::create($validated_service);

            return new ServiceResource($service);
            
        } catch (\Throwable $th) {
            return response()->json([
                'status'=>false,
                'message'=>$th->getMessage(),
            ],500);
        }
    }


    /**
     * edit service request
     *
     * you can get service by ID
     * 
     * @urlParam id integer required The ID of the service. Example: 1
     * @apiResource App\Http\Resources\ServiceResource
     * @apiResourceModel App\Models\Service
    */
    public function edit($id)
    {
        try {

            $service = Service::find($id);
            return new ServiceResource($service);
            
        } catch (\Throwable $th) {
            return response()->json([
                'status'=>false,
                'message'=>$th->getMessage(),
            ],500);
        }
    }


    /**
     * Update Service Request
     * 
     * you can update any service by ID
     *
     * @bodyParam servicename string required The name of service. Example: Laundry
     * @bodyParam title string required The title of service. Example: Golden Laundry Co.
     * @bodyParam username string required The username of service. Example: Sardar Karkuki
     * @bodyParam email string required The email of service. Example: sardar@app.com
     * @bodyParam password string required The password of service. Example: 123123
     * @bodyParam statux string required The status of service. Example: notAvailable
     * @bodyParam from string required The from of service which its start time of available. Example: 8AM
     * @bodyParam to string required The to of service which its end time of available. Example: 4PM
     * @bodyParam group_id string required The group of service ex: Lalav. Example: 1
     * @urlParam id integer required The ID of the service. Example: 1
     * @response 200 {
     *   "status": true,
     *   "message": "Service Updated Succeesfully"
     * }
    */
    public function update(ServiceRequest $serviceRequest,$id)
    {
        try {
            
            $validated_service = $serviceRequest->validated();

            $updated_service = DB::table('users')
              ->where('id', $id)
              ->update($validated_service);

              if ($updated_service) 
              {
                return response()->json([
                    'status'=>true,
                    'message'=>'Service Updated Succeesfully',
                ],200);
              }
              else
              {
                return response()->json([
                    'status'=>true,
                    'message'=>'Service Not Updated',
                ],401);
              }

        } catch (\Throwable $th) {
            return response()->json([
                'status'=>false,
                'message'=>$th->getMessage(),
            ],500);
        }
    }


    /**
     * Delete Service Request
     * 
     * you can Delete any service by ID
     *
     * @urlParam id integer required The ID of the service. Example: 1
     * @response 200 {
     *   "status": true,
     *   "message": "Service Deleted Succeesfully"
     * }
    */
    public function delete($id)
    {
        try {
            
            $deleted = DB::table('services')->where('id', '=', $id)->delete();

            if ($deleted)
            {
                return response()->json([
                    'status'=>true,
                    'message'=>'Services Deleted Succeesfully',
                ],200);    
            }
            else 
            {
                return response()->json([
                    'status'=>true,
                    'message'=>'Services Not Deleted',
                ],401);  
            }

        } catch (\Throwable $th) {
            return response()->json([
                'status'=>false,
                'message'=>$th->getMessage(),
            ],500);
        }
    }
}
