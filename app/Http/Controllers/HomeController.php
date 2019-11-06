<?php

namespace App\Http\Controllers;

use App\Http\Requests\productRequest;
use App\product;

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
        return view('home');
    }
    public function postIndex(productRequest $r){
        dd($r->all());
        $r['showhide']=1;
        $r['picture'] = '';
        $r['user_id'] = Auth::user()->id;
        $r['status'] = 'new';
        Product::create($r->all());
        return redirect()->back();
    }
}
