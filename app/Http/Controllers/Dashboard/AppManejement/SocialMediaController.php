<?php

namespace App\Http\Controllers\Dashboard\AppManejement;

use App\Http\Controllers\Controller;
use App\Http\Requests\SocialMediaRequest;
use App\Models\Platfrom;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SocialMediaController extends Controller
{
    public function index (): View
    {
        $socialMedia = SocialMedia::query()->pluck('platfrom_id')->toArray();
        $existingPlatforms = Platfrom::pluck('platfrom_name', 'id');
        $platforms = $existingPlatforms->diffKeys(array_flip($socialMedia));
        $allSocialMedia = SocialMedia::query()->latest()->get();
        return view('dashboard.aplikasiManajement.socialMedia.social-media',
            compact('platforms', 'allSocialMedia')
        );
    }

    public function store (SocialMediaRequest $request)
    {
        SocialMedia::create($request->all());
        return redirect()->route('dashboard.social-media')->with('success', 'Berhasil Tersimpan');
    }

    public function destroy (SocialMedia $socialMedia)
    {
        $socialMedia->delete();
        return redirect()->route('dashboard.social-media')->with('success', 'berhasil Terhapus');
    }
}
