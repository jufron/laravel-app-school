<?php

namespace App\Http\Controllers\Dashboard\AppManejement;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeleponRequest;
use App\Models\Telepon;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TeleponController extends Controller
{
    public function index (): View
    {
        $telepon = Telepon::query()->latest()->get();
        return view('dashboard.aplikasiManajement.telepon.telepon', compact('telepon'));
    }

    public function store (TeleponRequest $request)
    {
        Telepon::create($request->all());
        return redirect()->route('dashboard.telepon')->with('success', 'Berhasil Tersimpan');
    }

    public function destroy (Telepon $telepon)
    {
        $telepon->delete();
        return redirect()->route('dashboard.telepon')->with('success', 'berhasil Terhapus');
    }
}
