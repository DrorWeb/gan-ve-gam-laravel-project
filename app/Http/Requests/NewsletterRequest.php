<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class NewsletterRequest extends Request {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'email' => 'required|email' ,
        ];
    }
    public function messages(){
        return [
            'email.required'=>'חובה למלא כתובת אימייל',
            'email.email'=>'אנא מלא כתובת אימייל תקינה',
        ];
    }
}
