<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Permission;
use YajTech\Crud\Helper\ResourceHelper;

class PermissionListResource extends JsonResource
{
    public function toArray($request)
    {
        $model = new Permission();

        return ResourceHelper::makeResource($model, $this);
    }
}
