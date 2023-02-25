<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class DashboardController extends Controller
{
    public function Dashboard(User $user)
    {
        $user = Auth::user();

        return view('dashboard', ['user' => $user]);
    }

    public function moneyFormat($amount)
    {
        return '$' . number_format($amount, 2);
    }
}
