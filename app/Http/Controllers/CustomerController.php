<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Events\AcreditedOrder;

class CustomerController extends Controller
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
        return view('customer');
    }


    public function test(){
        
        event(new AcreditedOrder("Mascalo shushetumare"));

        //return "Enviados";
    }
}