<?php  namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MainController;
use App\Http\Requests\Signin;
use App\User;
use Session;
use Input;
use DB;

class UserController extends MainController {
  

    function __construct() {
        parent::__construct();
        $this->middleware('userSigned', ['except' => ['getLogout', 'getEdit', 'userUpdate']]);
        self::$data['title'] = 'עריכת הפרופיל שלי';
    }

    public function getLogin() {
        self::$data['dest'] = Input::get('dest');
        self::$data['title'] = 'דף התחברות';
        return view('form.login', self::$data);
    }

    public function postLogin(Signin $request) {
        if (User::validateUser($request['email'], $request['password'])) {
            return !empty($request['dest']) ? redirect($request['dest']) : redirect('');
        } else {
            $dest = 'user/login';
            $dest .= !empty($request['dest']) ? '?dest=' . $request['dest'] : '';
            return redirect($dest)->withErrors('אימייל או סיסמה לא נכונים');
        }
    }

    public function getLogout() {
        Session::forget('user_id');
        Session::forget('user_name');
        Session::forget('is_admin');
        return redirect('');
    }

    public function getEdit($id) {
        $user_id = Session::get('user_id');
        if (!Session::has('user_id')) {
            Session::flash('parentsOnly', 'חובה לבצע כניסה למערכת כדי לערוך פרופיל');
            return redirect('user/login');
        } elseif ($user_id != $id) {
            Session::flash('parentsOnly', 'גישה חסומה');
            return redirect('');
        } else {
            self::$data['userDetails'] = User::where('id', $id)->first();
            return view('content.edit_my_details', self::$data);
        }
    }

    public function userUpdate(Request $request) {
        User::updateUserByUser($request);
        return redirect('');
    }

}
