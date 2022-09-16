<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApartmentRequest;
use App\Http\Resources\ApartmentResource;
use App\Http\Resources\GroupResource;
use App\Models\Apartment;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


/**
 * @group Apartments API
 * 
 * Managing all apartments API Resource
 */

class ApartmentsController extends Controller
{

    /**
     * fetch all apartments
     * 
     * @return \Illuminate\Http\Response
    */
    public function showall()
    {

        try {

            $all_apt = Apartment::all();
            return ApartmentResource::collection($all_apt);
            
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'status'=>false,
                'message'=>$th->getMessage(),
            ],500);
        }

       
    }


    /**
     * Create Apartment Request
     * 
     * you can create any apartment with attaching group
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
     * store apartment request
     * 
     * @bodyParam aptname string required The name of apartment. Example: A1-01
     * @bodyParam password string required The password of apartment. Example: 123123
     * @bodyParam enableads boolean required The enabling advertisment of apartment. Example: 1
     * @bodyParam enableservice boolean required The enabling service of apartment. Example: 1
     * @bodyParam passcode string required The code of apartment ordering. Example: 0000
     * @bodyParam group_id string required The group of apartment ex: Lalav. Example: 1
     * @apiResource App\Http\Resources\ApartmentResource
     * @apiResourceModel App\Models\Apartment
    */
    public function store(ApartmentRequest $apartmentRequest)
    {
        try {

            $validated_apt = $apartmentRequest->validated();

            $apt = Apartment::create($validated_apt);

            return new ApartmentResource($apt);
            
        } catch (\Throwable $th) {
            return response()->json([
                'status'=>false,
                'message'=>$th->getMessage(),
            ],500);
        }
    }


    /**
     * edit apartmemt request
     *
     * you can get apartment by ID
     * 
     * @urlParam id integer required The ID of the apartment. Example: 1
     * @apiResource App\Http\Resources\ApartmentResource
     * @apiResourceModel App\Models\Apartment
    */
    public function edit($id)
    {
        try {

            $apt = Apartment::find($id);
            return new ApartmentResource($apt);
            
        } catch (\Throwable $th) {
            return response()->json([
                'status'=>false,
                'message'=>$th->getMessage(),
            ],500);
        }
    }


    /**
     * Update Apartment Request
     * 
     * you can update any apartment by ID
     *
     * @bodyParam aptname string required The name of apartment. Example: A1-01
     * @bodyParam password string required The password of apartment. Example: 123123
     * @bodyParam enableads boolean required The enabling advertisment of apartment. Example: 1
     * @bodyParam enableservice boolean required The enabling service of apartment. Example: 1
     * @bodyParam passcode string required The code of apartment ordering. Example: 0000
     * @bodyParam group_id string required The group of apartment ex: Lalav. Example: 1
     * @urlParam id integer required The ID of the apartment. Example: 1
     * @response 200 {
     *   "status": true,
     *   "message": "Apartment Updated Succeesfully"
     * }
    */
    public function update(ApartmentRequest $apartmentRequest,$id)
    {
        try {
            
            $validated_apt = $apartmentRequest->validated();

            $updated_apt = DB::table('apartments')
              ->where('id', $id)
              ->update($validated_apt);

              if ($updated_apt) 
              {
                return response()->json([
                    'status'=>true,
                    'message'=>'Apartment Updated Succeesfully',
                ],200);
              }
              else
              {
                return response()->json([
                    'status'=>true,
                    'message'=>'Apartment Not Updated',
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
     * Delete Apartment Request
     * 
     * you can Delete any apartment by ID
     *
     * @urlParam id integer required The ID of the apartment. Example: 1
     * @response 200 {
     *   "status": true,
     *   "message": "Apartment Deleted Succeesfully"
     * }
    */
    public function delete($id)
    {
        try {
            
            $deleted = DB::table('apartments')->where('id', '=', $id)->delete();

            if ($deleted)
            {
                return response()->json([
                    'status'=>true,
                    'message'=>'Apartment Deleted Succeesfully',
                ],200);    
            }
            else 
            {
                return response()->json([
                    'status'=>true,
                    'message'=>'Apartment Not Deleted',
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
