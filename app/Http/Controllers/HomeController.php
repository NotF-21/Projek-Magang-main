<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function getHome () {
        return view('home');
    }

    public function getHubungi () {
        return view('hubungi');
    }

    public function getTentang() {
        return view('tentang');
    }

    public function getrj() {
        return view('layanan.rj');
    }

    public function getPoli() {
        return view('layanan.poli');
    }

    public function getv() {
        return view('layanan.vaksin');
    }

    public function getf() {
        return view('layanan.farmasi');
    }

    public function getLab() {
        return view('layanan.lab');
    }

    public function getTim() {
        return view('team');
    }
}
