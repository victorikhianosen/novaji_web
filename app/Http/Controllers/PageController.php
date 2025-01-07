<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('pages.about');
    }
    public function ussd()
    {
        return view('pages.ussd');
    }
    public function sms()
    {
        return view('pages.sms');
    }

    public function payment()
    {
        return view('pages.payment');
    }

    public function icomply()
    {
        return view('pages.icomply');
    }
    public function mobile()
    {
        return view('pages.mobile');
    }

    public function webapp()
    {
        return view('pages.webapp');
    }
    public function product()
    {
        return view('pages.product');
    }
}

