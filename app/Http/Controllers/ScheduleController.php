<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Schedule;
use Session;


class ScheduleController extends MainController {
    
    function __construct() {
        parent::__construct();
        $this->middleware('adminSigned');
        self::$data['title'] = 'מערכת ניהול תוכן - גן וגם ';
    }

    public function index() {
        self::$data['title'] = 'לו"ז הגן';
        self::$data['scheduleItems'] = Schedule::all()->sortBy('time')->toArray();
        return view('cms.ourSchedule', self::$data);
    }

    public function create() {
        return view('cms.add_schedule', self::$data);
    }

    public function store(Request $request) {
        Schedule::createNewSchedule($request, self::$data);
        return redirect('cms/schedule');
    }

    public function show($id) {
        self::$data['schedule'] = Schedule::where('id', $id)->first();
        return view('cms.delete_schedule', self::$data);
    }

    public function edit($id) {
        self::$data['schedule'] = Schedule::where('id', $id)->first();
        return view('cms.edit_schedule', self::$data);
    }

    public function update(Request $request, $id) {
        Schedule::updateSchedule($request, $id);
        return redirect('cms/schedule');
    }

    public function destroy($id) {
        Schedule::destroy($id);
        Session::flash('confSmall', 'השורה נמחקה');
        return redirect('cms/schedule');
    }

}