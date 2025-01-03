<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use YajTech\Crud\Traits\CrudModel;
use YajTech\Crud\Traits\CrudEventListener;
use Illuminate\Database\Eloquent\SoftDeletes;

class  Student extends Model
{
    use HasFactory, CrudModel, SoftDeletes, CrudEventListener;

    public static function getColumns(): array
    {
       return [
        [
        'name' => 'sn',
        'label' => 'SN',
        'align' => 'left',
        'type' => 'text',
        'sortable' => false,
        ],
        [
        'name' => 'name',
        'label' => 'Name',
        'align' => 'left',
        'type' => 'text',
        'sortable' => false,
        ],
        [
         'name' => 'phone',
         'label' => 'Phone',
         'align' => 'left',
         'type' => 'text',
         'sortable' => false,
         ],
        [
         'name' => 'address',
         'label' => 'Address',
         'align' => 'left',
         'type' => 'text',
         'sortable' => false,
         ],
         [
         'name' => 'email',
         'label' => 'Email',
         'align' => 'left',
         'type' => 'text',
         'sortable' => false,
         ],
         [
          'name' => 'category',
          'label' => 'Category',
          'type' => 'relation',
          'relation_map' => ['category', 'name'],
          'simple_resource_field' => ['id', 'name'],
          'align' => 'left',
          'sortable' => false,
          ],
          [
            'name' => 'course',
            'label' => 'Course',
            'type' => 'relation',
            'relation_map' => ['course', 'name'],
            'simple_resource_field' => ['id', 'name'],
            'align' => 'left',
            'sortable' => false,
            ],
            [
             'name' => 'remarks',
             'label' => 'Remarks',
             'align' => 'left',
             'type' => 'text',
             'sortable' => false,
             ],

    ]
;
    }

    public static function getFields(): array
    {
       return [
        [
        'name' => 'name',
        'label' => 'Name',
        'type' => 'text',
        'wrapper' => [
            'class' => 'col-6',
            ],
        'rules' => [
            'required' => true,
            ],
        ],
        [
        'name' => 'phone',
        'label' => 'Phone',
        'type' => 'text',
        'wrapper' => [
            'class' => 'col-6',
                ],
        'rules' => [
            'required' => true,
            ],
        ],
        [
        'name' => 'address',
        'label' => 'Address',
        'type' => 'text',
        'wrapper' => [
            'class' => 'col-6',
            ],
        'rules' => [
            'required' => true,
            ],
        ],
        [
        'name' => 'email',
        'label' => 'Email',
        'type' => 'text',
        'wrapper' => [
            'class' => 'col-6',
            ],
        'rules' => [
            'required' => true,
            ],
        ],
        [
        'name' => 'category_id',
        'type' => 'select_from_model',
        'label' => 'Category',
        'attribute' => 'name',
        'columns' => ['id', 'name'],
        'model' => "App\Models\Category",
        'wrapper' => [
            'class' => 'col-6',
            ],
        'rules' => [
            'required' => true,
            ],
        ],
        [
        'name' => 'course_id',
        'type' => 'select_from_model',
        'label' => 'Course',
        'attribute' => 'name',
        'columns' => ['id', 'name'],
        'model' => "App\Models\Course",
        'wrapper' => [
            'class' => 'col-6',
            ],
        'rules' => [
            'required' => true,
            ],
        ],
        [
            'name' => 'remarks',
            'label' => 'Remarks',
            'type' => 'text',
            'wrapper' => [
                'class' => 'col-6',
                ],
            'rules' => [
                'required' => true,
                ],
            ],
    ];
    }

    public static function getTableMetas(): array
    {
       return [
             'add_button' => true,
             'refresh_button' => true,
            //  'export_button' => true,
             'filter_button' => true,
       ];
    }

    public static function getFilters(): array
    {
       return [
    [
        'name' => 'category_id',
        'column' => 'category_id',
        'type' => 'text',
        'relation' => 'where',
        'dense' => true,
        'label' => 'Category',
        'wrapper' => [
            'class' => 'col-3',
            ],
        ],
    ];
    }

    protected $fillable = [ 'name', 'phone', 'email', 'address','category_id', 'course_id', 'remarks' ,'extra' ];

    protected $casts = [
        'extra' => 'array'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
