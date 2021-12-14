<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RateLimiter\RequestRateLimiterInterface;

use function Symfony\Component\String\b;

class PostController extends Controller
{
    public function index() {

        $allPosts = Post::all();

        return view('posts', [
            "allPosts"=>$allPosts
        ]);
    }
    
    public function show($id) {
        $post = Post::where('id', $id) -> first();
        return view('post', ['post' => $post]);
    }

    public function create() {
        return view('create_post');
    }

    public function store() {

        $pureData = request() -> validate([
            'title' => 'required',
            'body' => 'required',
            'autor' => 'required'
        ]);

        $post  = new Post();
        $post -> create($pureData);

        return redirect(route('home')) -> with('created', 'Post Created');
    }

    public function edit(Post $post) {
        return view('edit_post', compact('post'));
    }

    public function update(Post $post) {
        $pureData = request() -> validate([
            'title' => 'required',
            'body' => 'required',
            'autor' => 'required'
        ]);

        $post -> update($pureData);

        return redirect('post/'. $post->id) -> with('updated', 'Post Updated');
    }

    public function delete(Post $post) {
        $post -> delete();

        return redirect('/') -> with('deleted', 'Post Deleted');
    }
}
