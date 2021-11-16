<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;



class Slider extends Model {
    static public function addSlide($request){
        $image_name = '';
        $slide = new self();
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $newExistingImage = $request['image']->getClientOriginalName();
            if (!file_exists(public_path() . '/images/sliders/' . $newExistingImage)) {
// dd('file doesnt exist',$request['image']->getClientOriginalName());          // checked V
                $new_image_name = str_random(3) . date('y.m.d.H.i.s') . str_random(3) . '.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->move(public_path() . '/images/sliders/', $new_image_name);
                $slide->image = $new_image_name;
 //dd($slide->image, 'doesnt exist');                                           // checked V
            } else {
                $slide->image = $newExistingImage;
 //dd($slide->image, 'file exist');                                             // checked V
            }
            }
        
        $slide->title = $request['title'];
        $slide->description = $request['description'];
        $slide->save();
        Session::flash('confSmall', 'שקופית חדשה נוצרה בהצלחה');
    }
    
    
    static public function updateSlider($request, $id) {
        $slide = Slider::find($id);
// dd($slide);                                                                  // checked V
        $old_image = $slide->image;
// dd($old_image);                                                              // checked V
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $newExistingImage = $request['image']->getClientOriginalName();
            if (!file_exists(public_path() . '/images/sliders/' . $newExistingImage)) {
// dd('file doesnt exist',$request['image']->getClientOriginalName());          // checked V
                $new_image_name = str_random(3) . date('y.m.d.H.i.s') . str_random(3) . '.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->move(public_path() . '/images/sliders/', $new_image_name);
                $slide->image = $new_image_name;
// dd($slide->image, 'doesnt exist');                                           // checked V
            } else {
                $slide->image = $newExistingImage;
// dd($slide->image, 'file exist');                                             // checked V
            }
        } else {
            $slide->image = $old_image;
// dd($slide->image, 'stays the same');                                         // checked V
        }
        $slide->title = $request['title'];
        $slide->Description = $request['description'];
//  dd($slide);                                                                 // checked V
        $slide->save();
        Session::flash('confSmall', 'השקופית נערכה בהצלחה');
    }

}
