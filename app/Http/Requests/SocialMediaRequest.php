<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SocialMediaRequest extends FormRequest
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
            'platfrom_id' => ['required', 'exists:platfrom,id', 
                Rule::unique('social_media')->where(function ($query) {
                    return $query->where('platfrom_id', $this->platform_id);
                }),
            ],
            'url'           => ['required', 'url', 'max:255'],
        ];
    }
}
