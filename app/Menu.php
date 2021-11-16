<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
use DB;

class Menu extends Model {

    static public function buildMyMenu($menus, $parentId = 0) {
        $myMenuTree = [];
        foreach ($menus as $menu) {
            if ($menu['parent_id'] == $parentId) {
                $children = Menu::buildMyMenu($menus, $menu['id']);
                if ($children) {
                    $menu['children'] = $children;
                } else {
                    $menu['children'] = [];
                }
                $myMenuTree[] = $menu;
            }
        }
        return $myMenuTree;
    }

    static public function addMenu($request) {
        $menu = new self();
        $menu->parent_id = $request['parent_id'];
        $menu->link = $request['link'];
        $menu->url = $request['url'];
        $menu->icon = $request['icon'];
        if($request['color']) {
            $menu->iconColor = $request['color'];
        }
        
        $menu->save();
        Session::flash('confSmall', 'התפריט החדש נוסף לאתר');
    }

    static public function updateMenu($request, $id) {
        $menu = Menu::find($id);
        $menu->parent_id = $request['parent_id'];
        $menu->link = $request['link'];
        $menu->url = $request['url'];
        $menu->save();
        Session::flash('confSmall', 'התפריט נערך בהצלחה');
    }

    static public function getName($id, &$data) {
        $data['menuName'] = [];
        if ($menuName = Menu::where('id', '=', $id)->first()) {
            $data['menuName'] = $menuName->toArray();
        }
    }

    static public function getMenuOrdered(&$data, $id) {
        $sql = "SELECT * FROM menus ORDER BY CASE WHEN id = ? THEN 0 ELSE id END";
        $data['menu'] = DB::select($sql, [$id]);
    }

    static public function getMenusOrdered(&$data, $id) {
        if ($id) {
            $sql = "SELECT * FROM menus ORDER BY CASE WHEN id = ? THEN 0 ELSE id END";
            $data['menus'] = DB::select($sql, [$id]);
            //dd($data['menus']);
        }
    }

}
