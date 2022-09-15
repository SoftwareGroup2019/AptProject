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

class ServicesController extends Controller
{
    //
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

    public function create()
    {
        $groups = Group::all();


        return GroupResource::collection($groups);
    }

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
