<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParfumRequest extends FormRequest
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
            'name' => 'required',
            'scent' => 'required',
            'price' => 'required',
            'body' => 'required|min: 150',
            'img' => 'required|image|mimes:jpeg,png,webp'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute input is required.',
            'min' => ':attribute must be at least :min char.',
            'img.image' => 'File must be an image.',
            'img.mimes' => 'File format must be .jpeg, .png, .webp'

        ];
    }
}
