<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Input;

class PostRequest extends Request {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'dayDate' => 'required',
            'month' => 'required',
            'year' => 'required',
            'title' => 'required|min:2|max:120',
            'short' => 'required|min:2',
            'article' => 'required|min:20',
            'author' => 'required|min:2'
        ];
    }

    public function messages() {

        return [
            'dayDate.required' => 'חסר יום - חובה לציין תאריך מלא',
            'month.required' => 'חסר חודש - חובה לציין תאריך מלא',
            'year.required' => 'חסרה שנה - חובה לציין תאריך מלא',
            'title.required' => 'שכחת כותרת',
            'title.min' => 'הכותרת חייבת להיות לפחות 2 אותיות',
            'title.max' => 'כותרת הפוסט יכולה להכיל עד 120 תווים',
            'short.required' => 'שכחת תקציר',
            'article.required' => 'שכחת את הפוסט!!!',
            'author.required' => 'שכחת מי כתב?'
        ];
    }

}
