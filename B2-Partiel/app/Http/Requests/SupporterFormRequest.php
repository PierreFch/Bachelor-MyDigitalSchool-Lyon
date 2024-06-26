<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupporterFormRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'lastname' => ['required', 'string', 'max:191'],
            'firstname' => ['required', 'string', 'max:191'],
            'phone' => ['nullable', 'string', 'max:191'],
            'email' => ['required', 'string', 'max:191', 'unique:supporters'],
            'rgpd' => ['required'],
        ];
    }
}
