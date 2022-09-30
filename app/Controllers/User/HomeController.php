<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        return view('pages/users/welcome_message');
    }

    public function home()
    {
        $data = [
            'title' => 'Home | FHCI'
        ];
        return view('pages/users/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About | FHCI'
        ];
        return view('pages/users/about', $data);
    }

    public function program_event()
    {
        $data = [
            'title' => 'Program & Event | FHCI'
        ];
        return view('pages/users/program_event/program_event', $data);
    }

    public function magang_mahasiswa()
    {
        $data = [
            'title' => 'Magang Mahasiswa Bersertifikat | FHCI'
        ];
        return view('pages/users/program_event/magang_mahasiswa', $data);
    }

    public function bumn_people()
    {
        $data = [
            'title' => 'BUMN People Analytics & Event | FHCI'
        ];
        return view('pages/users/program_event/bumn_people', $data);
    }
    
    public function talent_internship()
    {
        $data = [
            'title' => 'Talent Internship & Advancement | FHCI'
        ];
        return view('pages/users/program_event/talent_internship', $data);
    }
    
    public function sharing_best()
    {
        $data = [
            'title' => 'Sharing Best Practice BUMN | FHCI'
        ];
        return view('pages/users/program_event/sharing_best', $data);
    }

    public function lembaga_sertifikasi()
    {
        $data = [
            'title' => 'Lembaga Sertifikasi Profesional | FHCI'
        ];
        return view('pages/users/program_event/lembaga_sertifikasi', $data);
    }
    
    

    // public function media_center()
    // {
    //     $data = [
    //         'title' => 'Media Center | FHCI'
    //     ];
    //     return view('pages/users/media_center', $data);
    // }

    public function siaran_pers()
    {
        $data = [
            'title' => 'SIARAN PERS | FHCI'
        ];
        return view('pages/users/siaran_pers', $data);
    }

    public function artikel()
    {
        $data = [
            'title' => 'ARTIKEL | FHCI'
        ];
        return view('pages/users/artikel', $data);
    }

    public function e_magazine()
    {
        $data = [
            'title' => 'E-Magazine | FHCI'
        ];
        return view('pages/users/e_magazine', $data);
    }

    public function galeri_fhci()
    {
        $data = [
            'title' => 'GALERI | FHCI'
        ];
        return view('pages/users/galeri_fhci', $data);
    }

    public function kontak()
    {
        $data = [
            'title' => 'Kontak Kami | FHCI'
        ];
        return view('pages/users/kontak', $data);
    }
}
