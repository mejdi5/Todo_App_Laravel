<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TagRequest extends FormRequest
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
            'title' => 'required|unique:tags|max:255',
            'description' => 'min:50',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'The title is required',
            'title.unique' => 'The title must be unique',
            'title.max' => 'The title must not have more than 255 characters',
            'description.min' => 'The description must have at least 50 characters',
        ];
    }
}
