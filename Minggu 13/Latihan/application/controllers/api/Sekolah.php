<?php
use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . '/libraries/Format.php';

class Sekolah extends REST_Controller
{
    public function index_get()
    {
        $id = $this->get('id');
        if ($id === null) {
            $siswa = $this->Sekolah_modelAPI->getSiswa();
        } else {
            $siswa = $this->Sekolah_modelAPI->getSiswa($id);
        }

        if ($siswa) {
            $this->response([
                'status' => true,
                'data' => $siswa
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete()
    {
        $id = $this->delete('id');

        if ($id === null) {
            $this->response([
                'status' => false,
                'message' => 'provide an id'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->Sekolah_modelAPI->deleteSiswa($id) > 0) {
                //ok
                $this->response([
                    'status' => true,
                    'id' => $id,
                    'message' => 'deleted'
                ], REST_Controller::HTTP_NO_CONTENT);
            } else {
                //id not found
                $this->response([
                    'status' => false,
                    'message' => 'id not found'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    public function index_post()
    {
        $data = [
            'nama' => $this->post('nama'),
            'alamat' => $this->post('alamat'),
            'logo' => $this->post('logo')
        ];

        if ($this->Sekolah_modelAPI->createSiswa($data) > 0) {
            $this->response([
                'status' => true,
                'message' => 'new siswa has been created'
            ], REST_Controller::HTTP_CREATED);
        } else {
            $this->response([
                'status' => false,
                'message' => 'failed to created new data'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put()
    {
        $id = $this->put('id');
        $data = [
            'nama' => $this->put('nama'),
            'alamat' => $this->put('alamat'),
            'logo' => $this->put('logo')
        ];

        if ($this->Sekolah_modelAPI->updateSiswa($data, $id) > 0) {
            $this->response([
                'status' => true,
                'message' => 'new siswa has been updated'
            ], REST_Controller::HTTP_NO_CONTENT);
        } else {
            $this->response([
                'status' => false,
                'message' => 'failed to update data'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
