<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $search = \request()->has('q') && \request()->input('q') !== '' ? \request()->input('q') : null;

        $posts = Post::query();
        if ($search !== '') {
            $posts = $posts->where('_id', $search)
                ->orWhere('title', 'like', '%'. $search .'%')
                ->orWhere('body', 'like', '%'. $search .'%');
        }
        $posts = $posts->paginate(10);
        return view('posts.index', compact('posts'));
    }
}
