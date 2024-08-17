<?php

namespace App\Controllers;

use App\Models\PegawaiModel;
use App\Models\SkillcertificationModel;

class Home extends BaseController
{

    protected $Pegawaimodel;
    protected $Certificationmodel;

    public function __construct()
    {
        $this->Pegawaimodel = new PegawaiModel();
        $this->Certificationmodel = new SkillcertificationModel();
    }

    public function index(): string
    {

        // $jumlahpegawai = $this->Pegawaimodel->selectCount('pegawai_id')->first();
        $jumlahpegawai = $this->Pegawaimodel->countAllResults();
        // $jumlahsertif = $this->Certificationmodel->selectCount('id')->where('active', '1')->first();
        $jumlahsertif = $this->Certificationmodel->countAllResults();

        if ($jumlahpegawai == '0') {
            $ppegawaiberlisensi = '0';
        } else {
            $ppegawaiberlisensi = '0';
        }

        $data = [
            'halaman' => 'ini halaman',
            'jmlpegawai' => $jumlahpegawai,
            'jmlcertif' => $jumlahsertif,
            'plisensi' => $ppegawaiberlisensi
        ];
        return view('dashboard/statistik', $data);
    }
}
