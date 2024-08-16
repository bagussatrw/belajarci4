<?php

namespace App\Controllers;

class Views extends BaseController
{
    public function index(): string
    {
        return view('cubacuba');
    }
    public function datamhs(): string{
        return view('pages/DataMahasiswa',['title' => 'Data Mahasiswa']);
    }
    public function ttgmhs(): string{
        return view('pages/TentangMahasiswa',['title' => 'Tentang Mahasiswa']);
    }
    public function infkampus(): string{
        return view('pages/InfoKampus',['title' => 'Info Kampus']);
    }
}         
