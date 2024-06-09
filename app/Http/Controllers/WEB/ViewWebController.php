<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\MataKuliah;
use App\Models\Pertanyaan;
use App\Models\Product;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;

class ViewWebController extends Controller
{
    public function loginIndex()
    {
        return view('auth.login');
    }

    public function registerIndex()
    {
        return view('auth.register');
    }
    public function berandaView()
    {

        return view('beranda.index',);
    }

    public function pertanyaanIndex()
    {
        $data_pertanyaan = Pertanyaan::get();
        return view('pertanyaan.index', compact("data_pertanyaan"));
    }
    public function pertanyaanCreateIndex()
    {

        return view('pertanyaan.create',);
    }
    public function pertanyaanEditIndex($id)
    {
        $data_pertanyaan = Pertanyaan::where("id", $id)->get();
        return view('pertanyaan.edit', compact("data_pertanyaan"));
    }
    public function mataKuliahIndex()
    {
        $data_mata_kuliah = MataKuliah::get();
        return view('mataKuliah.index', compact("data_mata_kuliah"));
    }
    public function mataKuliahCreateIndex()
    {

        return view('mataKuliah.create',);
    }
    public function mataKuliahEditIndex($id)
    {
        $data_mata_kuliah = MataKuliah::where("id", $id)->get();
        return view('mataKuliah.edit', compact("data_mata_kuliah"));
    }
    public function mahasiswaIndex()
    {
        $data_mahasiswa = Mahasiswa::get();
        return view('mahasiswa.index', compact("data_mahasiswa"));
    }
    public function mahasiswaCreateIndex()
    {

        return view('mahasiswa.create',);
    }
    public function mahasiswaEditIndex($id)
    {
        $data_mahasiswa = Mahasiswa::where("id", $id)->get();
        return view('mahasiswa.edit', compact("data_mahasiswa"));
    }
    public function dosenIndex()
    {
        $data_dosen = Dosen::get();
        return view('dosen.index', compact("data_dosen"));
    }
    public function dosenCreateIndex()
    {

        return view('dosen.create',);
    }
    public function dosenEditIndex($id)
    {
        $data_dosen = Dosen::where("id", $id)->get();
        return view('dosen.edit', compact("data_dosen"));
    }
}
