<?php

namespace App\Models;

use CodeIgniter\Model;

class Transaksi_qris extends Model
{
    protected $table = 'transaksi_qris';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['tanggal_transaksi', 'nama_produk', 'jumlah_transaksi', 'nik'];

    public function getData_januari(){
        $builder = $this->db->table('transaksi_qris');
        $builder->join('peserta_qris', 'peserta_qris.nik = transaksi_qris.nik');
        $builder->where('MONTH(transaksi_qris.tanggal_transaksi)', "01");
        $builder->where('YEAR(transaksi_qris.tanggal_transaksi)', "2023");
        return $builder->limit(100)->get()->getResultArray();
    }

    public function getData_februari(){
        $builder = $this->db->table('transaksi_qris');
        $builder->join('peserta_qris', 'peserta_qris.nik = transaksi_qris.nik');
        $builder->where('MONTH(transaksi_qris.tanggal_transaksi)', "02");
        $builder->where('YEAR(transaksi_qris.tanggal_transaksi)', "2023");
        return $builder->limit(100)->get()->getResultArray();
    }

    public function getData_maret(){
        $builder = $this->db->table('transaksi_qris');
        $builder->join('peserta_qris', 'peserta_qris.nik = transaksi_qris.nik');
        $builder->where('MONTH(transaksi_qris.tanggal_transaksi)', "03");
        $builder->where('YEAR(transaksi_qris.tanggal_transaksi)', "2023");
        return $builder->limit(100)->get()->getResultArray();
    }

    public function getData_april(){
        $builder = $this->db->table('transaksi_qris');
        $builder->join('peserta_qris', 'peserta_qris.nik = transaksi_qris.nik');
        $builder->where('MONTH(transaksi_qris.tanggal_transaksi)', "04");
        $builder->where('YEAR(transaksi_qris.tanggal_transaksi)', "2023");
        return $builder->limit(100)->get()->getResultArray();
    }

    public function getData_mei(){
        $builder = $this->db->table('transaksi_qris');
        $builder->join('peserta_qris', 'peserta_qris.nik = transaksi_qris.nik');
        $builder->where('MONTH(transaksi_qris.tanggal_transaksi)', "05");
        $builder->where('YEAR(transaksi_qris.tanggal_transaksi)', "2023");
        return $builder->limit(100)->get()->getResultArray();
    }

    public function getData_juni(){
        $builder = $this->db->table('transaksi_qris');
        $builder->join('peserta_qris', 'peserta_qris.nik = transaksi_qris.nik');
        $builder->where('MONTH(transaksi_qris.tanggal_transaksi)', "06");
        $builder->where('YEAR(transaksi_qris.tanggal_transaksi)', "2023");
        return $builder->limit(100)->get()->getResultArray();
    }

    public function getData_juli(){
        $builder = $this->db->table('transaksi_qris');
        $builder->join('peserta_qris', 'peserta_qris.nik = transaksi_qris.nik');
        $builder->where('MONTH(transaksi_qris.tanggal_transaksi)', "07");
        $builder->where('YEAR(transaksi_qris.tanggal_transaksi)', "2023");
        return $builder->limit(100)->get()->getResultArray();
    }

    public function getData_agustus(){
        $builder = $this->db->table('transaksi_qris');
        $builder->join('peserta_qris', 'peserta_qris.nik = transaksi_qris.nik');
        $builder->where('MONTH(transaksi_qris.tanggal_transaksi)', "08");
        $builder->where('YEAR(transaksi_qris.tanggal_transaksi)', "2023");
        return $builder->limit(100)->get()->getResultArray();
    }

    public function getData_september(){
        $builder = $this->db->table('transaksi_qris');
        $builder->join('peserta_qris', 'peserta_qris.nik = transaksi_qris.nik');
        $builder->where('MONTH(transaksi_qris.tanggal_transaksi)', "09");
        $builder->where('YEAR(transaksi_qris.tanggal_transaksi)', "2023");
        return $builder->limit(100)->get()->getResultArray();
    }

    public function getData_oktober(){
        $builder = $this->db->table('transaksi_qris');
        $builder->join('peserta_qris', 'peserta_qris.nik = transaksi_qris.nik');
        $builder->where('MONTH(transaksi_qris.tanggal_transaksi)', "10");
        $builder->where('YEAR(transaksi_qris.tanggal_transaksi)', "2023");
        return $builder->limit(100)->get()->getResultArray();
    }

    public function getData_november(){
        $builder = $this->db->table('transaksi_qris');
        $builder->join('peserta_qris', 'peserta_qris.nik = transaksi_qris.nik');
        $builder->where('MONTH(transaksi_qris.tanggal_transaksi)', "11");
        $builder->where('YEAR(transaksi_qris.tanggal_transaksi)', "2023");
        return $builder->limit(100)->get()->getResultArray();
    }

    public function getData_desember(){
        $builder = $this->db->table('transaksi_qris');
        $builder->join('peserta_qris', 'peserta_qris.nik = transaksi_qris.nik');
        $builder->where('MONTH(transaksi_qris.tanggal_transaksi)', "12");
        $builder->where('YEAR(transaksi_qris.tanggal_transaksi)', "2023");
        return $builder->limit(100)->get()->getResultArray();
    }
}