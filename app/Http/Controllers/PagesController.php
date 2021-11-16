<?php  namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\NewsletterRequest;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MainController;
use DB;
use Session;
use App\Service;
use App\Employee;
use App\Site;
use App\Testamonials;
use App\Event;
use App\Album;
use App\Picture;
use App\Entertainment;
use App\Contact;
use App\Content;
use App\Slider;
use App\Post;







class PagesController extends MainController {
    
/*******************************************************************************
***********************    HOMEPAGE ALL MODULES   ****************************** 
*******************************************************************************/
    
    
/************* Build Home Page ***********/
    public function index() {
        self::$data['url']='home';
        Content::getKeywords(self::$data);
        Service::getServices(self::$data);
        Employee::getAllEmployees(self::$data);
        Site::getPrices(self::$data);
        Site::getFacts(self::$data);
        Testamonials::getTestamonials(self::$data);
        Event::getSortedEvents(self::$data);
        Content::getHomeSlider(self::$data);
        Content::getPrices(self::$data);
        Content::getSchedule(self::$data);
        return view('content.home', self::$data);
    }
    
/*******************************************************************************
******************************    ABOUT-US   *********************************** 
*******************************************************************************/
            
    public function about() {
      
        self::$data['url']='about';
        Content::getKeywords(self::$data);
        Site::getFacts(self::$data);
        Content::getAbout(self::$data);
        Testamonials::getTestamonials(self::$data);
        self::$data['aboutPic'] = DB::table('about')->where('location', 'image')->first();
        return view('content.about-us', self::$data);
    }    
    
    
    
    
    
    
/*******************************************************************************
***************************    NEWSLETTER   ************************************ 
*******************************************************************************/    
/************  adds e-mail address to newsletter recipients list  *************/ 
    public function newsletterAdd(NewsletterRequest $request){ 
        Contact::add2newsLetterList($request, self::$data);
        $redirect = self::$data['redirect'];
        return Redirect($redirect);
    }      
    
    
    
/*******************************************************************************
************************    ALBUMS & PICTURES   ******************************** 
*******************************************************************************/
    
/******* Build SECURE Albums Page ***********/
    public function albums() {
            if (!Session::has('user_id')) {
                Session::flash('parentsOnly', 'הכניסה מותרת רק להורי ילדי הגן');
                return redirect('user/login?dest=albums');
            } else {
                Album::getAlbums(self::$data);
                return view('content.albums', self::$data);
            }
        }

/******* Build SECURE Pictures  Page ***********/
    public function getPictures($albumId) {
       // phpinfo(); exit;
        if (!Session::has('user_id')) {
            Session::flash('parentsOnly', 'הכניסה מותרת רק להורי ילדי הגן');
            return redirect('user/login?dest=albums');
        } else {
            Album::getName($albumId, self::$data);
            Album::getPlaylist($albumId, self::$data);
            Picture::getAlbumPictures($albumId, self::$data);
            return view('content.pictures', self::$data);
        }
    }

/*******************************************************************************
**************************    ENTERTAINMENT   ********************************** 
*******************************************************************************/

/********************* Build SECURE Entertainment Page ************************/    
    public function entertainment() {
            if (!Session::has('user_id')) {
                Session::flash('parentsOnly', 'דף זה מיועד רק להורי ילדי הגן');
                return redirect('user/login?dest=media');
            } else {
                self::$data['title'] = 'בידור';
                Entertainment::getAllMedia(self::$data);
                return view('content.allEntertainment', self::$data);
            }
        }

/*************** get stories ***********/
    public function story($storyId) {
            if (!Session::has('user_id')) {
                Session::flash('parentsOnly', 'הכניסה מותרת רק להורי ילדי הגן');
                return redirect('user/login?dest=media/story/' . $storyId);
            } else {
                self::$data['title'] = 'סיפורים';
                Entertainment::getStory($storyId, self::$data);
                Entertainment::getAllMedia(self::$data);
                return view('content.stories', self::$data);
            }
        }

/*************** get songs ***********/    
    public function song($songId) {
            if (!Session::has('user_id')) {
                Session::flash('parentsOnly', 'הכניסה מותרת רק להורי ילדי הגן');
                return redirect('user/login?dest=media/songs/' . $songId);
            } else {
                self::$data['title'] = 'שירים';
                Entertainment::getSong($songId, self::$data);
                Entertainment::getAllMedia(self::$data);
                return view('content.songs', self::$data);
            }
        }
        
        
        
        

/*******************************************************************************
**************************    CONTACT-US   ********************************** 
*******************************************************************************/
           
    public function contactUs() {
       
        self::$data['url']='contact-us';
        Content::getKeywords(self::$data);
        self::$data['title'] = 'צור קשר';
        return view('content.contactUs', self::$data);
    }    

    
    
    
    
/*******************************************************************************
*******************************    SERVICES   ********************************** 
*******************************************************************************/    
    
    public function services($id) {
        self::$data['url']='service/'.$id;
        Content::getKeywords(self::$data);
        Service::getOffers($id, self::$data);
        return view('content.services', self::$data);
    }

/*******************************************************************************    
**********************************  BLOG  **************************************
*******************************************************************************/
    
    public function blogPosts() {
        self::$data['url']='blog';
        Content::getKeywords(self::$data);
        self::$data['title'] = 'Blog';
        Post::getPosts(self::$data);
        return view('content.blog', self::$data);
    }    


    public function getSingelPost ($id){
        $post = Post::where('id', $id)->first();
       self::$data['post'] = $post;
       self::$data['keywords'] = $post['keywords'];
      // dd($post['id']);
       return view('content.post', self::$data);
    }   
    
/**************  Stores the contact us form messages in DB  *******************/ 
    public function storeMail(ContactRequest $request){
        Contact::addContactEmail($request);
        return Redirect('');
    }    

    
/*******  Selects all Dynamic Content from DB by menu relevance  **************/
    public function dynamic($url) {
        Content::getContent($url, self::$data);
        return view('content.dynamic', self::$data);
    }
  
    
    





public function showEvent($id){
    self::$data['event'] = Event::where('id', $id)->first();
    return view('content.singleEvent', self::$data);
}



    
/*******************************************************************************    
********************************  TESTING  *************************************
*******************************************************************************/
    
//    public function testme() {
//        self::$data['title'] = 'testing page';
//        Album::getName($albumId, self::$data);
//        Picture::getAlbumVideos($albumId, self::$data);
//        return view('content.testing123_1', self::$data);
//    }    

    
    public function testme1($albumId) {
        self::$data['title'] = 'testing page';
        self::$data['storage_path'] = storage_path();
        Album::getName($albumId, self::$data);
        Picture::getAlbumVideos($albumId, self::$data);
        return view('content.testing', self::$data);
    }    
    
    
    
}