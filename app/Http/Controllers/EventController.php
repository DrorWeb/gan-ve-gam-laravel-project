<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MainController;
use App\Event;
use Session;


class EventController extends MainController {

    function __construct() {
        parent::__construct();
        $this->middleware('adminSigned');
        self::$data['title'] = 'ניהול תוכן - אירועים';
    }

    public function index() {
        self::$data['events'] = Event::all()->sortBy('day')->toArray();
        return view('cms.events', self::$data);
    }

    public function create() {
        return view('cms.add_event', self::$data);
    }

    public function store(Request $request) {
        Event::createNewEvent($request, self::$data);
        return redirect('cms/events');
    }

    public function show($id) {
        self::$data['event'] = Event::find($id)->toArray();
        return view('cms.delete_event', self::$data);
    }

    public function edit($id) {
        self::$data['months'] = Event::getMonths();
        self::$data['event'] = Event::find($id)->toArray();
        return view('cms.edit_event', self::$data);
    }

    public function update(Request $request, $id) {
        Event::updateEvent($request, $id);
        return redirect('cms/events');
    }

    public function destroy($id) {
        Event::deleteEventPicture($id);
        Event::destroy($id);
        Session::flash('confSmall', 'האירוע נמחק');
        return redirect('cms/events');
    }

}
