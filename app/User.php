<?php  namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
use DB;
use Hash;


class User extends Model {
/******************************************************************************************************/
/****************************  USER VALIDATION AND SESSION SET  ***************************************/

    static public function validateUser($email, $pwd) {
        $valid = false;
        $sql = "SELECT * FROM users u "
                . "JOIN users_role r ON u.id = r.uid "
                . "WHERE u.email = ?";
        if ($user = DB::select($sql, [$email])) {
            $user = $user[0];
         //   dd($user);
            if (Hash::check($pwd, $user->password)) {
                $valid = true;
                if ($user->rid == 3) {
                    Session::set('is_admin', true);
                }
                
                Session::set('user_id', $user->id);
                Session::set('user_name', $user->firstName);
            }
        }
        //dd($valid);
         return $valid;
    }


    
    
    
/******************************************************************************************************/
/*******************************  CREATE USER BY ADMIN  ***********************************************/

    static public function createUser($request) {
        $user = new self();
        $user->firstName = $request['firstName'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        if($request['role'] == 3){ 
          $user->permitions ='אדמין';
        }elseif($request['role'] == 4){
            $user->permitions ='משתמש רגיל';
        }else{
            $user->permitions ='משתמש לא הוגדר כהלכה';
        }
        
        $user->getNewsletters = 1;
        $user->save();
        $new_id = $user->id;
        if($request['role'] == 3){
          $sql = "INSERT INTO users_role VALUES($new_id, 3)";  
          $user->permitions ='אדמין';
        }elseif($request['role'] == 4){
          $sql = "INSERT INTO users_role VALUES($new_id, 4)";
            $user->permitions ='משתמש רגיל';
        }
        DB::insert($sql);
        Session::flash('confSmall', 'המשתמש נוסף בהצלחה');
    }

/******************************************************************************************************/
/******************************************  USER UPDATE BY ADMIN *************************************/

    static public function updateUser($request, $id) {
        
        $user = User::find($id);
        $user->firstName = $request['firstName'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->getNewsletters =$request['getNewsletters'];
        $user->save();
        Session::flash('confSmall', 'המשתמש עודכן בהצלחה');
    }

/******************************************************************************************************/
/**************************************  Getting The User Name By ID  *********************************/

    static public function getUserName($id, &$data) {
        $data['user'] = [];
        if ($user = User::where('id', '=', $id)->first()) {
            $data['user'] = $user->toArray();
        }
    }
   
/******************************************************************************************************/
/**************************************  Deletes User Role By ID  *************************************/    
    static public function deletePermissions($id){
        DB::table('users_role')->where('uid' , $id)->delete();
        
    }

/******************************************************************************************************/
/*************************************  USER UPDATE BY USERS ******************************************/    
static public function updateUserByUser($request) {
        $id = $request->user_id;
        $message = 'הפרטים נשמרו בהצלחה לא הוחלפה סיסמה';
        $user = User::find($id);
        $myPass = $user->password;
        $user->firstName = $request['firstName'];
        $user->email = $request['email'];
        if ($request['oldPassword']) {
            if (Hash::check($request->oldPassword, $user->password)) {
                if ($request->newPassword === $request->reNewPassword) {
                    $myPass = bcrypt($request['reNewPassword']);
                    $message = 'הפרטים נשמרו בהצלחה';
                } else {
                    $message = 'הסיסמאות החדשות שהזנת לא זהות';
                }
            } else {
                $message = 'הסיסמה הישנה שהזנת לא תואמת את הנתונים שיש לנו';
            }
            $user->password = $myPass;
        }

        $user->password = $myPass;
        $user->getNewsletters = $request->getNewsletters;
        $user->save();
        Session::set('user_name', $user->firstName);
        Session::flash('confSmall', $message);
    }

}