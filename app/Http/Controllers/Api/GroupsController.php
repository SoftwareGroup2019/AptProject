<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\GroupRequest;
use App\Http\Resources\GroupResource;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GroupsController extends Controller
{
    public function showall()
    {

        try {

            $all_group = Group::all();
            return GroupResource::collection($all_group);
            
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'status'=>false,
                'message'=>$th->getMessage(),
            ],500);
        }

       
    }

    public function store(GroupRequest $groupRequest)
    {
        try {

            $validated_group = $groupRequest->validated();

            $group = Group::create($validated_group);

            return new GroupResource($group);
            
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

            $role = Group::find($id);
            return new GroupResource($role);
            
        } catch (\Throwable $th) {
            return response()->json([
                'status'=>false,
                'message'=>$th->getMessage(),
            ],500);
        }
    }

    public function update(GroupRequest $groupRequest,$id)
    {
        try {
            
            $validated_group = $groupRequest->validated();

            $updated_role = DB::table('groups')
              ->where('id', $id)
              ->update($validated_group);

              if ($updated_role) 
              {
                return response()->json([
                    'status'=>true,
                    'message'=>'Group Updated Succeesfully',
                ],200);
              }
              else
              {
                return response()->json([
                    'status'=>true,
                    'message'=>'Group Note Updated Succeesfully',
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
            
            $deleted = DB::table('groups')->where('id', '=', $id)->delete();

            if ($deleted)
            {
                return response()->json([
                    'status'=>true,
                    'message'=>'Group Deleted Succeesfully',
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
