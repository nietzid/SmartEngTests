<?php

namespace App\Http\Controllers;

use App\Models\UpgradeAccount;
use Illuminate\Http\Request;

class UpgradeAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages/UserPages/upgrade_account');
    }
}
