<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class driver extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'username'=>$this->username,
            'balance'=>$this->balance,
            'phone_number' => $this->phone_number,
            'password'=>$this->password,
            'image'=>$this->image,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
        ];
    }
}
