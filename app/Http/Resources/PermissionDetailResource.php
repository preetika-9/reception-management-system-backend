<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PermissionDetailResource extends JsonResource
{
    public function toArray($request)
    {
        return [
             'id' => $this->id,
            'name' => $this->name,
            'created_by' => $this->created_by,
            'extra' => $this->extra,
            'edit_btn' => true,
            'delete_btn' => true
        ];
    }
}
