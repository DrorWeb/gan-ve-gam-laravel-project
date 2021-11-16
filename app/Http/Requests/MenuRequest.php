<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Input;

class MenuRequest extends Request {

    public function authorize() {
        return true;
    }

    public function rules() {
        
        $all = Input::all();
        $menu_id = !empty($all['menu_id']) ? ',' . $all['menu_id'] : '';
        return [
            'link' => 'required|min:3|max:90' ,
            'url' => 'required|regex:/^[A-Za-z\d-]+$/|unique:menus,url' . $menu_id ,
            ];
    }
    public function messages(){
        
        return [
            'url.regex'=> 'אותיות ומספרים בלבד',
            'url.unique'=> 'הקישור הזה כבר תפוס',
        ];
    }
}
