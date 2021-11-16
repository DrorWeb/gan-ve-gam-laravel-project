<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\SliderRequest;
use App\Http\Controllers\Controller;
use DB;
use App\Slider;
use Session;


class SlidersController extends MainController {
    
    public function index() {
        self::$data['title']='ניהול תוכן - סליידר  ';
        self::$data['slides']=Slider::all()->toArray();
        return view('cms.homeSlider', self::$data);
    }
    
    public function create() {
        return view('cms.add_homeSlider', self::$data);
    }
    
    public function store(SliderRequest $request) { 
        Slider::addSlide($request);
        return redirect('cms/homeSlider');
    }

    public function show($id) {
        self::$data['slide'] = Slider::find($id)->toArray();
        return view('cms.delete_slider', self::$data);
    }
   
    public function edit($id) {
        self::$data['slide'] = Slider::find($id)->toArray();
        return view('cms.edit_homeSlider', self::$data);
    }
    
    public function update(Request $request, $id) {
        Slider::updateSlider($request, $id);
        return redirect('cms/homeSlider');
    }
    
    public function destroy($id) {
        Slider::destroy($id);
        Session::flash('confSmall', 'השקופית נמחקה');
        return redirect('cms/homeSlider');
    }
}
