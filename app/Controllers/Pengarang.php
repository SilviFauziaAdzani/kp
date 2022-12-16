<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
// use App\Models\PengarangModel;

class Pengarang extends ResourceController
{
    protected $modelName = 'App\Models\PengarangModel';
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $data['pengarang'] = $this->model->findAll();
        return view('pengarang/index', $data);
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

    /**pengarangk
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        return view('pengarang/new');
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
        return redirect()->to(site_url('pengarang'))->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $pengarang = $this->model->where('id_pengarang', $id)->first();
        if (is_object($pengarang)) {
            $data['pengarang'] = $pengarang;
            return view('pengarang/edit', $data);
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
        return redirect()->to(site_url('pengarang'))->with('success', 'Data Berhasil DiUpdate');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->model->delete($id);
        return redirect()->to(site_url('pengarang'))->with('success', 'Data Berhasil DiHapus');
    }
}
