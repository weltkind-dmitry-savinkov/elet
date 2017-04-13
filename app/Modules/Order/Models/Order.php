<?php

namespace App\Modules\Order\Models;

use Kyslik\ColumnSortable\Sortable;

use App\Models\Model;

class Order extends Model
{
    use Sortable;

    public function status()
    {
        return $this->hasOne(Status::class, 'id', 'status_id');
    }
}