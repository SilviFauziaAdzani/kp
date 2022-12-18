<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\BukuModel;
use App\Models\PengunjungModel;

class Pengunjung extends ResourceController
{
    function __construct()
    {
        $this->buku = new BukuModel();
        $this->pengunjung = new PengunjungModel();
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $data['pengunjung'] = $this->pengunjung->findAll();
        return view('pengunjung/index', $data);
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
        return view('pengunjung/new', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $data = $this->request->getPost();

        $this->model->insert($data);
        return redirect()->to(site_url('pengunjung'))->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $pengunjung = $this->model->where('id_pengunjung', $id)->first();
        if (is_object($pengunjung)) {
            $data['pengunjung'] = $pengunjung;
            $data['buku'] = $this->buku->findAll();
            return view('pengunjung/edit', $data);
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
        $this->model->update($id, $data);
        return redirect()->to(site_url('pengunjung'))->with('success', 'Data Berhasil DiUpdate');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->model->delete($id);
        return redirect()->to(site_url('pengunjung'))->with('success', 'Data Berhasil DiHapus');
    }
}
