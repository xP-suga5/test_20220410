<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function home()
    {
        $items = Post::all();
        return view('home', ['items' => $items]);
    }

    public function add()
    {
        return view('index');
    }

    public function create(Request $request)
    {
        $form = $request->all();
        Post::create($form);
        return redirect('/thanks');
    }

    public function thanks()
    {
        return view('thanks');
    }

}
