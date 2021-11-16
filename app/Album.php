<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\AlbumsRequest;
use DB;
use Session;
use App\Picture;

class Album extends Model {

    static public function createNewAlbum($request, &$data) {
        $thumbnail = '';
        $album = new self();
        $album->name = $request['name'];
        $album->picturesTaken = $request['picturesTaken'];
        if ($request->hasFile('thumbnail') && $request->file('thumbnail')->isValid()) {
            $thumbnail = $request->file('thumbnail')->getClientOriginalName();
            if (!file_exists(storage_path() . '/privateAlbums/' . $thumbnail)) {
                $thumbnail = 'CoverPhoto-' . date('y-m-d') . '-' . str_random(6) . '.' . $request->file('thumbnail')->getClientOriginalExtension();
                $request->file('thumbnail')->move(storage_path() . '/privateAlbums/', $thumbnail);
                $album->thumbnail = $thumbnail;
            } else {
                $album->thumbnail = $thumbnail;
            }
        } else {
            $album->thumbnail = $thumbnail;
        }
        $album->save();
        if ($request->hasFile('images')) {
            Picture::addPicturesToAlbum($request, $album->id);
            Session::flash('confLarge', 'האלבום נוצר בהצלחה כל הקבצים הועלו בהצלחה');
        } else {
            Session::flash('confSmall', 'האלבום נוצר בהצלחה לא נוספו קבצים');
        }

        if ($request['playlist_url']) {
            $playlist_url = strstr($request['playlist_url'], 'PL');
            DB::table('playlists')->insert(
                    ['album_id' => $album->id, 'url' => $playlist_url,]
            );
        }
    }

    static public function getAlbums(&$data) {
        if ($albums = Album::groupBy('name')->orderBy('picturesTaken', 'desc')->get()) {
            $data['albums'] = $albums->ToArray();
        }
    }

    static public function getPlaylist($albumId, &$data) {
        if (!DB::table('playlists')->where('album_id', $albumId)->first()) {
            $data['playlist_url'] = [];
        } else {
            $data['playlist_url'] = DB::table('playlists')->where('album_id', $albumId)->first();
        }
    }

    static public function getName($id, &$data) {
        $album = Album::where('id', $id)->first();
        $data['album'] = $album;
    }

    static public function getPath(&$data) {
        $data['path'] = 'http://localhost/GanVeGamNew/storage/privateAlbums/';
    }

    /*     * *************************************************************************** */
    /*     * *****************************   Update Album  ***************************** */

    static public function updateAlbum($request, $id) {
        //  dd($request);
        $album = Album::where('id', '=', $id)->first();
        $oldImage = $request['oldImage'];
        $album->name = $request['name'];
        if ($request['picturesTaken']) {
            $album->picturesTaken = $request['picturesTaken'];
        } else {
            $album->picturesTaken = $request['originalyTaken'];
        }
        if ($request->hasFile('thumbnail') && $request->file('thumbnail')->isValid()) {
            $image_name = date('y-m-d') . '-' . str_random(6) . '.' . $request->file('thumbnail')->getClientOriginalExtension();
            $request->file('thumbnail')->move(storage_path() . '/privateAlbums/', $image_name);
            $album->thumbnail = $image_name;
        }
        $album->save();
        if ($request->hasFile('images')) {
            Picture::addPicturesToAlbum($request, $id);
            Session::flash('confLarge', 'השינויים נשמרו בהצלחה כל הקבצים הועלו בהצלחה');
        } else {
            Session::flash('confSmall', 'השינויים נשמרו בהצלחה לא הועלו קבצים');
        }
        if ($request['playlist_url']) {
            $playlist_url = strstr($request['playlist_url'], 'PL');
            $exists = DB::table('playlists')->where('album_id', '=', $request['album_id'])->get();
            if ($exists) {
                DB::table('playlists')
                        ->where('album_id', $id)
                        ->update(['url' => $playlist_url]);
            } else {
                DB::table('playlists')->insert(
                        ['album_id' => $id, 'url' => $playlist_url]
                );
            }
        }
    }

    static public function deleteThumbnail($id) {
        $album = Album::where('id', '=', $id)->first();
        $thumb = storage_path() . '/privateAlbums/' . $album->thumbnail;
        if (file_exists($thumb)) {
            unlink($thumb);
        }
    }

}
