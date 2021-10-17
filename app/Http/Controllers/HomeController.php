<?php

namespace App\Http\Controllers;

use App\Models\Facebook;
use App\Models\Post;
use App\Models\Product;
use App\Models\Promo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $facebook = Facebook::latest()->paginate(2);
        $timeNow = Carbon::now()->toDateString();
        $posts = Post::with(['user', 'photo', 'postcategory'])->where('book', '<=', $timeNow)->latest()->limit(3)->get();
        $footer_posts = Post::with(['user', 'photo', 'postcategory'])->where('book', '<=', $timeNow)->latest()->limit(2)->get();
        return view('frontend.home', compact('posts', 'footer_posts', 'facebook'));
    }

}
