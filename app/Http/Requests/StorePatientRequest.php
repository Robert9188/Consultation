<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePatientRequest extends FormRequest
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
            'nom'=>['required'],
            'prenom'=>['required'],
            'date_de_naissance'=>['required'],
            'sexe'=>['required'],
            'statut_matrimonial'=>['required'],
            'adresse'=>['required'],
            'telephone'=>['required'],
            'email'=>['required', 'email', 'unique:patients'],
        ];
    }
}
