<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use App\Models\SocialMedia;
use App\Models\Telepon;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PagesController extends Controller
{
    public function home() : View
    {
        $testimonial = Testimonial::query()->latest()->get();
        return view('pages.home', compact('testimonial'));
    }

    public function sejarah () : View
    {
        return view('pages.sejarah');
    }

    public function visiMisi () : View
    {
        return view('pages.visi-misi');
    }

    public function programKeahlian () : View
    {
        return view('pages.program-keahlian');
    }

    public function galeri () : View
    {
        return view('pages.galeri', [
            'galery'    => Galery::query()->latest()->get()
        ]);
    }

    public function ppdb () : View
    {
        return view('pages.ppdb');
    }

    public function blog () : View
    {
        return view('pages.blog');
    }

    public function blogDetail (): View
    {
        return view('pages.blog-detail');
    }

    public function kontak () : View
    {
        $socialMedia = SocialMedia::query()->with('platfrom')->latest()->get();
        $telepon = Telepon::query()->latest()->get();
        return view('pages.kontak', compact('socialMedia', 'telepon'));
    }

    public function daftar_guru () : View
    {
        return view('pages.daftar-guru');
    }
}
