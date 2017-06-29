<?php

namespace App\Http\Controllers;

use App\Headline;
use Illuminate\Http\Request;

class HeadlineController extends Controller
{
    
    public function index()
    {
    	$headlines = Headline::latest()->get();

    	return view('headlines.index')
    		->withHeadlines($headlines);
    }
}
