<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ServiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            'id'=>(string)$this->id,
            'servicename'=>$this->servicename,
            'title'=>$this->title,
            'username'=>$this->username,
            'email'=>$this->email,
            'password'=>$this->password,
            'group_id'=>new GroupResource($this->group),
        ];
    }
}
