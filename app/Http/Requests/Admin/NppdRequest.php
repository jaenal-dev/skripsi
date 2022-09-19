<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class NppdRequest extends FormRequest
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
            'kepada' => ['required', 'string', 'max:50'],
            'dari' => ['required', 'string', 'max:100'],
            'prihal' => ['required', 'string', 'max:50'],
            'spt_id' => ['required'],
            'anggaran_id' => ['required']
        ];
    }
}
