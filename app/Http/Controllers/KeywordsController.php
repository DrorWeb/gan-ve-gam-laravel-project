<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Keyword;


class KeywordsController extends MainController {
    function __construct() {
        parent::__construct();
        $this->middleware('adminSigned');
        self::$data['title'] = 'ניהול תוכן - אירועים';
    }

    public function index() {
        self::$data['page'] = Keyword::groupBy('page')->get();
        self::$data['keywords'] = Keyword::all();
        return view('cms.keywords', self::$data);
    }

    public function store(Request $request) {
        Keyword::addKeyword($request);
        return redirect('cms/keywords');
    }

    public function destroy($id) {
        Keyword::destroy($id);
        return redirect('cms/keywords');
    }
}
