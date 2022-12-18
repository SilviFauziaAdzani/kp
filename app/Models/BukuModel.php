<?php

namespace App\Models;

use CodeIgniter\Model;

class BukuModel extends Model
{
    // protected $DBGroup          = 'default';
    protected $table            = 'buku';
    protected $primaryKey       = 'id_buku';
    // protected $useAutoIncrement = true;
    // protected $insertID         = 0;
    protected $returnType       = 'object';
    // protected $useSoftDeletes   = true;
    // protected $protectFields    = true;
    protected $allowedFields    = ['judul_buku', 'pengarang', 'penerbit', 'tahun_terbit', 'kode_buku', 'id_kategori', 'jumlah_buku', 'jumlah_tersedia'];

    function getAll()
    {
        $builder = $this->db->table('buku');
        $builder = $this->join('kategori', 'kategori.id_kategori = buku.id_kategori');
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
