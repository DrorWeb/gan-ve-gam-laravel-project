<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Song;
use Session;

class SongsController extends MainController{
    
    public function index() {
        self::$data['title'] = 'ניהול תוכן - שירים';
        self::$data['list'] = DB::table('songs')->get();
        return view('cms.songs', self::$data);
    }

    public function create() {
        return view('cms.add_song', self::$data);
    }

    public function store(Request $request) {
        Song::createNewSong($request, self::$data);
        return redirect('cms/songs');
        
////        $song_url = strstr($request['url'], 'src="');
////        DB::table('playlists')->insert(
////                ['album_id' => $album->id, 'url' => $playlist_url,]
//        );
    }
    
    public function show($id) {
        self::$data['title'] = 'מחיקת שיר';
        self::$data['song'] = Song::where('id', $id)->first();
        return view('cms.delete_song', self::$data);
    }

    public function edit($id) {
        self::$data['song'] = Song::where('id', $id)->first();
        return view('cms.edit_song', self::$data);
    }

    public function update(Request $request, $id) {
        Song::updateSong($request, $id);
        return redirect('cms/songs');
    }

    public function destroy($id) {
        Song::destroy($id);
        Session::flash('confSmall', 'השיר נמחק');
        return redirect('cms/songs');
    }

}
