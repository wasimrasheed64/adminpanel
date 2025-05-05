<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Faq;
use App\Models\FooterLink;
use App\Models\HomePage;
use App\Models\MainCategory;
use App\Models\Product;
use App\Models\Service;
use App\Models\SiteSetting;
use App\Models\SocialLink;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $mainCategories = MainCategory::with('categories')->get();
        $siteSetting = SiteSetting::first();
        $services = Service::all();
        $banners = Banner::all();
        $homePage = HomePage::first();
        $featuredProducts = Product::featured()->get();
        $productSlider = MainCategory::where('id',2)->first()->product()->limit(10)->get();
        $testimonials = Testimonial::all();
        $footerLinks = FooterLink::all();
        $socialLinks = SocialLink::all();
        $blogPosts = Blog::latest()->limit(3)->get();
        return view('frontend.home',compact('mainCategories',
            'banners','homePage','siteSetting','services','featuredProducts'
        ,'productSlider','testimonials','footerLinks','blogPosts','socialLinks'));
    }

    public function check($slug)
    {
        $mainCategories = MainCategory::with('categories')->get();
        $siteSetting = SiteSetting::first();
        $footerLinks = FooterLink::all();
        $socialLinks = SocialLink::all();


        $category = Category::where('slug',$slug)->first();
        if($category)
        {
            $categories  = Category::all();
            $productSlider = MainCategory::where('id',$category->main_category_id)->first()->product()->get();
            return view('frontend.category',compact('mainCategories','siteSetting',
            'footerLinks','socialLinks','category' ,'productSlider','categories'));
        }
        $product = Product::where('slug',$slug)->first();
        if($product)
        {
            $services = Service::all();
            $productSlider = Category::where('id',$product->category_id)->first()->products()->limit(10)->get();
            return view('frontend.product',compact('mainCategories','siteSetting',
                'footerLinks','socialLinks','product','productSlider','services'));
        }
        if($slug == 'blog')
        {
            $blogPosts = Blog::paginate(5);
            return view('frontend.blog',compact('mainCategories','siteSetting',
                'footerLinks','socialLinks','blogPosts'));
        }
        return  response()->view('frontend.errors.404',compact('mainCategories','siteSetting',
        'footerLinks','socialLinks'),404);
    }

    public function blogSingle($slug)
    {
        $mainCategories = MainCategory::with('categories')->get();
        $siteSetting = SiteSetting::first();
        $footerLinks = FooterLink::all();
        $socialLinks = SocialLink::all();
        $blogPosts = Blog::latest()->limit(6)->get();
        $post = Blog::where('slug',$slug)->first();
        return view('frontend.singlePost',compact('mainCategories','siteSetting',
            'footerLinks','socialLinks','post','blogPosts'));
    }

    public function faqs()
    {
        $siteSetting = SiteSetting::first();
        $mainCategories = MainCategory::with('categories')->get();
        $faqs = Faq::all();
        return view('frontend.faq',compact('siteSetting','mainCategories','faqs'));
    }

    public function customQuote()
    {
        $siteSetting = SiteSetting::first();
        $mainCategories = MainCategory::with('categories')->get();
        $products = Product::all();
        $socialLinks = SocialLink::all();
        return view('frontend.requestQoute',compact('siteSetting','mainCategories','products','socialLinks'));
    }

    public function showContact()
    {
        $siteSetting = SiteSetting::first();
        $mainCategories = MainCategory::with('categories')->get();
        $socialLinks = SocialLink::all();
        return view('frontend.contact',compact('siteSetting','mainCategories','socialLinks'));
    }
}
