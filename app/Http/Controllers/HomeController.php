<?php

namespace App\Http\Controllers;

use App\Tour;
use Illuminate\Http\Request;

class HomeController extends Controller
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
        return view('admin.home');
    }
    public function dashboard()
    {
        $tours = Tour::count();
        $onlySoftDeleted = Tour::onlyTrashed()->count();
        $toursd = Tour::where('relevant', '1')->count();
        return view('admin.dashboard.home',compact('tours','onlySoftDeleted','toursd'));
    }
}
