<?php

namespace App\Http\Controllers;

use YajTech\Crud\Controllers\CrudController;
use App\Models\Course;
use App\Http\Resources\CourseListResource;
use App\Http\Resources\CourseDetailResource;
use App\Http\Requests\CourseCreateRequest;
use App\Http\Requests\CourseUpdateRequest;

class CourseController extends CrudController
{
    public array $withAll = [
      'category'
    ];

    public function __construct()
    {
        parent::__construct(
            Course::class,
            CourseDetailResource::class,
            CourseListResource::class,
            CourseCreateRequest::class,
            CourseUpdateRequest::class
        );
    }
}
