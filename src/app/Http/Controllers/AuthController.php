<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Weight_logs;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        $users = User::with('weight_logs','weight_logs')->find(1);

        $weight_logs = $users->weight_logs()->get();

        $weight_logs = Weight_logs::simplePaginate(8);

        return view('admin', compact('users','weight_logs'));
    }
}
