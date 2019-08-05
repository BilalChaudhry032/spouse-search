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

use App\Events\MessagePosted;

Route::get('/', 'User\SearchController@mainPage')->middleware('guest')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user/index', 'User\UserController@index');
Route::post('/update', 'User\UserController@updateProfilePic');
Route::get('/user/edit/{id}', 'User\UserController@edit');
Route::get('user/shortlist/{id?}', function ($id) {
    return $id;
});

// Profile Page Routes
Route::post('/profile_pic_update', 'User\ProfileController@updateProfilePic');
Route::post('/basic_info_update', 'User\ProfileController@updateBasicInfo');
Route::post('/add_gallery_photo', 'User\ProfileController@addGalleryPhoto');
Route::post('/update_location', 'User\ProfileController@updateLocation');
Route::post('/update_education', 'User\ProfileController@updateEducation');
Route::put('update_contact/{id}', 'User\ProfileController@updateContact')->name('update.contact');
Route::post('save_phone','User\UserController@savePhone')->name('save,phone');
Route::post('save_family_info','User\UserController@saveFamily')->name('save_family');
Route::post('save_expected_relation','User\UserController@saveRelationInfo')->name('save_family');

// Search Routes
Route::post('/basic_search', 'User\SearchController@basicSearch');
Route::get('search', 'User\SearchController@searchPage');

//route to get cities and states using ajax
Route::get('/getstatelist', 'User\PagesController@getStateList');
Route::get('/getcitylist', 'User\PagesController@getCityList');


Route::get('contact', 'User\UserController@contact');
Route::get('faq', 'User\UserController@faq');
Route::get('support', 'User\UserController@support');
Route::get('about', 'User\PagesController@aboutPage');
Route::get('terms', 'User\PagesController@termPage');
Route::get('upgrade', 'User\PagesController@upgradePage');
Route::get('query_feedback', 'User\PagesController@queryPage');
Route::get('privacy', 'User\UserController@privacy');
Route::get('privacy_features', 'User\UserController@privacy_features');





// helo Pages
Route::get('help', 'User\UserController@help');
Route::get('help/getting-started', 'User\UserController@gettingStarted');
Route::get('help/membership', 'User\UserController@membership');
Route::get('help/search-profile', 'User\UserController@searchProfile');
Route::get('help/login-password', 'User\UserController@loginPassword');
Route::get('help/common-issues', 'User\UserController@commonIssues');
Route::get('help/changing-basic-details', 'User\UserController@changingBasicDetails');


Route::get('interests', 'User\UserController@interests');
Route::get('photo-requests', 'User\UserController@photoRequests');

Route::get('profile', 'User\UserController@profile')->middleware('auth');

Route::get('/user/{id}', 'User\UserController@showUser');

Route::get('/email-confirmation', 'HomeController@index');
Route::post('email-confirmation', 'HomeController@verifyEmail');

Route::get('shortlist/{id}', 'ShortlistController@shortlistMe');

Route::get('interest/{id}', 'InterestController@addInterest');

Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard')->middleware('auth:admin');
    Route::get('/all-users', 'AdminController@getUsers')->name('admin.all.user')->middleware('auth:admin');
    Route::get('/verified-users', 'AdminController@getVerified')->name('admin.verified.user')->middleware('auth:admin');
    Route::get('/unverified-users', 'AdminController@getUnverified')->name('admin.unverified.user')->middleware('auth:admin');
    Route::get('/featured-users', 'AdminController@getFeatured')->name('admin.featured.user')->middleware('auth:admin');
    Route::get('/profile/{id}', 'AdminController@getProfile')->name('admin.profile.user')->middleware('auth:admin');
    Route::get('/add-consultant', 'AdminController@addConsultant')->name('admin.add.consultant')->middleware('auth:admin');

    Route::get('/edit-consultant/{id}', 'AdminController@viewEditConsultant')->name('admin.view-edit.consultant')->middleware('auth:admin');
    Route::post('/edit-consultant/{id}', 'AdminController@editConsultant')->name('admin.edit.consultant')->middleware('auth:admin');
    Route::get('/delete-consultant/{id}', 'AdminController@deleteConsultant')->name('admin.delete.consultant')->middleware('auth:admin');


    Route::get('edit-profile/{id}', 'AdminController@edit')->name('admin.edit.user')->middleware('auth:admin');
    Route::post('edit-profile/{id}', 'AdminController@updateUser')->name('admin.update.user')->middleware('auth:admin');


    Route::post('/store-consultant', 'AdminController@store')->name('admin.store.consultant')->middleware('auth:admin');
    Route::get('logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/add-consultant', 'AdminController@addConsultant')->name('admin.add.consultant')->middleware('auth:admin');
    Route::post('/store-consultant', 'AdminController@storeConsultant')->name('admin.store.consultant')->middleware('auth:admin');
    Route::get('/view-consultants', 'AdminController@viewConsultant')->name('admin.view.consultants')->middleware('auth:admin');
    Route::get('/delete-user/{id}', 'AdminController@deleteUser')->name('admin.delete.profile')->middleware('auth:admin');
    Route::get('/deleted-users', 'AdminController@deletedUsers')->name('admin.deleted.profiles')->middleware('auth:admin');
    Route::get('/deleted-brides', 'AdminController@deletedBrides')->name('admin.deleted.brides')->middleware('auth:admin');
    Route::get('/deleted-grooms', 'AdminController@deletedGrooms')->name('admin.deleted.grooms')->middleware('auth:admin');
    Route::get('/brides', 'AdminController@getBrides')->name('admin.all.brides')->middleware('auth:admin');
    Route::get('/grooms', 'AdminController@getGrooms')->name('admin.all.grooms')->middleware('auth:admin');
    Route::get('/consultant-added-profiles/{id}','AdminController@viewConsultantAddedProfiles');
});

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::get('messages', 'User\UserController@messages')->middleware('auth');

