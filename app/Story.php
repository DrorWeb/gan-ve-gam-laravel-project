<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;


class Story extends Model   {
    
    static public function createNewStory($request, &$data){
        $story = new self();
        $story->title = $request['title'];
        $story->url = '<iframe width="853" height="480" ' .  strstr($request['url'], 'src=');
        $story->save();  
        Session::flash('confSmall', 'הסיפור נוסף בהצלחה');
    }
    
    
   static public function updateStory($request, $id){
        $story = Story::where('id', $id)->first();
        $story->title = $request['title'];
        $story->url = '<iframe width="853" height="480" ' .  strstr($request['url'], 'src=');
        $story->save();  
        Session::flash('confSmall', 'העדכון עבר בהצלחה');
         
    }
    
}


    
    