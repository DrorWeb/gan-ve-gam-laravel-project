<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class SliderRequest extends Request {
    
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'image' => 'required | image',
        ];
    }
    
    public function messages() {
        return [
            'image.required' => 'שכחת לצרף תמונה לשקופית',
            'image.image' => 'הקובץ המצורף חייב להיות תמונה',
        ];
    }
}
