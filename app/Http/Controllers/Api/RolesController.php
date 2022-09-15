<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use App\Http\Resources\RoleResource;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class RolesController extends Controller
{
    public function showall()
    {

        try {

            $all_role = Role::all();
            return RoleResource::collection($all_role);
            
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'status'=>false,
                'message'=>$th->getMessage(),
            ],500);
        }

       
    }

    public function store(RoleRequest $roleRequest)
    {
        try {

            $validated_role = $roleRequest->validated();

            $role = Role::create($validated_role);

            return new RoleResource($role);
            
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

            $role = Role::find($id);
            return new RoleResource($role);
            
        } catch (\Throwable $th) {
            return response()->json([
                'status'=>false,
                'message'=>$th->getMessage(),
            ],500);
        }
    }

    public function update(RoleRequest $roleRequest,$id)
    {
        try {
            
            $validated_role = $roleRequest->validated();

            $updated_role = DB::table('roles')
              ->where('id', $id)
              ->update($validated_role);

            return response()->json([
                'status'=>true,
                'message'=>'Role Updated Succeesfully',
            ],200);

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
            
            $deleted = DB::table('roles')->where('id', '=', $id)->delete();

            if ($deleted)
            {
                return response()->json([
                    'status'=>true,
                    'message'=>'Role Deleted Succeesfully',
                ],200);    
            }
            else 
            {
                return response()->json([
                    'status'=>true,
                    'message'=>'Role Not Deleted Succeesfully',
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
