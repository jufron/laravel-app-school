<?php

namespace App\Http\Controllers\Dashboard\AppManejement;

use App\Http\Controllers\Controller;
use App\Models\Sekolah;
use Illuminate\Http\Request;
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

    }

    public function update ()
    {

    }
}
