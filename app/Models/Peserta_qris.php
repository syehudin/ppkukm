<?php

namespace App\Models;

use CodeIgniter\Model;

class Peserta_qris extends Model
{
    protected $table = 'peserta_qris';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['nik', 'pemilik_qris', 'nama_bisnis', 'verified'];
    
    public function getData_peserta(){
        $builder = $this->db->table('peserta_qris');
        $builder->join('profil_peserta', 'profil_peserta.nik = peserta_qris.nik');
        // $builder->orderBy('peserta_qris.id', 'ASC');
        return $builder->limit(100)->get()->getResultArray();
    }
    
    public function sumData_verified(){
        $builder = $this->db->table('peserta_qris');
        $builder->where('verified', 1);
        return $builder->countAllResults();
    }
}