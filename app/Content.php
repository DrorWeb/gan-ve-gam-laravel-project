<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\Schedule;

class Content extends Model {

    static public function getAbout(&$data) {
        if ($about1 = DB::table('about')->where('location', 'about1')->first()) {
            $data['about1'] = $about1;
        }
        if ($about2 = DB::table('about')->where('location', 'about2')->first()) {
            $data['about2'] = $about2;
        }
        if ($about3 = DB::table('about')->where('location', 'about3')->first()) {
            $data['about3'] = $about3;
        }
        if ($about4 = DB::table('about')->where('location', 'about4')->first()) {
            $data['about4'] = $about4;
        }
        if ($capabilitiesHeadline = DB::table('about')->where('location', 'capabilityTitle')->first()) {
            $data['capabilitiesHeadline'] = $capabilitiesHeadline;
        }
        if ($capabilities = DB::table('about')->where('location', 'capability')->get()) {
            $data['capabilities'] = $capabilities;
        }
    }

    static public function getHomeSlider(&$data) {
        if ($homeSlider = DB::table('sliders')->get()) {
            $data['homeSlider'] = $homeSlider;
        }else{
             $data['homeSlider'] = '';
        }
    }

    static public function getPrices(&$data) {
        $data['pricesHeadline'] = DB::table('headlines')->where('section', '=', 'מחירון')->first();
        if ($prices = DB::table('prices')->orderby('myOrder', 'asc')->get()) {
            $data['prices'] = $prices;
        }
    }

    static public function getSchedule(&$data) {
        $data['scheduleHeadline'] = DB::table('headlines')->where('section', '=', 'לוז')->first();
        $schedule = schedule::all()->sortBy('time');
        $data['schedule'] = $schedule;
    }

    static public function getKeywords(&$data) {
        $data['keywords'] = '';
        $keywords = DB::table('keywords')->where('url', $data['url'])->get();
        foreach ($keywords as $row) {
            $data['keywords'] .= $row->keyword . ',';
        }
    }

}