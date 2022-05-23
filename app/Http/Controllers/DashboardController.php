<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keluhan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;


class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.dashboard', [
            'keluhans' => auth()->user()->is_admin == 0 ? Keluhan::where('user_id', auth()->user()->id)->get() : Keluhan::all()
        ]);
    }
    public function adminDashboard()
    {
        return view('admin.dashboard', [
            'keluhans' => Keluhan::get(),
            'users' => User::get()
        ]);
    }
}
