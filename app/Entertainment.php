<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;


class Entertainment extends Model{
/******************************************************************************************************/    
/****************************************  Model Relationship  ****************************************/
    public function items() {
        return $this->hasMany('App\Entertainment');
    }
    
    static public function getAllMedia(&$data){
        if($allStories = DB::table('stories')->orderBy('title', 'asc')->get()){
            $data['allStories'] = $allStories;
        } 
        if($allSongs = DB::table('songs')->orderBy('title', 'asc')->get()){
            $data['allSongs'] = $allSongs;
        }

    }
    
    static public function getStory($storyId, &$data) {
        
        if ($story = DB::table('stories')->where ('id', '=' , $storyId)->first()){            
            $data['story'] = $story;
        }
    }
    

    static public function getSong($songId, &$data) {
        
        if ($song = DB::table('songs')->where ('id', '=' , $songId)->first()){            
            $data['song'] = $song;
        }
    }
    
}
