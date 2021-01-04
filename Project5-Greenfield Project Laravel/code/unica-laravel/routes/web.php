<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('index', function () {
//     return view('index');
// })->name('index');

Route::get('404', function () {
    return view('404');
})->name('404');

Route::get('about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('blog', function () {
    return view('blog-list-right-sidebar');
})->name('blog');

Route::get('coming-soon', function () {
    return view('coming-soon');
})->name('coming-soon');

Route::get('contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::get('faq', function () {
    return view('faq');
})->name('faq');

Route::get('login-register', function () {
    return view('login-register');
})->name('login-register');

Route::get('lost-password', function () {
    return view('lost-password');
})->name('lost-password');

Route::get('my-account', function () {
    return view('my-account');
})->name('my-account');

Route::get('portfolio', function () {
    return view('portfolio');
})->name('portfolio');



Route::get('wishlist', function () {
    return view('wishlist');
})->name('wishlist');


Route::get('dashboard', function () {
    return view('dashboard.dashboard');
})->name('dashboard')->middleware('admin');

Route::get('forms', function () {
    return view('dashboard.forms');
})->name('forms')->middleware('admin');

Route::get('error', function () {
    return view('dashboard.pages.error');
})->name('error')->middleware('admin');

Route::get('login', function () {
    return view('dashboard.pages.login');
})->name('login')->middleware('admin');

Route::get('user', function () {
    return view('dashboard.pages.user');
})->name('user')->middleware('admin');

Route::get('notifications', function () {
    return view('dashboard.components.notifications');
})->name('notifications')->middleware('admin');

Route::get('sweet-alert', function () {
    return view('dashboard.components.sweet-alert');
})->name('sweet-alert')->middleware('admin');





Route::get('manage_suppliers', function () {
    return view('dashboard.manage_suppliers');
})->name('manage_suppliers')->middleware('admin');



//manage categories

Route::get('/manage_categories', 'CategoryController@create')->name('manage_categories');

Route::post('/manage_categories', 'CategoryController@store');

Route::get('/category_delete/{id}', 'CategoryController@destroy');


Route::get('/category_edit/{id}', 'CategoryController@show')->name('edit_categories');;

Route::post('/category_edit/{id}', 'CategoryController@update');


//manage products


Route::get('/manage_products', 'ProductController@create')->name('manage_products');

Route::post('/manage_products', 'ProductController@store');

Route::get('/product_delete/{id}', 'ProductController@destroy');


Route::get('/product_edit/{id}', 'ProductController@show')->name('edit_products');;

Route::post('/product_edit/{id}', 'ProductController@update');

///////////////////////////////////

//show product in shop product
Route::get('/shop_products/{id}', 'ProductController@shopProduct')->name('shop_products');

//show product in shop page
Route::get('/shop', 'ProductController@shopAllProduct')->name('shop');


//show product detials
Route::get('/product-details/{id?}', 'ProductController@proDetials')->name('product-details');

//////////////////////////////////

//show handcraft profile
Route::get('/supplier_profile/{id}', 'SupplierController@handCraftProfile')->name('supplier_profile');

//manage sup


Route::get('/manage_suppliers', 'SupplierController@create')->name('manage_suppliers');

Route::post('/manage_suppliers', 'SupplierController@store');

Route::get('/supplier_delete/{id}', 'SupplierController@destroy');



Route::get('/supplier_edit/{id}', 'SupplierController@show')->name('supplier_edit');;

Route::post('/supplier_edit/{id}', 'SupplierController@update');


//Show category In Public Page



Route::get('/manage_users', 'UserController@create')->name('manage_users')->middleware('admin');

Route::post('/manage_users', 'UserController@store');



Route::get('/user/delete/{id}', 'UserController@destroy');

Route::get('/user_edit/{id}', 'UserController@show')->name('edit_users');

Route::post('/user_edit/{id}', 'UserController@update');


Auth::routes();


Route::get('/', 'HomeController@index')->name('index');


// Route::get('/', 'HomeController@showIndex')->name('index');

Route::get('appNav', function () {
    return view('dashboard.appNav');
})->name('appNav')->middleware('admin');



///////////////////////////////////////////////////////////////







Route::get('login-register1', function () {
    return view('login-register1');
})->name('login-register1');



Route::get('welcome', function () {
    return view('welcome');
});



Route::get('product-details-handmade', function () {
    return view('product-details-handmade');
});

//manage order

Route::get('manage_orders', function () {
    return view('dashboard.manage_orders');
})->name('manage_orders');


Route::post('manage_orders', 'OrderController@store')->name('manage_orders');



// Route::get('supplier_profile', function () {
//     return view('supplier_profile');
// })->name('supplier_profile');




//search 

Route::get('/search', 'ProductController@search');
