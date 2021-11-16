<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Input;

class AlbumsRequest extends Request {
    
    public function authorize() {
        return true;
    }
    
    public function rules() {
        $all = Input::all();
        $album_id = !empty($all['album_id']) ? ',' . $all['album_id'] : '';
        //dd($album_id);
        return [
            'name' => 'required|unique:albums,name' . $album_id,
            'thumbnail' => 'required',
            'picturesTaken' => 'required',
        ];
    }
    public function messages() {
        return [
            'name.required' => 'חובה למלא שם',
            'name.unique' => 'קיים כבר אלבום בשם הזה אנא ביחרו שם אחר',
            'thumbnail.required' => 'חובה לצרף תמונת שער לאלבום',
            'picturesTaken.required' => 'חובה לבחור תאריך צילום',
        ];
    }
}
