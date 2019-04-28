<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleRequest extends FormRequest
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
            'brand' => 'required',
            'model' => 'required',
            'type_vehicle' => 'required',
            'vehicle_color' => 'required',
            'vehicle_plate' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Preencha o campo :attribute',
        ];
    }

    public function attributes()
    {
        return [
            'brand' => 'marca',
            'model' => 'modelo',
            'type_vehicle' => 'tipo do veículo',
            'vehicle_color' => 'cor do veículo',
            'vehicle_plate' => 'placa do veículo',
        ];
    }
}
