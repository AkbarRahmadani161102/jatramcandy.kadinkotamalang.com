<?php

namespace App\Controllers\user;

use App\Controllers\user\BaseController;
use App\Models\ProfilModel;
use App\Models\SliderModel;
use App\Models\ProdukModel;
use App\Models\MetaModel;

class Aboutctrl extends BaseController
{
    private $ProfilModel;
    private $SliderModel;
    private $ProdukModel;
    private $MetaModel;

    public function __construct()
    {
        $this->ProfilModel = new ProfilModel();
        $this->SliderModel = new SliderModel();
        $this->ProdukModel = new ProdukModel();
        $this->MetaModel = new MetaModel();

    }

    public function index()
    {
        $data = [
            'profil' => $this->ProfilModel->findAll(),
            'tbslider' => $this->SliderModel->findAll(),
            'tbproduk' => $this->ProdukModel->findAll(),
        ];
        
        $data['Title'] = $data['profil'][0]->title_website;

        helper('text');

        if (session('lang') === 'in') {
            $teks = strip_tags($data['profil'][0]->deskripsi_perusahaan_in);
        } else {
            $teks = strip_tags($data['profil'][0]->deskripsi_perusahaan_en);
        }

        $meta = $this->MetaModel->where('nama_halaman', 'About')->first(); // Ambil meta untuk halaman Home
        $data['meta'] = $meta; // Tambahkan meta ke data
        $data['canonicalUrl'] = base_url('user/about'); // Tambahkan canonical URL

        return view('user/about/index', $data);
    }
}
