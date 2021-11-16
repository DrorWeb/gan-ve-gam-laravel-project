<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class EmployeeRequest extends Request {
    
    public function authorize() {
        return true;
    }

    
    public function rules() {
        return [
            'name' => 'required|min:2',
            'image' => 'image',
            'alt' => 'required',
        ];
    }
    
    public function messages() {
        return [
            'name.required' => 'חובה למלא שם',
            'name.min' => 'שם - חובה לפחות שני תווים',
            'image.image' => 'הקובץ שניסית לצרף כתמונה הוא לא קובץ תמונה',
            'alt.required' => 'תיאור תמונה - לטובת גוגל חובה למלא שדה זה',
        ];
    }
}
