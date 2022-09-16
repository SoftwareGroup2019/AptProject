<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\GroupRequest;
use App\Http\Resources\GroupResource;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


/**
 * @group Groups API
 * 
 * Managing all groups API Resource
 */

class GroupsController extends Controller
{

        /**
     * fetch all groups
     * 
     * @return \Illuminate\Http\Response
     */
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

        /**
     * store group request
     * 
     * 
     * @bodyParam groupname string required The name of users group. Example: Lalav
     * @apiResource App\Http\Resources\GroupResource
     * @apiResourceModel App\Models\Group
     */
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

    /**
     * edit group request
     *
     * you can get groups by ID
     * 
     * @urlParam id integer required The ID of the Group. Example: 1
     * @apiResource App\Http\Resources\GroupResource
     * @apiResourceModel App\Models\Group
    */
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


    /**
     * Update Group Request
     * 
     * you can update any group by ID
     *
     * @bodyParam groupname string required The updated name of users group. Example: testgroup
     * @urlParam id integer required The ID of the group. Example: 1
     * @response 200 {
     *   "status": true,
     *   "message": "Group Updated Succeesfully"
     * }
     */
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


        /**
     * Delete Group Request
     * 
     * you can Delete any groups by ID
     *
     * @urlParam id integer required The ID of the group. Example: 1
     * @response 200 {
     *   "status": true,
     *   "message": "Group Deleted Succeesfully"
     * }
     */
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
