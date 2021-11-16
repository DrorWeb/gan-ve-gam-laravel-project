<?php  namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\FactsRequest;
use App\Http\Requests\HeadlineRequest;
use App\Http\Controllers\Controller;
use DB;
use App\Contact;
use App\Content;
use App\Site;
use App\Testamonials;
use App\Picture;

class CmsController extends MainController {
    
    function __construct() {
        parent::__construct();
        $this->middleware('adminSigned');
        self::$data['title'] = 'מערכת ניהול תוכן - גן וגם ';
    }
    
/*******************************************************************************
***************************     DASHBOARD      *********************************
*******************************************************************************/    

    public function getDashboard(){
      return view('cms.dashboard', self::$data);     
    }
    
/*******************************************************************************
***************************        FACTS       *********************************
*******************************************************************************/
    
    public function facts(){
        Site::getFacts(self::$data);
        return view('cms.facts', self::$data);
    }
    
    public function showFact($id){
        self::$data['fact'] = DB::table('facts')->where('id', $id)->first();
        return view('cms.edit_fact', self::$data);
    }
    
    public function updateFact(FactsRequest $request){
        Site::updateFact($request);
        return redirect('cms/facts');
    }
    
/*******************************************************************************
***************************        HEADLINES       *****************************
*******************************************************************************/    
    
    public function getHeadlines(){
        self::$data['title']='כותרות בדף הבית';
        self::$data['allHeadlines'] = DB::table('headlines')->get();
        return view('cms.headlines', self::$data);
    }
    public function showHeadline($id){
        Site::getHeadline($id, self::$data);
        return view('cms.edit_headlines', self::$data);
    }
    public function updateHeadline(HeadlineRequest $request){
        Site::updateHeadline($request);
        return redirect('cms/headlines');
    }
  
/*******************************************************************************
***************************        SERVICES       *****************************
*******************************************************************************/    
    
    public function getServices(){
        self::$data['title']='השירות שלנו';
        self::$data['allServices'] = DB::table('services')->get();
        return view('cms.services', self::$data);
    }
    public function showServices($id){
        Site::getService($id, self::$data);
        return view('cms.edit_services', self::$data);
    }
    public function updateServices(Request $request){
        Site::updateService($request);
        return redirect('cms/services');
    }
    

/*******************************************************************************
***************************        TESTAMONIALS       **************************
*******************************************************************************/   
     public function getTestamonials(){
        self::$data['title']='חוות דעת';
        self::$data['testamonials'] = DB::table('testamonials')
                ->orderBy('id', 'desc')
                ->get();
        return view('cms.testamonials', self::$data);
    }
    public function getTestamonialById($id){
        Testamonials::getTestamonial($id, self::$data);
        return view('cms.edit_testamonials', self::$data);
    }
    public function createTestamonial(){
        self::$data['title']='חוות דעת';
        return view('cms.add_testamonial', self::$data);
    }
    public function storeTestamonial(Request $request){
        Testamonials::addTestamonial($request);
        return redirect('cms/testamonials');
    }
    public function showTestamonial($id){
        Testamonials::getTestamonial($id, self::$data);
        return view('cms.delete_testamonial', self::$data);
    }
    public function deleteTestamonial($id){
        Testamonials::deleteTestamonial($id);
        return redirect('cms/testamonials');
    }
    public function updateTestamonial(Request $request){
        Testamonials::updateTestamonial($request);
        return redirect('cms/testamonials');
    }
    
    
    
    
/*******************************************************************************
*****************************        PRICES       ******************************
*******************************************************************************/    
    
    public function getPrices(){
        self::$data['title']='מחירון';
        self::$data['prices'] = DB::table('prices')->get();
        return view('cms.prices', self::$data);
    }
    public function showPrice($id){
        Site::getPrice($id, self::$data);
        return view('cms.edit_price', self::$data);
    }
    public function updatePrice(Request $request){
        Site::updatePrice($request);
        return redirect('cms/prices');
    }    
    
    
    
/*******************************************************************************
***************************        ABOUT PAGE     ******************************
*******************************************************************************/    
    
