<?php

namespace App\Http\Controllers;

use YajTech\Crud\Controllers\CrudController;
use App\Models\Category;
use App\Http\Resources\CategoryListResource;
use App\Http\Resources\CategoryDetailResource;
use App\Http\Requests\CategoryCreateRequest;
use App\Http\Requests\CategoryUpdateRequest;

class CategoryController extends CrudController
{
    public function __construct()
    {
        parent::__construct(
            Category::class,
            CategoryDetailResource::class,
            CategoryListResource::class,
            CategoryCreateRequest::class,
            CategoryUpdateRequest::class
        );
    }
}
