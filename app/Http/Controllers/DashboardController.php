<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(request $request)
    {
        $user = $request->user();
        return view("dashboard", compact("user"));
    }
}
