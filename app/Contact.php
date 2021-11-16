<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
use DB;


class Contact extends Model {
    
/******************************************************************************/    
/****************************************  Model Relationship  ****************/
    public function contacts() {
        return $this->hasMany('App\Contact');
    }

/******************************************************************************/    
/********************************  NEWSLETTER *********************************/
    
    /******************* add new recipient ********************/
    static public function add2newsLetterList($request, &$data){
        $email = $request['email'];
        $oldRecepient = DB::connection('newsletter')->table('newsletter')->where('email', $email)->get();        
        if($oldRecepient){
             Session::flash("errorLarge", "כתובת האימייל שהזנת כבר קיימת במאגר שלנו. אם אינך מקבל/ת את הניוזלטר שלנו אנא כתוב לנו דרך דף צור קשר");
             $data['redirect'] = '';
        }else{
            DB::connection('newsletter')->table('newsletter')->insert( ['email' => $email] );
            Session::flash('ThankYouLarge', 'כתובת האימייל שלך נוספה למאגר הנתונים שלנו. מעתה תקבל/י את הניוזלטר שלנו.');
            $data['redirect'] = '';
        }
        
    }
    
    /******************* get all recipients ********************/
    static public function recipientsList(&$data) {
        $allRecipients = DB::connection('newsletter')->table('newsletter')->orderBy('email', 'asc')->get();
        $data['allRecipients'] = $allRecipients;
        //dd($data['allRecipients']); 
        $data['list'] = "";
        foreach($allRecipients as $row){
            $data['list'] .= $row->email . ", ";
        }
        
    }

/******************************************************************************************************/
/**********************************  PagesController Storemail Method  *******************************/
    static public function addContactEmail($request) {
        $contactEmail = new self();
        $contactEmail->name = $request['contact_name'];
        $contactEmail->email = $request['contact_email'];
        $contactEmail->message = $request['contact_message'];
        if ($request['contact_customSubject'] == 'Review') {
            if (Session::has('user_id')) {
                $contactEmail->user_id = Session::get('user_id');
                $contactEmail->subject = 'Review';
            } else {
                Session::flash('errorSmall', 'רק הורים של ילדי הגן יכולים להשאיר חוות דעת');
                return Redirect('contact-us');
            }
        } elseif ($request['contact_customSubject'] == 'General') {
            $contactEmail->subject = $request['contact_customSubject'];
        } else {
            Session::flash('errorSmall', 'חובה לבחור נושא');
            return redirect('contact-us');
        }
        $contactEmail->save();
        Session::flash('confSmall', 'הודעתך נקלטה במערכת ונחזור אליך בקרוב');
    }

}
//    
//    static public function changePermissionsContactEmail($id, &$data) {
//        if ($contactEmail = Contact::where('id', $id)->first()) {
//            Contact::where('id', $id)->update(['ok2post' => $data['action']]);
//            Session::flash('orderConf', 'ATTENTION ! ! !   ---   Message Permissions have been modified   ---');
//        } else {
//            Session::flash('errMsg', 'Something Went Wrong NO UPDATE was made');
//        }
//    }
//    
//    static public function getPostedMessages(&$data) {
//        $data['messages'] = DB::table('contacts')
//                ->where('ok2post', 'yes')
//                ->get();
//    }
    