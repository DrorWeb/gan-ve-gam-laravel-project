<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class Testamonials extends Model {
    
    
/***********************  get all testamonials ********************************/
    static public function getTestamonials(&$data) {
        $data['testamonialsHeadline'] = DB::table('headlines')->where('section', '=', 'עדויות')->first();
        $data['testamonials'] = DB::table('testamonials')->get();
        //  dd( $data['testamonialsHeadline']);
    }

    static public function addTestamonial($request) {
        // dd($request);

        $testamonial = new self();
        $testamonial->name = $request['name'];
        $testamonial->details = $request['details'];
        $testamonial->homeDisplay = $request['homeDisplay'];
        // dd($testamonial);
        $testamonial->save();
    }

    static public function getTestamonial($id, &$data) {
        $data['testamonial'] = DB::table('testamonials')->where('id', $id)->first();
        //  dd(  $data['testamonial']);
    }

    static public function updateTestamonial($request) {
        //dd($request);
        $testamonial = Testamonials::where('id', '=', $request->id)->first();
        //dd($testamonial);


        $testamonial->name = $request['name'];
        $testamonial->details = $request['details'];

        $testamonial->homeDisplay = $request['homeDisplay'];
        // dd($testamonial);
        $testamonial->save();
        Session::flash('confSmall', 'הפרטים עודכו בהצלחה');
    }

    
    static public function deleteTestamonial($id){
        DB::table('testamonials')->where('id' , $id)->delete();
        Session::flash('confSmall', 'חוות הדעת נמחקה בהצלחה');
    }
}
    
    

