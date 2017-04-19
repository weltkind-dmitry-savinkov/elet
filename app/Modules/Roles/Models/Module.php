<?php

namespace App\Modules\Roles\Models;

use App\Models\Model;

class Module extends Model
{

    public $timestamps = false;

    protected $fillable = ['name', 'slug'];

    public function permissions()
    {
        return $this
            ->belongsToMany(Permission::class);
    }

    public function operations()
    {
        return $this
            ->hasManyThrough(Operation::class, Permission::class, 'module_id', 'id');
    }
}