<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Story;
use Session;

class StoriesController extends MainController{
    
    public function index() {
        self::$data['title'] = 'ניהול תוכן - סיפורים';
        self::$data['list'] = DB::table('stories')->get();
        return view('cms.stories', self::$data);
    }

    public function create() {
        return view('cms.add_story', self::$data);
    }

    public function store(Request $request) {
        Story::createNewStory($request, self::$data);
        return redirect('cms/stories');
    }
    
    public function show($id) {
        self::$data['title'] = 'מחיקת סיפור';
        self::$data['story'] = Story::where('id', $id)->first();
        return view('cms.delete_story', self::$data);
    }

    public function edit($id) {
        self::$data['story'] = Story::where('id', $id)->first();
        return view('cms.edit_story', self::$data);
    }

    public function update(Request $request, $id) {
        Story::updateStory($request, $id);
        return redirect('cms/stories');
    }

    public function destroy($id) {
        Story::destroy($id);
        Session::flash('confSmall', 'הסיפור נמחק');
        return redirect('cms/stories');
    }

}
