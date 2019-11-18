<?php
namespace App\Http\Controllers;

use App\Http\Requests\productRequest;
use App\Category;
use App\product;
use Auth;
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
        $cats = Category::all();
        return view('home',compact('cats'));
    }
    public function postIndex(productRequest $r){
        
        $r['showhide']=1;
        $pic = \App::make('\App\Libs\Imag')->url($_FILES['picture1']['tmp_name']);
        if($pic){
            $r['picture'] = $pic;
        }else{
            $r['picture']='';
        }
        $r['user_id'] = Auth::user()->id;
        $r['status'] = 'new';
        Product::create($r->all());
        return redirect()->back();
    }
}
