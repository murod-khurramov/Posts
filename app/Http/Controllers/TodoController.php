<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Post::all();
        return view('welcome', ['todos' => $todos]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable'
        ]);

        Post::create($validatedData);
        return redirect('/');
    }
}
