<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Student;
use YajTech\Crud\Helper\ResourceHelper;

class StudentListResource extends JsonResource
{
    public function toArray($request)
    {
        $model = new Student();

        return ResourceHelper::makeResource($model, $this);
    }
}
