<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\EmployeeRequest;
use App\Http\Controllers\Controller;
use Session;
use App\Employee;

class EmployeesController extends MainController {
    
    function __construct() {
        parent::__construct();
        $this->middleware('adminSigned');
    }

    public function index() {
        self::$data['title'] = 'צוות - עריכה';
        self::$data['employees'] = Employee::all()->toArray();
        return view('cms.employees', self::$data);
    }

    public function create() {
        //echo __METHOD__; die();
        return view('cms.add_employee', self::$data);
    }

    public function store(EmployeeRequest $request) {
        //echo __METHOD__; die();
        Employee::createNewEmployee($request);
        return redirect('cms/employees');
    }

    public function show($id) {
        self::$data['employee'] = Employee::where('id', $id)->first();
        return view('cms.delete_employee', self::$data);
    }

    public function edit($id) {
         self::$data['employee'] = Employee::where('id', $id)->first();
         return view('cms.edit_employee', self::$data);
    }

    public function update(EmployeeRequest $request, $id) {
      //  echo __METHOD__; die();
       Employee::updateEmployee($request, $id);
       return redirect('cms/employees');
    }

    public function destroy($id) {
        Employee::destroy($id);
        Session::flash('confSmall', 'נמחק בהצלחה');
        return redirect('cms/employees');
    }

}
