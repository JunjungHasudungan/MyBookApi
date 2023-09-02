<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // return false;
        // change to be return true
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
            'category'      => ['required'],
            'title'         => ['required'],
            'description'   => ['required'],
            'user_id'       => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'category.required'     => 'Kategori Wajib diisi..',
            'title.required'        => 'Judul wajib diisi..',
            'description.required'  => 'keterangan wajib diisi..',
            'user_id.required'      => 'user id wajib diisi bray..'
        ];
    }
}
