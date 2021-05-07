<?php

namespace App\Http\Controllers;

use App\Models\Admins;
use App\Models\Blog;
use App\Models\Vacancies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function login()
    {
        return view('admins.admin_login')->with('content_type', 'main');
    }

    function check(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'passwd' => 'required'
        ]);

        $admin = Admins::where('name', '=', $request->name)->first();

        if (!$admin) {
            return back()->with('fail', 'No such prefers');
        } else {
            $a = Hash::make($admin->passwd);
            if (Hash::check($request->passwd, $a)) {
                $request->session()->put('LoggedAdmin', $admin->name);
                $request->session()->put('LoggedAdminID', $admin->id);
                return redirect('adminpanel/addvac');
            } else {
                return back()->with('fail', 'Incorrect password');
            }
        }


    }

    function logout()
    {
        if (session()->has('LoggedAdmin')) {
            session()->pull('LoggedAdmin');
            session()->pull('LoggedAdminID');
            return redirect('/adminpanel');
        }
    }


    function settings()
    {
        $data = ['LoggedAdmin' => Admins::where('name', '=', session('LoggedAdmin'))->first()];
        return view('admins.admin_settings', $data);
    }


    function showvac()
    {
        $vacancies = Vacancies::all();
        return view('admins.admin_vacancies', compact('vacancies'));
    }

    function vaccheck(Request $request1)
    {
        $request1->validate([
            'vacancy' => 'required|max: 80',
            'info' => 'required|max: 255',
            'contact' => 'required|max: 255'
        ]);

        $vac = new Vacancies();
        $vac->vacancy = $request1->vacancy;
        $vac->info = $request1->info;
        $vac->contact = $request1->contact;


        $v = Vacancies::where('vacancy', '=', $request1->vacancy)->first();

        if (!$v) {

            $save = $vac->save();
            if ($save) {
                return back();
            } else {
                return back()->with('fail', 'Проверьте правильность заполнения полей');
            }

        } else {
            return back()->with('fail', 'This vacancy is already here');
        }


        return view('admins.admin_vacancies', compact('vacancies'));

    }

    function vacedit($id)
    {
        $pers = new Vacancies();
        return view('admins.admin_vacancyedit', ['data' => $pers->find($id)]);

    }

    function vaceditsubmit(Request $request, $id)
    {
        $pers = Vacancies::find($id);
        $pers->vacancy = $request->vacancy;
        $pers->info = $request->info;
        $pers->contact = $request->contact;

        $pers->save();

        return redirect()->route('adminpanel.vacancies');

    }

    function vacdelete($id)
    {
        Vacancies::find($id)->delete();
        return redirect()->route('adminpanel.vacancies');

    }





    /**
    Blog

     */
    function showblog()
    {
        $blog = Blog::all();
        return view('admins.admin_blog', compact('blog'));
    }

    function blogcheck(Request $request1)
    {
        $request1->validate([
            'title' => 'required|max: 80',
            'info' => 'required|max: 255',
            'author' => 'required|max: 255',
            'contenter' => 'required'
        ]);

        $vac = new Blog();
        $vac->title = $request1->title;
        $vac->info = $request1->info;
        $vac->author = $request1->author;
        $vac->contenter = $request1->input('contenter');


        $v = Blog::where('title', '=', $request1->title)->first();

        if (!$v) {

            $save = $vac->save();
            if ($save) {
                return back();
            } else {
                return back()->with('fail', 'Проверьте правильность заполнения полей');
            }

        } else {
            return back()->with('fail', 'This post is already here');
        }


        return view('admins.admin_blog', compact('blog'));

    }

    function blogedit($id)
    {
        $pers = new Blog();
        return view('admins.admin_blogedit', ['data' => $pers->find($id)]);

    }

    function blogeditsubmit(Request $request, $id)
    {
        $pers = Blog::find($id);
        $pers->title = $request->title;
        $pers->info = $request->info;
        $pers->author = $request->author;
        $pers->contenter = $request->contenter;
        $pers->save();

        return redirect()->route('adminpanel.blog');

    }

    function blogdelete($id)
    {
        Blog::find($id)->delete();
        return redirect()->route('adminpanel.blog');

    }

}
