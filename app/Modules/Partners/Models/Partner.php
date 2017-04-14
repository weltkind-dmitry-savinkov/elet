<?php

namespace App\Modules\Partners\Models;

use Kyslik\ColumnSortable\Sortable;

use App\Models\Model;
use App\Models\Image;

class Partner extends Model
{
    use Sortable, Image;
}