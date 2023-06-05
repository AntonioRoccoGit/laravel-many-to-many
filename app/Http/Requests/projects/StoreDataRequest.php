<?php

namespace App\Http\Requests\projects;

use Illuminate\Foundation\Http\FormRequest;

class StoreDataRequest extends FormRequest
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
            'title' => 'required|min:6|max:60',
            'description' => 'nullable|min:6|max:1000',
            'project_last_update' => 'nullable|date'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Campo obbligatorio',
            'title.min' => 'Lunghezza minima :min caratteri',
            'title.max' => 'Lunghezza massima :max caratteri',
            'description.min' => 'Lunghezza minima :min caratteri',
            'description.max' => 'Lunghezza massima :max caratteri',
            'sale_date.date' => 'Formato data',
        ];
    }
}