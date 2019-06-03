<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class SellerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }


    public function vue()
    {
        return view('seller');
    }
}