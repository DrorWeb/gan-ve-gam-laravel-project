<?php
use App\Content;

Route::get('testme/{album_id}', 'PagesController@testme1');
Route::get('testme', 'PagesController@testme');
/******  Public Pages    ******/
Route::get('/', 'PagesController@index');
Route::get('event/{id}', 'PagesController@showEvent');
Route::get('contact-us', 'PagesController@contactUs');
Route::post('contact_store', 'PagesController@storeMail');
Route::get('about', 'PagesController@about');
Route::get('services/{id}', 'pagesController@services');
Route::post('newsletter', 'PagesController@newsletterAdd');
Route::get('blog/{id}', 'PagesController@getSingelPost');
Route::get('blog', 'PagesController@blogPosts');


/*********  members only pages  ********/
Route::get('pictures/{albumId}', 'PagesController@getPictures');
Route::get('albums', 'PagesController@albums');
Route::get('media/story/{storyId}', 'PagesController@story');
Route::get('media/songs/{songId}', 'PagesController@song');
Route::get('media', 'PagesController@entertainment');


//Route::post('newsletter', 'PagesController@newsletterAdd');


/******************************* User Self Edit *******************************/
Route::put('user/update', 'UserController@userUpdate');
Route::get('user/edit/{id}', 'UserController@getEdit');
Route::get('user/logout', 'UserController@getLogout');
Route::post('user/login', 'UserController@postLogin');
Route::get('user/login', 'UserController@getLogin');



/******************************************************************************/
/******************************   cms   ***************************************/
/******************************************************************************/

/*******************************   Keywords   ************************************/
Route::resource('cms/keywords','KeywordsController');
Route::get('cms/deleteKeyword/{id}','KeywordsController@destroy');
/*****************************  גנון פעוטון צהרון******************************/
Route::get('cms/deleteOfferImage/{id}','CmsController@deleteOfferImage');
Route::post('cms/offer/storeThumbs/{id}', 'CmsController@storeOfferThumbs');
Route::get('cms/offer/addThumbs/{id}', 'CmsController@addOfferThumbs');
Route::get('cms/deleteOfferThumbnail/{id}', 'CmsController@deleteOfferThumbnailById');
Route::put('cms/offer/{id}/update' , 'CmsController@updateOffer');
Route::get('cms/offer/{id}/edit' , 'CmsController@editOffer');
Route::get('cms/offers', 'CmsController@getOffers');
/********************************  About  *************************************/
Route::PUT('cms/about/capabilityHeadline/update', 'CmsController@updateCapabilityHeadline');
Route::get('cms/about/capabilityHeadline/edit', 'CmsController@editCapabilityHeadline');
Route::PUT('cms/aboutPic/update', 'CmsController@updateAboutPic');
Route::get('cms/aboutPic/edit', 'CmsController@editAboutPic');
Route::post('cms/about/update', 'CmsController@updateAbout');
Route::get('cms/about/{id}/edit', 'CmsController@editAbout');
Route::get('cms/about', 'CmsController@getAbout');
/*******************************   Songs   ************************************/
Route::resource('cms/songs','SongsController');
/*******************************   Stories   ************************************/
Route::resource('cms/stories','StoriesController');
/********************************  Schedule  **********************************/
Route::resource('cms/schedule', 'ScheduleController');
/********************************  Events  ************************************/
Route::resource('cms/events', 'EventController');
/****************************  pics & albums  *********************************/
Route::get('cms/deleteplaylist/{playlist_url}', 'AlbumsController@deletePlaylist');
Route::get('cms/deleteImage/{id}', 'AlbumsController@deletePictureById');
Route::resource('cms/albums', 'AlbumsController');

/****************************  testamonials  **********************************/
Route::post('cms/testamonial/store', 'CmsController@storeTestamonial');
Route::post('cms/testamonials/update', 'CmsController@updateTestamonial');
Route::get('cms/testamonials/{id}/delete', 'CmsController@deleteTestamonial');
Route::get('cms/testamonials/{id}/show', 'CmsController@showTestamonial');
Route::get('cms/testamonial/create', 'CmsController@createTestamonial');
Route::get('cms/testamonials/{id}/edit', 'CmsController@getTestamonialById');
Route::get('cms/testamonials', 'CmsController@getTestamonials');

/*****************************  ourServices  **********************************/
Route::post('cms/ourServices/update', 'CmsController@updateServices');
Route::get('cms/ourServices/{id}/edit', 'CmsController@showServices');
Route::get('cms/ourService', 'CmsController@getServices');

/********************************* posts  *************************************/
Route::resource('cms/posts', 'PostsController');

/********************************* prices  ************************************/
Route::post('cms/prices/update', 'CmsController@updatePrice');
Route::get('cms/prices/{id}/edit', 'CmsController@showPrice');
Route::get('cms/prices', 'CmsController@getPrices');

/******************************** headlines  **********************************/
Route::post('cms/headlines/update', 'CmsController@updateHeadline');
Route::get('cms/headlines/{id}/edit', 'CmsController@showHeadline');
Route::get('cms/headlines', 'CmsController@getHeadlines');

/********************************** users  ************************************/
Route::resource('cms/users', 'UsersController');

/******************************** homeSlider  *********************************/
Route::resource('cms/homeSlider', 'SlidersController');
Route::resource('cms/newsletter', 'newslettersController');

/********************************** menus  ************************************/
Route::resource('cms/menu', 'MenuController');

/******************************** employees  **********************************/
Route::resource('cms/employees', 'EmployeesController');

/********************************** facts  ************************************/
Route::post('cms/fact/update', 'CmsController@updateFact');
Route::get('cms/facts/{id}/edit', 'CmsController@showFact');
Route::get('cms/facts', 'CmsController@facts');

/********************************* messages  **********************************/
Route::get('cms/deleteMessage/{id}',  'CmsController@deleteMessage');
Route::get('cms/messages/{id}/{action}',  'CmsController@changePermissions');
Route::get('cms/messages',  'CmsController@messages');


Route::controller('cms', 'CmsController');
///******************************** emails   **********************************/
Route::get('send', 'EmailController@send');






/******  KEEP THIS ROUTE ON BOTTOM    ******/
//Route::get('{url}', 'pagesController@dynamic');
