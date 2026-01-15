<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Weight_logs;
use Illuminate\Http\Request;
use App\Http\Requests\Weight_targetRequest;

class Weight_goalController extends Controller
{
    public function index()
    {
        return view('target_weight');
    }

    public function store(Weight_targetRequest $request)
    {
        $weight_goal = $request->only(['user_id', 'target_weight']);

        return redirect('/weight_logs');
    }
}
