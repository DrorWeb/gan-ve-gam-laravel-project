<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\AlbumsRequest;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MainController;
use Session;
use App\Album;
use App\Picture;
use DB;


class AlbumsController extends MainController {

    function __construct() {
        parent::__construct();
        $this->middleware('adminSigned');
    }

    public function index() {
        self::$data['title'] = 'האלבומים שלנו';
        $albums = Album::all();
        self::$data['albums'] = $albums->sortByDesc('picturesTaken');
        return view('cms.myAlbums', self::$data);
    }

    public function create() {
        return view('cms.add_album', self::$data);
    }

    public function store(AlbumsRequest $request) {
        Album::createNewAlbum($request, self::$data);
        return redirect('cms/albums');
    }

    public function show($id) {
        self::$data['title'] = 'מחיקת אלבום';
        Album::getName($id, self::$data);
        return view('cms.delete_album', self::$data);
    }

    public function edit($id) {
        Album::getName($id, self::$data);
        Album::getPath(self::$data);
        Album::getPlaylist($id, self::$data);
        Picture::getAlbumPictures($id, self::$data);
       // dd(self::$data);
        return view('cms.edit_album', self::$data);
    }

    public function update(Request $request, $id) {
        Album::updateAlbum($request, $id);
        
        return redirect('cms/albums');
    }

    public function destroy($id) {
        Album::deleteThumbnail($id);
        Picture::deleteAlbumPictures($id);
        Album::destroy($id);
        Session::flash('confSmall', 'האלבום וכל התמונות המשוייכות אליו נמחקו');
        return redirect('cms/albums');
    }
    
    
    
    public function deletePictureById($id){
       $pic = DB::table('pictures')->where('id', $id)->first();
        $album_id = $pic->album_id;
            $picture = storage_path() . '/privateAlbums/' . $pic->name;
            if (file_exists($picture)) {
                unlink($picture);
            }
            DB::table('pictures')->where('id', $id)->delete();
            return redirect('cms/albums/' . $album_id . '/edit');
    }
    
     public function deletePlaylist($playlist_url){
          DB::table('playlists')->where('url', $playlist_url)->delete();
          return back();
     }
    
    
    
    

}
