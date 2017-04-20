<?php

namespace App\Modules\Roles\Models;

use App\Models\Model;

class Permission extends Model
{

    public $timestamps = false;

    protected $table = 'permissions';

    protected $fillable = ['module_id', 'operation_id'];

    public function role()
    {
        return $this->belongsMany(Role::class)->withPivot('allowed');
    }

    public function module()
    {
        return $this->hasOne(Module::class, 'id', 'module_id');
    }

    public function operation()
    {
        return $this->hasOne(Operation::class, 'id', 'operation_id');
    }
}