<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Input;

class UserRequest extends Request {

    public function authorize() {
        return true;
    }

    public function rules() {
        $all = Input::all();
        $user_id = !empty($all['user_id']) ? ',' . $all['user_id'] : '';
        return [
            'firstName' => 'required|min:2|max:255|regex:/^[a-zא-ת]+\s?[a-zא-ת0-9]+$/i' ,
            'email' => 'required|email|unique:users,email' .$user_id ,
            'password' => 'required|min:6|max:255' ,
        ];
    }
    public function messages(){
        return [
            'firstName.required' => 'חובה למלא שם',
            'firstName.min' => 'שדה השם חייב להכיל לפחות 2 תווים',
            'firstName.max' => 'שדה השם לא יכול להכיל יותר מ255 תווים',
            'firstName.regex' => 'בשדה ״שם המשתמש״ יש להזין רק אותיות עברית או אנגלית ורווח אחד בינהם',
            'email.required' => 'חובה למלא אימייל',
            'email.email' => 'כתובת האימייל שהזנת אינה תקנית',
            'password.required' => 'חובה למלא סיסמה',
            'password.min' => 'הסיסמה חייבת להיות מורכבת לפחות מ 6 תווים',
        ];
    }
}
