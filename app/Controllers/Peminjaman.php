<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\BukuModel;
use App\Models\AnggotaModel;
use App\Models\PeminjamanModel;

class Peminjaman extends ResourceController
{
    function __construct()
    {
        $this->buku = new BukuModel();
        $this->anggota = new AnggotaModel();
        $this->peminjaman = new PeminjamanModel();
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $data['peminjaman'] = $this->peminjaman->getAll();
        return view('peminjaman/index', $data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        $data['buku'] = $this->buku->findAll();
        $data['anggota'] = $this->anggota->findAll();
        $data['buku'] = $this->buku->findAll();
        return view('peminjaman/new', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $data = $this->request->getPost();
        $this->peminjaman->insert($data);
        return redirect()->to(site_url('peminjaman'))->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $peminjaman = $this->peminjaman->find($id);
        if (is_object($peminjaman)) {
            $data['peminjaman'] = $peminjaman;
            $data['anggota'] = $this->anggota->findAll();
            $data['buku'] = $this->buku->findAll();
            return view('peminjaman/edit', $data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $data = $this->request->getPost();
        $this->peminjaman->update($id, $data);
        return redirect()->to(site_url('peminjaman'))->with('success', 'Data Berhasil DiUpdate');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->peminjaman->delete($id);
        return redirect()->to(site_url('peminjaman'))->with('success', 'Data Berhasil DiHapus');
    }
}
