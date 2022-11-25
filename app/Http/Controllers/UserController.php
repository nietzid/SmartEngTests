<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        return view('pages/User/profile');
    }

    public function upgrade_account()
    {
        return view('pages/UserPages/upgrade_account');
    }

    public function demo()
    {
        return view('pages/UserPages/demo');
    }

    public function demo_input_passage()
    {
        return view('pages/UserPages/demo_input_passage');
    }

    public function demo_preview_passage()
    {
        return view('pages/UserPages/demo_preview_passage');
    }

    public function demo_generate_result()
    {
        return view('pages/UserPages/demo_generate_result');
    }

    public function user()
    {
        return view('pages/UserPages/user');
    }

    public function account_information()
    {
        return view('pages/UserPages/account_information');
    }

    public function plan_option()
    {
        return view('pages/UserPages/plan_option');
    }

    public function payment()
    {
        return view('pages/UserPages/payment');
    }

    public function success_upgrade()
    {
        return view('pages/UserPages/success_upgrade');
    }
}
