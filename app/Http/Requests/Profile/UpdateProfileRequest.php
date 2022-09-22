<?php

namespace App\Http\Requests\Profile;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:50'],
            'nip' => ['required', 'size:18', Rule::unique('users')->ignore(auth()->user()->id)],
            'jenis_kelamin' => ['required', 'in:P,L'],
            'image' => ['nullable', 'mimes:png,jpg', 'max:2048'],
            'pangkat' => ['nullable', 'string', 'max:50'],
            'jabatan' => ['nullable', 'string', 'max:50'],
            'golongan' => ['nullable', 'string', 'max:50'],
        ];
    }
}
