<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreConsultationRequest extends FormRequest
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
            'date'=>['required'],
            'examen'=>['required'],
            'Diagnostic'=>['required'],
            'hypothese'=>['required'],
            'Bilan_demander'=>['required'],
            'traitement'=>['required'], 
        ];
    }
}
