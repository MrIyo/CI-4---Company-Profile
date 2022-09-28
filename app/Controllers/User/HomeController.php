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
        return view('pages/users/program_event', $data);
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
