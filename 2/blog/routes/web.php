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

// View => view();

// Request => request()

// App => app()

// App::bind('App\Billing\Stripe', function() {
//   return new \App\Billing\Stripe(config('services.stripe.secret'));
// });

// dd(resolve('App\Billing\Stripe'));

// $stripe = App::make('App\Billing\Stripe');
// $stripe = resolve('App\Billing\Stripe');
//
// print_r($stripe);
// echo $stripe->get_key();

// dd($stripe);

Route::get('/', 'PostsController@index')->name('home');

Route::get('/posts/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');

Route::get('/posts/{post}', 'PostsController@show');

Route::get('/posts/tags/{tag}', 'TagsController@index');

Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create')->name('login');

Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');

/*
GET /posts
GET /posts/create
GET /posts/{id}
POST /posts
GET /posts/{id}/edit
PATCH /posts/{id}
DELETE /posts/{id}
*/
