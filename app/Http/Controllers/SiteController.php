<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SiteController extends Controller
{
    public function index()
    {
        // $allActiveUsers = User::all()->where('active', true);
        $allActiveUsers = User::where('active', true)->all();
    }
}
