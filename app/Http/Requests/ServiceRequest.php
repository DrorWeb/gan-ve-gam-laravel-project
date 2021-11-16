<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ServiceRequest extends Request {
    
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'icon' => 'required',
            'כותרת' => 'required',
            'תקציר' => 'required',
        ];
    }
    
    public function messages() {
        return [
            'icon.required' => 'שכחת לצרף אייקון',
            'כותרת.required' => 'שכחת כותרת...',
            'תקציר.required' => 'חייבים תוכן...',
        ];
    }
}
