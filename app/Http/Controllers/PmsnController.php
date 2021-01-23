<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AboutModel;

class PmsnController extends Controller
{
    // public function __construct()
    // {
    //     $this->AboutModel = new AboutModel();
    // }

    public function c_pemesanan()
    {
        // $data = [
        //     'about' => $this->AboutModel->allData(),
        // ];
        return view('pemesanan/v_pemesanan');
    }
}
