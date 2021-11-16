<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class Site extends Model {
    
/*******************************************************************************    
***********************************  prices ************************************
*******************************************************************************/ 
    /****   get all prices for cms ****/
    static public function getPrices(&$data){
        $data['prices'] = DB::table('prices')->get();
    }
    
    /******* get price card *******/
    static public function getPrice($id, &$data){
        $data['price'] = DB::table('prices')->where('id', $id)->first();        
    }
    /****** edit price card ******/
    static public function updatePrice($request){
        if (DB::table('prices')->where('id', $request['price_id'])->first()) {
            DB::table('prices')->where('id', $request['price_id'])->update(
                    [
                        'myOrder' => $request['myOrder'],
                        'title' => $request['title'],
                        'image' => $request['image'],
                        'icon1' => $request['icon1'],
                        'detail1' => $request['detail1'],
                        'icon2' => $request['icon2'],
                        'detail2' => $request['detail2'],
                        'icon3' => $request['icon3'],
                        'detail3' => $request['detail3'],
                        'icon4' => $request['icon4'],
                        'detail4' => $request['detail4'],
                        'price' => $request['price']
                    
                    ]);
            Session::flash('confSmall', 'העדכון עבר בהצלחה');
        }else{
            Session::flash('confSmall', 'העדכון נכשל');
        }
    }
    
/*******************************************************************************    
*******************************  facts section *********************************
*******************************************************************************/
    static public function getFacts(&$data) {
        $data['factsHeadline'] = DB::table('headlines')->where('section', '=', 'עובדות')->first();
        $data['facts'] = DB::table('facts')->get();
    }
    
    static public function updateFact($request){
        if (DB::table('facts')->where('id', $request['fact_id'])->first()) {
            DB::table('facts')->where('id', $request['fact_id'])->update(
                    ['number' => $request['number'],
                        'title' => $request['title']]);
            Session::flash('confSmall', 'עדכון העובדה עבר בהצלחה');
        }else{
            Session::flash('confSmall', 'עדכון העובדה נכשל');
        }
    }
    
/*******************************************************************************    
*********************************  Headlines ***********************************
*******************************************************************************/
    
    static public function getHeadline($id, &$data){
        $data['headline'] = DB::table('headlines')->where('id', $id)->first();
    }
    
    static public function updateHeadline($request){        
        if (DB::table('headlines')->where('id', $request['headline_id'])->first()) {
            DB::table('headlines')->where('id', $request['headline_id'])->update(
                    ['headline' => $request['headline']]);
            Session::flash('confSmall', 'עדכון הכותרת עבר בהצלחה');
        }else{
            Session::flash('confSmall', 'עדכון הכותרת נכשל');
        }
    }
    
/*******************************************************************************    
*********************************  Colors **************************************
*******************************************************************************/
    static public function getIconsAndColors(&$data){
        $data['icons'] = DB::table('fa')->get();
        $data['colors'] = DB::table('colors')->get();
    }
    
/*******************************************************************************    
******************************   Services   ************************************
*******************************************************************************/
    static public function getService($id, &$data){
      $data['service'] = DB::table('services')->where('id', $id)->first(); 
        
    }
    
    /****** edit price card ******/
    static public function updateService($request) {
        if (DB::table('services')->where('id', $request['service_id'])->first()) {
            DB::table('services')->where('id', $request['service_id'])->update(
                    [
                        'icon' => $request['icon'],
                        'כותרת' => $request['כותרת'],
                        'תקציר' => $request['תקציר'],
            ]);
            Session::flash('confSmall', 'העדכון עבר בהצלחה');
        } else {
            Session::flash('confSmall', 'העדכון נכשל');
        }
    }

/*******************************************************************************    
*********************************   About   ************************************    
*******************************************************************************/
    static public function updateAbout($request) {
        if (DB::table('about')->where('id', $request['about_id'])->first()) {
            DB::table('about')->where('id', $request['about_id'])->update(
                    [
                        'title' => $request['title'],
                        'article' => $request['article'],
                        'image' => $request['image'],
                        'image_alt' => $request['image_alt'],
            ]);
            Session::flash('confSmall', 'העדכון עבר בהצלחה');
        } else {
            Session::flash('confSmall', 'העדכון נכשל');
        }
    }

    static public function updateAboutPic($request) {
        if (DB::table('about')->where('location', 'image')->first()) {
            if ($request->hasFile('thumbnail') && $request->file('thumbnail')->isValid()) {
                $thumbnail = $request->file('thumbnail')->getClientOriginalName();
                if (!file_exists(public_path() . '/images/' . $thumbnail)) {
                    $thumbnail = date('y-m-d') . '-' . str_random(6) . '.' . $request->file('thumbnail')->getClientOriginalExtension();
                    $request->file('thumbnail')->move(public_path() . '/images/', $thumbnail);
                    DB::table('about')->where('location', 'image')->update(['image' => $thumbnail]);
                } else {
                    DB::table('about')->where('location', 'image')->update(['image' => $thumbnail]);
                }
            }
        }
    }

    static public function updateCapabilityHeadline($request) {
        if (DB::table('about')->where('location', 'capabilityTitle')->first()) {
            DB::table('about')->where('location', 'capabilityTitle')->update(
                    ['title' => $request['title']]);
        }
    }

/*******************************************************************************
************************   OFFERS   גנון פעוטון צהרון***************************
*******************************************************************************/
    
static public function updateOffer($request) {
        if (DB::table('offers')->where('id', $request['offer_id'])->first()) {
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $image = $request->file('image')->getClientOriginalName();
                if (!file_exists(public_path() . '/images/' . $image)) {
                    $image = date('y-m-d') . '-' . str_random(6) . '.' . $request->file('image')->getClientOriginalExtension();
                    $request->file('image')->move(public_path() . '/images/', $image);
                }
            } else {
                $image = $request['ogImg'];
            }
            DB::table('offers')->where('id', $request['offer_id'])->update(
                    [
                        'headline' => $request['headline'],
                        'description' => $request['description'],
                        'image' => $image,
                        'image_alt' => $request['image_alt']
            ]);
            Session::flash('confSmall', 'העדכון עבר בהצלחה');
        }
    }

    static public function addOfferThumbs($id, &$data) {
        $data['offer'] = DB::table('offers')->where('id', $id)->first();
        $existingThumbs = DB::table('offers_thumbs')->where('offer_id', $id)->get();
        $data['existingThumbs'] = count($existingThumbs);
        $data['thumbsNeeded'] = 6 - count($existingThumbs);
    }

    static public function storeOfferThumbnails($request, &$data) {
        if ($request->hasFile('image1') && $request->file('image1')->isValid()) {
            $image1 = $request->file('image1')->getClientOriginalName();
            if (!file_exists(public_path() . '/images/servicesThumbs/' . $image1)) {
                $image1 = date('y-m-d') . '-' . str_random(6) . '.' . $request->file('image1')->getClientOriginalExtension();
                $request->file('image1')->move(public_path() . '/images/servicesThumbs/', $image1);
            }
            DB::table('offers_thumbs')->insert(['offer_id' => $request['offer_id'], 'image' => $image1, 'image_alt' => $request['image_alt1'], 'title' => $request['title1']]);
        }

        if ($request->hasFile('image2') && $request->file('image2')->isValid()) {
            $image2 = $request->file('image2')->getClientOriginalName();
            if (!file_exists(public_path() . '/images/servicesThumbs/' . $image2)) {
                $image2 = date('y-m-d') . '-' . str_random(6) . '.' . $request->file('image2')->getClientOriginalExtension();
                $request->file('image2')->move(public_path() . '/images/servicesThumbs/', $image2);
            }
            DB::table('offers_thumbs')->insert(['offer_id' => $request['offer_id'], 'image' => $image2, 'image_alt' => $request['image_alt2'], 'title' => $request['title2']]);
        }

        if ($request->hasFile('image3') && $request->file('image3')->isValid()) {
            $image3 = $request->file('image3')->getClientOriginalName();
            if (!file_exists(public_path() . '/images/servicesThumbs/' . $image3)) {
                $image3 = date('y-m-d') . '-' . str_random(6) . '.' . $request->file('image3')->getClientOriginalExtension();
                $request->file('image3')->move(public_path() . '/images/servicesThumbs/', $image3);
            }
            DB::table('offers_thumbs')->insert(['offer_id' => $request['offer_id'], 'image' => $image3, 'image_alt' => $request['image_alt3'], 'title' => $request['title3']]);
        }

        if ($request->hasFile('image4') && $request->file('image4')->isValid()) {
            $image4 = $request->file('image4')->getClientOriginalName();
            if (!file_exists(public_path() . '/images/servicesThumbs/' . $image4)) {
                $image4 = date('y-m-d') . '-' . str_random(6) . '.' . $request->file('image4')->getClientOriginalExtension();
                $request->file('image4')->move(public_path() . '/images/servicesThumbs/', $image4);
            }
            DB::table('offers_thumbs')->insert(['offer_id' => $request['offer_id'], 'image' => $image4, 'image_alt' => $request['image_alt4'], 'title' => $request['title4']]);
        }

        if ($request->hasFile('image5') && $request->file('image5')->isValid()) {
            $image5 = $request->file('image5')->getClientOriginalName();
            if (!file_exists(public_path() . '/images/servicesThumbs/' . $image5)) {
                $image5 = date('y-m-d') . '-' . str_random(6) . '.' . $request->file('image3')->getClientOriginalExtension();
                $request->file('image5')->move(public_path() . '/images/servicesThumbs/', $image5);
            }
            DB::table('offers_thumbs')->insert(['offer_id' => $request['offer_id'], 'image' => $image5, 'image_alt' => $request['image_alt5'], 'title' => $request['title5']]);
        }

        if ($request->hasFile('image6') && $request->file('image6')->isValid()) {
            $image6 = $request->file('image6')->getClientOriginalName();
            if (!file_exists(public_path() . '/images/servicesThumbs/' . $image6)) {
                $image6 = date('y-m-d') . '-' . str_random(6) . '.' . $request->file('image6')->getClientOriginalExtension();
                $request->file('image6')->move(public_path() . '/images/servicesThumbs/', $image3);
            }
            DB::table('offers_thumbs')->insert(['offer_id' => $request['offer_id'], 'image' => $image6, 'image_alt' => $request['image_alt6'], 'title' => $request['title6']]);
        }
    }

}    
//END OF MODEL