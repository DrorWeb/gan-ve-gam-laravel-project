<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MainController;
use App\User;
use DB;
use Session;

class UsersController extends MainController {

    function __construct() {
        parent::__construct();
        $this->middleware('adminSigned');
        self::$data['title'] = 'ניהול משתמשים';
    }

    public function index() {
        self::$data['users'] = DB::table('users')->orderBy('updated_at', 'desc')->get();
        return view('cms.users', self::$data);
    }

    public function create() {
        return view('cms.add_user', self::$data);
    }

    public function store(UserRequest $request) {
        User::createUser($request);
        return redirect('cms/users');
    }

    public function show($id) {
        User::getUserName($id, self::$data);
        self::$data['user_id'] = $id;
        return view('cms.delete_user', self::$data);
    }

    public function edit($id) {
        self::$data['user'] = User::find($id)->toArray();
        return view('cms.edit_user', self::$data);   
    }

    public function update(UserRequest $request, $id) {
        User::updateUser($request, $id);
        return redirect('cms/users');
    }

    public function destroy($id) {
        User::destroy($id);
        User::deletePermissions($id);
        Session::flash('confSmall', 'המשתמש נמחק מהמערכת');
        return redirect('cms/users');
    }
    
}
