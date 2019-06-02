<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaiementRequest extends FormRequest
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
            'nom'=>'required|min:6',
            'ville'=>'required|min:6',
            'number'=>'required|min:9',
            'num_carte'=>'required|min:6',
            'cvv'=>'required|min:3'
        ];
    }
}
