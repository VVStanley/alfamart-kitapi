<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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

            'country_code'        => 'required',
            'debitor_type'        => 'required',

            //  валидация физика debitor_type = 1
            'real_contact_name'     => 'sometimes|required',
            'real_contact_phone'    => 'sometimes|required',

            'real_country'          => 'sometimes|required',
            'real_city'             => 'sometimes|required',
            'real_street'           => 'sometimes|required',
            'real_house'            => 'sometimes|required',

            //  валидация юр лица debitor_type = 3
            'name_ur'               => 'sometimes|required',
            'organization_name_ur'  => 'sometimes|required',
            'organization_phone_ur' => 'sometimes|required',
            'phone_ur'              => 'sometimes|required',
            'inn_ur'                => 'sometimes|required',

            //  валидация ИП debitor_type = 2
            'name_ip'               => 'sometimes|required',
            'organization_name_ip'  => 'sometimes|required',
            'organization_phone_ip' => 'sometimes|required',
            'inn_ip'                => 'sometimes|required',

            //  юр лицо и ИП одинаковые поля
            'legal_country'         => 'sometimes|required',
            'legal_city'            => 'sometimes|required',
            'legal_street'          => 'sometimes|required',
            'legal_house'           => 'sometimes|required',
        ];
    }
}