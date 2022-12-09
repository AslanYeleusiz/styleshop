<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class OdezhdaUpdateRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'type_id' => 'required',
            'description' => 'required',
            'brand' => 'required',
            'facturer_id' => 'required',
            'color_id' => 'required',
            'value' => 'required',
            'form_type_id' => 'required',
            'image' => 'required',
            'price' => 'required'
        ];
    }
}
