<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function pay(){
        return view('stripe.pay');
    }


    public function create(){
         return "stripe verifed";
    }
}
