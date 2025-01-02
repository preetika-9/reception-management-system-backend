<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use YajTech\Crud\Traits\CrudModel;
use YajTech\Crud\Traits\CrudEventListener;
use Illuminate\Database\Eloquent\SoftDeletes;

class  Permission extends Model
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
        'name' => 'guard_name',
        'label' => 'Guard Name',
        'align' => 'left',
        'type' => 'text',
        'sortable' => false,
     ],
    ];
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
            'name' => 'guard_name',
            'label' => 'Guard Name',
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
// [
//         'name' => 'name',
//         'column' => 'name',
//         'type' => 'text',
//         'relation' => 'where',
//         'dense' => true,
//         'label' => 'Name',
//         'wrapper' => [
//             'class' => 'col-3',
//             ],
//         ],
    ]
;
    }

    protected $fillable = [ 'name', 'guard_name', 'created_by', 'updated_by', 'extra' ];

    protected $casts = [
        'extra' => 'array'
    ];
}
