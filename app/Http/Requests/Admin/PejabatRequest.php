<?php

namespace App\Http\Requests\Admin;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class PejabatRequest extends FormRequest
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
            'nip' => ['required', 'size:18', Rule::unique('pejabats')->ignore($this->pejabat)],
            'pangkat' => ['required', 'string', 'max:50'],
            'jabatan' => ['required', 'string', 'max:50'],
            'golongan' => ['required', 'string', 'max:50']
        ];
    }
}
