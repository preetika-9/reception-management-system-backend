<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use YajTech\Crud\Traits\CrudModel;
use YajTech\Crud\Traits\CrudEventListener;
use Illuminate\Database\Eloquent\SoftDeletes;

class  Course extends Model
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
        'name' => 'category',
        'label' => 'Category',
        'type' => 'relation',
        'relation_map' => ['category', 'name'],
        'simple_resource_field' => ['id', 'name'],
        'align' => 'left',
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
        'name' => 'category_id',
        'type' => 'select_from_model',
        'label' => ' Category',
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
    ]
;
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
        // [
        // 'name' => 'name',
        // 'column' => 'name',
        // 'type' => 'text',
        // 'relation' => 'where',
        // 'dense' => true,
        // 'label' => 'Name',
        // 'wrapper' => [
        //     'class' => 'col-3',
        //     ],
        // ],
        // [
        // 'name' => ' category_id',
        // 'column' => ' category_id',
        // 'type' => 'text',
        // 'relation' => 'where',
        // 'dense' => true,
        // 'label' => ' Category',
        // 'wrapper' => [
        //     'class' => 'col-3',
        //     ],
        // ],
    ];
    }

    protected $fillable = [ 'name', ' category_id', 'updated_by', 'extra' ];

    protected $casts = [
        'extra' => 'array'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
