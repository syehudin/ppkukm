<?php

namespace App\Models;

use CodeIgniter\Model;

class Ref_event extends Model
{
    protected $table = 'ref_event';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_event', 'jadwal_pelaksanaan_mulai', 'jadwal_pelaksanaan_selesai'];
    
    public function getData_event(){
        $builder = $this->db->table('ref_event');
        return $builder->limit(100)->get()->getResultArray();
    }
}