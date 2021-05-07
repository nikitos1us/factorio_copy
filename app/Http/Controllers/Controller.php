<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Vacancies;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function home()
    {
        return view('home');
    }
    public function blog()
    {
        $blogs = Blog::all();
        return view('blog', compact('blogs'));
    }
    public function blogpost($id)
    {
        $pers = new Blog();
        return view('blog_post', ['data' => $pers->find($id)]);

    }

    public function imprint()
    {
        return view('imprint');
    }
    public function presskit()
    {
        return view('presskit');
    }
    public function vacancies()
    {
        $vacancies = Vacancies::all();
        return view('vacancies', compact('vacancies'));
    }
}
