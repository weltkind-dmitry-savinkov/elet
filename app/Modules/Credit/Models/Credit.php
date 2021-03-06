<?php

namespace App\Modules\Credit\Models;

use Kyslik\ColumnSortable\Sortable;

use App\Models\Model;
use App\Models\Image;

class Credit extends Model
{
    use Sortable, Image;

    private $imageField = 'icon';

    public function imageField()
    {
        return $this->imageField;
    }
}