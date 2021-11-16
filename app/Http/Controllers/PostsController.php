<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MainController;
use App\Post;
use Session;

class PostsController extends MainController {

    function __construct() {
        parent::__construct();
        $this->middleware('adminSigned');
        self::$data['title'] = 'ניהול פוסטים';
    }

    public function index() {  
        self::$data['post'] = Post::all()->sortByDesc('created_at')->toArray();
        return view('cms.blogPosts', self::$data);
    }

    public function create() {
        self::$data['months'] = ['ינואר', 'פברואר', 'מרץ', 'אפריל', 'מאי', 'יוני', 'יולי', 'אוגוסט', 'ספטמבר', 'אוקטובר', 'נובמבר', 'דצמבר'];
        return view('cms.add_post', self::$data);
    }

    public function store(PostRequest $request) {
        Post::addPost($request);
        return redirect('cms/posts');
    }

    public function show($id) {
        Post::getName($id, self::$data);
        self::$data['post_id'] = $id;
        return view('cms.delete_post', self::$data);
    }

    public function edit($id) {
        self::$data['months'] = ['ינואר', 'פברואר', 'מרץ', 'אפריל', 'מאי', 'יוני', 'יולי', 'אוגוסט', 'ספטמבר', 'אוקטובר', 'נובמבר', 'דצמבר'];
        self::$data['post'] = Post::find($id)->toArray();
        return view('cms.edit_post', self::$data);
    }

    public function update(PostRequest $request, $id) {
        Post::updatePost($request, $id);
        return redirect('cms/posts');
    }

    public function destroy($id) {
        Post::destroy($id);
        Session::flash('confSmall', 'הפוסט נמחק');
        return redirect('cms/posts');
    }
    
}
