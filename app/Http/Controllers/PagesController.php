<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'The Home';
        // return view('pages.index', compact('title')); one of two ways or a few ways? to achieve the same thing.
        return view('pages.index')->with('title', $title);
    }
    public function about()
    {
        $title2 = "About Us";
        return view('pages.about')->with('title', $title2);
    }
    public function users()
    {
        $data = array(
            'title' => 'Users Page',
            'names' => ['John', 'David', 'Holly', 'Steve', 'Daniel', 'Marcus', 'Nathan', 'Jenna']
        );
        return view('pages.users')->with($data);
    }
}
