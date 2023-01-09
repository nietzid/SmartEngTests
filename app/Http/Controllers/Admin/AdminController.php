<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PaymentRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index()
    {
        return view('pages/AdminPages/dashboard');
    }

    public function user_dashboard()
    {
        $users = User::paginate(10);
        return view('pages/AdminPages/user_dashboard', compact(['users']));
    }

    public function payment_request()
    {
        // $joinData = DB::table('users')->select('users.id', 'users.name', 'users.email', 'payment_requests.upgrade_request', 'payment_requests.created_at')->join('payment_requests', 'payment_requests.user_id', '=', 'users.id')->where(['upgrade_request' => 'request'])->get();
        $joinData = DB::table('users')->select('users.id', 'users.name', 'users.email', 'payment_requests.upgrade_request', 'payment_requests.created_at')->join('payment_requests', 'payment_requests.user_id', '=', 'users.id')->get();
        return view('pages/AdminPages/payment_request', compact(['joinData']));
    }

    public function decline_request($id)
    {
        $request = PaymentRequest::findOrfail($id);
        $request->upgrade_request = 'failed';
        $request->save();

        // if ($request) {
        //     Session::flash('status', 'update_success');
        //     Session::flash('message', 'Data Updated!');
        // }

        return redirect('/payment-request');
    }

    public function accept_request($id)
    {
        $request = PaymentRequest::findOrfail($id);
        $request->upgrade_request = 'success';
        $request->save();

        $user = User::findOrfail($id);
        $user->is_premium = 1;
        $user->generate_counter = 99999999;
        $user->save();

        // if ($request) {
        //     Session::flash('status', 'update_success');
        //     Session::flash('message', 'Data Updated!');
        // }

        return redirect('/payment-request');
    }
}
