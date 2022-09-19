<?php

namespace App\Http\Requests\Admin;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'nip' => ['required', 'size:10', Rule::unique('users')->ignore($this->user)],
            'email' => ['nullable', 'string', 'email', 'unique:users'],
            'jenis_kelamin' => ['required', 'in:P,L'],
            'image' => ['nullable', 'mimes:png,jpg', 'max:2048'],
            'pangkat' => ['nullable', 'string', 'max:50'],
            'esselon' => ['nullable', 'string', 'max:50'],
            'golongan' => ['nullable', 'string', 'max:50'],
        ];
    }
}
