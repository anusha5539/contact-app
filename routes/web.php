<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/contact',function(){
//     return view('contact.index');
// })->name('contacts.index');

// Route::get('/contact/create',function(){
//     return view('contact.create');
// })->name('contacts.create');

// Route::get('/contact/{id}',function($id){
//     $contact=App\Contact::find($id);
//     return view('contact.show',compact('contact'));
// })->name('contacts.show');


Route::resources([
    '/contacts'=>'ContactController',
    '/company'=>'CompanyController']);
// ->middleware('auth');
Auth::routes(['verify'=>true]);

Route::get('/dashboard', 'HomeController@index')->name('home');

// Route::middleware(['auth','verified'])->group(function(){
//     Route::resource('/contacts','ContactController');
//     Auth::routes();

// Route::get('/dashboard', 'HomeController@index')->name('home');

// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/settings/account','AccountController@index');
Route::get('/settings/profile','ProfileController@edit')->name('settings.profile.edit');
Route::put('/settings/profile','ProfileController@update')->name('settings.profile.update');


Route::get('/download',function(){
    return Storage::download('profile-picture.jpeg');
});