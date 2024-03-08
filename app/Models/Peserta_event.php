<?php

namespace App\Models;

use CodeIgniter\Model;

class Peserta_event extends Model
{
    protected $table = 'peserta_event';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['nik', 'nama', 'jenis_kelamin', 'event_id'];

    public function sumData_laki(){
        $builder = $this->db->table('peserta_event');
        $builder->where('jenis_kelamin', 1);
        return $builder->countAllResults();
    }

    public function sumData_perempuan(){
        $builder = $this->db->table('peserta_event');
        $builder->where('jenis_kelamin', 2);
        return $builder->countAllResults();
    }
}