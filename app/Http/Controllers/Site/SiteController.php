<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Site\Subscribe;

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

    public function subscribe(Request $request)
    {
        if ($request->input()) {
            $sub = Subscribe::create($request->except('_token'));

            return view('site.subscribe.index');
        } else {
            return view('site.subscribe.index', ['success' => 'obrigado por cadastrar']);
        }
    }
}
