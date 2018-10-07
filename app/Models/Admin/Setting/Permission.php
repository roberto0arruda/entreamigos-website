<?php

namespace App\Models\Admin\Setting;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public function roles()
    {
        return $this->belongsToMany(\App\Models\Admin\Setting\Role::class);
    }
}
