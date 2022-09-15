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

class UsersController extends Controller
{
    public function showall()
    {

        try {

            $all_user = User::all();
            return UserResource::collection($all_user);
            
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
        $roles = Role::all();
        $groups = Group::all();


        return [
            'roles' => RoleResource::collection($roles),
            'group' => GroupResource::collection($groups)
        ];
    }

    public function store(UserRequest $userRequest)
    {
        try {

            $validated_user = $userRequest->validated();

            $user = User::create($validated_user);

            return new UserResource($user);
            
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

            $user = User::find($id);
            return new UserResource($user);
            
        } catch (\Throwable $th) {
            return response()->json([
                'status'=>false,
                'message'=>$th->getMessage(),
            ],500);
        }
    }

    public function update(UserRequest $userRequest,$id)
    {
        try {
            
            $validated_user = $userRequest->validated();

            $updated_user = DB::table('users')
              ->where('id', $id)
              ->update($validated_user);

              if ($updated_user) 
              {
                return response()->json([
                    'status'=>true,
                    'message'=>'User Updated Succeesfully',
                ],200);
              }
              else
              {
                return response()->json([
                    'status'=>true,
                    'message'=>'User Not Updated',
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
            
            $deleted = DB::table('users')->where('id', '=', $id)->delete();

            if ($deleted)
            {
                return response()->json([
                    'status'=>true,
                    'message'=>'User Deleted Succeesfully',
                ],200);    
            }
            else 
            {
                return response()->json([
                    'status'=>true,
                    'message'=>'User Not Deleted',
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
