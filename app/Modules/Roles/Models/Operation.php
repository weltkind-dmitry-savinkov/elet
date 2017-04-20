<?php

namespace App\Modules\Roles\Models;

use App\Models\Model;

class Operation extends Model
{
    public function permissions()
    {
        return $this->belongsToMany(Permission::class)->withPivot('allowed');
    }
}