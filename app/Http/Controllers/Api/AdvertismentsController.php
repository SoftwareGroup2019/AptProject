<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdvertismentRequest;
use App\Http\Resources\AdvertismentResource;
use App\Models\Advertisment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

/**
 * @group Advertisments API
 * 
 * Managing all advertisments API Resource
 */

class AdvertismentsController extends Controller
{
    /**
     * fetch all advertisments
     * 
     * @return \Illuminate\Http\Response
    */
    public function showall()
    {

        try {

            $all = Advertisment::all();
            return AdvertismentResource::collection($all);
            
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'status'=>false,
                'message'=>$th->getMessage(),
            ],500);
        }

       
    }

    /**
     * store advertisment request
     * 
     * @bodyParam image string required The image of ads. Example: image/JNcvyK6xv3TtqmtrT1OTtxmokuPmRiged9yrflEA.jpg
     * @bodyParam video string required The video of ads. Example: https://www.youtube.com
     * @bodyParam period string required The days number of avalabilty of ads. Example: 3Days
     * @bodyParam provider string required The name of providing place of ads. Example: Talabat
     * @bodyParam group_id string required The group of apartment ex: Lalav. Example: 1
     * @apiResource App\Http\Resources\AdvertismentResource
     * @apiResourceModel App\Models\Advertisment
    */
    public function store(Request $request)
    {
        try {

            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
    
            $image_path = $request->file('image')->store('image', 'public');
            
            
            $ads = Advertisment::create([
                'image' => $image_path,
                'video' => $request->video,
                'period'=> $request->period,
                'provider'=> $request->provider,
                'group_id'=> $request->group_id
            ]);

            return new AdvertismentResource($ads);
            
        } catch (\Throwable $th) {
            return response()->json([
                'status'=>false,
                'message'=>$th->getMessage(),
            ],500);
        }
    }


    /**
     * Delete Advertisment Request
     * 
     * you can Delete any advertismets by ID
     *
     * @urlParam id integer required The ID of the ads. Example: 1
     * @response 200 {
     *   "status": true,
     *   "message": "Advertisment Deleted Succeesfully"
     * }
    */
    public function delete($id)
    {
        try {

            $current_image = Advertisment::find($id)->image;

            if(Storage::exists('public/'.$current_image))
            {
                Storage::delete('public/'.$current_image);    
            }
            
            $deleted = DB::table('advertisments')->where('id', '=', $id)->delete();

            if ($deleted)
            {
                return response()->json([
                    'status'=>true,
                    'message'=>'Advertisment Deleted Succeesfully',
                ],200);    
            }
            else 
            {
                return response()->json([
                    'status'=>true,
                    'message'=>'Advertisment Not Deleted',
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
