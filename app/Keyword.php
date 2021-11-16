<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;


class Keyword extends Model {
    
    
    static public function addKeyword($request) {
        DB::table('keywords')->insert([
            'page' => $request->page, 
            'url' => $request->url,
             'keyword' => $request->keyword
        ]
);
    }
}
