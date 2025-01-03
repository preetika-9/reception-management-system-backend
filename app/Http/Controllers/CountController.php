<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class CountController extends Controller
{
    public function getCounts()
    {
        $tables = DB::select('SHOW TABLES');

        $counts = [];

        foreach ($tables as $table) {
            $tableName = array_values((array)$table)[0];

            try {
                $counts[$tableName] = DB::table($tableName)->count();
            } catch (\Exception $e) {
                $counts[$tableName] = 'Error: ' . $e->getMessage();
            }
        }

        return response()->json($counts);
    }
}
