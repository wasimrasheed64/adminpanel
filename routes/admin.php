<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CustomPageController;
use App\Http\Controllers\Admin\CustomScriptController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\FooterLinkController;
use App\Http\Controllers\Admin\HomepageController;
use App\Http\Controllers\Admin\MainCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\PromotionController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\SocialLinkController;
use App\Http\Controllers\Admin\TestimonialController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group(function () {

    Route::middleware('auth:admin')->group(function () {
        Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');
        Route::patch('profile', [AdminController::class, 'updateProfile'])->name('admin.profile.update');
        Route::post('logout', [LoginController::class, 'logout'])->name('admin.logout');


        Route::resource('product', ProductController::class, [
            'names' => [
                'index' => 'product',
                'create' => 'product.create',
                'store' => 'product.store',
                'edit' => 'product.edit',
                'update' => 'product.update',
                'destroy' => 'product.delete',
            ]
        ]);

        Route::resource('category', CategoryController::class, [
            'names' => [
                'index' => 'category',
                'create' => 'category.create',
                'store' => 'category.store',
                'edit' => 'category.edit',
                'update' => 'category.update',
                'destroy' => 'category.delete',
            ]
        ]);


        Route::resource('blog', BlogController::class, [
            'names' => [
                'index' => 'blog',
                'create' => 'blog.create',
                'store' => 'blog.store',
                'edit' => 'blog.edit',
                'update' => 'blog.update',
                'destroy' => 'blog.delete',
            ]
        ]);

        Route::resource('maincategory', MainCategoryController::class, [
            'names' => [
                'index' => 'maincategory',
                'store' => 'maincategory.store',
                'update' => 'maincategory.update',
                'destroy' => 'maincategory.delete',
            ]
        ]);

        Route::resource('social-links', SocialLinkController::class, [
            'names' => [
                'index' => 'social.link',
                'store' => 'social.link.store',
                'update' => 'social.link.update',
                'destroy' => 'social.link.delete',
            ]
        ]);

        Route::resource('testimonial', TestimonialController::class, [
            'names' => [
                'index' => 'testimonial.index',
                'store' => 'testimonial.store',
                'update' => 'testimonial.update',
                'destroy' => 'testimonial.delete',
            ]
        ]);

        Route::resource('service', ServiceController::class, [
            'names' => [
                'index' => 'service.index',
                'store' => 'service.store',
                'update' => 'service.update',
                'destroy' => 'service.delete',
            ]
        ]);

        Route::resource('promotion', PromotionController::class, [
            'names' => [
                'index' => 'promotion.index',
                'store' => 'promotion.store',
                'update' => 'promotion.update',
                'destroy' => 'promotion.delete',
            ]
        ]);


        //Cms Settings

        Route::resource('custom-page', CustomPageController::class, [
            'names' => [
                'index' => 'custompage',
                'create' => 'custompage.create',
                'store' => 'custompage.store',
                'edit' => 'custompage.edit',
                'update' => 'custompage.update',
                'destroy' => 'custompage.delete',
            ]
        ]);

        Route::resource('footer-links', FooterLinkController::class, [
            'names' => [
                'index' => 'footer.link',
                'store' => 'footer.link.store',
                'update' => 'footer.link.update',
                'destroy' => 'footer.link.delete',
            ]
        ]);

        Route::resource('banner', BannerController::class, [
            'names' => [
                'index' => 'banner.index',
                'store' => 'banner.store',
                'update' => 'banner.update',
                'destroy' => 'banner.delete',
            ]
        ]);

        Route::get('faq', [FaqController::class, 'index'])
            ->name('admin.faqs.index');
        Route::patch('faq-post', [FaqController::class, 'store'])
            ->name('admin.faqs.patch');

        Route::get('site-settings', [SiteSettingController::class, 'index'])
            ->name('admin.site.setting');
        Route::patch('site-settings', [SiteSettingController::class, 'update'])
            ->name('admin.site.setting.patch');

        Route::get('home-page', [HomepageController::class, 'index'])
            ->name('admin.homepage');
        Route::patch('home-page', [HomepageController::class, 'update'])
            ->name('admin.homepage.patch');

        Route::get('custom-scripts', [CustomScriptController::class, 'index'])
            ->name('custom-script.index');
        Route::patch('custom-scripts/update', [CustomScriptController::class, 'update'])
            ->name('custom-script.patch');


        Route::post('/dark-mode', function () {
            if (session()->has('darkMode')) {
                session()->remove('darkMode');
            } else {
                session()->put('darkMode', 1);
            }
        })->name('admin.dark.mode.switch');

    });


    /* =======================
    ------ Auth Routes -------
    =========================*/
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [LoginController::class, 'login'])->name('admin.login.attempt');
//    Route::get('password/email', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('admin.forgot.password');
//    Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('admin.password.email');
//    Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
//    Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('admin.password.update');
    /* =======================
    ------End Auth Routes -------
    =========================*/

});
