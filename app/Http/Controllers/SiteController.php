<?php

namespace App\Http\Controllers;

use App\Contracts\PaymentGateway;
use Illuminate\Http\Request;
// use GuzzleHttp\Psr7\Request;

class SiteController extends Controller
{
    public function bind(PaymentGateway $paymentGateway)
    {
        $paymentGateway->pay();
    }

    public function user(Request $request, string $slug){
        $action = $request->get('action', 'profile');
        return "Hello! $slug, your action is $action";
    }
}
