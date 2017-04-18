<?php

namespace App\Modules\Articles\Models\Repository;

use DB;

class Article
{

    private $tableName = 'articles';

    public function list()
    {
        return DB::table($this->tableName)->pluck('title', 'id');
    }
}