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

class ApartmentsController extends Controller
{
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

    public function create()
    {
        $groups = Group::all();
        return GroupResource::collection($groups);
 
    }

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
