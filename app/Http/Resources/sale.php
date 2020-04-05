<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class sale extends JsonResource
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
            'client_id'=>$this->client_id,
            'product_id' => $this->product_id,
            'driver_id'=>$this->driver_id,
            'credit_id'=>$this->credit_id,
            'quantity'=>$this->qunatity,
            'total'=>$this->qunatity,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
        ];
    }
}
