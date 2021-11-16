<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class FactsRequest extends Request {
    public function authorize() {
        return true;
    }

    
    public function rules() {
        return [
            'number' => 'required',
            'title' => 'required',
        ];
    }
    public function messages() {
        return [
            'number.required' => 'חובה למלא מספר',
            'title.required' => 'חובה למלא כותרת עובדה',
        ];
    }
}
