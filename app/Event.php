<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class Event extends Model {
    
/*******************************************************************************/    
/*******************************  Model Relationship  *************************/    
    public function events() {
        return $this->hasMany('App\Event');
    }

        
/*********************  get all events sorted by date *************************/
    static public function getSortedEvents(&$data){
        $data['eventsHeadline'] = DB::table('headlines')->where('section', '=', 'ארועים')->first();
        $data['events'] = DB::table('events')->orderBy('day', 'asc')->get();
    }
    

    static public function createNewEvent($request, &$data){
        $event = new self();
        $event->title = $request['title'];
        $event->day = $request['day'];
        $event->month = $request['month'];
        $event->age = $request['age'];
        $event->hour = $request['hour'];
        $event->location = $request['location'];
        if($request['price']){
            $event->price = $request['price'];
        }
        else {
           $event->price = 'חינם'; 
        }
        $event->price = $request['price'];
        $event->short = $request['short'];
        $event->details = $request['details'];
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $originalEventImage = $request->file('image')->getClientOriginalName();
            if (!file_exists(public_path() . '/images/events/240X240/' . $originalEventImage)) {
                $eventImage = 'EventImage-' . date('y-m-d') . '-' . str_random(6) . '.' . $request->file('image')->getClientOriginalExtension();
                $event->image = $eventImage;
                $event->image_alt = $request['alt'];
                $request->file('image')->move(public_path() . '/images/events/240X240/', $eventImage);
                Session::flash('confLarge', 'האירוע נוצר בהצלחה קובץ התמונה צורף');
            } else {
                $event->image = $originalEventImage;
                $event->image_alt =  $request['alt'];
                Session::flash('confLarge', 'האירוע נוצר בהצלחה קובץ התמונה קיים כבר במערכת');
            }
        } else {
            $event->image = 'defaultEventImage.jpg';
            $event->image_alt = 'תמונת אירוע - גן וגם';
            Session::flash('confSmall', 'האירוע נוצר בהצלחה ללא תמונה. מטעמי עיצוב נוספה תמונת ברירת המחדל לאירועים');
        }
         $event->save();               
    }

    
    static public function updateEvent($request, $id){
        $event = Event::where('id', '=', $id)->first();
        $originalEvent = $event;
        $event->title = $request['title'];
        $event->day = $request['day'];
        $event->month = $request['month'];
        $event->age = $request['age'];
        $event->hour = $request['hour'];
        $event->location = $request['location'];
        if($request['price']){
            $event->price = $request['price'];
        }
        else {
           $event->price = 'חינם'; 
        }
        $event->short = $request['short'];
        $event->details = $request['details'];
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $originalEventImage = $request->file('image')->getClientOriginalName();
            if (!file_exists(public_path() . '/images/events/240X240/' . $originalEventImage)) {
                $eventImage = 'EventImage-' . date('y-m-d') . '-' . str_random(6) . '.' . $request->file('image')->getClientOriginalExtension();
                $event->image = $eventImage;
                $event->image_alt = $request['alt'];
                $request->file('image')->move(public_path() . '/images/events/240X240/', $eventImage);
                Session::flash('confLarge', 'האירוע נערך בהצלחה קובץ התמונה הוחלף');
            } else {
                $event->image = $originalEventImage;
                $event->image_alt =  $request['alt'];
                Session::flash('confLarge', 'האירוע נערך בהצלחה קובץ התמונה קיים כבר במערכת');
            }
        } else {
            $event->image = $event->image;
            $event->image_alt = $event->image_alt;
            Session::flash('confSmall', 'האירוע נערך בהצלחה');
        }
         $event->save(); 
    }
    
    
    static public function deleteEventPicture($id) {
        $event = Event::where('id', '=', $id)->first();
        if ($event->image) {
            $image = public_path() . '/images/events/' . $event->image;
            if (file_exists($image)) {
                unlink($image);
            }
        }
    }
    
    static public function getMonths(){
        $months = DB::table('months')->get();
        return ($months);
    }

}
