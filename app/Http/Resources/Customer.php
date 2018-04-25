<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Customer extends JsonResource
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
        'Firtname' => $this->Fname,
        'Surname' => $this->Sname,
        'Email' => $this->email,
        'Country' => $this->Country,
    ];
 
    }
}
