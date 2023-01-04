<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth/login');
    }

    public function authenticating(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth::user()->role_as == 1) {
                return redirect('/admin-dashboard');
            } else {
                return redirect('/');
            }
        }

        Session::flash('status', 'failed');
        Session::flash('message', 'Login Failed!');

        return redirect('/login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function register()
    {
        return view('auth/register');
    }

    public function postRegister(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        if ($user) {
            Session::flash('status', 'add_success');
            Session::flash('message', 'New Data Recorded, Login Now!');
        }

        return redirect('/register');
    }

    public function add_user()
    {
        $user = User::all();
        return view('admin_views/add_user', ['userList' => $user]);
    }

    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->save();

        if ($user) {
            Session::flash('status', 'add_success');
            Session::flash('message', 'User Data Added!');
        }

        return redirect('/add-user');
    }

    public function update_user(Request $request, $id)
    {
        // dd($request->all());
        $user = User::findOrfail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;

        $user->save();

        if ($user) {
            Session::flash('status', 'update_success');
            Session::flash('message', 'User Data Updated!');
        }

        return redirect('/add-user');
    }

    public function destroy($id)
    {
        $user = User::findOrfail($id);
        $user->delete();

        if ($user) {
            Session::flash('status', 'delete_success');
            Session::flash('message', 'User Data Deleted!');
        }

        return redirect('/add-user');
    }
}
