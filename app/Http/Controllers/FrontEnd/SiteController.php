<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use mysql_xdevapi\Session;

class SiteController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function singlePost()
    {
        return view('frontend.single-post');
    }

    //auth
    public function showRegisterFrom()
    {
        return view('frontend.auth.register');
    }

    public function registration(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4|max:20',
            'email' => 'required | email',
            'photo' => 'required|image',
            'password' => 'required|min:4|max:20| confirmed'
        ]);
        
        $photo = $request->file('photo');
        if ($photo->isValid()) {
            $file_name = date('dmyhis.') . $photo->getClientOriginalExtension();
            $photo->move('profile-photo', $file_name);
        }

        return redirect()->back()->with(['message' => 'User Registration Success', 'type' => 'success']);
    }

    // login

    public function loginFrom()
    {
        return view('frontend.auth.login');
    }

    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required | email',
            'password' => 'required'
        ]);


    }


}
