<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index()
    {
        $title = 'Home';
        return view('site.home.index', compact('title') );
    }

    public function about()
    {
        $title = 'Aboult ONG';
        return view('site.about.index', compact('title') );
    }

    public function contact()
    {
        $title = 'Contact me';
        return view('site.contact.index', compact('title') );
    }

    public function projects()
    {
        return view('site.projects.index');
    }

    public function form()
    {
        return view('site.form.index');
    }
}
