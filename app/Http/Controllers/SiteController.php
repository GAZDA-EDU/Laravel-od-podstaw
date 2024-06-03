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

    public function request(Request $request)
    {
        $name = $request->input('name', 'Marcin');

        return $name;
    }

    public function response()
    {
        return response('response ok', 200)
        ->withHeaders([
            'Laravel-App-version' => app()->version(),
            'Accept-Language' => 'pl-pl'
        ])
        ->cookie('Laravel-App-version', app()->version(), 5);

    }

    public function responseRedirect()
    {

    }
}
