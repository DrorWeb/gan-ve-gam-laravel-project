<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Session;
use Image;

class Picture extends Model {

    
    static public function addPicturesToAlbum($request, $album_id) {
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                if ($image->isValid()) {
                    $image_name = date('y-m-d') . '-' . str_random(6) . '.' . $image->getClientOriginalExtension();
                    $image->move(storage_path() . '/privateAlbums/', $image_name);
                }
                $picture = new self();
                $picture->name = $image_name;
                $picture->type = 'image';
//                $picture->title = NULL;
                $picture->album_id = $album_id;
                $picture->alt = 'תמונה של ילדי הגן';
                $picture->save();
               
            }
        }
    }

    
    static public function deleteAlbumPictures($id) {
        $albumPics = DB::table('pictures')->where('album_id', $id)->get();
        foreach ($albumPics as $albumPic) {
            $picture = storage_path() . '/privateAlbums/' . $albumPic->name;
            if (file_exists($picture)) {
                unlink($picture);
            }
        }
        DB::table('pictures')->where('album_id', $id)->delete();
        DB::table('playlists')->where('album_id', $id)->delete();
    }

    
    static public function getAlbumPictures($albumId, &$data) {
        $data['pictures'] = Picture::where('album_id', '=', $albumId)->where('type', '=', 'image')->get()->ToArray();

    }
    
    
    
}       
