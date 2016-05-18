<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    //
    
    public function index()
    {
        $people = range("b", "s");
        return view('pages.index', compact('people'));
    }
}
