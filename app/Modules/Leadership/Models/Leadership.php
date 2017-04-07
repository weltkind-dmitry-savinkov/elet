<?php

namespace App\Modules\Leadership\Models;

use Kyslik\ColumnSortable\Sortable;

use App\Models\Model;
use App\Models\Image;

class Leadership extends Model
{
    use Sortable, Image;

    protected $table = 'leadership';
}