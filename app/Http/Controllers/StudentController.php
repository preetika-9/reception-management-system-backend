<?php

namespace App\Http\Controllers;

use YajTech\Crud\Controllers\CrudController;
use App\Models\Student;
use App\Http\Resources\StudentListResource;
use App\Http\Resources\StudentDetailResource;
use App\Http\Requests\StudentCreateRequest;
use App\Http\Requests\StudentUpdateRequest;

class StudentController extends CrudController
{
    public function __construct()
    {
        parent::__construct(
            Student::class,
            StudentDetailResource::class,
            StudentListResource::class,
            StudentCreateRequest::class,
            StudentUpdateRequest::class
        );
    }
}
