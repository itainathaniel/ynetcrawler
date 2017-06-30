<?php

namespace App\Http\Controllers;

use App\Headline;
use Illuminate\Http\Request;

class HeadlineController extends Controller
{
    
    public function index()
    {
    	$headlines = Headline::latest()->paginate(50);

    	return view('headlines.index')
    		->withHeadlines($headlines);
    }
}
