<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PagesController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | WebProgrammingUNPAS',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('pages/home', $data);
    }

    public function about(){
        $data = [
            'title' => 'About Me'
        ];
        return view('pages/about', $data);
    }

    public function contact(){
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Perumahan Lido Permai',
                    'kota' => 'Bogor'
                ],[
                    'tipe' => 'Kantor',
                    'alamat' => 'Jakarta Selatan',
                    'kota'  => 'Jakarta'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
