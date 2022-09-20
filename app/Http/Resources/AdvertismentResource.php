<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AdvertismentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => (string)$this->id,
            'image' => $this->image,
            'video' => $this->video,
            'period' => $this->period,
            'provider' => $this->provider,
            'group' => new GroupResource($this->group_id)
        ];
    }
}
