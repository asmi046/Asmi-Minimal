<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Page;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index($slug) {

        $page = Page::where('slug', $slug)->first();

        if($page == null) abort('404');

        return view('page.page', ['page' => $page]);
    }
}
