<?php

namespace App\Http\Controllers;

use App\Models\Agreement;
use App\Models\Applicant;
use App\Models\FAQ;
use App\Models\Order;
use App\Models\Post;
use App\Models\Product;
use App\Models\Prospect;
use App\Models\Reader;
use App\Models\Review;
use App\Models\User;
use App\Models\Vacature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminHomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $users = User::paginate(10);
        $prospects = Prospect::paginate(10);
        $posts = Post::paginate(10);
        $vacatures = Vacature::paginate(10);
        $applicants = Applicant::paginate(10);
        $agreements = Agreement::latest()->limit(1)->get();
        return view('admin.includes.admin' , compact('users', 'user', 'vacatures', 'posts', 'prospects', 'applicants', 'agreements'));
    }
}