Route::get('messagesapi', 'User\UserController@getMessages')->middleware('auth');

Route::post('messagesapi', function () {

    //Store the new message
    //Store the new message
    $user = Auth::user();
    $message = $user->messages()->create([
        'message' => request()->get('message'),
        'receiver_id' => 1
    ]);

    // Announce that a new message has been posted
    event(new MessagePosted($message, $user));

    return ['status' => 'OK'];
    //return App\Message::with('user')->get();
})->middleware('auth');


Route::get('get-interests', 'InterestController@getInterests');

Route::post('accept-interest/{id}', 'InterestController@acceptInterest');
Route::post('reject-interest/{id}', 'InterestController@rejectInterest');

Route::get('/get-interests', 'InterestController@getInterests');


Route::get('/counterss', function () {
    $a = App\Counter::select('profiles_clicked')->get();
    return json_decode($a);
});


Route::get('testing', 'User\UserController@profilesClickedCounter');

Route::prefix('consultant')->group(function (){
    Route::get('login', 'Auth\ConsultantLoginController@showLoginForm')->name('consultant.login');
    Route::post('login', 'Auth\ConsultantLoginController@login')->name('consultant.login.submit');
    Route::get('/dashboard', 'ConsultantController@dashboard')->name('consultant.dashboard');
    Route::get('view-profiles', 'ConsultantController@index')->name('consultant.view.users')->middleware('auth:consultant');
    Route::get('view-deleted-profiles', 'ConsultantController@deletedProfiles')->name('consultant.view.deletedProfiles')->middleware('auth:consultant');
    Route::get('view-brides', 'ConsultantController@brides')->name('consultant.view.brides')->middleware('auth:consultant');
    Route::get('view-groom', 'ConsultantController@grooms')->name('consultant.view.grooms')->middleware('auth:consultant');
    Route::get('add-profile', 'ConsultantController@addUser')->name('consultant.add.user')->middleware('auth:consultant');
    Route::get('profile/{id}', 'ConsultantController@viewUser')->name('consultant.view.user')->middleware('auth:consultant');
    Route::get('delete-profile/{id}', 'ConsultantController@deleteUser')->name('consultant.delete.user')->middleware('auth:consultant');
    Route::post('create-profile', 'ConsultantController@addProfile')->name('consultant.create.user')->middleware('auth:consultant');
    Route::get('edit-profile/{id}', 'ConsultantController@edit')->name('consultant.edit.user')->middleware('auth:consultant');
    Route::post('edit-profile/{id}', 'ConsultantController@updateUser')->name('consultant.update.user')->middleware('auth:consultant');
    Route::get('view-interests/{id}', 'ConsultantController@getInterests')->name('consultant.get.interests');
    Route::get('logout', 'Auth\ConsultantLoginController@logout')->name('consultant.logout');
    Route::get('accept-interest/{u_id}/{i_id}','InterestController@AcceptInterestConsultant')->name('consultant-accept-interest');
    Route::get('send-invitation','ConsultantController@sendInvitation')->name('consultant.send.invitation');
    Route::post('send-invitation','ConsultantController@sendInvite')->name('consultant.send.invite');
});

Route::get('invite/', 'InviteController@invite');
Route::post('invite/', 'InviteController@saveInvite')->name('invite');



Route::get('refer_registration', function(){
   return view('pages.user.refer_registration');
});
//bilal