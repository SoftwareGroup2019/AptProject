<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdvertismentRequest;
use App\Http\Resources\AdvertismentResource;
use App\Models\Advertisment;
use Illuminate\Http\Request;


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
     * @bodyParam image string required The image of ads. Example: 
     * @bodyParam video string required The video of ads. Example: 123123
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
    
            $image = time().'.'.$request->image->extension();
    
            
            
            $ads = Advertisment::create([
                'image' => $request->image->move(public_path('uploads'), $image),
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

}
