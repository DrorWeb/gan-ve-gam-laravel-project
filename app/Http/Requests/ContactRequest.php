<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContactRequest extends Request {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'contact_name' => 'required' ,
            'contact_email' => 'required|email' ,
            'contact_message' => 'required|min:2|max:1000' ,
        ];
    }
    public function messages(){
        return [
            
            'contact_name.required' => 'חובה למלא שם',
            'contact_email.required' => 'חובה למלא אימייל',
            'contact_message.required' => 'גוף ההודעה צריך להיות 2-1000 תוים',
        ];
    }
}
