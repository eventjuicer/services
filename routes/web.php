<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function()
{
    return view('welcome');
});


Route::get('/masterclasses', function () {
    Artisan::call('visitors:meetups', [

        '--domain' 	=> 'ecommerceberlin.com',
        '--direction' 	=> 'LTD'
    ]);

    preg_match("/storage\/[0-9]+_LTD_[a-z0-9]+\.csv/", Artisan::output(), $matches);

    return !empty($matches)? '<a href="'.$matches[0].'">link</a>': "";
});

Route::get('/workshops', function () {
    Artisan::call('visitors:meetups', [

        '--domain' 	=> 'targiehandlu.pl',
        '--direction' 	=> 'LTD'
    ]);

    preg_match("/storage\/[0-9]+_LTD_[a-z0-9]+\.csv/", Artisan::output(), $matches);

    return !empty($matches)? '<a href="'.$matches[0].'">link</a>': "";
});


Route::get('/teh', function () {
    return Artisan::call('contestants:votes', [
        '--domain' 	=> 'targiehandlu.pl',
        '--role' 	=> 'contestant'
    ]);
});


Route::get('/ebe', function () {
    return Artisan::call('contestants:votes', [
        
        //'--domain' => 'ecommerceberlin.com'
        '--domain' 	=> 'ecommerceberlin.com',
        '--role' 	=> 'contestant'
    ]);

    //
});


Route::get('/ega', function () {
    return Artisan::call('contestants:votes', [
        '--domain' 	=> 'ecommercegermanyawards.com',
        '--role' 	=> 'contestant_company'
    ]);

    //
});



Route::get('/p', function()
{
    abort(404);
});

// Route::get('/p/{participant}', function($participant)
// {
//     return redirect()->action("PromoController@index", compact("participant"));
// });



Route::get('/~{hash}', "PromoFacebookController@index")->where("hash", "[a-zA-Z0-9]+");
Route::get('/~{hash}/p', "PromoFacebookController@preview")->where("hash", "[a-zA-Z0-9]+");



// Route::get('/ninja', "RefericonController@index");
// Route::get('/ninja2', "RefericonController@indexWinners");



Route::get('/invites', "InvitesGeneratorController@index");


Route::get("/trackinglinks", "TrackingLinkController@index");




Route::get('/rsvp', "RsvpController@index");
Route::get('/rsvp/{id}/reject', "RsvpController@reject");
Route::get('/rsvp/{id}/approve', "RsvpController@approve");
Route::get('/rsvp/{id}/ignore', "RsvpController@ignore");
Route::get('/meetup-mute/', "MeetupController@mute");
Route::get('/meetup-block/', "MeetupController@index");
Route::get('/meetup-confirm/', "MeetupController@index");



Route::get('/email-preview/{name}', "EmailPreviewController@index");


Route::get("/unsubscribe/{hash}", "UnsubscribeController@index")->where("hash", "[a-zA-Z0-9]+");
Route::get("/unsubscribe/{hash}/group", "UnsubscribeController@muteGroup")->where("hash", "[a-zA-Z0-9]+");
Route::get("/unsubscribe/{hash}/event", "UnsubscribeController@muteEvent")->where("hash", "[a-zA-Z0-9]+");
Route::get("/unsubscribe/{hash}/location", "UnsubscribeController@muteLocation")->where("hash", "[a-zA-Z0-9]+");



Route::get("/unsubscribe_vtr/{linkedIn}", "UnsubscribeController@voter");


/**
*
* BEGIN PROMO ROUTES
*
**/





Route::prefix('p/{participant}')->group(function()
{

	Route::prefix('promo')->group(function()
	{
	   
		Route::get('creatives/{creative}/generate', "PromoCreativeController@generate");
		Route::resource('creatives', "PromoCreativeController");
		Route::get('logistics', "PromoController@logistics");
		Route::get('learn', "PromoController@learn");
		Route::get('/', "PromoController@index");


	});


	Route::get('scanner', "ScannerController@index");

});


