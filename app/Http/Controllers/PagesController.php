<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;
use App\Page;
use App\Http\Requests;

class PagesController extends Controller
{
    //
    
    public function index()
    {
        //$pages = DB::table('pages')->get();
        $pages = Page::all();
        return view('pages.index', compact('pages'));
    }
    
    public function showSingle($id)
    {
        $page = Page::find($id);
        //return $page; //returns json if returned without view
    
        return view('pages.showSingle', compact('page'));
    }
    
}
