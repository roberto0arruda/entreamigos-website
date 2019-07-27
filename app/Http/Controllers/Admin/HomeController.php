<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Admin\Permission;
use App\Models\Admin\Role;
use App\User;

use App\Models\Admin\Post;
use Gate;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Post $post)
    {
        // $totalPosts = Post::count();
        $totalUsers = User::count();
        $totalPermissions = Permission::count();
        $totalRoles = \App\Models\Site\Subscribe::count();
        // $posts = $post->where('user_id', auth()->user()->id)->get();

        return view('admin.home.index', compact('totalUsers', 'totalPermissions', 'totalRoles') );
    }
}