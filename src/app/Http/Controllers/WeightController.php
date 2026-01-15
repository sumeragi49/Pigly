<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Weight_logs;
use Illuminate\Http\Request;
use App\Http\Requests\Weight_logsRequest;

class WeightController extends Controller
{
    public function index(Request $request)
    {
        $users = User::with('weight_logs')->find(1);

        $weight_logs = $users->weight_logs()->get();

        $weight_logs = Weight_logs::simplePaginate(8);

        return view('admin', compact('users','weight_logs'));
    }

    public function create()
    {
        return view('add_data');
    }

    public function show($weight_logs_id)
    {
        $weight_logs = Weight_logs::find($weight_logs_id);

        return view('detail', compact('weight_logs'));
    }

    public function update(Weight_logsRequest $request)
    {
        $weight_logs = $request->only(['date', 'weight', 'calories', 'exercise_time', 'exercise_content']);

        Weight_logs::find($request->weight_logsId)->update($weight_logs);

        dd($weight_logs);

        return view('weight_logs', compact('weight_logs'));
    }

    public function destroy(Request $request)
    {
        Weight_logs::find($request->weight_logsId)->delete();

        return redirect('/weight_logs');
    }

}
