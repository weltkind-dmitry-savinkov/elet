<?php

namespace App\Modules\Branches\Models;

use Kyslik\ColumnSortable\Sortable;

use App\Models\Model;

class Region extends Model
{
    use Sortable;

    public $timestamps = false;
}