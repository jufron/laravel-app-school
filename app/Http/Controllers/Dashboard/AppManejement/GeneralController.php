<?php

namespace App\Http\Controllers\Dashboard\AppManejement;

use App\Http\Controllers\Controller;
use App\Models\Sekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class GeneralController extends Controller
{
    public function index (): View
    {
        $sekolah = Sekolah::query()->latest()->get()->first();
        return view('dashboard.aplikasiManajement.general.general', compact('sekolah'));
    }

    public function edit ()
    {
        $sekolah = Sekolah::query()->latest()->get()->first();
        return view('dashboard.aplikasiManajement.general.edit', compact('sekolah'));
    }

    public function update ()
    {

    }

    public function upload (Request $request)
    {
        // * CKEDITOR upload file
        if ($request->hasFile('upload')) {

            $file_upload = $request->file('upload');

            $file_upload->storeAs(
                'media',
                $file_upload->getClientOriginalName(),
                'public'
            );

            $fullUrlImage = null;
            if (Storage::exists($file_upload)) {
                $fullUrlImage = asset('storage/' . $file_upload);
            }

            return response()->json([
                'url'   => $fullUrlImage,
                'path'  => $file_upload
            ]);
        }

        return response()->json([
            'error' => [
                'message'   => 'Upload Failed'
            ]
        ]);
    }

    public function destroy (Request $request)
    {
        $imagePath = $request->input('image_path');

        if (Storage::exists($imagePath)) {
            Storage::delete($imagePath);
            return response()->json([
                'message' => 'Image deleted successfully.'
            ], 200);
        }

        return response()->json([
            'message' => 'Image not found.'
        ], 404);
    }
}
