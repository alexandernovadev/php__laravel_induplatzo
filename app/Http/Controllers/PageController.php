<?php

namespace App\Http\Controllers;

use App\Page;
// use Illuminate\Http\Request; Esto ya no es ahora es <
use App\Http\Requests\PageRequest;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function store(PageRequest $request)
    {
        dd($request->all());
    }

    public function extends()
    {
        return view('app');
    }
 
}
