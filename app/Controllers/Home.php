<?php

namespace App\Controllers;

use \App\Models\Peserta_event;
use \App\Models\Peserta_qris;
use \App\Models\Profil_peserta;
use \App\Models\Ref_event;
use \App\Models\Transaksi_qris;

class Home extends BaseController
{

    public function __construct(){
        $this->Peserta_event = new Peserta_event();
        $this->Peserta_qris = new Peserta_qris();
        $this->Profil_peserta = new Profil_peserta();
        $this->Ref_event = new Ref_event();
        $this->Transaksi_qris = new Transaksi_qris();
    }

    protected $Peserta_event;
    protected $Peserta_qris;
    protected $Profil_peserta;
    protected $Ref_event;
    protected $Transaksi_qris;

    public function index()
    {
        $database = new Peserta_qris();
        $data['total_verified'] = $database->sumData_verified();

        $database2 = new Peserta_event();
        $data['laki'] = $database2->sumData_laki();
        $data['perempuan'] = $database2->sumData_perempuan();
        return view('dashboard/index', $data);
    }

    public function data_peserta()
    {
        $database = new Peserta_qris();
        $data['datas'] = $database->getData_peserta();
        return view('dashboard/data_peserta', $data);
    }

    public function data_transaksi()
    {
        $database = new Ref_event();
        $data['datas'] = $database->getData_event();
        return view('dashboard/data_transaksi', $data);
    }

    public function januari()
    {
        $database = new Transaksi_qris();
        $data['datas'] = $database->getData_januari();
        $data['bulan'] = "Januari";
        return view('dashboard/data_bulanan', $data);
    }

    public function februari()
    {
        $database = new Transaksi_qris();
        $data['datas'] = $database->getData_februari();
        $data['bulan'] = "Februari";
        return view('dashboard/data_bulanan', $data);
    }

    public function maret()
    {
        $database = new Transaksi_qris();
        $data['datas'] = $database->getData_maret();
        $data['bulan'] = "Maret";
        return view('dashboard/data_bulanan', $data);
    }

    public function april()
    {
        $database = new Transaksi_qris();
        $data['datas'] = $database->getData_april();
        $data['bulan'] = "April";
        return view('dashboard/data_bulanan', $data);
    }

    public function mei()
    {
        $database = new Transaksi_qris();
        $data['datas'] = $database->getData_mei();
        $data['bulan'] = "Mei";
        return view('dashboard/data_bulanan', $data);
    }

    public function juni()
    {
        $database = new Transaksi_qris();
        $data['datas'] = $database->getData_juni();
        $data['bulan'] = "Juni";
        return view('dashboard/data_bulanan', $data);
    }

    public function juli()
    {
        $database = new Transaksi_qris();
        $data['datas'] = $database->getData_juli();
        $data['bulan'] = "Juli";
        return view('dashboard/data_bulanan', $data);
    }

    public function agustus()
    {
        $database = new Transaksi_qris();
        $data['datas'] = $database->getData_agustus();
        $data['bulan'] = "Agustus";
        return view('dashboard/data_bulanan', $data);
    }

    public function september()
    {
        $database = new Transaksi_qris();
        $data['datas'] = $database->getData_september();
        $data['bulan'] = "September";
        return view('dashboard/data_bulanan', $data);
    }

    public function oktober()
    {
        $database = new Transaksi_qris();
        $data['datas'] = $database->getData_oktober();
        $data['bulan'] = "Oktober";
        return view('dashboard/data_bulanan', $data);
    }

    public function november()
    {
        $database = new Transaksi_qris();
        $data['datas'] = $database->getData_november();
        $data['bulan'] = "November";
        return view('dashboard/data_bulanan', $data);
    }

    public function desember()
    {
        $database = new Transaksi_qris();
        $data['datas'] = $database->getData_desember();
        $data['bulan'] = "Desember";
        return view('dashboard/data_bulanan', $data);
    }
}
