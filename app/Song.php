<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;


class Song extends Model   {
    
    static public function createNewSong($request, &$data){
        $song = new self();
        $song->title = $request['title'];
        $song->url = '<iframe width="853" height="480" ' .  strstr($request['url'], 'src=');
        $song->save();  
        Session::flash('confSmall', 'השיר נוסף בהצלחה');
    }
    
    
   static public function updateSong($request, $id){
        $song = Song::where('id', $id)->first();
        $song->title = $request['title'];
        $song->url = '<iframe width="853" height="480" ' .  strstr($request['url'], 'src=');
        $song->save();  
        Session::flash('confSmall', 'העדכון עבר בהצלחה');
         
    }
    
}


    
    