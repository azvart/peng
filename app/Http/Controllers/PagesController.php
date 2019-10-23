<?php

namespace App\Http\Controllers;



class PagesController extends Controller
{
     public function getIndex($url = null){
		return view('static', compact('url'));
	}
}
