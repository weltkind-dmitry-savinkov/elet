<?php

namespace App\Modules\Branches\Models;

use Kyslik\ColumnSortable\Sortable;

use App\Models\Model;

class Branche extends Model
{
    use Sortable;

    public function save(array $options = [])
    {
        $this->work_days = implode(',', $this->work_days);
        parent::save($options);
    }

    public function region()
    {
        return $this->hasOne(Region::class, 'id', 'region_id');
    }
}