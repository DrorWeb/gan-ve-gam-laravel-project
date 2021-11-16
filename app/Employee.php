<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
use DB;

class Employee extends Model {
    
    public function employees() {
        return $this->hasMany('App\Employee');
    }
    
    static public function getAllEmployees(&$data){
        $data['crewHeadline'] = DB::table('headlines')->where('section', '=', 'צוות')->first();
        $data['employees'] = DB::table('employees')->get();
        $data['boss'] = DB::table('employees')->where('job', '=', 'גננת מוסמכת')->get();
        $data['helpers'] = DB::table('employees')->where('job', '=', 'סייעת')->get();
    }

    static public function createNewEmployee($request) {
        //$image_name = 'noimage.jpg'; 
        $employee = new self();
        $employee->color = $request['color'];
        $employee->name = $request['name'];
        $employee->job = $request['job'];
        $employee->details = $request['details'];
        $employee->fullDetails = $request['fullDetails'];
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request['image']->getClientOriginalName();
            if (!file_exists(public_path() . '/images/employees/' . $requestImage)) { // dd('file doesnt exist',$request['image']->getClientOriginalName());          // checked V
                $new_image_name = str_random(3) . date('y.m.d.H.i.s') . str_random(3) . '.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->move(public_path() . '/images/employees/', $new_image_name);
                $employee->image = $new_image_name; // dd($slide->image, 'doesnt exist');         // checked V
            } else {
                $employee->image = $requestImage; // dd($slide->image, 'file exist');       // checked V
            }
        } // else {$employee->image = $old_image;  dd($slide->image, 'stays the same');              checked V       }
        $employee->alt = $request['alt'];   // dd($employee);
        $employee->save();
        Session::flash('confSmall', 'איש הצוות נוצר בהצלחה');
    }

    static public function updateEmployee($request, $id) {
        $employee = Employee::where('id', '=', $id)->first();
        $old_image=$employee['image'];
        $employee->color = $request['color'];
        $employee->name = $request['name'];
        $employee->job = $employee['job'];
        $employee->details = $request['details'];
        $employee->fullDetails = $request['fullDetails'];
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request['image']->getClientOriginalName();
            if (!file_exists(public_path() . '/images/employees/' . $requestImage)) {
// dd('file doesnt exist',$request['image']->getClientOriginalName());          // checked V
                $new_image_name = str_random(3) . date('y.m.d.H.i.s') . str_random(3) . '.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->move(public_path() . '/images/employees/', $new_image_name);
                $employee->image = $new_image_name;
// dd($slide->image, 'doesnt exist');                                           // checked V
            } else {
                $employee->image = $requestImage;
// dd($slide->image, 'file exist');                                             // checked V
            }
        } else {
            $employee->image = $old_image;
// dd($slide->image, 'stays the same');                                         // checked V
        }
        
        $employee->alt = $request['alt'];
       // dd($employee);
        $employee->save();
        Session::flash('confSmall', 'הפרטים עודכו בהצלחה');
    }
    
    
    
    

    

}
