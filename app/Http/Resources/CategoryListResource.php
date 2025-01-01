<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Category;
use YajTech\Crud\Helper\ResourceHelper;

class CategoryListResource extends JsonResource
{
    public function toArray($request)
    {
        $model = new Category();

        return ResourceHelper::makeResource($model, $this);
    }
}
