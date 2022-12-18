<?php

namespace App\Models;

use CodeIgniter\Model;

class PeminjamanModel extends Model
{
    // protected $DBGroup          = 'default';
    protected $table            = 'peminjaman';
    protected $primaryKey       = 'id_peminjaman';
    // protected $useAutoIncrement = true;
    // protected $insertID         = 0;
    protected $returnType       = 'object';
    // protected $useSoftDeletes   = false;
    // protected $protectFields    = true;
    protected $allowedFields    = ['id_anggota', 'id_buku', 'pinjaman', 'kembali', 'status'];
    function getAll()
    {
        $builder = $this->db->table('peminjaman');
        $builder = $this->join('anggota', 'anggota.id_anggota = peminjaman.id_anggota');
        $builder = $this->join('buku', 'buku.id_buku = peminjaman.id_buku');
        $query = $builder->get();
        return $query->getResult();
    }
    // Dates
    protected $useTimestamps = true;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // // Callbacks
    // protected $allowCallbacks = true;
    // protected $beforeInsert   = [];
    // protected $afterInsert    = [];
    // protected $beforeUpdate   = [];
    // protected $afterUpdate    = [];
    // protected $beforeFind     = [];
    // protected $afterFind      = [];
    // protected $beforeDelete   = [];
    // protected $afterDelete    = [];
}
