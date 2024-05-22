<?php

namespace App\Http\Controllers\Dashboard\AppManejement;

use App\Http\Controllers\Controller;
use App\Http\Requests\TestimonialRequest;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class TestimoniController extends Controller
{
    public function index (): View
    {
        $testimoni = Testimonial::query()->latest()->get();
        return view('dashboard.aplikasiManajement.testimoni.testimoni',
            compact('testimoni')
        );
    }

    public function store (TestimonialRequest $request)
    {
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('testimoni', 'public');
        }

        Testimonial::create([
            'image'         => $imagePath,
            'name'          => $request->input('name'),
            'message'       => $request->input('message')
        ]);
        return redirect()->route('dashboard.testimoni')->with('success', 'Berhasil Tersimpan');
    }

    public function edit (Testimonial $testimonial) : View
    {
        return view('dashboard.aplikasiManajement.testimoni.edit', compact('testimonial'));
    }

    public function update (TestimonialRequest $request, Testimonial $testimonial)
    {
        $dataUpdate = [
            'name'      => $request->input('name'),
            'message'   => $request->input('message'),
        ];
        // check image file optional
        if ($request->hasFile('image')) {
            // chack image form storage, database and delete
            if (Storage::disk('public')->exists($testimonial->image)) {
                Storage::disk('public')->delete($testimonial->image);
            }

            $fileImagePath = $request->file('image')->store('testimoni', 'public');
        
            // Add the new image path to the update data
            $dataUpdate['image'] = $fileImagePath;
        }
        $testimonial->update($dataUpdate);

        return redirect()->route('dashboard.testimoni')->with('success', 'Berhasil Diperbaharui');
    }

    public function get (Testimonial $testimonial)
    {
        $fullUrlImage = null;
        if ($testimonial->image) {
            $fullUrlImage = asset('storage/' . $testimonial->image);
        }

        return response()->json([
          'status'      => 200,
          'message'     => 'success',
          'data'        => [
                'id'            => $testimonial->id,
                'name'          => $testimonial->name,
                'message'       => $testimonial->message,
                'image'         => $fullUrlImage,
                'created_at'    => $testimonial->created_at,
                'updated_at'    => $testimonial->updated_at
            ]
        ]);
    }

    public function destroy (Testimonial $testimonial)
    {
        if (Storage::disk('public')->exists($testimonial->image)) {
            Storage::disk('public')->delete($testimonial->image);
        }
        $testimonial->delete();
        return Redirect()->route('dashboard.testimoni')->with('success', 'berhasil Terhapus');
    }
}
