<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index()
    {
        $news = News::with('user', 'comments')
            ->latest()->orderBy('created_at', 'DESC')
            ->get();

        return view('news.index', compact('news'));
    }

    public function show($id)
    {
        $news=News::with('comments')->where('news_id', \request()->input('_id'))->first();
        $comments =  Comment::where('_id', $news->comment_id)->first();

//       return $news->comment_id;
        return view('news.show', compact('news', 'comments'));

    }
}
