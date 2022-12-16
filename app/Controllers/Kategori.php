<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
// use App\Models\KategoriModel;

class Kategori extends ResourceController
{
    protected $modelName = 'App\Models\KategoriModel';
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $data['kategori'] = $this->model->findAll();
        return view('kategori/index', $data);
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
        return view('kategori/new');
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
        return redirect()->to(site_url('kategori'))->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $kategori = $this->model->where('id_kategori', $id)->first();
        if (is_object($kategori)) {
            $data['kategori'] = $kategori;
            return view('kategori/edit', $data);
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
        return redirect()->to(site_url('kategori'))->with('success', 'Data Berhasil DiUpdate');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->model->delete($id);
        // cek apakah data berhasil dihapus
        if ($this->db->affected_rows() > 0) {
            // data berhasil dihapus
            // redirect ke halaman list data
            return redirect()->to(site_url('kategori'))->with('success', 'Data Berhasil DiHapus');
        } else {
            // data tidak dapat dihapus
            // set flashdata pesan error
            $this->session->setFlashdata('message', 'Data Terpakai, tidak dapat dihapus');
            // redirect ke halaman list data
            return redirect()->to(site_url('kategori'));
        }
    }
}
