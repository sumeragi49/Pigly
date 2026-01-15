<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Weight_logs;
use Illuminate\Http\Request;
use App\Http\Requests\Weight_logsRequest;

class RegisterController extends Controller
{
    public function index()
    {
        return view('add_data');
    }

    public function store(Weight_logsRequest $request)
    {
        $weight_logs = $request->only(['user_id', 'date', 'weight', 'calories', 'exercise_time', 'exercise_content']);

        Weight_logs::create($weight_logs);

        dd($request);

        return view('weight_logs');
    }

}
