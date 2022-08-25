<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Log;

class LogController extends Controller
{
    //
    public function create () {
        $logs = Log::paginate(10);
        return view('marketing-admin.logs', ['logs' => $logs]);
    }

    public function store (String $action) {
        Log::create([
            'user_email' => Auth::user()->getEmail(),
            'activity' => $action
        ]);
    }
}
