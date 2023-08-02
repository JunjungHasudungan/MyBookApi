<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'category'      => [ 'required'],
            'title'         => ['required', 'min:3', 'max:20'],
            'description'   => [ 'required', 'min:3', 'max:50' ],
            'user_id'       => ['nullable'],
        ];
    }

    public function messages()
    {
        return [
            'title.required'        => 'Judul Wajib di isi..',
            'title.min'             => 'Judul min 3 karakter..',
            'title.max'             => 'Judul min 20 karakter..',
            'description.required'  => 'Deskripsi wajib di isi..',
            'description.min'       => 'Deskripsi min 3 karakter..',
            'description.min'       => 'Deskripsi max 50 karakter'
        ];
    }
}
