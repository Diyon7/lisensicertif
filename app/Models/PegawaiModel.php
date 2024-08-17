<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\HTTP\RequestInterface;
use DateTime;

class PegawaiModel extends Model
{
    protected $table          = 'pegawai';
    protected $primaryKey     = 'pegawai_id';
    protected $useSoftDeletes = true;
    protected $allowedFields  = ['pegawai_id', 'pegawai_pin', 'pegawai_nip', 'pegawai_nama', 'pegawai_alias', 'pegawai_pwd', 'pegawai_rfid', 'pegawai_privilege', 'pegawai_telp', 'pegawai_status', 'tempat_lahir', 'tgl_lahir', 'pembagian1_id', 'pembagian2_id', 'pembagian3_id', 'tgl_mulai_kerja', 'tgl_resign', 'gender', 'tgl_masuk_pertama', 'photo_path', 'tmp_img', 'nama_bank', 'nama_rek', 'no_rek', 'new_pegawai_id', 'golongan', 'grup', 'grup_t', 'grup_jam_kerja', 'resign', 'created_at', 'updated_at', 'deleted_at', 'user_created', 'user_updated', 'user_deleted'];
    protected $useTimestamps   = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $afterInsert    = ['Logdata'];
    protected $afterUpdate    = ['Logdata'];
    protected $afterFind      = ['Logdata'];
    protected $afterDelete    = ['Logdata'];

    protected $db;
    protected $request;
    protected $dt;

    function __construct(RequestInterface $request = null)
    {
        parent::__construct();
        $this->db = db_connect();
        $this->request = $request;
        $this->dt = $this->db->table('skill_log');
    }

    protected function Logdata(array $data)
    {
    }
}
