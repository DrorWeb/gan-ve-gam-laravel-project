<?php  namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Menu;
use DB;
use App\Content;



class MainController extends Controller {
    
    static public $data = [
        'title' => 'גן וגם - להורים שרוצים יותר', 
        'appUrl' => 'http://localhost/ganvegamnew/public/', 
        'appStorage' =>'http://localhost/ganvegamnew/',
        'keywords'=>'', 
        'ourEmailAddress'=>''
         
        ];
       
    function __construct() {
       // phpinfo(); exit;
        //all menus for cms\menu
        self::$data['allmenus'] = Menu::all()->toArray();
     //   dd(self::$data['allmenus']);
        $menus = Menu::all()->toArray();
        self::$data['menus'] = Menu::buildMyMenu($menus, $parentId = 0);
    //    dd(self::$data['menus']);
        
        self::$data['lastPosts'] = DB::table('posts')->orderBy('created_at', 'desc')->take(3)->get(); 
        
      
    }

}
