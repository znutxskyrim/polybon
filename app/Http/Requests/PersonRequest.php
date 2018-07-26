<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
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
            //
            'firstname' => 'required|String|Max:255',
            'lastname' => 'required|String|Max:255',
            'address' => 'required|String|Max:255',
            'villagenumber' => 'required|String|Max:255',
            'alley' => 'required|String|Max:255',
            'road' => 'required|String|Max:255',
            'subdistrict' => 'required|String|Max:255',
            'district' => 'required|String|Max:255',
            'province' => 'required|String|Max:255',
            'postcode' => 'required|integer|Max:5',
            'phonenumber' => 'required|String|Max:255',
            'phonenumber_con' => 'required|String|Max:255',
            'fax' => 'required|String|Max:255',
            'email' => 'required|String|Max:255',
            'department' => 'required|String|Max:255',
            'ext' => 'required|String|Max:255',
        ];
    }
}
