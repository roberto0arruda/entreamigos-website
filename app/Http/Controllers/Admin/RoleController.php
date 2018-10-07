<?php

namespace App\Http\Controllers\Admin\Configuration;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    //
    public function index()
    {
        $roles = $this->role->all();

        return view('admin.roles.index', compact('roles'));
    }
}