    public function getAbout(){
        self::$data['about'] = DB::table('about')->where('id', '<=' , 4)->get();
        self::$data['capabilities'] = DB::table('about')->whereBetween('id', [5, 8])->get();
        self::$data['capabilitiesHeadline'] = DB::table('about')->where('location', '=', 'capabilityTitle')->first();
        self::$data['aboutPic'] = DB::table('about')->where('location', 'image')->first();
        return view('cms.about', self::$data);
    }
    public function editAbout($id){
        self::$data['about2edit'] = DB::table('about')->where('id', $id)->first();
        self::$data['aboutPic'] = DB::table('about')->where('location', 'image')->first();
        return view('cms.edit_about', self::$data);
    }
    public function updateAbout(Request $request){
        Site::updateAbout($request);
        return redirect('cms/about');
    }
    public function editAboutPic(){
        self::$data['aboutPic'] = DB::table('about')->where('location', 'image')->first();
        return view('cms.aboutPicEdit', self::$data);
    }
    public function updateAboutPic(Request $request){
        Site::updateAboutPic($request);
        return redirect('cms/about');
    }
    
    public function editCapabilityHeadline(){
        self::$data['capabilityHeadline'] = DB::table('about')->where('location', 'capabilityTitle')->first();
        return view('cms.aboutCapEdit', self::$data);
    }
    
    public function updateCapabilityHeadline(Request $request){
        Site::updateCapabilityHeadline($request);
        return redirect('cms/about');
    }


/*******************************************************************************
***************************        MESSAGES       ******************************
*******************************************************************************/ 
    
    /*******  Selects all messages from DB to display in cms  *****************/     
    public function messages(){
        self::$data['title'] = 'My Messages';
        self::$data['messages'] = DB::table('contacts')
                ->orderBy('id', 'desc')
                ->get();
        return view('cms.myMessages', self::$data);
    }
    /*******  changes permissions on incoming mails to post on website  *******/     
    public function changePermissions($id, $action) {
        if ($action == 'post') {
            self::$data['action'] = 'כן';
            Contact::changePermissionsContactEmail($id, self::$data);
            return redirect('cms/messages');
        } elseif ($action == 'remove') {
            self::$data['action'] = 'לא';
            Contact::changePermissionsContactEmail($id, self::$data);
            return redirect('cms/messages');
        } else {
            return view('cms.myMessages', self::$data);
        }
    }
    
    public function deleteMessage($id){
       DB::table('contacts')->where('id',$id)->delete();
       return redirect('cms/messages');
    }
    
/*******************************************************************************
**********************      WE OFFER      גנון פעוטון צהרון*********************
*******************************************************************************/    
    public function getOffers(){
        self::$data['offers'] = DB::table('offers')->get();
        $thumbs = DB::table('offers_thumbs')->get();         
        self::$data['thumbs']=$thumbs;
        return view('cms.offers', self::$data);
    }
    
    public function editOffer($id){
        $offer = DB::table('offers')->where('id', $id)->first();
        $thumbs = DB::table('offers_thumbs')->where('offer_id', $id)->get();
        self::$data['thumbs'] = $thumbs; 
        self::$data['offer'] = $offer;
        self::$data['existingThumbs'] = count($thumbs);
        return view('cms.edit_offer', self::$data);
    }
    
    public function deleteOfferThumbnailById($id){
       $pic = DB::table('offers_thumbs')->where('id', $id)->first();
       $cat_id = DB::table('offers')->where('id', $pic->offer_id)->first();
            $picture = public_path() . '/images/servicesThumbs/' . $pic->image;
            DB::table('offers_thumbs')->where('id', $id)->delete();
            return redirect('cms/offer/' . $cat_id->id . '/edit');
    }
    public function updateOffer(Request $request){
        Site::updateOffer($request);
        return redirect('cms/offers');
    }
    
    public function addOfferThumbs($id) {
        Site::addOfferThumbs($id, self::$data);
        return view('cms.add_offer_thumbs', self::$data);
    }
    
    public function storeOfferThumbs(Request $request){
      Site::storeOfferThumbnails($request, self::$data);  
      return redirect('cms/offer/' . $request['offer_id'] . '/edit');  
    }
    public function deleteOfferImage($id){
      DB::table('offers')->where('id', $id)->update(
                    [
                        'image' => '',
                        'image_alt' => ''
            ]); 
      return redirect('cms/offer/' . $id . '/edit');
    }
    
}







//  public function mailingList() {
//        self::$data['title'] = 'Newsletters';
//        Contact::recipientsList(self::$data);
//        return view('cms.newsletter', self::$data);
//    }