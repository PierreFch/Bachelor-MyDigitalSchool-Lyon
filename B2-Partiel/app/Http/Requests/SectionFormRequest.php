<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SectionFormRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:191'],
            'description' => ['required'],
            'link' => ['nullable', 'string', 'max:191'],
            'image_url' => ['nullable', 'string', 'max:191'],
            'image_alt' => ['nullable', 'string', 'max:191'],
            'image_title' => ['nullable', 'string', 'max:191'],
        ];
    }
}
