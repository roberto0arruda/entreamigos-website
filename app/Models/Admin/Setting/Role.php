<?php

namespace App\Models\Admin\Setting;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function permissions()
    {
        return $this->belongsToMany(\App\Models\Admin\Setting\Permission::class);
    }
}
