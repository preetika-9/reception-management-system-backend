<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use YajTech\Crud\Helper\RequestValidationHelper;
use App\Models\Permission;

class PermissionUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
         $model = new Permission();

         return RequestValidationHelper::makeRules($model, 'update');
    }
}
