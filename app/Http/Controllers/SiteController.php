<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreSiteRequest;

class SiteController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store(StoreSiteRequest $request)
    {
        return $request->validated();
    }

}
