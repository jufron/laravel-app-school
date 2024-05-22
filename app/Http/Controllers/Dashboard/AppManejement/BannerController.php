<?php

namespace App\Http\Controllers\Dashboard\AppManejement;

use App\Models\Banner;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index (): View
    {
        return view('dashboard.aplikasiManajement.banner.banner', [
            'banner'    => Banner::query()->get()
        ]);
    }

    public function store (BannerRequest $request)
    {
        $imagePath = $request->file('image')->store('banner', 'public');
        Banner::create([
            'image' => $imagePath
        ]);
        return redirect()->route('dashboard.banner')->with('success', 'Berhasil Tersimpan');
    }

    public function download ($id)
    {
        $banner = Banner::findOrFail($id);
        if (Storage::disk('public')->exists($banner->image)) {
            return Storage::disk('public')->download($banner->image);
        }
        return abort(404);
    }

    public function destroy ($id)
    {
        $banner = Banner::findOrFail($id);
        if (Storage::disk('public')->exists($banner->image)) {
            Storage::disk('public')->delete($banner->image);
        }
        $banner->delete();
        return Redirect()->route('dashboard.banner')->with('success', 'berhasil Terhapus');
    }
}
