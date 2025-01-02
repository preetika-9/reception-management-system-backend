<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use YajTech\Crud\Helper\RequestValidationHelper;
use App\Models\Course;

class CourseUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
         $model = new Course();

         return RequestValidationHelper::makeRules($model, 'update');
    }
}
