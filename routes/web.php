<?php
use App\Notifications\Newslack;
Route::get('/slack', function () {

    $user = App\User::first();

    $user->notify(new Newslack());

    echo "A slack notification has been send";

});

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
//Route::get('send','MailController@send');

Route::get('/', ['uses' => 'FrontController@index','as' => 'index']);
Route::get('/about', ['uses' => 'FrontController@aboutus','as' => 'about']);
Route::get('/consultant', ['uses' => 'FrontController@consultant','as' => 'consultant']);
Route::get('/top-contributors', ['uses' => 'FrontController@topcontributors','as' => 'topcontributors']);

Route::get('/campus-clubs', ['uses' => 'FrontController@campuses','as' => 'campus-clubs']);
Route::get('/campus/{slug}', ['uses' => 'FrontController@singleCampus','as' => 'campus.single']);

Route::get('/post/{slug}', ['uses' => 'FrontController@singlePost','as' => 'post.single']);
Route::get('/news', ['uses' => 'FrontController@news','as' => 'news']);

Route::get('/blog/{slug}', ['uses' => 'FrontController@singleBlog','as' => 'blog.single']);
Route::get('/blog', ['uses' => 'FrontController@blog','as' => 'blog']);

Route::get('/events', ['uses' => 'FrontController@events','as' => 'events']);
Route::get('/event/{slug}', ['uses' => 'FrontController@singleEvent','as' => 'event.single']);

Route::get('/projects', ['uses' => 'FrontController@projects','as' => 'projects']);
Route::get('/project/{slug}', ['uses' => 'FrontController@singleProject','as' => 'project.single']);

Route::get('/pilot', ['uses' => 'FrontController@pilot','as' => 'pilot']); //Pilot Form
Route::post('/pilot/store', ['uses' => 'PilotsController@store','as' => 'pilot.store']); //Pilot Store
Route::get('/foss-pilot', ['uses' => 'FrontController@fosspilot','as' => 'fosspilot']); //FOSS Pilot Details

