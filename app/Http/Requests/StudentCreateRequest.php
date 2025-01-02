<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use YajTech\Crud\Helper\RequestValidationHelper;
use App\Models\Student;

class StudentCreateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
         $model = new Student();

         return RequestValidationHelper::makeRules($model, 'create');
    }
}
