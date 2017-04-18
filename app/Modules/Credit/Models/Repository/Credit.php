<?php

namespace App\Modules\Credit\Models\Repository;

use DB;

class Credit
{

    private $tableName = 'credits';

    public function list()
    {
        return DB::table($this->tableName)->pluck('title', 'id');
    }
}