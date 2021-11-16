<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\CategorieRequest;
use DB;

class Service extends Model {

/*******************************************************************************/    
/*******************************  Model Relationship  *************************/    
    public function services() {
        return $this->hasMany('App\Service');
    }

    
/******************************************************************************/    
/************************************  our Services  **************************/    
    
    static public function getServices(&$data)  {
        $data['services'] = DB::table('services')->get();
        $data['servicesHeadline'] = DB::table('headlines')->where('section', '=', 'שירותים')->first();
        $data['servicesRight'] = Service::where('צד', '=', 'ימין')->get();
        $data['servicesLeft'] = Service::where('צד', '=', 'שמאל')->get()->toArray();
    }
 
    
/******************************************************************************/   
/********************************  OFFERS   ***********************************/    
static public function getOffers($id, &$data)   {
        $thisService = DB::table('offers')->where('id', $id)->first();
        $data['thisService'] = $thisService;
        $thumbs = DB::table('offers_thumbs')
                ->where('offer_id', $thisService->id)
                ->get();
        $data['thumbs'] = $thumbs;
    }

}

   