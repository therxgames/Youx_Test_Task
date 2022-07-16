<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Routing\Controller;


class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();

        return view('pages.news', compact('news'));
    }
}
