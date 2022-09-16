<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Resources\GroupResource;
use App\Http\Resources\RoleResource;
use App\Http\Resources\UserResource;
use App\Models\Group;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


/**
 * @group Users API
 * 
 * Managing all roles API Resource
 */

class UsersController extends Controller
{

    /**
     * fetch all users
     * 
     * @return \Illuminate\Http\Response
     */
    public function showall()
    {

        try {

            $all_user = User::all();
            return UserResource::collection($all_user);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'status' => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }


    /**
     * Create User Request
     * 
     * you can create any users with attaching role and group
     *
     * 
     * @response 200 {
     *   "roles": [
     *      {
     *      "id": "1",
     *       "rolename": "SuperAdmin"
     *      },
     *     {
     *    "id": "2",
     *   "rolename": "Group"
     *  }
     *],
     *"group": [
     *   {
     *  "id": "1",
     * "groupname": "Lalav"
     *},
     *{
     *"id": "2",
     *"groupname": "Pavilon"
     *}
     *]
     *}
     * 
     */
    public function create()
    {
        $roles = Role::all();
        $groups = Group::all();


        return [
            'roles' => RoleResource::collection($roles),
            'group' => GroupResource::collection($groups)
        ];
    }

    /**
     * store user request
     * 
     * @bodyParam name string required The name of users. Example: ahmed
     * @bodyParam email string required The email of users. Example: ahmed@app.com
     * @bodyParam password string required The password of users. Example: 123123
     * @bodyParam group_id string required The group name of users. Example: 1
     * @bodyParam role_id string required The role of users. Example: 1
     * @apiResource App\Http\Resources\UserResource
     * @apiResourceModel App\Models\User
     */
    public function store(UserRequest $userRequest)
    {
        try {

            $validated_user = $userRequest->validated();

            $user = User::create($validated_user);

            return new UserResource($user);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    /**
     * edit user request
     *
     * you can get user by ID
     * 
     * @urlParam id integer required The ID of the user. Example: 1
     * @apiResource App\Http\Resources\UserResource
     * @apiResourceModel App\Models\User
     */
    public function edit($id)
    {
        try {

            $user = User::find($id);
            return new UserResource($user);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    /**
     * Update User Request
     * 
     * you can update any users by ID
     *
     * @bodyParam name string required The updated name of users. Example: ahmed
     * @bodyParam email string required The updated email of users. Example: ahmed@app.com
     * @bodyParam password string required The updated password of users. Example: 123123
     * @bodyParam group_id string required The updated group name of users. Example: 1
     * @bodyParam role_id string required The updated role of users. Example: 1
     * @urlParam id integer required The ID of the user. Example: 1
     * @response 200 {
     *   "status": true,
     *   "message": "User Updated Succeesfully"
     * }
     */
    public function update(UserRequest $userRequest, $id)
    {
        try {

            $validated_user = $userRequest->validated();

            $updated_user = DB::table('users')
                ->where('id', $id)
                ->update($validated_user);

            if ($updated_user) {
                return response()->json([
                    'status' => true,
                    'message' => 'User Updated Succeesfully',
                ], 200);
            } else {
                return response()->json([
                    'status' => true,
                    'message' => 'User Not Updated',
                ], 401);
            }
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    /**
     * Delete Users Request
     * 
     * you can Delete any users by ID
     *
     * @urlParam id integer required The ID of the user. Example: 1
     * @response 200 {
     *   "status": true,
     *   "message": "User Deleted Succeesfully"
     * }
     */
    public function delete($id)
    {
        try {

            $deleted = DB::table('users')->where('id', '=', $id)->delete();

            if ($deleted) {
                return response()->json([
                    'status' => true,
                    'message' => 'User Deleted Succeesfully',
                ], 200);
            } else {
                return response()->json([
                    'status' => true,
                    'message' => 'User Not Deleted',
                ], 401);
            }
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }
}
