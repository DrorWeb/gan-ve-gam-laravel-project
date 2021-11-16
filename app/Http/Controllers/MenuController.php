<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MenuRequest;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MainController;
use App\Menu;
use App\Site;
use Session;

class MenuController extends MainController {
    
    function __construct() {
        parent::__construct();
        $this->middleware('adminSigned');
    }

    public function index() {
        self::$data['title'] = 'ניהול - תפריטים';
        return view('cms.menu', self::$data);
    }

    public function create() { 
        Site::getIconsAndColors(self::$data);
        return view('cms.add_menu', self::$data);
    }

    public function store(MenuRequest $request) {
        Menu::addMenu($request);
        return redirect('cms/menu');
    }

    public function show($id) {
        Menu::getName($id, self::$data);
        self::$data['menu_id'] = $id;
        return view('cms.delete_menu', self::$data);
    }

    public function edit($id) {
        self::$data['menu'] = Menu::find($id);
        // dd(self::$data['menu']  );
        Menu::getMenusOrdered(self::$data, self::$data['menu']['parent_id']);
        return view('cms.edit_menu', self::$data);
    }

    public function update(MenuRequest $request, $id) {
        Menu::updateMenu($request, $id);
        return redirect('cms/menu');
    }

    public function destroy($id) {
        Menu::destroy($id);
        Session::flash('confSmall', 'התפריט נמחק בהצלחה');
        return redirect('cms/menu');
    }

}
