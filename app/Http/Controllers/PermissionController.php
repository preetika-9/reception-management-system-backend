<?php

namespace App\Http\Controllers;

use YajTech\Crud\Controllers\CrudController;
use App\Models\Permission;
use App\Http\Resources\PermissionListResource;
use App\Http\Resources\PermissionDetailResource;
use App\Http\Requests\PermissionCreateRequest;
use App\Http\Requests\PermissionUpdateRequest;

class PermissionController extends CrudController
{
    public function __construct()
    {
        parent::__construct(
            Permission::class,
            PermissionDetailResource::class,
            PermissionListResource::class,
            PermissionCreateRequest::class,
            PermissionUpdateRequest::class
        );
    }
}
