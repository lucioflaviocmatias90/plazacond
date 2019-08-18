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
            'birthday' => 'required',
            'email' => 'required|email|unique:owners',
            'rg' => 'required',
            'cpf' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'photo_path' => 'nullable|image',
            'observation' => 'required',
            'apartment_id' => 'required',
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