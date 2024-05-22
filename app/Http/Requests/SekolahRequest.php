<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SekolahRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama'                      => ['required', 'string', 'digits_between:4,50'],
            'logo'                      => ['nullable', 'image', 'max:2024', 'mimes:jpg,JPG,jpeg,JPEG,png,PNG'],
            'deskripsi'                 => ['required', 'string', 'min_digits:20'],
            'alamat'                    => ['required', 'string', 'digits_between:20,140'],
            'no_telepon'                => ['required', 'numeric', 'digits_between:10,15'],
            'sejarah_sekolah'           => ['required', 'string', 'min_digits:20'],
            'visi_misi'                 => ['required', 'string', 'min_digits:20'],
            'nama_kepala_sekolah'       => ['required', 'string', 'digits_between:5,100'],
            'foto_kepala_sekolah'       => ['nullable', 'image', 'max:2024', 'mimes:jpg,JPG,jpeg,JPEG,png,PNG'],
            'periode_kepala_sekolah'    => ['required', 'numeric'],
            'pesan_kepala_sekolah'      => ['required', 'string', 'min_digits:20'],
        ];
    }
}
