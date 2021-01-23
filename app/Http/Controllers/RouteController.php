<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AboutModel;

class RouteController extends Controller
{
    // public function __construct()
    // {
    //     $this->AboutModel = new AboutModel();
    // }

    public function c_route()
    {
        // $data = [
        //     'about' => $this->AboutModel->allData(),
        // ];
        return view('route/v_route');
    }

    public function c_informasi()
    {
        return view('route/v_informasi');
    }
}
