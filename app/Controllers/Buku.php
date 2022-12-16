<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\BukuModel;
use App\Models\KategoriModel;
use App\Models\PengarangModel;

class Buku extends ResourceController
{
    function __construct()
    {
        $this->buku = new BukuModel();
        $this->kategori = new KategoriModel();
        $this->pengarang = new PengarangModel();
    }
    /**
     * Present a view of resource objects
     *
     * @return mixed
     */
    public function index()
    {
        $data['buku'] = $this->buku->getAll();
        return view('buku/index', $data);
    }

    /**
     * Present a view to present a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Present a view to present a new single resource object
     *
     * @return mixed
     */
    public function new()
    {
        $data['kategori'] = $this->kategori->findAll();
        $data['pengarang'] = $this->pengarang->findAll();
        return view('buku/new', $data);
    }

    /**
     * Process the creation/insertion of a new resource object.
     * This should be a POST.
     *
     * @return mixed
     */
    public function create()
    {
        $data = $this->request->getPost();
        $this->buku->insert($data);
        return redirect()->to(site_url('buku'))->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Present a view to edit the properties of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $buku = $this->buku->find($id);
        if (is_object($buku)) {
            $data['buku'] = $buku;
            $data['kategori'] = $this->kategori->findAll();
            $data['pengarang'] = $this->pengarang->findAll();
            return view('buku/edit', $data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    /**
     * Process the updating, full or partial, of a specific resource object.
     * This should be a POST.
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $data = $this->request->getPost();
        $this->buku->update($id, $data);
        return redirect()->to(site_url('buku'))->with('success', 'Data Berhasil DiUpdate');
    }

    /**
     * Present a view to confirm the deletion of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function remove($id = null)
    {
        //
    }

    /**
     * Process the deletion of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->buku->delete($id);
        return redirect()->to(site_url('buku'))->with('success', 'Data Berhasil DiHapus');
    }
    public function trash()
    {
        $data['buku'] = $this->model->onlyDeleted()->findAll();
        return view('buku/trash', $data);
    }
}
