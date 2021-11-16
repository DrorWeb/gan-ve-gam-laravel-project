<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class HeadlineRequest extends Request {
    
    public function authorize() {
        return true;
    }
    
    public function rules() {
        return [
            'headline' => 'required',
        ];
    }
    public function messages() {
        return [
            'headline.required' => 'חובה למלא כותרת',
        ];
    }
}
