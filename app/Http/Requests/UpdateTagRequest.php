<?php

namespace App\Http\Requests;

use App\Models\Tag;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateTagRequest extends FormRequest
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
            'title' => ['required_without_all:description,status', /*Rule::unique('tags')->ignore($tag->id),*/ 'max:255'],
            'description' => 'min:50',
            'status' => 'required_without_all:title,description|in:0,1'
        ];
    }
}
