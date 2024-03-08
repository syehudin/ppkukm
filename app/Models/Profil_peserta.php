<?php

namespace App\Models;

use CodeIgniter\Model;

class Profil_peserta extends Model
{
    protected $table = 'profil_peserta';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['nik', 'nama', 'jenis_kelamin', 'active'];
}