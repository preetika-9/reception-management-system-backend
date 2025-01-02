<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Course;
use YajTech\Crud\Helper\ResourceHelper;

class CourseListResource extends JsonResource
{
    public function toArray($request)
    {
        $model = new Course();

        return ResourceHelper::makeResource($model, $this);
    }
}
