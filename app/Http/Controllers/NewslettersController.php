<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Session;
use App\Contact;
use App\User;


class NewslettersController extends MainController {
     
    public function index() {
        Contact::recipientsList(self::$data);
        return view('cms.newsletter', self::$data);
    
        
    }

    
    public function create() {
        
        
    }

    
    public function store(Request $request) {
        
        
    }

    
    public function show($id) {
        
        
    }

    
    public function edit($id) {
        
        
    }

    public function update(Request $request, $id) {
        
        
    }

    
    public function destroy($id) {
        
        
    }
    
}
