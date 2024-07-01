<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $title = '';
        $categories = Category::all()->sortBy('name');

        $postsQuery = Post::latest();

        // Filter by category
        if ($request->has('category')) {
            $category = Category::where('slug', $request->category)->first();
            if ($category) {
                $postsQuery->where('category_id', $category->id);
                $title .= ' in ' . $category->name;
            }
        }

        // Search for posts
        if ($request->filled('search')) {
            $searchTerm = $request->search;
            $postsQuery->where(function ($query) use ($searchTerm) {
                $query->where('title', 'like', '%' . $searchTerm . '%')
                    ->orWhere('excerpt', 'like', '%' . $searchTerm . '%')
                    ->orWhere('body', 'like', '%' . $searchTerm . '%');
            });
            $title .= ' containing "' . $searchTerm . '"';
        }

        $posts = $postsQuery->paginate(9)->withQueryString();

        return view('posts', [
            'title' => 'All Posts' . $title,
            'active' => 'posts',
            'posts' => $posts,
            'categories' => $categories,
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'title' => 'Single Post',
            'active' => 'posts',
            'post' => $post,
        ]);
    }
}