Route::post('/contact/store', ['uses' => 'ContactsController@store','as' => 'contact.store']);
Route::get('/contact', ['uses' => 'FrontController@contactus','as' => 'contact']);
Route::get('/success', ['uses' => 'FrontController@success','as' => 'success']);


Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){



    Route::get('/dashboard', ['uses' => 'HomeController@dashboard','as' => 'home']);


    Route::get('/post/create', ['uses' => 'PostsController@create','as' => 'post.create']);
    Route::post('/post/store', ['uses' => 'PostsController@store','as' => 'post.store']);
    Route::get('/posts', ['uses' => 'PostsController@index','as' => 'posts']);
    Route::get('/post/delete/{id}', ['uses' => 'PostsController@destroy','as' => 'post.delete']);
    Route::get('/posts/trashed', ['uses' => 'PostsController@trashed','as' => 'posts.trashed']);
    Route::get('/posts/kill/{id}', ['uses' => 'PostsController@kill','as' => 'post.kill']);
    Route::get('/posts/restore/{id}', ['uses' => 'PostsController@restore','as' => 'post.restore']);
    Route::get('/posts/edit/{id}', ['uses' => 'PostsController@edit','as' => 'post.edit']);
    Route::post('/post/update/{id}', ['uses' => 'PostsController@update','as' => 'post.update']);


    Route::get('/blog/create', ['uses' => 'BlogsController@create','as' => 'blog.create']);
    Route::post('/blog/store', ['uses' => 'BlogsController@store','as' => 'blog.store']);
    Route::get('/blogs', ['uses' => 'BlogsController@index','as' => 'blogs']);
    Route::get('/blog/delete/{id}', ['uses' => 'BlogsController@destroy','as' => 'blog.delete']);
    Route::get('/blogs/trashed', ['uses' => 'BlogsController@trashed','as' => 'blogs.trashed']);
    Route::get('/blogs/kill/{id}', ['uses' => 'BlogsController@kill','as' => 'blog.kill']);
    Route::get('/blogs/restore/{id}', ['uses' => 'BlogsController@restore','as' => 'blog.restore']);
    Route::get('/blogs/edit/{id}', ['uses' => 'BlogsController@edit','as' => 'blog.edit']);
    Route::post('/blog/update/{id}', ['uses' => 'BlogsController@update','as' => 'blog.update']);


    Route::get('/contributor/create', ['uses' => 'ContributorsController@create','as' => 'contributor.create']);
    Route::post('/contributor/store', ['uses' => 'ContributorsController@store','as' => 'contributor.store']);
    Route::get('/contributors', ['uses' => 'ContributorsController@index','as' => 'contributors']);
    Route::get('/contributor/delete/{id}', ['uses' => 'ContributorsController@destroy','as' => 'contributor.delete']);
    Route::get('/contributors/edit/{id}', ['uses' => 'ContributorsController@edit','as' => 'contributor.edit']);
    Route::post('/contributor/update/{id}', ['uses' => 'ContributorsController@update','as' => 'contributor.update']);


    Route::get('/category/create', ['uses' => 'CategoriesController@create','as' => 'category.create']);
    Route::get('/categories', ['uses' => 'CategoriesController@index','as' => 'categories']);
    Route::post('/category/store', ['uses' => 'CategoriesController@store','as' => 'category.store']);
    Route::get('/category/edit/{id}', ['uses' => 'CategoriesController@edit','as' => 'category.edit']);
    Route::get('/category/delete/{id}', ['uses' => 'CategoriesController@destroy','as' => 'category.delete']);
    Route::post('/category/update/{id}', ['uses' => 'CategoriesController@update','as' => 'category.update']);


    Route::get('/users', ['uses' => 'UsersController@index','as' => 'users']);
    Route::get('/user/create', ['uses' => 'UsersController@create','as' => 'user.create']);
    Route::post('/user/store', ['uses' => 'UsersController@store','as' => 'user.store']);
    Route::get('user/admin/{id}', ['uses' => 'UsersController@admin','as' => 'user.admin']);
    Route::get('user/not-admin/{id}', ['uses' => 'UsersController@not_admin','as' => 'user.not.admin']);
    Route::get('user/profile', ['uses' => 'ProfilesController@index','as' => 'user.profile']);
    Route::get('user/delete/{id}', [ 'uses' => 'UsersController@destroy','as' => 'user.delete']);
    Route::post('/user/profile/update', ['uses' => 'ProfilesController@update','as' => 'user.profile.update']);

    Route::get('/settings', ['uses' => 'SettingsController@index','as' => 'settings']);
    Route::post('/settings/update', ['uses' => 'SettingsController@update','as' => 'settings.update']);

    Route::get('/event/create', ['uses' => 'EventsController@create','as' => 'event.create']);
    Route::post('/event/store', ['uses' => 'EventsController@store','as' => 'event.store']);
    Route::get('/events', ['uses' => 'EventsController@index','as' => 'events']);
    Route::get('/event/delete/{id}', ['uses' => 'EventsController@destroy','as' => 'event.delete']);
    Route::get('/event/trashed', ['uses' => 'EventsController@trashed','as' => 'event.trashed']);
    Route::get('/event/kill/{id}', ['uses' => 'EventsController@kill','as' => 'event.kill']);
    Route::get('/event/restore/{id}', ['uses' => 'EventsController@restore','as' => 'event.restore']);
    Route::get('/event/edit/{id}', ['uses' => 'EventsController@edit','as' => 'event.edit']);
    Route::post('/event/update/{id}', ['uses' => 'EventsController@update','as' => 'event.update']);


    Route::get('/project/create', ['uses' => 'ProjectsController@create','as' => 'project.create']);
    Route::post('/project/store', ['uses' => 'ProjectsController@store','as' => 'project.store']);
    Route::get('/projects', ['uses' => 'ProjectsController@index','as' => 'projects']);
    Route::get('/project/delete/{id}', ['uses' => 'ProjectsController@destroy','as' => 'project.delete']);
    Route::get('/project/edit/{id}', ['uses' => 'ProjectsController@edit','as' => 'project.edit']);
    Route::post('/project/update/{id}', ['uses' => 'ProjectsController@update','as' => 'project.update']);

    Route::get('/campus/create', ['uses' => 'CampusesController@create','as' => 'campus.create']);
    Route::post('/campus/store', ['uses' => 'CampusesController@store','as' => 'campus.store']);
    Route::get('/campuses', ['uses' => 'CampusesController@index','as' => 'campuses']);
    Route::get('/campus/delete/{id}', ['uses' => 'CampusesController@destroy','as' => 'campus.delete']);
    Route::get('/campus/edit/{id}', ['uses' => 'CampusesController@edit','as' => 'campus.edit']);
    Route::post('/campus/update/{id}', ['uses' => 'CampusesController@update','as' => 'campus.update']);


    Route::get('/contacts', ['uses' => 'ContactsController@index','as' => 'contacts']);
    Route::get('/contact/delete/{id}', ['uses' => 'ContactsController@destroy','as' => 'contact.delete']);
    Route::get('/contact/{slug}', ['uses' => 'ContactsController@singleContact','as' => 'contact.single']);


    Route::get('/pilots', ['uses' => 'PilotsController@index','as' => 'pilots']);
    Route::get('/pilot/delete/{id}', ['uses' => 'PilotsController@destroy','as' => 'pilot.delete']);
    Route::get('/pilot/{slug}', ['uses' => 'PilotsController@singlePilot','as' => 'pilot.single']);


});

