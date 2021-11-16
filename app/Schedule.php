<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;


class Schedule extends Model {
    static public function createNewSchedule($request, &$data) {
        //dd($request);
        $schedule = new self();
        $schedule->time = $request['time'];
        $schedule->title = $request['title'];
        $schedule->description = $request['description'];
        $schedule->save();
                
    }
    static public function updateSchedule($request, $id) {
        //  dd($request);
        $schedule = Schedule::where('id', '=', $id)->first();
        $schedule->time = $request['time'];
        $schedule->title = $request['title'];
        $schedule->description = $request['description'];
        $schedule->save();
    }
    
}
