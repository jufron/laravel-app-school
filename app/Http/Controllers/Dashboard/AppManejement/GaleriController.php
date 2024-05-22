<?php

namespace App\Http\Controllers\Dashboard\AppManejement;

use App\Models\Galery;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\GaleryRequest;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function index (): View
    {
        $galery = Galery::orderBy('id', 'desc')->cursorPaginate(10);
        return view('dashboard.aplikasiManajement.galeri.galeri',
            compact('galery')
        );
    }

    public function store (GaleryRequest $request)
    {
        $imagePath = $request->file('image')->store('galery', 'public');
        Galery::create([
            'image'         => $imagePath,
            'description'   => $request->input('description')
        ]);
        return redirect()->route('dashboard.galeri')->with('success', 'Berhasil Tersimpan');
    }

    public function download (Galery $galery)
    {
        if (Storage::disk('public')->exists($galery->image)) {
            return Storage::disk('public')->download($galery->image);
        }
        return abort(404);
    }

    public function destroy (Galery $galery)
    {
        if (Storage::disk('public')->exists($galery->image)) {
            Storage::disk('public')->delete($galery->image);
        }
        $galery->delete();
        return Redirect()->route('dashboard.galeri')->with('success', 'berhasil Terhapus');
    }
}
