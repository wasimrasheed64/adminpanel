<?php

use App\Http\Controllers\FrontEnd\HomePageController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

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
//
 Route::get('/',function(){
     $product = \App\Models\Category::find(1);
     $products = Category::where('id','!=','1')->get();
     foreach ($products as $objProduct) {
         $objProduct->short_description = $product->short_description;
         $objProduct->description = $product->description;
         $objProduct->save();
     }
 });
//Route::get('/', function (){
//  return  redirect()->route('dashboard');
//});
//Route::get('/faqs', [HomePageController::class ,'faqs'])->name('faqs');
//Route::get('/custom-quote', [HomePageController::class ,'customQuote'])->name('custom.quote');
//Route::get('/contact-us', [HomePageController::class ,'showContact'])->name('contact.form');
//Route::get('/{slug}',[HomePageController::class,'check'])->name('dynamic.page');
//Route::get('blog/{slug}',[HomePageController::class,'blogSingle'])->name('blog.single');

Route::get('/dashboard', function () {
    return view('admin.dashboard.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/clear-cache/create-link/boo',function(){
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    // Artisan::call('storage:link');
});

// Route::get('/', function () {
//     return redirect()->route('admin.dashboard');
// });

// require __DIR__.'/user.php';
require __DIR__.'/admin.php';


