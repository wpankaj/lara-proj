<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class PagesController extends Controller
{
    //
    
    public function index()
    {
        $pages = DB::table('pages')->get();
        return view('pages.index', compact('pages'));
    }
}
