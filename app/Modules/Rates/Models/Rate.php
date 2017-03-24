<?php

namespace App\Modules\Rates\Models;

use Kyslik\ColumnSortable\Sortable;

use App\Models\Model;

class Rate extends Model
{
    public function currency()
    {
        return $this->hasOne(Currency::class, 'id', 'currency_id');
    }
}