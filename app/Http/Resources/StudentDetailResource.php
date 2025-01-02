<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentDetailResource extends JsonResource
{
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
