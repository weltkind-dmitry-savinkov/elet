<?php

namespace App\Modules\Rates\Models;

use Kyslik\ColumnSortable\Sortable;

use App\Models\Model;

class Currency extends Model
{
    use Sortable;

    public $timestamps = false;

    protected $table = 'currencies';

    public function rates()
    {
        return $this->hasMany(Rate::class);
    }
}