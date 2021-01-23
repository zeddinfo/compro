<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AboutModel;

class AboutController extends Controller
{
    // public function __construct()
    // {
    //     $this->AboutModel = new AboutModel();
    // }

    public function c_about()
    {
        // $data = [
        //     'about' => $this->AboutModel->allData(),
        // ];
        return view('about/v_about');
    }
}
