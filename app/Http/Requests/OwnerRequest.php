<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OwnerRequest extends FormRequest
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
            'fullname' => 'required',
            'email' => 'required|email|unique:owners',
            'phone' => 'required',
            'photo_path' => 'image'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Preencha o campo de :attribute',
            'email' => 'Esse :attribute não é válido',
            'image' => 'Por favor, somente arquivo de imagem!'
        ];
    }

    public function attributes()
    {
        return [
            'fullname' => 'nome completo',
            'email' => 'endereço de email',
            'phone' => 'telefone'
        ];
    }
}