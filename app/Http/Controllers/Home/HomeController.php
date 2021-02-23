<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ArmadaModel;
use App\Models\KategoriModel;
use App\Models\InfoModel;

class HomeController extends Controller
{
    public function index(){
        $title = 'Sultan ADN Travel';
        $header = 'Sultan ADN Travel';
        $armada = ArmadaModel::where('is_delete', 0)->with('kategori')->get();
        $kategori = KategoriModel::where('is_delete', 0)->offset(0)->limit(6)->get();
        $info = InfoModel::where('is_delete', 0)->get();
        // dd($kategori);
        return view('layout.app', compact('title', 'header', 'armada', 'kategori', 'info'));
    }
}
