<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class todoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id'=>'required',
            'title'=>'string|max:20',
            'created_at'=>'required|date',
            'updated_at'=>'required|date',
        ];
    }
}
