<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
use DB;

class Post extends Model {
    
/******************************************************************************************************/    
/****************************************  Model Relationship  ****************************************/
    public function posts() {
        return $this->hasMany('App\Post');
    }

/******************************************************************************************************/    
/****************************************  PostController Index Method  *******************************/
    static public function getPosts(&$data) {
        $postim = [];
        if ($postim = Post::all()) {
            $postim = $postim->sortByDesc('created_at')->toArray();
        }
        $data['posts'] = $postim;
    }
    
    
    static public function getLastPosts(&$data) {
        $data['lastPosts'] = DB::table('posts')->orderBy('created_at', 'desc')->take(3)->get();    
    }

/******************************************************************************************************/
/****************************************  PostController Store Method  *******************************/
    static public function addPost($request) {
        //dd($request);
        $image_name = '';
        $post = new self();
        $post->dayDate = $request['dayDate'];
        $post->month = $request['month'];
        $post->year = $request['year'];
        $post->title = $request['title'];
        $post->keywords = $request['keywords'];
        $post->short = $request['short'];
        $post->article = $request['article'];
        $post->vimeo = $request['vimeo'];
        $post->youtube = $request['youtube'];
        $post->alt = $request['alt'];
        $post->author = $request['author'];
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image_name = str_random(3) . date('y.m.d') . str_random(6) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/images/blogPosts/', $image_name);
        }
        $post->image = $image_name;
        $post->save();
        Session::flash('confSmall', 'הפוסט נוצר בהצלחה');
    }

/******************************************************************************************************/    
/****************************************  PostController Update Method  ******************************/
    static public function updatePost($request, $id) {
        $post = Post::where('id', '=', $request->post_id)->first();
        $image_name = '';
        if ($post->image) {
            $image_name = $post->image;
        }
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image_name = str_random(3) . date('y.m.d') . str_random(6) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/images/blogPosts/', $image_name);
        }
        if ($request['dayDate']) {
            $post->dayDate = $request['dayDate'];
        }
        if ($request['month']) {
            $post->month = $request['month'];
        }
        if ($request['year']) {
            $post->year = $request['year'];
        }
        $post->title = $request['title'];
        $post->keywords = $request['keywords'];
        $post->short = $request['short'];
        $post->article = $request['article'];
        $post->vimeo = $request['vimeo'];
        $post->youtube = $request['youtube'];
        $post->alt = $request['alt'];
        $post->author = $request['author'];
        if ($image_name) {
            $post->image = $image_name;
        }
        $post->save();
        Session::flash('confSmall', 'הפוסט עודכן');
    }

/******************************************************************************************************/
/**************************************** GET POST NAME  **********************************************/
    static public function getName($id, &$data) {
        $data['postName'] = [];
        if ($postName = Post::where('id', '=', $id)->first()) {
            $data['postName'] = $postName->toArray();
        }
    }

}