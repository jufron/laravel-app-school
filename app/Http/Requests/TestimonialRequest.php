<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialRequest extends FormRequest
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
        $testimonial = $this->route('testimonial');
        return [
            'image'         => ['nullable', 'image', 'max:2024', 'mimes:jpg,JPG,jpeg,JPEG,png,PNG'],
            'name'          => ['required', $testimonial ? "unique:testimonials,name,$testimonial->id" : 'unique:testimonials,name', 'min:4'],
            'message'       => ['required', 'min:10']
        ];
    }
}
